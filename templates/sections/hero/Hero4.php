<?php /* === HERO POOL PARTY === */ ?>
<section id="<?= esc($data['id'] ?? 'inicio') ?>" class="tb-hero" <?= anim_attrs($data) ?> style="background-image: url('<?= esc($data['bg'] ?? placeholder('1920x1080', '004466', '00b4d8', 'Alberca+Fiesta')) ?>');">
  <div class="container text-center">
    <?php if (!empty($data['badge'])): ?>
      <span class="d-inline-block px-3 py-1 rounded-pill mb-3 fw-bold tb-fs-label" style="background:rgba(255,255,255,0.15); color:#fff; letter-spacing:.08em; text-transform:uppercase; -webkit-backdrop-filter:blur(6px); backdrop-filter:blur(6px)">
        <i class="bi bi-patch-check-fill me-1"></i> <?= esc($data['badge']) ?>
      </span>
    <?php endif; ?>
    <h1 class="tb-hero__title display-2 fw-bold" style="text-shadow:0 2px 12px rgba(0,0,0,0.3)"><?= $data['title'] ?? 'Fiesta Splash<br>para los peques' ?></h1>
    <p class="txt-hero__text mb-2 fs-6" style="color:#fff; opacity:.9"><?= esc($data['text'] ?? '') ?></p>
    <?php if (!empty($data['price_from'])): ?>
      <p class="mb-3 fs-5" style="color:#fff; font-weight:700"><?= esc($data['price_from']) ?></p>
    <?php endif; ?>
    <div class="d-flex justify-content-center flex-wrap gap-3 mt-3">
      <?php if (!empty($data['cta_primary'])): ?>
        <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($data['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
          <i class="bi bi-whatsapp"></i> <?= esc($data['cta_primary']['label'] ?? 'Reservar ahora') ?>
        </a>
      <?php endif; ?>
      <?php if (!empty($data['cta_secondary'])): ?>
        <a class="tb-btn tb-btn--white tb-btn--lg" href="<?= esc($data['cta_secondary']['href'] ?? '#') ?>">
          <?= esc($data['cta_secondary']['label'] ?? 'Ver más') ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>
