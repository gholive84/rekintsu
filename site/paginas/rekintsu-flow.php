<?php
$page_title       = 'Rekintsu Flow — Pilates Solo em Grupo | Curitiba';
$page_description = 'Turmas exclusivas de Pilates Solo conduzidas por fisioterapeuta. Até 8 pessoas por horário. Segunda a quinta, 18h e 19h. Centro Cívico, Curitiba.';
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
?>

<main>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 1 — HERO com vídeo YouTube (temporário)
         Substituir iframe pelo <video> local quando disponível
         ════════════════════════════════════════════════ -->
    <section class="flow-hero">
        <div class="flow-hero__bg">
            <div class="flow-hero__yt-wrap">
                <div id="flow-yt-player"></div>
            </div>
            <div class="flow-hero__overlay"></div>
            <div class="hero__bg-texture"></div>
        </div>
        <div class="container flow-hero__content">
            <span class="label">Horário Nobre · Turmas Exclusivas</span>
            <h1 class="flow-hero__title">Pilates solo com olhar clínico<br><span class="text--gradient">No seu ritmo. Do jeito Rekintsu</span></h1>
            <p class="flow-hero__subtitle">Turmas de até 6 pessoas, conduzidas por fisioterapeuta.<br>Segunda a quinta, às 18h e 19h. Só 6 vagas por horário.</p>
            <div class="flow-hero__actions">
                <a href="#vagas" class="btn btn--gradient btn--lg">
                    Ver horários e vagas
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 5v14M19 12l-7 7-7-7"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 2 — CONCEITO "THE PRIME HOUR"
         ════════════════════════════════════════════════ -->
    <section class="flow-concept">
        <div class="container">
            <div class="flow-concept__inner fade-up">
                <span class="label">O método</span>
                <h2 class="flow-concept__title">O fechamento perfeito<br>para o seu dia.</h2>
                <p class="flow-concept__text">Das 18h às 19h, o profissional do Centro Cívico tem uma escolha: ir direto para casa carregando o peso do dia — ou dedicar uma hora para destravar o corpo com precisão clínica. O Rekintsu Flow foi criado para esse momento. Não é academia. Não é aula genérica. É o método Rekintsu aplicado em grupo pequeno, no horário mais nobre da sua agenda.</p>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 3 — PARA QUEM É
         ════════════════════════════════════════════════ -->
    <section class="page-section page-section--mint">
        <div class="container">
            <div class="section-header fade-up">
                <span class="label">Para quem é</span>
                <h2 class="section-title">O Rekintsu Flow é para você<br>que está <span class="text--accent">pronto para se mover</span></h2>
            </div>
            <div class="flow-para-quem-grid fade-up">
                <div class="flow-para-quem-card">
                    <div class="flow-para-quem-card__icon">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <h3>Sem lesões ativas</h3>
                    <p>Você não tem patologias em tratamento e quer se movimentar com segurança e orientação técnica real.</p>
                </div>
                <div class="flow-para-quem-card">
                    <div class="flow-para-quem-card__icon">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3>Quer destravar o corpo</h3>
                    <p>Rigidez, postura, mobilidade limitada. O Flow trabalha amplitude de movimento com o rigor da fisioterapia.</p>
                </div>
                <div class="flow-para-quem-card">
                    <div class="flow-para-quem-card__icon">
                        <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <h3>Valoriza exclusividade</h3>
                    <p>Turmas de até 6 pessoas. Você não é mais um no mat — cada movimento é corrigido sob olhar clínico.</p>
                </div>
            </div>
            <p class="flow-para-quem-note fade-up">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>
                Todos os participantes assinam um termo de saúde confirmando ausência de lesões ativas. Caso seja identificada alguma condição específica, a Hayla indicará o atendimento clínico individual.
            </p>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 4 — DIFERENCIAIS DA ESTRUTURA
         ════════════════════════════════════════════════ -->
    <section class="page-section">
        <div class="container">
            <div class="section-header fade-up">
                <span class="label">Estrutura</span>
                <h2 class="section-title">Por que o Flow<br>é <span class="text--accent">diferente</span></h2>
            </div>
            <div class="flow-diferenciais-grid fade-up">
                <div class="feature-card">
                    <div class="feature-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                    </div>
                    <h3>Fisioterapeuta em cada turma</h3>
                    <p>Hayla Gomes — 13+ anos de experiência clínica. Não é instrutor de academia: é profissional de saúde.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <h3>Espaço exclusivo no Centro Cívico</h3>
                    <p>World Business Center, Av. Cândido de Abreu 776. A cinco minutos de qualquer ponto do Centro Cívico.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>
                    </div>
                    <h3>Equipamentos profissionais</h3>
                    <p>Mats, rolos, bolas e acessórios de pilates profissional — o mesmo padrão do atendimento clínico individual.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <h3>Só 6 alunos por turma</h3>
                    <p>Você não é número — é paciente. Com apenas 6 pessoas, a atenção é real e o espaço é de verdade.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <h3>Horários noturnos</h3>
                    <p>Segunda a quinta, 18h e 19h. Pensado para quem trabalha no centro e quer encerrar o dia com qualidade.</p>
                </div>
                <div class="feature-card feature-card--accent">
                    <div class="feature-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <h3>Porta de entrada para o Clínico</h3>
                    <p>Alunos do Flow têm prioridade na lista de espera do atendimento clínico individual — quando precisarem evoluir.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 5 — PREÇOS
         ════════════════════════════════════════════════ -->
    <section class="flow-pricing-section">
        <div class="container">
            <div class="section-header fade-up">
                <span class="label" style="color:var(--color-accent)">Investimento</span>
                <h2 class="section-title" style="color:var(--color-white)">Simples, transparente,<br><span class="text--gradient">sem taxas surpresa</span></h2>
            </div>
            <div class="flow-pricing-grid fade-up">

                <div class="plan-card">
                    <div class="plan-card__tag">Plano Essencial</div>
                    <div class="flow-plan-freq">1× por semana</div>
                    <div class="flow-price">
                        <span class="flow-price__amount">R$ 290</span>
                        <span class="flow-price__period">/mês</span>
                    </div>
                    <div class="flow-price__per-class">≈ R$ 72,50 por aula</div>
                    <ul class="flow-plan-list">
                        <li>4 aulas por mês</li>
                        <li>Turmas de até 6 pessoas</li>
                        <li>Conduzido por fisioterapeuta</li>
                        <li>Seg–Qui, 18h ou 19h</li>
                    </ul>
                    <a href="<?= $wa_1x ?>" class="btn btn--ghost btn--lg flow-plan-btn" target="_blank" rel="noopener">
                        Quero começar
                    </a>
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
                    </div>
                    <div class="flow-price__economy">Economia de R$ 83 por mês</div>
                    <div class="flow-price__per-class">≈ R$ 49,62 por aula</div>
                    <ul class="flow-plan-list">
                        <li>8 aulas por mês</li>
                        <li>Turmas de até 6 pessoas</li>
                        <li>Conduzido por fisioterapeuta</li>
                        <li>Seg–Qui, 18h ou 19h</li>
                        <li><strong>Prioridade na lista clínica</strong></li>
                    </ul>
                    <a href="<?= $wa_2x ?>" class="btn btn--gradient btn--lg flow-plan-btn" target="_blank" rel="noopener">
                        Garantir minha vaga
                    </a>
                </div>

            </div>
            <p class="flow-pricing-note fade-up">Mensalidade recorrente. Sem taxa de matrícula. Vagas confirmadas por ordem de contato.</p>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 6 — COMPARATIVO FLOW vs CLÍNICO
         ════════════════════════════════════════════════ -->
    <section class="page-section">
        <div class="container">
            <div class="section-header fade-up">
                <span class="label">Comparativo</span>
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
            <p class="flow-comparison-note fade-up">
                Muitos alunos do Flow evoluem naturalmente para o atendimento clínico. Quando isso acontece, eles têm prioridade no agendamento.
            </p>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 7 — URGÊNCIA / VAGAS
         ════════════════════════════════════════════════ -->
    <section class="flow-urgency" id="vagas">
        <div class="container">
            <div class="flow-urgency__inner fade-up">
                <span class="label flow-urgency__label">Disponibilidade em tempo real</span>
                <h2 class="flow-urgency__title">Escolha seu horário<br>e garanta sua vaga.</h2>
                <p class="flow-urgency__text">Apenas 6 pessoas por turma. Quando a turma fecha, fecha. Toque no horário desejado e fale direto com a Hayla pelo WhatsApp.</p>
            </div>

            <div class="flow-schedules fade-up">
                <?php foreach ($turmas as $t):
                    $livres   = max(0, (int)$t['vagas']);
                    $ocupadas = $t['total'] - $livres;
                    $fechada  = $livres === 0;

                    if ($fechada) {
                        $status_class = 'flow-vagas-label--fechada';
                        $status_txt   = 'Turma fechada';
                        $cta_label    = 'Entrar na lista de espera';
                        $msg          = 'Olá! A turma de ' . $t['dias'] . ' às ' . $t['hora'] . ' do Rekintsu Flow está fechada. Gostaria de entrar na lista de espera.';
                    } else {
                        if ($livres === 1) {
                            $status_class = 'flow-vagas-label--ultima';
                            $status_txt   = 'Última vaga';
                        } elseif ($livres <= 2) {
                            $status_class = 'flow-vagas-label--poucas';
                            $status_txt   = $livres . ' vagas restantes';
                        } else {
                            $status_class = 'flow-vagas-label--ok';
                            $status_txt   = $livres . ' vagas disponíveis';
                        }
                        $cta_label = 'Quero esta vaga';
                        $msg = 'Olá! Quero garantir minha vaga no Rekintsu Flow — turma de ' . $t['dias'] . ' às ' . $t['hora'] . '.';
                    }

                    $wa_turma = $wa_base . rawurlencode($msg);
                ?>
                <article class="flow-schedule-card<?= $fechada ? ' flow-schedule-card--fechada' : '' ?><?= $livres === 1 ? ' flow-schedule-card--ultima' : '' ?>">
                    <div class="flow-schedule-card__header">
                        <span class="flow-schedule-card__days"><?= htmlspecialchars($t['dias']) ?></span>
                        <span class="flow-vagas-label <?= $status_class ?>"><?= $status_txt ?></span>
                    </div>
                    <div class="flow-schedule-card__time-row">
                        <span class="flow-schedule-card__time"><?= htmlspecialchars($t['hora']) ?></span>
                        <span class="flow-schedule-card__duration">Sessão de 50min</span>
                    </div>
                    <div class="flow-schedule-card__vagas">
                        <div class="flow-vagas-dots" aria-label="<?= $livres ?> vagas livres de <?= $t['total'] ?>">
                            <?php for ($i = 0; $i < $t['total']; $i++): ?>
                            <span class="flow-vaga-dot <?= $i < $ocupadas ? 'flow-vaga-dot--ocupada' : 'flow-vaga-dot--livre' ?>"></span>
                            <?php endfor; ?>
                        </div>
                        <span class="flow-schedule-card__vagas-text"><?= $livres ?>/<?= $t['total'] ?> vagas</span>
                    </div>
                    <a href="<?= $wa_turma ?>"
                       class="btn flow-schedule-card__cta <?= $fechada ? 'btn--ghost' : 'btn--gradient' ?>"
                       target="_blank" rel="noopener"
                       aria-label="<?= $cta_label ?> — <?= htmlspecialchars($t['dias']) ?> às <?= htmlspecialchars($t['hora']) ?>">
                        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                        <?= $cta_label ?>
                    </a>
                </article>
                <?php endforeach; ?>
            </div>

            <p class="flow-schedules-note fade-up">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>
                Vagas confirmadas por ordem de contato. As bolinhas representam alunos já confirmados na turma.
            </p>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 8 — SOBRE A HAYLA
         ════════════════════════════════════════════════ -->
    <section class="page-section">
        <div class="container page-section__inner page-section__inner--2col">
            <div class="page-section__visual fade-up">
                <img src="/site/assets/img/esticando.jpg" alt="Hayla Gomes — Fisioterapeuta Rekintsu Flow" class="page-section__img" loading="lazy">
            </div>
            <div class="fade-up">
                <span class="label">Quem conduz</span>
                <h2 class="page-section__title">Conduzido por<br><span class="text--gradient">fisioterapeuta</span></h2>
                <p class="page-section__text">O Rekintsu Flow é conduzido pela fisioterapeuta Hayla Gomes. Com mais de 13 anos de experiência clínica e especializações em pilates terapêutico, osteopatia e liberação miofascial, Hayla traz para cada turma o mesmo rigor técnico do atendimento individual — adaptado para o grupo reduzido.</p>
                <div class="flow-hayla-quote">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
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
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 9 — FAQ
         ════════════════════════════════════════════════ -->
    <section class="page-section page-section--mint">
        <div class="container">
            <div class="section-header fade-up">
                <span class="label">Dúvidas frequentes</span>
                <h2 class="section-title">Perguntas sobre<br>o <span class="text--accent">Rekintsu Flow</span></h2>
            </div>
            <div class="flow-faq fade-up">
                <details class="flow-faq-item">
                    <summary class="flow-faq-summary">
                        Preciso ter experiência com Pilates?
                        <svg class="flow-faq-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="flow-faq-answer">
                        <p>Não. As turmas são adaptadas para todos os níveis. O importante é não ter lesões ativas em tratamento.</p>
                    </div>
                </details>
                <details class="flow-faq-item">
                    <summary class="flow-faq-summary">
                        Como funciona a entrada na turma?
                        <svg class="flow-faq-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="flow-faq-answer">
                        <p>Você entra em contato pelo WhatsApp, escolhe o horário e assina um termo de saúde confirmando que não possui lesões em tratamento. Simples e sem burocracia.</p>
                    </div>
                </details>
                <details class="flow-faq-item">
                    <summary class="flow-faq-summary">
                        É diferente do Pilates Clínico da Rekintsu?
                        <svg class="flow-faq-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="flow-faq-answer">
                        <p>Sim. O Flow é uma modalidade em grupo, focada em mobilidade e condicionamento. Para tratamento de lesões, hérnias, pós-cirúrgico ou condições específicas, o indicado é o atendimento clínico individual.</p>
                    </div>
                </details>
                <details class="flow-faq-item">
                    <summary class="flow-faq-summary">
                        Posso migrar para o atendimento clínico depois?
                        <svg class="flow-faq-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="flow-faq-answer">
                        <p>Sim — e alunos do Flow têm prioridade na lista de espera do atendimento clínico quando precisarem evoluir para o individual.</p>
                    </div>
                </details>
                <details class="flow-faq-item">
                    <summary class="flow-faq-summary">
                        E se eu sentir alguma dificuldade durante as aulas?
                        <svg class="flow-faq-icon" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <div class="flow-faq-answer">
                        <p>A Hayla está presente em cada turma. Se identificar qualquer limitação que exija atenção individual, você será orientado sobre o melhor caminho — sem custo adicional de consulta.</p>
                    </div>
                </details>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 10 — CTA FINAL
         ════════════════════════════════════════════════ -->
    <section class="page-cta">
        <div class="container page-cta__inner">
            <h2 class="page-cta__title">Pronto para fechar o dia do jeito certo?</h2>
            <p class="page-cta__text">Vagas limitadas. Entre em contato e garanta o seu horário.</p>
            <a href="<?= $wa_geral ?>" class="btn btn--gradient btn--lg" target="_blank" rel="noopener">
                Falar com a Hayla
            </a>
        </div>
    </section>

</main>

<script>
(function () {
    var START = 5, END = 22, player, watchdog;

    function createPlayer() {
        player = new YT.Player('flow-yt-player', {
            videoId: 'ZiqnpZGTP4Q',
            playerVars: {
                autoplay: 1,
                mute: 1,
                controls: 0,
                rel: 0,
                playsinline: 1,
                modestbranding: 1,
                showinfo: 0,
                iv_load_policy: 3,
                start: START,
                end: END
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

    if (typeof YT !== 'undefined' && YT.Player) {
        createPlayer();
    } else {
        window.onYouTubeIframeAPIReady = createPlayer;
        var tag = document.createElement('script');
        tag.src = 'https://www.youtube.com/iframe_api';
        document.head.appendChild(tag);
    }
})();
</script>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
