<?php
/**
 * Rekintsu — Corrige status dos posts agendados
 * Acesse /cms/posts/fix-scheduled-status.php UMA VEZ.
 * Apague após executar.
 */
define('CMS_DIR', dirname(__DIR__));
define('SITE_ROOT', dirname(dirname(__DIR__)));
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/core/db.php';
require_once dirname(__DIR__) . '/core/auth.php';
if (session_status() === PHP_SESSION_NONE) session_start();
auth_check();
if (!auth_is_admin()) die('Acesso negado.');

$pdo = db();
$log = [];

try {
    $stmt = $pdo->prepare(
        "UPDATE posts
         SET    scheduled_at = created_at,
                status       = 'scheduled'
         WHERE  status       = 'published'
           AND  created_at   > NOW()"
    );
    $stmt->execute();
    $count = $stmt->rowCount();
    $log[] = ['ok', $count . ' post(s) alterado(s) para scheduled.'];
} catch (Exception $e) {
    $log[] = ['err', $e->getMessage()];
}

// Lista todos os posts para conferência
$posts = $pdo->query(
    "SELECT id, title, status, scheduled_at, created_at FROM posts ORDER BY created_at ASC"
)->fetchAll();
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Fix Scheduled Status — Rekintsu</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
<style>
  body { font-family: Inter, sans-serif; background: #070d18; color: #e2e8f0; margin: 0; padding: 32px; }
  .card { background: #111827; border: 1px solid rgba(255,255,255,.07); border-radius: 12px; padding: 28px; max-width: 780px; margin: 0 auto 24px; }
  h2 { color: #fff; margin: 0 0 16px; font-size: 1.2rem; }
  .item { padding: 8px 0; border-bottom: 1px solid rgba(255,255,255,.05); font-size: .875rem; }
  .ok  { color: #22c55e; }
  .err { color: #ef4444; }
  table { width: 100%; border-collapse: collapse; font-size: .8rem; }
  th { text-align: left; color: #94a3b8; padding: 6px 8px; border-bottom: 1px solid rgba(255,255,255,.08); }
  td { padding: 6px 8px; border-bottom: 1px solid rgba(255,255,255,.04); }
  .badge { display: inline-block; padding: 2px 8px; border-radius: 4px; font-size: .7rem; font-weight: 600; }
  .badge--published  { background: rgba(34,197,94,.15);  color: #22c55e; }
  .badge--scheduled  { background: rgba(234,179,8,.15);  color: #eab308; }
  .badge--draft      { background: rgba(100,116,139,.15); color: #94a3b8; }
  a { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #DBA159; color: #1A1A1A; border-radius: 6px; text-decoration: none; font-weight: 600; }
  .warn { margin-top: 16px; font-size: .75rem; color: #f59e0b; }
</style>
</head>
<body>
<div class="card">
  <h2>Fix: Status dos Posts Agendados</h2>
  <?php foreach ($log as [$t, $m]): ?>
  <div class="item <?= $t ?>"><?= $t === 'ok' ? '✓' : '✗' ?> <?= htmlspecialchars($m) ?></div>
  <?php endforeach; ?>
  <a href="<?= CMS_URL ?>/">← Voltar ao CMS</a>
  <p class="warn">⚠ Apague este arquivo após executar: <code>cms/posts/fix-scheduled-status.php</code></p>
</div>

<div class="card">
  <h2>Todos os posts (conferência)</h2>
  <table>
    <thead>
      <tr><th>#</th><th>Título</th><th>Status</th><th>scheduled_at</th><th>created_at</th></tr>
    </thead>
    <tbody>
      <?php foreach ($posts as $p): ?>
      <tr>
        <td><?= $p['id'] ?></td>
        <td><?= htmlspecialchars($p['title']) ?></td>
        <td><span class="badge badge--<?= $p['status'] ?>"><?= $p['status'] ?></span></td>
        <td><?= $p['scheduled_at'] ?? '—' ?></td>
        <td><?= $p['created_at'] ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body>
</html>
