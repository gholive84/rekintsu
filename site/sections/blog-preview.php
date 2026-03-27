<?php
$reviews_file = dirname(__DIR__) . '/data/reviews.json';
$cache        = file_exists($reviews_file)
    ? (json_decode(file_get_contents($reviews_file), true) ?? [])
    : [];

$reviews    = $cache['reviews']    ?? [];
$avg_rating = $cache['rating']     ?? 5.0;
$total      = $cache['total_ratings'] ?? count($reviews);
$stars_full = (int) round((float) $avg_rating);

function render_stars(int $count): string {
    return str_repeat('★', min($count, 5)) . str_repeat('☆', max(0, 5 - $count));
}
?>

<section class="testimonials" id="depoimentos">
    <div class="container">

        <div class="section-header fade-up">
            <span class="label">Avaliações Google</span>
            <h2 class="section-title">O que nossos pacientes<br>estão <span class="text--accent">dizendo</span></h2>
            <p class="section-subtitle">Resultados reais de quem confiou no nosso cuidado especializado.</p>
        </div>

        <?php if ($total > 0): ?>
        <div class="reviews-summary fade-up">
            <div class="reviews-summary__score"><?= number_format((float)$avg_rating, 1, ',', '.') ?></div>
            <div class="reviews-summary__info">
                <div class="reviews-summary__stars"><?= render_stars($stars_full) ?></div>
                <p class="reviews-summary__count"><?= $total ?> avaliações no Google</p>
            </div>
            <a href="https://www.google.com/search?q=rekintsu+pilates#lrd=0x94dce5c879f7d707:0x76e47b75792010c7,1,,,,"
               class="reviews-summary__link" target="_blank" rel="noopener">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                Ver todas no Google
            </a>
        </div>
        <?php endif; ?>

        <?php if (!empty($reviews)): ?>
        <div class="reviews-carousel fade-up">
            <div class="reviews-track" id="reviewsTrack">
                <?php foreach ($reviews as $r): ?>
                <div class="testimonial-card">
                    <div class="testimonial-card__header">
                        <div class="testimonial-card__avatar"><?= htmlspecialchars($r['avatar'] ?? 'P') ?></div>
                        <div class="testimonial-card__meta">
                            <p class="testimonial-card__name"><?= htmlspecialchars($r['author'] ?? 'Paciente') ?></p>
                            <div class="testimonial-card__stars">
                                <?= render_stars((int)($r['rating'] ?? 5)) ?>
                            </div>
                        </div>
                        <svg class="testimonial-card__google" width="18" height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                    </div>
                    <p class="testimonial-card__text">"<?= htmlspecialchars($r['text'] ?? '') ?>"</p>
                    <?php if (!empty($r['date'])): ?>
                    <p class="testimonial-card__date"><?= htmlspecialchars($r['date']) ?></p>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="carousel-nav">
                <button class="carousel-btn" id="prevReview" aria-label="Anterior">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <button class="carousel-btn" id="nextReview" aria-label="Próximo">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
                </button>
            </div>
        </div>
        <?php else: ?>
        <p style="text-align:center;color:var(--color-muted);padding:40px 0;">Nenhuma avaliação disponível ainda.</p>
        <?php endif; ?>

        <div class="testimonials__cta fade-up">
            <a href="https://www.google.com/search?q=rekintsu+pilates#lrd=0x94dce5c879f7d707:0x76e47b75792010c7,3,,,,"
               class="btn btn--accent btn--lg" target="_blank" rel="noopener">
                Deixar Avaliação no Google
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
            </a>
        </div>

    </div>
</section>
