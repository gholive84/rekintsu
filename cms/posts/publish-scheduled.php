<?php
/**
 * Rekintsu CMS — Publicador automático de posts agendados
 *
 * Rode via cron job uma vez por dia:
 *   0 7 * * * php /var/www/html/cms/posts/publish-scheduled.php >> /var/log/rekintsu-blog.log 2>&1
 *
 * Ou via URL com chave secreta (configure CRON_SECRET em config.php):
 *   0 7 * * * curl -s "https://rekintsupilates.com.br/cms/posts/publish-scheduled.php?key=SUA_CHAVE"
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
        exit("Acesso negado. Configure CRON_SECRET em config.php e passe ?key=SUA_CHAVE\n");
    }
}

$pdo = db();
$now = date('Y-m-d H:i:s');

$stmt = $pdo->prepare(
    "UPDATE posts
        SET status = 'published'
      WHERE status = 'scheduled'
        AND scheduled_at IS NOT NULL
        AND scheduled_at <= :now"
);
$stmt->execute([':now' => $now]);
$published = $stmt->rowCount();

$msg = "[{$now}] Posts publicados automaticamente: {$published}\n";
echo $msg;

// Log simples em arquivo (opcional)
$log_file = SITE_ROOT . '/cms/logs/cron-blog.log';
if (!is_dir(dirname($log_file))) {
    mkdir(dirname($log_file), 0755, true);
}
file_put_contents($log_file, $msg, FILE_APPEND);
