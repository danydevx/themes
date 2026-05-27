<?php
/**
 * Terraza Alrio — Warm Terracotta Modern.
 * Zapopan, Jalisco.
 * Familia visual: Comercial moderna cálida (light theme, terracota + verde salvia).
 * Diferencia: hero con booking card integrada, stats band, timeline event types,
 *   amenities grid, pricing minimal, testimonios en cards flotantes.
 * Secciones: 0 usadas antes en otros templates.
 */
require_once __DIR__ . '/../sections/section-loader.php';

$sections = [

    /* ═══ HEADER — navbar sólido (Hero1 tiene overlay oscuro) ═══ */
    ['type' => 'header', 'variant' => 'Header1', 'data' => [
        'brand' => 'Alrio', 'icon' => 'bi-building',
        'show_wa' => true, 'wa_link' => wa_link('Hola, quiero información de Terraza Alrio en Zapopan.'),
        'links' => [
            ['href' => '#inicio', 'label' => 'Inicio'],
            ['href' => '#espacio', 'label' => 'El espacio'],
            ['href' => '#eventos', 'label' => 'Eventos'],
            ['href' => '#galeria', 'label' => 'Galería'],
            ['href' => '#paquetes', 'label' => 'Paquetes'],
            ['href' => '#resenas', 'label' => 'Reseñas'],
            ['href' => '#faq', 'label' => 'FAQ'],
            ['href' => '#contacto', 'label' => 'Contacto'],
        ],
    ]],

    /* ═══ HERO — full-width con booking card flotante ═══ */
    ['type' => 'hero', 'variant' => 'Hero1', 'data' => [
        'id' => 'inicio',
        'bg' => placeholder('1920x1080', 'c4785a', 'ffffff', 'Terraza+Alrio+Zapopan'),
        'label' => 'Terraza de eventos en Zapopan',
        'title' => 'El lugar donde<br>su evento cobra<br>vida',
        'text' => 'Terraza Alrio es un espacio contemporáneo de 800 m² diseñado para bodas, XV años y celebraciones corporativas en el corazón de Chapultepec, Zapopan.',
        'cta_primary' => ['href' => wa_link('Hola, quiero consultar disponibilidad para un evento en Terraza Alrio, Zapopan.'), 'label' => 'Cotizar ahora'],
        'cta_secondary' => ['href' => '#galeria', 'label' => 'Ver galería'],
    ]],

    /* ═══ AVAILABILITY BAND — strip con fechas rápidas ═══ */
    ['type' => 'availability', 'variant' => 'Availability1', 'data' => [
        'scheme' => 'scheme-color',
        'padding' => 'sm',
        'label' => 'Fechas disponibles',
        'title' => 'Consulte disponibilidad',
        'subtitle' => 'Junio y julio 2026',
        'dates' => [
            ['day' => '7', 'label' => 'Sáb 7 Jun', 'status' => 'available'],
            ['day' => '8', 'label' => 'Dom 8 Jun', 'status' => 'reserved'],
            ['day' => '14', 'label' => 'Sáb 14 Jun', 'status' => 'available'],
            ['day' => '15', 'label' => 'Dom 15 Jun', 'status' => 'available'],
            ['day' => '21', 'label' => 'Sáb 21 Jun', 'status' => 'reserved'],
            ['day' => '22', 'label' => 'Dom 22 Jun', 'status' => 'available'],
            ['day' => '28', 'label' => 'Sáb 28 Jun', 'status' => 'available'],
            ['day' => '29', 'label' => 'Dom 29 Jun', 'status' => 'reserved'],
            ['day' => '5', 'label' => 'Sáb 5 Jul', 'status' => 'available'],
            ['day' => '6', 'label' => 'Dom 6 Jul', 'status' => 'available'],
            ['day' => '12', 'label' => 'Sáb 12 Jul', 'status' => 'reserved'],
            ['day' => '13', 'label' => 'Dom 13 Jul', 'status' => 'available'],
        ],
        'wa_link' => wa_link('Hola, quiero consultar disponibilidad para una fecha en Terraza Alrio.'),
        'wa_label' => 'Consultar por WhatsApp',
    ]],

    /* ═══ ABOUT — full-bleed imagen + texto overlay ═══ */
    ['type' => 'about', 'variant' => 'About2', 'data' => [
        'id' => 'espacio', 'scheme' => 'scheme-light', 'padding' => 'lg',
        'label' => 'El espacio', 'title' => '800 m² pensados para celebraciones memorables',
        'subtitle' => 'Alrio abrió sus puertas en 2022 como una propuesta diferente: un espacio funcional, bien diseñado y con la flexibilidad que cada celebración necesita.',
        'image' => placeholder('1200x700', 'f0e8de', 'c4785a', 'Terraza+Alrio+Espacio+Principal'),
        'image_alt' => 'Terraza Alrio — espacio principal',
        'stats' => [
            ['number' => '800', 'unit' => 'm²', 'label' => 'construidos'],
            ['number' => '200', 'unit' => 'pax', 'label' => 'invitados máx.'],
            ['number' => '14', 'unit' => 'hrs', 'label' => 'disponibles'],
            ['number' => '1', 'unit' => 'evento', 'label' => 'por día'],
        ],
        'text' => 'Salón principal con pisos de concreto pulido, muros de cristal de 6 metros y techo de 5 m de altura. Jardín con árboles adultos e iluminación arquitectónica. Terraza techada con techo retráctil. Todo en un solo lugar.',
        'cta' => ['href' => '#galeria', 'label' => 'Ver galería de fotos'],
    ]],

    /* ═══ AMENITIES — grid oscuro ═══ */
    ['type' => 'amenities', 'variant' => 'Amenities1', 'data' => [
        'id' => 'amenidades', 'scheme' => 'scheme-dark', 'padding' => 'lg',
        'label' => 'Instalaciones', 'title' => 'Todo lo que necesita en un solo lugar',
        'subtitle' => 'Sin proveedores externos, sin alquileres extra. En Alrio tiene todo incluido desde el primer día.',
        'categories' => [
            ['icon' => 'bi-lightning', 'title' => 'Salón principal',
             'items' => [
                 'Piso de concreto pulido de alta resistencia',
                 'Muros de cristal de 6 m con vista al jardín',
                 'Techo de 5 m de altura con vigas exposed',
                 'Iluminación LED regulable en temperatura y color',
                 'Aire acondicionado inverter de bajo ruido',
                 'Entrada independiente para proveedores',
             ]],
            ['icon' => 'bi-tree', 'title' => 'Jardín exterior',
             'items' => [
                 '400 m² de jardín con árboles adultos',
                 'Iluminación arquitectónica entre ramas',
                 'Piso de piedra natural pulida',
                 'Ceremonia al aire libre para 180 invitados',
                 'Cortinas laterales para lluvia o sol fuerte',
             ]],
            ['icon' => 'bi-house', 'title' => 'Terraza techada',
             'items' => [
                 '150 m² con techo retráctil de cristal',
                 'Abre o cierra según el clima del día',
                 'Barra de concreto con preparación completa',
                 'Lounge integrado para 40 personas',
                 'Vista directa al jardín y salón',
             ]],
            ['icon' => 'bi-cup-hot', 'title' => 'Cocina y servicio',
             'items' => [
                 'Cocina profesional de 40 m²',
                 'Estufa industrial, horno, refrigerador',
                 'Área de trabajo para catering externo',
                 'Cuarto frío de 6 m²',
                 'Personal de cocina disponible bajo solicitud',
             ]],
        ],
    ]],

    /* ═══ EVENT TYPES — horizontal scroll cards ═══ */
    ['type' => 'event-types', 'variant' => 'EventTypes2', 'data' => [
        'id' => 'eventos', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Eventos', 'title' => 'Cada celebración es diferente',
        'subtitle' => 'Así se ve un evento en Alrio según el tipo.',
        'items' => [
            ['img' => placeholder('600x400', 'fdf9f5', 'c4785a', 'Boda+Alrio'), 'img_alt' => 'Boda en Terraza Alrio',
             'icon' => 'bi-heart', 'title' => 'Bodas', 'text' => 'Ceremonia en el jardín, recepción en el salón con muros de cristal abiertos al atardecer. Iluminación cálida que transforma el espacio.'],
            ['img' => placeholder('600x400', 'fdf9f5', '5a7c6b', 'XV+Alrio'), 'img_alt' => 'XV Años en Terraza Alrio',
             'icon' => 'bi-star', 'title' => 'XV Años', 'text' => 'Pista de baile, lounge para fotos, DJ booth equipado y una decoración que refleja la personalidad de la quinceañera.'],
            ['img' => placeholder('600x400', 'fdf9f5', 'c4785a', 'Corporativo+Alrio'), 'img_alt' => 'Evento corporativo en Terraza Alrio',
             'icon' => 'bi-briefcase', 'title' => 'Corporativo', 'text' => 'Cenas de gala, lanzamientos y eventos empresariales. Proyector 4K, WiFi de 200 Mbps y coordinación profesional.'],
            ['img' => placeholder('600x400', 'fdf9f5', '5a7c6b', 'Cumpleanos+Alrio'), 'img_alt' => 'Cumpleaños en Terraza Alrio',
             'icon' => 'bi-cake2', 'title' => 'Cumpleaños', 'text' => 'Desde reuniones íntimas de 30 personas hasta grandes celebraciones temáticas. El salón se transforma con lo que usted imagine.'],
            ['img' => placeholder('600x400', 'fdf9f5', 'c4785a', 'Graduacion+Alrio'), 'img_alt' => 'Graduación en Terraza Alrio',
             'icon' => 'bi-mortarboard', 'title' => 'Graduaciones', 'text' => 'Ceremonia de graduation en el jardín, fiesta en el salón. Espacio para escenario, pantalla y pista de baile.'],
        ],
        'cta' => ['href' => '#contacto', 'label' => 'Cotizar mi evento'],
    ]],

    /* ═══ GALLERY — masonry ═══ */
    ['type' => 'gallery', 'variant' => 'Gallery3', 'data' => [
        'id' => 'galeria', 'scheme' => 'scheme-soft',
        'label' => 'Galería', 'title' => 'Recorra Alrio imagen por imagen',
        'subtitle' => 'Haga clic en cualquier imagen para verla en pantalla completa.',
        'images' => [
            ['alt' => 'Salón principal con montaje debanquete', 'full' => placeholder('1200x900', 'f0e8de', 'c4785a', 'Salon+Montaje+Alrio'), 'thumb' => placeholder('600x600', 'f0e8de', 'c4785a', 'Salon+Montaje')],
            ['alt' => 'Jardín al atardecer con iluminación', 'full' => placeholder('1200x900', 'c4785a', 'ffffff', 'Jardin+Atardecer+Alrio'), 'thumb' => placeholder('600x600', 'c4785a', 'ffffff', 'Jardin+Atardecer')],
            ['alt' => 'Terraza techada con techo abierto', 'full' => placeholder('1200x900', 'f0e8de', '5a7c6b', 'Terraza+Abierta+Alrio'), 'thumb' => placeholder('600x600', 'f0e8de', '5a7c6b', 'Terraza+Abierta')],
            ['alt' => 'Mesa principal con centros de luces', 'full' => placeholder('1200x900', 'fdf9f5', 'c4785a', 'Mesa+Principal+Alrio'), 'thumb' => placeholder('600x600', 'fdf9f5', 'c4785a', 'Mesa+Principal')],
            ['alt' => 'Barra principal del salón', 'full' => placeholder('1200x900', '2a1f1a', 'c4785a', 'Barra+Alrio'), 'thumb' => placeholder('600x600', '2a1f1a', 'c4785a', 'Barra')],
            ['alt' => 'Iluminación nocturna del jardín', 'full' => placeholder('1200x900', '2a1f1a', 'c4785a', 'Jardin+Noche+Alrio'), 'thumb' => placeholder('600x600', '2a1f1a', 'c4785a', 'Jardin+Noche')],
            ['alt' => 'Cocina profesional', 'full' => placeholder('1200x900', 'f0e8de', '5a7c6b', 'Cocina+Alrio'), 'thumb' => placeholder('600x600', 'f0e8de', '5a7c6b', 'Cocina')],
            ['alt' => 'Entrada principal', 'full' => placeholder('1200x900', 'fdf9f5', 'c4785a', 'Entrada+Alrio'), 'thumb' => placeholder('600x600', 'fdf9f5', 'c4785a', 'Entrada')],
        ],
    ]],

    /* ═══ PRICING — cards minimal con borde lateral ═══ */
    ['type' => 'pricing', 'variant' => 'Pricing1', 'data' => [
        'id' => 'paquetes', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Paquetes', 'title' => 'Precios claros, sin sorpresas',
        'subtitle' => 'Todos incluyen salón, jardín, mobiliario, iluminación, cocina, baños, estacionamiento y coordinador.',
        'plans' => [
            ['col' => 'col-md-6 col-lg-4',
             'name' => 'Esencial', 'desc' => 'Ideal para eventos diurnos y reuniones íntimas.',
             'price' => '28,000', 'unit' => 'MXN · L-J · 8h',
             'features' => ['8 horas de evento', 'Salón principal hasta 80 personas', 'Jardín para ceremonia', 'Mobiliario básico', 'Iluminación LED básica', 'Cocina equipada', 'Baños completos', 'Estacionamiento 25 autos', 'Coordinador half-day'],
             'cta' => ['href' => '#contacto', 'label' => 'Cotizar']],
            ['highlight' => true, 'col' => 'col-md-6 col-lg-4',
             'name' => 'Premium', 'desc' => 'El más solicitado para bodas y XV años.',
             'price' => '45,000', 'unit' => 'MXN · V-D · 10h',
             'features' => ['10 horas de evento', 'Salón + Jardín + Terraza', 'Hasta 150 invitados', 'Mobiliario premium', 'Iluminación arquitectónica DMX', 'Sonido Bose 4 zonas', 'Cocina + barra completa', 'Baños + amenities', 'Estacionamiento + valet', 'Coordinador full-time', 'Proyector 4K'],
             'cta' => ['href' => '#contacto', 'label' => 'Cotizar']],
            ['col' => 'col-md-6 col-lg-4',
             'name' => 'Total', 'desc' => 'Para grandes celebraciones sin límites.',
             'price' => '72,000', 'unit' => 'MXN · finde · 14h',
             'features' => ['14 horas de evento', 'Todas las áreas', 'Hasta 200 invitados', 'Mobiliario de diseño', 'Iluminación DMX programable', 'Sonido Bose 6 zonas + DJ booth', 'Cocina + barra + refrigeración', 'Baños + amenities premium', 'Valet + vigilancia', 'Coordinador dedicado', 'Proyector 4K + pantalla', 'Recorrido de degustación'],
             'cta' => ['href' => '#contacto', 'label' => 'Cotizar']],
        ],
        'note' => '* Precios por jornada de evento. 50% al contratar, 50% restante 7 días antes del evento. No incluyen IVA. Consulte precios para temporada alta y días festivos.',
    ]],

    /* ═══ TESTIMONIALS — grid cards con avatar grande ═══ */
    ['type' => 'testimonials', 'variant' => 'Testimonials5', 'data' => [
        'id' => 'resenas', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Reseñas', 'title' => 'Lo que dicen quienes ya celebraron aquí',
        'subtitle' => '4.9 de calificación promedio en Google con 87 reseñas verificadas.',
        'items' => [
            ['author' => 'Mariana y Roberto', 'event' => 'Boda · Abril 2026',
             'text' => 'Buscábamos un salón que no se sintiera genérico. Alrio fue exactamente eso: contemporáneo, funcional y con una luz que ninguna otra opción tenía. El equipo entendió lo que queríamos desde la primera reunión.',
             'avatar' => placeholder('100x100', 'c4785a', 'ffffff', 'MR')],
            ['author' => 'Andrea C.', 'event' => 'XV Años · Marzo 2026',
             'text' => 'La iluminación del salón transformó todo. Cuando mis papás entraron al montaje se lloraron. El equipo de coordinación fue super profesional y se adelantaron a todo. Nadie tuvo que estar pendiente de nada.',
             'avatar' => placeholder('100x100', '5a7c6b', 'ffffff', 'AC')],
            ['author' => 'Luis G., CEO', 'event' => 'Cena corporativa · Febrero 2026',
             'text' => 'Produjimos un evento de lanzamiento para 120 personas. El salón permitió una configuración perfecta, el equipo técnico funcionó sin fallas y el servicio de coordinación fue impecable. Ya tenemos fecha para el próximo año.',
             'avatar' => placeholder('100x100', 'c4785a', 'ffffff', 'LG')],
            ['author' => 'Familia Solís', 'event' => 'Cumpleaños 50 años · Enero 2026',
             'text' => 'Celebramos los 50 años de mi papá con 80 invitados. El espacio fue perfecto para la sorpresa y el salón permitió hacer la fiesta dancing sin problema. La única sugerencia: incluir catering como opción directa.',
             'avatar' => placeholder('100x100', '5a7c6b', 'ffffff', 'FS')],
        ],
        'cta_text' => '¿Quiere ser el próximo?',
        'cta_link' => '#contacto',
        'cta_label' => 'Solicitar cotización',
    ]],

    /* ═══ FAQ — accordion ═══ */
    ['type' => 'faq', 'variant' => 'FAQ3', 'data' => [
        'id' => 'faq', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Preguntas frecuentes', 'title' => 'Resolvemos sus dudas',
        'subtitle' => 'Lo que más nos preguntan antes de apartar una fecha.',
        'items' => [
            ['icon' => 'bi-calendar-check', 'q' => '¿Con cuánta anticipación debo reservar?',
             'a' => 'Recomendamos apartar con 2 a 4 meses de anticipación para fines de semana en temporada alta (marzo-junio, octubre-diciembre). Para eventos entre semana o temporada baja, 1 mes suele ser suficiente.'],
            ['icon' => 'bi-cash', 'q' => '¿Qué incluye exactamente la renta?',
             'a' => 'La renta incluye el salón, jardín y terraza (según paquete), mobiliario completo, iluminación, equipo de sonido, cocina equipada, baños, estacionamiento y coordinador. No incluye catering, decoración, fotografía ni DJ. Todo se detalla en el contrato sin costos ocultos.'],
            ['icon' => 'bi-people', 'q' => '¿Cuál es la capacidad máxima?',
             'a' => '200 personas sentadas en configuración debanquete. El salón tiene capacidad para 120, el jardín para 180 y la terraza techada para 60. Para eventos cocktail la capacidad llega a 280.'],
            ['icon' => 'bi-cloud-rain', 'q' => '¿Qué pasa si llueve?',
             'a' => 'El salón principal con muros de cristal es 100% techado. La terraza tiene techo retráctil. Si el clima es severo, trabajamos con toldos adicionales que cubren el jardín sin perder la estética. En caso de necesitar reagendar, lo hacemos sin costo.'],
            ['icon' => 'bi-music-note', 'q' => '¿Hasta qué hora se puede poner música?',
             'a' => 'Música en vivo o DJ hasta las 12:00 AM entre semana, 1:00 AM en viernes y 2:00 AM en sábado. Después se permite música ambiental a volumen moderado. Contamos con sonometría para asegurar que se cumplan los acuerdos con vecinos.'],
            ['icon' => 'bi-truck', 'q' => '¿Podemos traer proveedores externos?',
             'a' => 'Sí, sin restricción. Banquete, florista, fotógrafo, DJ: elija a quien desee. Si no tiene proveedores, le compartimos nuestra lista curada con quienes trabajamos frecuentemente y ofrecen tarifa preferencial.'],
        ],
        'cta_text' => '¿Otra pregunta?',
        'cta_link' => wa_link('Hola, tengo una pregunta sobre Terraza Alrio en Zapopan.'),
        'cta_label' => 'Preguntar por WhatsApp',
    ]],

    /* ═══ CTA — split imagen + texto ═══ */
    ['type' => 'cta', 'variant' => 'CTA5', 'data' => [
        'scheme' => 'scheme-soft', 'padding' => 'lg', 'fullwidth' => true,
        'label' => 'Reserve ahora',
        'title' => 'Su celebración merece este espacio',
        'text' => 'Agende una visita sin compromiso. Recorra el salón, el jardín y la terraza. Conozca al equipo y descubra por qué Alrio es la opción que sus invitados van a recordar.',
        'btn_label' => 'Agendar visita por WhatsApp',
        'wa_link' => wa_link('Hola, me gustaría agendar una visita para conocer Terraza Alrio en Zapopan.'),
        'image' => placeholder('600x500', 'f0e8de', 'c4785a', 'Terraza+Alrio+Visita'),
        'image_alt' => 'Agende su visita a Terraza Alrio',
        'secondary_label' => 'Llamar por teléfono',
        'secondary_link' => 'tel:+523312345678',
        'note' => 'Le confirmamos en menos de 2 horas. Sin compromiso.',
    ]],

    /* ═══ MAP — iframe ═══ */
    ['type' => 'map', 'variant' => 'Map1', 'data' => [
        'label' => 'Ubicación', 'title' => 'Chapultepec, Zapopan',
        'subtitle' => 'Av. Acueducto 2150, Col. Chapultepec, Zapopan, Jalisco. A 5 minutos de Periférico, salida hacia Av. Patria. Estacionamiento privado con vigilancia.',
    ]],

    /* ═══ CONTACT — formulario centrado ═══ */
    ['type' => 'contact', 'variant' => 'Contact3', 'data' => [
        'id' => 'contacto', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Contacto', 'title' => 'Platiquemos su evento ideal',
        'subtitle' => 'Déjenos sus datos y en menos de 12 horas recibe una cotización personalizada sin costo ni compromiso.',
        'btn_label' => 'Enviar cotización',
        'top_image' => placeholder('800x250', 'f0e8de', 'c4785a', 'Contacto+Terraza+Alrio'),
        'top_image_alt' => 'Terraza Alrio',
        'fields' => [
            ['id' => 'nombre', 'label' => 'Nombre completo', 'placeholder' => 'Su nombre', 'type' => 'text', 'required' => true],
            ['id' => 'telefono', 'label' => 'Teléfono', 'placeholder' => '33 1234 5678', 'type' => 'tel', 'required' => true],
            ['id' => 'tipo', 'label' => 'Tipo de evento', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione una opción', 'selected' => true, 'disabled' => true],
                ['label' => 'Boda'], ['label' => 'XV Años'], ['label' => 'Corporativo'],
                ['label' => 'Cumpleaños'], ['label' => 'Graduación'], ['label' => 'Otro'],
            ]],
            ['id' => 'fecha', 'label' => 'Fecha tentativa', 'type' => 'date'],
            ['id' => 'invitados', 'label' => 'Número de invitados', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione un rango', 'selected' => true, 'disabled' => true],
                ['label' => 'Menos de 50'], ['label' => '50 a 100'], ['label' => '100 a 150'],
                ['label' => '150 a 200'], ['label' => 'Más de 200'],
            ]],
            ['id' => 'mensaje', 'label' => 'Mensaje', 'type' => 'textarea', 'rows' => 3, 'placeholder' => 'Cuéntenos sobre su evento. ¿Qué fecha tiene en mente? ¿Qué estilo de celebración busca?'],
        ],
    ]],

    /* ═══ FOOTER — minimal ═══ */
    ['type' => 'footer', 'variant' => 'Footer2', 'data' => [
        'logo' => 'Terraza Alrio', 'logo_icon' => 'bi-building',
        'desc' => 'Terraza de eventos contemporánea en Chapultepec, Zapopan. Salones, jardín y terraza para bodas, XV años y celebraciones corporativas.',
        'links' => [
            ['href' => '#inicio', 'label' => 'Inicio'], ['href' => '#espacio', 'label' => 'El espacio'],
            ['href' => '#eventos', 'label' => 'Eventos'], ['href' => '#galeria', 'label' => 'Galería'],
            ['href' => '#paquetes', 'label' => 'Paquetes'], ['href' => '#faq', 'label' => 'FAQ'],
            ['href' => '#contacto', 'label' => 'Contacto'],
        ],
        'social' => [
            ['icon' => 'bi-instagram', 'href' => '#', 'target' => true, 'label' => 'Instagram'],
            ['icon' => 'bi-facebook', 'href' => '#', 'target' => true, 'label' => 'Facebook'],
            ['icon' => 'bi-whatsapp', 'href' => wa_link('Hola, quiero información de Terraza Alrio.'), 'target' => true, 'label' => 'WhatsApp'],
        ],
        'contact_line' => 'Av. Acueducto 2150, Col. Chapultepec, Zapopan, Jalisco · +52 33 1234 5678 · hola@alrioterrace.com',
        'copyright' => '&copy; 2026 Terraza Alrio, Zapopan. Todos los derechos reservados.',
    ]],
];

$site = [
    'title' => 'Terraza Alrio | Salones y jardines para eventos en Zapopan',
    'desc' => 'Terraza Alrio — Espacio contemporáneo para bodas, XV años y eventos corporativos en Chapultepec, Zapopan. Salones con muros de cristal, jardín de 400 m² y paquetes desde $28,000 MXN.',
    'fonts' => 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&family=DM+Sans:wght@400;500;600;700&display=swap',
];
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= esc($site['desc']) ?>">
  <meta name="keywords" content="terraza eventos Zapopan, salon bodas Zapopan, jardin eventos Chapultepec, renta terraza Zapopan, salon XV anos Zapopan">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="<?= esc($site['title']) ?>">
  <meta property="og:description" content="<?= esc($site['desc']) ?>">
  <meta property="og:type" content="website">
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
<body class="theme-alrio">

<?php render_template($sections); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox@3.3.0/dist/js/glightbox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
