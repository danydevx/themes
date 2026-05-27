<?php /* === HEADER CON TOP-BAR === */ ?>
<!-- barra superior de contacto -->
<div class="d-none d-lg-block small" style="background:var(--tb-primary); color:#fff; padding:.4rem 0">
  <div class="container d-flex justify-content-between">
    <div class="d-flex gap-3">
      <?php if (!empty($data['phone'])): ?>
        <span><i class="bi bi-telephone-fill me-1"></i> <?= esc($data['phone']) ?></span>
      <?php endif; ?>
      <?php if (!empty($data['email'])): ?>
        <span><i class="bi bi-envelope-fill me-1"></i> <?= esc($data['email']) ?></span>
      <?php endif; ?>
      <?php if (!empty($data['address'])): ?>
        <span><i class="bi bi-geo-alt-fill me-1"></i> <?= esc($data['address']) ?></span>
      <?php endif; ?>
    </div>
    <div class="d-flex gap-2">
      <?php foreach ($data['social_top'] ?? [] as $s): ?>
        <a href="<?= esc($s['href'] ?? '#') ?>" class="text-white opacity-75" <?= !empty($s['target']) ? 'target="_blank" rel="noopener"' : '' ?> aria-label="<?= esc($s['label'] ?? '') ?>">
          <i class="bi <?= esc($s['icon'] ?? '') ?>"></i>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- header principal -->
<header class="tb-header" style="border-bottom:3px solid var(--tb-secondary);">
  <div class="container">
    <nav class="navbar navbar-expand-lg p-0">
      <a class="tb-header__logo navbar-brand" href="#">
        <?php if (!empty($data['icon'])): ?><i class="bi <?= esc($data['icon']) ?>"></i><?php endif; ?>
        <?= esc($data['brand'] ?? 'Terraza') ?>
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Abrir menú">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
          <?php foreach ($data['links'] ?? [] as $link): ?>
            <li class="nav-item"><a class="nav-link" href="<?= esc($link['href'] ?? '#') ?>"><?= esc($link['label'] ?? '') ?></a></li>
          <?php endforeach; ?>
          <?php if (!empty($data['show_wa'])): ?>
            <li class="nav-item ms-lg-2">
              <a class="tb-btn tb-btn--whatsapp" href="<?= esc($data['wa_link'] ?? wa_link('Hola')) ?>" target="_blank" rel="noopener">
                <i class="bi bi-whatsapp"></i> WhatsApp
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
  </div>
</header>
