<?php
/**
 * Rekintsu — Seed de Posts do Blog
 * Acesse /cms/posts/seed.php UMA VEZ para inserir os 12 artigos.
 * Apague após executar.
 */
require_once dirname(__DIR__) . '/boot.php';
auth_check();
if (!auth_is_admin()) die('Acesso negado.');

$pdo = db();
$log = [];

$posts = [

    // ── SEMANA 1 ──────────────────────────────────────────────────

    [
        'title'        => 'Pilates pós-operatório de joelho: quando começar e o que esperar',
        'slug'         => 'pilates-pos-operatorio-joelho',
        'excerpt'      => 'Após uma cirurgia no joelho, o retorno à atividade precisa ser gradual e orientado. O pilates clínico é um dos recursos mais eficazes para acelerar a recuperação com segurança e sem sobrecarregar a articulação.',
        'image_url'    => '/site/assets/img/pos-cirugico2.jpeg',
        'category'     => 'Pós-Cirúrgico',
        'category_slug'=> 'pos-cirurgico',
        'read_time'    => '6 min de leitura',
        'created_at'   => '2026-05-04 08:00:00',
        'content'      => '<p>A cirurgia no joelho — seja uma reconstrução do ligamento cruzado anterior (LCA), uma meniscectomia ou uma artroplastia total — representa um evento significativo no corpo. A recuperação não começa só depois que a incisão fecha: ela começa no dia seguinte ao procedimento e pode durar meses.</p>

<p>O pilates clínico é uma das ferramentas mais eficazes nesse processo. Mas para funcionar, precisa ser aplicado no momento certo, com progressão adequada e supervisão de um profissional habilitado.</p>

<h2>Fases da recuperação pós-cirúrgica do joelho</h2>

<ul>
  <li><strong>Fase aguda (0 a 6 semanas):</strong> controle de edema, dor e recuperação da amplitude básica de movimento. O pilates ainda não é indicado nesta etapa.</li>
  <li><strong>Fase subaguda (6 a 12 semanas):</strong> início do pilates clínico com exercícios de baixa intensidade — ativação do quadríceps, isquiotibiais e estabilizadores do quadril.</li>
  <li><strong>Fase funcional (3 a 6 meses):</strong> progressão gradual da carga, treino proprioceptivo e retorno às atividades diárias.</li>
  <li><strong>Retorno ao esporte (6+ meses):</strong> exercícios mais complexos, treino específico e pliometria leve quando indicado.</li>
</ul>

<h2>Por que o pilates é indicado nesse processo?</h2>

<p>Diferente dos exercícios de academia, o pilates clínico permite trabalhar a musculatura do joelho com carga controlada, sem impacto e com foco na qualidade do movimento. No pós-operatório, o objetivo não é força máxima, mas reeducação motora segura.</p>

<ul>
  <li>Ativação precoce do quadríceps sem sobrecarregar a articulação</li>
  <li>Melhora da propriocepção — essencial para prevenir novas lesões</li>
  <li>Redução da atrofia muscular por desuso</li>
  <li>Ganho de amplitude de movimento de forma progressiva</li>
  <li>Controle da dor através de exercícios específicos</li>
</ul>

<h2>Quando não iniciar o pilates após cirurgia de joelho</h2>

<p>Existem contraindicações importantes. O pilates clínico não deve ser iniciado sem autorização médica, na presença de sinais de infecção na ferida cirúrgica, edema excessivo não controlado ou dor intensa persistente.</p>

<h2>O que esperar do tratamento na Rekintsu</h2>

<p>Na Rekintsu, antes de iniciar qualquer protocolo pós-operatório, a fisioterapeuta Hayla Gomes realiza uma avaliação completa: histórico cirúrgico, fase de cicatrização, força muscular atual e objetivos do paciente. A partir disso, um plano personalizado é montado.</p>

<p>Não existe protocolo único para recuperação de joelho. O que existe é uma progressão lógica, segura e adaptada à realidade de cada pessoa.</p>',
    ],

    [
        'title'        => 'Hérnia de disco lombar: como o pilates clínico alivia a dor sem cirurgia',
        'slug'         => 'hernia-disco-lombar-pilates',
        'excerpt'      => 'A hérnia de disco é uma das causas mais comuns de dor lombar intensa. Em muitos casos, o tratamento conservador com pilates clínico é capaz de reduzir a dor e evitar a cirurgia.',
        'image_url'    => '/site/assets/img/hernias-e-lesoes.jpeg',
        'category'     => 'Hérnias e Lesões',
        'category_slug'=> 'hernias-lesoes',
        'read_time'    => '7 min de leitura',
        'created_at'   => '2026-05-06 08:00:00',
        'content'      => '<p>A hérnia de disco lombar afeta milhões de brasileiros e é uma das principais causas de afastamento do trabalho. Apesar da dor intensa que pode provocar, em mais de 70% dos casos ela é tratada de forma conservadora — sem cirurgia.</p>

<p>O pilates clínico, quando bem indicado e conduzido por um fisioterapeuta, é um dos recursos mais eficazes nesse tratamento conservador.</p>

<h2>O que é uma hérnia de disco?</h2>

<p>Entre cada vértebra da coluna existe um disco intervertebral — uma estrutura em forma de almofada que absorve impacto. A hérnia ocorre quando o material interno desse disco pressiona ou rompe a camada externa e comprime estruturas nervosas ao redor.</p>

<p>Os níveis mais afetados na coluna lombar são L4-L5 e L5-S1. A dor pode irradiar para a perna (ciática), causando formigamento, fraqueza ou queimação.</p>

<h2>Como o pilates ajuda no tratamento</h2>

<ul>
  <li><strong>Fortalecimento do core:</strong> os músculos profundos do abdômen e da coluna funcionam como um colete natural de proteção para os discos.</li>
  <li><strong>Melhora postural:</strong> postura adequada reduz a pressão intradiscal e diminui a compressão nervosa.</li>
  <li><strong>Mobilidade articular:</strong> exercícios de mobilização controlada da coluna aliviam a rigidez e melhoram a circulação na região.</li>
  <li><strong>Redução do espasmo muscular:</strong> a musculatura paravertebral frequentemente entra em espasmo como mecanismo de defesa — o pilates ajuda a relaxá-la progressivamente.</li>
</ul>

<h2>O que evitar na fase aguda</h2>

<p>Na fase de dor intensa, alguns movimentos devem ser evitados: flexão anterior do tronco com carga, rotações bruscas e qualquer exercício que aumente a dor irradiada. O protocolo de pilates para hérnia é completamente diferente de um treino de academia.</p>

<h2>Fisioterapia antes de decidir pela cirurgia</h2>

<p>A cirurgia para hérnia de disco é indicada em casos específicos: perda de força muscular progressiva, incontinência ou fracasso do tratamento conservador após 6 a 12 semanas. Em todos os outros casos, a fisioterapia com pilates clínico deve ser a primeira linha de tratamento.</p>

<p>Na Rekintsu, cada paciente com diagnóstico de hérnia passa por uma avaliação funcional completa antes de iniciar o protocolo. O objetivo é aliviar a dor, recuperar a função e, na maioria dos casos, evitar a cirurgia.</p>',
    ],

    [
        'title'        => 'Pilates na gravidez: benefícios e cuidados em cada trimestre',
        'slug'         => 'pilates-na-gravidez-beneficios',
        'excerpt'      => 'O pilates é um dos exercícios mais indicados durante a gestação — mas exige adaptações específicas em cada trimestre. Saiba o que é seguro, o que evitar e como o pilates pode transformar sua experiência na gravidez.',
        'image_url'    => '/site/assets/img/gravida2.jpeg',
        'category'     => 'Gestação',
        'category_slug'=> 'gestacao',
        'read_time'    => '6 min de leitura',
        'created_at'   => '2026-05-08 08:00:00',
        'content'      => '<p>A gestação é um período de transformações profundas no corpo. A postura muda, o centro de gravidade se desloca, os ligamentos ficam mais frouxos e a demanda sobre o assoalho pélvico aumenta significativamente. O pilates clínico é um dos exercícios mais bem adaptados a essas mudanças.</p>

<h2>Primeiro trimestre (0 a 12 semanas)</h2>

<p>O primeiro trimestre é marcado pela náusea, fadiga e adaptação hormonal. O pilates nessa fase foca em:</p>

<ul>
  <li>Técnicas de respiração consciente para controle da ansiedade</li>
  <li>Ativação suave do assoalho pélvico</li>
  <li>Estabilização do core sem gerar pressão intra-abdominal excessiva</li>
  <li>Exercícios posturais leves para compensar as mudanças iniciais de postura</li>
</ul>

<h2>Segundo trimestre (13 a 28 semanas)</h2>

<p>A energia começa a retornar e o corpo está mais adaptado. O pilates no segundo trimestre inclui:</p>

<ul>
  <li>Fortalecimento de glúteos e membros inferiores para suportar o peso crescente</li>
  <li>Trabalho de mobilidade torácica e cervical</li>
  <li>Exercícios de estabilização em posição lateral e sentada</li>
  <li>Treino contínuo do assoalho pélvico — preparação para o parto</li>
</ul>

<h2>Terceiro trimestre (29 a 40 semanas)</h2>

<ul>
  <li>Exercícios em posição supina são evitados — o útero comprime a veia cava</li>
  <li>Preferência por decúbito lateral, posição sentada e de quatro apoios</li>
  <li>Foco na preparação para o trabalho de parto: respiração, relaxamento do assoalho pélvico e posições de alívio</li>
</ul>

<h2>Benefícios comprovados do pilates na gestação</h2>

<ul>
  <li>Redução das dores lombares e pélvicas</li>
  <li>Menor incidência de diástase abdominal</li>
  <li>Melhor controle do ganho de peso gestacional</li>
  <li>Trabalho de parto com menos intercorrências</li>
  <li>Recuperação pós-parto mais rápida</li>
</ul>

<p>Na Rekintsu, cada gestante recebe um protocolo individual, construído a partir da avaliação da sua condição física, histórico obstétrico e fase da gestação. A segurança do bebê e da mãe é sempre a prioridade.</p>',
    ],

    // ── SEMANA 2 ──────────────────────────────────────────────────

    [
        'title'        => 'Reabilitação esportiva com pilates: da lesão ao retorno ao campo',
        'slug'         => 'reabilitacao-esportiva-pilates',
        'excerpt'      => 'Lesões esportivas exigem reabilitação especializada. O pilates clínico oferece uma progressão segura do período de imobilização até o retorno pleno às atividades físicas.',
        'image_url'    => '/site/assets/img/tenis.jpeg',
        'category'     => 'Reabilitação',
        'category_slug'=> 'reabilitacao',
        'read_time'    => '5 min de leitura',
        'created_at'   => '2026-05-11 08:00:00',
        'content'      => '<p>Seja um atleta profissional ou uma pessoa que pratica esportes como lazer, uma lesão esportiva pode ser devastadora — física e emocionalmente. A reabilitação adequada é o que determina se o retorno será completo ou se a lesão deixará sequelas.</p>

<p>O pilates clínico tem um papel fundamental na reabilitação esportiva porque combina fortalecimento muscular, controle motor, propriocepção e mobilidade em um único sistema de exercícios.</p>

<h2>As lesões esportivas mais comuns tratadas com pilates</h2>

<ul>
  <li><strong>Entorse de tornozelo:</strong> o pilates trabalha o fortalecimento dos estabilizadores do tornozelo e o treino proprioceptivo para evitar recorrência.</li>
  <li><strong>Lesão de LCA:</strong> seja no pré ou pós-operatório, o pilates é parte essencial do protocolo de reabilitação do ligamento cruzado anterior.</li>
  <li><strong>Tendinite patelar:</strong> exercícios excêntricos controlados são a base do tratamento.</li>
  <li><strong>Distensões musculares:</strong> isquiotibiais, adutores e panturrilha se beneficiam do trabalho progressivo de força e flexibilidade.</li>
  <li><strong>Lesões de ombro (manguito rotador):</strong> fortalecimento dos estabilizadores escapulares e da cápsula articular.</li>
</ul>

<h2>Princípios da reabilitação esportiva com pilates</h2>

<ul>
  <li><strong>Progressão gradual:</strong> do movimento sem carga para o movimento com carga crescente</li>
  <li><strong>Controle antes da força:</strong> aprender a mover com qualidade antes de adicionar intensidade</li>
  <li><strong>Propriocepção:</strong> reeducar o sistema nervoso para proteger a articulação afetada</li>
  <li><strong>Simetria:</strong> corrigir desequilíbrios musculares que causaram ou agravaram a lesão</li>
</ul>

<h2>Pré-habilitação: treinar antes para recuperar melhor</h2>

<p>Para atletas que sabem que vão passar por uma cirurgia (LCA, menisco, ombro), fortalecer a musculatura antes do procedimento cirúrgico reduz significativamente o tempo de recuperação depois. Na Rekintsu, trabalhamos tanto a pré-hab quanto a reabilitação pós-lesão ou pós-cirúrgica, sempre com protocolo individualizado.</p>',
    ],

    [
        'title'        => 'Pilates para idosos: como manter a autonomia e prevenir quedas',
        'slug'         => 'pilates-para-idosos-prevenir-quedas',
        'excerpt'      => 'Quedas são a principal causa de lesões graves em idosos. O pilates clínico é uma das estratégias mais eficazes para fortalecer o corpo, melhorar o equilíbrio e preservar a autonomia com o avançar dos anos.',
        'image_url'    => '/site/assets/img/idoso.jpeg',
        'category'     => 'Idosos',
        'category_slug'=> 'idosos',
        'read_time'    => '6 min de leitura',
        'created_at'   => '2026-05-13 08:00:00',
        'content'      => '<p>Quedas afetam cerca de 30% das pessoas com mais de 65 anos a cada ano — e são a principal causa de hospitalização e morte por lesão nessa faixa etária. O que muitos não sabem é que grande parte dessas quedas é prevenível.</p>

<h2>Por que os idosos caem mais?</h2>

<ul>
  <li>Perda de massa muscular (sarcopenia) — especialmente em membros inferiores</li>
  <li>Redução da propriocepção — a capacidade do corpo de se perceber no espaço</li>
  <li>Diminuição da velocidade de reação</li>
  <li>Alterações no padrão de marcha (passos mais curtos e lentos)</li>
  <li>Redução da flexibilidade e amplitude de movimento</li>
</ul>

<h2>Como o pilates atua na prevenção de quedas</h2>

<ul>
  <li><strong>Fortalecimento muscular:</strong> foco em quadríceps, glúteos, tibial anterior e core — músculos essenciais para estabilidade e marcha.</li>
  <li><strong>Treino de equilíbrio:</strong> exercícios em apoio unipodal progressivo e superfícies instáveis controladas.</li>
  <li><strong>Propriocepção:</strong> estimulação dos receptores articulares e musculares.</li>
  <li><strong>Flexibilidade:</strong> manutenção da amplitude de movimento em tornozelos, quadris e coluna.</li>
  <li><strong>Consciência corporal:</strong> o idoso aprende a reconhecer seus limites e a se mover com mais segurança.</li>
</ul>

<h2>Pilates é seguro para idosos?</h2>

<p>Sim — e é uma das atividades mais indicadas para essa faixa etária. O pilates clínico é realizado em baixa intensidade, com controle total da carga e progressão gradual. Idosos com osteoporose, artrose, histórico de AVE ou marcapasso podem praticar pilates — desde que sob supervisão de um fisioterapeuta com avaliação prévia.</p>

<h2>Benefícios além da prevenção de quedas</h2>

<ul>
  <li>Melhora da postura e da autoconfiança ao caminhar</li>
  <li>Redução de dores crônicas (lombar, joelhos, quadril)</li>
  <li>Melhora do humor e redução de sintomas depressivos</li>
  <li>Maior independência para as atividades da vida diária</li>
</ul>

<p>Na Rekintsu, atendemos idosos com atenção especial ao histórico médico completo, às condições ortopédicas e às metas funcionais de cada paciente. O objetivo não é a perfeição técnica — é a qualidade de vida.</p>',
    ],

    [
        'title'        => 'Dor lombar crônica: por que o pilates clínico é diferente de qualquer academia',
        'slug'         => 'dor-lombar-cronica-pilates-clinico',
        'excerpt'      => 'A dor lombar crônica afeta 80% dos brasileiros em algum momento da vida. O pilates clínico oferece uma abordagem terapêutica que vai além do exercício — é reabilitação guiada por um profissional de saúde.',
        'image_url'    => '/site/assets/img/dor-costas.jpeg',
        'category'     => 'Pilates Clínico',
        'category_slug'=> 'pilates-clinico',
        'read_time'    => '7 min de leitura',
        'created_at'   => '2026-05-15 08:00:00',
        'content'      => '<p>A dor lombar crônica é definida como dor na região inferior das costas com duração superior a três meses. É uma das principais causas de afastamento do trabalho no Brasil e afeta pessoas de todas as idades.</p>

<h2>Por que a dor lombar persiste?</h2>

<ul>
  <li>Fraqueza dos músculos estabilizadores da coluna (core profundo)</li>
  <li>Encurtamento de isquiotibiais, iliopsoas e rotadores de quadril</li>
  <li>Padrões posturais inadequados no trabalho, no sono e no lazer</li>
  <li>Sensitização central — o sistema nervoso aprende a amplificar a dor</li>
  <li>Alterações estruturais como artrose facetária ou hérnia de disco</li>
</ul>

<h2>O que o pilates clínico faz que a academia não faz</h2>

<p>O pilates clínico é conduzido por um fisioterapeuta que avaliou você, conhece sua história clínica e adaptou cada exercício para a sua condição específica.</p>

<ul>
  <li><strong>Avaliação funcional prévia:</strong> antes de qualquer exercício, o profissional identifica os padrões de movimento que estão causando ou perpetuando a dor.</li>
  <li><strong>Exercícios prescritivos:</strong> cada movimento tem um objetivo terapêutico claro — não é treino genérico.</li>
  <li><strong>Controle da progressão:</strong> a carga aumenta apenas quando o corpo está pronto.</li>
  <li><strong>Identificação de compensações:</strong> o fisioterapeuta corrige em tempo real os padrões de movimento que machucam a coluna.</li>
</ul>

<h2>O que esperar do tratamento</h2>

<p>Os primeiros resultados são geralmente percebidos entre a segunda e a quarta semana. A dor diminui, a mobilidade melhora e as atividades diárias ficam menos limitadas. Com o tempo, o paciente reconstrói a confiança no próprio corpo.</p>

<p>O objetivo do pilates clínico para lombalgia não é apenas tirar a dor — é criar um corpo capaz de suportar as demandas da vida sem depender de analgésicos. Se você convive com dor lombar há semanas, meses ou anos, uma avaliação na Rekintsu pode ser o primeiro passo para mudar esse cenário.</p>',
    ],

    // ── SEMANA 3 ──────────────────────────────────────────────────

    [
        'title'        => 'Liberação miofascial: o aliado que potencializa o pilates clínico',
        'slug'         => 'liberacao-miofascial-pilates-reabilitacao',
        'excerpt'      => 'A liberação miofascial é uma técnica manual que trata pontos de tensão no tecido conjuntivo. Combinada ao pilates clínico, acelera resultados e alivia dores que exercícios isolados não conseguem resolver.',
        'image_url'    => '/site/assets/img/esticando.jpg',
        'category'     => 'Reabilitação',
        'category_slug'=> 'reabilitacao',
        'read_time'    => '5 min de leitura',
        'created_at'   => '2026-05-18 08:00:00',
        'content'      => '<p>Quando os músculos ficam tensos por períodos prolongados — seja por postura inadequada, estresse, trauma ou lesão — a fáscia pode criar aderências. Esses pontos de tensão restringem o movimento, causam dor e comprometem o desempenho muscular.</p>

<p>A liberação miofascial é uma técnica terapêutica que atua diretamente sobre essas aderências. Combinada ao pilates clínico, representa uma abordagem completa e muito eficaz para reabilitação e controle da dor crônica.</p>

<h2>O que é a fáscia e por que ela importa</h2>

<p>A fáscia é uma rede tridimensional de tecido conjuntivo que percorre todo o corpo — envolve músculos, tendões, ligamentos, órgãos e nervos. Quando desenvolve aderências (restrições), o movimento fica limitado e surgem pontos-gatilho: nódulos dolorosos que, quando pressionados, irradiam dor para outras regiões.</p>

<h2>Como funciona a liberação miofascial</h2>

<p>O terapeuta aplica pressão manual sustentada e progressiva sobre as áreas de restrição fascial. Técnicas incluem:</p>

<ul>
  <li><strong>Pressão direta nos pontos-gatilho:</strong> dissolução dos nódulos de tensão muscular</li>
  <li><strong>Deslizamento fascial:</strong> mobilização suave das camadas de fáscia para restaurar o deslizamento entre elas</li>
  <li><strong>IASTM:</strong> uso de instrumentos de aço para maior precisão em regiões específicas</li>
</ul>

<h2>Por que combinar com pilates clínico</h2>

<p>A liberação miofascial prepara o tecido para o exercício. Quando você libera as restrições fasciais antes de fortalecer, o músculo trabalha em comprimento ideal — aumentando a eficácia do exercício e reduzindo o risco de compensações.</p>

<h2>Condições mais beneficiadas</h2>

<ul>
  <li>Fibromialgia e dor miofascial generalizada</li>
  <li>Cervicalgia e cefaleia tensional</li>
  <li>Lombalgia e dor sacroilíaca</li>
  <li>Fasciíte plantar e tendinites em geral</li>
  <li>Sequelas de cirurgias (aderências pós-operatórias)</li>
  <li>Síndrome do impacto de ombro</li>
</ul>

<p>Na Rekintsu, a liberação miofascial é integrada ao protocolo de pilates clínico sempre que identificada como necessária durante a avaliação. O resultado é um tratamento mais completo e com maior durabilidade dos resultados.</p>',
    ],

    [
        'title'        => 'Pilates pós-parto: quando recomeçar e como recuperar o core',
        'slug'         => 'pos-parto-pilates-recuperar-core',
        'excerpt'      => 'O período pós-parto exige cuidados específicos antes de retomar qualquer atividade física. O pilates clínico é a abordagem mais segura para recuperar o core, tratar a diástase e fortalecer o assoalho pélvico.',
        'image_url'    => '/site/assets/img/clinica.jpg',
        'category'     => 'Gestação',
        'category_slug'=> 'gestacao',
        'read_time'    => '6 min de leitura',
        'created_at'   => '2026-05-20 08:00:00',
        'content'      => '<p>O pós-parto é um período de profundas transformações no corpo da mulher. Os meses de gestação modificam a postura, sobrecarregam o assoalho pélvico e separam os músculos abdominais. O retorno ao exercício precisa respeitar esse processo — e o pilates clínico é uma das abordagens mais seguras e eficazes para essa recuperação.</p>

<h2>Quando é seguro começar o pilates após o parto?</h2>

<ul>
  <li><strong>Parto normal sem intercorrências:</strong> avaliação fisioterapêutica a partir da 6ª semana pós-parto</li>
  <li><strong>Cesárea:</strong> avaliação a partir da 8ª semana, com atenção à cicatriz cirúrgica</li>
  <li><strong>Parto com episiotomia:</strong> aguardar cicatrização completa e avaliação do assoalho pélvico</li>
</ul>

<h2>O que é diástase abdominal e como o pilates trata</h2>

<p>A diástase dos retos abdominais é a separação da linha alba — o tecido conjuntivo que une os dois feixes do músculo reto abdominal. Ocorre em até 60% das gestantes e pode persistir no pós-parto.</p>

<p>O pilates clínico trata a diástase através de:</p>

<ul>
  <li>Ativação do transverso abdominal sem aumentar a pressão intra-abdominal</li>
  <li>Exercícios específicos que aproximam os feixes musculares sem sobrecarregar a linha alba</li>
  <li>Substituição de exercícios contraindicados (como abdominais tradicionais) por alternativas seguras</li>
</ul>

<h2>Assoalho pélvico: a prioridade esquecida no pós-parto</h2>

<p>O assoalho pélvico suporta toda a pressão da gestação e do parto. No pós-parto, é comum que esteja enfraquecido ou hipertônico. Sintomas como perda de urina, dor pélvica e sensação de peso no períneo indicam disfunção que o pilates clínico pode tratar de forma integrada.</p>

<h2>Pilates pós-parto versus academia</h2>

<p>Voltar direto para exercícios de alta intensidade antes da recuperação completa do core e do assoalho pélvico pode agravar a diástase e causar incontinência urinária de esforço. O pilates clínico oferece a progressão correta: do movimento sem carga para a carga crescente, respeitando o tempo de cada corpo.</p>',
    ],

    [
        'title'        => 'Escoliose: como o pilates clínico ajuda no controle da curvatura e da dor',
        'slug'         => 'escoliose-pilates-clinico-tratamento',
        'excerpt'      => 'A escoliose afeta cerca de 3% da população e pode causar dor, fadiga e limitações funcionais. O pilates clínico é um dos recursos mais indicados para o tratamento conservador e a melhora da qualidade de vida.',
        'image_url'    => '/site/assets/img/lombar.png',
        'category'     => 'Hérnias e Lesões',
        'category_slug'=> 'hernias-lesoes',
        'read_time'    => '6 min de leitura',
        'created_at'   => '2026-05-22 08:00:00',
        'content'      => '<p>A escoliose é uma deformidade da coluna vertebral caracterizada por uma ou mais curvaturas laterais. Não é apenas "problema de postura" — é uma condição estrutural que pode progredir e impactar significativamente a qualidade de vida.</p>

<h2>O ângulo de Cobb e a decisão terapêutica</h2>

<p>A gravidade da escoliose é medida pelo ângulo de Cobb na radiografia:</p>

<ul>
  <li>Até 20°: tratamento conservador (pilates, fisioterapia, exercícios)</li>
  <li>20° a 40°: fisioterapia intensiva, colete ortopédico em alguns casos</li>
  <li>Acima de 45 a 50°: avaliação cirúrgica</li>
</ul>

<p>Para a maioria dos pacientes, o tratamento conservador com pilates clínico é a principal estratégia terapêutica.</p>

<h2>Como o pilates atua na escoliose</h2>

<ul>
  <li><strong>Fortalecimento assimétrico:</strong> o pilates pode trabalhar de forma diferenciada os músculos do lado côncavo (enfraquecido) e convexo (encurtado) da curvatura.</li>
  <li><strong>Alongamento e mobilidade:</strong> redução das compensações posturais e das tensões musculares que acompanham a curvatura.</li>
  <li><strong>Consciência corporal:</strong> o paciente aprende a perceber e corrigir padrões posturais inadequados no cotidiano.</li>
  <li><strong>Respiração:</strong> a escoliose pode comprimir o espaço torácico — exercícios respiratórios expandem a capacidade pulmonar e melhoram a oxigenação.</li>
</ul>

<h2>Escoliose tem cura?</h2>

<p>A curvatura estrutural da escoliose não desaparece com exercício. Mas o tratamento conservador com pilates clínico pode estabilizar ou reduzir levemente a progressão, aliviar significativamente a dor e melhorar a função muscular — o que se traduz em mais qualidade de vida.</p>

<p>Na Rekintsu, cada paciente com escoliose recebe análise radiológica prévia e protocolo personalizado focado na curvatura específica, nos músculos mais afetados e nos objetivos funcionais individuais.</p>',
    ],

    // ── SEMANA 4 ──────────────────────────────────────────────────

    [
        'title'        => 'Cervicalgia: como o pilates alivia a dor no pescoço de forma duradoura',
        'slug'         => 'cervicalgia-dor-cervical-pilates',
        'excerpt'      => 'A dor cervical crônica afeta cada vez mais pessoas — especialmente quem trabalha longas horas em frente ao computador. O pilates clínico atua nas causas da cervicalgia, não apenas nos sintomas.',
        'image_url'    => '/site/assets/img/dor-costas-filho.jpeg',
        'category'     => 'Reabilitação',
        'category_slug'=> 'reabilitacao',
        'read_time'    => '5 min de leitura',
        'created_at'   => '2026-05-25 08:00:00',
        'content'      => '<p>A cervicalgia — dor na região do pescoço e cervical — é uma das queixas musculoesqueléticas mais frequentes na população urbana. O aumento do uso de smartphones e o trabalho prolongado em home office tornaram esse problema cada vez mais prevalente.</p>

<h2>Por que a cervicalgia é tão comum?</h2>

<p>A coluna cervical suporta o peso da cabeça (entre 5 e 6 kg em posição neutra). A cada 2,5 cm de projeção anterior da cabeça, a carga efetiva sobre a cervical dobra. Uma cabeça projetada 7 cm à frente — posição comum ao olhar para o celular — gera até 27 kg de carga sobre as vértebras cervicais.</p>

<ul>
  <li>Fraqueza da musculatura profunda cervical (flexores profundos)</li>
  <li>Encurtamento dos músculos suboccipitais e trapézio superior</li>
  <li>Artrose cervical (espondilose)</li>
  <li>Hérnia de disco cervical com irradiação para o braço (cervicobraquialgia)</li>
</ul>

<h2>Como o pilates trata a cervicalgia</h2>

<ul>
  <li><strong>Fortalecimento dos flexores profundos cervicais:</strong> geralmente fracos em pacientes com dor cervical crônica — são os estabilizadores primários da cervical.</li>
  <li><strong>Liberação dos músculos cervicais superficiais:</strong> trapézio superior, suboccipitais e esternocleidomastoideo tendem a estar hiperativos e encurtados.</li>
  <li><strong>Mobilidade torácica:</strong> a rigidez da coluna torácica frequentemente sobrecarrega a cervical — trabalhar essa mobilidade é essencial.</li>
  <li><strong>Reeducação postural:</strong> correção do padrão de cabeça anteriorizada no cotidiano.</li>
</ul>

<h2>Cefaleia tensional e pilates</h2>

<p>Boa parte das dores de cabeça do tipo tensional tem origem na tensão muscular cervical e nos pontos-gatilho dos músculos suboccipitais. O pilates, combinado à liberação miofascial cervical, é um dos tratamentos mais eficazes para reduzir a frequência e a intensidade das cefaleias tensionais.</p>

<p>Se a dor cervical persiste por mais de duas semanas, irradia para o braço ou provoca formigamento nos dedos, é fundamental buscar avaliação profissional. Na Rekintsu, o atendimento inclui avaliação postural completa, testes funcionais da cervical e um protocolo individualizado para eliminar a dor e evitar recorrências.</p>',
    ],

    [
        'title'        => 'Pós-operatório de coluna: o protocolo de recuperação com pilates',
        'slug'         => 'pos-operatorio-coluna-pilates-recuperacao',
        'excerpt'      => 'A cirurgia de coluna é um passo importante, mas o resultado final depende muito do que acontece depois. O pilates clínico é parte essencial do protocolo de reabilitação pós-operatória para coluna vertebral.',
        'image_url'    => '/site/assets/img/clinica2.jpg',
        'category'     => 'Pós-Cirúrgico',
        'category_slug'=> 'pos-cirurgico',
        'read_time'    => '7 min de leitura',
        'created_at'   => '2026-05-27 08:00:00',
        'content'      => '<p>A cirurgia de coluna vertebral — seja uma discectomia, artrodese (fusão), laminectomia ou outra intervenção — é indicada quando o tratamento conservador não foi suficiente. Mas a cirurgia, por si só, não garante o resultado: o que acontece no pós-operatório é determinante para o sucesso do procedimento.</p>

<h2>Fases da reabilitação pós-operatória de coluna</h2>

<p><strong>Fase inicial (0 a 6 semanas):</strong> orientações posturais, higiene da coluna (como sentar, levantar, deitar), exercícios respiratórios e ativação suave do core. Sem pilates ativo nesta fase.</p>

<p><strong>Fase de reabilitação precoce (6 a 12 semanas):</strong> início do pilates clínico com exercícios de baixo impacto. Foco em ativação do transverso abdominal, glúteos e estabilizadores lombares. Nenhum exercício de flexão ou rotação excessiva da coluna.</p>

<p><strong>Fase de fortalecimento (3 a 6 meses):</strong> progressão da carga, treino funcional e retorno gradual às atividades diárias. Movimentos mais complexos com controle total.</p>

<p><strong>Fase de manutenção (6+ meses):</strong> pilates como estratégia de prevenção de recidiva e manutenção da saúde da coluna.</p>

<h2>O que o pilates oferece que outros exercícios não oferecem</h2>

<p>No pós-operatório de coluna, a precisão e o controle são tudo. O pilates clínico trabalha com amplitude de movimento controlada, sem impacto, com foco na ativação dos músculos certos — sem compensações que possam sobrecarregar a região operada.</p>

<p>Diferente de exercícios de alta intensidade que podem estressar precocemente a área cirúrgica, o pilates progride no ritmo do paciente.</p>

<h2>A importância da avaliação individualizada</h2>

<p>Cada cirurgia de coluna é diferente. Dois pacientes com a mesma cirurgia podem ter protocolos completamente distintos, dependendo da extensão do procedimento, da condição muscular prévia e da presença de outras condições de saúde.</p>

<p>Na Rekintsu, nenhum paciente pós-operatório inicia o pilates sem avaliação completa e alinhamento com o cirurgião responsável. A segurança é sempre o primeiro critério.</p>',
    ],

    [
        'title'        => 'Artrose e artrite: como o pilates melhora a qualidade de vida sem agravar a dor',
        'slug'         => 'artrose-artrite-pilates-qualidade-vida',
        'excerpt'      => 'Artrose e artrite são condições crônicas que afetam milhões de brasileiros. O pilates clínico oferece exercícios seguros que reduzem a dor, preservam a função articular e melhoram a qualidade de vida sem agravar o quadro.',
        'image_url'    => '/site/assets/img/homem-kintsugi.jpg',
        'category'     => 'Idosos',
        'category_slug'=> 'idosos',
        'read_time'    => '6 min de leitura',
        'created_at'   => '2026-05-29 08:00:00',
        'content'      => '<p>A artrose (osteoartrite) e a artrite são condições crônicas que afetam as articulações, causando dor, rigidez e perda de função. Estima-se que mais de 15 milhões de brasileiros convivam com artrose — e esse número cresce com o envelhecimento da população.</p>

<p>Por muito tempo, a orientação dada a esses pacientes era "descanse e evite exercício". A ciência atual reverte completamente essa visão: o movimento terapêutico adequado é um dos tratamentos mais eficazes para a artrose e a artrite.</p>

<h2>Por que o exercício é indicado para artrose e artrite</h2>

<p>A cartilagem articular não tem vasos sanguíneos — ela se nutre pelo líquido sinovial, que é bombeado para dentro da articulação durante o movimento. Sem movimento, a cartilagem se degrada mais rapidamente. Além disso, a musculatura ao redor das articulações funciona como amortecedor natural — músculos fortes reduzem a carga sobre a cartilagem.</p>

<h2>Como o pilates clínico atua nessas condições</h2>

<ul>
  <li><strong>Exercício sem impacto:</strong> o pilates é realizado sem saltos, corridas ou impacto — preservando a articulação enquanto a fortalece.</li>
  <li><strong>Amplitude controlada:</strong> trabalha a mobilidade articular sem ultrapassar os limites de cada paciente.</li>
  <li><strong>Fortalecimento periarticular:</strong> músculos mais fortes significam menos carga na cartilagem e menos dor.</li>
  <li><strong>Melhora da propriocepção:</strong> pacientes com artrose têm propriocepção reduzida — o pilates restaura essa sensação de posição articular.</li>
</ul>

<h2>Cuidados durante crises inflamatórias</h2>

<p>Durante crises de inflamação aguda, o pilates de alta intensidade deve ser suspenso. Exercícios respiratórios, mobilizações suaves e contrações isométricas de baixa intensidade ainda podem ser realizados, sempre com avaliação do fisioterapeuta.</p>

<p>Na Rekintsu, atendemos pacientes com artrose e artrite com protocolos adaptados à fase da doença, às articulações afetadas e às metas funcionais de cada um. O objetivo é sempre o mesmo: menos dor, mais movimento, mais qualidade de vida.</p>',
    ],

];

$stmt = $pdo->prepare(
    'INSERT IGNORE INTO posts (title, slug, excerpt, content, image_url, category, category_slug, read_time, status, scheduled_at, created_at)
     VALUES (:title, :slug, :excerpt, :content, :image_url, :category, :category_slug, :read_time, :status, :scheduled_at, :created_at)'
);

$now = date('Y-m-d H:i:s');

foreach ($posts as $p) {
    $is_future  = $p['created_at'] > $now;
    $status     = $is_future ? 'scheduled' : 'published';
    $scheduled  = $is_future ? $p['created_at'] : null;

    try {
        $stmt->execute([
            ':title'         => $p['title'],
            ':slug'          => $p['slug'],
            ':excerpt'       => $p['excerpt'],
            ':content'       => $p['content'],
            ':image_url'     => $p['image_url'],
            ':category'      => $p['category'],
            ':category_slug' => $p['category_slug'],
            ':read_time'     => $p['read_time'],
            ':status'        => $status,
            ':scheduled_at'  => $scheduled,
            ':created_at'    => $p['created_at'],
        ]);
        $label = $is_future ? "agendado ({$p['created_at']})" : 'publicado';
        $log[] = ['ok', "Post {$label}: " . $p['title']];
    } catch (Exception $e) {
        $log[] = ['err', 'Erro em "' . $p['title'] . '": ' . $e->getMessage()];
    }
}
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Seed Posts — Rekintsu</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
<style>
  body { font-family: Inter, sans-serif; background: #070d18; color: #e2e8f0; display: flex; align-items: center; justify-content: center; min-height: 100vh; margin: 0; padding: 24px; box-sizing: border-box; }
  .card { background: #111827; border: 1px solid rgba(255,255,255,.07); border-radius: 12px; padding: 32px; max-width: 560px; width: 100%; }
  h2 { color: #fff; margin: 0 0 20px; }
  .item { padding: 8px 0; border-bottom: 1px solid rgba(255,255,255,.05); font-size: .875rem; }
  .ok { color: #22c55e; }
  .err { color: #ef4444; }
  .summary { margin-top: 20px; padding: 12px 16px; border-radius: 8px; font-weight: 600; }
  .summary--ok { background: rgba(34,197,94,.1); color: #22c55e; border: 1px solid rgba(34,197,94,.2); }
  .summary--err { background: rgba(239,68,68,.1); color: #ef4444; border: 1px solid rgba(239,68,68,.2); }
  a { display: inline-block; margin-top: 20px; padding: 10px 20px; background: #DBA159; color: #1A1A1A; border-radius: 6px; text-decoration: none; font-weight: 600; }
  a:hover { background: #C48A45; }
</style>
</head>
<body>
<div class="card">
  <h2>Seed de Posts — Rekintsu</h2>
  <?php foreach ($log as [$t, $m]): ?>
  <div class="item <?= $t ?>">
    <?= $t === 'ok' ? '✓' : '✗' ?> <?= htmlspecialchars($m) ?>
  </div>
  <?php endforeach; ?>

  <?php
  $erros   = count(array_filter($log, fn($l) => $l[0] === 'err'));
  $ok      = count(array_filter($log, fn($l) => $l[0] === 'ok'));
  ?>
  <div class="summary <?= $erros === 0 ? 'summary--ok' : 'summary--err' ?>">
    <?= $ok ?> post(s) inserido(s) com sucesso<?= $erros > 0 ? " — {$erros} erro(s)" : '' ?>.
  </div>

  <a href="<?= CMS_URL ?>/">← Voltar ao CMS</a>
  <p style="margin-top:16px;font-size:.75rem;color:#64748B">
    Apague este arquivo após executar: <code>cms/posts/seed.php</code>
  </p>
</div>
</body>
</html>
