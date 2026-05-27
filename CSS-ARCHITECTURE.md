# CSS-ARCHITECTURE.md
# Arquitectura LESS para sistema de templates PHP

## Objetivo

Cada template debe cargar únicamente el CSS que utiliza.

No crear bundles globales gigantes.
No usar un solo `components.less` con estilos de todas las secciones.
No duplicar estilos innecesarios por template.

---

## Regla crítica

Cada sección PHP debe tener su propio archivo LESS.

PHP section = LESS section

Ejemplo:

```txt
templates/sections/about/About5.php
templates/assets/less/sections/about/About5.less
```

Si se crea una nueva variante PHP, también se debe crear su LESS correspondiente.

---

## Estructura base recomendada

```txt
templates/
├── assets/
│   └── less/
│       ├── scheme.less
│       ├── fonts/
│       │   ├── scheme-fonts-modern.less
│       │   ├── scheme-fonts-classic.less
│       │   └── scheme-fonts-editorial.less
│       ├── colors/
│       │   ├── scheme-color-rose.less
│       │   ├── scheme-color-gold.less
│       │   ├── scheme-color-emerald.less
│       │   └── scheme-color-blue.less
│       ├── themes/
│       │   ├── scheme-theme-editorial.less
│       │   ├── scheme-theme-luxury.less
│       │   ├── scheme-theme-commercial.less
│       │   ├── scheme-theme-romantic.less
│       │   ├── scheme-theme-architectural.less
│       │   └── scheme-theme-family.less
│       └── sections/
│           ├── hero/
│           │   ├── Hero1.less
│           │   └── Hero2.less
│           ├── about/
│           │   ├── About1.less
│           │   └── About5.less
│           └── gallery/
│               ├── Gallery1.less
│               └── Gallery5.less
│
├── sections/
│   ├── section-loader.php
│   ├── hero/
│   │   ├── Hero1.php
│   │   └── Hero2.php
│   ├── about/
│   │   ├── About1.php
│   │   └── About5.php
│   └── gallery/
│       ├── Gallery1.php
│       └── Gallery5.php
│
└── template-name/
    ├── index.php
    └── assets/
        ├── less/
        │   └── main.less
        ├── css/
        │   └── main.css
        └── js/
            └── main.js
```

---

## Main LESS por template

Cada template debe tener su propio:

```txt
templates/{template-name}/assets/less/main.less
```

Este archivo importa únicamente lo que usa el template.

Ejemplo:

```less
@import "../../../assets/less/scheme.less";

@import "../../../assets/less/fonts/scheme-fonts-editorial.less";
@import "../../../assets/less/colors/scheme-color-gold.less";
@import "../../../assets/less/themes/scheme-theme-editorial.less";

@import "../../../assets/less/sections/header/Header2.less";
@import "../../../assets/less/sections/hero/Hero8.less";
@import "../../../assets/less/sections/about/About5.less";
@import "../../../assets/less/sections/event-types/EventTypes4.less";
@import "../../../assets/less/sections/gallery/Gallery5.less";
@import "../../../assets/less/sections/testimonials/Testimonials6.less";
@import "../../../assets/less/sections/cta/CTA5.less";
@import "../../../assets/less/sections/contact/Contact3.less";
@import "../../../assets/less/sections/footer/Footer2.less";
```

---

## Prohibido

No hacer esto:

```less
@import "components.less";
```

si `components.less` contiene estilos de secciones que el template no usa.

También está prohibido:

- Agregar CSS de una sección en `scheme.less`.
- Agregar CSS de una sección en `layout.less`.
- Agregar CSS de una sección en un archivo global.
- Crear estilos inline grandes dentro del PHP.
- Usar colores hardcodeados dentro de secciones.
- Usar nombres genéricos como `.card`, `.hero`, `.gallery`.

---

## Variables obligatorias

Toda sección debe usar variables.

Variables base:

```css
--tb-primary
--tb-primary-rgb
--tb-secondary
--tb-accent
--tb-bg
--tb-surface
--tb-text
--tb-muted
--tb-border
--tb-heading-font
--tb-body-font
--tb-radius-sm
--tb-radius-md
--tb-radius-lg
--tb-shadow-sm
--tb-shadow-md
```

Variables por sección:

```css
--section-bg
--section-surface
--section-text
--section-muted
--section-border
--heading-color
--accent-color
--button-bg
--button-text
--icon-color
```

---

## Schemes obligatorios por sección

Cada sección debe funcionar con:

```css
.scheme-neutral
.scheme-light
.scheme-dark
.scheme-color
.scheme-soft
```

Cada scheme debe definir:

```css
--section-bg
--section-surface
--section-text
--section-muted
--section-border
--heading-color
--accent-color
--button-bg
--button-text
--icon-color
```

---

## Naming obligatorio

Usar prefijo `tb-`.

Ejemplos válidos:

```css
.tb-hero
.tb-hero__content
.tb-hero__title
.tb-about
.tb-about__grid
.tb-gallery
.tb-gallery__item
.tb-card
.tb-card__icon
```

Evitar:

```css
.hero
.card
.gallery
.section
.title
```

---

## Estilos inline

Evitar estilos inline.

Incorrecto:

```php
<div style="background:var(--section-surface); border:1px solid var(--section-border)">
```

Correcto:

```php
<div class="tb-amenities__card">
```

```less
.tb-amenities__card {
  background: var(--section-surface);
  border: 1px solid var(--section-border);
}
```

---

## Compilación

El CSS final debe existir siempre en:

```txt
templates/{template-name}/assets/css/main.css
```

Aunque el sistema use LESS, entregar también el CSS compilado o escrito manualmente.

---

## Validación final CSS

Antes de terminar, validar:

- El `main.less` solo importa secciones usadas.
- Cada sección PHP usada tiene LESS correspondiente.
- No hay estilos de secciones no usadas.
- No hay CSS global innecesario.
- No hay colores hardcodeados dentro de secciones.
- No hay estilos inline grandes.
