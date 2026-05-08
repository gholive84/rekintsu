<?php
/**
 * Bloco de divulgação do Rekintsu Flow na homepage.
 * Full-width, fundo escuro com video premium à direita,
 * conteúdo à esquerda. Linka para /rekintsu-flow.
 */
?>
<section class="flow-promo" aria-label="Conheça o Rekintsu Flow">
    <div class="flow-promo__bg">
        <img src="/site/assets/img/homem-kintsugi.jpg" alt="" aria-hidden="true" loading="lazy">
        <div class="flow-promo__overlay"></div>
    </div>

    <div class="container flow-promo__inner">
        <div class="flow-promo__grid">

            <div class="flow-promo__content fade-up">
                <span class="flow-promo__eyebrow">Novo · Pilates Solo em Grupo</span>
                <h2 class="flow-promo__title">
                    Conheça o<br>
                    Rekintsu <span class="flow-promo__italic">Flow.</span>
                </h2>
                <p class="flow-promo__lede">
                    Pilates solo com olhar clínico, conduzido por fisioterapeuta. Turmas de até 6 pessoas. <strong>Termine seu dia destravando o corpo</strong> — no horário mais nobre da sua agenda.
                </p>

                <ul class="flow-promo__stats">
                    <li>
                        <span class="flow-promo__stat-num">até 6</span>
                        <span class="flow-promo__stat-label">Pessoas por turma</span>
                    </li>
                    <li>
                        <span class="flow-promo__stat-num">18h e 19h</span>
                        <span class="flow-promo__stat-label">Segunda a quinta</span>
                    </li>
                    <li>
                        <span class="flow-promo__stat-num">13+ anos</span>
                        <span class="flow-promo__stat-label">De experiência clínica</span>
                    </li>
                </ul>

                <div class="flow-promo__actions">
                    <a href="/rekintsu-flow" class="btn btn--primary btn--lg flow-promo__cta">
                        Conhecer o Rekintsu Flow
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <span class="flow-promo__hint">Vagas limitadas · Centro Cívico, Curitiba</span>
                </div>
            </div>

            <div class="flow-promo__video fade-up" aria-hidden="true">
                <div class="flow-promo__video-frame">
                    <video
                        class="flow-promo__video-el"
                        src="/site/assets/video/video-flow-web.mp4"
                        poster="/site/assets/img/homem-kintsugi.jpg"
                        autoplay
                        muted
                        loop
                        playsinline
                        preload="metadata"
                        aria-hidden="true"></video>
                </div>
                <div class="flow-promo__video-glow" aria-hidden="true"></div>
            </div>

        </div>
    </div>
</section>
