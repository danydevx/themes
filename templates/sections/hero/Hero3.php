<?php /* === HERO FULL-SCREEN MINIMAL === */ ?>
<?php $d = section_defaults($data); ?>
<?php $bg = $d['bg'] ?: placeholder('1920x1080', '2c2416', 'c06c84', 'Terraza+Mi+Cielo'); ?>

<section id="<?= esc($d['id'] ?: 'inicio') ?>" class="tb-hero tb-hero--3 d-flex align-items-center justify-content-center text-center <?= esc($d['scheme']) ?>" <?= anim_attrs($d) ?> style="background-image: url('<?= esc($bg) ?>');">
  <div class="container tb-hero--3__container">
    <?php if (!empty($d['label'])): ?>
      <span class="tb-hero--3__label"><?= esc($d['label']) ?></span>
    <?php endif; ?>

    <h1 class="tb-hero__title display-2 fw-bold"><?= $d['title'] ?? 'Terraza<br>Mi Cielo' ?></h1>

    <?php if (!empty($d['text'])): ?>
      <p class="tb-hero--3__text mx-auto"><?= esc($d['text']) ?></p>
    <?php endif; ?>

    <?php if (!empty($d['cta_primary'])): ?>
      <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($d['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
        <i class="bi bi-whatsapp"></i> <?= esc($d['cta_primary']['label'] ?? 'Reservar ahora') ?>
      </a>
    <?php endif; ?>

    <?php if (!empty($d['scroll_hint'])): ?>
      <div class="tb-hero--3__scroll-hint" aria-hidden="true">
        <i class="bi bi-chevron-down fs-4"></i>
      </div>
    <?php endif; ?>
  </div>
</section>
