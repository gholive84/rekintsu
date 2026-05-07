<?php
$page_title = 'Guideline — Rekintsu Pilates Clínico';
$page_description = 'Guia visual e de componentes do site Rekintsu — sistema Rekintsu Flow.';
include dirname(__DIR__) . '/includes/head-page.php';
include dirname(__DIR__) . '/includes/header.php';
?>

<style>
    .gl-main { padding: 120px 0 80px; background: var(--cream); min-height: 100vh; }
    .gl-wrap { max-width: 1100px; margin: 0 auto; padding: 0 32px; }

    .gl-eyebrow { font-family: var(--font-base); font-size: 0.75rem; letter-spacing: 0.22em; text-transform: uppercase; color: var(--copper); font-weight: 500; margin-bottom: 18px; }
    .gl-h1 { font-family: var(--font-display); font-size: clamp(3rem, 6vw, 5rem); font-weight: 400; line-height: 0.96; letter-spacing: -0.02em; color: var(--ink); margin-bottom: 12px; }
    .gl-h1 em { font-style: italic; color: var(--copper); }
    .gl-lede { font-family: var(--font-base); color: var(--ink-soft); font-size: 1.0625rem; max-width: 580px; line-height: 1.75; margin-bottom: 64px; }

    .gl-section { margin-bottom: 72px; }
    .gl-section-sub { font-family: var(--font-base); font-size: 0.75rem; letter-spacing: 0.22em; text-transform: uppercase; color: var(--copper); font-weight: 500; margin-bottom: 16px; }
    .gl-section-title { font-family: var(--font-display); font-size: 2rem; font-weight: 500; letter-spacing: -0.01em; color: var(--ink); margin-bottom: 32px; padding-bottom: 18px; border-bottom: 1px solid var(--line); }

    /* Paleta */
    .gl-primary { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 18px; margin-bottom: 24px; }
    .gl-secondary { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
    .gl-swatch { padding: 32px 28px; min-height: 280px; display: flex; flex-direction: column; justify-content: space-between; border-radius: var(--radius-md); position: relative; overflow: hidden; }
    .gl-swatch.lg { min-height: 340px; padding: 38px 32px; }
    .gl-swatch .label { font-family: var(--font-base); font-size: 0.6875rem; letter-spacing: 0.22em; text-transform: uppercase; font-weight: 500; opacity: 0.7; }
    .gl-swatch .name { font-family: var(--font-display); font-size: 2.25rem; font-weight: 400; letter-spacing: -0.02em; line-height: 1; margin-top: 8px; }
    .gl-swatch .hex { font-family: var(--font-base); font-size: 0.875rem; letter-spacing: 0.04em; font-weight: 500; }
    .gl-swatch .token { font-family: var(--font-base); font-size: 0.6875rem; letter-spacing: 0.06em; opacity: 0.6; margin-top: 4px; }
    .gl-swatch .desc { font-family: var(--font-display); font-style: italic; font-size: 1rem; line-height: 1.45; margin-top: 12px; opacity: 0.85; }

    /* Tipografia */
    .gl-type-row { display: grid; grid-template-columns: 180px 1fr; gap: 32px; padding: 28px 0; border-bottom: 1px solid var(--line); align-items: baseline; }
    .gl-type-row:last-child { border-bottom: none; }
    .gl-type-meta { font-family: var(--font-base); font-size: 0.75rem; letter-spacing: 0.12em; text-transform: uppercase; color: var(--ink-soft); font-weight: 500; }

    /* Combos */
    .gl-combos { border: 1px solid var(--line); border-radius: var(--radius-md); overflow: hidden; }
    .gl-combo { display: grid; grid-template-columns: 200px 1fr; align-items: center; border-bottom: 1px solid var(--line); }
    .gl-combo:last-child { border-bottom: none; }
    .gl-combo .lbl { padding: 24px 24px; font-family: var(--font-base); font-size: 0.6875rem; letter-spacing: 0.18em; text-transform: uppercase; font-weight: 500; }
    .gl-combo .demo { padding: 24px 28px; font-family: var(--font-display); font-size: 1.625rem; letter-spacing: -0.01em; }
    .gl-combo .demo em { font-style: italic; }

    /* Lista de seções/páginas */
    .gl-list { display: flex; flex-direction: column; gap: 10px; }
    .gl-list-item { background: var(--color-white); border: 1px solid var(--line); border-radius: var(--radius-md); padding: 16px 22px; display: flex; gap: 18px; align-items: center; justify-content: space-between; }
    .gl-list-item code { font-family: 'SF Mono', Menlo, monospace; font-size: 0.8125rem; background: var(--cream-deep); padding: 5px 10px; border-radius: 4px; color: var(--copper-deep); white-space: nowrap; }
    .gl-list-item .meta { font-family: var(--font-base); font-size: 0.8125rem; color: var(--ink-soft); }
    .gl-list-item .ttl { font-family: var(--font-base); font-weight: 600; font-size: 0.9375rem; color: var(--ink); }
    .gl-list-item a { font-family: var(--font-base); font-size: 0.8125rem; color: var(--copper); }

    /* Logo */
    .gl-logos { display: flex; gap: 18px; flex-wrap: wrap; }
    .gl-logo-card { padding: 28px 36px; border-radius: var(--radius-md); display: flex; align-items: center; }
    .gl-logo-card img { height: 38px; }

    @media (max-width: 768px) {
        .gl-primary, .gl-secondary { grid-template-columns: 1fr; }
        .gl-type-row { grid-template-columns: 1fr; gap: 8px; }
        .gl-combo { grid-template-columns: 1fr; }
        .gl-combo .lbl { padding-bottom: 0; }
    }
</style>

<main class="gl-main">
<div class="gl-wrap">

    <header style="margin-bottom: 80px;">
        <div class="gl-eyebrow">Sistema Rekintsu Flow · Design system</div>
        <h1 class="gl-h1">Guia <em>visual.</em></h1>
        <p class="gl-lede">Pedra, ouro e porcelana. Inspirado no kintsugi: a quebra reparada com ouro vira o destaque. Headlines em Cormorant Garamond, italic + cobre para a palavra-chave. Corpo em Inter Tight.</p>
    </header>

    <!-- ═══════════════════════════════════════════════════
         PALETA — primárias
         ═══════════════════════════════════════════════════ -->
    <section class="gl-section">
        <div class="gl-section-sub">Cores principais</div>
        <h2 class="gl-section-title">A base — pedra + ouro + porcelana</h2>

        <div class="gl-primary">
            <div class="gl-swatch lg" style="background: var(--cream); color: var(--ink); border: 1px solid var(--line);">
                <div>
                    <div class="label">Primária / Fundo</div>
                    <div class="name">Cream</div>
                    <div class="desc">A porcelana antes da quebra. Fundo padrão do site.</div>
                </div>
                <div>
                    <div class="hex">#F2EDE4</div>
                    <div class="token">--cream</div>
                </div>
            </div>
            <div class="gl-swatch lg" style="background: var(--ink); color: var(--cream);">
                <div>
                    <div class="label">Tinta / Texto</div>
                    <div class="name">Ink</div>
                    <div class="desc">Profundidade. Tipografia em fundo claro, fundo em variações dark.</div>
                </div>
                <div>
                    <div class="hex">#16140F</div>
                    <div class="token">--ink</div>
                </div>
            </div>
            <div class="gl-swatch lg" style="background: var(--copper); color: #FFF;">
                <div>
                    <div class="label">Acento</div>
                    <div class="name">Copper</div>
                    <div class="desc">O ouro do kintsugi. Italic, eyebrows, CTAs.</div>
                </div>
                <div>
                    <div class="hex">#B26A48</div>
                    <div class="token">--copper</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         PALETA — apoio
         ═══════════════════════════════════════════════════ -->
    <section class="gl-section">
        <div class="gl-section-sub">Cores de apoio</div>
        <h2 class="gl-section-title">Tons intermediários</h2>

        <div class="gl-secondary">
            <div class="gl-swatch" style="background: var(--cream-deep); color: var(--ink); border: 1px solid var(--line);">
                <div class="label">Apoio</div>
                <div>
                    <div class="name">Cream Deep</div>
                    <div class="hex" style="margin-top: 12px;">#E8E0D2</div>
                    <div class="token">--cream-deep</div>
                </div>
            </div>
            <div class="gl-swatch" style="background: var(--cream); color: var(--ink-soft); border: 1px solid var(--line);">
                <div class="label">Texto secundário</div>
                <div>
                    <div class="name">Ink Soft</div>
                    <div class="hex" style="margin-top: 12px;">#3A352B</div>
                    <div class="token">--ink-soft</div>
                </div>
            </div>
            <div class="gl-swatch" style="background: var(--copper-deep); color: var(--cream);">
                <div class="label">Acento profundo</div>
                <div>
                    <div class="name">Copper Deep</div>
                    <div class="hex" style="margin-top: 12px;">#8C4F33</div>
                    <div class="token">--copper-deep</div>
                </div>
            </div>
            <div class="gl-swatch" style="background: var(--sage); color: var(--cream);">
                <div class="label">Neutro frio</div>
                <div>
                    <div class="name">Sage</div>
                    <div class="hex" style="margin-top: 12px;">#7A8674</div>
                    <div class="token">--sage</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         TIPOGRAFIA
         ═══════════════════════════════════════════════════ -->
    <section class="gl-section">
        <div class="gl-section-sub">Tipografia</div>
        <h2 class="gl-section-title">Cormorant Garamond · Inter Tight</h2>

        <div class="gl-type-row">
            <div class="gl-type-meta">Display H1<br>clamp(2.75–4.25rem) · 500</div>
            <div style="font-family: var(--font-display); font-size: clamp(2.5rem, 5vw, 4rem); font-weight: 500; line-height: 0.98; letter-spacing: -0.02em; color: var(--ink);">
                Pilates solo<br>com olhar <em style="font-style: italic; color: var(--copper);">clínico.</em>
            </div>
        </div>

        <div class="gl-type-row">
            <div class="gl-type-meta">Display H2<br>2–3rem · 500</div>
            <div style="font-family: var(--font-display); font-size: 2.5rem; font-weight: 500; line-height: 1.05; letter-spacing: -0.015em; color: var(--ink);">
                Conduzido por <em style="font-style: italic; color: var(--copper);">fisioterapeuta.</em>
            </div>
        </div>

        <div class="gl-type-row">
            <div class="gl-type-meta">Subtítulo<br>1.0625rem · 400</div>
            <div style="font-family: var(--font-base); font-size: 1.0625rem; color: var(--ink-soft); line-height: 1.75; max-width: 560px;">
                Texto de apoio às seções, descrevendo com clareza o serviço, a proposta de valor ou a consequência prática para o paciente.
            </div>
        </div>

        <div class="gl-type-row">
            <div class="gl-type-meta">Eyebrow / Label<br>0.75rem · 500 · tracking 0.22em</div>
            <div><span class="label">Horário Nobre · Turmas Exclusivas</span></div>
        </div>

        <div class="gl-type-row">
            <div class="gl-type-meta">Corpo<br>1rem · 400 · line-height 1.75</div>
            <div style="font-family: var(--font-base); font-size: 1rem; color: var(--ink); line-height: 1.75; max-width: 560px;">
                Texto de corpo padrão, usado em parágrafos de seções, cards e descrições de serviço. Inter Tight em peso regular sobre cream.
            </div>
        </div>

        <div class="gl-type-row">
            <div class="gl-type-meta">Padrão Kintsugi<br>italic + cobre</div>
            <div style="font-family: var(--font-display); font-size: 2rem; font-weight: 500; color: var(--ink);">
                Reabilitação <span class="text--accent">especializada.</span>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         COMBINAÇÕES
         ═══════════════════════════════════════════════════ -->
    <section class="gl-section">
        <div class="gl-section-sub">Hierarquia em combinação</div>
        <h2 class="gl-section-title">Texto · acento · fundo</h2>

        <div class="gl-combos">
            <div class="gl-combo" style="background: var(--cream);">
                <div class="lbl" style="color: var(--ink-soft);">Editorial · Light</div>
                <div class="demo" style="color: var(--ink);">No seu ritmo. <em style="color: var(--copper);">Do jeito Rekintsu.</em></div>
            </div>
            <div class="gl-combo" style="background: var(--cream-deep);">
                <div class="lbl" style="color: var(--ink-soft);">Card de destaque</div>
                <div class="demo" style="color: var(--ink);">Conduzido por <em style="color: var(--copper-deep);">fisioterapeuta.</em></div>
            </div>
            <div class="gl-combo" style="background: var(--ink);">
                <div class="lbl" style="color: rgba(242,237,228,0.55);">Premium · Dark</div>
                <div class="demo" style="color: var(--cream);">Só 6 vagas <em style="color: var(--copper);">por turma.</em></div>
            </div>
            <div class="gl-combo" style="background: var(--copper);">
                <div class="lbl" style="color: rgba(255,255,255,0.7);">CTA · Acento</div>
                <div class="demo" style="color: #FFF; font-family: var(--font-base); font-size: 1.0625rem; font-weight: 600; letter-spacing: 0.02em;">Garantir minha vaga →</div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         BOTÕES
         ═══════════════════════════════════════════════════ -->
    <section class="gl-section">
        <div class="gl-section-sub">Componentes</div>
        <h2 class="gl-section-title">Botões</h2>

        <div style="display: flex; gap: 14px; flex-wrap: wrap; align-items: center; margin-bottom: 18px;">
            <a href="#" class="btn btn--gradient">Primário</a>
            <a href="#" class="btn btn--gradient btn--lg">Primário Grande</a>
            <a href="#" class="btn btn--accent">Outline (Acento)</a>
        </div>
        <div style="background: var(--ink); padding: 24px 28px; border-radius: var(--radius-md); display: inline-flex; gap: 14px; align-items: center;">
            <a href="#" class="btn btn--ghost">Ghost (sobre dark)</a>
            <a href="#" class="btn btn--gradient">Primário (sobre dark)</a>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         LOGO
         ═══════════════════════════════════════════════════ -->
    <section class="gl-section">
        <div class="gl-section-sub">Marca</div>
        <h2 class="gl-section-title">Logo</h2>

        <div class="gl-logos">
            <div class="gl-logo-card" style="background: var(--ink);">
                <img src="/site/assets/img/rekintsu-logo-svg.svg" alt="Rekintsu">
            </div>
            <div class="gl-logo-card" style="background: var(--cream); border: 1px solid var(--line);">
                <img src="/site/assets/img/logopreta-svg.svg" alt="Rekintsu">
            </div>
            <div class="gl-logo-card" style="background: var(--copper);">
                <img src="/site/assets/img/logobranca-svg.svg" alt="Rekintsu">
            </div>
        </div>
        <p style="margin-top: 18px; font-family: var(--font-base); font-size: 0.875rem; color: var(--ink-soft);">
            Header: <code style="font-family: monospace; background: var(--cream-deep); padding: 3px 8px; border-radius: 4px;">rekintsu-logo-svg.svg</code> ·
            Fundo claro: <code style="font-family: monospace; background: var(--cream-deep); padding: 3px 8px; border-radius: 4px;">logopreta-svg.svg</code> ·
            Rodapé / fundo cobre: <code style="font-family: monospace; background: var(--cream-deep); padding: 3px 8px; border-radius: 4px;">logobranca-svg.svg</code>
        </p>
    </section>

    <!-- ═══════════════════════════════════════════════════
         ESTRUTURA DE SEÇÕES
         ═══════════════════════════════════════════════════ -->
    <section class="gl-section">
        <div class="gl-section-sub">Arquitetura</div>
        <h2 class="gl-section-title">Seções da homepage</h2>

        <div class="gl-list">
            <?php
            $sections = [
                ['hero.php',               'Hero',              'Ink (#16140F)',     'Vídeo de fundo, título display, CTAs, stats'],
                ['clients.php',            'Specialties Strip', 'Ink Soft (#3A352B)','Strip de condições tratadas, sobrepõe o hero'],
                ['services.php',           'Especialidades',    'Cream (#F2EDE4)',   'Grid 3 colunas com 6 cards de serviço'],
                ['como-funciona-bloco.php','Como Funciona',     'Cream Deep',        'Processo de atendimento em 4 passos'],
                ['localizacao.php',        'Localização',       'Ink',               'Mapa visual, endereço e features'],
                ['about.php',              'Sobre a Clínica',   'Ink Soft',          'Foto da clínica, bio da Hayla, stats, CTA'],
                ['blog-preview.php',       'Depoimentos',       'Cream',             'Carrossel de avaliações Google'],
                ['contact.php',            'Contato',           'Ink',               'Formulário + informações de contato'],
                ['cta.php',                'CTA Final',         'Copper (cobre)',    'Chamada final para agendamento'],
            ];
            foreach ($sections as $s): ?>
            <div class="gl-list-item">
                <div style="display:flex; gap: 18px; align-items: center;">
                    <code><?= $s[0] ?></code>
                    <div>
                        <div class="ttl"><?= $s[1] ?></div>
                        <div class="meta"><?= $s[2] ?> · <?= $s[3] ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════
         PÁGINAS INTERNAS
         ═══════════════════════════════════════════════════ -->
    <section class="gl-section">
        <div class="gl-section-sub">Roteamento</div>
        <h2 class="gl-section-title">Páginas internas</h2>

        <div class="gl-list">
            <?php
            $paginas = [
                ['rekintsu-flow.php',         'Rekintsu Flow',          '/rekintsu-flow'],
                ['sobre-a-clinica.php',       'Sobre a Clínica',        '/sobre-a-clinica'],
                ['como-funciona.php',         'Como Funciona',          '/como-funciona'],
                ['pilates-gestantes.php',     'Pilates para Gestantes', '/pilates-gestantes'],
                ['pilates-hernias-lesoes.php','Pilates para Hérnias',   '/pilates-hernias-lesoes'],
                ['pilates-idosos.php',        'Pilates para Idosos',    '/pilates-idosos'],
                ['pilates-pos-cirurgico.php', 'Pilates Pós-Cirúrgico',  '/pilates-pos-cirurgico'],
            ];
            foreach ($paginas as $p): ?>
            <div class="gl-list-item">
                <div style="display:flex; gap: 18px; align-items: center;">
                    <code><?= $p[0] ?></code>
                    <div class="ttl"><?= $p[1] ?></div>
                </div>
                <a href="<?= $p[2] ?>" target="_blank"><?= $p[2] ?> ↗</a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

</div>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
