<?php /* === HEADER MINIMAL SLIDE-OUT === */ ?>
<header class="tb-header">
  <div class="container">
    <nav class="navbar p-0">
      <a class="tb-header__logo navbar-brand" href="#">
        <?php if (!empty($data['icon'])): ?><i class="bi <?= esc($data['icon']) ?>"></i><?php endif; ?>
        <?= esc($data['brand'] ?? 'Terraza') ?>
      </a>
      <div class="d-flex align-items-center gap-2">
        <?php if (!empty($data['show_wa'])): ?>
          <a class="tb-btn tb-btn--whatsapp btn-sm" href="<?= esc($data['wa_link'] ?? wa_link('Hola')) ?>" target="_blank" rel="noopener">
            <i class="bi bi-whatsapp"></i> <span class="d-none d-sm-inline">WhatsApp</span>
          </a>
        <?php endif; ?>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav" aria-controls="offcanvasNav" aria-label="Abrir menú">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
  </div>
</header>

<!-- offcanvas lateral -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasNavLabel" style="background:var(--tb-surface); color:var(--tb-text)">
  <div class="offcanvas-header border-bottom" style="border-color:var(--tb-border) !important">
    <h5 class="offcanvas-title" id="offcanvasNavLabel" style="font-family:var(--tb-heading-font)"><?= esc($data['brand'] ?? 'Menú') ?></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav">
      <?php foreach ($data['links'] ?? [] as $link): ?>
        <li class="nav-item">
          <a class="nav-link py-2 fs-5" href="<?= esc($link['href'] ?? '#') ?>" data-bs-dismiss="offcanvas"><?= esc($link['label'] ?? '') ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
    <hr style="border-color:var(--tb-border)">
    <?php if (!empty($data['show_wa'])): ?>
      <a class="tb-btn tb-btn--whatsapp w-100 mt-3" href="<?= esc($data['wa_link'] ?? wa_link('Hola')) ?>" target="_blank" rel="noopener">
        <i class="bi bi-whatsapp"></i> Enviar WhatsApp
      </a>
    <?php endif; ?>
  </div>
</div>
