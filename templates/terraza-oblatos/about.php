<?php
/**
 * Terraza Oblatos — About Lab
 * Página de depuración para variantes About.
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

$sections = [
    ['type' => 'about', 'variant' => 'About1', 'data' => [
        'id' => 'about1',
        'scheme' => 'scheme-light',
        'label' => 'About1',
        'title' => 'Presentación clásica de la terraza',
        'subtitle' => 'Bloque de introducción con imagen principal y beneficios.',
        'img' => placeholder('900x650', '344e41', 'a3b18a', 'About1+Oblatos'),
        'img_alt' => 'Vista general de Terraza Oblatos',
        'benefits' => [
            ['icon' => 'bi-check-circle-fill', 'title' => 'Ubicación accesible', 'text' => 'Llegada sencilla desde vialidades principales de la ciudad.'],
            ['icon' => 'bi-check-circle-fill', 'title' => 'Espacios flexibles', 'text' => 'Áreas adaptables para eventos familiares y sociales.'],
            ['icon' => 'bi-check-circle-fill', 'title' => 'Atención cercana', 'text' => 'Acompañamiento desde la visita hasta el día del evento.'],
        ],
    ]],

    ['type' => 'about', 'variant' => 'About2', 'data' => [
        'id' => 'about2',
        'scheme' => 'scheme-soft',
        'label' => 'About2',
        'title' => 'Datos clave del espacio',
        'subtitle' => 'Resumen rápido con métricas y capacidades del recinto.',
        'stats' => [
            ['number' => '150', 'unit' => 'pax', 'label' => 'Capacidad total'],
            ['number' => '400', 'unit' => 'm²', 'label' => 'Jardín abierto'],
            ['number' => '12', 'unit' => 'h', 'label' => 'Renta máxima'],
            ['number' => '40', 'unit' => 'autos', 'label' => 'Estacionamiento'],
            ['number' => '30°', 'unit' => 'C', 'label' => 'Alberca climatizada'],
            ['number' => '2', 'unit' => 'áreas', 'label' => 'Cubierta + jardín'],
        ],
        'img' => placeholder('900x460', '588157', 'dad7cd', 'About2+Stats'),
        'img_alt' => 'Terraza y jardín de Oblatos',
        'cta' => ['href' => '#', 'label' => 'Solicitar informe'],
    ]],

    ['type' => 'about', 'variant' => 'About3', 'data' => [
        'id' => 'about3',
        'scheme' => 'scheme-light',
        'label' => 'About3',
        'title' => 'Evolución del proyecto',
        'subtitle' => 'Línea de tiempo con hitos de mejora del espacio.',
        'milestones' => [
            ['title' => 'Inicio del jardín', 'text' => 'Diseño base de áreas verdes y terraza principal.', 'icon' => 'bi-tree', 'img' => placeholder('700x500', '3a5a40', 'a3b18a', 'Hito+1')],
            ['title' => 'Zona de alberca', 'text' => 'Integración de alberca climatizada y área de descanso.', 'icon' => 'bi-droplet-fill', 'img' => placeholder('700x500', '344e41', 'a3b18a', 'Hito+2')],
            ['title' => 'Actualización de servicios', 'text' => 'Mejoras en mobiliario, iluminación y operación.', 'icon' => 'bi-lightbulb', 'img' => placeholder('700x500', '588157', 'dad7cd', 'Hito+3')],
        ],
    ]],

    ['type' => 'about', 'variant' => 'About4', 'data' => [
        'id' => 'about4',
        'scheme' => 'scheme-dark',
        'label' => 'About4',
        'title' => 'Recorrido por áreas estratégicas',
        'subtitle' => 'Formato alternado para destacar espacios y beneficios.',
        'items' => [
            ['number' => '01', 'title' => 'Acceso principal', 'text' => 'Ingreso ordenado para invitados y proveedores con control de llegada.', 'img' => placeholder('900x650', '344e41', 'a3b18a', 'Acceso'), 'features' => ['Control de acceso', 'Señalización clara']],
            ['number' => '02', 'title' => 'Terraza techada', 'text' => 'Área cubierta para mantener continuidad del evento en cualquier clima.', 'img' => placeholder('900x650', '3a5a40', 'dad7cd', 'Terraza'), 'features' => ['Capacidad flexible', 'Buena ventilación']],
            ['number' => '03', 'title' => 'Jardín y alberca', 'text' => 'Combinación visual que favorece celebraciones sociales y familiares.', 'img' => placeholder('900x650', '588157', 'dad7cd', 'Jardin+Alberca'), 'features' => ['Ambiente relajado', 'Fotografías atractivas']],
        ],
    ]],

    ['type' => 'about', 'variant' => 'About5', 'data' => [
        'id' => 'about5',
        'scheme' => 'scheme-soft',
        'label' => 'About5',
        'title' => 'Galería editorial del espacio',
        'subtitle' => 'Composición visual para evaluar ritmo y jerarquía de contenido.',
        'images' => [
            ['src' => placeholder('560x760', '344e41', 'a3b18a', 'About5+Img1'), 'alt' => 'Vista vertical del jardín'],
            ['src' => placeholder('560x360', '588157', 'dad7cd', 'About5+Img2'), 'alt' => 'Vista lateral de la terraza'],
            ['src' => placeholder('560x360', '3a5a40', 'a3b18a', 'About5+Img3'), 'alt' => 'Área de convivio'],
        ],
        'intro' => 'Cada área se diseña para que su celebración fluya de forma natural y memorable.',
        'features' => [
            ['icon' => 'bi-stars', 'label' => 'Ambiente festivo', 'text' => 'Composición visual enfocada en convivencia.'],
            ['icon' => 'bi-camera', 'label' => 'Puntos fotográficos', 'text' => 'Ángulos listos para recuerdos del evento.'],
            ['icon' => 'bi-shield-check', 'label' => 'Operación confiable', 'text' => 'Coordinación y logística clara.'],
            ['icon' => 'bi-people', 'label' => 'Confort para invitados', 'text' => 'Espacios amplios y cómodos.'],
        ],
        'cta' => ['href' => '#', 'label' => 'Ver disponibilidad', 'icon' => 'bi-calendar-check'],
    ]],

    ['type' => 'about', 'variant' => 'About6', 'data' => [
        'id' => 'about6',
        'scheme' => 'scheme-light',
        'label' => 'About6',
        'title' => 'Estadísticas + atributos',
        'subtitle' => 'Variante combinada para depurar legibilidad y jerarquías.',
        'stats' => [
            ['number' => '150', 'label' => 'Invitados', 'unit' => 'máximo'],
            ['number' => '12', 'label' => 'Horas', 'unit' => 'de evento'],
            ['number' => '40', 'label' => 'Autos', 'unit' => 'estacionamiento'],
            ['number' => '2', 'label' => 'Áreas', 'unit' => 'principales'],
        ],
        'img' => placeholder('900x650', '344e41', 'a3b18a', 'About6+Imagen'),
        'img_alt' => 'Vista integral de áreas sociales',
        'img_badge' => 'Configuración flexible',
        'features' => [
            ['icon' => 'bi-check2-square', 'title' => 'Montajes variados', 'text' => 'Bodas, cumpleaños y eventos empresariales.'],
            ['icon' => 'bi-check2-square', 'title' => 'Soporte operativo', 'text' => 'Acompañamiento durante la ejecución.'],
            ['icon' => 'bi-check2-square', 'title' => 'Conectividad', 'text' => 'Acceso y logística simplificados.'],
            ['icon' => 'bi-check2-square', 'title' => 'Ambiente familiar', 'text' => 'Espacios pensados para convivir.'],
        ],
        'cta' => ['href' => '#', 'label' => 'Agendar visita'],
    ]],

    ['type' => 'about', 'variant' => 'About7', 'data' => [
        'id' => 'about7',
        'scheme' => 'scheme-color',
        'label' => 'About7',
        'title' => 'Versión actual del template Oblatos',
        'subtitle' => 'Comparativo final contra la variante activa del index principal.',
        'stats' => [
            ['number' => '12', 'label' => 'm de largo', 'unit' => 'alberca'],
            ['number' => '6', 'label' => 'm de ancho', 'unit' => 'alberca'],
            ['number' => '30°', 'label' => 'temp.', 'unit' => 'climatizada'],
            ['number' => '150', 'label' => 'invitados', 'unit' => 'máx.'],
        ],
        'img' => placeholder('900x650', '344e41', 'a3b18a', 'About7+Oblatos'),
        'img_alt' => 'Detalle de alberca de Oblatos',
        'img_badge' => 'Bloque activo',
        'features' => [
            ['icon' => 'bi-thermometer-half', 'title' => 'Climatización', 'text' => 'Uso constante durante todo el año.'],
            ['icon' => 'bi-lightbulb', 'title' => 'Iluminación', 'text' => 'Escenas para eventos diurnos y nocturnos.'],
            ['icon' => 'bi-water', 'title' => 'Zona acuática', 'text' => 'Área protagonista en celebraciones.'],
            ['icon' => 'bi-umbrella', 'title' => 'Descanso', 'text' => 'Camastros y zonas de estancia.'],
        ],
        'cta' => ['href' => '#', 'label' => 'Volver al inicio'],
    ]],

    ['type' => 'about', 'variant' => 'About8', 'data' => [
        'id' => 'about8',
        'scheme' => 'scheme-color',
        'label' => 'About8',
        'title' => 'Lectura por franjas narrativas',
        'subtitle' => 'Variante completamente distinta para evaluar composición, contraste e iconografía en bloques secuenciales.',
        'img' => placeholder('900x1100', '344e41', 'a3b18a', 'About8+Story'),
        'img_alt' => 'Perspectiva lateral de la alberca y jardín',
        'img_badge' => 'Nueva variante',
        'items' => [
            ['icon' => 'bi-compass', 'title' => 'Acceso y ubicación', 'text' => 'Conectividad práctica desde vías principales y punto de llegada claro para invitados.'],
            ['icon' => 'bi-layout-text-window-reverse', 'title' => 'Distribución funcional', 'text' => 'Transición natural entre alberca, jardín y área cubierta para que el evento fluya sin fricción.'],
            ['icon' => 'bi-stars', 'title' => 'Atmósfera visual', 'text' => 'Iluminación y acabados diseñados para mantener un ambiente festivo durante toda la jornada.'],
            ['icon' => 'bi-clipboard-check', 'title' => 'Operación controlada', 'text' => 'Montaje, logística y cierre con acompañamiento para que usted se enfoque en sus invitados.'],
        ],
        'stats' => [
            ['number' => '150', 'label' => 'invitados'],
            ['number' => '12 h', 'label' => 'renta'],
            ['number' => '40', 'label' => 'autos'],
            ['number' => '2', 'label' => 'áreas'],
        ],
        'cta' => ['href' => '#', 'label' => 'Solicitar visita'],
    ]],
];

$site = [
    'title' => $preset['brand'] . ' | Laboratorio About',
    'desc' => 'Página de pruebas para depurar todas las variantes About del sistema de secciones.',
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
