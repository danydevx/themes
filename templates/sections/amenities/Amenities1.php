<?php /* === AMENITIES CATEGORIZADAS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'amenidades') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php foreach ($data['categories'] ?? [] as $cat): ?>
      <div class="mb-4">
        <h3 class="mb-3 fs-5" style="font-family:var(--tb-heading-font); display:flex; align-items:center; gap:.5rem">
          <?php if (!empty($cat['icon'])): ?><i class="bi <?= esc($cat['icon']) ?>" style="color:var(--tb-primary)"></i><?php endif; ?>
          <?= esc($cat['title'] ?? '') ?>
        </h3>
        <div class="tb-amenities__items row g-2">
          <?php foreach ($cat['items'] ?? [] as $item):
              $itemLabel = is_array($item) ? ($item['label'] ?? '') : (string)$item;
              $itemIcon = is_array($item) ? ($item['icon'] ?? 'bi-check-lg') : 'bi-check-lg';
          ?>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="tb-amenities__pill d-flex align-items-center gap-2 p-2 rounded-3">
                <i class="bi <?= esc($itemIcon) ?> flex-shrink-0" style="font-size:1rem"></i>
                <span class="small fw-medium"><?= esc($itemLabel) ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
