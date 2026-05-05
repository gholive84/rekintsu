<?php
$page_title       = 'Blog — Rekintsu Pilates Clínico';
$page_description = 'Artigos sobre pilates clínico, reabilitação, gestação, hérnias e bem-estar. Conteúdo da fisioterapeuta Hayla Gomes.';
include dirname(__DIR__) . '/includes/head-page.php';
include dirname(__DIR__) . '/includes/header.php';

// ── Conexão com banco ──
$pdo = null;
try {
    if (!function_exists('db')) {
        $boot = $_SERVER['DOCUMENT_ROOT'] . '/cms/boot.php';
        if (file_exists($boot)) require_once $boot;
    }
    if (function_exists('db')) $pdo = db();
} catch (Exception $e) {}

$categoria_slug = $_GET['categoria'] ?? '';
$posts      = [];
$categories = [];

if ($pdo) {
    $categories = $pdo->query(
        "SELECT DISTINCT category, category_slug FROM posts WHERE status='published' AND created_at <= NOW() AND category IS NOT NULL ORDER BY category"
    )->fetchAll();

    if ($categoria_slug) {
        $stmt = $pdo->prepare("SELECT * FROM posts WHERE status='published' AND created_at <= NOW() AND category_slug=? ORDER BY created_at DESC");
        $stmt->execute([$categoria_slug]);
    } else {
        $stmt = $pdo->query("SELECT * FROM posts WHERE status='published' AND created_at <= NOW() ORDER BY created_at DESC");
    }
    $posts = $stmt->fetchAll();
}

$categoria_label = '';
foreach ($categories as $c) {
    if ($c['category_slug'] === $categoria_slug) { $categoria_label = $c['category']; break; }
}
?>

<main>

    <!-- HERO -->
    <section class="page-hero page-hero--blog">
        <div class="page-hero__bg"></div>
        <div class="container page-hero__content">
            <span class="label">Conteúdo</span>
            <h1 class="page-hero__title">Blog <span class="text--gradient">Rekintsu</span></h1>
            <p class="page-hero__subtitle">Artigos sobre pilates clínico, reabilitação e bem-estar — escritos por quem pratica.</p>
        </div>
    </section>

    <!-- POSTS -->
    <section class="page-section page-section--mint">
        <div class="container">

            <!-- Filtros de categoria -->
            <?php if (!empty($categories)): ?>
            <div class="blog-filters fade-up">
                <a href="/blog" class="blog-filter <?= $categoria_slug === '' ? 'blog-filter--active' : '' ?>">
                    Todos
                </a>
                <?php foreach ($categories as $cat): ?>
                <a href="/blog?categoria=<?= htmlspecialchars($cat['category_slug']) ?>"
                   class="blog-filter <?= $cat['category_slug'] === $categoria_slug ? 'blog-filter--active' : '' ?>">
                    <?= htmlspecialchars($cat['category']) ?>
                </a>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <!-- Grid de posts -->
            <?php if (!empty($posts)): ?>
            <div class="blog-grid fade-up">
                <?php foreach ($posts as $post): ?>
                <a href="/blog/<?= htmlspecialchars($post['slug']) ?>" class="blog-card">
                    <div class="blog-card__image">
                        <?php if ($post['image_url']): ?>
                        <img src="<?= htmlspecialchars($post['image_url']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" loading="lazy">
                        <?php else: ?>
                        <div class="blog-card__image-placeholder">
                            <svg width="40" height="40" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                        </div>
                        <?php endif; ?>
                        <?php if ($post['category']): ?>
                        <span class="blog-card__category"><?= htmlspecialchars($post['category']) ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="blog-card__body">
                        <h2 class="blog-card__title"><?= htmlspecialchars($post['title']) ?></h2>
                        <?php if ($post['excerpt']): ?>
                        <p class="blog-card__excerpt"><?= htmlspecialchars($post['excerpt']) ?></p>
                        <?php endif; ?>
                        <div class="blog-card__meta">
                            <?php if ($post['read_time']): ?>
                            <span>
                                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                <?= htmlspecialchars($post['read_time']) ?>
                            </span>
                            <?php endif; ?>
                            <span>
                                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                <?= date('d/m/Y', strtotime($post['created_at'])) ?>
                            </span>
                            <span class="blog-card__readmore">Ler artigo →</span>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>

            <?php elseif ($pdo): ?>
            <div class="blog-empty">
                <svg width="48" height="48" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                <p>Nenhum post encontrado<?= $categoria_label ? " em <strong>{$categoria_label}</strong>" : '' ?>.</p>
                <?php if ($categoria_slug): ?>
                <a href="/blog" class="btn btn--accent">Ver todos os artigos</a>
                <?php endif; ?>
            </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- CTA -->
    <section class="page-cta">
        <div class="container page-cta__inner">
            <h2 class="page-cta__title">Pronto para começar o seu tratamento?</h2>
            <p class="page-cta__text">Agende uma avaliação inicial e receba um plano personalizado para a sua condição.</p>
            <a href="https://wa.me/5541991191501?text=Olá! Gostaria de agendar uma avaliação na Rekintsu."
               class="btn btn--gradient btn--lg" target="_blank" rel="noopener">
                Agendar via WhatsApp
            </a>
        </div>
    </section>

</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
