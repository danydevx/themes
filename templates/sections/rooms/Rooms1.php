<?php /* === ROOMS / HOSPEDAJE === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'hospedaje') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php if (!empty($data['capacity_badge'])): ?>
      <div class="text-center mb-4">
        <span class="badge rounded-pill px-4 py-2 fs-6 fw-semibold" style="background:var(--tb-primary)">
          <i class="bi bi-people-fill me-1"></i> <?= esc($data['capacity_badge']) ?>
        </span>
      </div>
    <?php endif; ?>

    <div class="row g-4">
      <?php foreach ($data['rooms'] ?? [] as $room): ?>
        <div class="<?= esc($room['col'] ?? 'col-md-6 col-lg-4') ?>">
          <div class="rounded-4 overflow-hidden h-100 shadow-sm" style="background:var(--section-surface); border:1px solid var(--section-border)">
            <div class="position-relative">
              <img src="<?= esc($room['img'] ?? placeholder('600x400', 'ecfeff', '0891b2', ($room['name'] ?? 'Habitación'))) ?>"
                   alt="<?= esc($room['img_alt'] ?? '') ?>" loading="lazy"
                   style="width:100%; aspect-ratio:16/10; object-fit:cover;">
              <?php if (!empty($room['badge'])): ?>
                <span class="position-absolute top-0 end-0 m-2 badge rounded-pill px-3 py-1 fw-semibold" style="background:var(--tb-primary)">
                  <?= esc($room['badge']) ?>
                </span>
              <?php endif; ?>
            </div>
            <div class="p-4">
              <h3 class="fw-bold mb-1 fs-5"><?= esc($room['name'] ?? '') ?></h3>
              <p class="small mb-3" style="color:var(--section-muted)"><?= esc($room['desc'] ?? '') ?></p>
              <div class="d-flex flex-wrap gap-2">
                <?php foreach ($room['features'] ?? [] as $feat): ?>
                  <span class="d-inline-flex align-items-center gap-1 rounded-pill px-3 py-1 small"
                        style="background:rgba(var(--tb-primary-rgb),0.08); color:var(--tb-primary)">
                    <i class="bi <?= esc($feat['icon'] ?? 'bi-check2') ?>"></i> <?= esc($feat['label'] ?? '') ?>
                  </span>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php if (!empty($data['note'])): ?>
      <p class="text-center mt-3 small" style="color:var(--section-muted)"><?= esc($data['note']) ?></p>
    <?php endif; ?>
  </div>
</section>
