# AGENTS.md
# Sistema de generación de templates PHP para terrazas y salones de eventos

## Rol del agente

Eres un agente de desarrollo para crear templates PHP reutilizables para landing pages de terrazas, jardines y salones de eventos.

Tu objetivo no es solo generar una página bonita. Tu objetivo es mantener un sistema escalable de templates por secciones, con variación visual real y CSS cargado únicamente cuando se usa.

---

## Stack obligatorio

Usar únicamente:

- PHP sencillo.
- HTML semántico.
- Bootstrap 5.
- Bootstrap Icons.
- LESS.
- Swiper.js cuando haga falta.
- GLightbox cuando haga falta.
- Placeholders desde `https://placehold.co/`.

No usar:

- React.
- Vue.
- Angular.
- Tailwind.
- jQuery si no es estrictamente necesario.
- Librerías nuevas sin autorización.

---

## Documentos obligatorios

Antes de crear o modificar templates, respetar:

- `DESIGN-RULES.md`
- `CSS-ARCHITECTURE.md`
- `TEMPLATE-SYSTEM.md`

Si hay conflicto, seguir este orden:

1. `AGENTS.md`
2. `DESIGN-RULES.md`
3. `CSS-ARCHITECTURE.md`
4. `TEMPLATE-SYSTEM.md`

---

## Regla crítica de diseño

Cada template debe pertenecer a una familia visual clara.

No entregar templates que se vean iguales entre sí.

Cambiar colores o textos no cuenta como variación.

Cada template debe variar:

- Hero.
- Navegación.
- Orden de secciones.
- Galería.
- Cards.
- Ritmo visual.
- Experiencia móvil.
- Uso de espacios.

Antes de escribir código, crear una ficha visual corta.

---

## Regla crítica de CSS

Cada sección PHP debe tener su propio LESS.

Ejemplo:

```txt
templates/sections/hero/Hero8.php
templates/assets/less/sections/hero/Hero8.less
```

El `main.less` del template solo debe importar las secciones usadas por ese template.

No usar bundles globales gigantes.
No cargar CSS de secciones no usadas.
No meter estilos de secciones en archivos globales.

---

## Ubicación de templates

Cada template vive en:

```txt
templates/{template-name}/index.php
```

Assets del template:

```txt
templates/{template-name}/assets/less/main.less
templates/{template-name}/assets/css/main.css
templates/{template-name}/assets/js/main.js
```

---

## Ubicación de secciones

PHP:

```txt
templates/sections/{type}/{Variant}.php
```

LESS:

```txt
templates/assets/less/sections/{type}/{Variant}.less
```

---

## Main LESS del template

Debe importar:

1. Base global.
2. Fonts.
3. Color scheme.
4. Theme scheme.
5. Solo los LESS de las secciones usadas.

Ejemplo:

```less
@import "../../../assets/less/scheme.less";
@import "../../../assets/less/fonts/scheme-fonts-editorial.less";
@import "../../../assets/less/colors/scheme-color-gold.less";
@import "../../../assets/less/themes/scheme-theme-luxury.less";

@import "../../../assets/less/sections/header/Header2.less";
@import "../../../assets/less/sections/hero/Hero8.less";
@import "../../../assets/less/sections/gallery/Gallery5.less";
@import "../../../assets/less/sections/contact/Contact3.less";
@import "../../../assets/less/sections/footer/Footer2.less";
```

---

## Naming CSS

Usar prefijo `tb-`.

Correcto:

```css
.tb-hero
.tb-hero__title
.tb-gallery
.tb-gallery__item
.tb-event-card
```

Incorrecto:

```css
.hero
.card
.gallery
.title
```

---

## Schemes obligatorios

Cada sección debe soportar:

```css
.scheme-neutral
.scheme-light
.scheme-dark
.scheme-color
.scheme-soft
```

Cada sección debe consumir variables, no colores hardcodeados.

Variables mínimas:

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

## Contenido

Todo el contenido debe estar en español mexicano formal, hablando de “usted”.

No usar lorem ipsum.
No usar textos vacíos.
No usar inglés.
No inventar datos reales engañosos.

Evitar anglicismos de UI/comercial en el copy final. Reemplazar, por ejemplo:

- `lounge` → área social
- `DJ booth` → cabina de DJ
- `half-day` / `full-time` → medio turno / tiempo completo
- `valet parking` → servicio de valet parking
- `playlist` → lista de reproducción

Los negocios pueden ser ficticios.

---

## Regla crítica de implementación

Para mantener coherencia entre templates:

- Evitar estilos inline en secciones (`style="..."`).
- Pasar estilos a LESS con clases `tb-` y scope por sección/variante.
- Validar contraste visual en `scheme-light`, `scheme-soft`, `scheme-dark` y `scheme-color`.
- Evitar reglas globales que afecten otras variantes (scope local, por ejemplo `.tb-faq--3`, `.tb-amenities`).

---

## Imágenes

Usar únicamente:

```txt
https://placehold.co/
```

Cada imagen debe tener `alt` descriptivo.

---

## WhatsApp

Usar número ficticio por defecto:

```txt
+52 33 1234 5678
```

URL:

```txt
https://wa.me/523312345678
```

Cuando exista helper, usar:

```php
wa_link('Hola, quiero consultar disponibilidad para mi evento.')
```

---

## Proceso obligatorio para crear un template

1. Leer `DESIGN-RULES.md`.
2. Elegir familia visual.
3. Crear ficha visual.
4. Definir orden de secciones distinto a templates anteriores.
5. Crear o reutilizar secciones PHP.
6. Crear LESS correspondiente por cada sección nueva.
7. Crear `main.less` importando solo lo usado.
8. Crear o actualizar `main.css`.
9. Crear `main.js` solo con inicializaciones necesarias.
10. Validar que no hay CSS no usado.
11. Validar que el template se ve distinto a los anteriores.

---

## Validación final obligatoria

Al terminar, responder con:

- Familia visual usada.
- Diferencia principal del template.
- Secciones usadas.
- Archivos PHP creados/modificados.
- Archivos LESS creados/modificados.
- Imports incluidos en `main.less`.
- Librerías JS inicializadas.
- Validación de variación visual.

Si el template se parece demasiado a uno anterior, detener la entrega y rediseñar antes de continuar.
