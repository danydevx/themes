<?php
/**
 * Terraza Alhelí — Romántico social (#4).
 * Familia visual: Romántico Social (diferente de Las Flores y Girasoles).
 * Colores: rosa empolvado (#c49b8a) + lavanda + blanco cálido.
 * Tipografía: Playfair Display para títulos, Inter para cuerpo.
 * Diferencia: Hero9 split vertical, About6 stats+features,
 *   EventTypes5 icon bg, Gallery6 mosaic, Testimonials7 quote cards.
 */
require_once __DIR__ . '/../sections/section-loader.php';

$sections = [
    /* ═══ HEADER — sticky con blur ═══ */
    ['type' => 'header', 'variant' => 'Header2', 'data' => [
        'brand' => 'Alhelí', 'icon' => 'bi-flower1',
        'dark' => true,
        'show_wa' => true, 'wa_link' => wa_link('Hola, quiero información de Terraza Alhelí.'),
        'links' => [
            ['href' => '#inicio', 'label' => 'Inicio'],
            ['href' => '#nosotros', 'label' => 'El espacio'],
            ['href' => '#eventos', 'label' => 'Eventos'],
            ['href' => '#galeria', 'label' => 'Galería'],
            ['href' => '#precios', 'label' => 'Paquetes'],
            ['href' => '#resenas', 'label' => 'Reseñas'],
            ['href' => '#faq', 'label' => 'FAQ'],
            ['href' => '#contacto', 'label' => 'Contacto'],
        ],
    ]],

    /* ═══ HERO9 — split vertical con collage ═══ */
    ['type' => 'hero', 'variant' => 'Hero9', 'data' => [
        'id' => 'inicio',
        'overline' => 'Terraza de eventos · Zapopan',
        'title' => 'Un jardín que<br>respira elegancia<br>y romanticismo',
        'text' => 'Terraza Alhelí es el escenario perfecto para bodas, XV años y celebraciones íntimas donde cada detalle refleja el amor por la belleza.',
        'features' => [
            ['icon' => 'bi-flower1', 'label' => 'Jardín de 600 m²'],
            ['icon' => 'bi-people', 'label' => 'Hasta 120 invitados'],
            ['icon' => 'bi-clock', 'label' => 'Renta hasta 12 horas'],
        ],
        'cta_primary' => ['href' => wa_link('Hola, quiero agendar una visita privada en Terraza Alhelí.'), 'label' => 'Reservar visita'],
        'cta_secondary' => ['href' => '#nosotros', 'label' => 'Conocer el espacio'],
        'images' => [
            ['src' => placeholder('400x400', 'f5f0ea', 'c49b8a', 'Terraza+Alhelí+Jardín'), 'alt' => 'Jardín principal'],
            ['src' => placeholder('400x200', 'f0e8e0', 'c49b8a', 'Terraza+Alhelí+Flores'), 'alt' => 'Detalle floral'],
            ['src' => placeholder('400x200', 'e8dcd0', 'a47d6b', 'Terraza+Alhelí+Decoración'), 'alt' => 'Decoración'],
        ],
        'badge' => 'Desde $28,000 MXN',
    ]],

    /* ═══ ABOUT6 — stats + features grid ═══ */
    ['type' => 'about', 'variant' => 'About6', 'data' => [
        'id' => 'nosotros', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'El espacio', 'title' => 'Elegancia en cada rincón',
        'subtitle' => 'Terraza Alhelí abrió sus puertas con la visión de crear un refugio donde el romance y la sofisticación se encuentran naturalmente.',
        'stats' => [
            ['number' => '600', 'label' => 'm² de jardín', 'unit' => 'arbolado'],
            ['number' => '120', 'label' => 'invitados máx.', 'unit' => 'sentados'],
            ['number' => '12', 'label' => 'horas', 'unit' => 'de renta'],
            ['number' => '1', 'label' => 'evento', 'unit' => 'por día'],
        ],
        'img' => placeholder('800x600', 'f5f0ea', 'c49b8a', 'Alhelí+Espacio'),
        'img_alt' => 'Terraza Alhelí vista del jardín',
        'img_badge' => 'Jardín principal',
        'features' => [
            ['icon' => 'bi-tree', 'title' => 'Jardín paisajístico', 'text' => '600 m² de jardín con árboles matures, senderos de piedra y áreas de sombra naturales.'],
            ['icon' => 'bi-shield-check', 'title' => 'Privacidad total', 'text' => 'Un solo evento por día. Usted y sus invitados son nuestra prioridad absoluta.'],
            ['icon' => 'bi-moon-stars', 'title' => 'Iluminación nocturna', 'text' => 'Sistema de luces cálidas LED entre los árboles y guirnaldas sobre la terraza.'],
            ['icon' => 'bi-geo-alt', 'title' => 'Zapopan norte', 'text' => 'Fácil acceso desde Av. Patria y Periférico. Estacionamiento para 40 vehículos.'],
        ],
        'cta' => ['href' => '#contacto', 'label' => 'Agendar visita guiada'],
    ]],

    /* ═══ EVENT TYPES — icon background cards ═══ */
    ['type' => 'event-types', 'variant' => 'EventTypes5', 'data' => [
        'id' => 'eventos', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Eventos', 'title' => 'Cada celebración tiene su lugar',
        'subtitle' => 'De la boda más íntima a la reunión familiar más grande. Nuestro espacio se transforma para cada ocasión.',
        'items' => [
            ['icon' => 'bi-heart', 'title' => 'Bodas', 'text' => 'Ceremonias al aire libre bajo los árboles, recepciones con iluminación romántica y cada rincón diseñado para el romance.', 'price' => 'Desde $28,000', 'price_note' => 'evento'],
            ['icon' => 'bi-star', 'title' => 'XV Años', 'text' => 'Una noche de ensueño con pista de baile, área para fotos y una decoración que refleja la personalidad de la quinceañera.', 'price' => 'Desde $22,000', 'price_note' => 'evento'],
            ['icon' => 'bi-droplet', 'title' => 'Bautizos', 'text' => 'Celebraciones familiares diurnas en un ambiente sereno, rodeado de naturaleza y con todas las comodidades para grandes y pequeños.'],
            ['icon' => 'bi-cake2', 'title' => 'Cumpleaños', 'text' => 'Desde reuniones íntimas de 30 personas hasta grandes celebraciones. El jardín se viste de fiesta según su estilo.'],
            ['icon' => 'bi-briefcase', 'title' => 'Corporativo', 'text' => 'Cenas de gala, lanzamientos y eventos empresariales en un entorno que comunica sofisticación y buen gusto. Proyector 4K disponible.'],
            ['icon' => 'bi-camera', 'title' => 'Sesiones fotográficas', 'text' => 'El jardín es el backdrop natural perfecto para sesiones de compromiso, moda o retratos familiares. Luz natural todo el día.'],
        ],
        'cta' => ['href' => '#precios', 'label' => 'Ver paquetes'],
    ]],

    /* ═══ SERVICES — large icons with numbers ═══ */
    ['type' => 'services', 'variant' => 'Services3', 'data' => [
        'id' => 'servicios', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Instalaciones', 'title' => 'Todo lo que necesita para su evento',
        'subtitle' => 'Cada detalle está cuidado para que usted solo se preocupe por disfrutar junto a sus invitados.',
        'items' => [
            ['title' => 'Iluminación ambiental', 'desc' => 'Sistema de luces LED cálidas entre los árboles, guirnaldas sobre la terraza y velas en cada mesa.'],
            ['title' => 'Cocina equipada', 'desc' => 'Cocina profesional con estufa, horno, refrigerador y área de servicio para catering.'],
            ['title' => 'Mobiliario de diseño', 'desc' => 'Mesas redondas de madera, sillas acojinadas y mantelería de lino. Cristalería completa.'],
            ['title' => 'Sonido profesional', 'desc' => 'Sistema de audio Bose con micrófono inalámbrico. Conecte su lista de reproducción por Bluetooth.'],
            ['title' => 'Floristería interna', 'desc' => 'Arreglos florales cultivados en nuestro propio vivero. Ramos, centros de mesa y decoración personalizada.'],
            ['title' => 'Coordinación de evento', 'desc' => 'Un coordinador dedicado el día de su evento. Recibe proveedores, supervisa montaje y se asegura de que todo fluya.'],
        ],
    ]],

    /* ═══ GALLERY — mosaic grid ═══ */
    ['type' => 'gallery', 'variant' => 'Gallery6', 'data' => [
        'id' => 'galeria', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Galería', 'title' => 'Recorra cada rincón',
        'subtitle' => 'Descubra cómo Alhelí se transforma para cada celebración.',
        'images' => [
            ['alt' => 'Ceremonia bajo los árboles', 'full' => placeholder('800x600', 'f5f0ea', 'c49b8a', 'Ceremonia+Alhelí'), 'thumb' => placeholder('400x400', 'f5f0ea', 'c49b8a', 'Ceremonia')],
            ['alt' => 'Mesa principal decorada', 'full' => placeholder('800x600', 'f5f0ea', 'a47d6b', 'Mesa+Principal'), 'thumb' => placeholder('400x400', 'f5f0ea', 'a47d6b', 'Mesa')],
            ['alt' => 'Jardín iluminado', 'full' => placeholder('800x600', 'f0e8e0', 'c49b8a', 'Jardín+Iluminado'), 'thumb' => placeholder('400x400', 'f0e8e0', 'c49b8a', 'Jardín')],
            ['alt' => 'Área de recepción', 'full' => placeholder('800x600', 'e8dcd0', 'c49b8a', 'Recepción'), 'thumb' => placeholder('400x400', 'e8dcd0', 'c49b8a', 'Recepción')],
            ['alt' => 'Detalle floral', 'full' => placeholder('800x600', 'f5f0ea', 'a47d6b', 'Detalle+Floral'), 'thumb' => placeholder('400x400', 'f5f0ea', 'a47d6b', 'Floral')],
            ['alt' => 'Terraza techada', 'full' => placeholder('800x600', 'f0e8e0', 'c49b8a', 'Terraza+Techada'), 'thumb' => placeholder('400x400', 'f0e8e0', 'c49b8a', 'Terraza')],
        ],
        'cta_text' => 'Ver más fotos',
        'cta_link' => '#galeria',
    ]],

    /* ═══ PACKAGES — step cards with visual hierarchy ═══ */
    ['type' => 'packages', 'variant' => 'Packages2', 'data' => [
        'id' => 'paquetes', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Paquetes', 'title' => 'Elija el paquete perfecto',
        'subtitle' => 'Todos incluyen jardín, terraza techada, mobiliario, iluminación, cocina, baños, estacionamiento y coordinador.',
        'packages' => [
            ['name' => 'Esencial', 'tagline' => 'Ideal para eventos íntimos', 'price' => '22,000', 'capacity' => 'Hasta 60 invitados', 'duration' => '6 horas', 'highlight' => '',
             'extras_gratis' => ['1 hora extra para decorar', 'Kit de limpieza básico', 'Coordinador de medio turno'],
             'sections' => [
                 ['col' => 'col-md-6', 'icon' => 'bi-clock', 'title' => 'Duración', 'items' => ['6 horas de evento', 'Ampliable a 8 horas', '1 hora extra para decorar']],
                 ['col' => 'col-md-6', 'icon' => 'bi-people', 'title' => 'Capacidad', 'items' => ['Hasta 60 invitados sentados', 'Terraza techada para 40', 'Jardín para 50']],
                 ['col' => 'col-md-6', 'icon' => 'bi-chair', 'title' => 'Mobiliario', 'items' => ['Mesas redondas de madera', 'Sillas plegables acojinadas', 'Mantelería de lino blanco']],
                 ['col' => 'col-md-6', 'icon' => 'bi-lightbulb', 'title' => 'Iluminación', 'items' => ['Iluminación ambiental LED', 'Guirnaldas sobre la terraza', 'Velas en cada mesa']],
                 ['col' => 'col-md-6', 'icon' => 'bi-shield-check', 'title' => 'Servicios', 'items' => ['Cocina equipada', 'Estacionamiento', 'Coordinador de medio turno']],
                 ['col' => 'col-md-6', 'icon' => 'bi-gift', 'title' => 'Extras', 'items' => ['1 hora extra para decorar', 'Kit de limpieza básico', 'Botiquín de primeros auxilios']],
             ],
             'cta' => ['href' => '#contacto', 'label' => 'Cotizar Esencial']],
            ['name' => 'Alhelí', 'tagline' => 'El favorito para bodas y XV años', 'price' => '38,000', 'capacity' => 'Hasta 100 invitados', 'duration' => '8 horas', 'highlight' => 'Más popular',
             'extras_gratis' => ['2 horas extra para decorar', 'Sonido Bose incluido', 'Coordinador dedicado todo el evento', 'Valet parking'],
             'sections' => [
                 ['col' => 'col-md-6', 'icon' => 'bi-clock', 'title' => 'Duración', 'items' => ['8 horas de evento', 'Ampliable a 10 horas', '2 horas extra para decorar']],
                 ['col' => 'col-md-6', 'icon' => 'bi-people', 'title' => 'Capacidad', 'items' => ['Hasta 100 invitados sentados', 'Terraza techada para 80', 'Jardín para 100']],
                 ['col' => 'col-md-6', 'icon' => 'bi-chair', 'title' => 'Mobiliario', 'items' => ['Mesas de diseño premium', 'Sillas acojinadas con cubresillas', 'Mantelería de lino premium']],
                 ['col' => 'col-md-6', 'icon' => 'bi-music-note-beamed', 'title' => 'Audio', 'items' => ['Sistema Bose 4 zonas', 'Micrófono inalámbrico', 'Bluetooth para playlist']],
                 ['col' => 'col-md-6', 'icon' => 'bi-lightbulb', 'title' => 'Iluminación', 'items' => ['Iluminación arquitectónica', 'Guirnaldas + LED entre árboles', 'Focos decorativos']],
                 ['col' => 'col-md-6', 'icon' => 'bi-shield-check', 'title' => 'Servicios', 'items' => ['Cocina + refrigeración', 'Valet parking', 'Coordinador dedicado']],
                 ['col' => 'col-md-6', 'icon' => 'bi-flower1', 'title' => 'Extras', 'items' => ['Sonido Bose incluido', 'Área social exterior', 'Botiquín + extintor']],
                 ['col' => 'col-md-6', 'icon' => 'bi-gift', 'title' => 'Extras', 'items' => ['2 horas extra para decorar', 'Decoración base incluida', 'Kit de limpieza premium']],
             ],
             'cta' => ['href' => '#contacto', 'label' => 'Cotizar Alhelí']],
            ['name' => 'Gala', 'tagline' => 'La experiencia completa sin límites', 'price' => '58,000', 'capacity' => 'Hasta 120 invitados', 'duration' => '12 horas', 'highlight' => '',
             'extras_gratis' => ['4 horas extra para decorar', 'DJ y sonido profesional', 'Floristería interna', 'Proyector 4K + pantalla', 'Fotógrafo previo al evento', 'Valet parking + vigilancia'],
             'sections' => [
                 ['col' => 'col-md-6', 'icon' => 'bi-clock', 'title' => 'Duración', 'items' => ['12 horas de evento', 'Ampliable a 14 horas', '4 horas extra para decorar']],
                 ['col' => 'col-md-6', 'icon' => 'bi-people', 'title' => 'Capacidad', 'items' => ['Hasta 120 invitados sentados', 'Terraza techada completa', 'Jardín + áreas sociales']],
                 ['col' => 'col-md-6', 'icon' => 'bi-chair', 'title' => 'Mobiliario', 'items' => ['Mobiliario de diseño exclusivo', 'Sillas tapizadas', 'Mantelería y centros de mesa']],
                 ['col' => 'col-md-6', 'icon' => 'bi-music-note-beamed', 'title' => 'Audio + DJ', 'items' => ['Sistema Bose profesional', 'Cabina de DJ equipada', 'Micrófonos inalámbricos']],
                 ['col' => 'col-md-6', 'icon' => 'bi-lightbulb', 'title' => 'Iluminación DMX', 'items' => ['Iluminación programable', 'Luces cenitales', 'Guirnaldas + efectos']],
                 ['col' => 'col-md-6', 'icon' => 'bi-cup-hot', 'title' => 'Barra completa', 'items' => ['Barra de cantera', 'Refrigerador industrial', 'Hielera y licuadora']],
                 ['col' => 'col-md-6', 'icon' => 'bi-flower1', 'title' => 'Floristería', 'items' => ['Arreglos del vivero interno', 'Ramos para novios', 'Centros de mesa personalizados']],
                 ['col' => 'col-md-6', 'icon' => 'bi-camera', 'title' => 'Extras Gala', 'items' => ['Proyector 4K + pantalla', 'Fotógrafo 2 horas', 'Coordinador full-time + valet']],
             ],
             'cta' => ['href' => '#contacto', 'label' => 'Cotizar Gala']],
        ],
        'note' => '* Precios de Lunes a Jueves. Viernes a Domingo tienen ajuste de temporada. 50% al contratar, resto 7 días antes. No incluye IVA.',
    ]],

    /* ═══ TESTIMONIALS — large quote cards ═══ */
    ['type' => 'testimonials', 'variant' => 'Testimonials7', 'data' => [
        'id' => 'resenas', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Reseñas', 'title' => 'Historias que merecen ser contadas',
        'subtitle' => 'Quienes ya confiaron en Alhelí para sus momentos más importantes.',
        'items' => [
            ['stars' => 5, 'text' => 'Casarnos bajo los árboles de Alhelí fue exactamente como lo soñamos. Cada detalle, desde la iluminación hasta el último centro de mesa, fue impecable. No es un venue, es una experiencia.',
             'author' => 'Mariana y Eduardo G.', 'event' => 'Boda · Abril 2026'],
            ['stars' => 5, 'text' => 'Los XV de mi hija fueron de revista. El jardín de noche con las luces es mágico. El equipo de coordinación se adelantó a todo. Mis amigas ya preguntaron por el contacto.',
             'author' => 'Alejandra y familia', 'event' => 'XV Años · Marzo 2026'],
            ['stars' => 5, 'text' => 'Cerramos el año fiscal con una cena para 80 ejecutivos y el lugar superó las expectativas. Sobriedad, elegancia y un servicio que refleja profesionalismo en cada detalle.',
             'author' => 'CEO, Nexo Group', 'event' => 'Cena corporativa · Febrero 2026'],
            ['stars' => 5, 'text' => 'Queríamos algo diferente para el bautizo del bebé y Alhelí fue perfecto. Los niños corrieron en el jardín, los abuelos disfrutaron la terraza y nosotros nos sentimos en casa.',
             'author' => 'Familia Romero López', 'event' => 'Bautizo · Enero 2026'],
        ],
    ]],

    /* ═══ CTA — minimal centered ═══ */
    ['type' => 'cta', 'variant' => 'CTA6', 'data' => [
        'label' => 'Reserve ahora',
        'icon' => 'bi-calendar-check',
        'title' => 'Su celebración merece este jardín',
        'text' => 'Agende una visita privada sin compromiso. Venga a recorrer los senderos y descubrir por qué cada evento aquí se convierte en un recuerdo imborrable.',
        'wa_link' => wa_link('Hola, me gustaría agendar una visita para conocer Terraza Alhelí.'),
        'btn_label' => 'Reservar visita por WhatsApp',
        'secondary_label' => 'Llamar por teléfono',
        'secondary_link' => 'tel:+523312345678',
        'note' => 'Le confirmamos en menos de 2 horas. Sin compromiso.',
    ]],

    /* ═══ FAQ — expandable cards ═══ */
    ['type' => 'faq', 'variant' => 'FAQ3', 'data' => [
        'id' => 'faq', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Preguntas frecuentes', 'title' => 'Resolvemos sus dudas',
        'subtitle' => 'Lo que más nos preguntan antes de reservar.',
        'items' => [
            ['icon' => 'bi-calendar-check', 'q' => '¿Con cuánto tiempo debo reservar?', 'a' => 'Recomendamos apartar con 3 a 4 meses de anticipación para sábados y temporada alta (marzo-junio, octubre-diciembre). Para fechas cercanas, consúltenos: a veces tenemos cancelaciones.'],
            ['icon' => 'bi-cash', 'q' => '¿Qué incluye la renta y cuál es el costo?', 'a' => 'La renta base incluye jardín, terraza techada, mobiliario, iluminación, cocina equipada, baños, estacionamiento y coordinador. El costo varía según temporada e invitados. Solicite cotización sin compromiso.'],
            ['icon' => 'bi-people', 'q' => '¿Capacidad máxima?', 'a' => '120 personas sentadas. El jardín tiene espacio para ceremonia de 100, la terraza techada cubre 80 y hay áreas sociales para 30 adicionales.'],
            ['icon' => 'bi-cloud-rain', 'q' => '¿Qué pasa si llueve el día del evento?', 'a' => 'La terraza techada cubre 80 invitados. Contamos con cortinas laterales transparentes que protegen sin perder la vista al jardín. En caso de clima severo, reagendamos sin costo.'],
            ['icon' => 'bi-music-note', 'q' => '¿Restricciones de horario y música?', 'a' => 'Música en vivo o DJ hasta las 12:00 AM entre semana y 1:00 AM en sábado. Después se puede continuar con música ambiental a volumen moderado hasta las 2 AM.'],
            ['icon' => 'bi-truck', 'q' => '¿Puedo traer mis propios proveedores?', 'a' => 'Sí, sin restricciones. Puede contratar su propio banquete, florista, fotógrafo y DJ. También compartimos nuestra lista de proveedores recomendados con quienes trabajamos frecuentemente.'],
        ],
        'cta_text' => '¿Listo para reservar? Escríbanos.',
        'cta_link' => wa_link('Hola, quiero apartar una fecha en Terraza Alhelí.'),
        'cta_label' => 'Reservar por WhatsApp',
    ]],

    /* ═══ MAP — location + info cards ═══ */
    ['type' => 'map', 'variant' => 'Map4', 'data' => [
        'label' => 'Ubicación', 'title' => 'Encuéntrenos en el corazón de Zapopan',
        'subtitle' => 'Fácil acceso desde Av. Patria, Periférico y la zona metropolitana.',
        'address' => 'Av. Alhelí 850, Col. Jardines del Valle, Zapopan, Jalisco',
        'cross_streets' => 'Entre Av. Patriotismo y Periférico Norte',
        'phone' => '+52 33 1234 5678',
        'whatsapp' => wa_link('Hola, quiero información de Terraza Alhelí.'),
        'email' => 'hola@terrazaalheli.com',
        'hours' => [
            ['days' => 'Lunes a Viernes', 'time' => '10:00 AM - 6:00 PM'],
            ['days' => 'Sábado', 'time' => '10:00 AM - 4:00 PM'],
            ['days' => 'Domingo', 'time' => 'Previa cita'],
        ],
        'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14929.052536526394!2d-103.409631!3d20.653916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428add9a9232fe3%3A0x4cf3ee4e3f8b5c6a!2sZapopan%2C%20Jal.!5e0!3m2!1ses!2smx!4v1700000000000',
        'map_title' => 'Terraza Alhelí en Zapopan',
        'cta_link' => 'https://www.google.com/maps/search/?api=1&query=Av.+Alhelí+850+Zapopan+Jalisco',
        'cta_label' => 'Cómo llegar por Google Maps',
    ]],

    /* ═══ CONTACT — two columns form + info ═══ */
    ['type' => 'contact', 'variant' => 'Contact2', 'data' => [
        'id' => 'contacto', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Contacto', 'title' => 'Platiquemos su evento ideal',
        'subtitle' => 'Déjenos sus datos y en menos de 12 horas le preparamos una propuesta personalizada sin costo ni compromiso.',
        'btn_label' => 'Solicitar cotización',
        'info_title' => 'Información de contacto',
        'fields' => [
            ['id' => 'nombre', 'label' => 'Nombre completo', 'placeholder' => 'Su nombre', 'col' => 'col-md-6', 'type' => 'text', 'required' => true],
            ['id' => 'telefono', 'label' => 'Teléfono', 'placeholder' => '33 1234 5678', 'col' => 'col-md-6', 'type' => 'tel', 'required' => true],
            ['id' => 'tipo', 'label' => 'Tipo de evento', 'col' => 'col-md-6', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione una opción', 'selected' => true, 'disabled' => true],
                ['label' => 'Boda'], ['label' => 'XV Años'], ['label' => 'Bautizo'],
                ['label' => 'Cumpleaños'], ['label' => 'Evento corporativo'], ['label' => 'Otro'],
            ]],
            ['id' => 'fecha', 'label' => 'Fecha tentativa', 'col' => 'col-md-6', 'type' => 'date'],
            ['id' => 'invitados', 'label' => 'Número de invitados', 'col' => 'col-md-6', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione un rango', 'selected' => true, 'disabled' => true],
                ['label' => 'Menos de 50'], ['label' => '50 a 80'], ['label' => '80 a 100'], ['label' => '100 a 120'],
            ]],
            ['id' => 'mensaje', 'label' => 'Mensaje', 'type' => 'textarea', 'placeholder' => 'Cuéntenos cómo imagina su evento en Alhelí.', 'col' => 'col-12', 'rows' => 3],
        ],
        'social' => [
            ['icon' => 'bi-facebook', 'href' => '#', 'label' => 'Facebook'],
            ['icon' => 'bi-instagram', 'href' => '#', 'label' => 'Instagram'],
            ['icon' => 'bi-tiktok', 'href' => '#', 'label' => 'TikTok'],
            ['icon' => 'bi-whatsapp', 'href' => wa_link('Hola, quiero información de Terraza Alhelí.'), 'label' => 'WhatsApp'],
        ],
        'hashtag' => 'TerrazaAlhelí',
    ]],

    /* ═══ FOOTER — split brand + social column ═══ */
    ['type' => 'footer', 'variant' => 'Footer6', 'data' => [
        'logo' => 'Terraza Alhelí', 'logo_icon' => 'bi-flower1',
        'dark' => true,
        'desc' => 'Un jardín romántico en Zapopan donde cada celebración se convierte en un recuerdo imborrable. Bodas, XV años y eventos que merecen ser vividos con elegancia.',
        'social' => [
            ['icon' => 'bi-instagram', 'href' => '#', 'target' => true, 'label' => 'Instagram'],
            ['icon' => 'bi-facebook', 'href' => '#', 'target' => true, 'label' => 'Facebook'],
            ['icon' => 'bi-pinterest', 'href' => '#', 'target' => true, 'label' => 'Pinterest'],
            ['icon' => 'bi-whatsapp', 'href' => wa_link('Hola, quiero información de Terraza Alhelí.'), 'target' => true, 'label' => 'WhatsApp'],
        ],
        'columns' => [
            ['heading' => 'Navegación', 'links' => [
                ['href' => '#inicio', 'label' => 'Inicio'],
                ['href' => '#nosotros', 'label' => 'El espacio'],
                ['href' => '#eventos', 'label' => 'Eventos'],
                ['href' => '#galeria', 'label' => 'Galería'],
['href' => '#paquetes', 'label' => 'Paquetes'],
            ]],
        ],
        'contact_items' => [
            ['icon' => 'bi-geo-alt', 'text' => 'Av. Alhelí 850, Col. Jardines del Valle, Zapopan, Jalisco'],
            ['icon' => 'bi-telephone', 'text' => '+52 33 1234 5678'],
            ['icon' => 'bi-envelope', 'text' => 'hola@terrazaalheli.com'],
        ],
        'copyright' => '&copy; 2026 Terraza Alhelí. Todos los derechos reservados.',
        'legal_links' => [
            ['href' => '#', 'label' => 'Aviso de privacidad'],
            ['href' => '#', 'label' => 'Términos y condiciones'],
        ],
    ]],
];

$site = [
    'title' => 'Terraza Alhelí | Jardín romántico para bodas y eventos en Zapopan',
    'desc' => 'Terraza Alhelí — Jardín romántico de 600 m² para bodas, XV años y celebraciones elegantes en Zapopan, Jalisco. Paquetes desde $22,000 MXN.',
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
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body class="theme-alheli-dark">

<?php render_template($sections); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
