<?php /* === ABOUT TIMELINE === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'nosotros') ?>" class="tb-section tb-about tb-about--3 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="position-relative">
      <!-- línea central en desktop -->
      <div class="tb-about__timeline-line d-none d-md-block position-absolute top-0 start-50 translate-middle-x h-100"></div>

      <?php $i = 0; foreach ($data['milestones'] ?? [] as $m): ?>
        <div class="row align-items-center mb-5 pb-lg-3 position-relative">
          <?php if ($i % 2 === 0): ?>
            <div class="col-md-5 text-md-end">
              <h3 class="tb-about__milestone-title fs-4"><?= esc($m['title'] ?? '') ?></h3>
              <p class="tb-about__milestone-text"><?= esc($m['text'] ?? '') ?></p>
            </div>
            <div class="col-md-2 text-center d-none d-md-block">
              <div class="tb-about__milestone-circle fs-5">
                <?php if (!empty($m['icon'])): ?><i class="bi <?= esc($m['icon']) ?>"></i><?php else: ?><?= $i + 1 ?><?php endif; ?>
              </div>
            </div>
            <div class="col-md-5">
              <img src="<?= esc($m['img'] ?? placeholder('400x300', 'f8d4de', 'c06c84', 'Momento')) ?>" alt="<?= esc($m['img_alt'] ?? '') ?>" class="tb-about__milestone-img rounded-4 shadow-sm w-100 d-none d-md-block">
            </div>
          <?php else: ?>
            <div class="col-md-5 offset-md-2 order-md-2">
              <h3 class="tb-about__milestone-title fs-4"><?= esc($m['title'] ?? '') ?></h3>
              <p class="tb-about__milestone-text"><?= esc($m['text'] ?? '') ?></p>
            </div>
            <div class="col-md-2 text-center d-none d-md-block order-md-1">
              <div class="tb-about__milestone-circle fs-5">
                <?php if (!empty($m['icon'])): ?><i class="bi <?= esc($m['icon']) ?>"></i><?php else: ?><?= $i + 1 ?><?php endif; ?>
              </div>
            </div>
            <div class="col-md-5 order-md-0">
              <img src="<?= esc($m['img'] ?? placeholder('400x300', 'f8d4de', 'c06c84', 'Momento')) ?>" alt="<?= esc($m['img_alt'] ?? '') ?>" class="tb-about__milestone-img rounded-4 shadow-sm w-100 d-none d-md-block">
            </div>
          <?php endif; ?>
          <!-- móvil: versión simplificada -->
          <div class="d-md-none">
            <div class="d-flex align-items-center gap-3 mb-2">
              <div class="tb-about__milestone-circle fs-6 tb-icon-circle--sm">
                <?php if (!empty($m['icon'])): ?><i class="bi <?= esc($m['icon']) ?>"></i><?php else: ?><?= $i + 1 ?><?php endif; ?>
              </div>
              <h3 class="tb-about__milestone-title fs-6"><?= esc($m['title'] ?? '') ?></h3>
            </div>
            <p class="tb-about__milestone-text ps-5 fs-6"><?= esc($m['text'] ?? '') ?></p>
          </div>
        </div>
        <?php $i++; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
