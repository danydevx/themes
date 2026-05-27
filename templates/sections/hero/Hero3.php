<?php /* === HERO FULL-SCREEN MINIMAL === */ ?>
<section id="<?= esc($data['id'] ?? 'inicio') ?>" class="tb-hero d-flex align-items-center justify-content-center text-center" <?= anim_attrs($data) ?> style="background-image: url('<?= esc($data['bg'] ?? placeholder('1920x1080', '2c2416', 'c06c84', 'Terraza+Mi+Cielo')) ?>'); min-height:calc(100vh - 60px);">
  <div class="container" style="z-index:2; position:relative;">
    <span class="tb-fs-label" style="display:inline-block; letter-spacing:.18em; text-transform:uppercase; color:rgba(255,255,255,.7); margin-bottom:1rem"><?= esc($data['label'] ?? 'Bienvenidos a') ?></span>
    <h1 class="tb-hero__title display-2 fw-bold"><?= $data['title'] ?? 'Terraza<br>Mi Cielo' ?></h1>
    <p class="tb-hero-text mx-auto"><?= esc($data['text'] ?? '') ?></p>
    <?php if (!empty($data['cta_primary'])): ?>
      <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($data['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
        <i class="bi bi-whatsapp"></i> <?= esc($data['cta_primary']['label'] ?? 'Reservar ahora') ?>
      </a>
    <?php endif; ?>
    <?php if (!empty($data['scroll_hint'])): ?>
      <div style="position:absolute; bottom:2rem; left:50%; transform:translateX(-50%); color:rgba(255,255,255,.5); animation:bounce 2s infinite;">
        <i class="bi bi-chevron-down fs-4"></i>
      </div>
    <?php endif; ?>
  </div>
</section>
<style>
  @keyframes bounce {
    0%, 100% { transform:translateX(-50%) translateY(0); }
    50% { transform:translateX(-50%) translateY(8px); }
  }
</style>
