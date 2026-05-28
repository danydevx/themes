<?php /* === HEADER CON TOP-BAR === */ ?>
<?php $d = section_defaults($data); ?>
<!-- barra superior de contacto -->
<div class="tb-header tb-header--5__top-bar d-none d-lg-block small <?= esc($d['scheme']) ?>">
  <div class="container d-flex justify-content-between">
    <div class="d-flex gap-3">
      <?php if (!empty($d['phone'])): ?>
        <span><i class="bi bi-telephone-fill me-1"></i> <?= esc($d['phone']) ?></span>
      <?php endif; ?>
      <?php if (!empty($d['email'])): ?>
        <span><i class="bi bi-envelope-fill me-1"></i> <?= esc($d['email']) ?></span>
      <?php endif; ?>
      <?php if (!empty($d['address'])): ?>
        <span><i class="bi bi-geo-alt-fill me-1"></i> <?= esc($d['address']) ?></span>
      <?php endif; ?>
    </div>
    <div class="d-flex gap-2">
      <?php foreach ($d['social_top'] ?? [] as $s): ?>
        <a href="<?= esc($s['href'] ?? '#') ?>" class="text-white opacity-75" <?= !empty($s['target']) ? 'target="_blank" rel="noopener"' : '' ?> aria-label="<?= esc($s['label'] ?? '') ?>">
          <i class="bi <?= esc($s['icon'] ?? '') ?>"></i>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- header principal -->
<header class="tb-header tb-header--5 <?= esc($d['scheme']) ?>">
  <div class="container">
    <nav class="navbar navbar-expand-lg p-0">
      <a class="tb-header__logo navbar-brand" href="#">
        <?php if (!empty($d['icon'])): ?><i class="bi <?= esc($d['icon']) ?>"></i><?php endif; ?>
        <?= esc($d['brand'] ?? 'Terraza') ?>
      </a>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Abrir menú">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
          <?php foreach ($d['links'] ?? [] as $link): ?>
            <li class="nav-item"><a class="nav-link" href="<?= esc($link['href'] ?? '#') ?>"><?= esc($link['label'] ?? '') ?></a></li>
          <?php endforeach; ?>
          <?php if (!empty($d['show_wa'])): ?>
            <li class="nav-item ms-lg-2">
              <a class="tb-btn tb-btn--whatsapp" href="<?= esc($d['wa_link'] ?? wa_link('Hola')) ?>" target="_blank" rel="noopener">
                <i class="bi bi-whatsapp"></i> WhatsApp
              </a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>
  </div>
</header>
