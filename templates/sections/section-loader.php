<?php
/**
 * Section Loader — carga dinámica de secciones PHP.
 *
 * Uso:
 *   $sections = [
 *       ['type' => 'hero',    'variant' => 'Hero1',    'data' => [...]],
 *       ['type' => 'about',   'variant' => 'About1',   'data' => [...]],
 *   ];
 *   render_template($sections);
 *
 * O también puedes incluir secciones una por una:
 *   section('header', 'Header1', $data);
 */

require_once __DIR__ . '/helpers.php';

/**
 * Carga y ejecuta una sección individual.
 */
function section(string $type, string $variant, array $data = []): void {
    $file = __DIR__ . "/{$type}/{$variant}.php";
    if (file_exists($file)) {
        require $file;
    }
}

/**
 * Renderiza un template completo a partir de un array de secciones.
 */
function render_template(array $sections): void {
    foreach ($sections as $s) {
        if (!empty($s['disabled'])) continue;
        section($s['type'], $s['variant'], $s['data'] ?? []);
    }
}
