<?php /* === ABOUT TIMELINE === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'nosotros') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="position-relative">
      <!-- línea central en desktop -->
      <div class="d-none d-md-block position-absolute top-0 start-50 translate-middle-x h-100" style="width:2px; background:var(--section-border)"></div>

      <?php $i = 0; foreach ($data['milestones'] ?? [] as $m): ?>
        <div class="row align-items-center mb-5 pb-lg-3 position-relative">
          <?php if ($i % 2 === 0): ?>
            <div class="col-md-5 text-md-end">
              <h3 class="fs-4" style="font-family:var(--tb-heading-font); color:var(--tb-primary)"><?= esc($m['title'] ?? '') ?></h3>
              <p style="color:var(--section-muted)"><?= esc($m['text'] ?? '') ?></p>
            </div>
            <div class="col-md-2 text-center d-none d-md-block">
              <div class="fs-5" style="width:48px; height:48px; border-radius:50%; background:var(--tb-primary); color:#fff; display:inline-flex; align-items:center; justify-content:center; border:4px solid var(--section-bg); z-index:1; position:relative">
                <?php if (!empty($m['icon'])): ?><i class="bi <?= esc($m['icon']) ?>"></i><?php else: ?><?= $i + 1 ?><?php endif; ?>
              </div>
            </div>
            <div class="col-md-5">
              <img src="<?= esc($m['img'] ?? placeholder('400x300', 'f8d4de', 'c06c84', 'Momento')) ?>" alt="<?= esc($m['img_alt'] ?? '') ?>" class="rounded-4 shadow-sm w-100 d-none d-md-block" style="aspect-ratio:4/3;object-fit:cover;">
            </div>
          <?php else: ?>
            <div class="col-md-5 offset-md-2 order-md-2">
              <h3 class="fs-4" style="font-family:var(--tb-heading-font); color:var(--tb-primary)"><?= esc($m['title'] ?? '') ?></h3>
              <p style="color:var(--section-muted)"><?= esc($m['text'] ?? '') ?></p>
            </div>
            <div class="col-md-2 text-center d-none d-md-block order-md-1">
              <div class="fs-5" style="width:48px; height:48px; border-radius:50%; background:var(--tb-primary); color:#fff; display:inline-flex; align-items:center; justify-content:center; border:4px solid var(--section-bg); z-index:1; position:relative">
                <?php if (!empty($m['icon'])): ?><i class="bi <?= esc($m['icon']) ?>"></i><?php else: ?><?= $i + 1 ?><?php endif; ?>
              </div>
            </div>
            <div class="col-md-5 order-md-0">
              <img src="<?= esc($m['img'] ?? placeholder('400x300', 'f8d4de', 'c06c84', 'Momento')) ?>" alt="<?= esc($m['img_alt'] ?? '') ?>" class="rounded-4 shadow-sm w-100 d-none d-md-block" style="aspect-ratio:4/3;object-fit:cover;">
            </div>
          <?php endif; ?>
          <!-- móvil: versión simplificada -->
          <div class="d-md-none">
            <div class="d-flex align-items-center gap-3 mb-2">
              <div class="fs-6 tb-icon-circle--sm" style="background:var(--tb-primary); color:#fff;">
                <?php if (!empty($m['icon'])): ?><i class="bi <?= esc($m['icon']) ?>"></i><?php else: ?><?= $i + 1 ?><?php endif; ?>
              </div>
              <h3 class="fs-6"><?= esc($m['title'] ?? '') ?></h3>
            </div>
            <p class="ps-5" class="fs-6" style="color:var(--section-muted)"><?= esc($m['text'] ?? '') ?></p>
          </div>
        </div>
        <?php $i++; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
