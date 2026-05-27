<?php /* === HERO10 HORIZONTAL SPLIT POOL === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'inicio') ?>" class="tb-hero tb-hero--10 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container-fluid">
    <div class="row g-0 align-items-center min-vh-100">

      <!-- Image side -->
      <div class="col-lg-7 position-relative overflow-hidden" style="min-height:520px">
        <img src="<?= esc($d['image']) ?>" alt="<?= esc($d['image_alt'] ?: 'Terraza') ?>" class="tb-hero--10__img w-100 h-100" style="object-fit:cover; position:absolute; inset:0">
        <div class="tb-hero--10__overlay"></div>
        <?php if (!empty($d['image_caption'])): ?>
          <div class="tb-hero--10__caption position-absolute bottom-0 start-0 p-4">
            <span class="small" style="color:rgba(255,255,255,0.7)"><?= esc($d['image_caption']) ?></span>
          </div>
        <?php endif; ?>
        <?php if (!empty($d['badge'])): ?>
          <div class="tb-hero--10__badge position-absolute" style="top:2rem; left:2rem">
            <span class="tb-hero--10__badge-text"><?= esc($d['badge']) ?></span>
          </div>
        <?php endif; ?>
      </div>

      <!-- Content side -->
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
                  <i class="bi <?= esc($f['icon'] ?? 'bi-check-circle') ?>" style="color:var(--tb-primary); font-size:1.1rem"></i>
                  <span class="small fw-500"><?= esc($f['label'] ?? '') ?></span>
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
</section>