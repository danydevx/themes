<?php /* === HERO SPLIT === */ ?>
<?php $d = section_defaults($data); ?>
<?php $bg = $d['bg'] ?: placeholder('1920x1080', '2c2416', 'b87c4c', 'Terraza'); ?>

<section id="<?= esc($d['id'] ?: 'inicio') ?>" class="tb-hero tb-hero--2 <?= esc($d['scheme']) ?>" <?= anim_attrs($d) ?> style="background-image: url('<?= esc($bg) ?>');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <?php if (!empty($d['label'])): ?>
          <span class="tb-hero__label"><?= esc($d['label']) ?></span>
        <?php endif; ?>

        <h1 class="tb-hero__title display-2 fw-bold"><?= $d['title'] ?? 'Su celebración merece<br>un lugar especial' ?></h1>

        <?php if (!empty($d['text'])): ?>
          <p class="tb-hero__text"><?= esc($d['text']) ?></p>
        <?php endif; ?>

        <div class="tb-hero__actions">
          <?php if (!empty($d['cta_primary'])): ?>
            <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($d['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
              <i class="bi bi-whatsapp"></i> <?= esc($d['cta_primary']['label'] ?? 'Consultar disponibilidad') ?>
            </a>
          <?php endif; ?>
          <?php if (!empty($d['cta_secondary'])): ?>
            <a class="tb-btn tb-btn--outline tb-btn--lg tb-hero--2__cta-secondary" href="<?= esc($d['cta_secondary']['href'] ?? '#') ?>">
              <?= esc($d['cta_secondary']['label'] ?? 'Ver más') ?>
            </a>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-lg-5 offset-lg-1 d-none d-lg-block">
        <?php if (!empty($d['feature_img'])): ?>
          <img src="<?= esc($d['feature_img']) ?>" alt="<?= esc($d['feature_alt'] ?? 'Vista de la terraza') ?>" class="tb-hero--2__feature-img rounded-4 shadow-lg w-100">
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
