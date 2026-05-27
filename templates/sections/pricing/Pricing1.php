<?php /* === PRICING TABLE === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'precios') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4">
      <?php foreach ($data['plans'] ?? [] as $plan): ?>
        <div class="<?= esc($plan['col'] ?? 'col-md-6 col-lg-4') ?>">
          <div class="rounded-4 p-4 p-lg-5 h-100 position-relative overflow-hidden"
               style="background:var(--section-surface); border:2px solid var(--section-border); <?= !empty($plan['highlight']) ? 'border-color:var(--tb-primary) !important; box-shadow:0 8px 40px rgba(var(--tb-primary-rgb), 0.15);' : '' ?>">
            <?php if (!empty($plan['highlight'])): ?>
              <span class="position-absolute top-0 end-0 px-3 py-1 small fw-bold text-white"
                    style="background:var(--tb-primary); border-radius:0 0 0 var(--tb-radius-sm)"><?= esc($plan['highlight']) ?></span>
            <?php endif; ?>
            <h3 class="fs-5" style="font-family:var(--tb-heading-font); margin-bottom:.25rem"><?= esc($plan['name'] ?? '') ?></h3>
            <?php if (!empty($plan['desc'])): ?>
              <p class="small" style="color:var(--section-muted)"><?= esc($plan['desc']) ?></p>
            <?php endif; ?>
            <div class="display-5 fw-bold my-3" style="color:var(--tb-primary)">
              <?= esc($plan['price'] ?? '') ?>
              <?php if (!empty($plan['unit'])): ?><small class="fs-6 fw-normal" style="color:var(--section-muted)"><?= esc($plan['unit']) ?></small><?php endif; ?>
            </div>
            <?php if (!empty($plan['features'])): ?>
              <ul class="list-unstyled mb-3 small">
                <?php foreach ($plan['features'] as $feat): ?>
                  <li class="mb-1"><i class="bi bi-check2 text-success me-2"></i><?= esc($feat) ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
            <?php if (!empty($plan['cta'])): ?>
              <a class="tb-btn <?= !empty($plan['highlight']) ? 'tb-btn--primary' : 'tb-btn--outline' ?> w-100 mt-2"
                 href="<?= esc($plan['cta']['href'] ?? '#') ?>" <?= !empty($plan['cta']['target']) ? 'target="_blank" rel="noopener"' : '' ?>>
                <?= esc($plan['cta']['label'] ?? 'Reservar') ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php if (!empty($data['note'])): ?>
      <p class="text-center mt-3 small" style="color:var(--section-muted)"><?= esc($data['note']) ?></p>
    <?php endif; ?>
  </div>
</section>
