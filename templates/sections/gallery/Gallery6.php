<?php /* === GALLERY6 MOSAIC GRID === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'galeria') ?>" class="tb-section tb-gallery--6 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">

    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <!-- Mosaic grid -->
    <div class="tb-gallery--6__mosaic">

      <?php $images = $data['images'] ?? []; ?>

      <?php if (!empty($images[0])): ?>
      <div class="tb-gallery--6__item tb-gallery--6__item--large">
        <img src="<?= esc($images[0]['full'] ?? $images[0]['src'] ?? placeholder('800x600', 'f5f0e6', '8b6b4a', 'Galería+1')) ?>" alt="<?= esc($images[0]['alt'] ?? '') ?>" loading="lazy">
        <div class="tb-gallery--6__overlay">
          <span class="small fw-semibold"><?= esc($images[0]['alt'] ?? '') ?></span>
        </div>
      </div>
      <?php endif; ?>

      <div class="tb-gallery--6__stack">
        <?php for ($i = 1; $i < min(3, count($images)); $i++): ?>
          <?php if (!empty($images[$i])): ?>
          <div class="tb-gallery--6__item">
            <img src="<?= esc($images[$i]['thumb'] ?? $images[$i]['src'] ?? placeholder('400x400', 'f5f0e6', '8b6b4a', 'Galería+' . ($i+1))) ?>" alt="<?= esc($images[$i]['alt'] ?? '') ?>" loading="lazy">
            <div class="tb-gallery--6__overlay">
              <span class="small fw-semibold"><?= esc($images[$i]['alt'] ?? '') ?></span>
            </div>
          </div>
          <?php endif; ?>
        <?php endfor; ?>
      </div>

      <?php if (count($images) > 3): ?>
      <div class="tb-gallery--6__item tb-gallery--6__item--tall">
        <img src="<?= esc($images[3]['full'] ?? $images[3]['src'] ?? placeholder('400x600', 'f5f0e6', '8b6b4a', 'Galería+4')) ?>" alt="<?= esc($images[3]['alt'] ?? '') ?>" loading="lazy">
        <div class="tb-gallery--6__overlay">
          <span class="small fw-semibold"><?= esc($images[3]['alt'] ?? '') ?></span>
        </div>
      </div>
      <?php endif; ?>

      <?php if (count($images) > 4): ?>
      <div class="tb-gallery--6__item">
        <img src="<?= esc($images[4]['thumb'] ?? $images[4]['src'] ?? placeholder('400x400', 'f5f0e6', '8b6b4a', 'Galería+5')) ?>" alt="<?= esc($images[4]['alt'] ?? '') ?>" loading="lazy">
        <div class="tb-gallery--6__overlay">
          <span class="small fw-semibold"><?= esc($images[4]['alt'] ?? '') ?></span>
        </div>
      </div>
      <?php endif; ?>

      <?php if (count($images) > 5): ?>
      <div class="tb-gallery--6__item">
        <img src="<?= esc($images[5]['thumb'] ?? $images[5]['src'] ?? placeholder('400x400', 'f5f0e6', '8b6b4a', 'Galería+6')) ?>" alt="<?= esc($images[5]['alt'] ?? '') ?>" loading="lazy">
        <div class="tb-gallery--6__overlay">
          <span class="small fw-semibold"><?= esc($images[5]['alt'] ?? '') ?></span>
        </div>
      </div>
      <?php endif; ?>

    </div>

    <?php if (!empty($data['cta_text'])): ?>
      <div class="text-center mt-4">
        <a class="tb-btn tb-btn--outline" href="<?= esc($data['cta_link'] ?? '#') ?>">
          <i class="bi bi-grid-3x3-gap"></i> <?= esc($data['cta_text']) ?>
        </a>
      </div>
    <?php endif; ?>

  </div>
</section>