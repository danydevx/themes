<?php
/**
 * Terraza Oblatos — Event Types Lab
 * Página de depuración para variantes EventTypes.
 * Muestra todas las variantes con schemes para validar contraste.
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

$commonItems = [
    ['icon' => 'bi-cake2', 'title' => 'Cumpleaños', 'text' => 'Fiestas de cumpleaños junto a la alberca. Decoración temática, pastel y comida.', 'price' => 'Desde $12,000'],
    ['icon' => 'bi-heart', 'title' => 'Bodas', 'text' => 'Ceremonia junto a la alberca, recepción bajo las estrellas. Wedding planner dedicado.', 'price' => 'Desde $28,000'],
    ['icon' => 'bi-star', 'title' => 'XV Años', 'text' => 'La fiesta más importante. Alberca, pista de baile, luces y todo lo que sueñe.', 'price' => 'Desde $22,000'],
    ['icon' => 'bi-droplet', 'title' => 'Bautizos', 'text' => 'Celebraciones familiares con ambiente fresco. Los niños disfrutan la alberca.'],
    ['icon' => 'bi-music-note', 'title' => 'Despedidas', 'text' => 'Despedidas de soltera o soltero con ambiente festivo. Pool party y DJ.'],
    ['icon' => 'bi-briefcase', 'title' => 'Corporativos', 'text' => 'Eventos empresariales, cenas de gala o celebraciones de fin de año.'],
];

$site = [
    'title' => $preset['brand'] . ' | Laboratorio Event Types',
    'desc' => 'Página de depuración para variantes EventTypes y contraste por scheme.',
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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="<?= $site['fonts'] ?>" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="<?= esc($preset['css_file']) ?>" rel="stylesheet">
  <style>
    body { padding-top: 70px; }
    .lab-section { margin-bottom: 3rem; }
    .lab-variant-label {
      position: absolute;
      top: 0.5rem;
      left: 1rem;
      font-size: 0.65rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.1em;
      color: var(--tb-primary);
      background: rgba(255,255,255,0.92);
      padding: 0.2rem 0.6rem;
      border-radius: 3px;
      z-index: 10;
    }
    .lab-row { position: relative; }
  </style>
</head>
<body class="<?= esc($preset['body_class']) ?>">

<div class="container py-3">
  <div class="d-flex flex-wrap gap-2 align-items-center">
    <span class="small fw-semibold">Preset:</span>
    <a class="btn btn-sm <?= $scheme === 'oblatos' ? 'btn-primary' : 'btn-outline-secondary' ?>" href="event-types.php?scheme=oblatos">Oblatos</a>
    <a class="btn btn-sm <?= $scheme === 'ocean' ? 'btn-primary' : 'btn-outline-secondary' ?>" href="event-types.php?scheme=ocean">Ocean</a>
  </div>
</div>

<!-- EventTypes1 — grid cards (refactorizado) -->
<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes1 — scheme-light (refactorizado)</span>
  <?php section('event-types', 'EventTypes1', [
    'id' => 'et1-light', 'scheme' => 'scheme-light',
    'label' => 'Tipos de evento', 'title' => 'Cada celebración tiene su espacio',
    'subtitle' => 'Grid de tarjetas con imagen superior.',
    'items' => $commonItems,
  ]); ?>
</div>

<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes1 — scheme-dark</span>
  <?php section('event-types', 'EventTypes1', [
    'id' => 'et1-dark', 'scheme' => 'scheme-dark',
    'label' => 'Tipos de evento', 'title' => 'Cada celebración tiene su espacio',
    'subtitle' => 'Grid de tarjetas con imagen superior.',
    'items' => $commonItems,
  ]); ?>
</div>

<!-- EventTypes3 — alternating rows (refactorizado) -->
<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes3 — scheme-soft (Bootstrap utilities)</span>
  <?php section('event-types', 'EventTypes3', [
    'id' => 'et3-soft', 'scheme' => 'scheme-soft',
    'label' => 'Fiestas', 'title' => 'Diseñadas para cada ocasión',
    'subtitle' => 'Filas alternadas con fs-4 y p-4/p-lg-5.',
    'items' => array_slice($commonItems, 0, 4),
  ]); ?>
</div>

<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes3 — scheme-color</span>
  <?php section('event-types', 'EventTypes3', [
    'id' => 'et3-color', 'scheme' => 'scheme-color',
    'label' => 'Fiestas', 'title' => 'Diseñadas para cada ocasión',
    'subtitle' => 'Filas alternadas con scheme-color.',
    'items' => array_slice($commonItems, 0, 4),
  ]); ?>
</div>

<!-- EventTypes2 — horizontal scroll -->
<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes2 — scheme-soft (dos columnas + imagen)</span>
  <?php section('event-types', 'EventTypes2', [
    'id' => 'et2-soft', 'scheme' => 'scheme-soft',
    'label' => 'Eventos', 'title' => 'Eventos disponibles todo el año',
    'subtitle' => 'Imagen izq + lista eventos der.',
    'items' => [
      ['icon' => 'bi-cake2', 'title' => 'Cumpleaños', 'text' => 'Fiestas de cumpleaños junto a la alberca. Decoración temática, pastel y comida.', 'price' => 'Desde $12,000', 'img' => placeholder('800x900', '344e41', 'a3b18a', 'Cumpleaños')],
      ['icon' => 'bi-heart', 'title' => 'Bodas', 'text' => 'Ceremonia junto a la alberca, recepción bajo las estrellas. Wedding planner dedicado.', 'price' => 'Desde $28,000'],
      ['icon' => 'bi-star', 'title' => 'XV Años', 'text' => 'La fiesta más importante. Alberca, pista de baile, luces y todo lo que sueñe.', 'price' => 'Desde $22,000'],
      ['icon' => 'bi-droplet', 'title' => 'Bautizos', 'text' => 'Celebraciones familiares con ambiente fresco. Los niños disfrutan la alberca.'],
      ['icon' => 'bi-music-note', 'title' => 'Despedidas', 'text' => 'Despedidas de soltera o soltero con ambiente festivo. Pool party y DJ.'],
      ['icon' => 'bi-briefcase', 'title' => 'Corporativos', 'text' => 'Eventos empresariales, cenas de gala o celebraciones de fin de año.'],
    ],
    'cta' => ['href' => '#', 'label' => 'Ver todos'],
  ]); ?>
</div>

<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes2 — scheme-color (full vertical con imagen)</span>
  <?php section('event-types', 'EventTypes2', [
    'id' => 'et2-color', 'scheme' => 'scheme-color',
    'label' => 'Eventos', 'title' => 'Eventos disponibles todo el año',
    'subtitle' => 'Cards verticales con imagen + badge.',
    'items' => [
      ['icon' => 'bi-cake2', 'title' => 'Cumpleaños', 'text' => 'Fiestas de cumpleaños junto a la alberca. Decoración temática, pastel y comida.', 'price' => 'Desde $12,000', 'img' => placeholder('600x400', 'f8d4de', 'c06c84', 'Cumpleaños')],
      ['icon' => 'bi-heart', 'title' => 'Bodas', 'text' => 'Ceremonia junto a la alberca, recepción bajo las estrellas. Wedding planner dedicado.', 'price' => 'Desde $28,000', 'img' => placeholder('600x400', 'f8d4de', 'c06c84', 'Bodas')],
      ['icon' => 'bi-star', 'title' => 'XV Años', 'text' => 'La fiesta más importante. Alberca, pista de baile, luces y todo lo que sueñe.', 'price' => 'Desde $22,000', 'img' => placeholder('600x400', 'f8d4de', 'c06c84', 'XV')],
      ['icon' => 'bi-droplet', 'title' => 'Bautizos', 'text' => 'Celebraciones familiares con ambiente fresco. Los niños disfrutan la alberca.', 'img' => placeholder('600x400', 'f8d4de', 'c06c84', 'Bautizos')],
      ['icon' => 'bi-music-note', 'title' => 'Despedidas', 'text' => 'Despedidas de soltera o soltero con ambiente festivo. Pool party y DJ.', 'img' => placeholder('600x400', 'f8d4de', 'c06c84', 'Despedidas')],
      ['icon' => 'bi-briefcase', 'title' => 'Corporativos', 'text' => 'Eventos empresariales, cenas de gala o celebraciones de fin de año.', 'img' => placeholder('600x400', 'f8d4de', 'c06c84', 'Corporativos')],
    ],
    'cta' => ['href' => '#', 'label' => 'Ver todos'],
  ]); ?>
</div>

<!-- EventTypes3 — alternating rows -->
<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes3 — scheme-light</span>
  <?php section('event-types', 'EventTypes3', [
    'id' => 'et3-light', 'scheme' => 'scheme-light',
    'label' => 'Fiestas', 'title' => 'Diseñadas para cada ocasión',
    'subtitle' => 'Filas alternadas para ritmo visual.',
    'items' => array_slice($commonItems, 0, 4),
  ]); ?>
</div>

<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes3 — scheme-dark</span>
  <?php section('event-types', 'EventTypes3', [
    'id' => 'et3-dark', 'scheme' => 'scheme-dark',
    'label' => 'Fiestas', 'title' => 'Diseñadas para cada ocasión',
    'subtitle' => 'Filas alternadas para ritmo visual.',
    'items' => array_slice($commonItems, 0, 4),
  ]); ?>
</div>

<!-- EventTypes4 — editorial list -->
<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes4 — scheme-soft</span>
  <?php section('event-types', 'EventTypes4', [
    'id' => 'et4-soft', 'scheme' => 'scheme-soft',
    'label' => 'Catálogo', 'title' => 'Tipos de celebración',
    'subtitle' => 'Lista editorial numerada.',
    'items' => $commonItems,
    'cta_text' => 'Ver todos los eventos', 'cta_link' => '#',
  ]); ?>
</div>

<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes4 — scheme-dark</span>
  <?php section('event-types', 'EventTypes4', [
    'id' => 'et4-dark', 'scheme' => 'scheme-dark',
    'label' => 'Catálogo', 'title' => 'Tipos de celebración',
    'subtitle' => 'Lista editorial numerada.',
    'items' => $commonItems,
    'cta_text' => 'Ver todos los eventos', 'cta_link' => '#',
  ]); ?>
</div>

<!-- EventTypes5 — icon background cards -->
<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes5 — scheme-light</span>
  <?php section('event-types', 'EventTypes5', [
    'id' => 'et5-light', 'scheme' => 'scheme-light',
    'label' => 'Servicios', 'title' => 'Cada evento es único',
    'subtitle' => 'Tarjetas con icono de fondo.',
    'items' => $commonItems,
    'cta' => ['href' => '#', 'label' => 'Ver todos'],
  ]); ?>
</div>

<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes5 — scheme-dark</span>
  <?php section('event-types', 'EventTypes5', [
    'id' => 'et5-dark', 'scheme' => 'scheme-dark',
    'label' => 'Servicios', 'title' => 'Cada evento es único',
    'subtitle' => 'Tarjetas con icono de fondo.',
    'items' => $commonItems,
    'cta' => ['href' => '#', 'label' => 'Ver todos'],
  ]); ?>
</div>

<!-- EventTypes6 — horizontal scroll cards (ACTIVE) -->
<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes6 — scheme-soft (ACTIVE)</span>
  <?php section('event-types', 'EventTypes6', [
    'id' => 'et6-soft', 'scheme' => 'scheme-soft',
    'label' => 'Fiestas', 'title' => 'Cada ocasión merece su celebración',
    'subtitle' => 'Scroll horizontal con cards.',
    'items' => $commonItems,
    'cta' => ['href' => '#', 'label' => 'Ver paquetes'],
  ]); ?>
</div>

<div class="lab-section lab-row">
  <span class="lab-variant-label">EventTypes6 — scheme-color</span>
  <?php section('event-types', 'EventTypes6', [
    'id' => 'et6-color', 'scheme' => 'scheme-color',
    'label' => 'Fiestas', 'title' => 'Cada ocasión merece su celebración',
    'subtitle' => 'Scroll horizontal con cards.',
    'items' => $commonItems,
    'cta' => ['href' => '#', 'label' => 'Ver paquetes'],
  ]); ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
<script>
  AOS.init({ once: true, duration: 600 });
</script>
</body>
</html>