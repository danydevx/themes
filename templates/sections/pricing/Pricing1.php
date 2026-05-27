<?php /* === PRICING TABLE === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'precios') ?>" class="tb-section tb-pricing <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4">
      <?php foreach ($data['plans'] ?? [] as $plan): ?>
        <div class="<?= esc($plan['col'] ?? 'col-md-6 col-lg-4') ?>">
          <div class="tb-pricing__card rounded-4 p-4 p-lg-5 h-100 position-relative overflow-hidden <?= !empty($plan['highlight']) ? 'tb-pricing__card--highlight' : '' ?>">
            <?php if (!empty($plan['highlight'])): ?>
              <span class="tb-pricing__badge position-absolute top-0 end-0 px-3 py-1 small fw-bold text-white"><?= esc($plan['highlight']) ?></span>
            <?php endif; ?>
            <h3 class="tb-pricing__title fs-5"><?= esc($plan['name'] ?? '') ?></h3>
            <?php if (!empty($plan['desc'])): ?>
              <p class="tb-pricing__desc small"><?= esc($plan['desc']) ?></p>
            <?php endif; ?>
            <div class="tb-pricing__amount display-5 fw-bold my-3">
              <?= esc($plan['price'] ?? '') ?>
              <?php if (!empty($plan['unit'])): ?><small class="tb-pricing__unit fs-6 fw-normal"><?= esc($plan['unit']) ?></small><?php endif; ?>
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
      <p class="tb-pricing__note text-center mt-3 small"><?= esc($data['note']) ?></p>
    <?php endif; ?>
  </div>
</section>
