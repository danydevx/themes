<?php /* === ABOUT STATS GRID === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'nosotros') ?>" class="tb-section tb-about <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-5">
        <span class="tb-section__label"><?= esc($d['label']) ?></span>
        <h2 class="tb-section__title text-start"><?= esc($d['title']) ?></h2>
        <p class="mb-4" style="color:var(--section-muted)"><?= esc($d['subtitle']) ?></p>
        <?php if (!empty($data['cta'])): ?>
          <a class="tb-btn tb-btn--primary" href="<?= esc($data['cta']['href'] ?? '#') ?>">
            <i class="bi bi-arrow-right"></i> <?= esc($data['cta']['label'] ?? 'Conocer más') ?>
          </a>
        <?php endif; ?>
      </div>
      <div class="col-lg-7">
        <div class="row g-3">
          <?php foreach ($data['stats'] ?? [] as $stat): ?>
            <div class="col-6 col-md-4">
              <div class="text-center p-4 rounded-4" style="background:var(--section-surface); border:1px solid var(--section-border)">
                <div class="display-5 fw-bold" style="color:var(--tb-primary)"><?= esc((string)($stat['number'] ?? '')) ?></div>
                <div class="text-uppercase small fw-semibold" style="letter-spacing:.05em; color:var(--section-muted)"><?= esc($stat['unit'] ?? '') ?></div>
                <div class="mt-1 tb-fs-caption" style="color:var(--section-muted)"><?= esc($stat['label'] ?? '') ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <?php if (!empty($data['img'])): ?>
          <div class="mt-4">
            <img class="tb-about__img w-100" src="<?= esc($data['img']) ?>" alt="<?= esc($data['img_alt'] ?? '') ?>" style="max-height:200px;object-fit:cover;">
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
