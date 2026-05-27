<?php
/**
 * Terraza Valle — Campestre / Casa de campo.
 * Familia visual: Campestre (única, nueva).
 * Ubicación: Cajititlán, Jalisco (frente al Lago de Chapala).
 * Diferencia: hospedaje con 4 habitaciones, cocina de leña, fogón,
 *   alberca climatizada, actividades junto al lago, horario nocturno 12h.
 * Secciones: 0 recicladas de Magnolia/Arkhé/Analco/Las Flores.
 */
require_once __DIR__ . '/../sections/section-loader.php';

$sections = [
    /* ═══ HEADER — centrado con logo ═══ */
    ['type' => 'header', 'variant' => 'Header3', 'data' => [
        'brand' => 'Valle', 'icon' => 'bi-house-heart',
        'show_wa' => true, 'wa_link' => wa_link('Hola, quiero información de Terraza Valle en Cajititlán.'),
        'links' => [
            ['href' => '#inicio', 'label' => 'Inicio'],
            ['href' => '#espacio', 'label' => 'El espacio'],
            ['href' => '#hospedaje', 'label' => 'Hospedaje'],
            ['href' => '#actividades', 'label' => 'Actividades'],
            ['href' => '#galeria', 'label' => 'Galería'],
            ['href' => '#paquetes', 'label' => 'Paquetes'],
            ['href' => '#resenas', 'label' => 'Reseñas'],
            ['href' => '#faq', 'label' => 'FAQ'],
            ['href' => '#contacto', 'label' => 'Contacto'],
        ],
    ]],

    /* ═══ HERO — full-screen con floating card ═══ */
    ['type' => 'hero', 'variant' => 'Hero5', 'data' => [
        'id' => 'inicio',
        'bg' => placeholder('1920x1080', '2e2416', '7d8a5e', 'Casa+Campo+Valle+Cajititlan'),
        'badge' => 'Cajititlán, Jalisco · Frente al Lago de Chapala',
        'title' => 'Escápese al campo.<br>Viva su evento<br>con el lago de fondo.',
        'text' => 'Casa de campo con hospedaje, alberca climatizada, fogón y cocina de leña. Un espacio donde la celebración encuentra su ritmo natural.',
        'features' => [
            ['icon' => 'bi-water', 'label' => 'Alberca climatizada'],
            ['icon' => 'bi-fire', 'label' => 'Fogón y asador'],
            ['icon' => 'bi-moon-stars', 'label' => 'Horario hasta 12 horas'],
            ['icon' => 'bi-house-door', 'label' => '4 habitaciones'],
        ],
        'cta_primary' => ['href' => wa_link('Hola, quiero consultar disponibilidad para un evento en Terraza Valle, Cajititlán.'), 'label' => 'Consultar disponibilidad'],
        'cta_secondary' => ['href' => '#espacio', 'label' => 'Conocer el espacio'],
    ]],

    /* ═══ ABOUT — imagen + beneficios ═══ */
    ['type' => 'about', 'variant' => 'About1', 'data' => [
        'id' => 'espacio', 'scheme' => 'scheme-soft', 'padding' => 'lg',
        'label' => 'El espacio', 'title' => 'Donde el lago se convierte en testigo',
        'subtitle' => 'Terraza Valle abre sus puertas en Cajititlán como el venue ideal para celebraciones que merecen un escenario natural sin renunciar a la comodidad.',
        'img' => placeholder('800x600', 'f5f0e8', '7d8a5e', 'Terraza+Valle+Jardin+Lago'),
        'img_alt' => 'Terraza Valle con vista al Lago de Chapala',
        'benefits' => [
            ['icon' => 'bi-geo-alt', 'title' => 'Cajititlán, frente al lago', 'text' => 'A 40 minutos de Guadalajara, con acceso directo al malecón y muelle del Lago de Chapala. Fácil llegada desde la carretera 23.'],
            ['icon' => 'bi-people', 'title' => '80+ invitados', 'text' => 'Jardín de 600 m² con vista al lago,terraza techada para 60, salón interior para 40 y áreas al aire libre para hasta 120.'],
            ['icon' => 'bi-clock', 'title' => 'Renta hasta 12 horas', 'text' => 'Horario nocturno disponible. Eventos desde 10 hasta 12 horas continuas. Posibilidad de quedarse a dormir en las habitaciones.'],
            ['icon' => 'bi-shield-check', 'title' => 'Un solo evento por día', 'text' => 'Reservamos un solo evento por jornada. Usted tiene la tranquilidad de que no habrá prisas ni interrupciones.'],
        ],
    ]],

    /* ═══ ROOMS — hospedaje con 4 habitaciones ═══ */
    ['type' => 'rooms', 'variant' => 'Rooms1', 'data' => [
        'id' => 'hospedaje', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Hospedaje', 'title' => 'Quédese a dormir. Sus invitados también.',
        'subtitle' => 'Cuatro habitaciones dentro de la propiedad. Ideales para la familia numerosa, grupos de amigos o el grupo de boda que quiere despertar con vista al lago.',
        'capacity_badge' => '4 habitaciones · Hasta 17 huéspedes',
        'rooms' => [
            ['name' => 'Cabaña del Lago', 'col' => 'col-md-6 col-lg-3', 'badge' => 'Recomendada',
             'img' => placeholder('600x400', 'f5efe6', '7d8a5e', 'Cabana+Lago+Valle'), 'img_alt' => 'Cabaña del Lago con chimenea',
             'desc' => 'Suite con chimenea de piedra, vista al lago y terraza privada. Cama king y sofá cama.',
             'features' => [
                 ['icon' => 'bi-snow', 'label' => 'Chimenea'],
                 ['icon' => 'bi-wifi', 'label' => 'WiFi'],
                 ['icon' => 'bi-cup-hot', 'label' => 'Desayuno incl.'],
             ]],
            ['name' => 'Suite Jardín', 'col' => 'col-md-6 col-lg-3', 'badge' => 'Jacuzzi',
             'img' => placeholder('600x400', 'f5efe6', 'b5673c', 'Suite+Jardin+Valle'), 'img_alt' => 'Suite Jardín con jacuzzi',
             'desc' => 'Habitación con jacuzzi al aire libre, jardín privado y cocinaette básica. Cama queen y litera.',
             'features' => [
                 ['icon' => 'bi-droplet', 'label' => 'Jacuzzi'],
                 ['icon' => 'bi-wifi', 'label' => 'WiFi'],
                 ['icon' => 'bi-flower1', 'label' => 'Jardín priv.'],
             ]],
            ['name' => 'Habitación Terraza', 'col' => 'col-md-6 col-lg-3',
             'img' => placeholder('600x400', 'f5efe6', '7d8a5e', 'Habitacion+Terraza+Valle'), 'img_alt' => 'Habitación Terraza con vistas',
             'desc' => 'Habitación familiar con balcón hacia el jardín y vista parcial al lago. Cama matrimonial y dos individuales.',
             'features' => [
                 ['icon' => 'bi-binoculars', 'label' => 'Vista al lago'],
                 ['icon' => 'bi-wifi', 'label' => 'WiFi'],
                 ['icon' => 'bi-people', 'label' => '4 huéspedes'],
             ]],
            ['name' => 'Suite Río', 'col' => 'col-md-6 col-lg-3',
             'img' => placeholder('600x400', 'f5efe6', 'b5673c', 'Suite+Rio+Valle'), 'img_alt' => 'Suite Río junto al arroyo',
             'desc' => 'Habitación junto al arroyo con cocinaette, zona de fogón y mesa al aire libre. Cama king.',
             'features' => [
                 ['icon' => 'bi-fire', 'label' => 'Fogón priv.'],
                 ['icon' => 'bi-wifi', 'label' => 'WiFi'],
                 ['icon' => 'bi-egg-fried', 'label' => 'Cocinaette'],
             ]],
        ],
        'note' => 'Hospedaje sujeto a disponibilidad. Se puede reservar como parte del paquete Total o por noche aparte. Consulte tarifas de hospedaje por separado.',
    ]],

    /* ═══ SERVICES — grid con iconos ═══ */
    ['type' => 'services', 'variant' => 'Services1', 'data' => [
        'id' => 'servicios', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Instalaciones', 'title' => 'Todo lo que necesita en el campo',
        'subtitle' => 'Terraza Valle combina lo rústico de una casa de campo con las amenidades que un evento memorable requiere.',
        'items' => [
            ['col' => 'col-6 col-md-3', 'icon' => 'bi-water', 'title' => 'Alberca climatizada', 'desc' => '28°C todo el año. Iluminación nocturna, camastros y regaderas. Salvavidas disponible.'],
            ['col' => 'col-6 col-md-3', 'icon' => 'bi-fire', 'title' => 'Fogón y asador', 'desc' => 'Área de fogón con bancos de piedra, asador de ladrillo y mesa familiar para 12.'],
            ['col' => 'col-6 col-md-3', 'icon' => 'bi-egg-fried', 'title' => 'Cocina de leña', 'desc' => 'Estufa Viking, horno de pizza y mesa de trabajo. Catering puede usar el espacio.'],
            ['col' => 'col-6 col-md-3', 'icon' => 'bi-flower2', 'title' => 'Jardines', 'desc' => '600 m² de jardín con vista al lago, senderos de piedra y áreas de sombra naturales.'],
            ['col' => 'col-6 col-md-3', 'icon' => 'bi-music-note-beamed', 'title' => 'Sonido profesional', 'desc' => 'Sistema Bose de 4 zonas, micrófono inalámbrico y cabina básica para DJ.'],
            ['col' => 'col-6 col-md-3', 'icon' => 'bi-car-front', 'title' => 'Estacionamiento', 'desc' => 'Capacidad para 25 vehículos con vigilancia las 24 horas. Servicio de valet parking disponible.'],
            ['col' => 'col-6 col-md-3', 'icon' => 'bi-cup-hot', 'title' => 'Bar y bebidas', 'desc' => 'Barra equipada con refrigerador, hielera y licuadora. Servicio de bartender disponible.'],
            ['col' => 'col-6 col-md-3', 'icon' => 'bi-wifi', 'title' => 'WiFi de 50 Mbps', 'desc' => 'Internet de fibra óptica en todas las áreas. Zona de coworking disponible.'],
        ],
    ]],

    /* ═══ ACTIVITIES — filas alternadas ═══ */
    ['type' => 'event-types', 'variant' => 'EventTypes3', 'data' => [
        'id' => 'actividades', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Actividades', 'title' => 'Más allá del jardín: el lago es parte de la fiesta',
        'subtitle' => 'Cajititlán ofrece experiencias únicas junto al lago. Coordine actividades para sus invitados como parte del evento.',
        'items' => [
            ['img' => placeholder('800x500', 'd4e8c2', '7d8a5e', 'Paseo+Lago+Valle'), 'img_alt' => 'Paseo en lancha por el Lago de Chapala',
             'icon' => 'bi-water', 'title' => 'Paseo en lancha',
             'text' => 'Recorra el Lago de Chapala en lancha privada. Salida desde el muelle de Cajititlán, a 5 minutos de Terraza Valle. Opción de almuerzo a bordo. Consultar costo aparte.'],
            ['img' => placeholder('800x500', 'f5efe6', 'b5673c', 'Pesca+Lago'), 'img_alt' => 'Pesca deportiva en el lago',
             'icon' => 'bi-compass', 'title' => 'Pesca deportiva',
             'text' => 'El lago de Chapala es famoso por su pesca de lobina y bagre. Podemos coordinar instructor de pesca para grupos. Ideal para eventos diurnos.'],
            ['img' => placeholder('800x500', 'd4e8c2', '7d8a5e', 'Ajijic+Paseo'), 'img_alt' => 'Paseo al pueblo de Ajijic',
             'icon' => 'bi-shop', 'title' => 'Paseo a Ajijic',
             'text' => 'El encantador pueblo de Ajijic está a 15 minutos. Paseo opcional para grupos diurnos: callejuelas, galerías, cafés y restaurantes. Servicio de traslado disponible.'],
            ['img' => placeholder('800x500', 'f5efe6', 'b5673c', 'Fogata+Noche'), 'img_alt' => 'Fogata nocturna en Terraza Valle',
             'icon' => 'bi-moon-stars', 'title' => 'Fogata nocturna',
             'text' => 'Cierre la noche con una fogata junto al lago. Malvaviscos, música acústica o simplemente conversación bajo las estrellas. Incluida en paquetes Completo y Total.'],
        ],
    ]],

    /* ═══ GALLERY — horizontal scroll ═══ */
    ['type' => 'gallery', 'variant' => 'Gallery4', 'data' => [
        'id' => 'galeria', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Galería', 'title' => 'Cada rincón tiene su historia',
        'subtitle' => 'Recorra Terraza Valle sin moverse de su silla. Deslice para descubrir el jardín, la alberca y las vistas al lago.',
        'images' => [
            ['alt' => 'Entrada principal con fuente', 'full' => placeholder('900x700', 'f5f0e8', '7d8a5e', 'Entrada+Valle'), 'thumb' => placeholder('400x300', 'f5f0e8', '7d8a5e', 'Entrada+Valle')],
            ['alt' => 'Alberca climatizada de día', 'full' => placeholder('900x700', 'd4e8c2', '00a8c6', 'Alberca+Valle+Día'), 'thumb' => placeholder('400x300', 'd4e8c2', '00a8c6', 'Alberca+Día')],
            ['alt' => 'Fogón al atardecer', 'full' => placeholder('900x700', '2e2416', 'b5673c', 'Fogón+Valle+Atardecer'), 'thumb' => placeholder('400x300', '2e2416', 'b5673c', 'Fogón+Atardecer')],
            ['alt' => 'Terraza con vista al lago', 'full' => placeholder('900x700', 'f5f0e8', '7d8a5e', 'Terraza+Lago+Valle'), 'thumb' => placeholder('400x300', 'f5f0e8', '7d8a5e', 'Terraza+Lago')],
            ['alt' => 'Cocina de leña', 'full' => placeholder('900x700', 'f5efe6', 'b5673c', 'Cocina+Leña+Valle'), 'thumb' => placeholder('400x300', 'f5efe6', 'b5673c', 'Cocina+Leña')],
            ['alt' => 'Jardín con sendero', 'full' => placeholder('900x700', 'd4e8c2', '7d8a5e', 'Jardín+Sendero+Valle'), 'thumb' => placeholder('400x300', 'd4e8c2', '7d8a5e', 'Jardín+Sendero')],
            ['alt' => 'Salón interior con chimenea', 'full' => placeholder('900x700', 'f5efe6', '7d8a5e', 'Salón+Chimenea+Valle'), 'thumb' => placeholder('400x300', 'f5efe6', '7d8a5e', 'Salón+Chimenea')],
            ['alt' => 'Vista al lago al atardecer', 'full' => placeholder('900x700', '2e2416', 'b5673c', 'Lago+Chapala+Atardecer'), 'thumb' => placeholder('400x300', '2e2416', 'b5673c', 'Lago+Atardecer')],
        ],
    ]],

    /* ═══ PRICING — tarjetas simples ═══ */
    ['type' => 'pricing', 'variant' => 'Pricing1', 'data' => [
        'id' => 'paquetes', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Paquetes', 'title' => 'Precios claros, sin sorpresas',
        'subtitle' => 'Todos los paquetes incluyen jardin, mobiliario, estacionamiento, vigilancia y coordinador. Hospedaje y alimentación se cotizan aparte.',
        'plans' => [
            ['col' => 'col-md-6 col-lg-4',
             'name' => 'Día de Campo', 'desc' => 'Ideal para reuniones diurnas y cumpleaños',
             'price' => '$12,000', 'unit' => 'MXN · hasta 40 pax',
             'features' => ['6 horas de evento', 'Jardín + terraza techada', 'Mobiliario básico', 'Estacionamiento', 'Vigilancia', 'Coordinador de medio turno', 'Fogón incluido'],
             'cta' => ['href' => '#contacto', 'label' => 'Cotizar']],
            ['highlight' => true, 'col' => 'col-md-6 col-lg-4',
             'name' => 'Experiencia Completa', 'desc' => 'El favorito para bodas y XV años',
             'price' => '$22,000', 'unit' => 'MXN · hasta 80 pax',
             'features' => ['10 horas de evento', 'Jardín + salón + terraza', 'Mobiliario premium', 'Alberca climatizada', 'Fogón + asador', 'Sonido Bose', 'Coordinador full-time', 'Hospedaje 2 hab. incl.'],
             'cta' => ['href' => '#contacto', 'label' => 'Cotizar']],
            ['col' => 'col-md-6 col-lg-4',
             'name' => 'Evento Total', 'desc' => 'Para grandes celebraciones con todo',
             'price' => '$38,000', 'unit' => 'MXN · 80+ pax',
             'features' => ['12 horas de evento', 'Todas las áreas', 'Mobiliario de diseño', 'Alberca + jacuzzi', 'Cocina de leña + barra', 'Cabina básica para DJ', '4 habitaciones incluidas', 'Coordinador + valet parking'],
             'cta' => ['href' => '#contacto', 'label' => 'Cotizar']],
        ],
        'note' => '* Precios de Lunes a Jueves. Viernes a Domingo tienen ajuste de temporada. 50% al contratar, resto 7 días antes del evento. No incluye IVA ni hospedaje extra. Consulte cotización personalizada.',
    ]],

    /* ═══ TESTIMONIALS — swiper centrado ═══ */
    ['type' => 'testimonials', 'variant' => 'Testimonials1', 'data' => [
        'id' => 'resenas', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Reseñas', 'title' => 'Lo que vivieron nuestros invitados',
        'subtitle' => 'Trustindex verifica que todas las reseñas provienen de Google.',
        'items' => [
            ['stars' => 5, 'text' => '"Casarnos frente al lago con el fogón encendido fue exactamente lo que soñamos. Mis abuelos lloraron cuando vieron la ceremonia. El equipo de Valle se encargo de todo con una precisión que no esperábamos en el campo."',
             'author' => 'Diana y Roberto M.', 'event' => 'Boda · Marzo 2026 · 95 invitados'],
            ['stars' => 5, 'text' => '"Rentamos las 4 habitaciones todo el fin de semana con 12 amigos. El lago, la alberca, el asador... nadie quería irse. La cocina de leña fue el centro de la reunión. Ya estamos planeando volver."',
             'author' => 'Familia Hernández-García', 'event' => 'Reunión familiar · Febrero 2026 · 14 huéspedes'],
            ['stars' => 5, 'text' => '"Buscaba algo diferente para mi despedida de soltera. Valle fue perfecto: la alberca de día, la fogata de noche y el pueblo de Ajijic para el paseo. A mis invitadas les encantó."',
             'author' => 'Sofía R.', 'event' => 'Despedida de soltera · Enero 2026 · 25 amigas'],
            ['stars' => 4, 'text' => '"Organizamos un retiro corporativo de fin de semana. WiFi fuerte, zona de coworking, sala de reuniones con proyector y al final sesión de asador con los compañeros. Productivo y divertido."',
             'author' => 'CEO, TechSolutions GDL', 'event' => 'Retiro corporativo · Diciembre 2025 · 22 asistentes'],
        ],
    ]],

    /* ═══ FAQ — accordion ═══ */
    ['type' => 'faq', 'variant' => 'FAQ1', 'data' => [
        'id' => 'faq', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Preguntas frecuentes', 'title' => 'Resolvemos sus dudas',
        'subtitle' => 'Lo que más nos preguntan antes de apartar una fecha.',
        'items' => [
            ['icon' => 'bi-calendar-check', 'q' => '¿Con cuánto tiempo debo reservar?', 'a' => 'Recomendamos apartar con 2 a 3 meses de anticipación para sábados en temporada alta (marzo-junio, septiembre-diciembre). Entre semana y temporada baja suele haber más disponibilidad. Para fechas cercanas, consúltenos.'],
            ['icon' => 'bi-cash', 'q' => '¿Qué incluye la renta base?', 'a' => 'La renta incluye jardín, terraza techada, salón interior, mobiliario, estacionamiento, vigilancia y coordinador. No incluye hospedaje, catering ni servicios extra como DJ o fotografía. Todo se especifica en el contrato sin costos ocultos.'],
            ['icon' => 'bi-children', 'q' => '¿Se permiten niños?', 'a' => '¡Por supuesto! Los niños son bienvenidos. Tenemos área de juegos en el jardín, chalecos salvavidas para la alberca y menú infantil disponible. No cobramos tarifa adicional por niños menores de 12 años.'],
            ['icon' => 'bi-moon-stars', 'q' => '¿Pueden quedarse a dormir los invitados?', 'a' => 'Sí. El paquete Total incluye 4 habitaciones con capacidad para 17 huéspedes. Para grupos más grandes, podemos recomendar hoteles cercanos en Ajijic o Chapala. La renta de habitaciones extra tiene costo aparte.'],
            ['icon' => 'bi-music-note', 'q' => '¿Hasta qué hora se puede poner música?', 'a' => 'Música en vivo o DJ hasta las 12:00 AM entre semana y 1:00 AM en sábado. Después se permite música ambiental a volumen moderado con puertas cerradas. Contamos con sistema de sonido Bose que no molesta a los vecinos.'],
            ['icon' => 'bi-truck', 'q' => '¿Puedo llegar con mi propio catering?', 'a' => 'Sí, sin restricciones. La cocina de leña está disponible para su proveedor de catering. Si lo prefiere, podemos darle contacto de caterings recomendados en Ajijic y Chapala con quienes trabajamos frecuentemente.'],
        ],
        'cta_text' => '¿Tiene otra pregunta? Escríbanos.',
        'cta_link' => wa_link('Hola, tengo una pregunta sobre Terraza Valle en Cajititlán.'),
        'cta_label' => 'Preguntar por WhatsApp',
    ]],

    /* ═══ CTA — floating WhatsApp card ═══ */
    ['type' => 'cta', 'variant' => 'CTA4', 'data' => [
        'title' => 'Reserve sin compromiso',
        'text' => 'Escríbanos por WhatsApp. Cuéntenos qué tipo de evento tiene en mente, cuántas personas y qué fecha. Le respondemos en menos de 2 horas con una propuesta personalizada.',
        'wa_link' => wa_link('Hola, quiero consultar disponibilidad para un evento en Terraza Valle, Cajititlán.'),
        'btn_label' => 'Escribir por WhatsApp',
        'sub_text' => 'Le confirmamos en menos de 2 horas. Sin compromiso.',
    ]],

    /* ═══ MAP — iframe ═══ */
    ['type' => 'map', 'variant' => 'Map2', 'data' => [
        'padding' => 'sm',
        'label' => 'Ubicación', 'title' => 'Encuéntrenos en Cajititlán',
        'subtitle' => 'A 40 minutos de Guadalajara, sobre la carretera 23, frente al Lago de Chapala. Fácil acceso con cualquier vehículo.',
        'address' => 'Carretera Cajititlán Km 2, Cajititlán, Jalisco',
        'cta_link' => 'https://maps.google.com/?q=Cajititlan+Jalisco+Lago+de+Chapala',
        'cta_label' => 'Abrir en Google Maps',
        'map_title' => 'Terraza Valle · Cajititlán',
    ]],

    /* ═══ CONTACT — formulario centrado ═══ */
    ['type' => 'contact', 'variant' => 'Contact3', 'data' => [
        'id' => 'contacto', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Contacto', 'title' => 'Platiquemos su evento ideal',
        'subtitle' => 'Déjenos sus datos y en menos de 12 horas le preparamos una propuesta personalizada sin costo ni compromiso.',
        'btn_label' => 'Solicitar cotización',
        'top_image' => placeholder('800x300', 'f5f0e8', '7d8a5e', 'Contacto+Valle+Lago'),
        'top_image_alt' => 'Vista al Lago de Chapala desde Terraza Valle',
        'fields' => [
            ['id' => 'nombre', 'label' => 'Nombre completo', 'placeholder' => 'Su nombre', 'type' => 'text', 'required' => true],
            ['id' => 'telefono', 'label' => 'Teléfono', 'placeholder' => '33 1234 5678', 'type' => 'tel', 'required' => true],
            ['id' => 'tipo', 'label' => 'Tipo de evento', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione una opción', 'selected' => true, 'disabled' => true],
                ['label' => 'Boda'], ['label' => 'XV Años'], ['label' => 'Cumpleaños'],
                ['label' => 'Reunión familiar'], ['label' => 'Evento corporativo'],
                ['label' => 'Retiro'], ['label' => 'Otro'],
            ]],
            ['id' => 'fecha', 'label' => 'Fecha tentativa', 'type' => 'date'],
            ['id' => 'invitados', 'label' => 'Número de invitados', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione un rango', 'selected' => true, 'disabled' => true],
                ['label' => 'Menos de 30'], ['label' => '30 a 60'], ['label' => '60 a 80'], ['label' => '80 a 120'], ['label' => 'Más de 120'],
            ]],
            ['id' => 'mensaje', 'label' => 'Mensaje', 'type' => 'textarea', 'rows' => 3, 'placeholder' => 'Cuéntenos cómo imagina su evento en Terraza Valle. ¿Qué actividades les interesan? ¿Quieren hospedaje? ¿Fogón o cocina de leña?'],
        ],
    ]],

    /* ═══ FOOTER — 3 columnas + newsletter ═══ */
    ['type' => 'footer', 'variant' => 'Footer3', 'data' => [
        'logo' => 'Terraza Valle', 'logo_icon' => 'bi-house-heart',
        'desc' => 'Casa de campo en Cajititlán, Jalisco, frente al Lago de Chapala. Alberca, hospedaje, fogón y cocina de leña para eventos inolvidables.',
        'social' => [
            ['icon' => 'bi-instagram', 'href' => '#', 'target' => true, 'label' => 'Instagram'],
            ['icon' => 'bi-facebook', 'href' => '#', 'target' => true, 'label' => 'Facebook'],
            ['icon' => 'bi-whatsapp', 'href' => wa_link('Hola, quiero información de Terraza Valle.'), 'target' => true, 'label' => 'WhatsApp'],
        ],
        'links_heading' => 'Enlaces',
        'links' => [
            ['href' => '#inicio', 'label' => 'Inicio'],
            ['href' => '#espacio', 'label' => 'El espacio'],
            ['href' => '#hospedaje', 'label' => 'Hospedaje'],
            ['href' => '#actividades', 'label' => 'Actividades'],
            ['href' => '#paquetes', 'label' => 'Paquetes'],
            ['href' => '#faq', 'label' => 'FAQ'],
            ['href' => '#contacto', 'label' => 'Contacto'],
        ],
        'newsletter' => [
            'heading' => 'Ofertas y fechas disponibles',
            'text' => 'Reciba promociones exclusivas y disponibilidad de últimas fechas.',
            'placeholder' => 'Su correo electrónico',
            'btn' => 'Suscribirse',
        ],
        'contact_items' => [
            ['icon' => 'bi-geo-alt', 'text' => 'Carretera Cajititlán Km 2<br>Cajititlán, Jalisco'],
            ['icon' => 'bi-telephone', 'text' => '+52 33 1234 5678'],
            ['icon' => 'bi-envelope', 'text' => 'hola@terrazavalle.com'],
            ['icon' => 'bi-clock', 'text' => 'Visitas: previa cita<br>Lun-Dom 9AM-7PM'],
        ],
        'copyright' => '&copy; 2026 Terraza Valle, Cajititlán. Todos los derechos reservados.',
    ]],
];

$site = [
    'title' => 'Terraza Valle | Casa de campo con alberca y hospedaje en Cajititlán',
    'desc' => 'Terraza Valle — Casa de campo en Cajititlán, Jalisco, frente al Lago de Chapala. Alberca climatizada, fogón, cocina de leña, 4 habitaciones y espacio para 80+ invitados. Paquetes desde $12,000 MXN.',
    'fonts' => 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&family=Nunito:wght@400;500;600;700&display=swap',
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
<body class="theme-valle">

<?php render_template($sections); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/glightbox@3.3.0/dist/js/glightbox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
