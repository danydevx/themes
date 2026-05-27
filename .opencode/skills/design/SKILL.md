---
name: design
description: Use when creating or modifying PHP templates for terrazas, salones de eventos, jardines, quintas and event venues in Mexico. This skill provides the concrete HOW-TO for the section system: PHP section structure, LESS architecture, data contracts, scheme application, and template assembly.
---

## Rol

Eres un desarrollador que construye templates PHP modulares para venues de eventos en México.

**Antes de escribir código, lee los otros documentos del proyecto:**
- `AGENTS.md` — reglas generales del sistema
- `DESIGN-RULES.md` — familias visuales y variación obligatoria
- `CSS-ARCHITECTURE.md` — arquitectura LESS y reglas de estilos
- `TEMPLATE-SYSTEM.md` — estructura de templates y secciones

Este skill contiene instrucciones **concretas de implementación**, no reglas generales.

---

## Stack

- PHP (sin frameworks)
- Bootstrap 5 (CDN)
- Bootstrap Icons (CDN)
- LESS (para estilos)
- Swiper.js (CDN, solo donde se use)
- GLightbox (CDN, solo donde se use)
- AOS.js (CDN, solo donde se use)
- Imágenes: `https://placehold.co/`
- WhatsApp: `https://wa.me/523312345678`

---

## Estructura de archivos

```
templates/
├── assets/less/              ← LESS globales (scheme.less, fonts/, colors/, themes/, sections/)
├── sections/                 ← PHP reutilizable (hero/, about/, gallery/, ...)
│   ├── helpers.php
│   └── section-loader.php
└── {template-name}/          ← Template concreto
    ├── index.php
    └── assets/
        ├── less/main.less    ← Importa solo lo usado
        ├── css/main.css      ← CSS compilado
        └── js/main.js        ← Solo inicializaciones JS
```

---

## Contrato de sección PHP

Toda sección recibe `$data` y debe:

```php
// 1. Merge con defaults
$d = section_defaults($data);

// 2. CSS variables usadas (NO hardcodear colores):
//    --section-bg, --section-surface, --section-text, --section-muted, --section-border
//    --heading-color, --accent-color, --button-bg, --button-text, --icon-color

// 3. Wrapper con scheme
<section id="<?= esc($d['id']) ?>" class="tb-section <?= esc($d['scheme']) ?>" <?= anim_attrs($d) ?>>

// 4. Header estándar (cuando aplique)
<div class="tb-section__header">
  <span class="tb-section__label"><?= esc($d['label']) ?></span>
  <h2 class="tb-section__title"><?= esc($d['title']) ?></h2>
  <p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p>
</div>

// 5. Contenido específico
```

**Helpers disponibles:**
- `esc($str)` — HTML-safe output
- `placeholder($size, $bg, $fg, $text)` — imagen placehold.co
- `wa_link($msg, $phone)` — link WhatsApp (default: `523312345678`)
- `section_defaults($data)` — mergea defaults (scheme, id, label, title, subtitle, aos)
- `anim_attrs($d, $fallback)` — data-aos attributes
- `bg_style($d)` — background-image con overlay (para secciones con bg opcional)

---

## Schemes soportados por sección

Toda sección debe funcionar con estos esquemas (definidos globalmente en `layout.less`):

| Scheme | Uso típico |
|--------|-----------|
| `scheme-light` | Fondo blanco, texto oscuro |
| `scheme-soft` | Fondo crema/suave, texto oscuro |
| `scheme-dark` | Fondo oscuro, texto claro |
| `scheme-color` | Fondo con color primario, texto claro |
| `scheme-neutral` | Sin cambios (hereda del body) |

---

## Convención de clases

Prefijo obligatorio: `tb-`

```css
.tb-header        .tb-header__logo
.tb-hero          .tb-hero__title       .tb-hero__content
.tb-section       .tb-section__header   .tb-section__label  .tb-section__title
.tb-btn           .tb-btn--primary      .tb-btn--outline    .tb-btn--whatsapp
.tb-gallery       .tb-gallery__slide    .tb-gallery__thumbs
.tb-card          .tb-card__body        .tb-card__title     .tb-card__icon
.tb-form          .tb-form__group
.tb-footer        .tb-footer__social    .tb-footer__bottom
```

---

## Template assembly

En `index.php` del template:

```php
require_once __DIR__ . '/../sections/section-loader.php';

$sections = [
    ['type' => 'header',  'variant' => 'Header2',  'data' => [ ... ]],
    ['type' => 'hero',    'variant' => 'Hero8',    'data' => [ ... ]],
    ['type' => 'about',   'variant' => 'About5',   'data' => [ ... ]],
    // ...
];

// HTML5 boilerplate con CDNs
// <body class="theme-magnolia">
// <?php render_template($sections); ?>
```

---

## LESS por sección

Cada variante PHP debe tener su LESS. Si no existe, crearlo:

```
templates/sections/hero/Hero8.php
templates/assets/less/sections/hero/Hero8.less
```

El `main.less` del template importa solo lo usado:

```less
@import "../../../assets/less/scheme.less";
@import "../../../assets/less/fonts/scheme-fonts-editorial.less";
@import "../../../assets/less/colors/scheme-color-gold.less";
@import "../../../assets/less/themes/scheme-theme-luxury.less";
@import "../../../assets/less/sections/header/Header2.less";
@import "../../../assets/less/sections/hero/Hero8.less";
```

---

## JS initialization

`main.js` solo inicializa lo usado:

```js
// Swiper (solo si hay sliders)
new Swiper('.tb-gallery__main', { ... });
new Swiper('.tb-testimonials__swiper', { ... });

// GLightbox (solo si hay galería con lightbox)
GLightbox({ selector: '.tb-gallery__lightbox' });

// AOS
AOS.init({ duration: 700, once: true });
```

---

## Contenido

- Español mexicano formal, hablando de "usted"
- Sin lorem ipsum
- Negocios ficticios
- Imágenes con `alt` descriptivo
- WhatsApp con mensaje prellenado vía `wa_link()`
- Teléfono ficticio: `+52 33 1234 5678`

---

## Proceso al crear/modificar template

1. Leer `DESIGN-RULES.md`, elegir familia visual, crear ficha
2. Definir orden de secciones distinto a templates anteriores
3. Crear/reutilizar secciones PHP
4. Para cada sección NUEVA, crear su LESS correspondiente
5. Crear `main.less` importando solo lo usado
6. Compilar `main.css`
7. Crear `main.js` con inicializaciones necesarias
8. Validar: sin CSS no usado, sin colores hardcodeados, sin duplicados de schemes

### Reglas de implementación estrictas

- No usar estilos inline (`style="..."`) en secciones.
- Usar clases `tb-` para cualquier bloque no trivial.
- Scopear estilos por sección/variante (ej. `.tb-faq--3`, `.tb-amenities`).
- Mantener consistencia entre markup PHP y clases definidas en LESS.

### Checklist de contraste por schemes (obligatorio)

Antes de terminar, validar visualmente cada sección usada en:

- `scheme-light`
- `scheme-soft`
- `scheme-dark`
- `scheme-color`

Verificar mínimo:

- Texto principal legible sobre fondo de sección.
- Texto secundario (`--section-muted`) con contraste suficiente.
- Bordes de cards/inputs visibles.
- Iconos/checks/indicadores distinguibles.
- Estados hover/focus visibles en botones, links y accordions.

---

## Validación final

Responder con:
- Familia visual usada
- Diferencia principal del template
- Secciones usadas (PHP + LESS)
- Imports en `main.less`
- Librerías JS inicializadas
- Confirmación de contraste validado en `light/soft/dark/color`
- Confirmación de cero estilos inline en secciones
