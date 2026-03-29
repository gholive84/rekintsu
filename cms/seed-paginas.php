<?php
/**
 * Rekintsu CMS — Seed de Páginas
 * Acesse /cms/seed-paginas.php uma única vez para registrar as páginas no CMS.
 * Apague este arquivo após executar.
 */
define('CMS_DIR', __DIR__);
define('SITE_ROOT', dirname(__DIR__));
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/core/db.php';

$pdo = db();

$pages = [
    ['Home',                    '/',                        '/',                        SITE_ROOT . '/index.php'],
    ['Sobre a Clínica',         '/sobre-a-clinica',         '/sobre-a-clinica',         SITE_ROOT . '/site/paginas/sobre-a-clinica.php'],
    ['Como Funciona',           '/como-funciona',           '/como-funciona',           SITE_ROOT . '/site/paginas/como-funciona.php'],
    ['Pilates para Gestantes',  '/pilates-gestantes',       '/pilates-gestantes',       SITE_ROOT . '/site/paginas/pilates-gestantes.php'],
    ['Pilates para Hérnias',    '/pilates-hernias-lesoes',  '/pilates-hernias-lesoes',  SITE_ROOT . '/site/paginas/pilates-hernias-lesoes.php'],
    ['Pilates para Idosos',     '/pilates-idosos',          '/pilates-idosos',          SITE_ROOT . '/site/paginas/pilates-idosos.php'],
    ['Pilates Pós-Cirúrgico',   '/pilates-pos-cirurgico',   '/pilates-pos-cirurgico',   SITE_ROOT . '/site/paginas/pilates-pos-cirurgico.php'],
    ['Guideline',               '/guideline',               '/guideline',               SITE_ROOT . '/site/paginas/guideline.php'],
];

$ins = $pdo->prepare(
    'INSERT IGNORE INTO paginas (title, slug, url, file_path, status)
     VALUES (?, ?, ?, ?, ?)'
);

$inserted = 0;
$skipped  = 0;

foreach ($pages as [$title, $slug, $url, $file]) {
    $ins->execute([$title, $slug, $url, $file, 'active']);
    if ($ins->rowCount() > 0) {
        $inserted++;
        echo "✅ Inserida: <strong>{$title}</strong><br>";
    } else {
        $skipped++;
        echo "⏭️ Já existe: <strong>{$title}</strong><br>";
    }
}

echo "<hr><strong>{$inserted} inseridas, {$skipped} ignoradas.</strong>";
echo "<br><br><strong style='color:red'>Apague este arquivo agora: /cms/seed-paginas.php</strong>";
