<?php
/**
 * Rekintsu CMS — Publicador automático de posts agendados + regenera sitemap
 *
 * Cron job (Hostinger):
 *   public_html/cms/posts/publish-scheduled.php
 *   Minuto: 0 | Hora: 7 | Dia/Mês/Semana: *
 */

define('CMS_DIR', dirname(__DIR__));
define('SITE_ROOT', dirname(dirname(__DIR__)));
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/core/db.php';

// Proteção por chave quando acessado via URL
$is_cli = php_sapi_name() === 'cli';

if (!$is_cli) {
    $secret = defined('CRON_SECRET') ? CRON_SECRET : '';
    $key    = $_GET['key'] ?? '';
    if ($secret === '' || $key !== $secret) {
        http_response_code(403);
        exit("Acesso negado.\n");
    }
}

$pdo = db();
$now = date('Y-m-d H:i:s');

// ── 1. Publica posts agendados ───────────────────────────────────────────────
$stmt = $pdo->prepare(
    "UPDATE posts
        SET status = 'published'
      WHERE status = 'scheduled'
        AND scheduled_at IS NOT NULL
        AND scheduled_at <= :now"
);
$stmt->execute([':now' => $now]);
$published = $stmt->rowCount();

$msg = "[{$now}] Posts publicados: {$published}\n";
echo $msg;

// ── 2. Regenera sitemap.xml ─────────────────────────────────────────────────
if ($published > 0) {
    $result = regenerate_sitemap($pdo);
    $msg2 = "[{$now}] Sitemap atualizado: {$result}\n";
    echo $msg2;
} else {
    $msg2 = '';
}

// ── 3. Log ──────────────────────────────────────────────────────────────────
$log_file = SITE_ROOT . '/cms/logs/cron-blog.log';
if (!is_dir(dirname($log_file))) {
    mkdir(dirname($log_file), 0755, true);
}
file_put_contents($log_file, $msg . $msg2, FILE_APPEND);

// ── Função: gera sitemap.xml ─────────────────────────────────────────────────
function regenerate_sitemap(PDO $pdo): string
{
    $domain = 'https://rekintsupilates.com.br';
    $today  = date('Y-m-d');

    // Páginas estáticas
    $static = [
        ['loc' => '/',                    'changefreq' => 'weekly',  'priority' => '1.0'],
        ['loc' => '/sobre-a-clinica',     'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => '/como-funciona',       'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => '/pilates-gestantes',   'changefreq' => 'monthly', 'priority' => '0.7'],
        ['loc' => '/pilates-hernias-lesoes', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['loc' => '/pilates-idosos',      'changefreq' => 'monthly', 'priority' => '0.7'],
        ['loc' => '/pilates-pos-cirurgico', 'changefreq' => 'monthly', 'priority' => '0.7'],
        ['loc' => '/blog',                'changefreq' => 'weekly',  'priority' => '0.8'],
    ];

    // Posts publicados do banco
    $posts = $pdo->query(
        "SELECT slug, scheduled_at, created_at
         FROM posts
         WHERE status = 'published'
         ORDER BY created_at DESC"
    )->fetchAll(PDO::FETCH_ASSOC);

    $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    $xml .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n\n";

    foreach ($static as $p) {
        $xml .= "    <url>\n";
        $xml .= "        <loc>{$domain}{$p['loc']}</loc>\n";
        $xml .= "        <lastmod>{$today}</lastmod>\n";
        $xml .= "        <changefreq>{$p['changefreq']}</changefreq>\n";
        $xml .= "        <priority>{$p['priority']}</priority>\n";
        $xml .= "    </url>\n\n";
    }

    foreach ($posts as $post) {
        $lastmod = $post['scheduled_at']
            ? date('Y-m-d', strtotime($post['scheduled_at']))
            : date('Y-m-d', strtotime($post['created_at']));
        $xml .= "    <url>\n";
        $xml .= "        <loc>{$domain}/blog/{$post['slug']}</loc>\n";
        $xml .= "        <lastmod>{$lastmod}</lastmod>\n";
        $xml .= "        <changefreq>monthly</changefreq>\n";
        $xml .= "        <priority>0.6</priority>\n";
        $xml .= "    </url>\n\n";
    }

    $xml .= "</urlset>\n";

    $sitemap_path = SITE_ROOT . '/sitemap.xml';
    $ok = file_put_contents($sitemap_path, $xml);

    return $ok !== false
        ? "OK ({$sitemap_path}, " . count($posts) . " posts)"
        : "ERRO ao gravar {$sitemap_path}";
}
