<?php
/**
 * Terraza Oblatos — Services Lab
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

$items = [
    ['icon' => 'bi-people', 'title' => 'Capacidad para 80 a 150 invitados', 'desc' => 'Configuracion flexible por tipo de evento y montaje.'],
    ['icon' => 'bi-clock-history', 'title' => 'Horario nocturno extendido', 'desc' => 'Bloques de 10 a 12 horas con operacion controlada.'],
    ['icon' => 'bi-water', 'title' => 'Alberca y zonas verdes', 'desc' => 'Espacios exteriores para recepcion, coctel y convivencia.'],
    ['icon' => 'bi-house-check', 'title' => 'Area cubierta disponible', 'desc' => 'Alternativa techada para continuidad en temporada de lluvia.'],
    ['icon' => 'bi-fire', 'title' => 'Parrilla y cocina funcional', 'desc' => 'Infraestructura para servicio interno o proveedor externo.'],
    ['icon' => 'bi-display', 'title' => 'Zona para proyeccion', 'desc' => 'Espacio para pantalla y equipo audiovisual segun layout.'],
];

$sections = [
    ['type' => 'services', 'variant' => 'Services1', 'data' => [
        'id' => 'services1', 'scheme' => 'scheme-light',
        'label' => 'Services1 · Light',
        'title' => 'Servicios base del venue',
        'subtitle' => 'Grid compacto para lectura rapida de beneficios.',
        'items' => $items,
    ]],
    ['type' => 'services', 'variant' => 'Services2', 'data' => [
        'id' => 'services2', 'scheme' => 'scheme-soft',
        'label' => 'Services2 · Soft',
        'title' => 'Servicios por bloques operativos',
        'subtitle' => 'Filas alternadas para validar jerarquia y escaneo.',
        'items' => [
            ['icon' => 'bi-shield-check', 'title' => 'Planeacion previa', 'desc' => 'Asesoria para definir flujo de invitados y areas.', 'badge' => 'Previo al evento'],
            ['icon' => 'bi-music-note-beamed', 'title' => 'Soporte de ambientacion', 'desc' => 'Recomendaciones de layout para musica e iluminacion.', 'badge' => 'Durante el evento'],
            ['icon' => 'bi-stars', 'title' => 'Cierre y seguimiento', 'desc' => 'Revision final de tiempos y condiciones de salida.', 'badge' => 'Post evento'],
        ],
    ]],
    ['type' => 'services', 'variant' => 'Services3', 'data' => [
        'id' => 'services3', 'scheme' => 'scheme-color',
        'label' => 'Services3 · Color',
        'title' => 'Ruta de servicio por etapas',
        'subtitle' => 'Tarjetas numeradas para validar contraste en scheme-color.',
        'items' => [
            ['title' => 'Diagnostico inicial', 'desc' => 'Fecha, capacidad y necesidades de su evento.'],
            ['title' => 'Propuesta operativa', 'desc' => 'Montaje sugerido, horario y areas a habilitar.'],
            ['title' => 'Confirmacion final', 'desc' => 'Bloqueo de fecha y definicion de terminos.'],
        ],
    ]],
    ['type' => 'services', 'variant' => 'Services4', 'data' => [
        'id' => 'services4', 'scheme' => 'scheme-linear',
        'label' => 'Services4 · Linear',
        'title' => 'Servicios complementarios destacados',
        'subtitle' => 'Cards horizontales para validar contraste en linear.',
        'items' => $items,
    ]],
];

$site = [
    'title' => $preset['brand'] . ' | Laboratorio Services',
    'desc' => 'Pagina de pruebas para depurar variantes de servicios y contraste por scheme.',
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
