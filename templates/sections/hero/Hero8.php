<?php /* === HERO EDITORIAL MAGAZINE COVER === */ ?>
<?php $d = section_defaults($data); ?>

<section id="<?= esc($d['id'] ?: 'inicio') ?>" class="tb-hero tb-hero--8 position-relative overflow-hidden <?= esc($d['scheme']) ?>" <?= anim_attrs($d) ?>>
  <div class="container h-100">
    <div class="row align-items-center h-100 g-0 tb-hero--8__row">
      <div class="col-lg-6 py-5 py-lg-0 order-lg-1">
        <div class="tb-hero--8__content pe-lg-5">
          <?php if (!empty($d['overline'])): ?>
            <div class="d-flex align-items-center gap-3 mb-3">
              <span class="tb-hero--8__line"></span>
              <span class="tb-hero--8__overline tb-fs-label fw-semibold"><?= esc($d['overline']) ?></span>
            </div>
          <?php endif; ?>
          <h1 class="tb-hero--8__title mb-4 fw-bold">
            <?= $d['title'] ?? 'Donde su evento<br>se convierte en<br>obra de arte' ?>
          </h1>
          <?php if (!empty($d['text'])): ?>
            <p class="tb-hero--8__text mb-5"><?= esc($d['text']) ?></p>
          <?php endif; ?>
          <div class="d-flex flex-wrap gap-3">
            <?php if (!empty($d['cta_primary'])): ?>
              <a class="tb-btn tb-btn--primary tb-btn--lg px-4 tb-hero--8__cta tb-hero--8__cta-primary" href="<?= esc($d['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
                <?= esc($d['cta_primary']['label'] ?? 'Reservar') ?>
                <i class="bi bi-arrow-right ms-1"></i>
              </a>
            <?php endif; ?>
            <?php if (!empty($d['cta_secondary'])): ?>
              <a class="tb-btn tb-btn--outline tb-btn--lg px-4 tb-hero--8__cta" href="<?= esc($d['cta_secondary']['href'] ?? '#') ?>">
                <?= esc($d['cta_secondary']['label'] ?? 'Conocer más') ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6 py-4 py-lg-0 order-lg-2">
        <div class="position-relative">
          <img src="<?= esc($d['image'] ?? placeholder('700x900', 'faf8f5', '8b9d83', 'Hero+Magnolia')) ?>"
               alt="<?= esc($d['image_alt'] ?? 'Hero') ?>"
               class="tb-hero--8__image img-fluid w-100" loading="eager">
          <?php if (!empty($d['image_caption'])): ?>
            <p class="tb-hero--8__caption mt-2 small fst-italic"><?= esc($d['image_caption']) ?></p>
          <?php endif; ?>
          <?php if (!empty($d['ornament'])): ?>
            <div class="tb-hero--8__ornament" aria-hidden="true"><?= esc($d['ornament']) ?></div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
