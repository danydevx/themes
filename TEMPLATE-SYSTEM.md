# TEMPLATE-SYSTEM.md
# Sistema PHP de templates por secciones

## Objetivo

Crear landing pages en PHP usando secciones reutilizables, variantes visuales y assets propios por template.

El sistema debe permitir generar muchos templates distintos sin duplicar lógica ni cargar CSS innecesario.

---

## Stack estricto

Usar únicamente:

- PHP sencillo.
- HTML.
- Bootstrap 5.
- Bootstrap Icons.
- LESS.
- Swiper.js cuando una sección lo requiera.
- GLightbox cuando una galería lo requiera.
- Imágenes de `https://placehold.co/` mientras no existan imágenes reales.

No usar:

- React.
- Vue.
- Angular.
- Tailwind.
- Frameworks extra.
- Librerías no solicitadas.

---

## Estructura de templates

Cada template vive en:

```txt
templates/{template-name}/index.php
```

Cada template tiene assets propios de salida:

```txt
templates/{template-name}/assets/less/main.less
templates/{template-name}/assets/css/main.css
templates/{template-name}/assets/js/main.js
```

---

## Secciones reutilizables

Las secciones viven en:

```txt
templates/sections/{type}/{Variant}.php
```

Ejemplo:

```txt
templates/sections/hero/Hero8.php
templates/sections/about/About5.php
templates/sections/gallery/Gallery5.php
```

---

## LESS por sección

Cada sección PHP debe tener su LESS correspondiente:

```txt
templates/assets/less/sections/{type}/{Variant}.less
```

Ejemplo:

```txt
templates/assets/less/sections/hero/Hero8.less
templates/assets/less/sections/about/About5.less
templates/assets/less/sections/gallery/Gallery5.less
```

---

## Contrato de secciones

Cada sección recibe un arreglo `$data`.

Cada sección debe:

- Definir defaults seguros.
- No romper si faltan campos.
- Usar `esc()` para imprimir texto.
- Usar `section_defaults($data)` para datos comunes.
- Usar `placeholder()` para imágenes temporales.
- Usar `wa_link()` para enlaces de WhatsApp.
- Incluir su propio wrapper `<section>` cuando aplique.
- Usar clases con prefijo `tb-`.
- Soportar schemes.

---

## Datos comunes recomendados

Cada sección debería aceptar, cuando aplique:

```php
'id'
'scheme'
'label'
'title'
'subtitle'
'eyebrow'
'overline'
'image'
'image_alt'
'items'
'cta'
'disabled'
```

---

## Ejemplo de definición de template

```php
$sections = [
    ['type' => 'header', 'variant' => 'Header2', 'data' => [
        'brand' => 'Terraza Magnolia',
        'links' => [
            ['href' => '#inicio', 'label' => 'Inicio'],
            ['href' => '#eventos', 'label' => 'Eventos'],
            ['href' => '#galeria', 'label' => 'Galería'],
            ['href' => '#contacto', 'label' => 'Contacto'],
        ],
    ]],

    ['type' => 'hero', 'variant' => 'Hero8', 'data' => [
        'id' => 'inicio',
        'scheme' => 'scheme-dark',
        'title' => 'Un jardín diseñado para celebrar momentos inolvidables',
        'subtitle' => 'Eventos privados, bodas, XV años y reuniones familiares en Zapopan.',
    ]],
];
```

---

## Render

El `index.php` debe cargar:

```php
require_once __DIR__ . '/../sections/section-loader.php';
```

Y renderizar:

```php
<?php render_template($sections); ?>
```

---

## Secciones desactivadas

Una sección puede desactivarse con:

```php
'disabled' => true
```

El loader debe omitirla.

---

## Reglas de contenido

Todo el contenido debe estar en español mexicano formal, hablando de “usted”.

No usar lorem ipsum.
No usar textos genéricos vacíos.
No inventar datos engañosos como premios, certificaciones o ubicaciones reales sin aclaración.
Usar negocios ficticios cuando se creen ejemplos.

---

## Imágenes

Mientras no existan imágenes reales, usar siempre:

```txt
https://placehold.co/
```

Todas las imágenes deben tener `alt` descriptivo.

---

## WhatsApp

Usar helper:

```php
wa_link('Hola, quiero consultar disponibilidad para mi evento.')
```

No escribir enlaces manuales repetidos si existe helper.

---

## JS

El archivo:

```txt
templates/{template-name}/assets/js/main.js
```

Debe inicializar únicamente lo que el template usa:

- Swiper si hay sliders.
- GLightbox si hay galería con lightbox.
- Header scroll si aplica.
- AOS solo si el template lo incluye.

No inicializar librerías que no se usan.

---

## Regla para crear nuevas variantes

Para crear una nueva variante:

1. Crear PHP:

```txt
templates/sections/{type}/{Variant}.php
```

2. Crear LESS:

```txt
templates/assets/less/sections/{type}/{Variant}.less
```

3. Importar LESS en:

```txt
templates/{template-name}/assets/less/main.less
```

4. Usar la variante en `$sections`.

---

## Validación final obligatoria

Antes de terminar, confirmar:

- El template tiene `index.php`.
- El template tiene `assets/less/main.less`.
- El template tiene `assets/css/main.css`.
- El template tiene `assets/js/main.js`.
- Cada sección usada tiene PHP.
- Cada sección usada tiene LESS.
- El `main.less` solo importa secciones usadas.
- El contenido está en español mexicano formal.
- Las imágenes usan `placehold.co`.
- No hay CSS global innecesario.
