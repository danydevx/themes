<?php
/**
 * Section helpers — funciones utilitarias para el sistema de templates.
 */

/**
 * Escapa texto para salida HTML segura.
 */
function esc(string $text): string {
    return htmlspecialchars($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

/**
 * Genera una URL de imagen placehold.co.
 */
function placeholder(string $size, string $bg = 'b87c4c', string $fg = 'ffffff', string $text = ''): string {
    $url = "https://placehold.co/{$size}/{$bg}/{$fg}";
    if ($text) {
        $url .= '?text=' . urlencode($text);
    }
    return $url;
}

/**
 * Genera link de WhatsApp con mensaje prellenado.
 */
function wa_link(string $msg, string $phone = '523312345678'): string {
    return 'https://wa.me/' . $phone . '?text=' . urlencode($msg);
}

/**
 * Default data para una sección (header común).
 */
function section_defaults(array $overrides = []): array {
    return array_merge([
        'id'       => '',
        'label'    => '',
        'title'    => '',
        'subtitle' => '',
        'scheme'   => 'scheme-light',
        'padding'  => '',
        'fullwidth'=> false,
        'aos'      => 'fade-up',
        'aos_duration' => '',
        'aos_delay'    => '',
    ], $overrides);
}

/**
 * Genera atributos data-aos para animaciones en secciones.
 */
function anim_attrs(array $d, string $fallback = 'fade-up'): string {
    $attrs = '';
    $aos = $d['aos'] ?? $fallback;
    if (!empty($aos)) {
        $attrs .= ' data-aos="' . esc($aos) . '"';
        if (!empty($d['aos_duration'])) $attrs .= ' data-aos-duration="' . esc((string)$d['aos_duration']) . '"';
        if (!empty($d['aos_delay']))    $attrs .= ' data-aos-delay="' . esc((string)$d['aos_delay']) . '"';
    }
    return $attrs;
}

/**
 * Genera estilo inline para imagen de fondo de sección (con overlay oscuro).
 * Usar en secciones con poco texto: disponibilidad, amenidades, specs, pricing, etc.
 */
function bg_style(array $d): string {
    if (empty($d['bg'])) return '';
    $overlay = $d['bg_overlay'] ?? 'rgba(0,0,0,0.55)';
    return ' style="background: linear-gradient(' . $overlay . ',' . $overlay . '), url(\'' . esc($d['bg']) . '\') center/cover no-repeat;"';
}
