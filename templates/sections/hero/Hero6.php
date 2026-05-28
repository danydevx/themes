<?php /* === HERO EDITORIAL / ASYMMETRICAL === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'inicio') ?>" class="tb-hero tb-hero--6 position-relative overflow-hidden <?= esc($d['scheme']) ?>" <?= anim_attrs($d) ?>>
  <div class="container h-100">
    <div class="row align-items-center h-100 g-0 tb-hero--6__row">
      <div class="col-lg-5 py-5 py-lg-0 order-lg-2">
        <div class="position-relative">
           <img src="<?= esc($d['image'] ?? placeholder('600x800', '2c2416', 'b87c4c', 'Hero+Editorial')) ?>"
                alt="<?= esc($d['image_alt'] ?? 'Hero') ?>"
               class="tb-hero--6__image img-fluid rounded-4 shadow-lg w-100" loading="lazy">
          <?php if (!empty($d['image_badge'])): ?>
            <span class="tb-hero--6__image-badge position-absolute bottom-0 start-0 mb-4 ms-4 badge rounded-pill px-3 py-2 fw-semibold">
              <?= esc($d['image_badge']) ?>
            </span>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-7 py-5 py-lg-0 pe-lg-5 order-lg-1">
        <div class="tb-hero--6__content">
          <?php if (!empty($d['label'])): ?>
            <span class="tb-hero--6__label fw-semibold mb-3 d-block"><?= esc($d['label']) ?></span>
          <?php endif; ?>
          <h1 class="tb-hero--6__title display-3 fw-bold mb-4">
            <?= $d['title'] ?? 'Elegancia que<br>se siente al<br>llegar' ?>
          </h1>
          <p class="tb-hero--6__text lead mb-4"><?= esc($d['text'] ?? '') ?></p>
          <div class="d-flex flex-wrap gap-3">
            <?php if (!empty($d['cta_primary'])): ?>
              <a class="tb-btn tb-btn--primary tb-btn--lg px-4 tb-hero--6__cta" href="<?= esc($d['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
                <i class="bi bi-whatsapp"></i> <?= esc($d['cta_primary']['label'] ?? 'Reservar') ?>
              </a>
            <?php endif; ?>
            <?php if (!empty($d['cta_secondary'])): ?>
              <a class="tb-btn tb-btn--outline tb-btn--lg px-4 tb-hero--6__cta" href="<?= esc($d['cta_secondary']['href'] ?? '#') ?>">
                <i class="bi bi-arrow-down-circle"></i> <?= esc($d['cta_secondary']['label'] ?? 'Explorar') ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if (!empty($d['bg_element'])): ?>
    <div class="tb-hero--6__bg-element position-absolute top-0 end-0 w-50 h-100"></div>
  <?php endif; ?>
</section>
