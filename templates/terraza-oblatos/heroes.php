<?php
/**
 * Terraza Oblatos — Hero Lab
 * Página de depuración para variantes de hero.
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

$cta_primary = ['href' => wa_link('Hola, quiero consultar disponibilidad.'), 'label' => 'Cotizar ahora'];
$cta_secondary = ['href' => '#', 'label' => 'Conocer más'];

$features = [
    ['icon' => 'bi-droplet-fill', 'label' => 'Alberca climatizada'],
    ['icon' => 'bi-people', 'label' => 'Hasta 150 invitados'],
    ['icon' => 'bi-sun', 'label' => 'Áreas al aire libre'],
    ['icon' => 'bi-shield-check', 'label' => 'Coordinación operativa'],
];

$sections = [
    ['type' => 'hero', 'variant' => 'Hero1', 'data' => [
        'id' => 'hero1', 'scheme' => 'scheme-soft',
        'title' => 'Su celebración merece<br>un lugar especial',
        'text' => 'Reserve una terraza privada, elegante y lista para recibir a sus invitados.',
        'cta_primary' => $cta_primary, 'cta_secondary' => $cta_secondary,
    ]],
    ['type' => 'hero', 'variant' => 'Hero2', 'data' => [
        'id' => 'hero2', 'scheme' => 'scheme-dark',
        'label' => 'Bienvenidos', 'bg' => placeholder('1920x1080', '2c2416', 'b87c4c', 'Terraza+en+jardin'),
        'title' => 'Su celebración merece<br>un lugar especial',
        'text' => 'Reserve una terraza privada, elegante y lista para recibir a sus invitados.',
        'cta_primary' => $cta_primary, 'cta_secondary' => $cta_secondary,
        'feature_img' => placeholder('500x375', 'd4c4b0', '8b6b4a', 'Terraza+Interior'),
        'feature_alt' => 'Vista interior de la terraza',
    ]],
    ['type' => 'hero', 'variant' => 'Hero3', 'data' => [
        'id' => 'hero3', 'scheme' => 'scheme-dark',
        'label' => 'Bienvenidos a', 'bg' => placeholder('1920x1080', '2c2416', 'c06c84', 'Terraza'),
        'title' => 'Terraza<br>Mi Cielo',
        'text' => 'Un espacio donde cada evento se convierte en un recuerdo inolvidable.',
        'cta_primary' => $cta_primary, 'scroll_hint' => true,
    ]],
    ['type' => 'hero', 'variant' => 'Hero4', 'data' => [
        'id' => 'hero4', 'scheme' => 'scheme-color',
        'badge' => 'Alberca disponible', 'bg' => placeholder('1920x1080', '004466', '00b4d8', 'Alberca+Fiesta'),
        'title' => 'Fiesta Splash<br>para los peques',
        'text' => 'Celebración acuática con todo lo necesario para los pequeños.',
        'price_from' => 'Desde $3,500',
        'cta_primary' => $cta_primary, 'cta_secondary' => $cta_secondary,
    ]],
    ['type' => 'hero', 'variant' => 'Hero5', 'data' => [
        'id' => 'hero5', 'scheme' => 'scheme-dark',
        'badge' => '¡Oferta por tiempo limitado!', 'bg' => placeholder('1920x1080', '0f172a', '3b82f6', 'Hero'),
        'title' => 'Terraza Buenavista',
        'text' => 'El lugar ideal para sus eventos más especiales.',
        'features' => $features,
        'cta_primary' => $cta_primary, 'cta_secondary' => $cta_secondary,
    ]],
    ['type' => 'hero', 'variant' => 'Hero6', 'data' => [
        'id' => 'hero6', 'scheme' => 'scheme-soft',
        'label' => 'Terraza Magnolia',
        'image' => placeholder('600x800', '2c2416', 'b87c4c', 'Hero+Editorial'),
        'image_alt' => 'Acceso principal de la terraza',
        'image_badge' => 'Desde 2024',
        'title' => 'Elegancia que<br>se siente al<br>llegar',
        'text' => 'Un espacio diseñado para hacer de su evento algo excepcional.',
        'cta_primary' => $cta_primary, 'cta_secondary' => $cta_secondary,
    ]],
    ['type' => 'hero', 'variant' => 'Hero7', 'data' => [
        'id' => 'hero7', 'scheme' => 'scheme-dark',
        'overline' => 'Terraza Premium', 'bg' => placeholder('1920x1080', '1a1a1a', 'd4af37', 'Luxury+Event'),
        'title' => 'Excelencia<br>en cada<br>detalle',
        'text' => 'Un lugar pensado para quienes buscan lo mejor para sus invitados.',
        'stats' => [
            ['value' => '150+', 'label' => 'Invitados'],
            ['value' => '12', 'label' => 'Años de experiencia'],
            ['value' => '500+', 'label' => 'Eventos realizados'],
        ],
        'cta_primary' => $cta_primary, 'cta_secondary' => $cta_secondary,
        'scroll_hint' => true,
    ]],
    ['type' => 'hero', 'variant' => 'Hero8', 'data' => [
        'id' => 'hero8', 'scheme' => 'scheme-soft',
        'overline' => 'Terraza Magnolia',
        'image' => placeholder('700x900', 'faf8f5', '8b9d83', 'Hero+Magnolia'),
        'image_alt' => 'Jardin y area social de la terraza',
        'image_caption' => 'Vista al jardín principal.',
        'title' => 'Donde su evento<br>se convierte en<br>obra de arte',
        'text' => 'Cada rincón está pensado para crear momentos inolvidables.',
        'cta_primary' => $cta_primary, 'cta_secondary' => $cta_secondary,
        'ornament' => '✦',
    ]],
    ['type' => 'hero', 'variant' => 'Hero9', 'data' => [
        'id' => 'hero9', 'scheme' => 'scheme-light',
        'overline' => 'Nuestra filosofía', 'badge' => 'Verificado',
        'title' => 'Un lugar que<br>cuida cada detalle',
        'text' => 'Un diseño pensado para hacer de su evento algo excepcional.',
        'features' => $features,
        'cta_primary' => $cta_primary, 'cta_secondary' => $cta_secondary,
        'images' => [
            ['src' => placeholder('400x400', 'e8d4c4', '8b6b4a', 'Terraza+Principal'), 'alt' => 'Terraza principal'],
            ['src' => placeholder('400x200', 'd4c4b0', '8b6b4a', 'Jardín+Lateral'), 'alt' => 'Jardín lateral'],
            ['src' => placeholder('400x200', 'c8b89a', '8b6b4a', 'Detalle+Flora'), 'alt' => 'Detalle floral'],
        ],
    ]],
    ['type' => 'hero', 'variant' => 'Hero10', 'data' => [
        'id' => 'hero10', 'scheme' => 'scheme-dark',
        'use_background' => true,
        'image' => placeholder('1920x1080', '1b2d2a', '6ca187', 'Terraza+con+alberca'),
        'image_alt' => 'Vista nocturna de terraza con alberca iluminada',
        'overline' => 'Terraza con alberca · Tlaquepaque',
        'title' => 'El mejor plan:<br>fiesta junto<br>a la alberca',
        'text' => 'Terraza Oblatos es el lugar donde los invitados no quieren irse. Alberca climatizada, jardín amplio y todo lo necesario.',
        'features' => $features,
        'cta_primary' => $cta_primary, 'cta_secondary' => ['href' => '#', 'label' => 'Conocer la alberca'],
    ]],
];

$site = [
    'title' => $preset['brand'] . ' | Laboratorio Heroes',
    'desc' => 'Página de pruebas para depurar variantes de heroes y contraste por scheme.',
    'fonts' => 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&display=swap',
];

$variantFilter = $_GET['variant'] ?? '';
$variantsAllowed = ['Hero1', 'Hero2', 'Hero3', 'Hero4', 'Hero5', 'Hero6', 'Hero7', 'Hero8', 'Hero9', 'Hero10'];
if ($variantFilter !== '' && in_array($variantFilter, $variantsAllowed, true)) {
    $sections = array_values(array_filter($sections, static function (array $section) use ($variantFilter): bool {
        return ($section['variant'] ?? '') === $variantFilter;
    }));
}
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="<?= $site['fonts'] ?>" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="<?= esc($preset['css_file']) ?>" rel="stylesheet">
  <style>
    body { padding-top: 70px; }
    .tb-section { margin-bottom: 2rem; }
    .labelled-section { position: relative; }
    .labelled-section::before {
      content: attr(data-label);
      position: absolute;
      top: 0.5rem;
      left: 1rem;
      font-size: 0.7rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: var(--tb-primary);
      z-index: 10;
      background: rgba(255,255,255,0.9);
      padding: 0.2rem 0.5rem;
      border-radius: 3px;
    }
  </style>
</head>
<body class="<?= esc($preset['body_class']) ?>">

<div class="container py-3">
  <div class="d-flex flex-wrap gap-2 align-items-center">
    <span class="small fw-semibold">Filtro rápido:</span>
    <a class="btn btn-sm btn-outline-secondary" href="heroes.php?scheme=<?= esc($scheme) ?>">Todos</a>
    <?php foreach ($variantsAllowed as $variant): ?>
      <a class="btn btn-sm btn-outline-secondary" href="heroes.php?scheme=<?= esc($scheme) ?>&variant=<?= esc($variant) ?>"><?= esc($variant) ?></a>
    <?php endforeach; ?>
  </div>
</div>

<?php foreach ($sections as $section): ?>
<div class="labelled-section" data-label="<?= esc($section['variant']) ?> - <?= esc($section['data']['scheme']) ?>">
  <?php section($section['type'], $section['variant'], $section['data']); ?>
</div>
<?php endforeach; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
<script>
  AOS.init({ once: true, duration: 600 });
</script>
</body>
</html>
