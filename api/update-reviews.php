<?php
/**
 * Scraper de Avaliações do Google
 * Rekintsu Pilates Clínico
 *
 * Uso via browser: https://seudominio.com/api/update-reviews.php
 * Uso via cron:    php /caminho/para/api/update-reviews.php
 *
 * Atualiza o arquivo site/data/reviews.json com as avaliações do Google.
 */

define('ROOT', dirname(__DIR__));
$output_file = ROOT . '/site/data/reviews.json';

// Chave de segurança — altere e passe como ?key=SUACHAVE na URL para evitar acesso público
$secret_key = 'rekintsu2024';
if (PHP_SAPI !== 'cli') {
    if (($_GET['key'] ?? '') !== $secret_key) {
        http_response_code(403);
        die('Acesso negado. Passe ?key=SUACHAVE na URL.');
    }
}

// ─── Busca avaliações via Google Search ────────────────────────────────────
function fetch_google_reviews(): ?array
{
    $search_query = urlencode('Rekintsu Pilates Clínico Curitiba');
    $url = "https://www.google.com/search?q={$search_query}&hl=pt-BR&gl=br&num=10";

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERAGENT      => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36',
        CURLOPT_HTTPHEADER     => [
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
            'Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7',
            'Accept-Encoding: identity',
        ],
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_TIMEOUT        => 20,
        CURLOPT_COOKIEJAR      => sys_get_temp_dir() . '/rekintsu_cookies.txt',
        CURLOPT_COOKIEFILE     => sys_get_temp_dir() . '/rekintsu_cookies.txt',
    ]);

    $html      = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if (!$html || $http_code !== 200) {
        return null;
    }

    $reviews = [];
    $rating  = null;
    $total   = null;

    // ── Extrai JSON-LD (structured data do Knowledge Panel) ──
    preg_match_all('/<script type="application\/ld\+json">(.*?)<\/script>/s', $html, $ld_matches);

    foreach ($ld_matches[1] as $raw) {
        $data = json_decode(html_entity_decode($raw, ENT_QUOTES | ENT_HTML5, 'UTF-8'), true);
        if (!$data) continue;

        $items = isset($data['@graph']) ? $data['@graph'] : [$data];
        foreach ($items as $item) {
            // Rating agregado
            if (isset($item['aggregateRating'])) {
                $ar     = $item['aggregateRating'];
                $rating = $ar['ratingValue'] ?? $rating;
                $total  = $ar['reviewCount'] ?? $ar['ratingCount'] ?? $total;
            }
            // Reviews individuais
            if (!empty($item['review'])) {
                foreach ((array) $item['review'] as $r) {
                    $author_name = '';
                    if (is_array($r['author'] ?? null)) {
                        $author_name = $r['author']['name'] ?? '';
                    } elseif (is_string($r['author'] ?? null)) {
                        $author_name = $r['author'];
                    }

                    $text = $r['reviewBody'] ?? $r['description'] ?? '';
                    if (!$text) continue;

                    $reviews[] = [
                        'author' => $author_name ?: 'Paciente',
                        'avatar' => strtoupper(mb_substr($author_name ?: 'P', 0, 1)),
                        'rating' => (int) ($r['reviewRating']['ratingValue'] ?? 5),
                        'text'   => $text,
                        'date'   => $r['datePublished'] ?? '',
                    ];
                }
            }
        }
    }

    // ── Fallback: extrai snippets de avaliação do HTML ──────────────────
    if (empty($reviews)) {
        // Padrão que aparece no Knowledge Panel do Google em pt-BR
        preg_match_all('/"([^"]{40,500})"\s*—\s*([A-ZÀ-ÿ][^\n"]{2,40})/u', $html, $snippet_matches);
        foreach ($snippet_matches[1] as $i => $text) {
            $author    = trim($snippet_matches[2][$i] ?? 'Paciente');
            $reviews[] = [
                'author' => $author,
                'avatar' => strtoupper(mb_substr($author, 0, 1)),
                'rating' => 5,
                'text'   => $text,
                'date'   => '',
            ];
        }
    }

    // Remove duplicatas pelo texto
    $seen    = [];
    $unique  = [];
    foreach ($reviews as $r) {
        $key = md5($r['text']);
        if (!isset($seen[$key])) {
            $seen[$key] = true;
            $unique[]   = $r;
        }
    }

    return [
        'place_name'    => 'Rekintsu Pilates Clínico',
        'rating'        => $rating ? (float) $rating : null,
        'total_ratings' => $total  ? (int)   $total  : null,
        'last_updated'  => date('c'),
        'source'        => 'Google',
        'reviews'       => $unique,
    ];
}

// ─── Executa e salva ────────────────────────────────────────────────────────
$data    = fetch_google_reviews();
$success = $data && !empty($data['reviews']);

if ($success) {
    file_put_contents($output_file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    $msg = '✅ ' . count($data['reviews']) . ' avaliações salvas em ' . $output_file;
} else {
    // Mantém cache existente; apenas atualiza o timestamp de tentativa
    if (file_exists($output_file)) {
        $existing                  = json_decode(file_get_contents($output_file), true);
        $existing['last_attempt']  = date('c');
        file_put_contents($output_file, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
    $msg = '⚠️  Não foi possível extrair avaliações do Google. Cache existente mantido.';
}

// Resposta
if (PHP_SAPI === 'cli') {
    echo $msg . "\n";
} else {
    header('Content-Type: text/plain; charset=utf-8');
    echo $msg . "\n";
    if ($success) {
        echo "\nAvaliações encontradas:\n";
        foreach ($data['reviews'] as $i => $r) {
            echo ($i + 1) . ". {$r['author']}: " . mb_substr($r['text'], 0, 80) . "...\n";
        }
    }
}
