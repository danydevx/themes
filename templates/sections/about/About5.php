<?php /* === ABOUT FEATURED IMAGE GRID === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'nosotros') ?>" class="tb-section tb-about tb-about--5 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle mx-auto" style="max-width:640px"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4 align-items-center">
      <div class="col-lg-5">
        <div class="row g-3">
          <div class="col-6">
            <img src="<?= esc($data['images'][0]['src'] ?? placeholder('400x500', '2c2416', 'b87c4c', 'Imagen+1')) ?>"
                 alt="<?= esc($data['images'][0]['alt'] ?? '') ?>"
                 class="img-fluid rounded-4 shadow-sm w-100" loading="lazy" style="aspect-ratio:3/4; object-fit:cover">
          </div>
          <div class="col-6">
            <img src="<?= esc($data['images'][1]['src'] ?? placeholder('400x250', '2c2416', 'b87c4c', 'Imagen+2')) ?>"
                 alt="<?= esc($data['images'][1]['alt'] ?? '') ?>"
                 class="img-fluid rounded-4 shadow-sm w-100 mb-3" loading="lazy" style="aspect-ratio:16/10; object-fit:cover">
            <img src="<?= esc($data['images'][2]['src'] ?? placeholder('400x250', '2c2416', 'b87c4c', 'Imagen+3')) ?>"
                 alt="<?= esc($data['images'][2]['alt'] ?? '') ?>"
                 class="img-fluid rounded-4 shadow-sm w-100" loading="lazy" style="aspect-ratio:16/10; object-fit:cover">
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="ps-lg-5">
          <p class="lead mb-4" style="font-family:var(--tb-heading-font); line-height:1.6; color:var(--section-text)">
            <?= esc($data['intro'] ?? 'Cada espacio está diseñado para crear recuerdos que perduran.') ?>
          </p>
          <?php if (!empty($data['features'])): ?>
            <div class="row g-3 mb-4">
              <?php foreach ($data['features'] as $feat): ?>
                <div class="col-sm-6">
                  <div class="d-flex gap-3">
                    <div class="flex-shrink-0 rounded-3 d-flex align-items-center justify-content-center" style="width:48px; height:48px; background:rgba(var(--tb-primary-rgb),.1); color:var(--tb-primary)">
                      <i class="bi <?= esc($feat['icon'] ?? 'bi-star') ?> fs-5"></i>
                    </div>
                    <div>
                      <p class="fw-semibold mb-1 small"><?= esc($feat['label'] ?? '') ?></p>
                      <p class="mb-0 small" style="color:var(--section-muted)"><?= esc($feat['text'] ?? '') ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php if (!empty($data['cta'])): ?>
            <a class="tb-btn tb-btn--primary" href="<?= esc($data['cta']['href'] ?? '#') ?>" <?= !empty($data['cta']['target']) ? 'target="_blank" rel="noopener"' : '' ?>>
              <i class="bi <?= esc($data['cta']['icon'] ?? 'bi-arrow-right') ?>"></i> <?= esc($data['cta']['label'] ?? 'Conocer más') ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
