<?php
/**
 * Rekintsu CMS — Migração: adiciona coluna scheduled_at na tabela posts
 * Acesse /cms/posts/migrate-scheduled.php uma única vez.
 * Apague este arquivo após executar.
 */
define('CMS_DIR', dirname(__DIR__));
define('SITE_ROOT', dirname(dirname(__DIR__)));
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/core/db.php';

$pdo = db();

// Verifica se a coluna já existe
$cols = $pdo->query("SHOW COLUMNS FROM posts LIKE 'scheduled_at'")->fetchAll();

if (empty($cols)) {
    $pdo->exec("ALTER TABLE posts ADD COLUMN scheduled_at DATETIME NULL DEFAULT NULL AFTER status");
    echo "✅ Coluna <code>scheduled_at</code> adicionada com sucesso.<br>";
} else {
    echo "ℹ️ Coluna <code>scheduled_at</code> já existe. Nenhuma alteração feita.<br>";
}

echo "<br>Pode apagar este arquivo agora.";
