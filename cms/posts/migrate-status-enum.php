<?php
/**
 * Rekintsu CMS — Migração: adiciona 'scheduled' ao ENUM status
 * e corrige posts com status vazio para 'scheduled'.
 * Acesse uma única vez. Apague após executar.
 */
define('CMS_DIR', dirname(__DIR__));
define('SITE_ROOT', dirname(dirname(__DIR__)));
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/core/db.php';

$pdo = db();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 1. Verifica definição atual da coluna status
$col = $pdo->query("SHOW COLUMNS FROM posts LIKE 'status'")->fetch();
echo '<b>Definição atual:</b> ' . htmlspecialchars($col['Type']) . '<br><br>';

// 2. Altera o ENUM para incluir 'scheduled'
try {
    $pdo->exec("ALTER TABLE posts MODIFY COLUMN status ENUM('draft','published','scheduled') NOT NULL DEFAULT 'draft'");
    echo '✅ ENUM alterado para: draft, published, scheduled<br><br>';
} catch (Exception $e) {
    echo '❌ Erro ao alterar ENUM: ' . $e->getMessage() . '<br><br>';
}

// 3. Corrige posts com status vazio ('' ou NULL) que têm scheduled_at preenchido
$stmt = $pdo->prepare(
    "UPDATE posts SET status = 'scheduled'
     WHERE (status = '' OR status IS NULL) AND scheduled_at IS NOT NULL"
);
$stmt->execute();
echo '✅ Posts corrigidos para status=scheduled: ' . $stmt->rowCount() . '<br><br>';

// 4. Confirma estado final
$rows = $pdo->query(
    "SELECT id, title, status, scheduled_at FROM posts ORDER BY id DESC LIMIT 10"
)->fetchAll();

echo '<table border="1" cellpadding="6" style="border-collapse:collapse;font-size:13px">';
echo '<tr><th>ID</th><th>Título</th><th>Status</th><th>scheduled_at</th></tr>';
foreach ($rows as $r) {
    echo "<tr>
        <td>{$r['id']}</td>
        <td>" . htmlspecialchars(mb_substr($r['title'], 0, 50)) . "</td>
        <td><b>{$r['status']}</b></td>
        <td>{$r['scheduled_at']}</td>
    </tr>";
}
echo '</table><br>';
echo 'Pode apagar este arquivo agora.';
