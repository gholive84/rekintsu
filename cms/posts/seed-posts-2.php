<?php
/**
 * Rekintsu CMS — 8 Posts Agendados (SEO)
 * Acesse /cms/posts/seed-posts-2.php uma única vez.
 * Apague este arquivo após executar.
 *
 * PRÉ-REQUISITO: rode migrate-scheduled.php antes.
 */
define('CMS_DIR', dirname(__DIR__));
define('SITE_ROOT', dirname(dirname(__DIR__)));
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/core/db.php';

$pdo = db();

$posts = [

    /* ── 1 ─────────────────────────────────────────────────────────── */
    [
        'title'        => 'Pilates Clínico ou Pilates Fitness? Entenda a Diferença e Escolha o Certo para Você',
        'slug'         => 'pilates-clinico-ou-fitness-qual-a-diferenca',
        'excerpt'      => 'Descubra o que diferencia o Pilates Clínico do Pilates Fitness, quando cada modalidade é indicada e por que quem tem dor ou condição de saúde deve buscar o acompanhamento de um fisioterapeuta.',
        'category'     => 'Educação',
        'cat_slug'     => 'educacao',
        'read_time'    => '5 min de leitura',
        'image_url'    => 'https://images.pexels.com/photos/3822668/pexels-photo-3822668.jpeg?auto=compress&cs=tinysrgb&w=1200&h=700&fit=crop',
        'scheduled_at' => '2026-04-01 07:00:00',
        'content'      => '<p>O Pilates está em todo lugar: academias, estúdios, clínicas e até aplicativos. Mas existe uma diferença fundamental que a maioria das pessoas desconhece — e que pode ser decisiva para quem tem dor crônica, passou por cirurgia ou apresenta alguma condição de saúde. Estamos falando da distinção entre <strong>Pilates Clínico</strong> e <strong>Pilates Fitness</strong>.</p>

<h2>O que é Pilates Fitness?</h2>
<p>O Pilates Fitness, também chamado de Pilates Funcional ou de Academia, é voltado para condicionamento físico, emagrecimento e bem-estar geral. As aulas costumam ser coletivas, com grupos de 5 a 10 pessoas, e o profissional responsável é geralmente um educador físico com formação em Pilates.</p>
<p>Para pessoas saudáveis que buscam movimentar o corpo, melhorar a flexibilidade e a postura de forma preventiva, essa modalidade funciona muito bem. O problema está em indicá-la para quem tem dor, histórico cirúrgico ou patologias — o que, infelizmente, ainda acontece com frequência.</p>

<h2>O que é Pilates Clínico?</h2>
<p>O Pilates Clínico é uma abordagem terapêutica conduzida por <strong>fisioterapeutas</strong> — profissionais habilitados para avaliar, diagnosticar e tratar condições de saúde. Na Rekintsu, cada sessão começa com uma avaliação postural detalhada, leitura do histórico do paciente e definição de objetivos funcionais específicos.</p>
<p>As sessões são individuais ou em duplas, o que garante atenção total do profissional e exercícios estritamente adequados à condição de cada pessoa. É uma combinação entre a metodologia Pilates e os princípios da fisioterapia moderna.</p>

<h2>Principais diferenças</h2>
<ul>
<li><strong>Profissional:</strong> Educador físico (fitness) vs. Fisioterapeuta (clínico)</li>
<li><strong>Formato:</strong> Aula coletiva (fitness) vs. Atendimento individual (clínico)</li>
<li><strong>Objetivo:</strong> Condicionamento físico (fitness) vs. Tratamento e reabilitação (clínico)</li>
<li><strong>Indicação:</strong> Pessoas saudáveis (fitness) vs. Qualquer perfil, incluindo dores e patologias (clínico)</li>
<li><strong>Avaliação:</strong> Geralmente não há (fitness) vs. Avaliação postural e funcional completa (clínico)</li>
</ul>

<h2>Quando o Pilates Clínico é obrigatório?</h2>
<p>Sempre que existir alguma dessas situações, o Pilates Clínico deixa de ser uma opção e passa a ser a escolha correta:</p>
<ul>
<li>Hérnia de disco, escoliose ou outras patologias da coluna</li>
<li>Recuperação pós-operatória (cirurgia de coluna, joelho, ombro, etc.)</li>
<li>Dor crônica lombar, cervical ou pélvica</li>
<li>Gestação — especialmente segundo e terceiro trimestres</li>
<li>Osteoporose, artrose ou condições osteoarticulares</li>
<li>Sequelas neurológicas (AVC, Parkinson, etc.)</li>
</ul>

<h2>Pilates Clínico em Curitiba</h2>
<p>Na <strong>Rekintsu Pilates Clínico</strong>, a fisioterapeuta Hayla Gomes conduz cada sessão com base em avaliação individualizada, plano terapêutico estruturado e acompanhamento contínuo. Se você tem dúvida sobre qual modalidade é adequada para o seu caso, <a href="https://wa.me/5541991191501">agende uma avaliação</a> — é o primeiro passo para um tratamento que realmente funciona.</p>',
    ],

    /* ── 2 ─────────────────────────────────────────────────────────── */
    [
        'title'        => 'Dor Lombar: Como o Pilates Clínico Trata a Causa e Não Apenas o Sintoma',
        'slug'         => 'dor-lombar-pilates-clinico-tratamento',
        'excerpt'      => 'A lombalgia afeta 80% das pessoas em algum momento da vida. Entenda como o Pilates Clínico age nas causas da dor lombar — e por que vai muito além do alívio temporário.',
        'category'     => 'Coluna & Postura',
        'cat_slug'     => 'coluna-postura',
        'read_time'    => '6 min de leitura',
        'image_url'    => 'https://images.pexels.com/photos/3760275/pexels-photo-3760275.jpeg?auto=compress&cs=tinysrgb&w=1200&h=700&fit=crop',
        'scheduled_at' => '2026-04-05 07:00:00',
        'content'      => '<p>A <strong>dor lombar</strong> — ou lombalgia — é a segunda causa mais comum de afastamento do trabalho no Brasil, perdendo apenas para as gripes e resfriados. Estima-se que 80% das pessoas experimentarão dor na região lombar em algum momento da vida. E apesar de ser tão comum, a maioria das pessoas trata apenas o sintoma: toma analgésico, aplica calor, descansa e espera melhorar. O problema é que a dor volta.</p>
<p>O <strong>Pilates Clínico</strong> age de forma diferente. Ele vai à raiz do problema.</p>

<h2>Por que a dor lombar aparece?</h2>
<p>A dor na região lombar raramente surge do nada. Na maioria dos casos, é o resultado de um desequilíbrio progressivo que envolve:</p>
<ul>
<li>Fraqueza da musculatura estabilizadora profunda (core)</li>
<li>Encurtamento de cadeia posterior (isquiotibiais, glúteos, paravertebrais)</li>
<li>Má postura sustentada por horas no trabalho ou no sono</li>
<li>Sobrecarga articular por excesso de peso ou movimentos repetitivos</li>
<li>Hérnia de disco, artrose ou estenose do canal medular</li>
</ul>
<p>Cada um desses fatores exige uma abordagem específica — o que torna essencial a avaliação por um fisioterapeuta antes de qualquer exercício.</p>

<h2>Como o Pilates Clínico trata a lombalgia?</h2>
<p>O tratamento começa com uma <strong>avaliação postural completa</strong> para identificar quais estruturas estão comprometidas. A partir daí, o programa é construído em etapas:</p>

<h3>1. Ativação do core profundo</h3>
<p>Músculos como o transverso abdominal e o multífido são os principais estabilizadores da coluna. Quando enfraquecidos, permitem micro-instabilidades que irritam os discos e as articulações. O Pilates reativa esses músculos de forma progressiva e segura.</p>

<h3>2. Alongamento da cadeia posterior</h3>
<p>A tensão crônica em glúteos, isquiotibiais e paravertebrais comprime a coluna lombar e aumenta a pressão intradiscal. Os exercícios de Pilates trabalham o alongamento funcional — não estático e isolado, mas integrado ao movimento.</p>

<h3>3. Reeducação postural</h3>
<p>Padrões posturais inadequados são corrigidos através da consciência corporal desenvolvida pelo método. O paciente aprende a mover-se com mais eficiência, redistribuindo as forças que antes sobrecarregavam a região lombar.</p>

<h3>4. Fortalecimento progressivo</h3>
<p>Com a estabilização central estabelecida, o programa avança para fortalecer glúteos, abdominais e extensores da coluna — o que protege a região lombar nas atividades do dia a dia.</p>

<h2>Resultados esperados</h2>
<p>A maioria dos pacientes da Rekintsu com dor lombar crônica relata melhora significativa já nas primeiras semanas de tratamento. A longo prazo, o objetivo é não apenas eliminar a dor, mas criar uma coluna funcional, estável e resistente — capaz de suportar as demandas da vida sem dor.</p>
<p>Se você convive com dor lombar e quer uma abordagem que trate a causa, <a href="https://wa.me/5541991191501">agende sua avaliação</a> na Rekintsu Pilates Clínico, em Curitiba.</p>',
    ],

    /* ── 3 ─────────────────────────────────────────────────────────── */
    [
        'title'        => 'Pilates para Ansiedade e Estresse: Exercício que Cuida do Corpo e da Mente',
        'slug'         => 'pilates-para-ansiedade-e-estresse',
        'excerpt'      => 'Estudos comprovam que o Pilates reduz os níveis de cortisol e melhora o humor. Entenda como essa prática age no sistema nervoso e se torna uma ferramenta poderosa contra a ansiedade.',
        'category'     => 'Bem-estar',
        'cat_slug'     => 'bem-estar',
        'read_time'    => '5 min de leitura',
        'image_url'    => 'https://images.pexels.com/photos/3822622/pexels-photo-3822622.jpeg?auto=compress&cs=tinysrgb&w=1200&h=700&fit=crop',
        'scheduled_at' => '2026-04-09 07:00:00',
        'content'      => '<p>Vivemos em uma era de alta demanda e pouca pausa. O estresse crônico e a ansiedade tornaram-se parte do cotidiano de milhões de brasileiros — e o corpo guarda tudo isso. Tensão no pescoço, respiração curta, dores musculares difusas, insônia. O Pilates age em todos esses pontos ao mesmo tempo.</p>

<h2>A relação entre movimento e saúde mental</h2>
<p>A prática regular de exercícios físicos é hoje reconhecida como uma das intervenções mais eficazes para reduzir sintomas de ansiedade e depressão leve a moderada. O Pilates, em especial, apresenta características únicas que potencializam esse efeito:</p>
<ul>
<li><strong>Respiração consciente:</strong> A base do método Pilates é a respiração diafragmática, que ativa o sistema nervoso parassimpático — responsável pelo estado de calma e recuperação do organismo.</li>
<li><strong>Atenção plena ao movimento:</strong> Cada exercício exige concentração total, funcionando como uma forma de meditação em movimento. A mente é "retirada" das preocupações e direcionada ao corpo.</li>
<li><strong>Liberação de endorfinas:</strong> Como qualquer exercício físico, o Pilates estimula a produção de neurotransmissores relacionados ao prazer e ao bem-estar.</li>
</ul>

<h2>O que a ciência diz</h2>
<p>Uma revisão publicada no <em>Journal of Bodywork and Movement Therapies</em> avaliou 10 estudos sobre Pilates e saúde mental. Os resultados apontaram redução significativa nos níveis de ansiedade, melhora do humor e diminuição da percepção de estresse após 8 semanas de prática regular.</p>
<p>Outro estudo, conduzido com mulheres com ansiedade generalizada, mostrou que 12 sessões de Pilates reduziram os escores de ansiedade em até 40% — resultado comparável ao de alguns tratamentos farmacológicos, sem os efeitos colaterais.</p>

<h2>Como o estresse acumula no corpo — e como o Pilates desfaz isso</h2>
<p>O estresse crônico causa contração involuntária de músculos específicos: trapézio, esternocleidemastoide, psoas e diafragma são os mais afetados. Esse padrão de tensão compromete a respiração, a postura e gera um ciclo de dor e ansiedade que se retroalimenta.</p>
<p>O Pilates trabalha justamente esses grupos musculares, promovendo alongamento, consciência e relaxamento progressivo. Muitos pacientes relatam que a sensação de leveza ao final de uma sessão vai além do físico — é uma reorganização do sistema nervoso inteiro.</p>

<h2>Pilates Clínico em Curitiba para quem vive sob pressão</h2>
<p>Na Rekintsu, cada sessão é um espaço de atenção exclusiva. Sem barulho, sem grupo, sem pressa. Só você, a fisioterapeuta e o movimento. Para muitos pacientes, esse ambiente em si já representa um alívio significativo. <a href="https://wa.me/5541991191501">Agende sua avaliação</a> e comece a cuidar da sua saúde de dentro para fora.</p>',
    ],

    /* ── 4 ─────────────────────────────────────────────────────────── */
    [
        'title'        => 'Lesão no Joelho e Pilates: Reabilitação Segura para LCA, Menisco e Artrose',
        'slug'         => 'lesao-joelho-pilates-reabilitacao-lca-menisco',
        'excerpt'      => 'Ruptura de LCA, lesão de menisco, artrose ou dor patelofemoral — o Pilates Clínico é aliado essencial na reabilitação do joelho, acelerando a recuperação com segurança e progressão adequada.',
        'category'     => 'Reabilitação',
        'cat_slug'     => 'reabilitacao',
        'read_time'    => '6 min de leitura',
        'image_url'    => 'https://images.pexels.com/photos/6111616/pexels-photo-6111616.jpeg?auto=compress&cs=tinysrgb&w=1200&h=700&fit=crop',
        'scheduled_at' => '2026-04-13 07:00:00',
        'content'      => '<p>O joelho é uma das articulações mais complexas e mais sobrecarregadas do corpo humano. Sustenta o peso corporal, absorve impactos e participa de praticamente todos os movimentos funcionais — caminhar, subir escadas, sentar, levantar. Por isso, quando algo falha nessa articulação, o impacto na qualidade de vida é imediato.</p>

<h2>Lesões mais comuns do joelho</h2>
<p>Na prática clínica, as condições de joelho mais frequentes que chegam à Rekintsu são:</p>
<ul>
<li><strong>Ruptura do LCA (Ligamento Cruzado Anterior):</strong> Comum em esportes de impacto e pivotamento. A reabilitação pós-cirurgia (ligamentoplastia) exige meses de trabalho progressivo.</li>
<li><strong>Lesão de menisco:</strong> O menisco atua como amortecedor do joelho. Lesões parciais ou totais geram dor, inchaço e sensação de travamento.</li>
<li><strong>Condromalácia patelar (Síndrome da Dor Patelofemoral):</strong> Desgaste da cartilagem da patela, muito comum em mulheres e em pessoas sedentárias. Causa dor ao subir escadas e ao ficar muito tempo sentado.</li>
<li><strong>Artrose de joelho (gonartrose):</strong> Degeneração progressiva da cartilagem articular, especialmente em adultos acima dos 50 anos.</li>
</ul>

<h2>Por que o Pilates é eficaz para o joelho?</h2>
<p>O Pilates trabalha o joelho de forma inteligente: fortalecendo os músculos que o protegem (quadríceps, isquiotibiais, glúteos), corrigindo o alinhamento dinâmico do membro inferior e melhorando a propriocepção — a percepção que o joelho tem de sua própria posição no espaço.</p>
<p>Nos aparelhos de Pilates (Reformer, Cadillac, Chair), é possível realizar exercícios com carga parcial e progressiva, o que é fundamental nas fases iniciais da reabilitação, quando o joelho ainda não suporta o peso corporal total.</p>

<h2>Protocolo de reabilitação de joelho na Rekintsu</h2>
<h3>Fase 1 — Controle da inflamação e ativação muscular inicial</h3>
<p>Foco em reduzir o edema, reativar o quadríceps inibido pela dor e trabalhar a amplitude articular dentro dos limites seguros.</p>
<h3>Fase 2 — Fortalecimento e estabilidade</h3>
<p>Progressão gradual com exercícios de cadeia cinética fechada (que simulam os movimentos funcionais), fortalecimento de glúteos e core para reduzir a sobrecarga no joelho.</p>
<h3>Fase 3 — Funcionalidade e retorno às atividades</h3>
<p>Exercícios de equilíbrio, propriocepção e movimentos específicos para as demandas do paciente — seja voltar a caminhar confortavelmente, praticar esportes ou subir escadas sem dor.</p>

<h2>Reabilitação de joelho em Curitiba</h2>
<p>Se você passou por cirurgia de joelho ou convive com dor crônica nessa articulação, a Rekintsu tem um programa estruturado para a sua recuperação. <a href="https://wa.me/5541991191501">Fale com a fisioterapeuta Hayla Gomes</a> e dê o primeiro passo para recuperar sua mobilidade.</p>',
    ],

    /* ── 5 ─────────────────────────────────────────────────────────── */
    [
        'title'        => 'Como Melhorar a Postura com Pilates: O Guia Definitivo para a Coluna Reta',
        'slug'         => 'como-melhorar-postura-com-pilates',
        'excerpt'      => 'Postura ruim causa dor, cansaço e impacta a autoestima. Veja como o Pilates Clínico corrige desequilíbrios posturais de forma permanente — não só enquanto você faz o exercício.',
        'category'     => 'Coluna & Postura',
        'cat_slug'     => 'coluna-postura',
        'read_time'    => '5 min de leitura',
        'image_url'    => 'https://images.pexels.com/photos/4056723/pexels-photo-4056723.jpeg?auto=compress&cs=tinysrgb&w=1200&h=700&fit=crop',
        'scheduled_at' => '2026-04-17 07:00:00',
        'content'      => '<p>Quantas vezes por dia alguém te pede para sentar direito? A má postura é uma epidemia silenciosa — e a pandemia do trabalho remoto a acelerou de forma alarmante. Horas curvado sobre um notebook, ombros projetados para frente, cabeça inclinada sobre o celular. O resultado: dor, cansaço, tensão e, com o tempo, deformidades progressivas na coluna.</p>
<p>A boa notícia é que a postura pode ser corrigida — e o <strong>Pilates Clínico</strong> é um dos métodos mais eficazes para isso.</p>

<h2>Por que a postura piora?</h2>
<p>A postura é o resultado de um equilíbrio entre cadeias musculares opostas. Quando alguns músculos estão excessivamente tensos e outros estão fracos, o corpo se desalinha. As causas mais comuns são:</p>
<ul>
<li>Longas horas sentado sem suporte lombar adequado</li>
<li>Uso excessivo de telas em posições inadequadas</li>
<li>Desequilíbrios musculares por prática esportiva unilateral</li>
<li>Padrões de compensação por dor antiga ou trauma</li>
<li>Calçados inadequados que alteram todo o eixo corporal</li>
</ul>

<h2>Os principais desvios posturais tratados pelo Pilates</h2>
<ul>
<li><strong>Hipercifose:</strong> Arredondamento excessivo da coluna torácica ("corcunda"). Causa dor entre as escápulas e comprime os pulmões.</li>
<li><strong>Hiperlordose lombar:</strong> Curvatura excessiva da lombar, frequentemente associada à fraqueza abdominal e encurtamento do psoas.</li>
<li><strong>Anteriorização da cabeça:</strong> A cabeça projetada para frente multiplica o peso que a cervical precisa suportar — de 5kg para até 27kg a cada 5cm de inclinação.</li>
<li><strong>Ombros protraídos:</strong> Ombros "fechados" para frente, geralmente associados à fraqueza dos músculos romboides e serrátil anterior.</li>
</ul>

<h2>Como o Pilates corrige a postura?</h2>
<p>O diferencial do Pilates é trabalhar a postura em movimento, não só em posições estáticas. Isso significa que a correção se torna funcional — integrada aos movimentos do dia a dia.</p>
<p>Na prática, o trabalho envolve:</p>
<ul>
<li><strong>Ativação dos músculos posturais profundos:</strong> Transverso abdominal, multífidos, serrátil anterior e romboides são trabalhados de forma específica.</li>
<li><strong>Alongamento das cadeias encurtadas:</strong> Psoas, peitorais, trapézio superior e posteriores da coxa são os grupos que mais necessitam de alongamento na má postura moderna.</li>
<li><strong>Consciência corporal:</strong> O aluno aprende a perceber e corrigir sua postura de forma autônoma — fora do estúdio também.</li>
</ul>

<h2>Quanto tempo para ver resultados?</h2>
<p>A maioria dos pacientes percebe melhoras perceptíveis — menos dor, mais leveza, postura mais ereta — entre 4 e 8 semanas de prática regular. A correção definitiva dos padrões mais antigos pode levar alguns meses, mas o processo é progressivo e constante.</p>
<p>Quer corrigir sua postura com orientação especializada em Curitiba? <a href="https://wa.me/5541991191501">Agende uma avaliação postural completa</a> na Rekintsu e receba um plano individualizado.</p>',
    ],

    /* ── 6 ─────────────────────────────────────────────────────────── */
    [
        'title'        => 'Pilates na Menopausa: Aliado Essencial para Ossos, Músculos e Bem-Estar',
        'slug'         => 'pilates-na-menopausa-beneficios',
        'excerpt'      => 'A menopausa traz mudanças profundas no corpo feminino. Saiba como o Pilates Clínico reduz sintomas, previne a osteoporose e mantém a qualidade de vida nessa fase da vida.',
        'category'     => 'Saúde da Mulher',
        'cat_slug'     => 'saude-da-mulher',
        'read_time'    => '6 min de leitura',
        'image_url'    => 'https://images.pexels.com/photos/3824949/pexels-photo-3824949.jpeg?auto=compress&cs=tinysrgb&w=1200&h=700&fit=crop',
        'scheduled_at' => '2026-04-21 07:00:00',
        'content'      => '<p>A menopausa é uma fase natural da vida feminina, mas as mudanças que ela provoca no corpo são profundas e, muitas vezes, desafiadoras. A queda nos níveis de estrogênio afeta os ossos, os músculos, o peso, o sono, o humor e a postura. É exatamente nesse contexto que o <strong>Pilates Clínico</strong> se revela um aliado de alto valor.</p>

<h2>O que acontece no corpo durante a menopausa?</h2>
<p>Com a diminuição do estrogênio, o organismo feminino passa por alterações significativas:</p>
<ul>
<li><strong>Perda de massa óssea:</strong> O risco de osteopenia e osteoporose aumenta substancialmente, tornando fraturas mais prováveis.</li>
<li><strong>Redução de massa muscular (sarcopenia):</strong> A força e o volume muscular diminuem, impactando a capacidade funcional e o metabolismo.</li>
<li><strong>Alterações posturais:</strong> A fragilidade óssea favorece a hipercifose torácica e a compressão vertebral.</li>
<li><strong>Disfunções do assoalho pélvico:</strong> Incontinência urinária e prolapso se tornam mais comuns após a menopausa.</li>
<li><strong>Sintomas gerais:</strong> Fogachos, insônia, variações de humor e ganho de peso abdominal.</li>
</ul>

<h2>Como o Pilates Clínico atua na menopausa?</h2>

<h3>Prevenção e tratamento da osteoporose</h3>
<p>Exercícios com carga e resistência — como os realizados no Reformer e na Chair do Pilates — estimulam a osteogênese (formação óssea) e retardam a perda de densidade óssea. São exercícios de impacto controlado, seguros para quem já tem algum grau de fragilidade.</p>

<h3>Fortalecimento muscular e manutenção do metabolismo</h3>
<p>O Pilates trabalha todos os grupos musculares com resistência progressiva, contribuindo para manter — e até aumentar — a massa muscular. Isso tem impacto direto no metabolismo e na composição corporal.</p>

<h3>Reeducação do assoalho pélvico</h3>
<p>O trabalho de ativação e fortalecimento do assoalho pélvico, integrado ao Pilates, reduz a incontinência urinária e melhora a função pélvica geral — um dos ganhos mais valorizados pelas pacientes.</p>

<h3>Equilíbrio e prevenção de quedas</h3>
<p>Os exercícios de propriocepção e equilíbrio do Pilates reduzem significativamente o risco de quedas — um perigo real para mulheres com osteoporose.</p>

<h3>Bem-estar e qualidade do sono</h3>
<p>A prática regular de Pilates está associada à redução de fogachos, melhora do humor e melhor qualidade do sono — benefícios que vão muito além do físico.</p>

<h2>Pilates para menopausa em Curitiba</h2>
<p>Na Rekintsu, o programa para mulheres na menopausa é individualizado, respeitando as limitações de cada paciente e avançando no ritmo certo. Se você está nessa fase e quer cuidar da sua saúde com inteligência, <a href="https://wa.me/5541991191501">agende uma avaliação</a>. Você merece se sentir bem em qualquer fase da vida.</p>',
    ],

    /* ── 7 ─────────────────────────────────────────────────────────── */
    [
        'title'        => 'Escoliose e Pilates Clínico: Como o Exercício Terapêutico Muda a Qualidade de Vida',
        'slug'         => 'escoliose-pilates-clinico-tratamento',
        'excerpt'      => 'A escoliose afeta milhões de brasileiros. Veja como o Pilates Clínico, aliado ao diagnóstico médico, melhora a dor, a postura e a função respiratória em pacientes com curvatura lateral da coluna.',
        'category'     => 'Coluna & Postura',
        'cat_slug'     => 'coluna-postura',
        'read_time'    => '6 min de leitura',
        'image_url'    => 'https://images.pexels.com/photos/5234468/pexels-photo-5234468.jpeg?auto=compress&cs=tinysrgb&w=1200&h=700&fit=crop',
        'scheduled_at' => '2026-04-25 07:00:00',
        'content'      => '<p>A escoliose é uma curvatura lateral da coluna vertebral que afeta entre 2% e 3% da população mundial. Em adolescentes, é frequentemente descoberta na escola. Em adultos, pode surgir de forma degenerativa ou se agravar com o tempo. Em qualquer caso, provoca dor, desequilíbrio muscular, comprometimento respiratório e impacto significativo na autoestima e na qualidade de vida.</p>

<h2>O que é escoliose?</h2>
<p>Tecnicamente, a escoliose é definida como uma curvatura lateral da coluna com ângulo de Cobb superior a 10°. Ela pode ser:</p>
<ul>
<li><strong>Idiopática:</strong> Sem causa definida, é o tipo mais comum. Surge geralmente na adolescência.</li>
<li><strong>Degenerativa:</strong> Resultado do desgaste articular e discal, mais comum em adultos acima dos 40 anos.</li>
<li><strong>Congênita:</strong> Presente desde o nascimento, por malformação vertebral.</li>
<li><strong>Neuromuscular:</strong> Associada a condições como paralisia cerebral, distrofia muscular ou espinha bífida.</li>
</ul>

<h2>O Pilates pode corrigir a escoliose?</h2>
<p>É importante ser honesto: o Pilates não reverte deformidades ósseas estabelecidas. O que ele faz — e faz muito bem — é <strong>tratar as consequências funcionais da escoliose</strong>: a dor, a fraqueza assimétrica, a tensão muscular, a rigidez costal e a limitação respiratória.</p>
<p>Em crianças e adolescentes em fase de crescimento, o Pilates pode contribuir para desacelerar a progressão da curva quando realizado em conjunto com o tratamento médico e ortopédico.</p>

<h2>Benefícios do Pilates para pacientes com escoliose</h2>
<ul>
<li><strong>Equilíbrio muscular:</strong> O trabalho assimétrico fortalece os músculos do lado côncavo e alonga os do lado convexo, reduzindo o desequilíbrio.</li>
<li><strong>Melhora da respiração:</strong> Exercícios específicos expandem as costelas do lado comprimido, melhorando a capacidade ventilatória.</li>
<li><strong>Redução da dor:</strong> O fortalecimento da musculatura paravertebral reduz a sobrecarga nas articulações comprimidas.</li>
<li><strong>Consciência corporal:</strong> O paciente aprende a perceber e compensar a assimetria, adotando padrões de movimento mais saudáveis no cotidiano.</li>
<li><strong>Autoestima e bem-estar:</strong> Sentir o corpo mais equilibrado e funcional tem impacto direto na qualidade de vida percebida.</li>
</ul>

<h2>Como é o atendimento na Rekintsu?</h2>
<p>Cada caso de escoliose é único. Na Rekintsu, a avaliação postural inclui análise das curvas, medição dos desvios visíveis e leitura do histórico médico (raio-x e laudo médico são bem-vindos). A partir daí, é desenvolvido um programa específico, com exercícios pensados para o seu tipo e grau de escoliose.</p>
<p>Se você ou seu filho tem escoliose e busca tratamento com Pilates Clínico em Curitiba, <a href="https://wa.me/5541991191501">entre em contato</a> e agende uma avaliação.</p>',
    ],

    /* ── 8 ─────────────────────────────────────────────────────────── */
    [
        'title'        => 'Síndrome do Impacto no Ombro: Como o Pilates Clínico Acelera a Recuperação',
        'slug'         => 'sindrome-impacto-ombro-pilates-reabilitacao',
        'excerpt'      => 'Dor ao levantar o braço, dificuldade para dormir sobre o ombro, fraqueza na pegada — esses são sinais da síndrome do impacto. Veja como o Pilates Clínico trata essa condição de forma eficaz.',
        'category'     => 'Reabilitação',
        'cat_slug'     => 'reabilitacao',
        'read_time'    => '5 min de leitura',
        'image_url'    => 'https://images.pexels.com/photos/3757376/pexels-photo-3757376.jpeg?auto=compress&cs=tinysrgb&w=1200&h=700&fit=crop',
        'scheduled_at' => '2026-04-29 07:00:00',
        'content'      => '<p>Você sente dor ao levantar o braço acima da cabeça? Tem dificuldade para dormir sobre um dos ombros? Percebe fraqueza ao carregar peso? Esses são sintomas clássicos da <strong>Síndrome do Impacto Subacromial</strong> — uma das condições de ombro mais comuns e, ao mesmo tempo, mais subdiagnosticadas.</p>

<h2>O que é a Síndrome do Impacto?</h2>
<p>O ombro é uma articulação extremamente móvel, o que também a torna vulnerável. A Síndrome do Impacto ocorre quando os tendões do manguito rotador (grupo de quatro músculos que estabilizam o ombro) são comprimidos no espaço subacromial — a "galeria" por onde passam ao levantar o braço.</p>
<p>Essa compressão repetitiva causa inflamação, dor e, se não tratada, pode evoluir para rupturas parciais ou totais do manguito rotador, exigindo cirurgia.</p>

<h2>Causas mais comuns</h2>
<ul>
<li>Fraqueza dos músculos estabilizadores da escápula (serratil anterior, trapézio inferior)</li>
<li>Desequilíbrio entre a musculatura anterior (peitoral) e posterior do ombro</li>
<li>Postura com ombros protraídos ("fechados")</li>
<li>Movimentos repetitivos com o braço elevado (nadar, pintar, trabalhar sobre a cabeça)</li>
<li>Alterações anatômicas do acrômio</li>
</ul>

<h2>Por que o Pilates é eficaz para o ombro?</h2>
<p>O Pilates trabalha o ombro de forma funcional e integrada — não isola o músculo, mas trabalha a cadeia cinética do membro superior como um todo. Os objetivos do tratamento são:</p>

<h3>1. Reequilíbrio muscular</h3>
<p>Fortalecer os rotadores externos, estabilizadores da escápula e trapézio inferior, enquanto se alonga o peitoral e o trapézio superior — invertendo o padrão que causa o impacto.</p>

<h3>2. Reeducação do movimento escapular</h3>
<p>A disfunção escapular é um dos principais fatores na síndrome do impacto. O Pilates trabalha o ritmo escápulo-umeral, ensinando o ombro a se mover de forma coordenada e eficiente.</p>

<h3>3. Progressão segura da amplitude</h3>
<p>Ao contrário de exercícios genéricos que podem agravar o quadro, o Pilates Clínico respeita a dor e avança de forma progressiva, aumentando a amplitude à medida que a inflamação diminui e a estabilidade aumenta.</p>

<h2>Pós-operatório de ombro e Pilates</h2>
<p>Para quem passou por cirurgia de ombro (artroscopia, reparo do manguito, acromioplastia), o Pilates é parte fundamental do protocolo de reabilitação. Com aparelhos como o Reformer e o Cadillac, é possível trabalhar o ombro com carga controlada e posições que protegem a cirurgia em fases iniciais.</p>

<h2>Cuide do seu ombro antes que piore</h2>
<p>A síndrome do impacto raramente melhora sozinha sem tratamento. Quanto mais tempo sem cuidado, maiores as chances de evolução para ruptura tendínea. Se você tem dor no ombro, <a href="https://wa.me/5541991191501">agende uma avaliação</a> na Rekintsu e receba um plano de reabilitação especializado em Curitiba.</p>',
    ],

];

// ── Diagnóstico: verifica se scheduled_at existe ─────────────────────────────
$cols = $pdo->query("SHOW COLUMNS FROM posts LIKE 'scheduled_at'")->fetchAll();
if (empty($cols)) {
    die('<b style="color:red">❌ Coluna scheduled_at não existe.<br>Rode primeiro: <a href="migrate-scheduled.php">migrate-scheduled.php</a></b>');
}
echo '✅ Coluna <code>scheduled_at</code> encontrada.<br><br>';

// ── Inserção ─────────────────────────────────────────────────────────────────
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT IGNORE INTO posts
            (title, slug, excerpt, content, image_url, category, category_slug, read_time, status, scheduled_at, created_at)
        VALUES
            (:title, :slug, :excerpt, :content, :image_url, :category, :category_slug, :read_time, :status, :scheduled_at, :scheduled_at)";

$stmt  = $pdo->prepare($sql);
$count = 0;

foreach ($posts as $p) {
    try {
        $stmt->execute([
            ':title'         => $p['title'],
            ':slug'          => $p['slug'],
            ':excerpt'       => $p['excerpt'],
            ':content'       => $p['content'],
            ':image_url'     => $p['image_url'],
            ':category'      => $p['category'],
            ':category_slug' => $p['cat_slug'],
            ':read_time'     => $p['read_time'],
            ':status'        => 'scheduled',
            ':scheduled_at'  => $p['scheduled_at'],
        ]);
        $inserted = $stmt->rowCount() > 0;
        if ($inserted) $count++;
        echo ($inserted ? '✅ Inserido' : '⏭️ Já existe') . ': ' . htmlspecialchars($p['title']) . '<br>';
    } catch (Exception $e) {
        echo '❌ Erro em "' . htmlspecialchars($p['title']) . '": ' . $e->getMessage() . '<br>';
    }
}

echo "<br><strong>{$count} post(s) inserido(s) como agendados.</strong><br>";
echo "Execute <code>/cms/posts/publish-scheduled.php</code> diariamente via cron.<br>";
echo "<br>Pode apagar este arquivo após executar.";
