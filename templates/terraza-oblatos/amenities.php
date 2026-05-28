<?php
/**
 * Terraza Oblatos — Amenities Lab
 * Página de depuración para variantes de amenidades.
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

$categories = [
    [
        'icon' => 'bi-water',
        'title' => 'Zona acuática',
        'items' => [
            ['icon' => 'bi-thermometer-half', 'label' => 'Alberca climatizada todo el año'],
            ['icon' => 'bi-lightbulb', 'label' => 'Iluminación LED nocturna'],
            ['icon' => 'bi-water', 'label' => 'Cascada decorativa activa'],
            ['icon' => 'bi-umbrella', 'label' => 'Área de camastros y sombra'],
        ],
    ],
    [
        'icon' => 'bi-house-door',
        'title' => 'Espacios',
        'items' => [
            ['icon' => 'bi-building', 'label' => 'Terraza techada para 80 personas'],
            ['icon' => 'bi-tree', 'label' => 'Jardín abierto de 400 m²'],
            ['icon' => 'bi-people', 'label' => 'Capacidad total hasta 150 invitados'],
            ['icon' => 'bi-door-open', 'label' => 'Accesos amplios y señalizados'],
        ],
    ],
    [
        'icon' => 'bi-music-note-beamed',
        'title' => 'Evento y operación',
        'items' => [
            ['icon' => 'bi-speaker', 'label' => 'Sistema de audio para evento'],
            ['icon' => 'bi-mic', 'label' => 'Micrófono inalámbrico'],
            ['icon' => 'bi-cup-hot', 'label' => 'Barra y área de servicio'],
            ['icon' => 'bi-shield-check', 'label' => 'Coordinación y soporte operativo'],
        ],
    ],
    [
        'icon' => 'bi-car-front',
        'title' => 'Servicios generales',
        'items' => [
            ['icon' => 'bi-car-front-fill', 'label' => 'Estacionamiento para 40 autos'],
            ['icon' => 'bi-camera-video', 'label' => 'Vigilancia en accesos'],
            ['icon' => 'bi-reception-4', 'label' => 'Cobertura de red estable'],
            ['icon' => 'bi-tools', 'label' => 'Soporte técnico durante el evento'],
        ],
    ],
];

$sections = [
    ['type' => 'amenities', 'variant' => 'Amenities1', 'data' => [
        'id' => 'amenities1',
        'scheme' => 'scheme-soft',
        'label' => 'Amenities1',
        'title' => 'Amenidades por categorías compactas',
        'subtitle' => 'Vista en píldoras para revisar legibilidad, densidad y contraste.',
        'categories' => $categories,
    ]],
    ['type' => 'amenities', 'variant' => 'Amenities2', 'data' => [
        'id' => 'amenities2',
        'scheme' => 'scheme-color',
        'label' => 'Amenities2',
        'title' => 'Amenidades en tarjetas grandes',
        'subtitle' => 'Variante de tarjetas amplias para validar iconografía y textos en scheme-color.',
        'categories' => $categories,
    ]],
];

$site = [
    'title' => $preset['brand'] . ' | Laboratorio Amenities',
    'desc' => 'Página de pruebas para depurar variantes de amenidades y contraste por scheme.',
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
</head>
<body class="<?= esc($preset['body_class']) ?>">

<?php render_template($sections); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
