# CLAUDE.md — Rekintsu Pilates Clínico

Você está construindo o site da **Rekintsu Pilates Clínico**, uma clínica especializada em pilates clínico e reabilitação em Curitiba-PR. Este arquivo define as diretrizes do projeto.

---

## Sobre o Produto

**Rekintsu** é uma clínica de pilates clínico focada em atendimento exclusivo e individualizado. Reabilitação, pós-cirúrgico, gestação, idosos, liberação miofascial e terapias complementares.

**Público-alvo**: pessoas com necessidade de reabilitação, pós-cirúrgicos, gestantes, idosos e qualquer pessoa buscando pilates clínico especializado.
**Objetivo do site**: conversão — agendamento de avaliações via WhatsApp.

---

## Informações da Clínica

- **Profissional principal**: Hayla Gomes — Fisioterapeuta, 13+ anos de experiência
- **Especialidades**: Reabilitação, pós-cirúrgico, hérnias, gestação, idosos, liberação miofascial, massagem terapêutica, acupuntura
- **Endereço**: Av. Cândido de Abreu, 776 – Sala 404, Centro Cívico, Curitiba – PR 80530-000
- **WhatsApp**: (41) 99119-1501
- **Instagram**: @rekintsu_pilates
- **Horário**: Segunda a Sexta, 8h às 20h

---

## Identidade Visual

### Cores

| Token | Hex | Uso |
|---|---|---|
| `primary` | `#0D9B8E` | Botões principais, links, destaques |
| `primary-dark` | `#0A7E73` | Hover de botões |
| `accent` | `#5ECDC4` | Palavras em destaque nas headlines, ícones |
| `bg-dark` | `#071620` | Fundo de seções escuras |
| `bg-dark-2` | `#0D1E2B` | Fundo alternado escuro |
| `bg-light` | `#F8FAFC` | Fundo de seções claras |
| `bg-white` | `#FFFFFF` | Cards, navbar, footer |
| `text-primary` | `#0F172A` | Texto principal |
| `text-muted` | `#64748B` | Texto secundário |
| `border` | `#E2E8F0` | Bordas de cards |

### Gradiente Principal

```css
background: linear-gradient(135deg, #0D9B8E, #5ECDC4);
```

### Tipografia

- **Fonte**: Inter (via Google Fonts)
- **Headline grande**: `clamp(2.75rem, 5vw, 4.25rem)`, `font-weight: 800`
- **Headline médio**: `2rem–2.5rem`, `font-weight: 700`
- **Corpo**: `1rem–1.0625rem`, `line-height: 1.7`
- **Labels**: `0.75rem`, `font-weight: 600`, `letter-spacing: 0.1em`, uppercase, cor `primary`

### Logo

- Texto "rekintsu" em minúsculo + "pilates clínico" abaixo
- Cor branca em fundos escuros / teal em fundos claros

---

## Stack Tecnológica

- **Backend**: PHP 8+
- **Frontend**: HTML5, CSS3 (custom, sem framework), JavaScript (vanilla)
- **CMS**: PHP + MySQL (pasta `cms/`)
- **Banco de dados**: u492702861_rekintsu
- **Animações**: CSS transitions + IntersectionObserver (`main.js`)

---

## Estrutura de Arquivos

```
index.php               — Homepage principal
cms/                    — Painel administrativo
site/
  includes/
    head.php            — <head> da página
    head-page.php       — <head> para páginas internas
    header.php          — Navegação
    footer.php          — Rodapé + WhatsApp
  sections/             — Seções da homepage
    hero.php
    clients.php         — Strip de especialidades/condições
    services.php        — Cards de serviços
    about.php           — Sobre Hayla Gomes
    blog-preview.php    — Depoimentos
    contact.php         — Formulário de contato
    cta.php             — Chamada para ação final
  paginas/              — Páginas internas
    guideline.php       — Guia visual do projeto
  assets/
    css/
      variables.css     — Variáveis de cor e espaçamento
      reset.css         — Reset CSS
      global.css        — Estilos globais
      components.css    — Botões, cards, header, nav
      sections.css      — Estilos das seções
      responsive.css    — Media queries
    js/
      main.js           — JavaScript global
    img/                — Imagens e ícones
```

---

## Regras de Desenvolvimento

1. **Mobile-first** — responsivo em 375px / 768px / 1280px
2. **Sempre atualizar `guideline.php`** ao alterar o layout
3. **Deletar** páginas PHP, assets, imagens não utilizados
4. **Performance** — `loading="lazy"` em todas as imagens e comprimir imagens ao utilizar
5. **Acessibilidade** — tags semânticas, aria-labels
6. **Caminhos absolutos** — usar `/site/assets/css/` etc.
7. **GitHub**: https://github.com/gholive84/rekintsu.git
8. **Nova página**: ao criar qualquer página pública, adicionar entrada em `sitemap.xml` (URL limpa) e rota em `.htaccess`




---

## Tom de Voz

- Acolhedor, especializado, confiável
- Fala com o paciente, não com o médico
- Foco em resultado e bem-estar
- Headlines curtas com palavra-chave colorida (accent)
