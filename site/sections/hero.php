<section class="hero" id="inicio">

    <div class="hero__bg" aria-hidden="true">
        <?php
        // Usa vídeo comprimido se disponível, senão o original
        $video_web = '/site/assets/video/hero-bg.mp4';
        $video_orig = '/site/assets/img/video-studio.mp4';
        $video_file_web  = $_SERVER['DOCUMENT_ROOT'] . $video_web;
        $video_file_orig = $_SERVER['DOCUMENT_ROOT'] . $video_orig;
        $video_src = file_exists($video_file_web) ? $video_web : (file_exists($video_file_orig) ? $video_orig : null);
        ?>
        <?php if ($video_src): ?>
        <video class="hero__bg-video"
               autoplay muted loop playsinline
               preload="metadata"
               poster="/site/assets/img/hero1.png">
            <source src="<?= $video_src ?>" type="video/mp4">
        </video>
        <?php else: ?>
        <img src="/site/assets/img/hero1.png" alt="" class="hero__bg-img" loading="eager">
        <?php endif; ?>
        <div class="hero__bg-overlay"></div>
    </div>

    <div class="container">
        <div class="hero__content">
            <span class="label fade-up">Pilates Clínico em Curitiba</span>
            <h1 class="hero__title fade-up">
                Pilates que <span class="text--gradient">restaura</span><br>
                e transforma
            </h1>
            <p class="hero__subtitle fade-up">
                Atendimento exclusivo e individualizado. Reabilitação, pós-cirúrgico, gestação e muito mais — com acompanhamento de especialista há mais de 13 anos.
            </p>
            <div class="hero__actions fade-up">
                <a href="https://wa.me/5541991191501?text=Olá! Gostaria de agendar uma avaliação no Rekintsu."
                   class="btn btn--gradient btn--lg" target="_blank" rel="noopener">
                    Agendar Avaliação
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
                <a href="#servicos" class="btn btn--ghost btn--lg">
                    Ver Serviços
                </a>
            </div>
            <div class="hero__stats fade-up">
                <div class="stat">
                    <span class="stat__number">13+</span>
                    <span class="stat__label">Anos de experiência</span>
                </div>
                <div class="stat">
                    <span class="stat__number">6</span>
                    <span class="stat__label">Especialidades</span>
                </div>
                <div class="stat">
                    <span class="stat__number">100%</span>
                    <span class="stat__label">Individualizado</span>
                </div>
            </div>
        </div>
    </div>

</section>
