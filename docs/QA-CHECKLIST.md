# QA-CHECKLIST.md

Lista corta para validar cualquier template antes de entrega.

## 1) Estructura

- Existe `templates/{template}/index.php`.
- Existe `templates/{template}/assets/less/main.less`.
- Existe `templates/{template}/assets/css/main.css`.
- Existe `templates/{template}/assets/js/main.js`.
- El orden de secciones es distinto a otros templates recientes.

## 2) Secciones y LESS

- Cada sección usada en `index.php` tiene su PHP en `templates/sections/{type}/{Variant}.php`.
- Cada sección usada en `index.php` tiene su LESS en `templates/assets/less/sections/{type}/{Variant}.less`.
- `main.less` solo importa secciones usadas por ese template.
- No hay imports de secciones no usadas.

## 3) Convenciones de implementación

- No hay estilos inline (`style="..."`) dentro de secciones.
- Se usan clases con prefijo `tb-`.
- El LESS está scopeado por sección o variante (ej. `.tb-faq--3`, `.tb-amenities`).
- No hay colores hardcodeados en secciones (usar variables).

## 4) Schemes y contraste

Validar visualmente en:

- `scheme-light`
- `scheme-soft`
- `scheme-dark`
- `scheme-color`

Confirmar:

- Texto principal legible.
- Texto secundario legible (`--section-muted`).
- Bordes de cards e inputs visibles.
- Iconos/checks visibles y alineados.
- Estados hover/focus visibles en botones, links y acordeones.

## 5) Contenido

- Español mexicano formal, trato de usted.
- Sin lorem ipsum ni textos vacíos.
- Sin anglicismos de UI/comercial en copy final.
- Imágenes desde `https://placehold.co/` con `alt` descriptivo.
- WhatsApp por helper `wa_link()` (si aplica).

## 6) JS

- `main.js` inicializa solo librerías usadas.
- No hay inicializaciones de librerías que no aparecen en el template.

## 7) Entrega

Reportar al finalizar:

- Familia visual usada.
- Diferencia principal frente a templates previos.
- Secciones usadas (PHP + LESS).
- Imports de `main.less`.
- Librerías JS inicializadas.
- Estado de validación de contraste por scheme.
