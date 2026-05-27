# DESIGN-RULES.md
# Sistema obligatorio de variación visual para templates

## Objetivo

Cada template debe sentirse como un producto distinto, no como una variación menor del mismo layout.

Cambiar colores, textos o imágenes NO cuenta como variación visual suficiente.

Cada template debe cambiar composición, jerarquía, ritmo, navegación, cards, galería y experiencia móvil.

---

## Regla crítica

Antes de escribir código, el agente debe elegir una familia visual y justificar brevemente cómo el nuevo template será diferente a los anteriores.

No está permitido repetir:

- La misma estructura de hero.
- El mismo orden de secciones.
- La misma navegación.
- El mismo patrón de cards.
- El mismo layout de galería.
- El mismo ritmo visual.
- La misma experiencia móvil.
- El mismo uso de espacios, bordes, sombras y proporciones.

Si el template se parece demasiado a uno anterior, NO se entrega. Primero se rediseña.

---

## Familias visuales disponibles

### 1. Editorial elegante

Usar cuando el template debe sentirse sofisticado, amplio y tipo revista.

Características:

- Hero editorial con título grande.
- Imágenes asimétricas.
- Mucho espacio negativo.
- Cards mínimas.
- Bordes finos.
- Ritmo pausado.
- Secciones amplias.

Evitar:

- Demasiadas cards comerciales.
- Hero centrado genérico.
- Exceso de iconos.

---

### 2. Premium luxury

Usar para venues elegantes, jardines premium, bodas o salones de alto costo.

Características:

- Hero oscuro o cinematográfico.
- Tipografía serif para títulos.
- Detalles dorados o metálicos.
- Galería tipo masonry o editorial.
- Fondos profundos.
- Secciones con atmósfera dramática.

Evitar:

- Colores demasiado brillantes.
- Cards genéricas de Bootstrap.
- Layouts muy comerciales.

---

### 3. Moderno comercial

Usar para templates orientados a conversión rápida.

Características:

- Hero con CTA fuerte.
- Beneficios visibles desde arriba.
- Secciones compactas.
- Cards claras y fáciles de escanear.
- Navegación directa.
- Botones visibles.

Evitar:

- Exceso de espacio vacío.
- Layout demasiado artístico.
- Información difícil de encontrar.

---

### 4. Romántico social

Usar para bodas, XV años, bautizos y eventos familiares elegantes.

Características:

- Colores suaves.
- Formas redondeadas.
- Fotos grandes.
- Agenda visual.
- Testimonios destacados.
- Secciones cálidas.

Evitar:

- Exceso de negro.
- Composición rígida.
- Estética corporativa.

---

### 5. Minimalista arquitectónico

Usar para espacios modernos, terrazas sobrias o venues con arquitectura fuerte.

Características:

- Grid rígido.
- Blanco, negro y neutros.
- Bordes finos.
- Tipografía sobria.
- Composición limpia.
- Imágenes bien alineadas.

Evitar:

- Sombras pesadas.
- Iconos decorativos excesivos.
- Colores suaves románticos.

---

### 6. Festivo familiar

Usar para salones familiares, jardines infantiles o espacios más casuales.

Características:

- Hero colorido.
- Secciones dinámicas.
- Cards grandes.
- Iconos presentes.
- Ritmo visual alegre.
- CTA cercano y directo.

Evitar:

- Estética demasiado seria.
- Lujo oscuro.
- Minimalismo rígido.

---

## Variación obligatoria por área

### Hero

No repetir siempre:

- Hero centrado con imagen de fondo.
- Overlay oscuro con texto blanco.
- Split 50/50 simple.

Variar entre:

- Hero editorial.
- Hero collage.
- Hero split asimétrico.
- Hero con galería lateral.
- Hero con card flotante.
- Hero oscuro cinematográfico.
- Hero compacto comercial.
- Hero con calendario destacado.
- Hero con imagen vertical.
- Hero con composición diagonal.

---

### Navegación

Variar entre:

- Header transparente.
- Header sólido.
- Header flotante.
- Logo centrado.
- Navegación lateral en desktop.
- Navegación minimal.
- Header con CTA dominante.
- Header superior + nav inferior.

---

### Galería

No repetir siempre Swiper básico.

Variar entre:

- Masonry.
- Collage editorial.
- Grid asimétrico.
- Swiper con thumbnails.
- Carrusel horizontal amplio.
- Galería fullscreen.
- Galería tipo revista.
- Galería con imagen principal + miniaturas.

---

### Cards

No usar siempre `.card` de Bootstrap.

Variar entre:

- Cards con borde fino.
- Cards horizontales.
- Cards con imagen superior.
- Cards overlay.
- Cards editoriales sin borde.
- Cards tipo lista premium.
- Cards grandes familiares.
- Cards escalonadas.
- Cards con icono flotante.

---

### Orden de secciones

No repetir siempre:

Header → Hero → About → Services → Gallery → Contact → Footer

Variar el orden según la familia visual.

Ejemplos:

- Luxury: Header → Hero → Intro → Gallery → Services → Testimonials → CTA → Contact → Footer
- Comercial: Header → Hero → Benefits → Availability → Event Types → Gallery → CTA → Contact → Footer
- Editorial: Header → Hero → Story → Gallery → Events → Testimonials → FAQ → Contact → Footer
- Familiar: Header → Hero → Event Types → Amenities → Gallery → Packages → Testimonials → CTA → Footer

---

## Ficha obligatoria antes de generar código

Antes de crear archivos, escribir una ficha corta:

- Nombre del template.
- Familia visual.
- Mood visual.
- Público objetivo.
- Tipo de navegación.
- Layout del hero.
- Tipo de galería.
- Tipo de cards.
- Orden de secciones.
- Estrategia móvil.
- Diferencia principal contra templates anteriores.

---

## Validación final obligatoria

Al terminar, responder con una validación:

- Qué cambió en composición.
- Qué cambió en navegación.
- Qué cambió en ritmo visual.
- Qué cambió en cards.
- Qué cambió en galería.
- Qué cambió en responsive.
- Qué CSS se generó.
- Qué secciones fueron importadas en el `main.less`.

Si el template se parece demasiado a otro, detener la entrega y rediseñar.
