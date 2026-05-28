<?php /* === HERO POOL PARTY === */ ?>
<?php $d = section_defaults($data); ?>
<?php $bg = $d['bg'] ?: placeholder('1920x1080', '004466', '00b4d8', 'Alberca+Fiesta'); ?>

<section id="<?= esc($d['id'] ?: 'inicio') ?>" class="tb-hero tb-hero--4 <?= esc($d['scheme']) ?>" <?= anim_attrs($d) ?> style="background-image: url('<?= esc($bg) ?>');">
  <div class="tb-hero--4__overlay">
    <div class="container text-center">
      <?php if (!empty($d['badge'])): ?>
        <span class="tb-hero--4__badge d-inline-block px-3 py-1 rounded-pill mb-3 fw-bold">
          <i class="bi bi-patch-check-fill me-1"></i> <?= esc($d['badge']) ?>
        </span>
      <?php endif; ?>

      <h1 class="tb-hero__title display-2 fw-bold"><?= $d['title'] ?? 'Fiesta Splash<br>para los peques' ?></h1>

      <?php if (!empty($d['text'])): ?>
        <p class="tb-hero--4__text mb-2 fs-6"><?= esc($d['text']) ?></p>
      <?php endif; ?>

      <?php if (!empty($d['price_from'])): ?>
        <p class="tb-hero--4__price mb-3 fs-5"><?= esc($d['price_from']) ?></p>
      <?php endif; ?>

      <div class="tb-hero--4__actions d-flex justify-content-center flex-wrap gap-3 mt-3">
        <?php if (!empty($d['cta_primary'])): ?>
          <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($d['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
            <i class="bi bi-whatsapp"></i> <?= esc($d['cta_primary']['label'] ?? 'Reservar ahora') ?>
          </a>
        <?php endif; ?>

        <?php if (!empty($d['cta_secondary'])): ?>
          <a class="tb-btn tb-btn--white tb-btn--lg" href="<?= esc($d['cta_secondary']['href'] ?? '#') ?>">
            <?= esc($d['cta_secondary']['label'] ?? 'Ver más') ?>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
