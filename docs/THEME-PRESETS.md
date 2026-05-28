# THEME-PRESETS.md

Estrategia para manejar varios esquemas de color sin duplicar templates.

## Objetivo

Cuando un template comparte las mismas secciones y estructura, no crear otra carpeta.
Use un solo template base con presets de color/tema.

## Patrón recomendado (build-time)

Para un template base `templates/{template}/`:

1. Mantener un solo `index.php`.
2. Definir presets permitidos (ej. `base`, `ocean`, `dark`) en PHP.
3. Cargar CSS de salida por preset:
   - `assets/css/main-base.css`
   - `assets/css/main-ocean.css`
   - `assets/css/main-dark.css`
4. Mantener entradas LESS por preset:
   - `assets/less/main-base.less`
   - `assets/less/main-ocean.less`
   - `assets/less/main-dark.less`
5. Cada `main-*.less` importa:
   - `scheme.less`
   - variables del preset
   - tema del preset o tema familiar compartido
   - mismas secciones del template

## Selector de preset en index.php

Use whitelist estricta:

```php
$scheme = $_GET['scheme'] ?? 'base';
$allowed = ['base', 'ocean', 'dark'];
if (!in_array($scheme, $allowed, true)) {
    $scheme = 'base';
}
```

El preset debe definir al menos:

- `css_file`
- `body_class`
- `brand` (si cambia branding)
- `email` / mensajes WA (si cambian)

## Compatibilidad con rutas antiguas

Si ya existe carpeta duplicada, dejar wrapper de compatibilidad:

```php
<?php
$_GET['scheme'] = 'ocean';
require __DIR__ . '/../template-base/index.php';
```

Sin assets propios en la carpeta legacy.

## Regla operativa

- Nueva variación de color = nuevo preset en el template base.
- NO crear carpeta nueva si estructura/secciones son las mismas.
- Solo crear carpeta nueva cuando cambie familia visual y composición.
