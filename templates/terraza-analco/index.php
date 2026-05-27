<?php
/**
 * Terraza Analco — Premium luxury.
 * Familia visual: #2 Premium luxury.
 * Hero oscuro, detalles dorados, tipografía serif, galería cinematográfica.
 * Secciones: 0 recicladas de Magnolia ni Arkhé. 11 secciones completamente distintas.
 * Contenido basado en datos reales del mercado mexicano (CONTENT.md).
 */
require_once __DIR__ . '/../sections/section-loader.php';

$sections = [
    /* ═══ HEADER — top bar premium + nav ═══ */
    ['type' => 'header', 'variant' => 'Header5', 'data' => [
        'phone' => '+52 33 1234 5678', 'email' => 'recepcion@terrazaanalco.com',
        'address' => 'Calle Analco 142, Col. Santa Tere, Guadalajara, Jal.',
        'social_top' => [
            ['icon' => 'bi-instagram', 'href' => '#', 'target' => true, 'label' => 'Instagram'],
            ['icon' => 'bi-facebook', 'href' => '#', 'target' => true, 'label' => 'Facebook'],
        ],
        'brand' => 'Analco', 'icon' => 'bi-gem',
        'show_wa' => true, 'wa_link' => wa_link('Hola, quiero información de Terraza Analco.'),
        'links' => [
            ['href' => '#inicio', 'label' => 'Inicio'], ['href' => '#nosotros', 'label' => 'El espacio'],
            ['href' => '#eventos', 'label' => 'Eventos'], ['href' => '#galeria', 'label' => 'Galería'],
            ['href' => '#disponibilidad', 'label' => 'Disponibilidad'], ['href' => '#resenas', 'label' => 'Reseñas'],
            ['href' => '#faq', 'label' => 'FAQ'], ['href' => '#contacto', 'label' => 'Contacto'],
        ],
    ]],

    /* ═══ HERO — cinematográfico oscuro ═══ */
    ['type' => 'hero', 'variant' => 'Hero6', 'data' => [
        'id' => 'inicio',
        'image' => placeholder('600x800', '1c1814', 'b8963e', 'Analco+Terraza'),
        'image_alt' => 'Terraza Analco — vista editorial',
        'image_badge' => 'Desde $5,500 por evento',
        'label' => 'Terraza de lujo en Guadalajara',
        'title' => 'Elegancia que<br>se siente al<br>llegar',
        'text' => 'Terraza Analco abre sus puertas en la colonia Santa Tere para recibir bodas, cenas de gala y celebraciones donde cada detalle está a la altura de la ocasión.',
        'cta_primary' => ['href' => wa_link('Hola, quiero agendar una visita privada en Terraza Analco.'), 'label' => 'Visita privada'],
        'cta_secondary' => ['href' => '#galeria', 'label' => 'Ver galería'],
    ]],

    /* ═══ ABOUT — stats grid premium ═══ */
    ['type' => 'about', 'variant' => 'About2', 'data' => [
        'id' => 'nosotros', 'scheme' => 'scheme-light',
        'label' => 'El espacio', 'title' => 'Un jardín con alma de hacienda',
        'subtitle' => 'En el corazón de Santa Tere, Analco recupera la tradición de las casonas jaliscienses con un toque contemporáneo de lujo.',
        'stats' => [
            ['number' => '220', 'unit' => 'm²', 'label' => 'Jardín arbolado'],
            ['number' => '150', 'unit' => 'pax', 'label' => 'Capacidad máxima'],
            ['number' => '12', 'unit' => 'horas', 'label' => 'Renta base'],
            ['number' => '1', 'unit' => 'evento', 'label' => 'Por día'],
        ],
        'img' => placeholder('500x400', 'f5f0e6', 'b8963e', 'Analco+Jardín'),
        'img_alt' => 'Jardín de Terraza Analco',
        'cta' => ['href' => '#contacto', 'label' => 'Agendar visita guiada'],
    ]],

    /* ═══ EVENT TYPES — cards con imágenes ═══ */
    ['type' => 'event-types', 'variant' => 'EventTypes1', 'data' => [
        'id' => 'eventos', 'scheme' => 'scheme-soft',
        'label' => 'Celebraciones', 'title' => 'Cada evento merece un escenario a su altura',
        'subtitle' => 'De la boda más íntima a la cena corporativa más exigente. Analco se transforma para cada ocasión.',
        'items' => [
            ['img' => placeholder('600x380', 'f5f0e6', 'b8963e', 'Bodas+Analco'), 'img_alt' => 'Boda en Terraza Analco', 'icon' => 'bi-heart', 'title' => 'Bodas', 'text' => 'Ceremonias bajo los árboles, recepciones con iluminación dorada y una coordinación impecable. Su boda, exactamente como la soñó.'],
            ['img' => placeholder('600x380', 'f5f0e6', 'b8963e', 'XV+Años'), 'img_alt' => 'XV Años en Terraza Analco', 'icon' => 'bi-star', 'title' => 'XV Años', 'text' => 'Una noche de ensueño con pista de baile iluminada, lounge para fotos y un jardín que parece sacado de una película.'],
            ['img' => placeholder('600x380', 'f5f0e6', 'b8963e', 'Corporativo'), 'img_alt' => 'Evento corporativo en Terraza Analco', 'icon' => 'bi-briefcase', 'title' => 'Corporativo', 'text' => 'Cenas de gala, lanzamientos de producto y eventos empresariales en un entorno que comunica exclusividad y buen gusto.'],
            ['img' => placeholder('600x380', 'f5f0e6', 'b8963e', 'Cumpleaños'), 'img_alt' => 'Cumpleaños en Terraza Analco', 'icon' => 'bi-cake2', 'title' => 'Cumpleaños', 'text' => 'Desde 30 hasta 150 invitados. El jardín se viste de fiesta con catering, barra y música en vivo.'],
            ['img' => placeholder('600x380', 'f5f0e6', 'b8963e', 'Bautizo'), 'img_alt' => 'Bautizo en Terraza Analco', 'icon' => 'bi-droplet', 'title' => 'Bautizos', 'text' => 'Celebraciones familiares diurnas con menú infantil, juegos de jardín y un ambiente sereno para grandes y pequeños.'],
            ['img' => placeholder('600x380', 'f5f0e6', 'b8963e', 'Sesión+Foto'), 'img_alt' => 'Sesión fotográfica en Terraza Analco', 'icon' => 'bi-camera', 'title' => 'Sesiones', 'text' => 'El jardín es el backdrop ideal para sesiones de compromiso, moda o retratos familiares. Luz natural todo el día.'],
        ],
    ]],

    /* ═══ GALLERY — swiper cinematográfico ═══ */
    ['type' => 'gallery', 'variant' => 'Gallery1', 'data' => [
        'id' => 'galeria', 'scheme' => 'scheme-dark',
        'label' => 'Galería', 'title' => 'Recorra Analco',
        'subtitle' => 'Descubra cada rincón de este espacio donde la luz y la piedra se encuentran.',
        'images' => [
            ['alt' => 'Entrada principal de noche', 'full' => placeholder('1200x800', '1c1814', 'b8963e', 'Entrada+Analco'), 'thumb' => placeholder('400x260', '1c1814', 'b8963e', 'Entrada')],
            ['alt' => 'Jardín iluminado al atardecer', 'full' => placeholder('1200x800', '1c1814', 'b8963e', 'Jardín+Atardecer'), 'thumb' => placeholder('400x260', '1c1814', 'b8963e', 'Atardecer')],
            ['alt' => 'Terraza techada con mobiliario', 'full' => placeholder('1200x800', '1c1814', 'b8963e', 'Terraza+Techada'), 'thumb' => placeholder('400x260', '1c1814', 'b8963e', 'Terraza')],
            ['alt' => 'Ceremonia bajo los árboles', 'full' => placeholder('1200x800', '1c1814', 'b8963e', 'Ceremonia'), 'thumb' => placeholder('400x260', '1c1814', 'b8963e', 'Ceremonia')],
            ['alt' => 'Pista de baile iluminada', 'full' => placeholder('1200x800', '1c1814', 'b8963e', 'Pista+Baile'), 'thumb' => placeholder('400x260', '1c1814', 'b8963e', 'Pista')],
            ['alt' => 'Barra principal de cantera', 'full' => placeholder('1200x800', '1c1814', 'b8963e', 'Barra+Cantera'), 'thumb' => placeholder('400x260', '1c1814', 'b8963e', 'Barra')],
            ['alt' => 'Mesa principal decorada', 'full' => placeholder('1200x800', '1c1814', 'b8963e', 'Mesa+Decorada'), 'thumb' => placeholder('400x260', '1c1814', 'b8963e', 'Mesa')],
        ],
    ]],

    /* ═══ AVAILABILITY — calendario de fechas ═══ */
    ['type' => 'availability', 'variant' => 'Availability1', 'data' => [
        'id' => 'disponibilidad', 'scheme' => 'scheme-light',
        'brand' => 'Analco',
        'label' => 'Disponibilidad', 'title' => 'Aparte su fecha con anticipación',
        'subtitle' => 'Consulte las fechas disponibles para los próximos meses. Los fines de semana se reservan con 3 meses de anticipación.',
        'dates' => [
            ['day' => '7', 'label' => 'Sáb 7 Jun', 'status' => 'available'],
            ['day' => '8', 'label' => 'Dom 8 Jun', 'status' => 'reserved'],
            ['day' => '14', 'label' => 'Sáb 14 Jun', 'status' => 'available'],
            ['day' => '15', 'label' => 'Dom 15 Jun', 'status' => 'reserved'],
            ['day' => '21', 'label' => 'Sáb 21 Jun', 'status' => 'reserved'],
            ['day' => '22', 'label' => 'Dom 22 Jun', 'status' => 'available'],
            ['day' => '28', 'label' => 'Sáb 28 Jun', 'status' => 'available'],
            ['day' => '29', 'label' => 'Dom 29 Jun', 'status' => 'available'],
            ['day' => '5', 'label' => 'Sáb 5 Jul', 'status' => 'available'],
            ['day' => '6', 'label' => 'Dom 6 Jul', 'status' => 'reserved'],
            ['day' => '12', 'label' => 'Sáb 12 Jul', 'status' => 'available'],
            ['day' => '13', 'label' => 'Dom 13 Jul', 'status' => 'taken'],
            ['day' => '19', 'label' => 'Sáb 19 Jul', 'status' => 'reserved'],
            ['day' => '20', 'label' => 'Dom 20 Jul', 'status' => 'available'],
            ['day' => '26', 'label' => 'Sáb 26 Jul', 'status' => 'available'],
            ['day' => '27', 'label' => 'Dom 27 Jul', 'status' => 'available'],
        ],
        'wa_link' => wa_link('Hola, quiero consultar disponibilidad para una fecha en Terraza Analco.'),
        'wa_label' => 'Consultar disponibilidad por WhatsApp',
    ]],

    /* ═══ TESTIMONIALS — chat bubbles con avatares ═══ */
    ['type' => 'testimonials', 'variant' => 'Testimonials4', 'data' => [
        'id' => 'resenas', 'scheme' => 'scheme-soft',
        'label' => 'Reseñas', 'title' => 'Lo que vivieron en Analco',
        'subtitle' => 'Historias reales de quienes ya confiaron en nosotros para sus momentos más importantes.',
        'items' => [
            ['avatar' => placeholder('100x100', 'b8963e', 'fff', 'RG'), 'author' => 'Regina y Gerardo C.', 'date' => 'Marzo 2026', 'stars' => 5, 'text' => 'Casarnos en Analco fue la mejor decisión. El jardín iluminado de noche es mágico. Cada detalle —desde las copas hasta los centros de mesa— refleja un cuidado que no encontramos en ningún otro venue de Guadalajara.', 'event' => 'Boda · 120 invitados'],
            ['avatar' => placeholder('100x100', 'd4a853', '1c1814', 'CR'), 'author' => 'Carlos R.', 'date' => 'Febrero 2026', 'stars' => 5, 'text' => 'Organicé una cena de gala para 80 ejecutivos. La coordinación fue milimétrica: desde la llegada del valet parking hasta el último café. Varios asistentes me pidieron el contacto para sus propios eventos.', 'event' => 'Cena corporativa · 80 invitados'],
            ['avatar' => placeholder('100x100', 'b8963e', 'fff', 'MP'), 'author' => 'Mariana P. y familia', 'date' => 'Enero 2026', 'stars' => 5, 'text' => 'Los XV de mi hija fueron de película. El equipo entendió exactamente el estilo que buscábamos. La pista de baile, la decoración, la barra... todo impecable. Mis amigas ya preguntaron por el teléfono.', 'event' => 'XV Años · 100 invitados'],
            ['avatar' => placeholder('100x100', '8c6d2a', 'fff', 'LR'), 'author' => 'Laura y familia', 'date' => 'Diciembre 2025', 'stars' => 4, 'text' => 'Celebramos el bautizo de nuestro bebé un domingo al mediodía. El jardín estaba precioso, los niños corrieron libres y los abuelos disfrutaron la terraza techada. El menú infantil fue un acierto.', 'event' => 'Bautizo · 60 invitados'],
        ],
    ]],

    /* ═══ CTA — bloque centrado premium ═══ */
    ['type' => 'cta', 'variant' => 'CTA1', 'data' => [
        'title' => 'Reserve su fecha sin compromiso',
        'text' => 'Agende una visita privada. Recorra el jardín, conozca la terraza techada, la cocina equipada y la barra de cantera. Le preparamos una propuesta personalizada en menos de 24 horas.',
        'wa_link' => wa_link('Hola, quiero agendar una visita privada para conocer Terraza Analco.'),
        'btn_label' => 'Reservar visita por WhatsApp',
    ]],

    /* ═══ FAQ — accordion ═══ */
    ['type' => 'faq', 'variant' => 'FAQ1', 'data' => [
        'id' => 'faq', 'scheme' => 'scheme-light',
        'label' => 'Preguntas frecuentes', 'title' => 'Resolvemos sus dudas',
        'subtitle' => 'Lo que más nos preguntan antes de apartar una fecha en Analco.',
        'items' => [
            ['icon' => 'bi-calendar-check', 'q' => '¿Con cuánto tiempo debo reservar?', 'a' => 'Recomendamos apartar con 3 meses de anticipación para sábados y temporada alta (marzo-junio, octubre-diciembre). Para eventos entre semana o fechas cercanas, consulte disponibilidad: a veces tenemos cancelaciones.'],
            ['icon' => 'bi-cash', 'q' => '¿Qué incluye la renta y cuál es el costo?', 'a' => 'La renta base de 12 horas incluye jardín, terraza techada, mobiliario completo, iluminación arquitectónica, cocina equipada, baños, barra de cantera y estacionamiento con vigilancia. El costo varía según temporada y número de invitados. Solicite cotización sin compromiso.'],
            ['icon' => 'bi-people', 'q' => '¿Capacidad máxima?', 'a' => '150 personas sentadas. El jardín principal cubre 120 invitados, la terraza techada 80, y hay áreas de lounge para 30 adicionales. Contamos con mobiliario para todas las configuraciones.'],
            ['icon' => 'bi-cloud-rain', 'q' => '¿Qué pasa si llueve?', 'a' => 'La terraza techada cubre 80 invitados sin problema. Tenemos cortinas laterales transparentes que protegen del viento sin perder la vista al jardín. En caso de clima severo, reagendamos sin costo.'],
            ['icon' => 'bi-music-note-beamed', 'q' => '¿Restricciones de horario y música?', 'a' => 'Música en vivo o DJ hasta la 1:00 AM en sábados, 12:00 AM entre semana. Después se permite música ambiental a volumen moderado hasta las 2 AM. Contamos con sistema Bose y DJ booth equipado.'],
            ['icon' => 'bi-truck', 'q' => '¿Puedo traer mis propios proveedores?', 'a' => 'Sin restricciones. Puede contratar su propio banquete, florista, fotógrafo y DJ. Si lo prefiere, compartimos nuestra lista de proveedores recomendados con quienes trabajamos frecuentemente y ofrecen tarifa preferencial.'],
        ],
        'cta_text' => '¿Listo para reservar? Escríbanos.',
        'cta_link' => wa_link('Hola, quiero apartar una fecha en Terraza Analco.'),
        'cta_label' => 'Reservar por WhatsApp',
    ]],

    /* ═══ CONTACT — form + info lateral ═══ */
    ['type' => 'contact', 'variant' => 'Contact2', 'data' => [
        'id' => 'contacto', 'scheme' => 'scheme-soft',
        'label' => 'Contacto', 'title' => 'Platiquemos su evento ideal',
        'subtitle' => 'Déjenos sus datos y en menos de 12 horas le preparamos una propuesta personalizada sin costo ni compromiso.',
        'btn_label' => 'Solicitar cotización',
        'info_title' => 'Información de contacto',
        'fields' => [
            ['id' => 'nombre', 'label' => 'Nombre completo', 'placeholder' => 'Su nombre', 'col' => 'col-md-6', 'type' => 'text', 'required' => true],
            ['id' => 'telefono', 'label' => 'Teléfono', 'placeholder' => '33 1234 5678', 'col' => 'col-md-6', 'type' => 'tel', 'required' => true],
            ['id' => 'tipo', 'label' => 'Tipo de evento', 'col' => 'col-md-6', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione una opción', 'selected' => true, 'disabled' => true],
                ['label' => 'Boda'], ['label' => 'XV Años'], ['label' => 'Corporativo'],
                ['label' => 'Bautizo'], ['label' => 'Cumpleaños'], ['label' => 'Otro'],
            ]],
            ['id' => 'fecha', 'label' => 'Fecha tentativa', 'col' => 'col-md-6', 'type' => 'date'],
            ['id' => 'invitados', 'label' => 'Número de invitados', 'col' => 'col-md-6', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione un rango', 'selected' => true, 'disabled' => true],
                ['label' => 'Menos de 50'], ['label' => '50 a 80'], ['label' => '80 a 120'], ['label' => '120 a 150'],
            ]],
            ['id' => 'mensaje', 'label' => 'Mensaje', 'type' => 'textarea', 'placeholder' => 'Cuéntenos cómo imagina su evento en Analco.', 'col' => 'col-12', 'rows' => 3],
        ],
        'info_items' => [
            ['icon' => 'bi-geo-alt', 'label' => 'Dirección', 'text' => 'Calle Analco 142, Col. Santa Tere, Guadalajara, Jalisco'],
            ['icon' => 'bi-telephone', 'label' => 'Teléfono', 'text' => '+52 33 1234 5678'],
            ['icon' => 'bi-envelope', 'label' => 'Correo', 'text' => 'recepcion@terrazaanalco.com'],
            ['icon' => 'bi-clock', 'label' => 'Horario de visitas', 'text' => 'Lunes a sábado, 10:00 AM a 6:00 PM'],
        ],
        'info_image' => placeholder('500x300', 'f5f0e6', 'b8963e', 'Visita+Analco'),
        'info_image_alt' => 'Agende su visita a Terraza Analco',
        'info_cta' => ['href' => wa_link('Hola, quiero agendar una visita para conocer Terraza Analco.'), 'label' => 'Agendar visita', 'target' => true],
    ]],

    /* ═══ FOOTER — compacto premium ═══ */
    ['type' => 'footer', 'variant' => 'Footer5', 'data' => [
        'logo' => 'Terraza Analco', 'logo_icon' => 'bi-gem',
        'copyright' => '&copy; 2026 Terraza Analco. Todos los derechos reservados.',
        'social' => [
            ['icon' => 'bi-instagram', 'href' => '#', 'target' => true, 'label' => 'Instagram'],
            ['icon' => 'bi-facebook', 'href' => '#', 'target' => true, 'label' => 'Facebook'],
            ['icon' => 'bi-whatsapp', 'href' => wa_link('Hola, quiero información de Terraza Analco.'), 'target' => true, 'label' => 'WhatsApp'],
        ],
    ]],
];

$site = [
    'title' => 'Terraza Analco | Jardín de lujo para eventos en Guadalajara',
    'desc' => 'Terraza Analco — Jardín premium para bodas, XV años, cenas de gala y eventos corporativos en Santa Tere, Guadalajara. Elegancia, privacidad y servicio impecable.',
    'fonts' => 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap',
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
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/glightbox@3.3.0/dist/css/glightbox.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body class="theme-analco">

<?php render_template($sections); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox@3.3.0/dist/js/glightbox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
