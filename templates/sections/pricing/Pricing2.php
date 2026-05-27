<?php /* === PRICING HORIZONTAL COMPARISON === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'precios') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php $plans = $data['plans'] ?? []; ?>
    <?php if (!empty($plans)): ?>
      <div class="row g-0 rounded-4 overflow-hidden" style="border:1px solid var(--section-border)">
        <!-- Plan headers -->
        <div class="col-4 d-none d-md-block"></div>
        <?php foreach ($plans as $plan): ?>
          <div class="col-6 col-md-auto flex-md-fill text-center p-4" style="background:var(--section-surface); <?= !empty($plan['highlight']) ? 'border:2px solid var(--tb-primary); position:relative; z-index:1;' : 'border-right:1px solid var(--section-border);' ?>">
            <?php if (!empty($plan['highlight'])): ?>
              <span class="d-block small fw-bold mb-1" style="color:var(--tb-primary); text-transform:uppercase; letter-spacing:.1em"><?= esc($plan['highlight']) ?></span>
            <?php endif; ?>
            <h4 class="fw-bold mb-0 fs-6"><?= esc($plan['name'] ?? '') ?></h4>
            <div class="mt-2">
              <span class="fw-bold fs-2" style="color:var(--tb-primary)"><?= esc($plan['price'] ?? '') ?></span>
              <span class="small" style="color:var(--section-muted)"><?= esc($plan['unit'] ?? '') ?></span>
            </div>
            <?php if (!empty($plan['cta'])): ?>
              <a class="tb-btn tb-btn--primary btn-sm w-100 mt-3" href="<?= esc($plan['cta']['href'] ?? '#') ?>" <?= !empty($plan['cta']['target']) ? 'target="_blank" rel="noopener"' : '' ?>>
                <?= esc($plan['cta']['label'] ?? 'Reservar') ?>
              </a>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>

        <!-- Feature rows -->
        <?php
          $allFeatures = [];
          foreach ($plans as $pi => $plan) {
            foreach ($plan['features'] ?? [] as $fi => $feat) {
              $allFeatures[$fi][$pi] = $feat;
            }
          }
        ?>
        <?php foreach ($allFeatures as $featureRow): ?>
          <div class="col-4 d-none d-md-flex align-items-center px-3 py-3 small fw-medium" style="color:var(--section-text); background:var(--section-surface); border-top:1px solid var(--section-border); border-right:1px solid var(--section-border)">
            <?= esc($featureRow[0] ?? '') ?>
          </div>
          <?php foreach ($plans as $pi => $plan): $val = $featureRow[$pi] ?? null; ?>
            <div class="col-6 col-md py-3 text-center" style="border-top:1px solid var(--section-border); <?= !empty($plan['highlight']) ? '' : 'border-right:1px solid var(--section-border);' ?>">
              <?php if ($val): ?>
                <i class="bi bi-check-circle-fill fs-6" style="color:var(--tb-primary)"></i>
                <span class="d-md-none ms-2 small"><?= esc($val) ?></span>
              <?php else: ?>
                <i class="bi bi-dash" style="color:var(--section-muted)"></i>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($data['note'])): ?>
      <p class="text-center mt-3 small" style="color:var(--section-muted)"><?= esc($data['note']) ?></p>
    <?php endif; ?>
  </div>
</section>
