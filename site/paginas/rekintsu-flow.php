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
    ['dias' => 'Segunda e Quarta', 'dias_curto' => 'Seg & Qua', 'hora' => '18h', 'vagas' => 4, 'total' => 6],
    ['dias' => 'Segunda e Quarta', 'dias_curto' => 'Seg & Qua', 'hora' => '19h', 'vagas' => 5, 'total' => 6],
    ['dias' => 'Terça e Quinta',   'dias_curto' => 'Ter & Qui', 'hora' => '18h', 'vagas' => 4, 'total' => 6],
    ['dias' => 'Terça e Quinta',   'dias_curto' => 'Ter & Qui', 'hora' => '19h', 'vagas' => 5, 'total' => 6],
];
?>

<main class="flow-page">

    <!-- ════════════════════════════════════════════════
         SEÇÃO 1 — HERO com vídeo YouTube
         ════════════════════════════════════════════════ -->
    <section class="flow-hero">
        <div class="flow-hero__video-wrap">
            <div id="flow-yt-player"></div>
        </div>
        <div class="flow-hero__overlay"></div>
        <img src="/site/assets/img/perna-mulher.jpeg"
             alt=""
             class="flow-hero__img-accent"
             aria-hidden="true"
             loading="eager">

        <div class="container flow-hero__inner">
            <div class="flow-hero__content">
                <span class="flow-eyebrow">Pilates Solo em Grupo</span>
                <h1 class="flow-hero__title">
                    Rekintsu<br>
                    <em>Flow.</em>
                </h1>
                <p class="flow-hero__subtitle"><em>Pilates solo com olhar clínico,<br>no seu ritmo. Do jeito Rekintsu.</em></p>
                <a href="#vagas" class="flow-btn-arrow">
                    Ver horários e vagas
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M12 5v14M19 12l-7 7-7-7"/></svg>
                </a>
            </div>
        </div>

        <div class="flow-hero__stats">
            <div class="container flow-hero__stats-inner">
                <div class="flow-stat">
                    <span class="flow-stat__num">13+</span>
                    <span class="flow-stat__label">Anos de experiência clínica</span>
                </div>
                <div class="flow-stat__divider"></div>
                <div class="flow-stat">
                    <span class="flow-stat__num">até 6</span>
                    <span class="flow-stat__label">Pessoas por turma</span>
                </div>
                <div class="flow-stat__divider"></div>
                <div class="flow-stat">
                    <span class="flow-stat__num">18h–19h</span>
                    <span class="flow-stat__label">Segunda a quinta</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 2 — CONCEITO
         ════════════════════════════════════════════════ -->
    <section class="flow-concept">
        <div class="container">
            <span class="flow-eyebrow">O horário nobre do seu dia</span>
            <p class="flow-concept__statement fade-up">Das 18h às 19h, o profissional do Centro Cívico tem uma escolha: ir direto para casa carregando o peso do dia — ou dedicar uma hora para destravar o corpo com <em>precisão clínica.</em></p>
            <p class="flow-concept__sub fade-up">O Rekintsu Flow foi criado para esse momento. Não é academia. Não é aula genérica. É o método Rekintsu aplicado em grupo pequeno, no horário mais nobre da sua agenda.</p>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 3 — PARA QUEM É
         ════════════════════════════════════════════════ -->
    <section class="flow-section flow-section--cream">
        <div class="container">
            <div class="flow-section-header fade-up">
                <span class="flow-eyebrow">Para quem é</span>
                <h2 class="flow-section-title">O Rekintsu Flow é para você<br>que está <em>pronto para se mover</em></h2>
            </div>
            <div class="flow-info-blocks fade-up">
                <div class="flow-info-block">
                    <span class="flow-info-block__label">Público</span>
                    <h3 class="flow-info-block__title">Sem lesões ativas</h3>
                    <p>que buscam máxima mobilidade e alongamento.</p>
                </div>
                <div class="flow-info-block">
                    <span class="flow-info-block__label">Formato</span>
                    <h3 class="flow-info-block__title">Turmas reduzidas (máx. 6)</h3>
                    <p>para garantir que sua performance seja lapidada no detalhe.</p>
                </div>
                <div class="flow-info-block">
                    <span class="flow-info-block__label">Horário Nobre</span>
                    <h3 class="flow-info-block__title">18h e 19h</h3>
                    <p>a transição perfeita entre o seu trabalho e seu bem-estar.</p>
                </div>
            </div>
            <p class="flow-note fade-up">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>
                Todos os participantes assinam um termo de saúde confirmando ausência de lesões ativas. Caso seja identificada alguma condição específica, a Hayla indicará o atendimento clínico individual.
            </p>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 4 — STATEMENT ESCURO
         ════════════════════════════════════════════════ -->
    <section class="flow-dark-statement">
        <div class="container fade-up">
            <span class="flow-eyebrow">O diferencial?</span>
            <p class="flow-big-statement">Não é apenas exercício.<br><em>É curadoria de movimento</em><br>conduzida por quem entende de<br><em>anatomia clínica.</em></p>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 5 — DIFERENCIAIS
         ════════════════════════════════════════════════ -->
    <section class="flow-section flow-section--cream-deep">
        <div class="container">
            <div class="flow-section-header fade-up">
                <span class="flow-eyebrow">Estrutura</span>
                <h2 class="flow-section-title">Por que o Flow<br>é <em>diferente</em></h2>
            </div>
            <div class="flow-features-grid fade-up">
                <div class="flow-feature">
                    <span class="flow-feature__num">01</span>
                    <h3>Fisioterapeuta em cada turma</h3>
                    <p>Hayla Gomes — 13+ anos de experiência clínica. Não é instrutor de academia: é profissional de saúde.</p>
                </div>
                <div class="flow-feature">
                    <span class="flow-feature__num">02</span>
                    <h3>Espaço exclusivo no Centro Cívico</h3>
                    <p>World Business Center, Av. Cândido de Abreu 776. A cinco minutos de qualquer ponto do Centro Cívico.</p>
                </div>
                <div class="flow-feature">
                    <span class="flow-feature__num">03</span>
                    <h3>Equipamentos profissionais</h3>
                    <p>Mats, rolos, bolas e acessórios de pilates profissional — o mesmo padrão do atendimento clínico individual.</p>
                </div>
                <div class="flow-feature">
                    <span class="flow-feature__num">04</span>
                    <h3>Só 6 alunos por turma</h3>
                    <p>Você não é número — é paciente. Com apenas 6 pessoas, a atenção é real e o espaço é de verdade.</p>
                </div>
                <div class="flow-feature">
                    <span class="flow-feature__num">05</span>
                    <h3>Horários noturnos</h3>
                    <p>Segunda a quinta, 18h e 19h. Pensado para quem trabalha no centro e quer encerrar o dia com qualidade.</p>
                </div>
                <div class="flow-feature flow-feature--accent">
                    <span class="flow-feature__num">06</span>
                    <h3>Porta de entrada para o Clínico</h3>
                    <p>Alunos do Flow têm prioridade na lista de espera do atendimento clínico individual — quando precisarem evoluir.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 6 — PREÇOS
         ════════════════════════════════════════════════ -->
    <section class="flow-pricing">
        <div class="container">
            <div class="flow-section-header fade-up">
                <span class="flow-eyebrow" style="color:var(--flow-copper)">Investimento</span>
                <h2 class="flow-section-title" style="color:var(--flow-cream)">Simples, transparente,<br><em>sem taxas surpresa</em></h2>
            </div>
            <div class="flow-plans fade-up">
                <div class="flow-plan">
                    <div class="flow-plan__tag">Plano Essencial</div>
                    <div class="flow-plan__freq">1× por semana</div>
                    <div class="flow-plan__price">
                        <span class="flow-plan__amount">R$ 290</span>
                        <span class="flow-plan__period">/mês</span>
                    </div>
                    <div class="flow-plan__per-class">≈ R$ 72,50 por aula</div>
                    <ul class="flow-plan__list">
                        <li>4 aulas por mês</li>
                        <li>Turmas de até 6 pessoas</li>
                        <li>Conduzido por fisioterapeuta</li>
                        <li>Seg–Qui, 18h ou 19h</li>
                    </ul>
                    <a href="<?= $wa_1x ?>" class="flow-btn-ghost flow-plan__btn" target="_blank" rel="noopener">Quero começar</a>
                </div>
                <div class="flow-plan flow-plan--featured">
                    <div class="flow-plan__badge">Mais escolhido</div>
                    <div class="flow-plan__tag">Plano Flow</div>
                    <div class="flow-plan__freq">2× por semana</div>
                    <div class="flow-plan__price">
                        <span class="flow-plan__original">R$ 480</span>
                        <div class="flow-plan__price-main">
                            <span class="flow-plan__amount">R$ 397</span>
                            <span class="flow-plan__period">/mês</span>
                        </div>
                    </div>
                    <div class="flow-plan__economy">Economia de R$ 83 por mês</div>
                    <div class="flow-plan__per-class">≈ R$ 49,62 por aula</div>
                    <ul class="flow-plan__list">
                        <li>8 aulas por mês</li>
                        <li>Turmas de até 6 pessoas</li>
                        <li>Conduzido por fisioterapeuta</li>
                        <li>Seg–Qui, 18h ou 19h</li>
                        <li><strong>Prioridade na lista clínica</strong></li>
                    </ul>
                    <a href="<?= $wa_2x ?>" class="flow-btn-copper flow-plan__btn" target="_blank" rel="noopener">Garantir minha vaga</a>
                </div>
            </div>
            <p class="flow-pricing-note fade-up">Mensalidade recorrente. Sem taxa de matrícula. Vagas confirmadas por ordem de contato.</p>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 7 — COMPARATIVO FLOW vs CLÍNICO
         ════════════════════════════════════════════════ -->
    <section class="flow-section flow-section--cream">
        <div class="container">
            <div class="flow-section-header fade-up">
                <span class="flow-eyebrow">Comparativo</span>
                <h2 class="flow-section-title">Flow ou Clínico:<br><em>qual é o seu momento?</em></h2>
            </div>
            <div class="flow-comparison-wrap fade-up">
                <table class="flow-comparison">
                    <thead>
                        <tr>
                            <th class="flow-comparison__th-empty"></th>
                            <th class="flow-comparison__th-highlight">
                                <span class="flow-comparison__you-badge">Você está aqui</span>
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
            <p class="flow-comparison-note fade-up">Muitos alunos do Flow evoluem naturalmente para o atendimento clínico. Quando isso acontece, eles têm prioridade no agendamento.</p>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 8 — VAGAS (tabela editorial)
         ════════════════════════════════════════════════ -->
    <section class="flow-vagas" id="vagas">
        <div class="container">
            <div class="flow-vagas__header fade-up">
                <span class="flow-eyebrow">Disponibilidade</span>
                <h2 class="flow-vagas__title">Só <em>6 vagas</em><br>por turma.<br>Quando fecha, fecha.</h2>
                <p class="flow-vagas__sub">Toque no horário desejado e fale direto com a Hayla pelo WhatsApp.</p>
            </div>

            <div class="flow-vagas__table fade-up">
                <?php foreach ($turmas as $t):
                    $livres  = max(0, (int)$t['vagas']);
                    $fechada = $livres === 0;
                    $msg     = $fechada
                        ? 'Olá! A turma de ' . $t['dias'] . ' às ' . $t['hora'] . ' do Rekintsu Flow está fechada. Gostaria de entrar na lista de espera.'
                        : 'Olá! Quero esse horário no Rekintsu Flow — turma de ' . $t['dias'] . ' às ' . $t['hora'] . '.';
                    $wa_turma = $wa_base . rawurlencode($msg);
                ?>
                <div class="flow-vagas-row<?= $fechada ? ' flow-vagas-row--fechada' : '' ?><?= ($livres === 1) ? ' flow-vagas-row--ultima' : '' ?>">
                    <div class="flow-vagas-row__turma">
                        <span class="flow-vagas-row__dias"><?= htmlspecialchars($t['dias_curto']) ?></span>
                        <span class="flow-vagas-row__sub">Turma · 50min</span>
                    </div>
                    <div class="flow-vagas-row__hora"><?= htmlspecialchars($t['hora']) ?></div>
                    <div class="flow-vagas-row__status">
                        <div class="flow-vagas-dots" aria-label="<?= $livres ?> vagas livres de <?= $t['total'] ?>">
                            <?php
                            $ocupadas = $t['total'] - $livres;
                            for ($i = 0; $i < $t['total']; $i++):
                            ?>
                            <span class="flow-vaga-dot <?= $i < $ocupadas ? 'flow-vaga-dot--ocupada' : 'flow-vaga-dot--livre' ?>"></span>
                            <?php endfor; ?>
                        </div>
                        <?php if ($fechada): ?>
                            <span class="flow-badge flow-badge--fechada">Turma fechada</span>
                        <?php elseif ($livres === 1): ?>
                            <span class="flow-badge flow-badge--ultima">Última vaga</span>
                        <?php else: ?>
                            <span class="flow-vagas-row__num<?= $livres <= 2 ? ' flow-vagas-row__num--poucas' : '' ?>"><?= $livres ?></span>
                            <span class="flow-vagas-row__num-label">vagas</span>
                        <?php endif; ?>
                    </div>
                    <a href="<?= $wa_turma ?>"
                       class="flow-vagas-row__btn-wa<?= $fechada ? ' flow-vagas-row__btn-wa--espera' : '' ?>"
                       target="_blank" rel="noopener"
                       aria-label="<?= $fechada ? 'Lista de espera' : 'Quero esse horário' ?> — <?= htmlspecialchars($t['dias']) ?> às <?= htmlspecialchars($t['hora']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15" fill="currentColor" aria-hidden="true">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        <?= $fechada ? 'Lista de espera' : 'Quero esse horário' ?>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>

            <a href="<?= $wa_geral ?>" class="flow-vagas__cta fade-up" target="_blank" rel="noopener">
                <div>
                    <span class="flow-vagas__cta-title">Garantir minha vaga</span>
                    <span class="flow-vagas__cta-sub">WhatsApp · Resposta em até 1h</span>
                </div>
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>

            <p class="flow-vagas__note fade-up">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>
                Vagas confirmadas por ordem de contato.
            </p>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 9 — SOBRE A HAYLA
         ════════════════════════════════════════════════ -->
    <section class="flow-section flow-section--cream-deep">
        <div class="container flow-hayla">
            <div class="flow-hayla__visual fade-up">
                <img src="/site/assets/img/esticando.jpg" alt="Hayla Gomes — Fisioterapeuta Rekintsu Flow" loading="lazy">
            </div>
            <div class="flow-hayla__content fade-up">
                <span class="flow-eyebrow">Quem conduz</span>
                <h2 class="flow-section-title">Conduzido por<br><em>fisioterapeuta</em></h2>
                <p>O Rekintsu Flow é conduzido pela fisioterapeuta Hayla Gomes. Com mais de 13 anos de experiência clínica e especializações em pilates terapêutico, osteopatia e liberação miofascial, Hayla traz para cada turma o mesmo rigor técnico do atendimento individual — adaptado para o grupo reduzido.</p>
                <blockquote class="flow-quote">
                    Aqui, você não é corrigido por um instrutor de academia.<br>
                    <em>Você é orientado por uma fisioterapeuta.</em>
                </blockquote>
                <ul class="flow-check-list">
                    <li>13+ anos de experiência clínica</li>
                    <li>Especialização em Pilates Terapêutico</li>
                    <li>Osteopatia e Liberação Miofascial</li>
                    <li>Atendimento exclusivo no World Business Center</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 10 — FAQ
         ════════════════════════════════════════════════ -->
    <section class="flow-section flow-section--cream">
        <div class="container">
            <div class="flow-section-header fade-up">
                <span class="flow-eyebrow">Dúvidas frequentes</span>
                <h2 class="flow-section-title">Perguntas sobre<br>o <em>Rekintsu Flow</em></h2>
            </div>
            <div class="flow-faq fade-up">
                <details class="flow-faq-item">
                    <summary>
                        Preciso ter experiência com Pilates?
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <p>Não. As turmas são adaptadas para todos os níveis. O importante é não ter lesões ativas em tratamento.</p>
                </details>
                <details class="flow-faq-item">
                    <summary>
                        Como funciona a entrada na turma?
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <p>Você entra em contato pelo WhatsApp, escolhe o horário e assina um termo de saúde confirmando que não possui lesões em tratamento. Simples e sem burocracia.</p>
                </details>
                <details class="flow-faq-item">
                    <summary>
                        É diferente do Pilates Clínico da Rekintsu?
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <p>Sim. O Flow é uma modalidade em grupo, focada em mobilidade e condicionamento. Para tratamento de lesões, hérnias, pós-cirúrgico ou condições específicas, o indicado é o atendimento clínico individual.</p>
                </details>
                <details class="flow-faq-item">
                    <summary>
                        Posso migrar para o atendimento clínico depois?
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <p>Sim — e alunos do Flow têm prioridade na lista de espera do atendimento clínico quando precisarem evoluir para o individual.</p>
                </details>
                <details class="flow-faq-item">
                    <summary>
                        E se eu sentir alguma dificuldade durante as aulas?
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>
                    </summary>
                    <p>A Hayla está presente em cada turma. Se identificar qualquer limitação que exija atenção individual, você será orientado sobre o melhor caminho — sem custo adicional de consulta.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════════════════════
         SEÇÃO 11 — CTA FINAL
         ════════════════════════════════════════════════ -->
    <section class="flow-final-cta">
        <div class="container flow-final-cta__inner">
            <div>
                <h2 class="flow-final-cta__title">Pronto para fechar o dia do jeito certo?</h2>
                <p class="flow-final-cta__sub">Vagas limitadas. Entre em contato e garanta o seu horário.</p>
            </div>
            <a href="<?= $wa_geral ?>" class="flow-btn-copper flow-btn-copper--wa" target="_blank" rel="noopener">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" fill="#25D366" aria-hidden="true">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                Falar com a Hayla
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
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
