<?php
/**
 * Terraza Las Flores — Festivo familiar (#6).
 * Fiestas infantiles, bautizos, cumpleaños de niños.
 * Secciones: 0 recicladas de Magnolia/Arkhé/Analco. Pool1 es sección nueva.
 * Contenido basado en datos reales del mercado mexicano (CONTENT.md).
 */
require_once __DIR__ . '/../sections/section-loader.php';

$sections = [
    /* ═══ HEADER — offcanvas lateral ═══ */
    ['type' => 'header', 'variant' => 'Header4', 'data' => [
        'brand' => 'Las Flores', 'icon' => 'bi-flower2',
        'show_wa' => true, 'wa_link' => wa_link('Hola, quiero información de Terraza Las Flores.'),
        'links' => [
            ['href' => '#inicio', 'label' => 'Inicio'], ['href' => '#alberca', 'label' => 'Alberca'],
            ['href' => '#amenidades', 'label' => 'Instalaciones'], ['href' => '#eventos', 'label' => 'Fiestas'],
            ['href' => '#galeria', 'label' => 'Galería'], ['href' => '#precios', 'label' => 'Paquetes'],
            ['href' => '#resenas', 'label' => 'Reseñas'], ['href' => '#faq', 'label' => 'FAQ'],
            ['href' => '#contacto', 'label' => 'Contacto'],
        ],
    ]],

    /* ═══ HERO — full-screen con stats y overlay ═══ */
    ['type' => 'hero', 'variant' => 'Hero7', 'data' => [
        'id' => 'inicio',
        'bg' => placeholder('1920x1080', 'e87461', 'ffffff', 'Fiesta+Infantil+Las+Flores'),
        'overline' => 'El lugar favorito de las familias en Zapopan',
        'title' => 'Donde cada<br>fiesta se vuelve<br>inolvidable',
        'text' => 'Alberca climatizada, juegos infantiles, jardín de 400 m² y todo lo necesario para la mejor fiesta de sus hijos.',
        'stats' => [
            ['value' => '400', 'label' => 'm² de jardín'],
            ['value' => '150', 'label' => 'Invitados máx.'],
            ['value' => '8', 'label' => 'Horas de evento'],
            ['value' => '5', 'label' => 'Inflables disp.'],
        ],
        'cta_primary' => ['href' => wa_link('Hola, quiero cotizar una fiesta infantil en Terraza Las Flores.'), 'label' => 'Cotizar mi fiesta'],
        'cta_secondary' => ['href' => '#alberca', 'label' => 'Ver alberca'],
        'scroll_hint' => true,
    ]],

    /* ═══ POOL — alberca con imágenes y features (NUEVA) ═══ */
    ['type' => 'pool', 'variant' => 'Pool1', 'data' => [
        'id' => 'alberca', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Alberca', 'title' => 'Diversión acuática todo el año',
        'subtitle' => 'Alberca climatizada con chapoteadero, cascada y tobogán. Supervisada por salvavidas certificado durante todo el evento.',
        'main_image' => placeholder('800x500', '00b4d8', 'ffffff', 'Alberca+Las+Flores'),
        'main_image_alt' => 'Alberca principal Terraza Las Flores',
        'main_badge' => 'Climatizada',
        'features' => [
            ['icon' => 'bi-thermometer-sun', 'value' => '28°C', 'label' => 'Temperatura'],
            ['icon' => 'bi-arrows-fullscreen', 'value' => '40 m²', 'label' => 'Dimensiones'],
            ['icon' => 'bi-water', 'value' => '1.2 m', 'label' => 'Profundidad máx.'],
            ['icon' => 'bi-life-preserver', 'value' => '24/7', 'label' => 'Salvavidas'],
        ],
        'images' => [
            ['src' => placeholder('400x300', 'caf0f8', '00b4d8', 'Chapoteadero'), 'alt' => 'Chapoteadero para niños pequeños'],
            ['src' => placeholder('400x300', 'caf0f8', '00b4d8', 'Tobogán'), 'alt' => 'Tobogán acuático infantil'],
            ['src' => placeholder('400x300', 'caf0f8', '00b4d8', 'Cascada'), 'alt' => 'Cascada decorativa en la alberca'],
            ['src' => placeholder('400x300', 'caf0f8', '00b4d8', 'Iluminación'), 'alt' => 'Alberca iluminada de noche'],
        ],
        'safety_title' => 'Seguridad infantil',
        'safety' => "La alberca cuenta con cerco perimetral de 1.2 m con puerta de seguridad.\nSalvavidas certificado presente durante todo el evento.\nChapoteadero independiente para niños menores de 5 años con profundidad máxima de 30 cm.\nEl uso de la alberca requiere la firma de un reglamento de seguridad al contratar.",
    ]],

    /* ═══ AMENITIES — fullwidth con bg ═══ */
    ['type' => 'amenities', 'variant' => 'Amenities1', 'data' => [
        'id' => 'amenidades', 'scheme' => 'scheme-dark', 'padding' => 'lg',
        'bg' => placeholder('1920x800', '3d2c2a', 'e87461', 'Instalaciones+Las+Flores'),
        'bg_overlay' => 'rgba(30,20,18,0.82)',
        'label' => 'Instalaciones', 'title' => 'Todo lo que necesita en un solo lugar',
        'subtitle' => 'Armar una fiesta infantil nunca fue tan fácil. En Las Flores ya está todo listo.',
        'categories' => [
            ['icon' => 'bi-controller', 'title' => 'Juegos y entretenimiento',
             'items' => [
                 ['icon' => 'bi-check-circle-fill', 'label' => '5 inflables (brincolín, tobogán, tumbling)'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Área de piñatas techada'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Juegos de jardín (aros, sube y baja, casita)'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Mesa de manualidades y pintacaritas'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Bocina Bluetooth para música ambiental'],
             ]],
            ['icon' => 'bi-cup-straw', 'title' => 'Cocina y comedor',
             'items' => [
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Cocina equipada con estufa, horno y refrigerador'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Barra de servicio y hielera industrial'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Mesas y sillas infantiles incluidas'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Mantelería de colores y cubresillas'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Área de pastel y mesa de regalos'],
             ]],
            ['icon' => 'bi-house-heart', 'title' => 'Comodidades',
             'items' => [
                 ['icon' => 'bi-check-circle-fill', 'label' => '4 baños (2 con regadera y cambiador)'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'WiFi en toda la propiedad'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Estacionamiento para 30 autos con vigilancia'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Área social para adultos con sombra'],
                 ['icon' => 'bi-check-circle-fill', 'label' => '1 hora extra sin costo para decorar'],
             ]],
            ['icon' => 'bi-shield-check', 'title' => 'Seguridad',
             'items' => [
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Cerco perimetral completo'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Salida de emergencia señalizada'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Botiquín de primeros auxilios'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Extintores en cocina y áreas comunes'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Vigilancia en estacionamiento'],
             ]],
        ],
    ]],

    /* ═══ EVENT TYPES — horizontal scroll ═══ */
    ['type' => 'event-types', 'variant' => 'EventTypes2', 'data' => [
        'id' => 'eventos', 'scheme' => 'scheme-soft', 'padding' => 'md', 'header_left' => true,
        'label' => 'Fiestas', 'title' => 'Celebre a lo grande',
        'subtitle' => 'Cada edad tiene su estilo. Tenemos el espacio perfecto para cada ocasión.',
        'items' => [
            ['img' => placeholder('600x400', 'fef9f6', 'e87461', '1-3+Años'), 'img_alt' => 'Fiesta 1 a 3 años', 'icon' => 'bi-balloon', 'title' => '1 a 3 años', 'text' => 'Chapoteadero, juegos sensoriales, área de gateo acolchada y menú infantil suave.'],
            ['img' => placeholder('600x400', 'fef9f6', 'f4a261', '4-7+Años'), 'img_alt' => 'Fiesta 4 a 7 años', 'icon' => 'bi-rocket', 'title' => '4 a 7 años', 'text' => 'Brincolín, pintacaritas, búsqueda del tesoro en el jardín y talleres de slime.'],
            ['img' => placeholder('600x400', 'fef9f6', 'e87461', '8-12+Años'), 'img_alt' => 'Fiesta 8 a 12 años', 'icon' => 'bi-controller', 'title' => '8 a 12 años', 'text' => 'Alberca, torneo de juegos, karaoke, pista de baile con luces y concurso de talentos.'],
            ['img' => placeholder('600x400', 'fef9f6', 'f4a261', 'Bautizo'), 'img_alt' => 'Bautizo', 'icon' => 'bi-droplet', 'title' => 'Bautizos', 'text' => 'Ambiente sereno, jardín para recibir a los abuelos y espacio techado para la comida familiar.'],
            ['img' => placeholder('600x400', 'fef9f6', 'e87461', 'Familiar'), 'img_alt' => 'Fiesta familiar', 'icon' => 'bi-people', 'title' => 'Reunión familiar', 'text' => 'Alberca para todos, asador, jardín amplio y área de descanso para los adultos.'],
        ],
        'cta' => ['href' => '#precios', 'label' => 'Ver todos los paquetes'],
    ]],

    /* ═══ GALLERY — grid masonry ═══ */
    ['type' => 'gallery', 'variant' => 'Gallery2', 'data' => [
        'id' => 'galeria', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Galería', 'title' => 'Sonrisas que lo dicen todo',
        'subtitle' => 'Así se viven las fiestas en Las Flores. Recorra nuestra galería de momentos felices.',
        'images' => [
            ['alt' => 'Niños en el brincolín', 'full' => placeholder('1200x1200', 'fef9f6', 'e87461', 'Brincolín'), 'thumb' => placeholder('600x600', 'fef9f6', 'e87461', 'Brincolín')],
            ['alt' => 'Fiesta en la alberca', 'full' => placeholder('1200x1200', 'fef9f6', '00b4d8', 'Alberca+Fiesta'), 'thumb' => placeholder('600x600', 'fef9f6', '00b4d8', 'Alberca')],
            ['alt' => 'Mesa de pastel decorada', 'full' => placeholder('1200x1200', 'fef9f6', 'f4a261', 'Mesa+Pastel'), 'thumb' => placeholder('600x600', 'fef9f6', 'f4a261', 'Pastel')],
            ['alt' => 'Pintacaritas con niños', 'full' => placeholder('1200x1200', 'fef9f6', 'e87461', 'Pintacaritas'), 'thumb' => placeholder('600x600', 'fef9f6', 'e87461', 'Pintacaritas')],
            ['alt' => 'Jardín con juegos infantiles', 'full' => placeholder('1200x1200', 'fef9f6', '90be6d', 'Jardín+Juegos'), 'thumb' => placeholder('600x600', 'fef9f6', '90be6d', 'Jardín')],
            ['alt' => 'Área de manualidades', 'full' => placeholder('1200x1200', 'fef9f6', 'f4a261', 'Manualidades'), 'thumb' => placeholder('600x600', 'fef9f6', 'f4a261', 'Manualidades')],
        ],
    ]],

    /* ═══ PRICING — tabla comparativa ═══ */
    ['type' => 'pricing', 'variant' => 'Pricing2', 'data' => [
        'id' => 'precios', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Paquetes', 'title' => 'Precios transparentes, sin sorpresas',
        'subtitle' => 'Elija el paquete que mejor se adapte a su celebración. Todos incluyen mobiliario, personal y 1 hora extra para decorar.',
        'plans' => [
            ['name' => 'Mini Fiesta', 'price' => '4,500', 'unit' => '30 niños', 'cta' => ['href' => '#contacto', 'label' => 'Reservar'],
             'features' => ['5 horas de evento', 'Brincolín', 'Chapoteadero', 'Mobiliario infantil', 'Mantelería de colores', 'Piñata', 'Mesa de pastel', 'Bocina Bluetooth', 'Personal (1 mesero)', 'Vigilancia estacionamiento']],
             ['highlight' => true, 'name' => 'Fiesta Completa', 'price' => '7,800', 'unit' => '50 niños', 'cta' => ['href' => '#contacto', 'label' => 'Reservar'],
              'features' => ['6 horas de evento', 'Brincolín + tobogán', 'Alberca climatizada', 'Mobiliario infantil + adulto', 'Mantelería premium', 'Piñata + dulces', 'Mesa de pastel decorada', 'Bocina + micrófono', 'Personal (2 meseros)', 'Vigilancia + valet parking', 'Pintacaritas', 'Coordinador de evento']],
             ['name' => 'Fiesta Total', 'price' => '9,800', 'unit' => '80 niños', 'cta' => ['href' => '#contacto', 'label' => 'Reservar'],
              'features' => ['8 horas de evento', '5 inflables', 'Alberca + tobogán', 'Mobiliario premium completo', 'Mantelería + decoración base', 'Piñata + mesa de dulces', 'Mesa de pastel temática', 'Sonido profesional + DJ', 'Personal (3 meseros + coord.)', 'Vigilancia + valet parking + fotógrafo', 'Pintacaritas + taller', 'Coordinador dedicado', 'Kit de bienvenida preferente', 'Limpieza post-evento']],
        ],
        'note' => '*Precios de Lunes a Jueves. Viernes a Domingo tienen ajuste estacional. Solicite cotización para menos de 30 niños o más de 80. Precios no incluyen IVA. 50% al contratar, resto 7 días antes.',
    ]],

    /* ═══ TESTIMONIALS — grid cards ═══ */
    ['type' => 'testimonials', 'variant' => 'Testimonials5', 'data' => [
        'id' => 'resenas', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Reseñas', 'title' => 'Familias felices',
        'subtitle' => 'Lo que dicen los papás que ya celebraron con nosotros.',
        'items' => [
            ['author' => 'Familia González', 'event' => 'Cumpleaños 5 años · Abril 2026', 'text' => '"Mi hija no quería irse. La alberca, el brincolín, el pintacaritas... todo fue perfecto. Los meseros estuvieron al pendiente de los niños todo el tiempo. Ya apartamos para el año que viene."', 'avatar' => placeholder('100x100', 'e87461', 'fff', 'G')],
            ['author' => 'Mamá de Santiago', 'event' => 'Cumpleaños 3 años · Marzo 2026', 'text' => '"El chapoteadero para los más pequeños fue un éxito. Los abuelos disfrutaron el área social con sombra mientras los niños jugaban. Muy seguro, muy limpio, muy bien organizado."', 'avatar' => placeholder('100x100', 'f4a261', 'fff', 'S')],
            ['author' => 'Familia Ramírez', 'event' => 'Bautizo · Febrero 2026', 'text' => '"Celebramos el bautizo de los gemelos y quedamos encantados. El jardín es enorme, la comida del menú infantil estaba deliciosa y el personal nos ayudó con todo. Súper recomendado."', 'avatar' => placeholder('100x100', '90be6d', 'fff', 'R')],
            ['author' => 'Karina y José', 'event' => 'Cumpleaños 8 años · Enero 2026', 'text' => '"Mi hijo quería fiesta de videojuegos y lo logramos. Pusimos pantalla en el jardín con el proyector que nos prestaron y los niños jugaron torneo toda la tarde. La alberca fue el cierre perfecto."', 'avatar' => placeholder('100x100', 'e87461', 'fff', 'K')],
        ],
        'cta_text' => '¿Quiere ser la próxima familia feliz?',
        'cta_link' => '#contacto',
        'cta_label' => 'Ver más reseñas',
    ]],

    /* ═══ CTA — banner con imagen de fondo ═══ */
    ['type' => 'cta', 'variant' => 'CTA3', 'data' => [
        'bg' => placeholder('1920x600', 'e87461', 'ffffff', 'Reserva+Las+Flores'),
        'icon' => 'bi-whatsapp',
        'title' => 'Aparte su fecha hoy',
        'text' => 'Los fines de semana se llenan rápido. Escríbanos por WhatsApp y asegure el mejor día para la fiesta de sus hijos.',
        'btn_label' => 'Reservar por WhatsApp',
        'wa_link' => wa_link('Hola, quiero apartar una fecha para una fiesta en Terraza Las Flores.'),
        'secondary_label' => 'Ver paquetes',
        'secondary_link' => '#precios',
        'footnote' => 'Respondemos en menos de 1 hora. Sin compromiso.',
    ]],

    /* ═══ FAQ — dos columnas ═══ */
    ['type' => 'faq', 'variant' => 'FAQ2', 'data' => [
        'id' => 'faq', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Preguntas frecuentes', 'title' => 'Resolvemos sus dudas',
        'subtitle' => 'Lo que más nos preguntan las familias antes de reservar.',
        'items' => [
            ['icon' => 'bi-calendar-check', 'q' => '¿Con cuánto tiempo debo reservar?', 'a' => 'Recomendamos apartar con 4 a 6 semanas de anticipación para sábados. Entre semana suele haber más disponibilidad. Si tiene una fecha cercana, consúltenos: a veces tenemos cancelaciones.'],
            ['icon' => 'bi-cash', 'q' => '¿Qué incluye cada paquete y hay costos ocultos?', 'a' => 'Todos los paquetes incluyen mobiliario, personal, inflables según el plan, mantelería y 1 hora extra para decorar. El único costo adicional es si contrata catering con nosotros o servicios extra comoDJ o fotógrafo. Todo se especifica en el contrato.'],
            ['icon' => 'bi-cloud-rain', 'q' => '¿Qué pasa si llueve el día del evento?', 'a' => 'Contamos con área techada para 80 personas, incluyendo el área de piñatas y la cocina. La alberca es climatizada y se puede usar con lluvia ligera. Si el clima es severo, reagendamos sin costo.'],
            ['icon' => 'bi-egg-fried', 'q' => '¿Puedo llevar mi propio catering?', 'a' => 'Sí, sin restricciones. Puede traer su propio banquete o contratar nuestro menú infantil que incluye: taquiza ($140 p/p), hamburguesas ($60 c/u), hot dogs ($40 c/u), elotes ($25 c/u), aguas frescas y mesa de dulces.'],
            ['icon' => 'bi-clock', 'q' => '¿Horarios disponibles?', 'a' => 'Eventos de 7 AM a 8 PM entre semana, y hasta 10 PM en sábados. La renta base es de 5 a 8 horas según el paquete. Horas extra disponibles con costo adicional.'],
            ['icon' => 'bi-people', 'q' => '¿Pueden asistir adultos?', 'a' => '¡Claro! El paquete incluye mobiliario para adultos en el área social y jardín. Hay paquetes de comida para adultos disponibles. La fiesta es para los niños, pero queremos que los papás también la pasen bien.'],
        ],
        'cta_text' => '¿Listo para reservar? Escríbanos.',
        'cta_link' => wa_link('Hola, quiero apartar una fecha en Terraza Las Flores.'),
        'cta_label' => 'Reservar por WhatsApp',
    ]],

    /* ═══ MAP — iframe simple ═══ */
    ['type' => 'map', 'variant' => 'Map1', 'data' => [
        'label' => 'Ubicación', 'title' => 'Encuéntrenos fácilmente',
        'subtitle' => 'Av. Las Flores 835, Col. Jardines del Bosque, Zapopan, Jalisco. A 5 minutos de Av. Patria.',
    ]],

    /* ═══ CONTACT — form simple (reusamos Contact1) ═══ */
    ['type' => 'contact', 'variant' => 'Contact1', 'data' => [
        'id' => 'contacto', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Contacto', 'title' => 'Platiquemos la fiesta de sus hijos',
        'subtitle' => 'Déjenos sus datos y le preparamos una propuesta personalizada. Respondemos en menos de 2 horas.',
        'btn_label' => 'Solicitar cotización',
        'fields' => [
            ['id' => 'nombre', 'label' => 'Nombre completo', 'placeholder' => 'Su nombre', 'col' => 'col-md-6', 'type' => 'text', 'required' => true],
            ['id' => 'telefono', 'label' => 'Teléfono', 'placeholder' => '33 1234 5678', 'col' => 'col-md-6', 'type' => 'tel', 'required' => true],
            ['id' => 'edad', 'label' => 'Edad del festejado', 'col' => 'col-md-6', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione una opción', 'selected' => true, 'disabled' => true],
                ['label' => '1 a 3 años'], ['label' => '4 a 7 años'], ['label' => '8 a 12 años'], ['label' => 'Bautizo'], ['label' => 'Otro'],
            ]],
            ['id' => 'invitados', 'label' => 'Niños invitados', 'col' => 'col-md-6', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione un rango', 'selected' => true, 'disabled' => true],
                ['label' => 'Menos de 20'], ['label' => '20 a 40'], ['label' => '40 a 60'], ['label' => 'Más de 60'],
            ]],
            ['id' => 'fecha', 'label' => 'Fecha deseada', 'col' => 'col-md-6', 'type' => 'date'],
            ['id' => 'paquete', 'label' => 'Paquete de interés', 'col' => 'col-md-6', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione un paquete', 'selected' => true, 'disabled' => true],
                ['label' => 'Mini Fiesta'], ['label' => 'Fiesta Completa'], ['label' => 'Fiesta Total'], ['label' => 'Aún no sé'],
            ]],
            ['id' => 'mensaje', 'label' => 'Mensaje', 'type' => 'textarea', 'placeholder' => 'Cuéntenos qué tipo de fiesta imagina para su hijo. ¿Temática? ¿Colores?', 'col' => 'col-12', 'rows' => 3],
        ],
    ]],

    /* ═══ FOOTER — multi-columna ═══ */
    ['type' => 'footer', 'variant' => 'Footer1', 'data' => [
        'brand_col' => 'col-md-4',
        'logo' => 'Terraza Las Flores', 'logo_icon' => 'bi-flower2',
        'desc' => 'El lugar favorito de las familias en Zapopan. Alberca, juegos, jardín y todo para la fiesta infantil perfecta.',
        'social' => [
            ['icon' => 'bi-instagram', 'href' => '#', 'target' => true, 'label' => 'Instagram'],
            ['icon' => 'bi-facebook', 'href' => '#', 'target' => true, 'label' => 'Facebook'],
            ['icon' => 'bi-tiktok', 'href' => '#', 'target' => true, 'label' => 'TikTok'],
            ['icon' => 'bi-whatsapp', 'href' => wa_link('Hola, quiero información de Terraza Las Flores.'), 'target' => true, 'label' => 'WhatsApp'],
        ],
        'columns' => [
            ['col' => 'col-md-2', 'heading' => 'Fiestas', 'links' => [
                ['href' => '#inicio', 'label' => 'Inicio'], ['href' => '#alberca', 'label' => 'Alberca'],
                ['href' => '#amenidades', 'label' => 'Instalaciones'], ['href' => '#precios', 'label' => 'Paquetes'],
            ]],
            ['col' => 'col-md-2', 'heading' => 'Legal', 'links' => [
                ['href' => '#', 'label' => 'Aviso de privacidad'], ['href' => '#', 'label' => 'Términos y condiciones'],
                ['href' => '#', 'label' => 'Reglamento alberca'],
            ]],
        ],
        'contact' => ['heading' => 'Contacto', 'items' => [
            ['icon' => 'bi-geo-alt', 'text' => 'Av. Las Flores 835<br>Col. Jardines del Bosque<br>Zapopan, Jalisco'],
            ['icon' => 'bi-telephone', 'text' => '+52 33 1234 5678'],
            ['icon' => 'bi-envelope', 'text' => 'hola@lasfloresterraza.com'],
        ]],
        'copyright' => '&copy; 2026 Terraza Las Flores. Todos los derechos reservados.',
    ]],
];

$site = [
    'title' => 'Terraza Las Flores | Fiestas infantiles y alberca en Zapopan',
    'desc' => 'Terraza Las Flores — Alberca climatizada, juegos infantiles, inflables y jardín para fiestas de niños en Zapopan. Paquetes todo incluido desde $4,500.',
    'fonts' => 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Nunito:wght@600;700;800;900&display=swap',
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
<body class="theme-flores">

<?php render_template($sections); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox@3.3.0/dist/js/glightbox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
