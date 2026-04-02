<?php
$page_title       = 'Especialidades — Rekintsu Pilates Clínico em Curitiba';
$page_description = 'Conheça as especialidades da Rekintsu: Pilates para Gestantes, Idosos, Pós-Cirúrgico e Hérnias e Lesões. Fisioterapia individualizada em Curitiba.';
include dirname(__DIR__) . '/includes/head-page.php';
include dirname(__DIR__) . '/includes/header.php';
?>

<main>

    <!-- HERO -->
    <section class="page-hero page-hero--especialidades">
        <div class="page-hero__bg">
            <img src="/site/assets/img/clinica01.jpg" alt="Rekintsu Pilates Clínico — Especialidades" class="page-hero__bg-img" loading="eager">
            <div class="page-hero__bg-overlay"></div>
        </div>
        <div class="container page-hero__content">
            <a href="/" class="page-hero__back">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 12H5M12 5l-7 7 7 7"/></svg>
                Início
            </a>
            <span class="label">Especialidades</span>
            <h1 class="page-hero__title">Cuidado especializado para<br>cada <span class="text--gradient">necessidade</span></h1>
            <p class="page-hero__subtitle">Atendimento individualizado conduzido por fisioterapeuta com mais de 13 anos de experiência em Pilates Clínico.</p>
        </div>
    </section>

    <!-- INTRO -->
    <section class="page-section">
        <div class="container">
            <div class="section-header fade-up" style="max-width:680px;margin:0 auto 56px;text-align:center">
                <span class="label">Por que escolher a Rekintsu</span>
                <h2 class="section-title">Cada corpo tem uma história.<br>Cada tratamento tem um <span class="text--accent">plano</span>.</h2>
                <p class="section-subtitle">Na Rekintsu não existe aula coletiva nem protocolo genérico. Toda sessão começa com avaliação postural e funcional — e evolui conforme o seu progresso.</p>
            </div>
        </div>
    </section>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/site/sections/services.php'; ?>

    <!-- DIFERENCIAIS -->
    <section class="page-section page-section--mint">
        <div class="container">
            <div class="section-header fade-up" style="max-width:600px;margin:0 auto 48px;text-align:center">
                <span class="label">Nossa metodologia</span>
                <h2 class="section-title">O que faz a Rekintsu ser <span class="text--accent">diferente</span></h2>
            </div>
            <div class="abordagem-grid fade-up">
                <div class="abordagem-card">
                    <div class="abordagem-card__icon">🩺</div>
                    <h3>Fisioterapeuta, não educador físico</h3>
                    <p>Hayla Gomes é fisioterapeuta especializada — habilitada para avaliar, diagnosticar e tratar condições de saúde, não apenas conduzir aulas.</p>
                </div>
                <div class="abordagem-card">
                    <div class="abordagem-card__icon">📋</div>
                    <h3>Avaliação individual obrigatória</h3>
                    <p>Toda jornada começa com avaliação postural e funcional completa. Sem atalhos — o tratamento é construído para você.</p>
                </div>
                <div class="abordagem-card">
                    <div class="abordagem-card__icon">👤</div>
                    <h3>Sessões individuais ou em duplas</h3>
                    <p>Atenção total em cada sessão. Sem turmas lotadas, sem exercícios genéricos. Cada movimento é observado e corrigido em tempo real.</p>
                </div>
                <div class="abordagem-card">
                    <div class="abordagem-card__icon">📈</div>
                    <h3>Evolução monitorada</h3>
                    <p>Reavalições periódicas garantem que o plano evolui junto com o seu corpo. O progresso é documentado e visível.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="page-cta">
        <div class="container page-cta__inner">
            <h2 class="page-cta__title">Não sabe qual especialidade é a sua?</h2>
            <p class="page-cta__text">Agende uma avaliação. A fisioterapeuta Hayla Gomes analisa o seu caso e indica o tratamento mais adequado.</p>
            <a href="https://wa.me/5541991191501?text=Olá! Gostaria de agendar uma avaliação na Rekintsu."
               class="btn btn--gradient btn--lg" target="_blank" rel="noopener">
                Agendar Avaliação Gratuita
            </a>
        </div>
    </section>

</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
