<?php
/**
 * Debug — mostra estado atual dos posts agendados
 * Apague após usar.
 */
define('CMS_DIR', dirname(__DIR__));
define('SITE_ROOT', dirname(dirname(__DIR__)));
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/core/db.php';

$pdo = db();

$now = date('Y-m-d H:i:s');
echo "<b>Hora do servidor PHP:</b> {$now}<br><br>";

$rows = $pdo->query(
    "SELECT id, title, status, scheduled_at, created_at
     FROM posts
     ORDER BY created_at DESC
     LIMIT 15"
)->fetchAll();

echo '<table border="1" cellpadding="6" style="border-collapse:collapse;font-size:13px">';
echo '<tr><th>ID</th><th>Título</th><th>Status</th><th>scheduled_at</th><th>Publicar?</th></tr>';
foreach ($rows as $r) {
    $pub = ($r['status'] === 'scheduled' && $r['scheduled_at'] && $r['scheduled_at'] <= $now)
        ? '<span style="color:green">✅ SIM</span>'
        : '<span style="color:gray">—</span>';
    echo "<tr>
        <td>{$r['id']}</td>
        <td>" . htmlspecialchars($r['title']) . "</td>
        <td>{$r['status']}</td>
        <td>{$r['scheduled_at']}</td>
        <td>{$pub}</td>
    </tr>";
}
echo '</table>';
