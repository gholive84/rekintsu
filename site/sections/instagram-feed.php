<?php
/**
 * Instagram Feed Section
 * Busca os últimos 8 posts via Instagram Graph API com cache de 1 hora.
 * Requer: setting('instagram_access_token') configurado no CMS → Configurações.
 */

$_insta_posts     = [];
$_insta_cache     = ROOT . '/site/assets/instagram-cache.json';
$_insta_cache_ttl = 3600; // 1 hora

// 1. Tenta carregar do cache
if (file_exists($_insta_cache) && (time() - filemtime($_insta_cache)) < $_insta_cache_ttl) {
    $cached = json_decode(file_get_contents($_insta_cache), true);
    if (!empty($cached)) {
        $_insta_posts = $cached;
    }
}

// 2. Se cache vazio ou expirado, busca da API
if (empty($_insta_posts)) {
    $token = '';
    try {
        if (!function_exists('db')) {
            $boot = ROOT . '/cms/boot.php';
            if (file_exists($boot)) require_once $boot;
        }
        if (function_exists('setting')) {
            $token = setting('instagram_access_token');
        }
    } catch (Exception $e) {}

    if ($token) {
        $fields = 'id,media_type,media_url,thumbnail_url,permalink,caption,timestamp';
        $api_url = "https://graph.instagram.com/me/media?fields={$fields}&limit=12&access_token=" . urlencode($token);
        $ctx  = stream_context_create(['http' => ['timeout' => 6, 'ignore_errors' => true]]);
        $raw  = @file_get_contents($api_url, false, $ctx);

        if ($raw) {
            $data = json_decode($raw, true);
            if (!empty($data['data'])) {
                // Filtra apenas imagens e álbuns (exclui REELS sem thumbnail)
                $posts = array_values(array_filter($data['data'], function ($p) {
                    return in_array($p['media_type'] ?? '', ['IMAGE', 'CAROUSEL_ALBUM'])
                        || (!empty($p['thumbnail_url']) && ($p['media_type'] ?? '') === 'VIDEO');
                }));
                $_insta_posts = array_slice($posts, 0, 8);
                @file_put_contents($_insta_cache, json_encode($_insta_posts));
            }
        }
    }
}

if (empty($_insta_posts)) return;
?>

<section class="insta-feed" id="instagram">
    <div class="container">

        <div class="section-header fade-up">
            <span class="label">Instagram</span>
            <h2 class="section-title">Acompanhe no <span class="text--accent">Instagram</span></h2>
            <p class="section-subtitle">Dicas de pilates, novidades da clínica e muito mais. Siga <strong>@rekintsu_pilates</strong> e fique por dentro.</p>
        </div>

        <div class="insta-feed__grid fade-up">
            <?php foreach ($_insta_posts as $post):
                $img_url    = $post['thumbnail_url'] ?? $post['media_url'] ?? '';
                $permalink  = $post['permalink'] ?? 'https://instagram.com/rekintsu_pilates';
                $caption    = $post['caption'] ?? '';
                $short_cap  = mb_strlen($caption) > 90
                    ? mb_substr($caption, 0, 90, 'UTF-8') . '…'
                    : $caption;
            ?>
            <a href="<?= htmlspecialchars($permalink) ?>" target="_blank" rel="noopener noreferrer"
               class="insta-feed__item" aria-label="Ver post no Instagram<?= $short_cap ? ': ' . htmlspecialchars($short_cap) : '' ?>">
                <div class="insta-feed__img-wrap">
                    <img src="<?= htmlspecialchars($img_url) ?>"
                         alt="<?= htmlspecialchars($short_cap ?: 'Post rekintsu_pilates no Instagram') ?>"
                         loading="lazy"
                         class="insta-feed__img">
                    <div class="insta-feed__overlay">
                        <?php if ($short_cap): ?>
                        <p class="insta-feed__caption"><?= htmlspecialchars($short_cap) ?></p>
                        <?php endif; ?>
                        <span class="insta-feed__view">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                <circle cx="12" cy="12" r="4"/>
                                <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
                            </svg>
                            Ver post
                        </span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

        <div class="insta-feed__footer fade-up">
            <a href="https://instagram.com/rekintsu_pilates" target="_blank" rel="noopener noreferrer"
               class="btn btn--insta btn--lg">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                    <circle cx="12" cy="12" r="4"/>
                    <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
                </svg>
                Seguir @rekintsu_pilates
            </a>
        </div>

    </div>
</section>
