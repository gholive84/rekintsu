<?php
$page_title = 'Guideline — Rekintsu Pilates Clínico';
$page_description = 'Guia visual e de componentes do site Rekintsu Pilates Clínico.';
include dirname(__DIR__) . '/includes/head-page.php';
include dirname(__DIR__) . '/includes/header.php';
?>

<main style="padding-top: 100px; padding-bottom: 80px; background: #F8FAFC; min-height: 100vh;">
<div class="container" style="max-width: 960px;">

    <h1 style="font-size: 2.5rem; font-weight: 800; color: #0F172A; margin-bottom: 8px;">Guia Visual</h1>
    <p style="color: #64748B; margin-bottom: 64px; font-size: 1.125rem;">Rekintsu Pilates Clínico — Design System</p>

    <!-- CORES -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 1.25rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid #E2E8F0;">Paleta de Cores</h2>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px;">
            <div>
                <div style="height: 80px; background: #0D9B8E; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Primary</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#0D9B8E</p>
            </div>
            <div>
                <div style="height: 80px; background: #5ECDC4; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Accent</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#5ECDC4</p>
            </div>
            <div>
                <div style="height: 80px; background: #071620; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Dark</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#071620</p>
            </div>
            <div>
                <div style="height: 80px; background: #0D1E2B; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Dark 2</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#0D1E2B</p>
            </div>
            <div>
                <div style="height: 80px; background: linear-gradient(135deg, #0D9B8E, #5ECDC4); border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Gradient</p>
                <p style="font-size: 0.8125rem; color: #64748B;">0D9B8E → 5ECDC4</p>
            </div>
            <div>
                <div style="height: 80px; background: #F8FAFC; border-radius: 12px; margin-bottom: 10px; border: 1px solid #E2E8F0;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Light</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#F8FAFC</p>
            </div>
            <div>
                <div style="height: 80px; background: #0F172A; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Text</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#0F172A</p>
            </div>
            <div>
                <div style="height: 80px; background: #64748B; border-radius: 12px; margin-bottom: 10px;"></div>
                <p style="font-weight: 700; font-size: 0.875rem; color: #0F172A;">Muted</p>
                <p style="font-size: 0.8125rem; color: #64748B;">#64748B</p>
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
            <span style="background: #071620; padding: 12px 16px; border-radius: 8px; display: inline-flex; gap: 12px;">
                <a href="#" class="btn btn--ghost">Ghost (escuro)</a>
                <a href="#" class="btn btn--dark">Dark</a>
            </span>
        </div>
    </section>

    <!-- TIPOGRAFIA -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 1.25rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid #E2E8F0;">Tipografia</h2>
        <div style="display: flex; flex-direction: column; gap: 24px;">
            <div><p style="font-size: 0.75rem; color: #64748B; margin-bottom: 4px;">Headline / H1 — 4.25rem 800</p><p style="font-size: 3rem; font-weight: 800; color: #0F172A; line-height: 1.1; letter-spacing: -0.02em;">Pilates que <span style="background: linear-gradient(135deg,#0D9B8E,#5ECDC4); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">restaura</span></p></div>
            <div><p style="font-size: 0.75rem; color: #64748B; margin-bottom: 4px;">Section Title — 2.5rem 700</p><p style="font-size: 2.5rem; font-weight: 700; color: #0F172A; line-height: 1.15;">Cuidado individualizado</p></div>
            <div><p style="font-size: 0.75rem; color: #64748B; margin-bottom: 4px;">Section Subtitle — 1.125rem 400</p><p style="font-size: 1.125rem; color: #64748B; line-height: 1.7;">Texto de apoio às seções, descrevendo com clareza o serviço ou proposta de valor.</p></div>
            <div><p style="font-size: 0.75rem; color: #64748B; margin-bottom: 4px;">Label — 0.75rem 600 uppercase</p><span class="label">Especialidades</span></div>
            <div><p style="font-size: 0.75rem; color: #64748B; margin-bottom: 4px;">Corpo — 1rem 400</p><p style="font-size: 1rem; color: #0F172A; line-height: 1.7;">Texto de corpo padrão, usado em parágrafos de seções, cards e descrições de serviço.</p></div>
        </div>
    </section>

    <!-- LOGO -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 1.25rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid #E2E8F0;">Logo</h2>
        <div style="display: flex; gap: 40px; flex-wrap: wrap; align-items: center;">
            <div style="background: #071620; padding: 24px 32px; border-radius: 12px;">
                <span class="logo__text">re<span>k</span>intsu</span>
                <span class="logo__sub">pilates clínico</span>
            </div>
        </div>
        <p style="margin-top: 16px; font-size: 0.875rem; color: #64748B;">"rekintsu" sempre em minúsculo · "k" em accent (#5ECDC4) · subtítulo em uppercase</p>
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

    <!-- SEÇÕES -->
    <section style="margin-bottom: 64px;">
        <h2 style="font-size: 1.25rem; font-weight: 700; color: #0F172A; margin-bottom: 24px; padding-bottom: 12px; border-bottom: 2px solid #E2E8F0;">Estrutura de Seções</h2>
        <div style="display: flex; flex-direction: column; gap: 12px;">
            <?php
            $sections = [
                ['hero.php', 'Hero', 'Dark (#071620)', 'Título, subtítulo, CTAs, stats, orb decorativo'],
                ['clients.php', 'Specialties Strip', 'Dark 2 (#0D1E2B)', 'Carrossel de condições tratadas'],
                ['services.php', 'Services', 'Light (#F8FAFC)', 'Grid 3 colunas com 6 cards de serviço'],
                ['about.php', 'About', 'Dark 2 (#0D1E2B)', 'Bio da Hayla Gomes + stats card'],
                ['blog-preview.php', 'Testimonials', 'White (#FFFFFF)', 'Grid 3 colunas com depoimentos'],
                ['contact.php', 'Contact', 'Dark (#071620)', 'Formulário + informações de contato'],
                ['cta.php', 'CTA', 'Gradient (teal)', 'Chamada final para agendamento'],
            ];
            foreach ($sections as $s): ?>
            <div style="background: white; border: 1px solid #E2E8F0; border-radius: 12px; padding: 16px 20px; display: flex; gap: 16px; align-items: center;">
                <code style="font-family: monospace; font-size: 0.8125rem; background: #F1F5F9; padding: 4px 10px; border-radius: 6px; color: #0D9B8E; white-space: nowrap;"><?= $s[0] ?></code>
                <div>
                    <p style="font-weight: 700; font-size: 0.9375rem; color: #0F172A;"><?= $s[1] ?></p>
                    <p style="font-size: 0.8125rem; color: #64748B;"><?= $s[2] ?> · <?= $s[3] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

</div>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
