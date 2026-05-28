<?php /* === HERO10 HORIZONTAL SPLIT POOL === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'inicio') ?>" class="tb-hero tb-hero--10 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <?php if (!empty($d['use_background']) && !empty($d['image'])): ?>
    <div class="tb-hero--10__bg-wrap position-relative overflow-hidden min-vh-100 d-flex align-items-center">
      <img src="<?= esc($d['image']) ?>" alt="<?= esc($d['image_alt'] ?: 'Terraza') ?>" class="tb-hero--10__bg-img position-absolute top-0 start-0 w-100 h-100">
      <div class="tb-hero--10__overlay position-absolute top-0 start-0 w-100 h-100"></div>

      <div class="container position-relative">
        <div class="tb-hero--10__bg-content position-relative py-5">
          <div class="tb-hero--10__content tb-hero--10__content--on-bg">
            <?php if (!empty($d['badge'])): ?>
              <div class="tb-hero--10__badge mb-3">
                <span class="tb-hero--10__badge-text"><?= esc($d['badge']) ?></span>
              </div>
            <?php endif; ?>

            <?php if (!empty($d['overline'])): ?>
              <span class="tb-hero--10__overline"><?= esc($d['overline']) ?></span>
            <?php endif; ?>

            <?php if (!empty($d['title'])): ?>
              <h1 class="tb-hero__title mb-4"><?= $d['title'] ?></h1>
            <?php endif; ?>

            <?php if (!empty($d['text'])): ?>
              <p class="tb-hero--10__text mb-4"><?= esc($d['text']) ?></p>
            <?php endif; ?>

            <?php if (!empty($d['features'])): ?>
              <div class="tb-hero--10__features mb-4">
                <?php foreach ($d['features'] as $f): ?>
                  <div class="tb-hero--10__feature d-flex align-items-center gap-2 mb-2">
                    <i class="tb-hero--10__feature-icon bi <?= esc($f['icon'] ?? 'bi-check-circle') ?>"></i>
                    <span class="tb-hero--10__feature-label small fw-medium"><?= esc($f['label'] ?? '') ?></span>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <div class="tb-hero--10__actions d-flex flex-wrap gap-3">
              <?php if (!empty($d['cta_primary'])): ?>
                <a href="<?= esc($d['cta_primary']['href'] ?? '#') ?>" class="tb-btn tb-btn--primary tb-btn--lg">
                  <?= esc($d['cta_primary']['label'] ?? 'Cotizar') ?>
                </a>
              <?php endif; ?>
              <?php if (!empty($d['cta_secondary'])): ?>
                <a href="<?= esc($d['cta_secondary']['href'] ?? '#') ?>" class="tb-btn tb-btn--outline tb-btn--lg">
                  <?= esc($d['cta_secondary']['label'] ?? 'Ver más') ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php else: ?>
    <div class="container-fluid">
      <div class="row g-0 align-items-center min-vh-100">

        <div class="tb-hero--10__media col-lg-7 position-relative overflow-hidden">
          <img src="<?= esc($d['image']) ?>" alt="<?= esc($d['image_alt'] ?: 'Terraza') ?>" class="tb-hero--10__img w-100 h-100">
          <div class="tb-hero--10__overlay"></div>
          <?php if (!empty($d['image_caption'])): ?>
            <div class="tb-hero--10__caption position-absolute bottom-0 start-0 p-4">
              <span class="tb-hero--10__caption-text small"><?= esc($d['image_caption']) ?></span>
            </div>
          <?php endif; ?>
          <?php if (!empty($d['badge'])): ?>
            <div class="tb-hero--10__badge position-absolute">
              <span class="tb-hero--10__badge-text"><?= esc($d['badge']) ?></span>
            </div>
          <?php endif; ?>
        </div>

        <div class="col-lg-5 p-5 p-lg-5">
          <div class="tb-hero--10__content">
            <?php if (!empty($d['overline'])): ?>
              <span class="tb-hero--10__overline"><?= esc($d['overline']) ?></span>
            <?php endif; ?>

            <?php if (!empty($d['title'])): ?>
              <h1 class="tb-hero__title mb-4"><?= $d['title'] ?></h1>
            <?php endif; ?>

            <?php if (!empty($d['text'])): ?>
              <p class="tb-hero--10__text mb-4"><?= esc($d['text']) ?></p>
            <?php endif; ?>

            <?php if (!empty($d['features'])): ?>
              <div class="tb-hero--10__features mb-4">
                <?php foreach ($d['features'] as $f): ?>
                  <div class="tb-hero--10__feature d-flex align-items-center gap-2 mb-2">
                    <i class="tb-hero--10__feature-icon bi <?= esc($f['icon'] ?? 'bi-check-circle') ?>"></i>
                    <span class="tb-hero--10__feature-label small fw-medium"><?= esc($f['label'] ?? '') ?></span>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <div class="tb-hero--10__actions d-flex flex-wrap gap-3">
              <?php if (!empty($d['cta_primary'])): ?>
                <a href="<?= esc($d['cta_primary']['href'] ?? '#') ?>" class="tb-btn tb-btn--primary tb-btn--lg">
                  <?= esc($d['cta_primary']['label'] ?? 'Cotizar') ?>
                </a>
              <?php endif; ?>
              <?php if (!empty($d['cta_secondary'])): ?>
                <a href="<?= esc($d['cta_secondary']['href'] ?? '#') ?>" class="tb-btn tb-btn--outline tb-btn--lg">
                  <?= esc($d['cta_secondary']['label'] ?? 'Ver más') ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>

      </div>
    </div>
  <?php endif; ?>
</section>
