<?php /* === HERO9 VERTICAL SPLIT COLLAGE === */ ?>
<?php $d = section_defaults($data); ?>
<?php $images = $d['images'] ?? [
  ['src' => placeholder('400x400', 'e8d4c4', '8b6b4a', 'Terraza+Principal'), 'alt' => 'Terraza principal'],
  ['src' => placeholder('400x200', 'd4c4b0', '8b6b4a', 'Jardin+Lateral'), 'alt' => 'Jardin lateral'],
  ['src' => placeholder('400x200', 'c8b89a', '8b6b4a', 'Detalle+Flora'), 'alt' => 'Detalle floral'],
]; ?>

<section id="<?= esc($d['id'] ?: 'inicio') ?>" class="tb-hero tb-hero--9 <?= esc($d['scheme']) ?>" <?= anim_attrs($d) ?>>
  <div class="container">
    <div class="tb-hero--9__grid row g-0 rounded-4 overflow-hidden shadow-lg">

      <!-- Lado izquierdo: contenido -->
      <div class="tb-hero--9__content-side col-lg-6 d-flex align-items-center">
        <!-- Pattern decoration -->
        <div class="tb-hero--9__shape tb-hero--9__shape--top"></div>
        <div class="tb-hero--9__shape tb-hero--9__shape--bottom"></div>

        <div class="tb-hero--9__content p-4 p-lg-5 position-relative">
          <?php if (!empty($d['overline'])): ?>
            <span class="tb-hero--9__overline d-block mb-3 fw-bold">
              <?= esc($d['overline']) ?>
            </span>
          <?php endif; ?>

          <h1 class="tb-hero--9__title tb-hero__title display-4 fw-bold mb-4">
            <?= $d['title'] ?? 'Un lugar que<br>cuida cada detalle' ?>
          </h1>

          <?php if (!empty($d['text'])): ?>
            <p class="tb-hero--9__text mb-4">
              <?= esc($d['text']) ?>
            </p>
          <?php endif; ?>

          <?php if (!empty($d['features'])): ?>
            <div class="tb-hero--9__features d-flex flex-wrap gap-3 mb-4">
              <?php foreach ($d['features'] as $f): ?>
                <div class="tb-hero--9__feature-pill d-flex align-items-center gap-2 rounded-pill px-3 py-2">
                  <i class="tb-hero--9__feature-icon bi <?= esc($f['icon'] ?? 'bi-check') ?>"></i>
                  <span class="tb-hero--9__feature-label small fw-semibold"><?= esc($f['label'] ?? '') ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <div class="d-flex flex-wrap gap-3">
            <?php if (!empty($d['cta_primary'])): ?>
              <a class="tb-btn tb-btn--white tb-btn--lg" href="<?= esc($d['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
                <i class="bi bi-whatsapp"></i> <?= esc($d['cta_primary']['label'] ?? 'Reservar ahora') ?>
              </a>
            <?php endif; ?>
            <?php if (!empty($d['cta_secondary'])): ?>
              <a class="tb-btn tb-btn--outline tb-btn--lg tb-hero--9__cta-secondary" href="<?= esc($d['cta_secondary']['href'] ?? '#') ?>">
                <?= esc($d['cta_secondary']['label'] ?? 'Ver más') ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <!-- Lado derecho: collage de imágenes -->
      <div class="tb-hero--9__media-side col-lg-6 position-relative d-none d-lg-flex">
        <div class="row g-0 w-100 h-100">

          <div class="col-6">
            <img src="<?= esc($images[0]['src'] ?? '') ?>" alt="<?= esc($images[0]['alt'] ?? '') ?>"
                 class="tb-hero--9__media-main w-100 h-100">
          </div>
          <div class="col-6 d-flex flex-column">
            <img src="<?= esc($images[1]['src'] ?? '') ?>" alt="<?= esc($images[1]['alt'] ?? '') ?>"
                 class="tb-hero--9__media-secondary w-100">
            <img src="<?= esc($images[2]['src'] ?? '') ?>" alt="<?= esc($images[2]['alt'] ?? '') ?>"
                 class="tb-hero--9__media-secondary w-100">
          </div>
        </div>
        <?php if (!empty($d['badge'])): ?>
          <span class="tb-hero--9__badge position-absolute bottom-0 start-0 m-3 px-3 py-2 rounded-3 fw-bold small">
            <?= esc($d['badge']) ?>
          </span>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>
