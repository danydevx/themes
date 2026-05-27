<?php
/**
 * Terraza Oblatos — Festivo Familiar (#6).
 * Familia visual: Festivo Familiar (verde natural, alberca, ambiente festivo).
 * Colores: beige (#dad7cd) + sage (#a3b18a) + verde bosque (#588157) + verde oscuro (#3a5a40).
 * Tipografía: Playfair Display para títulos, Inter para cuerpo.
 * Secciones: Inicio, Alberca, Instalaciones, Fiestas, Galería, Paquetes, Reseñas, FAQ, Contacto.
 */
require_once __DIR__ . '/../sections/section-loader.php';

$sections = [
    /* ═══ HEADER — sticky con blur ═══ */
    ['type' => 'header', 'variant' => 'Header3', 'data' => [
        'brand' => 'Oblatos', 'icon' => 'bi-droplet-fill',
        'dark' => true,
        'show_wa' => true, 'wa_link' => wa_link('Hola, quiero información de Terraza Oblatos.'),
        'links' => [
            ['href' => '#inicio', 'label' => 'Inicio'],
            ['href' => '#alberca', 'label' => 'Alberca'],
            ['href' => '#instalaciones', 'label' => 'Instalaciones'],
            ['href' => '#fiestas', 'label' => 'Fiestas'],
            ['href' => '#galeria', 'label' => 'Galería'],
            ['href' => '#paquetes', 'label' => 'Paquetes'],
            ['href' => '#resenas', 'label' => 'Reseñas'],
            ['href' => '#faq', 'label' => 'FAQ'],
            ['href' => '#contacto', 'label' => 'Contacto'],
        ],
    ]],

    /* ═══ HERO10 — horizontal split pool hero ═══ */
    ['type' => 'hero', 'variant' => 'Hero10', 'data' => [
        'id' => 'inicio',
        'scheme' => 'scheme-dark',
        'overline' => 'Terraza con alberca · Tlaquepaque',
        'title' => 'El mejor plan:<br>fiesta junto<br>a la alberca',
        'text' => 'Terraza Oblatos es el lugar donde los invitados no quieren irse. Alberca climatizada, jardín amplio y todo lo necesario para una celebración inolvidable.',
        'features' => [
            ['icon' => 'bi-droplet-fill', 'label' => 'Alberca climatizada'],
            ['icon' => 'bi-people', 'label' => 'Hasta 150 invitados'],
            ['icon' => 'bi-sun', 'label' => 'Áreas al aire libre'],
        ],
        'cta_primary' => ['href' => wa_link('Hola, quiero agendar una visita en Terraza Oblatos.'), 'label' => 'Agendar visita'],
        'cta_secondary' => ['href' => '#alberca', 'label' => 'Conocer la alberca'],
        'image' => placeholder('900x700', '344e41', 'a3b18a', 'Oblatos+Alberca+Principal'),
        'image_alt' => 'Terraza Oblatos con alberca climatizada',
        'badge' => 'Desde $18,000 MXN',
    ]],

    /* ═══ ALBERCA — highlight section ═══ */
    ['type' => 'about', 'variant' => 'About7', 'data' => [
        'id' => 'alberca', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'La alberca', 'title' => 'El corazón de toda celebración',
        'subtitle' => 'Una alberca de 12 x 6 metros con sistema de climatización, cascada decorativa y iluminación LED. El lugar donde todos quieren estar.',
        'stats' => [
            ['number' => '12', 'label' => 'm de largo', 'unit' => 'alberca'],
            ['number' => '6', 'label' => 'm de ancho', 'unit' => 'alberca'],
            ['number' => '30°', 'label' => 'temp.', 'unit' => 'climatizada'],
            ['number' => '150', 'label' => 'invitados', 'unit' => 'máx.'],
        ],
        'img' => placeholder('800x600', 'dad7cd', '588157', 'Oblatos+Alberca+Detalle'),
        'img_alt' => 'Alberca climatizada de Terraza Oblatos',
        'img_badge' => 'Alberca principal',
        'features' => [
            ['icon' => 'bi-thermometer-half', 'title' => 'Climatizada todo el año', 'text' => 'Sistema de bomba de calor que mantiene el agua a 30°C. Disponible de enero a diciembre.'],
            ['icon' => 'bi-lightbulb', 'title' => 'Iluminación LED', 'text' => 'Luces sumergidas de colores cálidos. La alberca se ve espectacular de noche para eventos nocturnos.'],
            ['icon' => 'bi-water', 'title' => 'Cascada decorativa', 'text' => 'Efecto cascada en un extremo. Sonido relajante y vista espectacular para ceremonias junto al agua.'],
            ['icon' => 'bi-umbrella', 'title' => 'Área de camastros', 'text' => 'Zona de descanso junto a la alberca con camastros, mesas y sombrillas. Para invitados que prefieren relax.'],
        ],
        'cta' => ['href' => '#paquetes', 'label' => 'Ver paquetes con alberca'],
    ]],

    /* ═══ INSTALACIONES — servicios / facilities ═══ */
    ['type' => 'services', 'variant' => 'Services4', 'data' => [
        'id' => 'instalaciones', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Instalaciones', 'title' => 'Todo listo para su fiesta',
        'subtitle' => 'Cada rincón está pensado para que ustedes solo se diviertan.',
        'items' => [
            ['title' => 'Alberca climatizada', 'desc' => '12 x 6 metros, temperatura todo el año. Iluminación LED, cascada y zona de camastros.'],
            ['title' => 'Terraza techada', 'desc' => 'Área cubierta para 80 personas. Se comunica visualmente con la alberca.'],
            ['title' => 'Jardín abierto', 'desc' => '400 m² de jardín con árboles y pasto. Para ceremony o recepción al aire libre.'],
            ['title' => 'Cocina equipped', 'desc' => 'Estufa industrial, horno, refrigerador y área de servicio. Para catering o cocina propia.'],
            ['title' => 'Sonido y luces', 'desc' => 'Sistema de audio 600W, micrófono inalámbrico, luces DJ y эффекты. Playlist o DJ.'],
            ['title' => 'Estacionamiento', 'desc' => 'Amplio estacionamiento con capacidad para 40 vehículos. Vigilancia las 24 horas.'],
        ],
    ]],

    /* ═══ FIESTAS — tipos de eventos ═══ */
    ['type' => 'event-types', 'variant' => 'EventTypes6', 'data' => [
        'id' => 'fiestas', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Fiestas', 'title' => 'Cada ocasión merece su celebración',
        'subtitle' => 'Cumpleaños, bodas, XV años, bautizos, despedidas. La alberca hace que todo sea más divertido.',
        'items' => [
            ['icon' => 'bi-cake2', 'title' => 'Cumpleaños', 'text' => 'Fiestas de cumpleaños junto a la alberca. Decoración temática, pastel, animación y comida. El cumpleañero elige.', 'price' => 'Desde $12,000', 'price_note' => 'evento'],
            ['icon' => 'bi-heart', 'title' => 'Bodas', 'text' => 'Ceremonia junto a la alberca, recepción bajo las estrellas. Un wedding planner dedicado coordina cada detalle.', 'price' => 'Desde $28,000', 'price_note' => 'evento'],
            ['icon' => 'bi-star', 'title' => 'XV Años', 'text' => 'La fiesta más importante de la adolescence. Alberca, pista de baile, luces y todo lo que sueñe la quinceañera.', 'price' => 'Desde $22,000', 'price_note' => 'evento'],
            ['icon' => 'bi-droplet', 'title' => 'Bautizos', 'text' => 'Celebraciones familiares con ambiente fresco. Los niños disfrutan la alberca mientras los adultos celebran.'],
            ['icon' => 'bi-music-note', 'title' => 'Despedidas', 'text' => 'Despedidas de soltera o soltero con ambiente festivo. Pool party, DJ y barra libre.'],
            ['icon' => 'bi-briefcase', 'title' => 'Corporativos', 'text' => 'Eventos empresariales, cenas de gala o celebraciones de fin de año en un entorno diferente y memorable.'],
        ],
        'cta' => ['href' => '#paquetes', 'label' => 'Ver paquetes'],
    ]],

    /* ═══ GALERÍA — mosaic grid ═══ */
    ['type' => 'gallery', 'variant' => 'Gallery7', 'data' => [
        'id' => 'galeria', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Galería', 'title' => 'Así se ve una fiesta en Oblatos',
        'subtitle' => 'Momentos capturados en eventos reales. La alberca siempre es la protagonista.',
        'images' => [
            ['alt' => 'Alberca iluminada de noche', 'full' => placeholder('800x600', '344e41', 'a3b18a', 'Oblatos+Alberca+Noche'), 'thumb' => placeholder('400x400', '344e41', 'a3b18a', 'Oblatos+Noche')],
            ['alt' => 'Fiesta junto a la alberca', 'full' => placeholder('800x600', '588157', 'dad7cd', 'Oblatos+Fiesta+Alberca'), 'thumb' => placeholder('400x400', '588157', 'dad7cd', 'Oblatos+Fiesta')],
            ['alt' => 'Terraza con luces', 'full' => placeholder('800x600', '3a5a40', 'a3b18a', 'Oblatos+Terraza+Luces'), 'thumb' => placeholder('400x400', '3a5a40', 'a3b18a', 'Oblatos+Luces')],
            ['alt' => 'Cumpleaños junto a la alberca', 'full' => placeholder('800x600', 'dad7cd', '588157', 'Oblatos+Cumpleaños'), 'thumb' => placeholder('400x400', 'dad7cd', '588157', 'Oblatos+Cumple')],
            ['alt' => 'Jardín con decoración', 'full' => placeholder('800x600', '344e41', '588157', 'Oblatos+Jardín+Decoración'), 'thumb' => placeholder('400x400', '344e41', '588157', 'Oblatos+Decor')],
            ['alt' => 'Área de descanso', 'full' => placeholder('800x600', '3a5a40', 'a3b18a', 'Oblatos+Área+Descanso'), 'thumb' => placeholder('400x400', '3a5a40', 'a3b18a', 'Oblatos+Descanso')],
        ],
        'cta_text' => 'Ver más fotos',
        'cta_link' => '#galeria',
    ]],

    /* ═══ PAQUETES — step cards ═══ */
    ['type' => 'packages', 'variant' => 'Packages3', 'data' => [
        'id' => 'paquetes', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Paquetes', 'title' => 'Paquetes todo incluido',
        'subtitle' => 'Todos incluyen acceso a la alberca, jardines, terraza techada, cocina, mobiliario y coordinador.',
        'packages' => [
            ['name' => 'Piscina', 'tagline' => 'Ideal para cumpleaños', 'price' => '12,000', 'capacity' => 'Hasta 60 invitados', 'duration' => '5 horas', 'highlight' => '',
             'extras_gratis' => ['Acceso a alberca', 'Decoración básica', 'Coordinador'],
             'sections' => [
                 ['col' => 'col-md-6', 'icon' => 'bi-droplet-fill', 'title' => 'Alberca', 'items' => ['Acceso a alberca climatizada', 'Camastros y sombrillas', 'Iluminación LED']],
                 ['col' => 'col-md-6', 'icon' => 'bi-clock', 'title' => 'Duración', 'items' => ['5 horas de evento', 'Ampliable a 7 horas', '1 hora extra para decorar']],
                 ['col' => 'col-md-6', 'icon' => 'bi-people', 'title' => 'Capacidad', 'items' => ['Hasta 60 invitados', 'Terraza techada para 40', 'Jardín para 50']],
                 ['col' => 'col-md-6', 'icon' => 'bi-chair', 'title' => 'Mobiliario', 'items' => ['Mesas y sillas', 'Mantelería básica', 'Decoración floral básica']],
                 ['col' => 'col-md-6', 'icon' => 'bi-shield-check', 'title' => 'Servicios', 'items' => ['Cocina equipada', 'Estacionamiento', 'Coordinador de evento']],
                 ['col' => 'col-md-6', 'icon' => 'bi-music-note', 'title' => 'Audio', 'items' => ['Bocinas básicas', 'Micrófono inalámbrico', 'Conexión Bluetooth']],
             ],
             'cta' => ['href' => '#contacto', 'label' => 'Cotizar Piscina']],
            ['name' => 'Oblatos', 'tagline' => 'El favorito para XV y bodas', 'price' => '24,000', 'capacity' => 'Hasta 100 invitados', 'duration' => '8 horas', 'highlight' => 'Más popular',
             'extras_gratis' => ['Alberca + jardín', 'Sonido profesional', 'Coordinador dedicado', 'Decoración premium'],
             'sections' => [
                 ['col' => 'col-md-6', 'icon' => 'bi-droplet-fill', 'title' => 'Alberca + Jardín', 'items' => ['Acceso completo a alberca', '400 m² de jardín', 'Iluminación y sonido']],
                 ['col' => 'col-md-6', 'icon' => 'bi-clock', 'title' => 'Duración', 'items' => ['8 horas de evento', 'Ampliable a 10 horas', '2 horas extra para decorar']],
                 ['col' => 'col-md-6', 'icon' => 'bi-people', 'title' => 'Capacidad', 'items' => ['Hasta 100 invitados', 'Terraza techada completa', 'Jardín + alberca']],
                 ['col' => 'col-md-6', 'icon' => 'bi-music-note-beamed', 'title' => 'Audio', 'items' => ['Sistema 600W', 'Micrófono inalámbrico', 'DJ básico']],
                 ['col' => 'col-md-6', 'icon' => 'bi-lightbulb', 'title' => 'Iluminación', 'items' => ['Luces LED与环境', 'Focos decorativos', 'Guirnaldas sobre alberca']],
                 ['col' => 'col-md-6', 'icon' => 'bi-flower1', 'title' => 'Decoración', 'items' => ['Decoración premium', 'Centros de mesa', 'Arreglos florales']],
                 ['col' => 'col-md-6', 'icon' => 'bi-shield-check', 'title' => 'Servicios', 'items' => ['Cocina + refrigeración', 'Valet parking', 'Coordinador dedicado']],
                 ['col' => 'col-md-6', 'icon' => 'bi-gift', 'title' => 'Extras', 'items' => ['2 horas extra decorar', 'Decoración premium', 'Limpieza post-evento']],
             ],
             'cta' => ['href' => '#contacto', 'label' => 'Cotizar Oblatos']],
            ['name' => 'Gran Fiesta', 'tagline' => 'La experiencia completa', 'price' => '38,000', 'capacity' => 'Hasta 150 invitados', 'duration' => '12 horas', 'highlight' => '',
             'extras_gratis' => ['Alberca + jardín + terraza', 'DJ profesional', 'Barra libre', 'Fotógrafo', 'Valet parking'],
             'sections' => [
                 ['col' => 'col-md-6', 'icon' => 'bi-droplet-fill', 'title' => 'Todo el espacio', 'items' => ['Alberca + jardín + terraza', 'Áreas de descanso', 'Iluminación completa']],
                 ['col' => 'col-md-6', 'icon' => 'bi-clock', 'title' => 'Duración', 'items' => ['12 horas de evento', 'Ampliable a 14 horas', '4 horas extra decorar']],
                 ['col' => 'col-md-6', 'icon' => 'bi-people', 'title' => 'Capacidad', 'items' => ['Hasta 150 invitados', 'Todas las áreas', 'Zona VIP']],
                 ['col' => 'col-md-6', 'icon' => 'bi-music-note-beamed', 'title' => 'Audio + DJ', 'items' => ['Sistema profesional', 'DJ con equipo', 'Micrófonos inalámbricos']],
                 ['col' => 'col-md-6', 'icon' => 'bi-cup-hot', 'title' => 'Barra libre', 'items' => ['Barra con bartender', 'Refrigeradores', 'Hieleras y vasos']],
                 ['col' => 'col-md-6', 'icon' => 'bi-camera', 'title' => 'Extras Gala', 'items' => ['Fotógrafo 3 horas', 'Proyector + pantalla', 'Coordinador full-time']],
                 ['col' => 'col-md-6', 'icon' => 'bi-flower1', 'title' => 'Decoración', 'items' => ['Decoración full', 'Florería premium', 'Iluminación DJ']],
                 ['col' => 'col-md-6', 'icon' => 'bi-car-front', 'title' => 'Estacionamiento', 'items' => ['Valet parking', 'Vigilancia 24 hrs', 'Estacionamiento 60 autos']],
             ],
             'cta' => ['href' => '#contacto', 'label' => 'Cotizar Gran Fiesta']],
        ],
        'note' => '* Precios de Lunes a Jueves. Viernes a Domingo tienen ajuste de temporada. 50% al contratar, resto 7 días antes. No incluye IVA.',
    ]],

    /* ═══ RESEÑAS — testimonios ═══ */
    ['type' => 'testimonials', 'variant' => 'Testimonials8', 'data' => [
        'id' => 'resenas', 'scheme' => 'scheme-light', 'padding' => 'md',
        'label' => 'Reseñas', 'title' => 'Lo que dicen quienes ya festejaron',
        'subtitle' => 'Más de 200 eventos realizados en Terraza Oblatos.',
        'items' => [
            ['stars' => 5, 'text' => 'Rentamos para el cumpleaños de mi hijo de 15 y fue épico. La alberca estuvo abierta toda la noche y los invitados no paraban de entrar al agua. El sonido era increíble. Volveremos.',
             'author' => 'Carlos M.', 'event' => 'Cumpleaños · Abril 2026'],
            ['stars' => 5, 'text' => 'Los XV de mi hija fueron exactamente como los soñó. La ceremonia junto a la alberca con las luces de noche fue mágica. El equipo de coordinación se encargo de todo.',
             'author' => 'Laura G.', 'event' => 'XV Años · Marzo 2026'],
            ['stars' => 5, 'text' => 'Hicimos la despedida de soltera de mi hermana y fue inolvidable. Pool party con DJ, barra libre y la alberca. Ninguna quería que terminara.',
             'author' => 'Andrea R.', 'event' => 'Despedida · Febrero 2026'],
            ['stars' => 5, 'text' => 'El bautizo fue en la mañana y los niños pasaron toda la tarde en la alberca mientras los adultos comíamos. Todos quedaron encantados con el lugar.',
             'author' => 'Familia Sanchéz', 'event' => 'Bautizo · Enero 2026'],
        ],
    ]],

    /* ═══ FAQ — preguntas frecuentes ═══ */
    ['type' => 'faq', 'variant' => 'FAQ4', 'data' => [
        'id' => 'faq', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Preguntas frecuentes', 'title' => 'Resolvemos sus dudas',
        'subtitle' => 'Lo que más nos preguntan antes de reservar.',
        'items' => [
            ['icon' => 'bi-droplet-fill', 'q' => '¿La alberca está climatizada todo el año?', 'a' => 'Sí. Contamos con sistema de bomba de calor que mantiene el agua a 30°C durante todo el año, de enero a diciembre.'],
            ['icon' => 'bi-calendar-check', 'q' => '¿Con cuánta anticipación debo reservar?', 'a' => 'Recomendamos reservar con 2 a 3 meses de anticipación para temporada alta (abril-junio, septiembre-diciembre). Para fechas entre semana o temporada baja, a veces hay disponibilidad con 15 días.'],
            ['icon' => 'bi-people', 'q' => '¿Cuántos invitados caben?', 'a' => 'Hasta 150 personas en配置的 complète. La alberca soporta 40-50 personas simultáneamente. La terraza techada cubre 80 y el jardín 100.'],
            ['icon' => 'bi-clock', 'q' => '¿Cuál es el horario de la fiesta?', 'a' => 'La renta incluye el acceso al espacio por 8 horas (paquete Oblatos). events pueden extender hasta las 2:00 AM. Música y DJ hasta las 12:00 AM.'],
            ['icon' => 'bi-cloud-rain', 'q' => '¿Qué pasa si llueve?', 'a' => 'La terraza techada cubre 80 invitados. Además, montamos carpas transparentes como backup sin costo adicional. La alberca se ve bonita incluso con lluvia.'],
            ['icon' => 'bi-truck', 'q' => '¿Puedo traer mi propio catering?', 'a' => 'Sí, puede traer sus propios proveedores sin costo adicional. También tenemos una lista de caterings recomendados con los que trabajamos frecuentemente.'],
        ],
        'cta_text' => '¿Listo para festejar? Escríbanos.',
        'cta_link' => wa_link('Hola, quiero apartar una fecha en Terraza Oblatos.'),
        'cta_label' => 'Reservar por WhatsApp',
    ]],

    /* ═══ MAP — ubicación ═══ */
    ['type' => 'map', 'variant' => 'Map5', 'data' => [
        'label' => 'Ubicación', 'title' => 'Encuéntrenos en Tlaquepaque',
        'subtitle' => 'Fácil acceso desde Av. Toluquilla, Periférico Sur y la zona metropolitana.',
        'address' => 'Calle Oblatos 1420, Col. La Guadalupana, Tlaquepaque, Jalisco',
        'cross_streets' => 'Entre Av. Toluquilla y Callejón del Eden',
        'phone' => '+52 33 1234 5678',
        'whatsapp' => wa_link('Hola, quiero información de Terraza Oblatos.'),
        'email' => 'hola@terrazaoblatos.com',
        'hours' => [
            ['days' => 'Lunes a Viernes', 'time' => '10:00 AM - 6:00 PM'],
            ['days' => 'Sábado', 'time' => '10:00 AM - 4:00 PM'],
            ['days' => 'Domingo', 'time' => 'Previa cita'],
        ],
        'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14929.052536526394!2d-103.409631!3d20.653916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428add9a9232fe3%3A0x4cf3ee4e3f8b5c6a!2sTlaquepaque%2C%20Jal.!5e0!3m2!1ses!2smx!4v1700000000000',
        'map_title' => 'Terraza Oblatos en Tlaquepaque',
        'cta_link' => 'https://www.google.com/maps/search/?api=1&query=Calle+Oblatos+1420+Tlaquepaque+Jalisco',
        'cta_label' => 'Cómo llegar por Google Maps',
    ]],

    /* ═══ CONTACTO ═══ */
    ['type' => 'contact', 'variant' => 'Contact3', 'data' => [
        'id' => 'contacto', 'scheme' => 'scheme-soft', 'padding' => 'md',
        'label' => 'Contacto', 'title' => 'Platiquemos de su fiesta',
        'subtitle' => 'Déjenos sus datos y le respondemos en menos de 2 horas con una propuesta personalizada.',
        'btn_label' => 'Solicitar cotización',
        'info_title' => 'Síguenos en redes',
        'fields' => [
            ['id' => 'nombre', 'label' => 'Nombre completo', 'placeholder' => 'Su nombre', 'col' => 'col-md-6', 'type' => 'text', 'required' => true],
            ['id' => 'telefono', 'label' => 'Teléfono', 'placeholder' => '33 1234 5678', 'col' => 'col-md-6', 'type' => 'tel', 'required' => true],
            ['id' => 'tipo', 'label' => 'Tipo de evento', 'col' => 'col-md-6', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione una opción', 'selected' => true, 'disabled' => true],
                ['label' => 'Cumpleaños'], ['label' => 'XV Años'], ['label' => 'Boda'],
                ['label' => 'Bautizo'], ['label' => 'Despedida'], ['label' => 'Corporativo'], ['label' => 'Otro'],
            ]],
            ['id' => 'fecha', 'label' => 'Fecha tentativa', 'col' => 'col-md-6', 'type' => 'date'],
            ['id' => 'invitados', 'label' => 'Número de invitados', 'col' => 'col-md-6', 'type' => 'select', 'options' => [
                ['label' => 'Seleccione un rango', 'selected' => true, 'disabled' => true],
                ['label' => 'Menos de 50'], ['label' => '50 a 80'], ['label' => '80 a 120'], ['label' => '120 a 150'],
            ]],
            ['id' => 'mensaje', 'label' => 'Mensaje', 'type' => 'textarea', 'placeholder' => 'Cuéntenos cómo imagina su fiesta en Oblatos.', 'col' => 'col-12', 'rows' => 3],
        ],
        'social' => [
            ['icon' => 'bi-facebook', 'href' => '#', 'label' => 'Facebook'],
            ['icon' => 'bi-instagram', 'href' => '#', 'label' => 'Instagram'],
            ['icon' => 'bi-tiktok', 'href' => '#', 'label' => 'TikTok'],
            ['icon' => 'bi-whatsapp', 'href' => wa_link('Hola, quiero información de Terraza Oblatos.'), 'label' => 'WhatsApp'],
        ],
        'hashtag' => 'TerrazaOblatos',
    ]],

    /* ═══ FOOTER ═══ */
    ['type' => 'footer', 'variant' => 'Footer7', 'data' => [
        'logo' => 'Terraza Oblatos', 'logo_icon' => 'bi-droplet-fill',
        'desc' => 'Terraza con alberca climatizada en Tlaquepaque. El lugar donde las fiestas son realmente memorables. Celebraciones hasta 150 invitados.',
        'social' => [
            ['icon' => 'bi-instagram', 'href' => '#', 'target' => true, 'label' => 'Instagram'],
            ['icon' => 'bi-facebook', 'href' => '#', 'target' => true, 'label' => 'Facebook'],
            ['icon' => 'bi-tiktok', 'href' => '#', 'target' => true, 'label' => 'TikTok'],
            ['icon' => 'bi-whatsapp', 'href' => wa_link('Hola, quiero información de Terraza Oblatos.'), 'target' => true, 'label' => 'WhatsApp'],
        ],
        'columns' => [
            ['heading' => 'Navegación', 'links' => [
                ['href' => '#inicio', 'label' => 'Inicio'],
                ['href' => '#alberca', 'label' => 'Alberca'],
                ['href' => '#instalaciones', 'label' => 'Instalaciones'],
                ['href' => '#fiestas', 'label' => 'Fiestas'],
                ['href' => '#galeria', 'label' => 'Galería'],
                ['href' => '#paquetes', 'label' => 'Paquetes'],
            ]],
        ],
        'contact_items' => [
            ['icon' => 'bi-geo-alt', 'text' => 'Calle Oblatos 1420, Col. La Guadalupana, Tlaquepaque, Jalisco'],
            ['icon' => 'bi-telephone', 'text' => '+52 33 1234 5678'],
            ['icon' => 'bi-envelope', 'text' => 'hola@terrazaoblatos.com'],
        ],
        'copyright' => '&copy; 2026 Terraza Oblatos. Todos los derechos reservados.',
        'legal_links' => [
            ['href' => '#', 'label' => 'Aviso de privacidad'],
            ['href' => '#', 'label' => 'Términos y condiciones'],
        ],
    ]],
];

$site = [
    'title' => 'Terraza Oblatos | Alberca climatizada para fiestas en Tlaquepaque',
    'desc' => 'Terraza Oblatos \u2014 Alberca climatizada, jardines y terraza techada para fiestas de cumpleaños, XV años, bodas y celebraciones hasta 150 invitados en Tlaquepaque, Jalisco.',
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
<body class="theme-oblatos">

<?php render_template($sections); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>