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

**Ámbito de este skill (importante):**
- Estas reglas aplican al proyecto actual en `themes`.
- Guardar y mantener estas reglas en `themes/.opencode/skills/` (no en skills globales del sistema).

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
| `scheme-linear` | Fondo degradado lineal de la gama del preset |
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

### Presets de color sin duplicar templates (obligatorio)

Si un template comparte exactamente las mismas secciones/estructura y solo cambian colores o branding:

- Mantener una sola carpeta de template base.
- Definir presets en `index.php` (ej. `base`, `ocean`, `dark`) con whitelist.
- Cambiar por preset: `css_file`, `body_class`, `brand`, `email`, mensajes WA.
- Generar salida CSS por preset (build-time), por ejemplo:
  - `assets/css/main-base.css`
  - `assets/css/main-ocean.css`

No crear carpeta nueva por cada variación de color.

### Schemes por sección (header, hero, footer)

Header, Hero y Footer deben aceptar `scheme` igual que las demás secciones.

Ejemplo en `$sections`:

```php
['type' => 'header', 'variant' => 'Header3', 'data' => [
  'scheme' => 'scheme-light',
  // ...
]],
['type' => 'hero', 'variant' => 'Hero10', 'data' => [
  'scheme' => 'scheme-color',
  // ...
]],
['type' => 'footer', 'variant' => 'Footer7', 'data' => [
  'scheme' => 'scheme-dark',
  // ...
]],
```

Esto permite combinaciones como: header light + hero color + footer dark.

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

## Reglas para crear nuevas secciones (obligatorio)

Cuando se cree una variante nueva (`{type}/{Variant}`), seguir este checklist:

1. Crear PHP de sección en:
   - `templates/sections/{type}/{Variant}.php`
2. Crear LESS de sección en:
   - `templates/assets/less/sections/{type}/{Variant}.less`
3. Usar contrato estándar:
   - `section_defaults($data)`
   - wrapper con `tb-section` + `scheme`
   - clases con prefijo `tb-`
4. Evitar estilos inline no triviales en PHP (mover a LESS).
5. Usar scope por variante para evitar colisiones:
   - ejemplo `.tb-faq--5__title`, `.tb-cta--7__step`
6. Importar el LESS nuevo en los entrypoints del template activo:
   - `main-oblatos.less`
   - `main-ocean.less`
7. Agregar la variante nueva a su página laboratorio correspondiente en el mismo cambio:
   - hero → `heroes.php`
   - availability → `availability.php`
   - cta → `cta.php`
   - faq → `faq.php`
   - (y equivalentes por tipo)
8. Probar al menos en schemes:
   - `scheme-light`, `scheme-soft`, `scheme-dark`, `scheme-color`
   - incluir `scheme-linear` cuando aplique
9. Recompilar CSS de ambos presets:
   - `assets/css/main-oblatos.css`
   - `assets/css/main-ocean.css`
10. Verificar contraste de:
   - `tb-section__label`, `tb-section__title`, `tb-section__subtitle`
   - iconos (`--icon-color`, `--icon-strong`)

## Reglas para corregir secciones existentes (obligatorio)

Cuando se depure una variante ya existente, aplicar este flujo:

1. Trabajar una variante por vez (no mezclar múltiples variantes en el mismo bloque).
2. Revisar primero su PHP y su LESS correspondiente.
3. Corregir marcado roto o atributos mal colocados (ej. `anim_attrs` dentro de `class`).
4. Estandarizar datos a `$d = section_defaults($data)` y usar `$d` en toda la sección.
5. Eliminar estilos inline no triviales y moverlos a LESS.
6. Mantener scope por variante (`.tb-{type}--{n}__*`) para evitar colisiones.
7. Reforzar contraste por scheme (`dark`, `color`, `linear`) desde tokens antes de hardcodear.
8. Si se detecta problema transversal (label/subtitle/iconos), ajustar en capas globales:
   - `scheme.less` (base)
   - `oblatos-color-presets.less` (tokens por preset/scheme)
   - `oblatos-theme.less` / `oblatos-ocean-theme.less` (overrides de template)
9. Agregar/actualizar la variante en su página laboratorio para validación visual inmediata.
10. Recompilar ambos presets y validar:
   - `assets/css/main-oblatos.css`
   - `assets/css/main-ocean.css`
11. Reportar al cierre:
   - variante corregida
   - archivos tocados (PHP/LESS)
   - contraste pendiente por scheme
   - siguiente variante a depurar

### Flujo de depuración por laboratorios (obligatorio)

Cuando se estén corrigiendo variantes existentes (no creando template nuevo), usar páginas laboratorio dentro del template base activo (ej. `templates/terraza-oblatos/`):

- `about.php` para variantes About
- `amenities.php` para variantes Amenities
- `heroes.php` para variantes Hero
- `availability.php` para variantes Availability
- `cta.php` para variantes CTA
- `faq.php` para variantes FAQ
- `gallery.php` para variantes Gallery
- `services.php` para variantes Services
- `packages.php` para variantes Packages

Reglas del flujo:

1. Renderizar varias variantes en una sola página para comparar contraste, ritmo y spacing.
2. Importar en `main-oblatos.less` y `main-ocean.less` **solo** los LESS necesarios para esa depuración.
3. Depurar **una variante por vez** (ej. `Hero2` y luego `Hero3`), eliminando estilos inline y moviendo a LESS.
4. Usar scope de variante (`.tb-hero--2`, `.tb-cta--4`, `.tb-availability--3`) para evitar colisiones.
5. Validar visualmente schemes `scheme-light`, `scheme-soft`, `scheme-dark`, `scheme-color`.
6. Recompilar CSS del preset después de cada bloque:
   - `assets/css/main-oblatos.css`
   - `assets/css/main-ocean.css`
7. Si se crea una variante nueva, agregarla en su página laboratorio correspondiente en el mismo cambio (ej. CTA nueva → `cta.php`).

### Lecciones aplicadas en esta base (obligatorio)

Al depurar secciones existentes en `terraza-oblatos`, respetar estos puntos:

1. Corregir siempre atributos mal formados en el wrapper:
   - `class="... <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?>`
   - Nunca inyectar `anim_attrs($d)` dentro del string de `class`.
2. Mover estilos inline no triviales a LESS por variante (`tb-{type}--{n}__*`).
3. Estandarizar acceso de datos a `$d` (`section_defaults`) en toda la sección.
4. Evitar colisiones de variante:
   - no usar scopes genéricos (`.tb-hero`, `.tb-gallery`) cuando se depura una variante;
   - usar scope explícito (`.tb-hero--7`, `.tb-gallery--5`, `.tb-services--2`).
5. Para schemes intensos (`color`, `dark`, `linear`), priorizar tokens:
   - `--section-text`, `--section-muted`, `--icon-color`, `--icon-strong`, `--btn-primary-*`.
6. Si el problema es transversal (labels/subtitles/iconos), ajustar en capas globales:
   - `templates/assets/less/scheme.less`
   - `templates/terraza-oblatos/assets/less/oblatos-color-presets.less`
   - `templates/terraza-oblatos/assets/less/oblatos-theme.less`
   - `templates/terraza-oblatos/assets/less/oblatos-ocean-theme.less`

### Regla de `scheme-linear`

- `scheme-linear` debe estar definido para ambos presets (`oblatos` y `ocean`) en color-presets.
- Debe usar dos colores de la misma gama del preset en `linear-gradient(...)`.
- Recordatorio técnico: el fondo base de sección debe usar `background`, no `background-color`, para que el degradado se renderice.

### Regla de contraste para iconos (dark/color/linear)

En este proyecto, para `scheme-dark`, `scheme-color` y `scheme-linear`:

- Definir explícitamente `--icon-color` y `--icon-strong` en presets del template.
- Priorizar `--icon-strong` en componentes de icono importante (badges, pasos, bullets, icon buttons).
- Evitar valores de icono con baja luminancia sobre fondos oscuros o degradados.
- Si una sección usa iconos y pierde contraste, ajustar primero tokens del scheme antes de hardcodear color local.

---

## Continuidad para mañana (handoff)

Al terminar jornada, dejar siempre instrucciones explícitas de continuación en la respuesta final y en el skill-run de trabajo:

- Qué variante se terminó.
- Qué variante sigue exactamente (siguiente archivo PHP + LESS).
- Qué pendientes de contraste quedan por scheme.
- Qué página laboratorio usar para retomar.

Formato recomendado de cierre diario:

1. **Último bloque completado** (ej. `CTA1–CTA6 depurados`).
2. **Primer paso mañana** (ej. `Depurar Availability2.php y Availability2.less`).
3. **Comando de compilación al retomar** (`lessc ...main-oblatos.less ...main-oblatos.css` y ocean).

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

## Temas oscuros (dark theme)

Para crear un template con variante oscura, sigue estas reglas:

### 1. Body class

Usa una clase `theme-{nombre}-dark` en el body:

```php
<body class="theme-alheli-dark">
```

### 2. Variables CSS del tema oscuro

Crea un archivo de variables del tema oscuro (ej. `alhelí-dark-vars.less`):

```less
:root {
  --tb-primary: #d4a897;
  --tb-primary-rgb: 212, 168, 151;
  --tb-secondary: #3d2a2e;
  --tb-secondary-rgb: 61, 42, 46;
  --tb-accent: #e8c4b8;
  --tb-accent-rgb: 232, 196, 184;
  --tb-bg: #1a1215;        // fondo principal oscuro
  --tb-surface: #2a1f22;   // superficie elevated
  --tb-text: #f5f0ea;      // texto principal claro
  --tb-muted: #b8a8a0;     // texto secundario
  --tb-border: rgba(212, 168, 151, 0.18);
}
```

### 3. CSS del tema oscuro

El `main.css` compilado del tema oscuro debe incluir **overrides de scheme al INICIO** del archivo, antes de cualquier otra definición. Esto es crítico porque `scheme.less` define colores hardcodeados en las clases `.scheme-dark`, `.scheme-color`, etc.

```css
/* ═══ OVERRIDES DE SCHEME — al inicio ═══ */
.scheme-dark {
  --section-bg: #1a1215;
  --section-surface: #2a1f22;
  --section-text: #f5f0ea;
  --section-muted: #b8a8a0;
  --section-border: rgba(212, 168, 151, 0.18);
  --heading-color: #f5f0ea;
  --accent-color: #e8c4b8;
  --button-bg: #d4a897;
  --button-text: #1a1215;
  --icon-color: #d4a897;
  color: #f5f0ea;
}
.scheme-color {
  --section-bg: #d4a897;
  --section-surface: #3d2a2e;
  --section-text: #1a1215;
  --section-muted: rgba(26, 18, 21, 0.72);
  --section-border: rgba(26, 18, 21, 0.22);
  --heading-color: #1a1215;
  --accent-color: #3d2a2e;
  --button-bg: #3d2a2e;
  --button-text: #f5f0ea;
  --icon-color: #1a1215;
  color: #1a1215;
}
.scheme-neutral { --section-bg: #1a1215; --section-surface: #2a1f22; --section-text: #f5f0ea; --section-muted: #b8a8a0; --section-border: rgba(212, 168, 151, 0.18); --heading-color: #f5f0ea; --accent-color: #e8c4b8; --button-bg: #d4a897; --button-text: #1a1215; --icon-color: #d4a897; }
.scheme-light { --section-bg: #1a1215; --section-surface: #2a1f22; --section-text: #f5f0ea; --section-muted: #b8a8a0; --section-border: rgba(212, 168, 151, 0.18); --heading-color: #f5f0ea; --accent-color: #e8c4b8; --button-bg: #d4a897; --button-text: #1a1215; --icon-color: #d4a897; }
.scheme-soft { --section-bg: #2a1f22; --section-surface: #1a1215; --section-text: #f5f0ea; --section-muted: #b8a8a0; --section-border: rgba(212, 168, 151, 0.18); --heading-color: #f5f0ea; --accent-color: #e8c4b8; --button-bg: #d4a897; --button-text: #1a1215; --icon-color: #d4a897; }

/* Luego :root con las variables del tema oscuro */
:root {
  --tb-primary: #d4a897;
  --tb-primary-rgb: 212, 168, 151;
  --tb-secondary: #3d2a2e;
  ...
}
```

### 4. Header con soporte dark

Header2 soporta un parámetro `dark` que cambia su clase CSS:

```php
['type' => 'header', 'variant' => 'Header2', 'data' => [
    'brand' => 'Terraza Alhelí',
    'icon' => 'bi-flower1',
    'dark' => true,  // usa .tb-header--dark
    'show_wa' => true,
    'wa_link' => wa_link('...'),
    'links' => [...],
]],
```

El PHP usa:
```php
$dark = !empty($data['dark']);
<header class="tb-header <?= $dark ? 'tb-header--dark' : 'tb-header--transparent' ?>">
```

El LESS define `.tb-header--dark` con colores para tema oscuro (fondo `#1a1215` con 97% opacidad, texto crema `#f5f0ea`, hover rosa `#d4a897`).

### 5. Footer con soporte dark

Footer6 soporta un parámetro `dark`:

```php
['type' => 'footer', 'variant' => 'Footer6', 'data' => [
    'logo' => 'Terraza Alhelí',
    'dark' => true,  // cambia estilos inline
    'desc' => '...',
    'social' => [...],
]],
```

El PHP cambia los estilos inline de:
- `background`: `var(--tb-bg)` en vez de `var(--tb-text)`
- `color`: `var(--tb-muted)` en vez de `rgba(255,255,255,0.7)`
- Borders y iconos se ajustan con opacity reducida

### 6. LESS del tema

El `main.less` de un tema oscuro debe importar las variables del tema oscuro **ANTES** de `scheme.less`:

```less
/* 1. Variables del tema oscuro PRIMERO */
@import "alhelí-dark-vars.less";

/* 2. Base global — scheme.less consume las vars redefinidas */
@import "../../../assets/less/scheme.less";

/* 3. Tema específico */
@import "alhelí-dark-theme.less";
```

El archivo de tema (`.less`) debe incluir overrides de `.scheme-dark` y `.scheme-color` para que las secciones con `scheme-dark` usen las variables CSS correctas.

### 7. Validación de contraste para dark

Verificar especialmente en tema oscuro:
- Texto `#f5f0ea` sobre fondo `#1a1215` (ratio ~14:1) ✓
- Texto `#b8a8a0` sobre fondo `#1a1215` (ratio ~7:1) ✓
- Botón primary `#d4a897` con texto `#1a1215` (ratio ~7:1) ✓
- Links en footer `rgba(245,240,234,0.7)` sobre `#1a1215` (ratio ~5:1) ✓ mínimo

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
- Centralizar colores por presets (un archivo de color por template base) y evitar duplicar tokens en varios LESS.

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
