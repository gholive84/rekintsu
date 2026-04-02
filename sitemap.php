<?php
/**
 * Sitemap dinâmico — Rekintsu Pilates Clínico
 * Gerado automaticamente a partir do banco de dados.
 * Servido como /sitemap.xml via .htaccess
 */

header('Content-Type: application/xml; charset=UTF-8');

// Conexão com banco
$pdo = null;
try {
    $boot = $_SERVER['DOCUMENT_ROOT'] . '/cms/boot.php';
    if (file_exists($boot)) require_once $boot;
    if (function_exists('db')) $pdo = db();
} catch (Exception $e) {}

// Páginas estáticas
$static_pages = [
    ['loc' => '/',                                      'priority' => '1.0', 'changefreq' => 'weekly'],
    ['loc' => '/blog',                                  'priority' => '0.8', 'changefreq' => 'weekly'],
    ['loc' => '/especialidades',                        'priority' => '0.9', 'changefreq' => 'monthly'],
    ['loc' => '/especialidades/pilates-gestantes',      'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/especialidades/pilates-idosos',         'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/especialidades/pilates-pos-cirurgico',  'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/especialidades/pilates-hernias-lesoes', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/sobre-a-clinica',                       'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/como-funciona',                         'priority' => '0.7', 'changefreq' => 'monthly'],
];

// Posts publicados do banco
$posts = [];
if ($pdo) {
    $stmt = $pdo->query("SELECT slug, updated_at, created_at FROM posts WHERE status='published' ORDER BY created_at DESC");
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$base_url = 'https://rekintsupilates.com.br';
$today    = date('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    <!-- Páginas estáticas -->
<?php foreach ($static_pages as $page): ?>
    <url>
        <loc><?= $base_url . $page['loc'] ?></loc>
        <lastmod><?= $today ?></lastmod>
        <changefreq><?= $page['changefreq'] ?></changefreq>
        <priority><?= $page['priority'] ?></priority>
    </url>
<?php endforeach; ?>

    <!-- Posts do Blog (gerados dinamicamente) -->
<?php foreach ($posts as $post): ?>
    <url>
        <loc><?= $base_url ?>/blog/<?= htmlspecialchars($post['slug'], ENT_XML1) ?></loc>
        <lastmod><?= date('Y-m-d', strtotime($post['updated_at'] ?? $post['created_at'])) ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>
<?php endforeach; ?>

</urlset>
