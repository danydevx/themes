<?php
/**
 * Terraza Oblatos — Availability Lab
 * Pagina de depuracion para variantes de disponibilidad.
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

$datesGrid = [
    ['day' => 'Vie', 'label' => '25 Jul', 'status' => 'available'],
    ['day' => 'Sab', 'label' => '26 Jul', 'status' => 'reserved'],
    ['day' => 'Dom', 'label' => '27 Jul', 'status' => 'taken'],
    ['day' => 'Vie', 'label' => '01 Ago', 'status' => 'available'],
    ['day' => 'Sab', 'label' => '02 Ago', 'status' => 'reserved'],
    ['day' => 'Dom', 'label' => '03 Ago', 'status' => 'taken'],
    ['day' => 'Vie', 'label' => '08 Ago', 'status' => 'available'],
    ['day' => 'Sab', 'label' => '09 Ago', 'status' => 'reserved'],
    ['day' => 'Dom', 'label' => '10 Ago', 'status' => 'taken'],
    ['day' => 'Vie', 'label' => '15 Ago', 'status' => 'available'],
    ['day' => 'Sab', 'label' => '16 Ago', 'status' => 'reserved'],
    ['day' => 'Dom', 'label' => '17 Ago', 'status' => 'taken'],
];

$weeks = [
    [
        'label' => 'Semana 1',
        'days' => [
            null,
            null,
            ['date' => '30', 'status' => 'taken'],
            ['date' => '31', 'status' => 'taken'],
            ['date' => '1', 'status' => 'available'],
            ['date' => '2', 'status' => 'reserved'],
            ['date' => '3', 'status' => 'taken'],
        ],
    ],
    [
        'label' => 'Semana 2',
        'days' => [
            ['date' => '4', 'status' => 'taken'],
            ['date' => '5', 'status' => 'taken'],
            ['date' => '6', 'status' => 'reserved'],
            ['date' => '7', 'status' => 'reserved'],
            ['date' => '8', 'status' => 'available'],
            ['date' => '9', 'status' => 'reserved'],
            ['date' => '10', 'status' => 'taken'],
        ],
    ],
    [
        'label' => 'Semana 3',
        'days' => [
            ['date' => '11', 'status' => 'taken'],
            ['date' => '12', 'status' => 'taken'],
            ['date' => '13', 'status' => 'taken'],
            ['date' => '14', 'status' => 'reserved'],
            ['date' => '15', 'status' => 'available'],
            ['date' => '16', 'status' => 'reserved'],
            ['date' => '17', 'status' => 'taken'],
        ],
    ],
];

$slots = [
    ['day' => 'Viernes', 'date' => '25 julio', 'event' => 'Evento nocturno', 'hours' => '18:00 - 04:00 (10 horas)', 'status' => 'available', 'status_label' => 'Disponible', 'capacity' => 35],
    ['day' => 'Viernes', 'date' => '1 agosto', 'event' => 'Recepcion privada', 'hours' => '19:00 - 05:00 (10 horas)', 'status' => 'reserved', 'status_label' => 'Apartada', 'capacity' => 72],
    ['day' => 'Viernes', 'date' => '8 agosto', 'event' => 'Boda civil', 'hours' => '17:00 - 03:00 (10 horas)', 'status' => 'available', 'status_label' => 'Disponible', 'capacity' => 28],
    ['day' => 'Sabado', 'date' => '9 agosto', 'event' => 'XV anos', 'hours' => '18:00 - 06:00 (12 horas)', 'status' => 'taken', 'status_label' => 'No disponible', 'capacity' => 100],
];

$sections = [
    ['type' => 'availability', 'variant' => 'Availability1', 'data' => [
        'id' => 'availability1',
        'scheme' => 'scheme-soft',
        'label' => 'Availability1',
        'title' => 'Disponibilidad rapida para julio y agosto',
        'subtitle' => 'Vista compacta para validar legibilidad de estados y prioridad de fechas clave.',
        'dates' => $datesGrid,
        'brand' => $preset['brand'],
        'wa_link' => wa_link('Hola, quiero disponibilidad para 25 de julio, 1 o 8 de agosto. Busco horario nocturno de 10 a 12 horas para mas de 80 personas.'),
        'wa_label' => 'Consultar estas fechas por WhatsApp',
    ]],
    ['type' => 'availability', 'variant' => 'Availability2', 'data' => [
        'id' => 'availability2',
        'scheme' => 'scheme-light',
        'label' => 'Availability2',
        'title' => 'Calendario semanal de ocupacion',
        'subtitle' => 'Tabla para evaluar contraste, densidad y estado visual por dia.',
        'month_label' => 'Agosto 2026',
        'weeks' => $weeks,
        'wa_link' => wa_link('Hola, quiero apartar fecha para evento nocturno de 10 a 12 horas. ¿Que disponibilidad tienen en agosto?'),
        'wa_label' => 'Solicitar bloqueo de fecha',
    ]],
    ['type' => 'availability', 'variant' => 'Availability3', 'data' => [
        'id' => 'availability3-light',
        'scheme' => 'scheme-light',
        'label' => 'Availability3 · Light',
        'title' => 'Agenda por bloques de horario',
        'subtitle' => 'Variante tipo tiras para lectura rapida de ocupacion y turnos.',
        'slots' => $slots,
        'wa_link' => wa_link('Hola, quiero disponibilidad para evento nocturno y capacidad mayor a 80 personas.'),
        'wa_label' => 'Solicitar propuesta en scheme-light',
    ]],
    ['type' => 'availability', 'variant' => 'Availability3', 'data' => [
        'id' => 'availability3-color',
        'scheme' => 'scheme-color',
        'label' => 'Availability3 · Color',
        'title' => 'Disponibilidad prioritaria por fecha',
        'subtitle' => 'Validacion de contraste para scheme-color con datos de julio y agosto.',
        'slots' => $slots,
        'wa_link' => wa_link('Hola, me interesa la fecha del 1 de agosto en horario nocturno. Quiero confirmar disponibilidad.'),
        'wa_label' => 'Consultar en scheme-color',
    ]],
    ['type' => 'availability', 'variant' => 'Availability3', 'data' => [
        'id' => 'availability3-dark',
        'scheme' => 'scheme-dark',
        'label' => 'Availability3 · Dark',
        'title' => 'Vista nocturna de agenda de eventos',
        'subtitle' => 'Prueba para scheme-dark enfocada en legibilidad de estados y barra de ocupacion.',
        'slots' => $slots,
        'wa_link' => wa_link('Hola, quiero cotizar evento nocturno de 10 a 12 horas para mas de 80 invitados.'),
        'wa_label' => 'Consultar en scheme-dark',
    ]],
];

$site = [
    'title' => $preset['brand'] . ' | Laboratorio Availability',
    'desc' => 'Pagina de pruebas para depurar variantes de disponibilidad y contraste por scheme.',
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
