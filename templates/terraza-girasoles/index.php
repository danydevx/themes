<?php
/**
 * Terraza Los Girasoles — Festivo infantil (#6).
 * Familia visual: Festivo Familiar (diferente de Las Flores).
 * Colores: amarillo solar (#f4a020) + naranja cálido (#e07020) + verde tierno.
 * Tipografía: Nunito para títulos, Inter para cuerpo.
 * Diferencia principal: Hero split asimétrico, galería grid,
 *   cards de paquetes verticales, testimonios horizontales con estrellas.
 */
require_once __DIR__ . '/../sections/section-loader.php';

$sections = [
    /* ═══ HEADER — sticky con blur, logo izquierdo ═══ */
    ['type' => 'header', 'variant' => 'Header1', 'data' => [
        'brand' => 'Los Girasoles', 'icon' => 'bi-sun',
        'show_wa' => true, 'wa_link' => wa_link('Hola, quiero información de Terraza Los Girasoles.'),
        'links' => [
            ['href' => '#inicio', 'label' => 'Inicio'],
            ['href' => '#alberca', 'label' => 'Alberca'],
            ['href' => '#amenidades', 'label' => 'Instalaciones'],
            ['href' => '#eventos', 'label' => 'Fiestas'],
            ['href' => '#galeria', 'label' => 'Galería'],
            ['href' => '#precios', 'label' => 'Paquetes'],
            ['href' => '#resenas', 'label' => 'Reseñas'],
            ['href' => '#faq', 'label' => 'FAQ'],
            ['href' => '#contacto', 'label' => 'Contacto'],
        ],
    ]],

    /* ═══ HERO — split 60/40 con imagen lateral ═══ */
    ['type' => 'hero', 'variant' => 'Hero2', 'data' => [
        'id' => 'inicio',
        'bg' => placeholder('1920x1080', 'f4a020', 'ffffff', 'Girasoles+Terraza+Infantil'),
        'label' => 'Terraza Los Girasoles',
        'title' => 'Donde las sonrisas<br>no terminan<br>de florecer',
        'text' => 'Alberca climatizada, juegos al aire libre, jardín de 500 m² y todo lo necesario para que la fiesta de sus hijos sea un día inolvidable.',
        'cta_primary' => ['href' => wa_link('Hola, quiero cotizar una fiesta infantil en Terraza Los Girasoles.'), 'label' => 'Cotizar mi fiesta'],
        'cta_secondary' => ['href' => '#alberca', 'label' => 'Ver alberca'],
    ]],

    /* ═══ POOL — alberca con características ═══ */
    ['type' => 'pool', 'variant' => 'Pool1', 'data' => [
        'id' => 'alberca', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Alberca', 'title' => 'Diversión bajo el sol todo el año',
        'subtitle' => 'Alberca climatizada con chapoteadero, tobogán acuático y supervisión de salvavidas certificado durante todo el evento.',
        'main_image' => placeholder('800x500', '00a8c6', 'ffffff', 'Alberca+Girasoles'),
        'main_image_alt' => 'Alberca principal Terraza Los Girasoles',
        'main_badge' => 'Climatizada a 28°C',
        'features' => [
            ['icon' => 'bi-thermometer-sun', 'value' => '28°C', 'label' => 'Temperatura'],
            ['icon' => 'bi-arrows-fullscreen', 'value' => '45 m²', 'label' => 'Superficie'],
            ['icon' => 'bi-rulers', 'value' => '1.3 m', 'label' => 'Profundidad máx.'],
            ['icon' => 'bi-life-preserver', 'value' => 'Si', 'label' => 'Salvavidas'],
        ],
        'images' => [
            ['src' => placeholder('400x300', 'caf0f8', '00a8c6', 'Chapoteadero'), 'alt' => 'Chapoteadero para niños'],
            ['src' => placeholder('400x300', 'caf0f8', '00a8c6', 'Tobogán'), 'alt' => 'Tobogán acuático'],
            ['src' => placeholder('400x300', 'caf0f8', '00a8c6', 'Cascada'), 'alt' => 'Cascada decorativa'],
            ['src' => placeholder('400x300', 'caf0f8', '00a8c6', 'Alberca+Noche'), 'alt' => 'Alberca iluminada de noche'],
        ],
        'safety_title' => 'Protocolo de seguridad',
        'safety' => "Cerco perimetral de 1.2 m con puerta de seguridad con bisagra.\nSalvavidas certificado presente durante toda la renta.\nChapoteadero independiente para menores de 5 años (30 cm profundidad).\nReglamento de alberca firmado por el responsable al contratar.",
    ]],

    /* ═══ AMENITIES — grid de 4 cards grandes ═══ */
    ['type' => 'amenities', 'variant' => 'Amenities2', 'data' => [
        'id' => 'amenidades', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Instalaciones', 'title' => 'Todo listo para la mejor fiesta',
        'subtitle' => 'En Los Girasoles nos encargamos de los detalles para que usted solo disfrute con sus invitados.',
        'categories' => [
            ['icon' => 'bi-controller', 'title' => 'Juegos y entretenimiento',
             'items' => [
                 ['icon' => 'bi-check-circle-fill', 'label' => '6 inflables (brincolín, tobogán, tumbling)'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Área de piñatas techada'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Juegos de jardín (sube y baja, aros, casita)'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Mesa de manualidades y pintacaritas'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Bocina Bluetooth para música'],
             ]],
            ['icon' => 'bi-egg-fried', 'title' => 'Cocina y comedor',
             'items' => [
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Cocina equipada con estufa y refrigerador'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Barra de servicio y hielera industrial'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Mesas y sillas infantiles'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Mantelería y cubresillas de colores'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Área de pastel y mesa de regalos'],
             ]],
            ['icon' => 'bi-house-heart', 'title' => 'Comodidades',
             'items' => [
                 ['icon' => 'bi-check-circle-fill', 'label' => '4 baños con regadera y cambiador'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'WiFi en toda la propiedad'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Estacionamiento para 35 autos'],
                 ['icon' => 'bi-check-circle-fill', 'label' => 'Área social para adultos con asador'],
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

    /* ═══ EVENT TYPES — horizontal scroll cards ═══ */
    ['type' => 'event-types', 'variant' => 'EventTypes2', 'data' => [
        'id' => 'eventos', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Fiestas', 'title' => 'Cada edad merece su celebración',
        'subtitle' => 'Adaptamos el espacio y las actividades para que cada grupo de edad se divierta al máximo.',
        'items' => [
            ['img' => placeholder('600x400', 'fef9e6', 'f4a020', '1-3+Años'), 'img_alt' => 'Fiesta para 1 a 3 años', 'icon' => 'bi-balloon', 'title' => '1 a 3 años', 'text' => 'Chapoteadero, juegos sensoriales, área de gateo acolchada y menú infantil suave.'],
            ['img' => placeholder('600x400', 'fef9e6', 'e07020', '4-7+Años'), 'img_alt' => 'Fiesta para 4 a 7 años', 'icon' => 'bi-rocket', 'title' => '4 a 7 años', 'text' => 'Brincolín, pintacaritas, búsqueda del tesoro y talleres creativos en el jardín.'],
            ['img' => placeholder('600x400', 'fef9e6', 'f4a020', '8-12+Años'), 'img_alt' => 'Fiesta para 8 a 12 años', 'icon' => 'bi-controller', 'title' => '8 a 12 años', 'text' => 'Alberca, torneo de juegos, karaoke, pista de baile iluminada y concurso de talentos.'],
            ['img' => placeholder('600x400', 'fef9e6', 'e07020', 'Bautizo'), 'img_alt' => 'Bautizo en Los Girasoles', 'icon' => 'bi-droplet', 'title' => 'Bautizos', 'text' => 'Ambiente sereno, jardín para recibir a los abuelos y espacio techado para la comida familiar.'],
            ['img' => placeholder('600x400', 'fef9e6', 'f4a020', 'Familiar'), 'img_alt' => 'Fiesta familiar', 'icon' => 'bi-people', 'title' => 'Reunión familiar', 'text' => 'Alberca para todos, asador, jardín amplio y área de descanso para los adultos.'],
        ],
        'cta' => ['href' => '#precios', 'label' => 'Ver todos los paquetes'],
    ]],

    /* ═══ GALLERY — grid asimétrico de 6 imágenes ═══ */
    ['type' => 'gallery', 'variant' => 'Gallery3', 'data' => [
        'id' => 'galeria', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Galería', 'title' => 'Momentos llenos de alegría',
        'subtitle' => 'Así se ven las fiestas en Los Girasoles. Cada imagen cuenta una historia de sonrisas.',
        'images' => [
            ['alt' => 'Niños brincando en el brincolín', 'full' => placeholder('1200x800', 'fef9e6', 'f4a020', 'Brincolín+Girasoles'), 'thumb' => placeholder('600x400', 'fef9e6', 'f4a020', 'Brincolín')],
            ['alt' => 'Fiesta en la alberca', 'full' => placeholder('1200x800', 'caf0f8', '00a8c6', 'Alberca+Fiesta'), 'thumb' => placeholder('600x400', 'caf0f8', '00a8c6', 'Alberca')],
            ['alt' => 'Mesa de pastel decorada', 'full' => placeholder('1200x800', 'fef9e6', 'e07020', 'Mesa+Pastel'), 'thumb' => placeholder('600x400', 'fef9e6', 'e07020', 'Pastel')],
            ['alt' => 'Pintacaritas con niños', 'full' => placeholder('1200x800', 'e8f5e9', '4caf50', 'Pintacaritas'), 'thumb' => placeholder('600x400', 'e8f5e9', '4caf50', 'Pintacaritas')],
            ['alt' => 'Jardín con juegos al aire libre', 'full' => placeholder('1200x800', 'fef9e6', 'f4a020', 'Jardín+Juegos'), 'thumb' => placeholder('600x400', 'fef9e6', 'f4a020', 'Jardín')],
            ['alt' => 'Área de manualidades', 'full' => placeholder('1200x800', 'fff9e6', 'f4a020', 'Manualidades'), 'thumb' => placeholder('600x400', 'fff9e6', 'f4a020', 'Manualidades')],
        ],
    ]],

    /* ═══ PRICING — tarjetas verticales simples ═══ */
    ['type' => 'pricing', 'variant' => 'Pricing1', 'data' => [
        'id' => 'precios', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Paquetes', 'title' => 'Precios claros, sin sorpresas',
        'subtitle' => 'Todos incluyen mobiliario, personal, inflables y 1 hora extra para decorar.',
        'plans' => [
            ['col' => 'col-md-6 col-lg-4',
             'name' => 'Mini Fiesta', 'desc' => 'Ideal para reuniones pequeñas de cumpleaños',
             'price' => '$5,500', 'unit' => 'MXN · hasta 35 niños',
             'features' => ['5 horas de evento', 'Brincolín', 'Chapoteadero', 'Mobiliario infantil', 'Mantelería de colores', 'Piñata', 'Mesa de pastel', 'Bocina Bluetooth', 'Personal (1 mesero)', 'Vigilancia'],
             'cta' => ['href' => '#contacto', 'label' => 'Reservar']],
            ['highlight' => true, 'col' => 'col-md-6 col-lg-4',
             'name' => 'Fiesta Completa', 'desc' => 'El favorito de las familias para cumpleaños',
             'price' => '$8,500', 'unit' => 'MXN · hasta 60 niños',
             'features' => ['7 horas de evento', 'Brincolín + tobogán', 'Alberca climatizada', 'Mobiliario infantil + adulto', 'Mantelería premium', 'Piñata + dulces', 'Mesa de pastel decorada', 'Bocina + micrófono', 'Personal (2 meseros)', 'Vigilancia + valet parking', 'Pintacaritas', 'Coordinador de evento'],
             'cta' => ['href' => '#contacto', 'label' => 'Reservar']],
            ['col' => 'col-md-6 col-lg-4',
             'name' => 'Fiesta Total', 'desc' => 'Para grandes celebraciones con todo incluido',
             'price' => '$11,000', 'unit' => 'MXN · 80+ niños',
             'features' => ['9 horas de evento', '6 inflables', 'Alberca + tobogán', 'Mobiliario premium completo', 'Mantelería + decoración base', 'Piñata + mesa de dulces', 'Mesa de pastel temática', 'Sonido profesional + DJ', 'Personal (3 meseros + coord.)', 'Vigilancia + valet parking + fotógrafo', 'Pintacaritas + taller', 'Kit de bienvenida', 'Limpieza post-evento'],
             'cta' => ['href' => '#contacto', 'label' => 'Reservar']],
        ],
        'note' => '*Precios de Lunes a Jueves. Viernes a Domingo tienen ajuste estacional. Solicite cotización para menos de 30 niños o más de 80. 50% al contratar, resto 7 días antes. No incluye IVA.',
    ]],

    /* ═══ TESTIMONIALS — cards horizontales con estrellas ═══ */
    ['type' => 'testimonials', 'variant' => 'Testimonials2', 'data' => [
        'id' => 'resenas', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Reseñas', 'title' => 'Familias que ya vivieron la experiencia',
        'subtitle' => 'Lo que dicen los papás que celebraron con nosotros.',
        'items' => [
            ['stars' => 5, 'text' => '"Mi hija cumplió 7 años y fue mejor de lo que imaginamos. La alberca, el brincolín, el tobogán... los niños no querían irse. Los meseros estaban al pendiente en todo momento."',
             'author' => 'Familia López García', 'event' => 'Cumpleaños 7 años · Abril 2026'],
            ['stars' => 5, 'text' => '"El cumpleaños de nuestro hijo de 4 años fue perfecto. El área de chapoteadero para los más pequeños fue un éxito. Los abuelos disfrutaron el asador y los adultos el área techada."',
             'author' => 'Familia Hernández Ruiz', 'event' => 'Cumpleaños 4 años · Marzo 2026'],
            ['stars' => 5, 'text' => '"Celebramos el bautizo de nuestra hija y quedamos encantados. El jardín es amplio, la comida del catering estuvo deliciosa y el personal nos ayudó con todo. Súper recomendado."',
             'author' => 'Familia Martínez Soto', 'event' => 'Bautizo · Febrero 2026'],
            ['stars' => 5, 'text' => '"El cumpleaños de mis gemelos de 10 años fue épico. La alberca, el karaoke y el concurso de talentos fueron el cierre perfecto. Ya apartamos para el año que viene."',
             'author' => 'Familia Núñez Pérez', 'event' => 'Cumpleaños 10 años · Enero 2026'],
        ],
    ]],

    /* ═══ CTA — split con imagen y WhatsApp ═══ */
    ['type' => 'cta', 'variant' => 'CTA2', 'data' => [
        'title' => 'Reserve la fecha antes de que se ocupe',
        'text' => 'Los fines de semana se llenan rápido. Escríbanos por WhatsApp y le confirmamos disponibilidad en menos de 2 horas. Sin compromiso.',
        'wa_link' => wa_link('Hola, quiero apartar una fecha para una fiesta en Terraza Los Girasoles.'),
        'btn_label' => 'Escribir por WhatsApp',
        'secondary_label' => 'Ver paquetes',
        'secondary_link' => '#precios',
        'image' => placeholder('500x400', 'f4a020', 'ffffff', 'Girasoles+Fiesta'),
        'image_alt' => 'Fiesta infantil en Terraza Los Girasoles',
        'highlights' => [
            ['icon' => 'bi-calendar-check', 'label' => 'Reservación instantánea'],
            ['icon' => 'bi-check-circle-fill', 'label' => 'Sin compromiso'],
            ['icon' => 'bi-clock-history', 'label' => 'Respuesta en 2 horas'],
        ],
    ]],

    /* ═══ FAQ — accordion simple ═══ */
    ['type' => 'faq', 'variant' => 'FAQ1', 'data' => [
        'id' => 'faq', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Preguntas frecuentes', 'title' => 'Resolvemos sus dudas',
        'subtitle' => 'Lo que más nos preguntan las familias antes de reservar.',
        'items' => [
            ['icon' => 'bi-calendar-check', 'q' => '¿Con cuánto tiempo debo reservar?', 'a' => 'Recomendamos apartar con 4 a 6 semanas de anticipación para sábados. Entre semana suele haber más disponibilidad. Si tiene una fecha cercana, consúltenos: a veces tenemos cancelaciones.'],
            ['icon' => 'bi-cash', 'q' => '¿Qué incluye cada paquete y hay costos ocultos?', 'a' => 'Todos los paquetes incluyen mobiliario, personal, inflables según el plan, mantelería y 1 hora extra para decorar. El único costo adicional es si contrata catering con nosotros o servicios extra como DJ o fotógrafo. Todo se especifica en el contrato, sin cargos ocultos.'],
            ['icon' => 'bi-cloud-rain', 'q' => '¿Qué pasa si llueve el día del evento?', 'a' => 'Contamos con área techada para 80 personas, incluyendo el área de piñatas y la cocina. La alberca es climatizada y se puede usar con lluvia ligera. Si el clima es severo, reagendamos sin costo.'],
            ['icon' => 'bi-egg-fried', 'q' => '¿Puedo llevar mi propio catering?', 'a' => 'Sí, sin restricciones. Puede traer su propio banquete o contratar nuestro menú infantil que incluye: taquiza ($140 p/p), hamburguesas ($60 c/u), hot dogs ($40 c/u), elotes ($25 c/u), aguas frescas y mesa de dulces.'],
            ['icon' => 'bi-clock', 'q' => '¿Horarios disponibles?', 'a' => 'Eventos de 7 AM a 8 PM entre semana, y hasta 10 PM en sábados. La renta base es de 5 a 9 horas según el paquete. Horas extra disponibles con costo adicional.'],
            ['icon' => 'bi-people', 'q' => '¿Pueden asistir adultos?', 'a' => '¡Claro! El paquete incluye mobiliario para adultos en el área social y jardín. Hay paquetes de comida para adultos disponibles. La fiesta es para los niños, pero queremos que los papás también la pasen bien.'],
        ],
        'cta_text' => '¿Tiene otra pregunta? Escríbanos.',
        'cta_link' => wa_link('Hola, tengo una pregunta sobre Terraza Los Girasoles.'),
        'cta_label' => 'Preguntar por WhatsApp',
    ]],

    /* ═══ CONTACT — formulario centrado ═══ */
    ['type' => 'contact', 'variant' => 'Contact1', 'data' => [
        'id' => 'contacto', 'scheme' => 'scheme-soft', 'padding' => 'md',
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

    /* ═══ FOOTER — oscuro con columnas ═══ */
    ['type' => 'footer', 'variant' => 'Footer4', 'data' => [
        'logo' => 'Terraza Los Girasoles', 'logo_icon' => 'bi-sun',
        'desc' => 'El lugar favorito de las familias en Zapopan. Alberca climatizada, juegos inflables, jardín de 500 m² y todo para la fiesta infantil perfecta.',
        'social' => [
            ['icon' => 'bi-instagram', 'href' => '#', 'target' => true, 'label' => 'Instagram'],
            ['icon' => 'bi-facebook', 'href' => '#', 'target' => true, 'label' => 'Facebook'],
            ['icon' => 'bi-tiktok', 'href' => '#', 'target' => true, 'label' => 'TikTok'],
            ['icon' => 'bi-whatsapp', 'href' => wa_link('Hola, quiero información de Terraza Los Girasoles.'), 'target' => true, 'label' => 'WhatsApp'],
        ],
        'columns' => [
            ['col' => 'col-md-3', 'heading' => 'Fiestas', 'links' => [
                ['href' => '#inicio', 'label' => 'Inicio'],
                ['href' => '#alberca', 'label' => 'Alberca'],
                ['href' => '#amenidades', 'label' => 'Instalaciones'],
                ['href' => '#precios', 'label' => 'Paquetes'],
                ['href' => '#galeria', 'label' => 'Galería'],
            ]],
            ['col' => 'col-md-3', 'heading' => 'Legal', 'links' => [
                ['href' => '#', 'label' => 'Aviso de privacidad'],
                ['href' => '#', 'label' => 'Términos y condiciones'],
                ['href' => '#', 'label' => 'Reglamento alberca'],
            ]],
        ],
        'contact_items' => [
            ['icon' => 'bi-geo-alt', 'text' => 'Av. Girasoles 425, Col. Jardines del Sol, Zapopan, Jalisco'],
            ['icon' => 'bi-telephone', 'text' => '+52 33 1234 5678'],
            ['icon' => 'bi-envelope', 'text' => 'hola@lossgirasoles.com'],
        ],
        'copyright' => '&copy; 2026 Terraza Los Girasoles. Todos los derechos reservados.',
    ]],
];

$site = [
    'title' => 'Terraza Los Girasoles | Fiestas infantiles y alberca en Zapopan',
    'desc' => 'Terraza Los Girasoles — Alberca climatizada, juegos inflables y jardín de 500 m² para fiestas infantiles en Zapopan. Paquetes desde $5,500 MXN.',
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
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body class="theme-girasoles">

<?php render_template($sections); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>