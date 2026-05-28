<?php
/**
 * Terraza Oblatos — Gallery Lab
 * Pagina de depuracion para variantes de galeria.
 */
require_once __DIR__ . '/../sections/section-loader.php';

$scheme = $_GET['scheme'] ?? 'oblatos';
$allowedSchemes = ['oblatos', 'ocean'];
if (!in_array($scheme, $allowedSchemes, true)) {
    $scheme = 'oblatos';
}

$preset = [
    'oblatos' => [
        'brand' => 'Terraza Oblatos',
        'body_class' => 'theme-oblatos',
        'css_file' => 'assets/css/main-oblatos.css',
    ],
    'ocean' => [
        'brand' => 'Terraza Oblatos Ocean',
        'body_class' => 'theme-oblatos-ocean',
        'css_file' => 'assets/css/main-ocean.css',
    ],
][$scheme];

$images = [
    ['alt' => 'Alberca iluminada de noche', 'full' => placeholder('1200x900', '344e41', 'a3b18a', 'Alberca+Noche'), 'thumb' => placeholder('600x450', '344e41', 'a3b18a', 'Alberca')],
    ['alt' => 'Jardin principal con montaje', 'full' => placeholder('1200x900', '588157', 'dad7cd', 'Jardin+Principal'), 'thumb' => placeholder('600x450', '588157', 'dad7cd', 'Jardin')],
    ['alt' => 'Area techada para evento', 'full' => placeholder('1200x900', '3a5a40', 'a3b18a', 'Area+Techada'), 'thumb' => placeholder('600x450', '3a5a40', 'a3b18a', 'Techada')],
    ['alt' => 'Montaje para cena nocturna', 'full' => placeholder('1200x900', 'dad7cd', '588157', 'Cena+Nocturna'), 'thumb' => placeholder('600x450', 'dad7cd', '588157', 'Cena')],
    ['alt' => 'Detalle de decoracion floral', 'full' => placeholder('1200x900', '4f7750', 'f7f5f2', 'Decoracion+Floral'), 'thumb' => placeholder('600x450', '4f7750', 'f7f5f2', 'Floral')],
    ['alt' => 'Zona de lounge exterior', 'full' => placeholder('1200x900', '223328', 'dad7cd', 'Lounge+Exterior'), 'thumb' => placeholder('600x450', '223328', 'dad7cd', 'Lounge')],
    ['alt' => 'Acceso principal del venue', 'full' => placeholder('1200x900', '2f4638', 'e8e3d7', 'Acceso+Principal'), 'thumb' => placeholder('600x450', '2f4638', 'e8e3d7', 'Acceso')],
    ['alt' => 'Vista panoramica del jardin', 'full' => placeholder('1200x900', '005f6b', 'edf6f9', 'Panoramica+Jardin'), 'thumb' => placeholder('600x450', '005f6b', 'edf6f9', 'Panoramica')],
];

$sections = [
    ['type' => 'gallery', 'variant' => 'Gallery1', 'data' => [
        'id' => 'gallery1', 'scheme' => 'scheme-light',
        'label' => 'Gallery1 · Light',
        'title' => 'Carrusel principal con lightbox',
        'subtitle' => 'Prueba de slider base y paginacion.',
        'images' => $images,
    ]],
    ['type' => 'gallery', 'variant' => 'Gallery2', 'data' => [
        'id' => 'gallery2', 'scheme' => 'scheme-soft',
        'label' => 'Gallery2 · Soft',
        'title' => 'Masonry compacto',
        'subtitle' => 'Prueba de densidad en grid flexible.',
        'images' => $images,
    ]],
    ['type' => 'gallery', 'variant' => 'Gallery3', 'data' => [
        'id' => 'gallery3', 'scheme' => 'scheme-color',
        'label' => 'Gallery3 · Color',
        'title' => 'Grid justificado',
        'subtitle' => 'Validacion de contraste en esquema color.',
        'images' => $images,
    ]],
    ['type' => 'gallery', 'variant' => 'Gallery4', 'data' => [
        'id' => 'gallery4', 'scheme' => 'scheme-dark',
        'label' => 'Gallery4 · Dark',
        'title' => 'Scroll horizontal full width',
        'subtitle' => 'Prueba de snap y lectura en oscuro.',
        'images' => $images,
    ]],
    ['type' => 'gallery', 'variant' => 'Gallery5', 'data' => [
        'id' => 'gallery5', 'scheme' => 'scheme-light',
        'label' => 'Gallery5 · Light',
        'title' => 'Principal con miniaturas',
        'subtitle' => 'Validacion de navegacion principal y thumbs.',
        'images' => $images,
    ]],
    ['type' => 'gallery', 'variant' => 'Gallery6', 'data' => [
        'id' => 'gallery6', 'scheme' => 'scheme-soft',
        'label' => 'Gallery6 · Soft',
        'title' => 'Mosaico editorial',
        'subtitle' => 'Prueba de overlays y jerarquia de celdas.',
        'images' => $images,
        'cta_text' => 'Ver galeria completa',
        'cta_link' => '#gallery6',
    ]],
    ['type' => 'gallery', 'variant' => 'Gallery7', 'data' => [
        'id' => 'gallery7', 'scheme' => 'scheme-linear',
        'label' => 'Gallery7 · Linear',
        'title' => 'Masonry escalonado',
        'subtitle' => 'Nueva validacion sin inline styles en items.',
        'images' => $images,
        'cta_text' => 'Explorar todas las fotos',
        'cta_link' => '#gallery7',
    ]],
];

$site = [
    'title' => $preset['brand'] . ' | Laboratorio Gallery',
    'desc' => 'Pagina de pruebas para depurar variantes de galeria y contraste por scheme.',
    'fonts' => 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&display=swap',
];
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= esc($site['desc']) ?>">
  <title><?= esc($site['title']) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="<?= $site['fonts'] ?>" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="<?= esc($preset['css_file']) ?>" rel="stylesheet">
</head>
<body class="<?= esc($preset['body_class']) ?>">

<?php render_template($sections); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    if (typeof Swiper !== 'undefined') {
      document.querySelectorAll('.tb-gallery__swiper').forEach(function (el) {
        new Swiper(el, {
          slidesPerView: 1,
          spaceBetween: 16,
          pagination: {
            el: el.querySelector('.tb-gallery__pagination'),
            clickable: true
          }
        });
      });

      document.querySelectorAll('.tb-gallery__main').forEach(function (mainEl, idx) {
        const thumbsEl = mainEl.closest('.col-lg-9')?.querySelector('.tb-gallery__thumbs');
        let thumbs = null;
        if (thumbsEl) {
          thumbs = new Swiper(thumbsEl, {
            spaceBetween: 10,
            slidesPerView: 'auto',
            watchSlidesProgress: true
          });
        }

        new Swiper(mainEl, {
          slidesPerView: 1,
          spaceBetween: 0,
          navigation: {
            nextEl: mainEl.querySelector('.swiper-button-next'),
            prevEl: mainEl.querySelector('.swiper-button-prev')
          },
          thumbs: thumbs ? { swiper: thumbs } : undefined
        });
      });
    }

    if (typeof GLightbox !== 'undefined') {
      GLightbox({ selector: '.tb-gallery-lightbox, .tb-gallery__lightbox' });
    }
  });
</script>
</body>
</html>
