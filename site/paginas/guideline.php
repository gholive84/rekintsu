<?php
$page_title = 'Guideline — Rekintsu Pilates Clínico';
$page_description = 'Guia visual e de componentes do site Rekintsu Pilates Clínico.';
include dirname(__DIR__) . '/includes/head-page.php';
include dirname(__DIR__) . '/includes/header.php';
?>

<main style="padding-top: 100px; padding-bottom: 80px; background: #F4F4F5; min-height: 100vh;">
<div class="container" style="max-width: 960px;">

    <h1 style="font-size: 2.5rem; font-weight: 800; color: #0F172A; margin-bottom: 8px;">Guia Visual</h1>
    <p style="color: #64748B; margin-bottom: 64px; font-size: 1.125rem;">Rekintsu Pilates Clínico — Design System</p>

    <!-- CORES -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 1.25rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid #E2E8F0;">Paleta de Cores</h2>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px;">
            <div>
                <div style="height: 80px; background: #DBA159; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Primary</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#DBA159</p>
                <p style="font-size: 0.75rem; color: #94A3B8;">--color-primary</p>
            </div>
            <div>
                <div style="height: 80px; background: #C48A45; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Primary Dark</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#C48A45</p>
                <p style="font-size: 0.75rem; color: #94A3B8;">--color-primary-dark</p>
            </div>
            <div>
                <div style="height: 80px; background: #EFD780; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Accent</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#EFD780</p>
                <p style="font-size: 0.75rem; color: #94A3B8;">--color-accent</p>
            </div>
            <div>
                <div style="height: 80px; background: #D0E3CC; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Mint</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#D0E3CC</p>
                <p style="font-size: 0.75rem; color: #94A3B8;">--color-mint</p>
            </div>
            <div>
                <div style="height: 80px; background: linear-gradient(135deg, #DBA159, #EFD780); border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Gradient</p>
                <p style="font-size: 0.8125rem; color: #64748B;">DBA159 → EFD780</p>
                <p style="font-size: 0.75rem; color: #94A3B8;">--gradient-accent</p>
            </div>
            <div>
                <div style="height: 80px; background: #1A1A1A; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Dark</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#1A1A1A</p>
                <p style="font-size: 0.75rem; color: #94A3B8;">--color-dark</p>
            </div>
            <div>
                <div style="height: 80px; background: #2A2A2A; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Dark 2</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#2A2A2A</p>
                <p style="font-size: 0.75rem; color: #94A3B8;">--color-dark-2</p>
            </div>
            <div>
                <div style="height: 80px; background: #F4F4F5; border-radius: 12px; margin-bottom: 10px; border: 1px solid #E2E8F0;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Light</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#F4F4F5</p>
                <p style="font-size: 0.75rem; color: #94A3B8;">--color-light</p>
            </div>
            <div>
                <div style="height: 80px; background: #0F172A; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Text</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#0F172A</p>
                <p style="font-size: 0.75rem; color: #94A3B8;">--color-text</p>
            </div>
            <div>
                <div style="height: 80px; background: #64748B; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Muted</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#64748B</p>
                <p style="font-size: 0.75rem; color: #94A3B8;">--color-muted</p>
            </div>
            <div>
                <div style="height: 80px; background: #E2E8F0; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Border</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#E2E8F0</p>
                <p style="font-size: 0.75rem; color: #94A3B8;">--color-border</p>
            </div>
            <div>
                <div style="height: 80px; background: #ffffff; border-radius: 12px; margin-bottom: 10px; border: 1px solid #E2E8F0;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">White</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#FFFFFF</p>
                <p style="font-size: 0.75rem; color: #94A3B8;">--color-white</p>
            </div>
        </div>
    </section>

    <!-- BOTÕES -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 1.25rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid #E2E8F0;">Botões</h2>
        <div style="display: flex; gap: 16px; flex-wrap: wrap; align-items: center;">
            <a href="#" class="btn btn--gradient">Primário (Gradient)</a>
            <a href="#" class="btn btn--gradient btn--lg">Primário Grande</a>
            <a href="#" class="btn btn--accent">Accent (Outline)</a>
            <span style="background: #1A1A1A; padding: 12px 16px; border-radius: 8px; display: inline-flex; gap: 12px;">
                <a href="#" class="btn btn--ghost">Ghost (escuro)</a>
                <a href="#" class="btn btn--dark">Dark</a>
            </span>
        </div>
    </section>

    <!-- TIPOGRAFIA -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 1.25rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid #E2E8F0;">Tipografia</h2>
        <div style="display: flex; flex-direction: column; gap: 24px;">
            <div>
                <p style="font-size: 0.75rem; color: #64748B; margin-bottom: 4px;">Headline / H1 — clamp(2.75rem, 5vw, 4.25rem) 800</p>
                <p style="font-size: 3rem; font-weight: 800; color: #0F172A; line-height: 1.1; letter-spacing: -0.02em;">Pilates que <span style="background: linear-gradient(135deg,#DBA159,#EFD780); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">restaura</span></p>
            </div>
            <div>
                <p style="font-size: 0.75rem; color: #64748B; margin-bottom: 4px;">Section Title — 2.5rem 700</p>
                <p style="font-size: 2.5rem; font-weight: 700; color: #0F172A; line-height: 1.15;">Cuidado individualizado</p>
            </div>
            <div>
                <p style="font-size: 0.75rem; color: #64748B; margin-bottom: 4px;">Section Subtitle — 1.125rem 400</p>
                <p style="font-size: 1.125rem; color: #64748B; line-height: 1.7;">Texto de apoio às seções, descrevendo com clareza o serviço ou proposta de valor.</p>
            </div>
            <div>
                <p style="font-size: 0.75rem; color: #64748B; margin-bottom: 4px;">Label — 0.75rem 600 uppercase</p>
                <span class="label">Especialidades</span>
            </div>
            <div>
                <p style="font-size: 0.75rem; color: #64748B; margin-bottom: 4px;">Corpo — 1rem 400</p>
                <p style="font-size: 1rem; color: #0F172A; line-height: 1.7;">Texto de corpo padrão, usado em parágrafos de seções, cards e descrições de serviço.</p>
            </div>
            <div>
                <p style="font-size: 0.75rem; color: #64748B; margin-bottom: 4px;">Text Accent — palavra em destaque</p>
                <p style="font-size: 1.5rem; font-weight: 700; color: #0F172A;">Reabilitação <span class="text--accent">especializada</span></p>
            </div>
        </div>
    </section>

    <!-- LOGO -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 1.25rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid #E2E8F0;">Logo</h2>
        <div style="display: flex; gap: 24px; flex-wrap: wrap; align-items: center;">
            <div style="background: #1A1A1A; padding: 24px 32px; border-radius: 12px; display: flex; align-items: center; gap: 12px;">
                <img src="/site/assets/img/rekintsu-logo-svg.svg" alt="Rekintsu" style="height: 36px;">
            </div>
            <div style="background: #F4F4F5; padding: 24px 32px; border-radius: 12px; border: 1px solid #E2E8F0; display: flex; align-items: center; gap: 12px;">
                <img src="/site/assets/img/logopreta-svg.svg" alt="Rekintsu" style="height: 36px;">
            </div>
        </div>
        <p style="margin-top: 16px; font-size: 0.875rem; color: #64748B;">Logo clara: <code>rekintsu-logo-svg.svg</code> (header) · Logo escura: <code>logopreta-svg.svg</code> · Logo rodapé: <code>logobranca-svg.svg</code></p>
    </section>

    <!-- CARDS DE SERVIÇO -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 1.25rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid #E2E8F0;">Service Card</h2>
        <div style="max-width: 340px;">
            <div class="service-card">
                <div class="service-card__icon">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                </div>
                <h3 class="service-card__title">Pilates para Reabilitação</h3>
                <p class="service-card__text">Exercícios terapêuticos que fortalecem, corrigem e restauram a função do corpo.</p>
                <a href="#" class="service-card__link">Saber mais <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a>
            </div>
        </div>
    </section>

    <!-- ESTRUTURA DE SEÇÕES -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 1.25rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid #E2E8F0;">Estrutura de Seções — Homepage</h2>
        <div style="display: flex; flex-direction: column; gap: 12px;">
            <?php
            $sections = [
                ['hero.php',            'Hero',                    'Dark (#1A1A1A)',    'Vídeo de fundo, título, CTAs, stats'],
                ['clients.php',         'Specialties Strip',       'Dark 2 (#2A2A2A)', 'Strip de condições tratadas, sobrepõe o hero'],
                ['services.php',        'Especialidades',          'White (#FFFFFF)',   'Grid 3 colunas com 6 cards de serviço'],
                ['como-funciona-bloco.php', 'Como Funciona',       'Light (#F4F4F5)',   'Processo de atendimento em 4 passos'],
                ['localizacao.php',     'Localização',             'Dark (#1A1A1A)',    'Mapa visual, endereço e features'],
                ['about.php',           'Sobre a Clínica',         'Dark 2 (#2A2A2A)', 'Foto da clínica, bio da Hayla, stats, CTA'],
                ['blog-preview.php',    'Depoimentos',             'White (#FFFFFF)',   'Carrossel de avaliações Google'],
                ['contact.php',         'Contato',                 'Dark (#1A1A1A)',    'Formulário + informações de contato'],
                ['cta.php',             'CTA Final',               'Gradient (dourado)','Chamada final para agendamento'],
            ];
            foreach ($sections as $s): ?>
            <div style="background: white; border: 1px solid #E2E8F0; border-radius: 12px; padding: 16px 20px; display: flex; gap: 16px; align-items: center;">
                <code style="font-family: monospace; font-size: 0.8125rem; background: #F1F5F9; padding: 4px 10px; border-radius: 6px; color: #DBA159; white-space: nowrap;"><?= $s[0] ?></code>
                <div>
                    <p style="font-weight: 700; font-size: 0.9375rem; color: #0F172A;"><?= $s[1] ?></p>
                    <p style="font-size: 0.8125rem; color: #64748B;"><?= $s[2] ?> · <?= $s[3] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- PÁGINAS INTERNAS -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 1.25rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid #E2E8F0;">Páginas Internas</h2>
        <div style="display: flex; flex-direction: column; gap: 12px;">
            <?php
            $paginas = [
                ['sobre-a-clinica.php',       'Sobre a Clínica',        '/sobre-a-clinica'],
                ['como-funciona.php',         'Como Funciona',          '/como-funciona'],
                ['pilates-gestantes.php',     'Pilates para Gestantes', '/pilates-gestantes'],
                ['pilates-hernias-lesoes.php','Pilates para Hérnias',   '/pilates-hernias-lesoes'],
                ['pilates-idosos.php',        'Pilates para Idosos',    '/pilates-idosos'],
                ['pilates-pos-cirurgico.php', 'Pilates Pós-Cirúrgico',  '/pilates-pos-cirurgico'],
            ];
            foreach ($paginas as $p): ?>
            <div style="background: white; border: 1px solid #E2E8F0; border-radius: 12px; padding: 16px 20px; display: flex; gap: 16px; align-items: center; justify-content: space-between;">
                <div style="display:flex; gap: 16px; align-items: center;">
                    <code style="font-family: monospace; font-size: 0.8125rem; background: #F1F5F9; padding: 4px 10px; border-radius: 6px; color: #DBA159; white-space: nowrap;"><?= $p[0] ?></code>
                    <p style="font-weight: 700; font-size: 0.9375rem; color: #0F172A;"><?= $p[1] ?></p>
                </div>
                <a href="<?= $p[2] ?>" target="_blank" style="font-size: 0.8125rem; color: #DBA159;"><?= $p[2] ?> ↗</a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

</div>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
