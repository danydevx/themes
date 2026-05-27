<?php /* === ABOUT6 STATS + FEATURES GRID === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'nosotros') ?>" class="tb-section tb-about--6 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">

    <?php if (!empty($data['stats'])): ?>
    <div class="row g-3 mb-5">
      <?php foreach ($data['stats'] as $stat): ?>
        <div class="col-6 col-md-3">
          <div class="tb-about__stat-card rounded-4 p-3 text-center h-100" style="background:var(--section-surface); border:1px solid var(--section-border)">
            <div class="display-5 fw-bold mb-1" style="color:var(--tb-primary)"><?= esc($stat['number'] ?? '') ?></div>
            <div class="small fw-semibold" style="color:var(--section-muted)"><?= esc($stat['label'] ?? '') ?></div>
            <?php if (!empty($stat['unit'])): ?>
              <div class="small" style="color:var(--section-muted)"><?= esc($stat['unit']) ?></div>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <?php if (!empty($data['img'])): ?>
          <div class="rounded-4 overflow-hidden shadow-lg position-relative">
            <img src="<?= esc($data['img']) ?>" alt="<?= esc($data['img_alt'] ?? '') ?>" class="w-100" style="aspect-ratio:4/3; object-fit:cover" loading="lazy">
            <?php if (!empty($data['img_badge'])): ?>
              <span class="position-absolute bottom-0 start-0 m-3 badge rounded-3 px-3 py-2 fw-bold" style="background:var(--tb-primary); color:#fff">
                <?= esc($data['img_badge']) ?>
              </span>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-lg-6">
        <div class="tb-section__header" style="text-align:left">
          <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
          <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
          <?php if ($d['subtitle']): ?><p class="tb-section__subtitle" style="margin:0"><?= esc($d['subtitle']) ?></p><?php endif; ?>
        </div>

        <?php if (!empty($data['features'])): ?>
          <div class="row g-3 mt-3">
            <?php foreach ($data['features'] as $f): ?>
              <div class="col-sm-6">
                <div class="d-flex align-items-start gap-3 p-3 rounded-3 h-100" style="background:var(--section-surface); border:1px solid var(--section-border)">
                  <div class="tb-about__feat-icon rounded-3 d-flex align-items-center justify-content-center flex-shrink-0" style="width:48px; height:48px; background:var(--tb-primary); color:#fff">
                    <i class="bi <?= esc($f['icon'] ?? 'bi-check-lg') ?>"></i>
                  </div>
                  <div>
                    <p class="fw-bold mb-0 small"><?= esc($f['title'] ?? '') ?></p>
                    <p class="mb-0 small" style="color:var(--section-muted)"><?= esc($f['text'] ?? '') ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>

        <?php if (!empty($data['cta'])): ?>
          <div class="mt-4">
            <a class="tb-btn tb-btn--primary" href="<?= esc($data['cta']['href'] ?? '#') ?>">
              <?= esc($data['cta']['label'] ?? 'Saber más') ?> <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>

  </div>
</section>