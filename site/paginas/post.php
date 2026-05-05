<?php
// ── Conexão com banco ──
$pdo = null;
try {
    if (!function_exists('db')) {
        $boot = $_SERVER['DOCUMENT_ROOT'] . '/cms/boot.php';
        if (file_exists($boot)) require_once $boot;
    }
    if (function_exists('db')) $pdo = db();
} catch (Exception $e) {}

$slug = trim($_GET['slug'] ?? '');
$post = null;

if ($pdo && $slug) {
    $stmt = $pdo->prepare("SELECT * FROM posts WHERE slug=? AND status='published' AND created_at <= NOW() LIMIT 1");
    $stmt->execute([$slug]);
    $post = $stmt->fetch();
}

// 404 se não encontrado
if (!$post) {
    http_response_code(404);
    $page_title       = 'Post não encontrado — Rekintsu';
    $page_description = 'Este artigo não foi encontrado.';
    include dirname(__DIR__) . '/includes/head-page.php';
    include dirname(__DIR__) . '/includes/header.php';
    echo '<main style="min-height:60vh;display:flex;align-items:center;justify-content:center;padding-top:120px">
            <div style="text-align:center">
                <p style="font-size:5rem;font-weight:800;color:#E2E8F0">404</p>
                <p style="color:#64748B;margin:16px 0 32px">Artigo não encontrado.</p>
                <a href="/blog" class="btn btn--gradient">← Voltar ao Blog</a>
            </div>
          </main>';
    include dirname(__DIR__) . '/includes/footer.php';
    exit;
}

$page_title       = htmlspecialchars($post['title']) . ' — Rekintsu';
$page_description = htmlspecialchars($post['excerpt'] ?? strip_tags(substr($post['content'] ?? '', 0, 155)));
include dirname(__DIR__) . '/includes/head-page.php';
include dirname(__DIR__) . '/includes/header.php';

// Posts relacionados (mesma categoria, exceto o atual)
$related = [];
if ($pdo && $post['category_slug']) {
    $stmt = $pdo->prepare(
        "SELECT id, title, slug, image_url, category, read_time, created_at
         FROM posts WHERE status='published' AND created_at <= NOW() AND category_slug=? AND id != ? ORDER BY created_at DESC LIMIT 3"
    );
    $stmt->execute([$post['category_slug'], $post['id']]);
    $related = $stmt->fetchAll();
}
?>

<main>

    <!-- HERO DO POST -->
    <section class="post-hero">
        <?php if ($post['image_url']): ?>
        <div class="post-hero__bg">
            <img src="<?= htmlspecialchars($post['image_url']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="post-hero__img">
            <div class="post-hero__overlay"></div>
        </div>
        <?php else: ?>
        <div class="post-hero__bg post-hero__bg--plain"></div>
        <?php endif; ?>

        <div class="container post-hero__content">
            <a href="/blog" class="page-hero__back">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 12H5M12 5l-7 7 7 7"/></svg>
                Voltar ao Blog
            </a>
            <?php if ($post['category']): ?>
            <span class="label"><?= htmlspecialchars($post['category']) ?></span>
            <?php endif; ?>
            <h1 class="post-hero__title"><?= htmlspecialchars($post['title']) ?></h1>
            <div class="post-hero__meta">
                <?php if ($post['read_time']): ?>
                <span>
                    <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    <?= htmlspecialchars($post['read_time']) ?>
                </span>
                <?php endif; ?>
                <span>
                    <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    <?= date('d \d\e F \d\e Y', strtotime($post['created_at'])) ?>
                </span>
                <span>
                    <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    Hayla Gomes — Fisioterapeuta
                </span>
            </div>
        </div>
    </section>

    <!-- CONTEÚDO -->
    <section class="post-body-section">
        <div class="container">
            <div class="post-layout">

                <article class="post-content">
                    <?= $post['content'] ?>
                </article>

                <!-- Sidebar -->
                <aside class="post-sidebar">
                    <div class="post-sidebar__card">
                        <div class="post-sidebar__avatar">H</div>
                        <strong class="post-sidebar__name">Hayla Gomes</strong>
                        <span class="post-sidebar__role">Fisioterapeuta</span>
                        <p class="post-sidebar__bio">Especialista em Pilates Clínico e Reabilitação, com mais de 13 anos de experiência em Curitiba.</p>
                        <a href="https://wa.me/5541991191501?text=Olá! Gostaria de agendar uma avaliação na Rekintsu."
                           class="btn btn--gradient" target="_blank" rel="noopener" style="width:100%;justify-content:center">
                            Agendar Avaliação
                        </a>
                    </div>

                    <?php if (!empty($related)): ?>
                    <div class="post-sidebar__card post-sidebar__related" style="margin-top:16px">
                        <p class="post-sidebar__section-label">Artigos relacionados</p>
                        <?php foreach ($related as $r): ?>
                        <a href="/blog/<?= htmlspecialchars($r['slug']) ?>" class="post-sidebar__related-item">
                            <?php if ($r['image_url']): ?>
                            <div class="post-sidebar__related-img">
                                <img src="<?= htmlspecialchars($r['image_url']) ?>" alt="<?= htmlspecialchars($r['title']) ?>" loading="lazy">
                            </div>
                            <?php endif; ?>
                            <div class="post-sidebar__related-body">
                                <?php if ($r['category']): ?>
                                <span class="post-sidebar__related-cat"><?= htmlspecialchars($r['category']) ?></span>
                                <?php endif; ?>
                                <p class="post-sidebar__related-title"><?= htmlspecialchars($r['title']) ?></p>
                            </div>
                        </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </aside>

            </div>
        </div>
    </section>


    <!-- CTA -->
    <section class="page-cta">
        <div class="container page-cta__inner">
            <h2 class="page-cta__title">Quer saber se esse tratamento é para você?</h2>
            <p class="page-cta__text">Agende uma avaliação inicial e receba orientação personalizada da fisioterapeuta Hayla Gomes.</p>
            <a href="https://wa.me/5541991191501?text=Olá! Gostaria de agendar uma avaliação na Rekintsu."
               class="btn btn--gradient btn--lg" target="_blank" rel="noopener">
                Agendar via WhatsApp
            </a>
        </div>
    </section>

</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
