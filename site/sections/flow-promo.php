<?php
/**
 * Bloco de divulgação do Rekintsu Flow na homepage.
 * Full-width com video YouTube em background cobrindo toda a area.
 * Conteudo a esquerda, link para /rekintsu-flow.
 */
?>
<section class="flow-promo" aria-label="Conheça o Rekintsu Flow">
    <div class="flow-promo__bg" aria-hidden="true">
        <!-- Poster que aparece enquanto o YouTube carrega -->
        <img src="/site/assets/img/homem-kintsugi.jpg" alt="" loading="lazy" class="flow-promo__poster">
        <!-- Video em cover full-section -->
        <div class="flow-promo__video">
            <div id="flow-promo-yt-player"></div>
        </div>
        <div class="flow-promo__overlay"></div>
    </div>

    <div class="container flow-promo__inner">
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
                    <span class="flow-promo__stat-num">18h–19h</span>
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
    </div>
</section>

<script>
(function () {
    var START = 5, END = 22, player, watchdog;

    function createPlayer() {
        if (!document.getElementById('flow-promo-yt-player')) return;
        player = new YT.Player('flow-promo-yt-player', {
            videoId: 'ZiqnpZGTP4Q',
            playerVars: {
                autoplay: 1, mute: 1, controls: 0, rel: 0,
                playsinline: 1, modestbranding: 1, showinfo: 0,
                iv_load_policy: 3, start: START, end: END
            },
            events: {
                onReady: function (e) {
                    e.target.playVideo();
                    watchdog = setInterval(function () {
                        if (player.getCurrentTime && player.getCurrentTime() >= END) {
                            player.seekTo(START, true);
                            player.playVideo();
                        }
                    }, 300);
                },
                onStateChange: function (e) {
                    if (e.data === YT.PlayerState.ENDED || e.data === YT.PlayerState.PAUSED) {
                        player.seekTo(START, true);
                        player.playVideo();
                    }
                }
            }
        });
    }

    if (window.YT && window.YT.Player) {
        createPlayer();
    } else {
        var prev = window.onYouTubeIframeAPIReady;
        window.onYouTubeIframeAPIReady = function () {
            if (typeof prev === 'function') prev();
            createPlayer();
        };
        if (!document.querySelector('script[src*="youtube.com/iframe_api"]')) {
            var tag = document.createElement('script');
            tag.src = 'https://www.youtube.com/iframe_api';
            document.head.appendChild(tag);
        }
    }
})();
</script>
