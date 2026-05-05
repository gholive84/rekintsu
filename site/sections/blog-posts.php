<?php
// Busca os 3 posts mais recentes publicados
$_blog_posts = [];
try {
    if (!function_exists('db')) {
        $boot = ROOT . '/cms/boot.php';
        if (file_exists($boot)) require_once $boot;
    }
    if (function_exists('db')) {
        $stmt = db()->query(
            "SELECT title, slug, excerpt, image_url, category, read_time, created_at
             FROM posts WHERE status='published' AND created_at <= NOW() ORDER BY created_at DESC LIMIT 3"
        );
        $_blog_posts = $stmt->fetchAll();
    }
} catch (Exception $e) {}

if (empty($_blog_posts)) return;
?>

<section class="blog-home" id="blog">
    <div class="container">

        <div class="section-header fade-up">
            <span class="label">Blog</span>
            <h2 class="section-title">Artigos sobre <span class="text--accent">pilates e saúde</span></h2>
            <p class="section-subtitle">Conteúdo escrito pela fisioterapeuta Hayla Gomes para ajudar você a entender melhor o seu tratamento.</p>
        </div>

        <div class="blog-home__grid fade-up">
            <?php foreach ($_blog_posts as $i => $p): ?>
            <a href="/blog/<?= htmlspecialchars($p['slug']) ?>" class="blog-home__card <?= $i === 0 ? 'blog-home__card--featured' : '' ?>">
                <div class="blog-home__card-img">
                    <?php if ($p['image_url']): ?>
                    <img src="<?= htmlspecialchars($p['image_url']) ?>" alt="<?= htmlspecialchars($p['title']) ?>" loading="lazy">
                    <?php endif; ?>
                    <?php if ($p['category']): ?>
                    <span class="blog-card__category"><?= htmlspecialchars($p['category']) ?></span>
                    <?php endif; ?>
                </div>
                <div class="blog-home__card-body">
                    <h3 class="blog-home__card-title"><?= htmlspecialchars($p['title']) ?></h3>
                    <?php if ($p['excerpt'] && $i === 0): ?>
                    <p class="blog-home__card-excerpt"><?= htmlspecialchars($p['excerpt']) ?></p>
                    <?php endif; ?>
                    <div class="blog-home__card-meta">
                        <?php if ($p['read_time']): ?>
                        <span>
                            <svg width="13" height="13" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            <?= htmlspecialchars($p['read_time']) ?>
                        </span>
                        <?php endif; ?>
                        <span class="blog-home__card-link">Ler artigo →</span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <div class="blog-home__footer fade-up">
            <a href="/blog" class="btn btn--accent btn--lg">
                Ver todos os artigos
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>

    </div>
</section>
