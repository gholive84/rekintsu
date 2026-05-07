<?php
$page_title       = 'Rekintsu Flow — Pilates Solo em Grupo | Curitiba';
$page_description = 'Turmas exclusivas de Pilates Solo conduzidas por fisioterapeuta. Até 6 pessoas por horário. Segunda a quinta, 18h e 19h. Centro Cívico, Curitiba.';
include dirname(__DIR__) . '/includes/head-page.php';
include dirname(__DIR__) . '/includes/header.php';

$wa_base  = 'https://wa.me/5541991191501?text=';
$wa_geral = $wa_base . rawurlencode('Olá! Tenho interesse no Rekintsu Flow. Gostaria de saber sobre as vagas disponíveis.');
$wa_1x    = $wa_base . rawurlencode('Olá! Tenho interesse no Rekintsu Flow 1x por semana.');
$wa_2x    = $wa_base . rawurlencode('Olá! Tenho interesse no Rekintsu Flow 2x por semana.');

// ── Vagas por turma — atualizar conforme necessário ──────────────────────────
$turmas = [
    ['dias' => 'Segunda e Quarta', 'hora' => '18h', 'vagas' => 3, 'total' => 6],
    ['dias' => 'Segunda e Quarta', 'hora' => '19h', 'vagas' => 2, 'total' => 6],
    ['dias' => 'Terça e Quinta',   'hora' => '18h', 'vagas' => 4, 'total' => 6],
    ['dias' => 'Terça e Quinta',   'hora' => '19h', 'vagas' => 1, 'total' => 6],
];

// CSS + fontes específicos desta página (não afetam o resto do site)
$flow_css_path = $_SERVER['DOCUMENT_ROOT'] . '/site/assets/css/rekintsu-flow.css';
$flow_v        = file_exists($flow_css_path) ? filemtime($flow_css_path) : time();
?>

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;1,400;1,500&family=Inter+Tight:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/site/assets/css/rekintsu-flow.css?v=<?= $flow_v ?>">

<main class="flow-page">

    <!-- ═══════════════════════════════════════════════════════════════
         HERO editorial — texto à esquerda + corpo kintsugi à direita
         ═══════════════════════════════════════════════════════════════ -->
    <section class="flow-hero">
        <div class="flow-hero__topbar container">
            <span><img src="/site/assets/img/logopreta-svg.svg" alt="Rekintsu" style="height:18px; opacity:0.85; display:inline-block; vertical-align:middle;"></span>
            <span>Curitiba · Centro Cívico</span>
        </div>
        <div class="container">
            <div class="flow-hero__grid">
                <div class="flow-hero__col">
                    <span class="flow-eyebrow">Pilates Solo em Grupo</span>
                    <h1 class="flow-hero__title">Rekintsu<em>Flow.</em></h1>
                    <p class="flow-hero__lede">Pilates solo com olhar clínico,<br>no seu ritmo. Do jeito Rekintsu.</p>
                    <div class="flow-hero__cta-wrap">
                        <a href="#vagas" class="flow-btn flow-btn--ink">
                            Ver vagas
                            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                        </a>
                        <a href="<?= $wa_geral ?>" class="flow-btn flow-btn--outline" target="_blank" rel="noopener">
                            Falar com a Hayla
                        </a>
                    </div>
                </div>
                <div class="flow-hero__visual">
                    <img src="/site/assets/img/homem-kintsugi.jpg" alt="Corpo em mármore com fissuras douradas — metáfora kintsugi" loading="eager">
                </div>
            </div>

            <!-- Strip de stats no rodapé do hero -->
            <div class="flow-hero__stats">
                <div>
                    <div class="flow-hero__stat-num"><em>13+</em></div>
                    <div class="flow-hero__stat-label">Anos de experiência clínica</div>
                </div>
                <div>
                    <div class="flow-hero__stat-num">até <em>6</em></div>
                    <div class="flow-hero__stat-label">Pessoas por turma</div>
                </div>
                <div>
                    <div class="flow-hero__stat-num">18h–19h</div>
                    <div class="flow-hero__stat-label">Segunda a quinta</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         CONCEITO — "o fechamento perfeito"
         ═══════════════════════════════════════════════════════════════ -->
    <section class="flow-concept flow-section--tight">
        <div class="container">
            <div class="flow-concept__inner fade-up">
                <span class="flow-eyebrow" style="justify-content:center;">O método</span>
                <h2 class="flow-concept__title">O fechamento perfeito<br>para o <span class="flow-italic">seu dia.</span></h2>
                <p class="flow-concept__text">Das 18h às 19h, o profissional do Centro Cívico tem uma escolha: ir direto pra casa carregando o peso do dia — ou dedicar uma hora pra destravar o corpo com precisão clínica. O Rekintsu Flow foi criado pra esse momento.</p>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         PARA QUEM É — grade editorial
         ═══════════════════════════════════════════════════════════════ -->
    <section class="flow-para-quem">
        <div class="container">
            <div class="flow-para-quem__header fade-up">
                <span class="flow-eyebrow">Para quem é</span>
                <h2 class="flow-para-quem__title">O Flow é pra você que está <span class="flow-italic">pronto pra se mover.</span></h2>
            </div>
            <div class="flow-para-quem-grid fade-up">
                <div class="flow-para-quem-card">
                    <div class="flow-para-quem-card__icon">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.25" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3>Sem lesões ativas</h3>
                    <p>Você não tem patologias em tratamento e quer se movimentar com segurança e orientação técnica real.</p>
                </div>
                <div class="flow-para-quem-card">
                    <div class="flow-para-quem-card__icon">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.25" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3>Quer destravar o corpo</h3>
                    <p>Rigidez, postura, mobilidade limitada. O Flow trabalha amplitude de movimento com o rigor da fisioterapia.</p>
                </div>
                <div class="flow-para-quem-card">
                    <div class="flow-para-quem-card__icon">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.25" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <h3>Valoriza exclusividade</h3>
                    <p>Turmas de até 6 pessoas. Você não é mais um no mat — cada movimento é corrigido sob olhar clínico.</p>
                </div>
            </div>
            <p class="flow-para-quem-note">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>
                Todos os participantes assinam um termo de saúde confirmando ausência de lesões ativas. Caso seja identificada alguma condição, a Hayla indicará o atendimento clínico individual.
            </p>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         IMAGEM EDITORIAL — corpo kintsugi 2 (transição visual)
         ═══════════════════════════════════════════════════════════════ -->
    <section class="flow-editorial-image">
        <div class="flow-editorial-image__inner">
            <img src="/site/assets/img/homem-kintsugi2.jpg" alt="Corpo em movimento — o método aplicado" loading="lazy">
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         DIFERENCIAIS
         ═══════════════════════════════════════════════════════════════ -->
    <section class="flow-diferenciais">
        <div class="container">
            <div class="flow-diferenciais__header fade-up">
                <span class="flow-eyebrow">Estrutura</span>
                <h2 class="flow-diferenciais__title">Por que o Flow<br>é <span class="flow-italic">diferente.</span></h2>
            </div>
            <div class="flow-diferenciais-grid fade-up">
                <div class="feature-card">
                    <div class="feature-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.25" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <h3>Fisioterapeuta em cada turma</h3>
                    <p>Hayla Gomes — 13+ anos de experiência clínica. Não é instrutor de academia: é profissional de saúde.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.25" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <h3>Espaço exclusivo no Centro Cívico</h3>
                    <p>World Business Center, Av. Cândido de Abreu 776. A cinco minutos de qualquer ponto do Centro Cívico.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.25" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>
                    </div>
                    <h3>Equipamentos profissionais</h3>
                    <p>Mats, rolos, bolas e acessórios de pilates profissional — o mesmo padrão do atendimento clínico individual.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.25" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3>Só 6 alunos por turma</h3>
                    <p>Você não é número — é paciente. Com apenas 6 pessoas, a atenção é real e o espaço é de verdade.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.25" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <h3>Horários noturnos</h3>
                    <p>Segunda a quinta, 18h e 19h. Pensado pra quem trabalha no centro e quer encerrar o dia com qualidade.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.25" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <h3>Porta de entrada para o Clínico</h3>
                    <p>Alunos do Flow têm prioridade na lista de espera do atendimento clínico individual — quando precisarem evoluir.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         PREÇOS — card cream + card ink
         ═══════════════════════════════════════════════════════════════ -->
    <section class="flow-pricing-section">
        <div class="container">
            <div class="section-header fade-up">
                <span class="flow-eyebrow">Planos · Sem taxa de matrícula</span>
                <h2 class="section-title">Simples,<br><span>transparente.</span></h2>
            </div>

            <div class="flow-pricing-grid fade-up">
                <div class="plan-card">
                    <div class="plan-card__tag">Plano Essencial</div>
                    <div class="flow-plan-freq">1× por semana</div>
                    <div class="flow-price">
                        <div class="flow-price__main">
                            <span class="flow-price__amount">R$ 290</span>
                            <span class="flow-price__period">/mês</span>
                        </div>
                        <div class="flow-price__per-class">≈ R$ 72,50 / aula</div>
                    </div>
                    <ul class="flow-plan-list">
                        <li>4 aulas/mês</li>
                        <li>Turma até 6</li>
                        <li>Conduzido por fisioterapeuta</li>
                        <li>Seg–Qui, 18h ou 19h</li>
                    </ul>
                    <a href="<?= $wa_1x ?>" class="flow-plan-btn" target="_blank" rel="noopener">Quero começar</a>
                </div>

                <div class="plan-card plan-card--featured">
                    <div class="plan-card__badge">Mais escolhido</div>
                    <div class="plan-card__tag">Plano Flow</div>
                    <div class="flow-plan-freq">2× por semana</div>
                    <div class="flow-price">
                        <span class="flow-price__original">R$ 480</span>
                        <div class="flow-price__main">
                            <span class="flow-price__amount">R$ 397</span>
                            <span class="flow-price__period">/mês</span>
                        </div>
                        <div class="flow-price__economy">Economize R$ 83 / mês</div>
                    </div>
                    <ul class="flow-plan-list">
                        <li>8 aulas/mês</li>
                        <li>Turma até 6</li>
                        <li>Conduzido por fisioterapeuta</li>
                        <li>Seg–Qui, 18h ou 19h</li>
                        <li><strong>Prioridade na lista clínica</strong></li>
                    </ul>
                    <a href="<?= $wa_2x ?>" class="flow-plan-btn" target="_blank" rel="noopener">Garantir minha vaga</a>
                </div>
            </div>

            <div class="flow-pricing-cta fade-up">
                <div class="flow-pricing-cta__text">
                    Garantir minha vaga
                    <small>Conduzido por fisioterapeuta · Resposta em até 1h</small>
                </div>
                <a href="<?= $wa_geral ?>" target="_blank" rel="noopener">
                    Falar no WhatsApp
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                </a>
            </div>
            <p class="flow-pricing-note fade-up">Mensalidade recorrente. Vagas confirmadas por ordem de contato.</p>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         COMPARATIVO
         ═══════════════════════════════════════════════════════════════ -->
    <section class="flow-comparison-section">
        <div class="container">
            <div class="section-header fade-up">
                <span class="flow-eyebrow">Comparativo</span>
                <h2 class="section-title">Flow ou Clínico:<br><span class="text--accent">qual é o seu momento?</span></h2>
            </div>
            <div class="flow-comparison-wrap fade-up">
                <table class="flow-comparison">
                    <thead>
                        <tr>
                            <th class="flow-comparison__th-empty"></th>
                            <th class="flow-comparison__th-highlight">
                                <span class="flow-comparison__badge">Você está aqui</span>
                                Rekintsu Flow
                                <small>Solo em Grupo</small>
                            </th>
                            <th>
                                Pilates Clínico
                                <small>Atendimento Individual</small>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="flow-comparison__label">Foco</td>
                            <td>Mobilidade, postura e condicionamento</td>
                            <td>Reabilitação e condições específicas</td>
                        </tr>
                        <tr>
                            <td class="flow-comparison__label">Público</td>
                            <td>Saudável, sem lesões ativas</td>
                            <td>Casos clínicos, pós-operatório, patologias</td>
                        </tr>
                        <tr>
                            <td class="flow-comparison__label">Equipamento</td>
                            <td>Mat e acessórios (solo)</td>
                            <td>Reformer, Cadillac e aparelhos completos</td>
                        </tr>
                        <tr>
                            <td class="flow-comparison__label">Supervisão</td>
                            <td>Fisioterapeuta (grupo até 6)</td>
                            <td>Fisioterapeuta (individual ou dupla)</td>
                        </tr>
                        <tr>
                            <td class="flow-comparison__label">Horários</td>
                            <td>Seg–Qui, 18h e 19h</td>
                            <td>Seg–Sex, horários disponíveis</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p class="flow-comparison-note">
                Muitos alunos do Flow evoluem naturalmente para o atendimento clínico. Quando isso acontece, eles têm prioridade no agendamento.
            </p>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         URGÊNCIA / VAGAS — referência editorial
         ═══════════════════════════════════════════════════════════════ -->
    <section class="flow-urgency" id="vagas">
        <div class="container">
            <div class="flow-urgency__inner fade-up">
                <span class="flow-eyebrow flow-urgency__label">Disponibilidade · Novembro</span>
                <h2 class="flow-urgency__title">Só <em>6 vagas</em><br>por turma. Quando<br>fecha, fecha.</h2>
                <p class="flow-urgency__text">Não é promessa de marketing — é a estrutura do método. Toque no horário desejado e fale direto com a Hayla pelo WhatsApp.</p>
            </div>

            <div class="flow-schedules fade-up">
                <?php foreach ($turmas as $t):
                    $livres   = max(0, (int)$t['vagas']);
                    $ocupadas = $t['total'] - $livres;
                    $fechada  = $livres === 0;

                    if ($fechada) {
                        $status_class = 'flow-vagas-label--fechada';
                        $status_txt   = 'Turma fechada';
                        $msg          = 'Olá! A turma de ' . $t['dias'] . ' às ' . $t['hora'] . ' está fechada. Gostaria de entrar na lista de espera.';
                    } else {
                        if ($livres === 1) {
                            $status_class = 'flow-vagas-label--ultima';
                            $status_txt   = 'Última vaga';
                        } elseif ($livres <= 2) {
                            $status_class = 'flow-vagas-label--poucas';
                            $status_txt   = $livres . ' vagas';
                        } else {
                            $status_class = 'flow-vagas-label--ok';
                            $status_txt   = $livres . ' vagas';
                        }
                        $msg = 'Olá! Quero garantir minha vaga no Rekintsu Flow — turma de ' . $t['dias'] . ' às ' . $t['hora'] . '.';
                    }
                    $wa_turma = $wa_base . rawurlencode($msg);
                ?>
                <a href="<?= $wa_turma ?>" target="_blank" rel="noopener" class="flow-schedule-card<?= $fechada ? ' flow-schedule-card--fechada' : '' ?><?= $livres === 1 ? ' flow-schedule-card--ultima' : '' ?>" style="text-decoration:none; color:inherit;">
                    <div class="flow-schedule-card__header">
                        <span class="flow-schedule-card__days"><?= htmlspecialchars(str_replace([' e ', 'Segunda', 'Terça', 'Quarta', 'Quinta'], [' & ', 'Seg', 'Ter', 'Qua', 'Qui'], $t['dias'])) ?></span>
                        <span class="flow-schedule-card__duration">Turma · 60min</span>
                    </div>
                    <div class="flow-schedule-card__time-row">
                        <span class="flow-schedule-card__time"><?= htmlspecialchars($t['hora']) ?></span>
                    </div>
                    <div class="flow-schedule-card__vagas">
                        <span class="flow-vagas-label <?= $status_class ?>"><?= $status_txt ?></span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>

            <div class="flow-urgency__cta-bar fade-up">
                <a href="<?= $wa_geral ?>" target="_blank" rel="noopener">
                    Garantir minha vaga
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                </a>
                <small>WhatsApp · Resposta em até 1h</small>
            </div>

            <dl class="flow-urgency__footer">
                <div>
                    <dt>WhatsApp</dt>
                    <dd>(41) 99119-1501</dd>
                </div>
                <div style="text-align:right;">
                    <dt>Endereço</dt>
                    <dd>Av. Cândido de Abreu, 776 · 404</dd>
                </div>
            </dl>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         SOBRE A HAYLA
         ═══════════════════════════════════════════════════════════════ -->
    <section class="flow-hayla-section">
        <div class="container">
            <div class="page-section__inner page-section__inner--2col">
                <div class="page-section__visual fade-up">
                    <img src="/site/assets/img/esticando.jpg" alt="Hayla Gomes — Fisioterapeuta Rekintsu Flow" class="page-section__img" loading="lazy">
                </div>
                <div class="fade-up">
                    <span class="flow-eyebrow">Quem conduz</span>
                    <h2 class="page-section__title">Conduzido por<br><span class="text--gradient">fisioterapeuta.</span></h2>
                    <p class="page-section__text">O Rekintsu Flow é conduzido pela fisioterapeuta Hayla Gomes. Com mais de 13 anos de experiência clínica e especializações em pilates terapêutico, osteopatia e liberação miofascial, Hayla traz para cada turma o mesmo rigor técnico do atendimento individual — adaptado para o grupo reduzido.</p>
                    <div class="flow-hayla-quote">
                        <p>Aqui, você não é corrigido por um instrutor de academia.<br>Você é orientado por uma fisioterapeuta.</p>
                    </div>
                    <ul class="page-check-list">
                        <li>13+ anos de experiência clínica</li>
                        <li>Especialização em Pilates Terapêutico</li>
                        <li>Osteopatia e Liberação Miofascial</li>
                        <li>Atendimento exclusivo no World Business Center</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         FAQ
         ═══════════════════════════════════════════════════════════════ -->
    <section class="flow-faq-section">
        <div class="container">
            <div class="section-header fade-up">
                <span class="flow-eyebrow">Dúvidas frequentes</span>
                <h2 class="section-title">Perguntas sobre<br>o <span class="text--accent">Rekintsu Flow.</span></h2>
            </div>
            <div class="flow-faq fade-up">
                <details class="flow-faq-item">
                    <summary class="flow-faq-summary">
                        Preciso ter experiência com Pilates?
                        <svg class="flow-faq-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="flow-faq-answer">
                        <p>Não. As turmas são adaptadas para todos os níveis. O importante é não ter lesões ativas em tratamento.</p>
                    </div>
                </details>
                <details class="flow-faq-item">
                    <summary class="flow-faq-summary">
                        Como funciona a entrada na turma?
                        <svg class="flow-faq-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="flow-faq-answer">
                        <p>Você entra em contato pelo WhatsApp, escolhe o horário e assina um termo de saúde confirmando que não possui lesões em tratamento. Simples e sem burocracia.</p>
                    </div>
                </details>
                <details class="flow-faq-item">
                    <summary class="flow-faq-summary">
                        É diferente do Pilates Clínico da Rekintsu?
                        <svg class="flow-faq-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="flow-faq-answer">
                        <p>Sim. O Flow é uma modalidade em grupo, focada em mobilidade e condicionamento. Para tratamento de lesões, hérnias, pós-cirúrgico ou condições específicas, o indicado é o atendimento clínico individual.</p>
                    </div>
                </details>
                <details class="flow-faq-item">
                    <summary class="flow-faq-summary">
                        Posso migrar para o atendimento clínico depois?
                        <svg class="flow-faq-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="flow-faq-answer">
                        <p>Sim — e alunos do Flow têm prioridade na lista de espera do atendimento clínico quando precisarem evoluir para o individual.</p>
                    </div>
                </details>
                <details class="flow-faq-item">
                    <summary class="flow-faq-summary">
                        E se eu sentir alguma dificuldade durante as aulas?
                        <svg class="flow-faq-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="flow-faq-answer">
                        <p>A Hayla está presente em cada turma. Se identificar qualquer limitação que exija atenção individual, você será orientado sobre o melhor caminho — sem custo adicional de consulta.</p>
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════════════════════════
         CTA FINAL
         ═══════════════════════════════════════════════════════════════ -->
    <section class="flow-page-cta">
        <div class="container">
            <h2 class="flow-page-cta__title">Pronto pra fechar<br>o dia <em>do jeito certo?</em></h2>
            <p class="flow-page-cta__text">Vagas limitadas. Entre em contato e garanta o seu horário.</p>
            <a href="<?= $wa_geral ?>" class="flow-btn flow-btn--copper" target="_blank" rel="noopener">
                Falar com a Hayla
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
            </a>
        </div>
    </section>

</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
