<?php
/**
 * Terraza Oblatos — CTA Lab
 * Pagina de depuracion para variantes CTA.
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

$waMain = wa_link('Hola, quiero cotizar una terraza para evento nocturno de 10 a 12 horas.');

$sections = [
    ['type' => 'cta', 'variant' => 'CTA1', 'data' => [
        'scheme' => 'scheme-color',
        'title' => '¿Listo para apartar su fecha?',
        'text' => 'Atendemos su solicitud por WhatsApp con tiempos de respuesta rapidos y propuesta personalizada.',
        'wa_link' => $waMain,
        'btn_label' => 'Enviar mensaje por WhatsApp',
    ]],
    ['type' => 'cta', 'variant' => 'CTA2', 'data' => [
        'scheme' => 'scheme-light',
        'title' => 'Reserve su fecha ideal con asesoria directa',
        'text' => 'Comparta fecha, horario y numero de invitados para recibir opciones de paquete sin compromiso.',
        'wa_link' => $waMain,
        'btn_label' => 'Solicitar disponibilidad',
        'secondary_link' => '#',
        'secondary_label' => 'Solicitar llamada',
        'highlights' => [
            ['icon' => 'bi-clock-history', 'label' => 'Respuesta en minutos'],
            ['icon' => 'bi-shield-check', 'label' => 'Atencion personalizada'],
            ['icon' => 'bi-calendar2-check', 'label' => 'Bloqueo temporal de fecha'],
        ],
        'image' => placeholder('500x500', '2c2416', 'b87c4c', 'CTA+Oblatos'),
        'image_alt' => 'Asesoria para reservar fecha en terraza',
    ]],
    ['type' => 'cta', 'variant' => 'CTA3', 'data' => [
        'scheme' => 'scheme-dark',
        'bg' => placeholder('1920x600', '1a1a2e', 'e09f3e', 'CTA+Nocturno'),
        'icon' => 'bi-chat-dots',
        'title' => 'Hagamos su evento realidad',
        'text' => 'Una llamada o mensaje basta para comenzar con su planeacion.',
        'wa_link' => $waMain,
        'btn_label' => 'Escribir por WhatsApp',
        'secondary_label' => 'Ver paquetes',
        'secondary_link' => '#',
        'footnote' => 'Horario de atencion: lunes a domingo de 9:00 a 21:00 horas.',
    ]],
    ['type' => 'cta', 'variant' => 'CTA4', 'data' => [
        'scheme' => 'scheme-soft',
        'title' => 'Reserve con un solo mensaje',
        'text' => 'Le ayudamos a elegir fecha, horario y configuracion ideal para su evento.',
        'wa_link' => $waMain,
        'btn_label' => 'Contactar ahora',
        'sub_text' => 'Sin costo por asesoria inicial.',
    ]],
    ['type' => 'cta', 'variant' => 'CTA5', 'data' => [
        'scheme' => 'scheme-light',
        'label' => 'Reserve ahora',
        'title' => 'Haga realidad su celebracion',
        'text' => 'Escribanos hoy y reciba propuesta con disponibilidad real para julio y agosto.',
        'wa_link' => $waMain,
        'btn_label' => 'Enviar mensaje',
        'secondary_label' => 'Ver disponibilidad',
        'secondary_link' => 'availability.php?scheme=' . $scheme,
        'note' => 'Le respondemos el mismo dia.',
        'image' => placeholder('500x400', 'faf8f5', '8b9d83', 'CTA+Magnolia'),
        'image_alt' => 'Asesoria para reservar evento',
    ]],
    ['type' => 'cta', 'variant' => 'CTA6', 'data' => [
        'scheme' => 'scheme-linear',
        'label' => 'CTA6',
        'icon' => 'bi-telephone-forward',
        'title' => '¿Listo para comenzar?',
        'text' => 'Comparta fecha objetivo, numero de invitados y horario para enviar propuesta.',
        'wa_link' => $waMain,
        'btn_label' => 'Escribir por WhatsApp',
        'secondary_link' => '#',
        'secondary_label' => 'Solicitar llamada',
        'note' => 'Atencion en menos de 15 minutos en horario laboral.',
    ]],
    ['type' => 'cta', 'variant' => 'CTA6', 'data' => [
        'scheme' => 'scheme-light',
        'label' => 'CTA6 · Light',
        'icon' => 'bi-telephone-forward',
        'title' => 'Version light para comparacion',
        'text' => 'Mismo bloque con scheme-light para validar consistencia de contraste y jerarquia.',
        'wa_link' => $waMain,
        'btn_label' => 'Escribir por WhatsApp',
        'secondary_link' => '#',
        'secondary_label' => 'Solicitar llamada',
        'note' => 'Prueba de legibilidad en fondo claro.',
    ]],
    ['type' => 'cta', 'variant' => 'CTA6', 'data' => [
        'scheme' => 'scheme-dark',
        'label' => 'CTA6 · Dark',
        'icon' => 'bi-telephone-forward',
        'title' => 'Version dark para comparacion',
        'text' => 'Mismo bloque con scheme-dark para validar presencia de titulos y botones.',
        'wa_link' => $waMain,
        'btn_label' => 'Escribir por WhatsApp',
        'secondary_link' => '#',
        'secondary_label' => 'Solicitar llamada',
        'note' => 'Prueba de contraste en fondo oscuro.',
    ]],
    ['type' => 'cta', 'variant' => 'CTA7', 'data' => [
        'scheme' => 'scheme-dark',
        'label' => 'CTA7',
        'title' => 'Confirme su fecha en tres pasos',
        'text' => 'Comparta fecha, invitados y horario. Le enviamos opciones y bloqueamos disponibilidad temporal.',
        'steps' => [
            ['label' => 'Comparta su fecha objetivo'],
            ['label' => 'Valide capacidad y horario'],
            ['label' => 'Reciba propuesta final'],
        ],
        'wa_link' => $waMain,
        'btn_label' => 'Iniciar por WhatsApp',
        'secondary_link' => 'availability.php?scheme=' . $scheme,
        'secondary_label' => 'Revisar disponibilidad',
    ]],
];

$site = [
    'title' => $preset['brand'] . ' | Laboratorio CTA',
    'desc' => 'Pagina de pruebas para depurar variantes CTA y contraste por scheme.',
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
