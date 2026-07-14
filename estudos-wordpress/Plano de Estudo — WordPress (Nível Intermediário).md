**Objetivo:** dominar o uso do painel e do editor visual antes de ir para código.  
## parte 1

- [ ] Painel admin: posts vs páginas, categorias, tags
- [ ] Menus e widgets
- [ ] Customizer (identidade visual, cores, header, footer)
- [ ] Editor de blocos (Gutenberg) a fundo: blocos nativos, padrões de bloco (patterns), grupos e colunas
- [ ] Diferença entre tema clássico e tema em bloco (Full Site Editing)
- [ ] Gerenciamento de mídia e otimização de imagens

**Prática sugerida:** montar um site institucional simples (página inicial, sobre, contato) só usando blocos nativos, sem plugin de page builder.

---
## parte 2
**Objetivo:** entender a estrutura de um tema por dentro.

- [ ] Anatomia de um tema clássico: `style.css`, `functions.php`, `header.php`, `footer.php`, `index.php`, `single.php`, `page.php`
- [ ] Template hierarchy (como o WP decide qual arquivo usar para cada página)
- [ ] Child themes: criar um child theme do zero
- [ ] Introdução a temas em bloco (`theme.json`, templates em HTML) 

**Prática sugerida:** criar um child theme simples de um tema padrão (ex: Twenty Twenty-Four) e customizar CSS/PHP.

---
## parte 3
**Objetivo:** usar sua base de backend a favor, indo além do "clicar em plugin".

- [ ] Hooks: **actions** (`add_action`) e **filters** (`add_filter`) — entender a diferença
- [ ] `functions.php`: adicionar funcionalidades sem depender de plugin
- [ ] Custom Post Types (CPT) — criar tipos de conteúdo próprios (ex: "Depoimentos", "Portfólio")
- [ ] Custom Fields com ACF (Advanced Custom Fields) — praticamente padrão de mercado
- [ ] Estrutura do banco de dados: tabelas `wp_posts`, `wp_postmeta`, `wp_options`, `wp_terms`

**Prática sugerida:** criar um CPT "Projetos" com campos customizados via ACF (imagem, descrição, link) e exibir isso numa página.

---
## parte 4

**Objetivo:** conhecer o ecossistema que todo cliente vai pedir ou precisar.
- [ ] SEO: Yoast SEO ou RankMath
- [ ] Cache: WP Rocket ou W3 Total Cache
- [ ] Segurança: Wordfence, hardening básico (esconder versão do WP, limitar tentativas de login)
- [ ] Backup: UpdraftPlus
- [ ] Page builder (opcional, mas muito pedido por cliente): Elementor

**Prática sugerida:** pegar o site que você já criou e "profissionalizar" com SEO configurado, cache ativo e backup agendado.

---
## parte 5
  

**Objetivo:** conseguir montar uma loja funcional do zero.

- [ ] Instalação e configuração inicial do WooCommerce
- [ ] Produtos simples vs produtos variáveis (cor, tamanho, etc.)
- [ ] Configuração de frete (Correios, transportadoras)
- [ ] Configuração de pagamento (Mercado Pago é o mais usado no Brasil)
- [ ] Gestão de pedidos e estoque
- [ ] Cupons e promoções

**Prática sugerida:** montar uma loja fictícia completa, do cadastro de produto até o checkout funcionando em ambiente de teste (sandbox de pagamento).

---
## parte 6
  
- [ ] Otimização de banco de dados (limpeza de revisões, transients)
- [ ] CDN básico
- [ ] Hardening avançado (2FA para login admin, `wp-config.php` mais seguro)
- [ ] Monitoramento de uptime e erros

---
## apêndice

## Referências (sem enrolação, direto ao ponto)

- **developer.wordpress.org** — documentação oficial de hooks, funções e template hierarchy
- **Codex de Hooks** — referência técnica de actions e filters
- **ACF Documentation** (advancedcustomfields.com) — referência oficial do plugin
- **WooCommerce Docs** (woocommerce.com/documentation) — referência oficial
---