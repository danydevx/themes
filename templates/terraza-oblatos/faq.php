<?php
/**
 * Terraza Oblatos — FAQ Lab
 * Pagina de depuracion para variantes FAQ.
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

$faqItems = [
    ['icon' => 'bi-clock', 'q' => '¿Manejan horario nocturno de 10 a 12 horas?', 'a' => 'Si, contamos con paquetes nocturnos de 10 y 12 horas segun fecha y tipo de evento.'],
    ['icon' => 'bi-people', 'q' => '¿La capacidad supera 80 personas?', 'a' => 'Si. Dependiendo del montaje, podemos operar con capacidad de 80 a 150 invitados.'],
    ['icon' => 'bi-cloud-rain', 'q' => '¿Tienen areas cubiertas por lluvia?', 'a' => 'Si, hay zona techada y opcion de montaje complementario para contingencia.'],
    ['icon' => 'bi-water', 'q' => '¿Incluye alberca y zonas verdes?', 'a' => 'Si, la alberca y el jardin forman parte del espacio principal del evento.'],
    ['icon' => 'bi-shop-window', 'q' => '¿La cocina y parrilla estan habilitadas?', 'a' => 'Si, tenemos cocina funcional y area de parrilla para servicio interno o externo.'],
    ['icon' => 'bi-bus-front', 'q' => '¿Es facil llegar en transporte publico?', 'a' => 'Si, se encuentra dentro del perimetro urbano con acceso razonable a tren y rutas de autobus.'],
];

$sections = [
    ['type' => 'faq', 'variant' => 'FAQ1', 'data' => [
        'id' => 'faq1',
        'scheme' => 'scheme-soft',
        'label' => 'FAQ1 · Light',
        'title' => 'Preguntas frecuentes de reserva',
        'subtitle' => 'Bloque base para validar acordeon simple y lectura continua.',
        'items' => $faqItems,
        'cta_text' => '¿Desea resolver su caso por WhatsApp?',
        'cta_link' => wa_link('Hola, quiero resolver dudas sobre disponibilidad y horario nocturno.'),
        'cta_label' => 'Consultar por WhatsApp',
    ]],
    ['type' => 'faq', 'variant' => 'FAQ2', 'data' => [
        'id' => 'faq2',
        'scheme' => 'scheme-soft',
        'label' => 'FAQ2 · Soft',
        'title' => 'Dudas operativas por tipo de evento',
        'subtitle' => 'Variante en dos columnas para revisar ritmo visual y densidad.',
        'items' => $faqItems,
        'cta_text' => '¿Quiere apoyo para elegir paquete?',
        'cta_link' => wa_link('Hola, quiero orientacion para elegir paquete de evento.'),
        'cta_label' => 'Recibir orientacion',
    ]],
    ['type' => 'faq', 'variant' => 'FAQ3', 'data' => [
        'id' => 'faq3',
        'scheme' => 'scheme-color',
        'label' => 'FAQ3 · Color',
        'title' => 'Validacion de contraste en scheme-color',
        'subtitle' => 'Tarjetas expandibles para verificar estados abiertos y cerrados.',
        'items' => $faqItems,
        'cta_text' => '¿Le ayudamos a bloquear una fecha?',
        'cta_link' => wa_link('Hola, quiero bloquear una fecha tentativa para mi evento.'),
        'cta_label' => 'Bloquear fecha',
    ]],
    ['type' => 'faq', 'variant' => 'FAQ4', 'data' => [
        'id' => 'faq4',
        'scheme' => 'scheme-dark',
        'label' => 'FAQ4 · Dark',
        'title' => 'Dudas clave antes de contratar',
        'subtitle' => 'Variante depurada sin inline styles y ajuste de contraste dark.',
        'items' => $faqItems,
        'cta_text' => '¿Listo para avanzar con su fecha?',
        'cta_link' => wa_link('Hola, quiero confirmar disponibilidad para julio/agosto.'),
        'cta_label' => 'Confirmar disponibilidad',
    ]],
    ['type' => 'faq', 'variant' => 'FAQ5', 'data' => [
        'id' => 'faq5',
        'scheme' => 'scheme-linear',
        'label' => 'FAQ5 · Linear',
        'title' => 'Ruta rapida para reservar su evento',
        'subtitle' => 'Variante nueva pensada para fondos degradados y preguntas en formato de pasos.',
        'items' => [
            ['q' => 'Paso 1: ¿Que fecha le interesa?', 'a' => 'Comparta su fecha objetivo (por ejemplo 25 de julio, 1 o 8 de agosto) y revisamos disponibilidad real.'],
            ['q' => 'Paso 2: ¿Cuantos invitados asistiran?', 'a' => 'Con ese dato validamos montaje, flujo de servicio y paquete recomendado para 80+ personas.'],
            ['q' => 'Paso 3: ¿Que horario desea contratar?', 'a' => 'Podemos operar turnos nocturnos de 10 a 12 horas segun fecha y condicion del evento.'],
            ['q' => 'Paso 4: ¿Que zonas desea habilitar?', 'a' => 'Definimos si requiere alberca, area cubierta, jardin, cocina y espacio para proyeccion.'],
        ],
        'cta_text' => '¿Desea avanzar con su fecha tentativa hoy mismo?',
        'cta_link' => wa_link('Hola, quiero iniciar el proceso de reserva en 3 pasos para mi evento.'),
        'cta_label' => 'Iniciar reserva por WhatsApp',
    ]],
];

$site = [
    'title' => $preset['brand'] . ' | Laboratorio FAQ',
    'desc' => 'Pagina de pruebas para depurar variantes FAQ y contraste por scheme.',
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
