<?php /* === PACKAGES3 HORIZONTAL PRICE CARDS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'paquetes') ?>" class="tb-section tb-packages--3 <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?>>
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4 justify-content-center">
      <?php foreach ($d['packages'] ?? [] as $pkg): ?>
        <div class="col-lg-4">
          <div class="tb-packages--3__card h-100 rounded-4 overflow-hidden text-center <?= !empty($pkg['highlight']) ? 'tb-packages--3__card--featured' : '' ?>">
            <?php if (!empty($pkg['highlight'])): ?>
              <div class="tb-packages--3__highlight-bar py-2">
                <span class="tb-packages--3__highlight-text small fw-bold text-white text-uppercase"><?= esc($pkg['highlight']) ?></span>
              </div>
            <?php endif; ?>

            <div class="p-4">
              <h3 class="tb-packages--3__title mb-1"><?= esc($pkg['name'] ?? '') ?></h3>
              <p class="tb-packages--3__tagline small mb-3"><?= esc($pkg['tagline'] ?? '') ?></p>

              <div class="mb-4">
                <span class="tb-packages--3__price display-5 fw-bold">$<?= esc($pkg['price'] ?? '') ?></span>
                <span class="tb-packages--3__currency small"> MXN</span>
              </div>

              <div class="tb-packages--3__meta d-flex justify-content-center gap-4 mb-4 pb-3 border-bottom">
                <span class="small"><i class="tb-packages--3__meta-icon bi bi-people me-1"></i><?= esc($pkg['capacity'] ?? '') ?></span>
                <span class="small"><i class="tb-packages--3__meta-icon bi bi-clock me-1"></i><?= esc($pkg['duration'] ?? '') ?></span>
              </div>

              <?php if (!empty($pkg['extras_gratis'])): ?>
                <ul class="list-unstyled text-start small mb-4">
                  <?php foreach ($pkg['extras_gratis'] as $extra): ?>
                    <li class="mb-2 d-flex align-items-start gap-2">
                      <i class="tb-packages--3__check bi bi-check-circle-fill flex-shrink-0"></i>
                      <span><?= esc($extra) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>

              <a href="<?= esc($pkg['cta']['href'] ?? '#contacto') ?>" class="tb-btn tb-btn--primary w-100">
                <?= esc($pkg['cta']['label'] ?? 'Cotizar') ?>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php if (!empty($d['note'])): ?>
      <p class="tb-packages--3__note text-center mt-4 small"><?= esc($d['note']) ?></p>
    <?php endif; ?>
  </div>
</section>
