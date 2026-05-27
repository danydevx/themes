<?php
/**
 * Terraza Magnolia — Editorial elegante (#1).
 * Refactorizado con: padding ajustable, fullwidth, header_left, contenido CONTENT.md.
 * Header: Header2 (sticky con blur). Secciones: 14 (incluye Pricing1 y Availability1 nuevas).
 */
require_once __DIR__ . '/../sections/section-loader.php';

$sections = [
    /* ═══ HEADER — sticky con blur ═══ */
    ['type' => 'header', 'variant' => 'Header2', 'data' => [
        'brand' => 'Magnolia', 'icon' => 'bi-flower1',
        'show_wa' => true, 'wa_link' => wa_link('Hola, quiero información de Terraza Magnolia.'),
        'links' => [
            ['href' => '#inicio', 'label' => 'Inicio'], ['href' => '#nosotros', 'label' => 'El espacio'],
            ['href' => '#eventos', 'label' => 'Eventos'], ['href' => '#servicios', 'label' => 'Servicios'],
            ['href' => '#precios', 'label' => 'Paquetes'], ['href' => '#galeria', 'label' => 'Galería'],
            ['href' => '#disponibilidad', 'label' => 'Fechas'], ['href' => '#testimonios', 'label' => 'Reseñas'],
            ['href' => '#faq', 'label' => 'FAQ'], ['href' => '#contacto', 'label' => 'Contacto'],
        ],
    ]],

    /* ═══ HERO — editorial magazine cover ═══ */
    ['type' => 'hero', 'variant' => 'Hero8', 'data' => [
        'id' => 'inicio', 'overline' => 'Terraza de eventos desde 2020',
        'image' => placeholder('700x900', 'faf8f5', '8b9d83', 'Magnolia+Terraza'),
        'image_alt' => 'Terraza Magnolia vista editorial', 'image_caption' => 'Fotografía de estudio · Zapopan, Jalisco',
        'ornament' => '✻',
        'title' => 'Donde cada evento<br>merece su propia<br>página en la historia',
        'text' => 'Terraza Magnolia es un espacio privado diseñado para celebraciones que se viven con elegancia. Bodas, XV años y reuniones donde cada detalle importa.',
        'cta_primary' => ['href' => wa_link('Hola, quiero consultar disponibilidad en Terraza Magnolia.'), 'label' => 'Reservar una visita privada'],
        'cta_secondary' => ['href' => '#nosotros', 'label' => 'Conocer el espacio'],
    ]],

    /* ═══ ABOUT — imagen + features, header izquierdo ═══ */
    ['type' => 'about', 'variant' => 'About5', 'data' => [
        'id' => 'nosotros', 'scheme' => 'scheme-soft', 'padding' => 'lg', 'header_left' => true,
        'label' => 'El espacio', 'title' => 'Un jardín con carácter',
        'subtitle' => 'Magnolia abrió sus puertas con la visión de crear un refugio donde naturaleza y arquitectura se abrazan. Cada rincón está pensado para enmarcar momentos.',
        'intro' => 'Desde la terraza techada hasta el sendero de magnolias, todo aquí invita a quedarse. Contamos con 800 m² de jardín, 12 magnolias adultas y un diseño que prioriza la privacidad.',
        'images' => [
            ['src' => placeholder('400x500', 'f5f1ea', '8b9d83', 'Magnolia+Jardín'), 'alt' => 'Jardín de magnolias'],
            ['src' => placeholder('400x250', 'f5f1ea', '8b9d83', 'Terraza+Techada'), 'alt' => 'Terraza techada para eventos'],
            ['src' => placeholder('400x250', 'f5f1ea', '8b9d83', 'Detalle+Floral'), 'alt' => 'Detalle floral del jardín'],
        ],
        'features' => [
            ['icon' => 'bi-tree', 'label' => 'Jardín de magnolias', 'text' => '800 m² de jardín arbolado con 12 magnolias adultas y sendero iluminado.'],
            ['icon' => 'bi-people', 'label' => '120 invitados', 'text' => 'Capacidad para eventos sentados con área techada para 80 y jardín para 100.'],
            ['icon' => 'bi-shield-check', 'label' => 'Privacidad total', 'text' => 'Un solo evento por día. Usted y sus invitados son nuestra prioridad absoluta.'],
            ['icon' => 'bi-geo-alt', 'label' => 'Zapopan norte', 'text' => 'Fácil acceso desde Av. Patria y Periférico. Estacionamiento para 40 vehículos con vigilancia.'],
        ],
        'cta' => ['href' => '#contacto', 'label' => 'Agendar una visita guiada', 'icon' => 'bi-arrow-right'],
    ]],

    /* ═══ EVENT TYPES — lista editorial numerada ═══ */
    ['type' => 'event-types', 'variant' => 'EventTypes4', 'data' => [
        'id' => 'eventos', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Celebraciones', 'title' => 'Cada ocasión tiene su lugar',
        'subtitle' => 'De lo íntimo a lo memorable. Nuestro espacio se transforma para recibir cada tipo de celebración con el carácter que merece.',
        'items' => [
            ['icon' => 'bi-heart', 'title' => 'Bodas', 'text' => 'Ceremonias al aire libre bajo las magnolias, recepciones con iluminación cálida y cada rincón pensado para el romance. Desde $28,000 por evento.'],
            ['icon' => 'bi-star', 'title' => 'XV Años', 'text' => 'Una noche de cuento con pista de baile, área para fotos y decoración que refleja la personalidad de la quinceañera. Paquetes desde $22,000.'],
            ['icon' => 'bi-droplet', 'title' => 'Bautizos', 'text' => 'Celebraciones familiares diurnas en un ambiente sereno, rodeado de naturaleza y con todas las comodidades para grandes y pequeños.'],
            ['icon' => 'bi-cake2', 'title' => 'Cumpleaños', 'text' => 'Desde reuniones íntimas de 30 personas hasta grandes celebraciones. El jardín se viste de fiesta según su estilo.'],
            ['icon' => 'bi-briefcase', 'title' => 'Corporativo', 'text' => 'Cenas de gala, lanzamientos y eventos empresariales en un entorno que comunica sofisticación y buen gusto. Proyector 4K disponible.'],
            ['icon' => 'bi-camera', 'title' => 'Sesiones fotográficas', 'text' => 'El jardín de magnolias es el backdrop natural perfecto para sesiones de compromiso, moda o retratos familiares.'],
        ],
        'cta_text' => 'Consultar disponibilidad para su tipo de evento',
        'cta_link' => wa_link('Hola, quiero consultar disponibilidad para un evento en Terraza Magnolia.'),
        'cta_target' => true,
    ]],

    /* ═══ SERVICES — filas alternadas con badges ═══ */
    ['type' => 'services', 'variant' => 'Services2', 'data' => [
        'id' => 'servicios', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Servicios', 'title' => 'Lo que incluye su evento',
        'subtitle' => 'Cada detalle está cuidado para que usted solo se preocupe por disfrutar junto a sus invitados.',
        'items' => [
            ['icon' => 'bi-lamp', 'title' => 'Iluminación ambiental', 'desc' => 'Sistema de luces LED cálidas entre los árboles, guirnaldas sobre la terraza y velas en cada mesa. La atmósfera perfecta cuando cae la noche.', 'badge' => 'Premium'],
            ['icon' => 'bi-fire', 'title' => 'Cocina equipada', 'desc' => 'Cocina profesional con estufa, horno, refrigerador y área de servicio para catering. Su proveedor o el nuestro: usted decide.', 'badge' => 'Incluido'],
            ['icon' => 'bi-table', 'title' => 'Mobiliario de diseño', 'desc' => 'Mesas redondas de madera certificada, sillas acojinadas y mantelería de lino. Cristalería completa: high ball, old fashion, copas de vino y caballitos.'],
            ['icon' => 'bi-music-note-beamed', 'title' => 'Sonido profesional', 'desc' => 'Sistema de audio Bose con micrófonos inalámbricos y cabina de DJ equipada. Conecte su lista de reproducción por Bluetooth.', 'badge' => 'Incluido'],
            ['icon' => 'bi-flower1', 'title' => 'Floristería interna', 'desc' => 'Arreglos florales cultivados en nuestro propio vivero. Ramos, centros de mesa y decoración botánica personalizada.', 'badge' => 'Opcional'],
            ['icon' => 'bi-shield-check', 'title' => 'Coordinación de evento', 'desc' => 'Un coordinador dedicado el día de su evento. Recibe proveedores, supervisa montaje y se asegura de que todo fluya como lo planeó.'],
        ],
    ]],

    /* ═══ PRICING — tabla comparativa con datos de mercado real ═══ */
    ['type' => 'pricing', 'variant' => 'Pricing2', 'data' => [
        'id' => 'precios', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Paquetes', 'title' => 'Transparencia en cada propuesta',
        'subtitle' => 'Precios de renta base. Todos incluyen jardín, terraza techada, mobiliario, iluminación, cocina, baños, estacionamiento y coordinador.',
        'plans' => [
            ['name' => 'Esencial', 'price' => '22,000', 'unit' => 'L-J · 6h', 'cta' => ['href' => '#contacto', 'label' => 'Cotizar'],
             'features' => ['6 horas de evento', 'Hasta 60 invitados', 'Mobiliario básico', 'Iluminación ambiental', 'Cocina equipada', 'Coordinador', 'Estacionamiento']],
            ['highlight' => true, 'name' => 'Magnolia', 'price' => '35,000', 'unit' => 'V-D · 8h', 'cta' => ['href' => '#contacto', 'label' => 'Cotizar'],
             'features' => ['8 horas de evento', 'Hasta 100 invitados', 'Mobiliario premium', 'Iluminación arquitectónica', 'Cocina + refrigeración', 'Coordinador dedicado', 'Sonido Bose', 'Área social exterior', 'Estacionamiento + valet parking']],
            ['name' => 'Gala', 'price' => '55,000', 'unit' => 'V-D · 12h', 'cta' => ['href' => '#contacto', 'label' => 'Cotizar'],
             'features' => ['12 horas de evento', 'Hasta 120 invitados', 'Mobiliario de diseño', 'Iluminación DMX programable', 'Cocina + barra completa', 'Coordinador de tiempo completo', 'Sonido Bose + cabina de DJ', 'Área social + terraza completa', 'Floristería interna', 'Proyector 4K y pantalla', 'Fotógrafo previo al evento', 'Estacionamiento + valet parking + vigilancia']],
        ],
        'note' => '* Precios de referencia. Solicite cotización personalizada según fecha e invitados. 50% al contratar, resto 7 días antes del evento. No incluye IVA. Consulte menús de catering desde $140 p/p (taquiza).',
    ]],

    /* ═══ GALLERY — swiper con thumbnails ═══ */
    ['type' => 'gallery', 'variant' => 'Gallery5', 'data' => [
        'id' => 'galeria', 'scheme' => 'scheme-dark', 'padding' => 'md',
        'label' => 'Galería', 'title' => 'Recorra cada rincón',
        'subtitle' => 'Así se vive un evento en Magnolia. Deslice para descubrir el jardín, la terraza y los detalles que hacen único este espacio.',
        'images' => [
            ['alt' => 'Ceremonia bajo magnolias', 'full' => placeholder('1200x800', '1c1c1a', '8b9d83', 'Ceremonia+Magnolias'), 'thumb' => placeholder('200x120', '1c1c1a', '8b9d83', 'Ceremonia')],
            ['alt' => 'Mesa principal decorada', 'full' => placeholder('1200x800', '1c1c1a', '8b9d83', 'Mesa+Principal'), 'thumb' => placeholder('200x120', '1c1c1a', '8b9d83', 'Mesa')],
            ['alt' => 'Iluminación nocturna', 'full' => placeholder('1200x800', '1c1c1a', '8b9d83', 'Noche+Iluminada'), 'thumb' => placeholder('200x120', '1c1c1a', '8b9d83', 'Noche')],
            ['alt' => 'Área social exterior', 'full' => placeholder('1200x800', '1c1c1a', '8b9d83', 'Lounge+Magnolia'), 'thumb' => placeholder('200x120', '1c1c1a', '8b9d83', 'Lounge')],
            ['alt' => 'Sendero del jardín', 'full' => placeholder('1200x800', '1c1c1a', '8b9d83', 'Sendero+Jardín'), 'thumb' => placeholder('200x120', '1c1c1a', '8b9d83', 'Sendero')],
            ['alt' => 'Detalle centro de mesa', 'full' => placeholder('1200x800', '1c1c1a', '8b9d83', 'Centro+Mesa'), 'thumb' => placeholder('200x120', '1c1c1a', '8b9d83', 'Detalle')],
            ['alt' => 'Vista aérea del jardín', 'full' => placeholder('1200x800', '1c1c1a', '8b9d83', 'Vista+Aérea'), 'thumb' => placeholder('200x120', '1c1c1a', '8b9d83', 'Aérea')],
        ],
    ]],

    /* ═══ AVAILABILITY — calendario de fechas ═══ */
    ['type' => 'availability', 'variant' => 'Availability1', 'data' => [
        'id' => 'disponibilidad', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'brand' => 'Magnolia',
        'label' => 'Disponibilidad', 'title' => 'Aparte su fecha con tiempo',
        'subtitle' => 'Consulte las fechas disponibles. Recomendamos reservar con 3 meses de anticipación para sábados. A veces tenemos cancelaciones de última hora.',
        'dates' => [
            ['day' => '7', 'label' => 'Sáb 7 Jun', 'status' => 'available'],
            ['day' => '8', 'label' => 'Dom 8 Jun', 'status' => 'reserved'],
            ['day' => '14', 'label' => 'Sáb 14 Jun', 'status' => 'reserved'],
            ['day' => '15', 'label' => 'Dom 15 Jun', 'status' => 'available'],
            ['day' => '21', 'label' => 'Sáb 21 Jun', 'status' => 'available'],
            ['day' => '22', 'label' => 'Dom 22 Jun', 'status' => 'reserved'],
            ['day' => '28', 'label' => 'Sáb 28 Jun', 'status' => 'available'],
            ['day' => '29', 'label' => 'Dom 29 Jun', 'status' => 'available'],
            ['day' => '5', 'label' => 'Sáb 5 Jul', 'status' => 'available'],
            ['day' => '6', 'label' => 'Dom 6 Jul', 'status' => 'reserved'],
            ['day' => '12', 'label' => 'Sáb 12 Jul', 'status' => 'taken'],
            ['day' => '13', 'label' => 'Dom 13 Jul', 'status' => 'available'],
            ['day' => '19', 'label' => 'Sáb 19 Jul', 'status' => 'reserved'],
            ['day' => '20', 'label' => 'Dom 20 Jul', 'status' => 'available'],
            ['day' => '26', 'label' => 'Sáb 26 Jul', 'status' => 'available'],
            ['day' => '27', 'label' => 'Dom 27 Jul', 'status' => 'available'],
        ],
        'wa_link' => wa_link('Hola, quiero consultar disponibilidad para una fecha en Terraza Magnolia.'),
        'wa_label' => 'Consultar disponibilidad por WhatsApp',
    ]],

    /* ═══ TESTIMONIALS — pull quotes editorial ═══ */
    ['type' => 'testimonials', 'variant' => 'Testimonials6', 'data' => [
        'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Lo que dicen', 'title' => 'Historias que merecen ser contadas',
        'subtitle' => 'Quienes ya confiaron en Magnolia para sus momentos más importantes.',
        'items' => [
            ['author' => 'Mariana y Eduardo G.', 'avatar' => placeholder('100x100', '8b9d83', 'fff', 'MG'), 'event' => 'Boda · Abril 2026',
             'text' => 'Casarme bajo las magnolias fue exactamente como lo soñé. Cada detalle, desde la iluminación hasta el último centro de mesa, fue impecable. Magnolia no es un venue, es una experiencia.'],
            ['author' => 'Alejandra y familia', 'avatar' => placeholder('100x100', 'c4a97d', 'fff', 'AL'), 'event' => 'XV Años · Marzo 2026',
             'text' => 'Los XV de mi hija fueron de revista. El jardín de noche con las luces es mágico. El equipo de coordinación se adelantó a todo. Mis amigas ya preguntaron por el contacto.'],
            ['author' => 'Corporativo Nexo', 'avatar' => placeholder('100x100', '6b8a6e', 'fff', 'CN'), 'event' => 'Cena de gala · Febrero 2026',
             'text' => 'Cerramos el año fiscal con una cena para 80 ejecutivos y el lugar superó las expectativas. Sobriedad, elegancia y un servicio que refleja profesionalismo en cada detalle.'],
            ['author' => 'Familia Romero López', 'avatar' => placeholder('100x100', '8b9d83', 'fff', 'FR'), 'event' => 'Bautizo · Enero 2026',
             'text' => 'Queríamos algo diferente para el bautizo del bebé y Magnolia fue perfecto. Los niños corrieron en el jardín, los abuelos disfrutaron la terraza y nosotros nos sentimos en casa.'],
        ],
    ]],

    /* ═══ VIDEO — modal trigger ═══ */
    ['type' => 'video', 'variant' => 'Video2', 'data' => [
        'id' => 'video', 'scheme' => 'scheme-light', 'padding' => 'sm',
        'label' => 'Video', 'title' => 'Vea Magnolia en movimiento',
        'subtitle' => 'Un recorrido cinematográfico por el jardín, la terraza y cada rincón de nuestro espacio.',
        'video_url' => 'https://lorem.video/720p', 'video_type' => 'html5',
        'poster' => placeholder('1280x720', 'f5f1ea', '8b9d83', 'Magnolia+Recorrido+Video'),
        'poster_alt' => 'Ver recorrido de Terraza Magnolia', 'duration' => '1:52',
        'caption' => 'Presione play para un recorrido completo por Terraza Magnolia.',
    ]],

    /* ═══ FAQ — accordion ═══ */
    ['type' => 'faq', 'variant' => 'FAQ3', 'data' => [
        'id' => 'faq', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Preguntas frecuentes', 'title' => 'Resolvemos sus dudas',
        'subtitle' => 'Lo que más nos preguntan antes de reservar. Si tiene otra consulta, escríbanos.',
        'items' => [
            ['icon' => 'bi-calendar-check', 'q' => '¿Con cuánto tiempo debo reservar?', 'a' => 'Recomendamos apartar con 3 a 4 meses de anticipación para sábados y temporada alta (marzo-junio, octubre-diciembre). Consulte fechas cercanas: a veces tenemos disponibilidad de última hora.'],
            ['icon' => 'bi-cash', 'q' => '¿Qué incluye la renta y cuál es el costo?', 'a' => 'La renta base incluye jardín, terraza techada, mobiliario, iluminación, cocina equipada, baños, estacionamiento y coordinador. El costo varía según temporada e invitados. Consulte nuestra tabla de paquetes arriba y solicite cotización sin compromiso.'],
            ['icon' => 'bi-people', 'q' => '¿Capacidad máxima?', 'a' => '120 personas sentadas. El jardín tiene espacio para ceremonia de 100, la terraza techada cubre 80 y hay áreas sociales para 40 adicionales.'],
            ['icon' => 'bi-cloud-rain', 'q' => '¿Si llueve el día del evento?', 'a' => 'La terraza techada cubre 80 invitados. Contamos con cortinas laterales transparentes que protegen sin perder la vista al jardín. En caso de clima severo, reagendamos sin costo.'],
            ['icon' => 'bi-music-note', 'q' => '¿Restricciones de horario y música?', 'a' => 'Música en vivo o DJ hasta las 12:00 AM entre semana y 1:00 AM en sábado. Después se puede continuar con música ambiental a volumen moderado hasta las 2 AM.'],
            ['icon' => 'bi-truck', 'q' => '¿Puedo traer mis propios proveedores?', 'a' => 'Sí, sin restricciones. Puede contratar su propio banquete, florista, fotógrafo y DJ. También compartimos nuestra lista de proveedores recomendados con tarifa preferencial.'],
        ],
        'cta_text' => '¿Listo para reservar? Escríbanos.',
        'cta_link' => wa_link('Hola, quiero reservar una fecha en Terraza Magnolia.'),
        'cta_label' => 'Reservar por WhatsApp',
    ]],

    /* ═══ CTA — editorial split con fullwidth ═══ */
    ['type' => 'cta', 'variant' => 'CTA5', 'data' => [
        'scheme' => '', 'padding' => 'lg', 'fullwidth' => true,
        'label' => 'Reserve ahora',
        'title' => 'Su celebración merece este jardín',
        'text' => 'Agende una visita privada sin compromiso. Venga a tomar un café, recorra los senderos de magnolias y descubra por qué cada evento aquí se convierte en un recuerdo imborrable.',
        'btn_label' => 'Reservar visita por WhatsApp',
        'wa_link' => wa_link('Hola, me gustaría agendar una visita para conocer Terraza Magnolia.'),
        'image' => placeholder('500x400', '6b8a6e', 'faf8f5', 'Magnolia+Flores'),
        'image_alt' => 'Flores de magnolia',
        'secondary_label' => 'Llamar por teléfono',
        'secondary_link' => 'tel:+523312345678',
        'note' => 'Le confirmamos en menos de 2 horas. Sin compromiso.',
    ]],

    /* ═══ MAP — iframe ═══ */
    ['type' => 'map', 'variant' => 'Map2', 'data' => [
        'padding' => 'sm',
        'label' => 'Ubicación', 'title' => 'Encuéntrenos entre magnolias',
        'subtitle' => 'Av. Magnolia 742, Col. Jardines del Valle, Zapopan, Jalisco.',
        'address' => 'Av. Magnolia 742, Col. Jardines del Valle, Zapopan, Jalisco',
        'cta_link' => 'https://maps.google.com/?q=Av.+Magnolia+742+Zapopan',
        'cta_label' => 'Abrir en Google Maps',
        'map_title' => 'Terraza Magnolia',
    ]],

    /* ═══ CONTACT — formulario centrado ═══ */
    ['type' => 'contact', 'variant' => 'Contact3', 'data' => [
        'id' => 'contacto', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Contacto', 'title' => 'Platiquemos su evento ideal',
        'subtitle' => 'Déjenos sus datos y le preparamos una propuesta personalizada. Respondemos en menos de 12 horas.',
        'btn_label' => 'Solicitar cotización',
        'top_image' => placeholder('600x300', 'f5f1ea', '8b9d83', 'Contacto+Magnolia'),
        'top_image_alt' => 'Contacto Terraza Magnolia',
        'fields' => [
            ['id' => 'nombre', 'label' => 'Nombre completo', 'placeholder' => 'Su nombre', 'type' => 'text', 'required' => true],
            ['id' => 'telefono', 'label' => 'Teléfono', 'placeholder' => '33 1234 5678', 'type' => 'tel', 'required' => true],
            ['id' => 'tipo', 'label' => 'Tipo de evento', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione una opción', 'selected' => true, 'disabled' => true],
                ['label' => 'Boda'], ['label' => 'XV Años'], ['label' => 'Bautizo'],
                ['label' => 'Cumpleaños'], ['label' => 'Evento corporativo'],
                ['label' => 'Sesión fotográfica'], ['label' => 'Otro'],
            ]],
            ['id' => 'fecha', 'label' => 'Fecha tentativa', 'type' => 'date'],
            ['id' => 'invitados', 'label' => 'Número de invitados', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione un rango', 'selected' => true, 'disabled' => true],
                ['label' => 'Menos de 30'], ['label' => '30 a 60'], ['label' => '60 a 100'], ['label' => '100 a 120'],
            ]],
            ['id' => 'mensaje', 'label' => 'Mensaje', 'type' => 'textarea', 'rows' => 3, 'placeholder' => 'Cuéntenos cómo imagina su evento en Magnolia.'],
        ],
    ]],

    /* ═══ FOOTER — centrado minimal ═══ */
    ['type' => 'footer', 'variant' => 'Footer2', 'data' => [
        'logo' => 'Terraza Magnolia', 'logo_icon' => 'bi-flower1',
        'desc' => 'Un jardín de magnolias en Zapopan donde cada celebración se convierte en un recuerdo imborrable. Bodas, XV años y eventos que merecen ser vividos con elegancia.',
        'links' => [
            ['href' => '#inicio', 'label' => 'Inicio'], ['href' => '#nosotros', 'label' => 'El espacio'],
            ['href' => '#eventos', 'label' => 'Eventos'], ['href' => '#precios', 'label' => 'Paquetes'],
            ['href' => '#galeria', 'label' => 'Galería'], ['href' => '#faq', 'label' => 'FAQ'],
            ['href' => '#contacto', 'label' => 'Contacto'],
        ],
        'social' => [
            ['icon' => 'bi-instagram', 'href' => '#', 'target' => true, 'label' => 'Instagram'],
            ['icon' => 'bi-facebook', 'href' => '#', 'target' => true, 'label' => 'Facebook'],
            ['icon' => 'bi-pinterest', 'href' => '#', 'target' => true, 'label' => 'Pinterest'],
            ['icon' => 'bi-whatsapp', 'href' => 'https://wa.me/523312345678', 'target' => true, 'label' => 'WhatsApp'],
        ],
        'contact_line' => 'Av. Magnolia 742, Col. Jardines del Valle, Zapopan, Jalisco · +52 33 1234 5678 · hola@terrazamagnolia.com',
        'copyright' => '&copy; 2026 Terraza Magnolia. Todos los derechos reservados.',
    ]],
];

$site = [
    'title' => 'Terraza Magnolia | Jardín de eventos en Zapopan',
    'desc' => 'Terraza Magnolia — Jardín de eventos para bodas, XV años y celebraciones elegantes en Zapopan, Jalisco. Paquetes desde $22,000 MXN.',
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
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="<?= $site['fonts'] ?>" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/glightbox@3.3.0/dist/css/glightbox.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body class="theme-magnolia">

<?php render_template($sections); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox@3.3.0/dist/js/glightbox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
