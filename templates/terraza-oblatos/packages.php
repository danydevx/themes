<?php
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

$packages = [
    [
        'name' => 'Paquete Esencial',
        'tab_label' => 'Esencial',
        'capacity' => '80 personas',
        'tagline' => 'Base operativa para evento nocturno.',
        'price' => '8,900',
        'duration' => '10 horas',
        'extras_gratis' => ['1 hora para montaje', 'Iluminacion base', 'Limpieza final'],
        'cta' => ['href' => wa_link('Hola, me interesa el Paquete Esencial.'), 'label' => 'Solicitar detalle', 'target' => '_blank'],
        'sections' => [
            ['title' => 'Incluye', 'icon' => 'bi-check2-circle', 'items' => ['Area cubierta', 'Zona jardin', 'Cocina funcional']],
            ['title' => 'Horario', 'icon' => 'bi-clock-history', 'items' => ['17:00 a 03:00', 'Extension sujeta a disponibilidad']],
        ],
    ],
    [
        'name' => 'Paquete Plus',
        'tab_label' => 'Plus',
        'capacity' => '120 personas',
        'tagline' => 'Mayor capacidad y operacion extendida.',
        'price' => '12,500',
        'duration' => '12 horas',
        'highlight' => 'Mas solicitado',
        'badge' => 'Top',
        'extras_gratis' => ['1 hora para montaje', 'Zona de proyeccion', 'Soporte logistica basica', 'Checklist previo'],
        'cta' => ['href' => wa_link('Hola, quiero cotizar el Paquete Plus.'), 'label' => 'Cotizar Plus', 'target' => '_blank'],
        'sections' => [
            ['title' => 'Incluye', 'icon' => 'bi-stars', 'items' => ['Area cubierta + jardin', 'Alberca iluminada', 'Parrilla y cocina']],
            ['title' => 'Operacion', 'icon' => 'bi-people', 'items' => ['Control de accesos', 'Flujo por zonas', 'Cierre coordinado']],
        ],
    ],
];

$sections = [
    ['type' => 'packages', 'variant' => 'Packages1', 'data' => [
        'id' => 'packages1',
        'scheme' => 'scheme-light',
        'label' => 'Packages1 · Light',
        'title' => 'Compare paquetes por pestañas',
        'subtitle' => 'Validacion de tabs, precios y bloques de detalle.',
        'packages' => $packages,
    ]],
    ['type' => 'packages', 'variant' => 'Packages2', 'data' => [
        'id' => 'packages2',
        'scheme' => 'scheme-color',
        'label' => 'Packages2 · Color',
        'title' => 'Paquetes por etapas de decision',
        'subtitle' => 'Validacion de cards con steps y estados activos.',
        'packages' => $packages,
        'note' => 'Precios de referencia sujetos a fecha y condiciones del evento.',
    ]],
    ['type' => 'packages', 'variant' => 'Packages3', 'data' => [
        'id' => 'packages3',
        'scheme' => 'scheme-linear',
        'label' => 'Packages3 · Linear',
        'title' => 'Tarjetas horizontales de precio',
        'subtitle' => 'Prueba de contraste en linear para precios y meta.',
        'packages' => $packages,
        'note' => 'Paquetes ajustables para 80+ invitados y horario nocturno.',
    ]],
    ['type' => 'packages', 'variant' => 'Packages4', 'data' => [
        'id' => 'packages4',
        'scheme' => 'scheme-dark',
        'label' => 'Packages4 · Dark',
        'title' => 'Comparativo de paquetes por caracteristicas',
        'subtitle' => 'Estructura de tabla para evaluar diferencias rapidamente.',
        'plans' => [
            ['key' => 'ess', 'name' => 'Esencial', 'price' => '$8,900', 'cta' => ['href' => wa_link('Hola, me interesa el plan Esencial.'), 'label' => 'Solicitar Esencial']],
            ['key' => 'plus', 'name' => 'Plus', 'price' => '$12,500', 'cta' => ['href' => wa_link('Hola, me interesa el plan Plus.'), 'label' => 'Solicitar Plus']],
            ['key' => 'prem', 'name' => 'Premium', 'price' => '$16,800', 'cta' => ['href' => wa_link('Hola, me interesa el plan Premium.'), 'label' => 'Solicitar Premium']],
        ],
        'features' => [
            ['label' => 'Capacidad maxima', 'ess' => '80', 'plus' => '120', 'prem' => '150'],
            ['label' => 'Duracion nocturna', 'ess' => '10h', 'plus' => '12h', 'prem' => '12h'],
            ['label' => 'Area cubierta incluida', 'ess' => 'yes', 'plus' => 'yes', 'prem' => 'yes'],
            ['label' => 'Zona de proyeccion', 'ess' => 'no', 'plus' => 'yes', 'prem' => 'yes'],
            ['label' => 'Soporte logistica', 'ess' => 'no', 'plus' => 'yes', 'prem' => 'yes'],
            ['label' => 'Checklist previo', 'ess' => 'yes', 'plus' => 'yes', 'prem' => 'yes'],
        ],
    ]],
];

$site = [
    'title' => $preset['brand'] . ' | Laboratorio Packages',
    'desc' => 'Pagina de pruebas para depurar variantes de paquetes y contraste por scheme.',
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
