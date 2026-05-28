<?php /* === HERO PREMIUM LUXURY FULL-SCREEN === */ ?>
<?php $d = section_defaults($data); ?>
<?php $bg = $d['bg'] ?: placeholder('1920x1080', '1a1a1a', 'd4af37', 'Luxury+Event'); ?>

<section id="<?= esc($d['id'] ?: 'inicio') ?>" class="tb-hero tb-hero--7 position-relative d-flex align-items-center <?= esc($d['scheme']) ?>" <?= anim_attrs($d) ?> style="background-image: url('<?= esc($bg) ?>');">
  <div class="tb-hero--7__overlay-primary position-absolute top-0 start-0 w-100 h-100"></div>
  <div class="tb-hero--7__overlay-accent position-absolute top-0 end-0 w-100 h-100"></div>
  <div class="container tb-hero--7__container position-relative">
    <div class="row">
      <div class="col-lg-7">
        <?php if (!empty($d['overline'])): ?>
          <span class="tb-hero--7__overline d-block mb-3 fw-semibold"><?= esc($d['overline']) ?></span>
        <?php endif; ?>
        <h1 class="tb-hero--7__title display-1 fw-bold mb-4"><?= $d['title'] ?? 'Excelencia<br>en cada<br>detalle' ?></h1>
        <?php if (!empty($d['text'])): ?>
          <p class="tb-hero--7__text lead mb-5"><?= esc($d['text']) ?></p>
        <?php endif; ?>

        <?php if (!empty($d['stats'])): ?>
          <div class="tb-hero--7__stats d-flex flex-wrap gap-4 mb-5">
            <?php foreach ($d['stats'] as $stat): ?>
              <div class="tb-hero--7__stat pe-4">
                <span class="tb-hero--7__stat-value d-block display-6 fw-bold"><?= esc($stat['value'] ?? '') ?></span>
                <span class="tb-hero--7__stat-label small"><?= esc($stat['label'] ?? '') ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <div class="d-flex flex-wrap gap-3">
          <?php if (!empty($d['cta_primary'])): ?>
            <a class="tb-btn tb-btn--primary tb-btn--lg px-4 py-3 tb-hero--7__cta" href="<?= esc($d['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
              <?= esc($d['cta_primary']['label'] ?? 'Solicitar información') ?>
            </a>
          <?php endif; ?>
          <?php if (!empty($d['cta_secondary'])): ?>
            <a class="tb-btn tb-btn--outline tb-btn--lg px-4 py-3 tb-hero--7__cta tb-hero--7__cta-secondary" href="<?= esc($d['cta_secondary']['href'] ?? '#') ?>">
              <i class="bi bi-play-circle me-2"></i> <?= esc($d['cta_secondary']['label'] ?? 'Ver recorrido') ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php if (!empty($d['scroll_hint'])): ?>
    <div class="tb-hero--7__scroll-hint">
      <i class="bi bi-chevron-down fs-5"></i>
    </div>
  <?php endif; ?>
</section>
