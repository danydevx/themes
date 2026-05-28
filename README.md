# themes

Sistema de templates PHP modulares para terrazas, jardines y salones de eventos.

## Estructura rápida

- `templates/{template}/index.php` definición del template por secciones.
- `templates/{template}/assets/less/main.less` imports mínimos por template.
- `templates/{template}/assets/css/main.css` salida CSS final.
- `templates/{template}/assets/js/main.js` solo inicializaciones usadas.
- `templates/sections/{type}/{Variant}.php` secciones reutilizables.
- `templates/assets/less/sections/{type}/{Variant}.less` estilos por sección.

## Flujo de trabajo obligatorio

1. Revisar `AGENTS.md`, `DESIGN-RULES.md`, `CSS-ARCHITECTURE.md`, `TEMPLATE-SYSTEM.md`.
2. Elegir familia visual y definir ficha breve del template.
3. Armar `index.php` con orden de secciones distinto a templates existentes.
4. Importar en `main.less` solo secciones usadas.
5. Asegurar consistencia de schemes (`neutral/light/soft/dark/color`).
6. Generar/actualizar `main.css` y validar en móvil + desktop.

## Checklist de calidad

- Sin estilos inline en secciones (`style="..."`), salvo excepción mínima justificada.
- Clases con prefijo `tb-` y scope por variante/sección.
- Sin anglicismos en contenido final (español mexicano formal, trato de usted).
- Imágenes con `https://placehold.co/` y `alt` descriptivo.
- WhatsApp con `wa_link()`.

## QA rápida

- Use `docs/QA-CHECKLIST.md` antes de entregar cualquier template.

## Presets de tema

- Use `docs/THEME-PRESETS.md` para manejar varios schemes sin duplicar carpetas de template.
