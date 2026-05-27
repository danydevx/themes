<?php /* === PACKAGES3 HORIZONTAL PRICE CARDS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'paquetes') ?>" class="tb-section tb-packages--3 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4 justify-content-center">
      <?php foreach ($data['packages'] ?? [] as $pkg): ?>
        <div class="col-lg-4">
          <div class="tb-packages--3__card h-100 rounded-4 overflow-hidden text-center" style="background:var(--section-surface); border:1px solid var(--section-border); <?= !empty($pkg['highlight']) ? 'border-color:var(--tb-primary)!important; border-width:2px' : '' ?>">
            <?php if (!empty($pkg['highlight'])): ?>
              <div class="tb-packages--3__highlight-bar py-2" style="background:var(--tb-primary)">
                <span class="small fw-700 text-white text-uppercase" style="letter-spacing:0.08em"><?= esc($pkg['highlight']) ?></span>
              </div>
            <?php endif; ?>

            <div class="p-4">
              <h3 class="mb-1" style="font-size:1.3rem"><?= esc($pkg['name'] ?? '') ?></h3>
              <p class="small mb-3" style="color:var(--section-muted)"><?= esc($pkg['tagline'] ?? '') ?></p>

              <div class="mb-4">
                <span class="display-5 fw-700" style="color:var(--tb-primary)">$<?= esc($pkg['price'] ?? '') ?></span>
                <span class="small" style="color:var(--section-muted)"> MXN</span>
              </div>

              <div class="tb-packages--3__meta d-flex justify-content-center gap-4 mb-4 pb-3 border-bottom" style="border-color:var(--section-border)!important">
                <span class="small"><i class="bi bi-people me-1" style="color:var(--tb-primary)"></i><?= esc($pkg['capacity'] ?? '') ?></span>
                <span class="small"><i class="bi bi-clock me-1" style="color:var(--tb-primary)"></i><?= esc($pkg['duration'] ?? '') ?></span>
              </div>

              <?php if (!empty($pkg['extras_gratis'])): ?>
                <ul class="list-unstyled text-start small mb-4">
                  <?php foreach ($pkg['extras_gratis'] as $extra): ?>
                    <li class="mb-2 d-flex align-items-start gap-2">
                      <i class="bi bi-check-circle-fill flex-shrink-0" style="color:var(--tb-primary); font-size:0.9rem; margin-top:0.1rem"></i>
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

    <?php if (!empty($data['note'])): ?>
      <p class="text-center mt-4 small" style="color:var(--section-muted)"><?= esc($data['note']) ?></p>
    <?php endif; ?>
  </div>
</section>