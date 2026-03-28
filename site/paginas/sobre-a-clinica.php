<?php
$page_title       = 'Sobre a Clínica — Rekintsu Pilates Clínico';
$page_description = 'Conheça a Rekintsu Pilates Clínico em Curitiba: estrutura, equipe, currículo completo da fisioterapeuta Hayla Gomes e localização privilegiada no Centro Cívico.';
include dirname(__DIR__) . '/includes/head-page.php';
include dirname(__DIR__) . '/includes/header.php';
?>

<main>

    <!-- HERO com vídeo -->
    <section class="page-hero page-hero--clinica">
        <div class="page-hero__bg">
            <video autoplay muted loop playsinline
                   poster="/site/assets/img/clinica01.jpg"
                   class="page-hero__bg-img page-hero__bg-video">
                <source src="/site/assets/video/video3-web.mp4" type="video/mp4">
            </video>
            <div class="page-hero__bg-overlay page-hero__bg-overlay--strong"></div>
        </div>
        <div class="container page-hero__content">
            <span class="label">A Clínica</span>
            <h1 class="page-hero__title">Rekintsu<br><span class="text--gradient">Pilates Clínico</span></h1>
            <p class="page-hero__subtitle">Um espaço pensado para o seu tratamento — estrutura profissional, atendimento individualizado e localização privilegiada no coração de Curitiba.</p>
        </div>
    </section>

    <!-- SOBRE A FISIOTERAPEUTA -->
    <section class="page-section">
        <div class="container">
            <div class="page-section__inner page-section__inner--2col">
                <div class="fade-up">
                    <span class="label">A Especialista</span>
                    <h2 class="page-section__title">Hayla Gomes<br><span class="text--accent">Fisioterapeuta</span></h2>
                    <p class="page-section__text">Graduada em Fisioterapia, com mais de 13 anos dedicados à reabilitação física e ao pilates clínico. Hayla construiu sua carreira com foco em tratamentos individualizados, orientados por evidências científicas e voltados para resultados reais e duradouros.</p>
                    <p class="page-section__text">Cada especialização foi escolhida para ampliar a capacidade de tratar condições complexas — de hérnias e pós-cirúrgicos a gestantes e idosos — com segurança, precisão e cuidado humanizado.</p>

                    <div class="clinica-curriculum fade-up">
                        <div class="clinica-curriculum__item">
                            <div class="clinica-curriculum__icon">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
                            </div>
                            <div>
                                <strong>Graduação em Fisioterapia</strong>
                                <span>Formação completa com foco em reabilitação funcional e musculoesquelética</span>
                            </div>
                        </div>
                        <div class="clinica-curriculum__item">
                            <div class="clinica-curriculum__icon">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                            </div>
                            <div>
                                <strong>Especialização em Pilates Clínico e Reabilitação</strong>
                                <span>Método terapêutico aplicado a condições ortopédicas, neurológicas e funcionais</span>
                            </div>
                        </div>
                        <div class="clinica-curriculum__item">
                            <div class="clinica-curriculum__icon">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4.5 12.5l3 3 8-8"/><circle cx="12" cy="12" r="10"/></svg>
                            </div>
                            <div>
                                <strong>Especialização em Osteopatia e Terapia Manual</strong>
                                <span>Técnicas osteopáticas para mobilização articular e alívio de restrições musculares</span>
                            </div>
                        </div>
                        <div class="clinica-curriculum__item">
                            <div class="clinica-curriculum__icon">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4.5 12.5l3 3 8-8"/><circle cx="12" cy="12" r="10"/></svg>
                            </div>
                            <div>
                                <strong>Especialização em Liberação Miofascial</strong>
                                <span>Tratamento de tensões profundas, pontos-gatilho e disfunções do tecido conjuntivo</span>
                            </div>
                        </div>
                        <div class="clinica-curriculum__item">
                            <div class="clinica-curriculum__icon">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4.5 12.5l3 3 8-8"/><circle cx="12" cy="12" r="10"/></svg>
                            </div>
                            <div>
                                <strong>Ergonomia Ocupacional e Saúde no Trabalho</strong>
                                <span>Avaliação e adequação postural para prevenção de doenças ocupacionais</span>
                            </div>
                        </div>
                        <div class="clinica-curriculum__item">
                            <div class="clinica-curriculum__icon">
                                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4.5 12.5l3 3 8-8"/><circle cx="12" cy="12" r="10"/></svg>
                            </div>
                            <div>
                                <strong>+13 anos de prática clínica</strong>
                                <span>Experiência acumulada em reabilitação ortopédica, pré e pós-operatório e pilates terapêutico</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-section__visual fade-up">
                    <img src="/site/assets/img/clinica2.jpg" alt="Hayla Gomes — Fisioterapeuta Rekintsu" class="page-section__img" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- VÍDEO DA CLÍNICA -->
    <section class="clinica-video-section">
        <div class="clinica-video-section__media">
            <video autoplay muted loop playsinline
                   poster="/site/assets/img/clinica01.jpg"
                   class="clinica-video-section__video">
                <source src="/site/assets/video/video2-web.mp4" type="video/mp4">
            </video>
            <div class="clinica-video-section__overlay"></div>
        </div>
        <div class="container clinica-video-section__inner">
            <div class="clinica-video-section__content fade-up">
                <span class="label label--light">Nossa Estrutura</span>
                <h2 class="clinica-video-section__title">Um espaço feito para<br><span class="text--gradient">o seu tratamento</span></h2>
                <p class="clinica-video-section__text">A Rekintsu foi projetada para oferecer um ambiente tranquilo, privativo e totalmente equipado — onde cada detalhe foi pensado para garantir conforto e eficiência no seu tratamento.</p>
                <div class="clinica-video-section__features">
                    <div class="clinica-video-section__feature">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Aparelhos de pilates profissionais (Reformer, Cadillac, Chair)</span>
                    </div>
                    <div class="clinica-video-section__feature">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Scanner postural de alta precisão para avaliação inicial</span>
                    </div>
                    <div class="clinica-video-section__feature">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Sala privativa — apenas você e a fisioterapeuta</span>
                    </div>
                    <div class="clinica-video-section__feature">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Climatização, iluminação e acústica planejadas</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERIA -->
    <section class="page-section page-section--light">
        <div class="container">
            <div class="section-header fade-up">
                <span class="label">Ambiente</span>
                <h2 class="section-title">Conheça a <span class="text--accent">Rekintsu</span></h2>
            </div>
            <div class="clinica-gallery fade-up">
                <div class="clinica-gallery__item clinica-gallery__item--large">
                    <img src="/site/assets/img/clinica01.jpg" alt="Sala de tratamento — Rekintsu" loading="lazy">
                </div>
                <div class="clinica-gallery__col">
                    <div class="clinica-gallery__item">
                        <img src="/site/assets/img/clinica.jpg" alt="Equipamentos — Rekintsu" loading="lazy">
                    </div>
                    <div class="clinica-gallery__item">
                        <img src="/site/assets/img/clinica2.jpg" alt="Recepção — Rekintsu" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LOCALIZAÇÃO -->
    <?php include dirname(__DIR__) . '/sections/localizacao.php'; ?>

    <!-- CTA -->
    <section class="page-cta">
        <div class="container page-cta__inner">
            <h2 class="page-cta__title">Venha conhecer a Rekintsu</h2>
            <p class="page-cta__text">Agende sua avaliação inicial e experimente um atendimento completamente diferente — personalizado, técnico e humanizado.</p>
            <a href="https://wa.me/5541991191501?text=Olá! Gostaria de agendar uma avaliação na Rekintsu."
               class="btn btn--gradient btn--lg" target="_blank" rel="noopener">
                Agendar via WhatsApp
            </a>
        </div>
    </section>

</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
