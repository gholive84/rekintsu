<?php
/**
 * Rekintsu CMS — Seed de Posts do Blog
 * Acesse /cms/posts/seed-posts.php uma única vez.
 * Apague este arquivo após executar.
 */
define('CMS_DIR', dirname(__DIR__));
define('SITE_ROOT', dirname(dirname(__DIR__)));
require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/core/db.php';

$pdo = db();

$posts = [
    [
        'title'         => 'Os Benefícios do Pilates Clínico na Recuperação Pós-Cirúrgica',
        'slug'          => 'beneficios-pilates-recuperacao-pos-cirurgica',
        'excerpt'       => 'Entenda como o Pilates Clínico acelera a recuperação após cirurgias ortopédicas, abdominais e articulares — com exercícios seguros, progressivos e orientados por fisioterapeuta.',
        'category'      => 'Reabilitação',
        'category_slug' => 'reabilitacao',
        'read_time'     => '5 min de leitura',
        'image_url'     => 'https://images.pexels.com/photos/6787357/pexels-photo-6787357.jpeg?auto=compress&cs=tinysrgb&w=1200&h=700&fit=crop',
        'status'        => 'published',
        'content'       => '<p>A recuperação após uma cirurgia é um período delicado, que exige cuidado, paciência e um planejamento terapêutico bem estruturado. O Pilates Clínico tem se destacado como uma das abordagens mais eficazes para a reabilitação pós-operatória, unindo exercícios de baixo impacto com foco na reeducação muscular, postura e mobilidade.</p>

<h2>Por que o Pilates é indicado após cirurgias?</h2>
<p>Diferentemente de atividades físicas tradicionais, o Pilates Clínico trabalha com movimentos controlados e progressivos, respeitando os limites do paciente em cada fase da recuperação. Isso o torna ideal para períodos pós-cirúrgicos, quando o corpo ainda está se regenerando e precisa de estímulos precisos para retomar a função.</p>

<h2>Benefícios comprovados</h2>
<ul>
<li><strong>Reativação muscular gradual:</strong> Exercícios específicos reativam grupos musculares inibidos pela cirurgia ou pelo período de imobilização.</li>
<li><strong>Redução do edema:</strong> Movimentos suaves estimulam a circulação e auxiliam na drenagem linfática natural do organismo.</li>
<li><strong>Prevenção de aderências:</strong> A mobilização precoce e orientada reduz a formação de tecido cicatricial excessivo nas regiões operadas.</li>
<li><strong>Melhora da propriocepção:</strong> Exercícios de equilíbrio e coordenação restabelecem a percepção corporal afetada pela cirurgia e pela anestesia.</li>
<li><strong>Fortalecimento do core:</strong> A estabilização da coluna e do tronco protege as estruturas operadas durante os movimentos do cotidiano.</li>
</ul>

<h2>Quando iniciar o Pilates após a cirurgia?</h2>
<p>O momento ideal para iniciar o Pilates varia conforme o tipo de cirurgia, o tecido envolvido e a evolução individual de cada paciente. Em geral, existem duas fases:</p>
<p><strong>Fase inicial (2 a 6 semanas pós-op):</strong> Foco em respiração diafragmática, ativação suave do assoalho pélvico e exercícios passivos para manutenção da amplitude articular.</p>
<p><strong>Fase intermediária (6 semanas em diante):</strong> Progressão gradual com exercícios ativos, fortalecimento muscular e retorno às atividades funcionais, sempre sob supervisão especializada.</p>

<h2>Cirurgias mais comuns atendidas na Rekintsu</h2>
<ul>
<li>Artroscopia de joelho e ombro</li>
<li>Cirurgia de coluna (hérnia de disco, estenose)</li>
<li>Prótese de quadril e joelho</li>
<li>Cesárea e cirurgias abdominais</li>
<li>Cirurgias ginecológicas e pélvicas</li>
</ul>

<h2>O papel da fisioterapeuta no processo</h2>
<p>Na Rekintsu, cada programa de reabilitação pós-cirúrgica é elaborado individualmente pela fisioterapeuta Hayla Gomes, com base na avaliação postural, no tipo de cirurgia realizada e nas metas funcionais de cada paciente. O atendimento é sempre individualizado — apenas você e a especialista — garantindo atenção total em cada sessão.</p>
<p>Se você está em processo de recuperação e deseja saber se o Pilates Clínico é indicado para o seu caso, <a href="https://wa.me/5541991191501">entre em contato</a> e agende uma avaliação inicial.</p>',
    ],
    [
        'title'         => 'Pilates na Gestação: Exercícios Seguros para Cada Trimestre',
        'slug'          => 'pilates-gestacao-exercicios-seguros-trimestre',
        'excerpt'       => 'Saiba como o Pilates adaptado para gestantes alivia dores, prepara o corpo para o parto e contribui para uma gravidez mais saudável e confortável — com segurança em cada fase.',
        'category'      => 'Gestação',
        'category_slug' => 'gestacao',
        'read_time'     => '6 min de leitura',
        'image_url'     => 'https://images.pexels.com/photos/3984369/pexels-photo-3984369.jpeg?auto=compress&cs=tinysrgb&w=1200&h=700&fit=crop',
        'status'        => 'published',
        'content'       => '<p>A gestação é um período de profundas transformações no corpo feminino. A postura muda, o centro de gravidade se desloca, os ligamentos afrouxam e novas demandas são impostas à musculatura. O Pilates adaptado para gestantes é uma das ferramentas mais completas para acompanhar e apoiar essas mudanças com segurança, conforto e eficiência.</p>

<h2>Por que o Pilates é seguro na gestação?</h2>
<p>O Pilates Clínico para gestantes é completamente adaptado às necessidades de cada trimestre. Os exercícios evitam posições de risco, trabalham com carga adequada e focam em regiões-chave para o bem-estar gestacional: assoalho pélvico, lombar, core profundo e mobilidade.</p>

<h2>Benefícios em cada trimestre</h2>

<h3>1º Trimestre (semanas 1 a 13)</h3>
<p>Fase de adaptação. O foco está em exercícios respiratórios, ativação do assoalho pélvico e fortalecimento suave do core. É o momento ideal para estabelecer a consciência corporal que acompanhará toda a gestação.</p>
<ul>
<li>Controle da respiração diafragmática</li>
<li>Ativação do transverso abdominal</li>
<li>Exercícios de mobilidade pélvica</li>
</ul>

<h3>2º Trimestre (semanas 14 a 27)</h3>
<p>A barriga cresce e as dores lombares começam a aparecer. O Pilates foca no fortalecimento postural, alívio das tensões na coluna e na preparação muscular para o aumento de peso.</p>
<ul>
<li>Fortalecimento de glúteos e membros inferiores</li>
<li>Exercícios de equilíbrio e propriocepção</li>
<li>Alongamentos para as regiões mais sobrecarregadas (quadril, lombar, panturrilhas)</li>
</ul>

<h3>3º Trimestre (semanas 28 ao parto)</h3>
<p>Preparação ativa para o trabalho de parto. O foco está na liberação do assoalho pélvico, respiração para o parto, mobilidade do quadril e controle das contrações.</p>
<ul>
<li>Técnicas de respiração para as contrações</li>
<li>Exercícios em posição de cócoras e quatro apoios</li>
<li>Alongamento do períneo e assoalho pélvico</li>
<li>Posicionamento fetal e preparação para descida do bebê</li>
</ul>

<h2>O que o Pilates previne na gestação?</h2>
<ul>
<li>Dor lombar e ciatalgia</li>
<li>Diástase abdominal</li>
<li>Incontinência urinária</li>
<li>Varizes e edema nos membros inferiores</li>
<li>Ansiedade e tensão muscular generalizada</li>
</ul>

<h2>Quando procurar uma especialista?</h2>
<p>O ideal é iniciar o Pilates gestacional ainda no primeiro trimestre, após a liberação do obstetra. Quanto antes for iniciado, maior será o repertório de exercícios disponíveis e mais bem preparada estará a gestante para as fases seguintes.</p>
<p>Na Rekintsu, as sessões são individuais e adaptadas semana a semana, conforme a evolução da gravidez. <a href="https://wa.me/5541991191501">Entre em contato</a> e saiba mais sobre o programa de Pilates para Gestantes.</p>',
    ],
    [
        'title'         => 'Pilates para Hérnias de Disco: Como os Exercícios Ajudam na Recuperação',
        'slug'          => 'pilates-tratamento-hernias-disco',
        'excerpt'       => 'Descubra como o Pilates Clínico atua no tratamento conservador de hérnias de disco, aliviando a dor, fortalecendo a musculatura de proteção e evitando recidivas — sem cirurgia.',
        'category'      => 'Coluna & Postura',
        'category_slug' => 'coluna-postura',
        'read_time'     => '4 min de leitura',
        'image_url'     => 'https://images.pexels.com/photos/5480155/pexels-photo-5480155.jpeg?auto=compress&cs=tinysrgb&w=1200&h=700&fit=crop',
        'status'        => 'published',
        'content'       => '<p>A hérnia de disco é uma das condições mais comuns entre os pacientes que chegam à Rekintsu. Seja na região lombar ou cervical, ela provoca dor intensa, irradiação para os membros (ciatalgia ou braquialgia) e limitação funcional que impacta diretamente a qualidade de vida. A boa notícia é que, na maioria dos casos, o tratamento conservador — que inclui o Pilates Clínico — é altamente eficaz.</p>

<h2>O que é a hérnia de disco?</h2>
<p>O disco intervertebral é uma estrutura fibrocartilaginosa que fica entre as vértebras e funciona como um amortecedor. Quando o núcleo gelatinoso do disco extravasa para fora de sua posição normal, ele pode comprimir raízes nervosas, gerando dor, formigamento, fraqueza e irradiação para os membros.</p>

<h2>Por que o Pilates é eficaz para hérnias de disco?</h2>
<p>O Pilates Clínico atua em múltiplas frentes no tratamento da hérnia de disco:</p>

<h3>1. Fortalecimento da musculatura profunda da coluna</h3>
<p>Os músculos multífidos e o transverso abdominal formam um "colete muscular" que estabiliza a coluna e protege os discos intervertebrais. O Pilates é a terapia mais eficaz para ativá-los e fortalecê-los de forma isolada.</p>

<h3>2. Descompressão vertebral</h3>
<p>Exercícios de tração, alongamento axial e respiração profunda criam espaço entre as vértebras, aliviando a pressão sobre o disco herniado e sobre as raízes nervosas comprimidas.</p>

<h3>3. Reeducação postural</h3>
<p>Muitas hérnias são causadas ou agravadas por vícios posturais crônicos. O Pilates reequilibra a postura globalmente, eliminando as compensações que sobrecarregam a região comprometida.</p>

<h3>4. Controle da dor e do processo inflamatório</h3>
<p>O movimento adequado estimula a produção de líquido sinovial, melhora a nutrição discal e regula a resposta inflamatória, contribuindo para a redução da dor de forma natural.</p>

<h2>Pilates substitui a cirurgia?</h2>
<p>Em aproximadamente 80 a 90% dos casos de hérnia de disco, o tratamento conservador — que inclui fisioterapia, Pilates e controle postural — é suficiente para a resolução dos sintomas sem cirurgia. A cirurgia fica reservada para casos de comprometimento neurológico grave (perda de força, incontinência) ou quando o tratamento conservador não obtém resposta após meses de acompanhamento.</p>

<h2>Como é o atendimento na Rekintsu?</h2>
<p>O primeiro passo é a avaliação postural detalhada, com análise da imagem (RX ou ressonância) e identificação do nível e grau da hérnia. A partir daí, é elaborado um programa individual com progressão controlada, sempre respeitando os sintomas e a fase do processo inflamatório.</p>
<p>Se você tem diagnóstico de hérnia de disco e quer iniciar o tratamento com Pilates Clínico, <a href="https://wa.me/5541991191501">fale conosco</a> e agende sua avaliação.</p>',
    ],
];

$ins = $pdo->prepare(
    'INSERT IGNORE INTO posts (title, slug, excerpt, content, image_url, category, category_slug, read_time, status)
     VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)'
);

$inserted = 0;
$skipped  = 0;

foreach ($posts as $p) {
    $ins->execute([
        $p['title'], $p['slug'], $p['excerpt'], $p['content'],
        $p['image_url'], $p['category'], $p['category_slug'],
        $p['read_time'], $p['status']
    ]);
    if ($ins->rowCount() > 0) {
        $inserted++;
        echo "✅ Inserido: <strong>{$p['title']}</strong><br>";
    } else {
        $skipped++;
        echo "⏭️ Já existe: <strong>{$p['title']}</strong><br>";
    }
}

echo "<hr><strong>{$inserted} inseridos, {$skipped} ignorados.</strong>";
echo "<br><br><strong style='color:red'>Apague este arquivo: /cms/posts/seed-posts.php</strong>";
