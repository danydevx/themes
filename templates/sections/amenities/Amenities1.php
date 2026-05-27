<?php /* === AMENITIES CATEGORIZADAS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'amenidades') ?>" class="tb-section tb-amenities <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php foreach ($data['categories'] ?? [] as $cat): ?>
      <div class="tb-amenities__category">
        <h3 class="tb-amenities__category-heading mb-3 fs-5">
          <?php if (!empty($cat['icon'])): ?><i class="tb-amenities__category-icon bi <?= esc($cat['icon']) ?>"></i><?php endif; ?>
          <span class="tb-amenities__category-title"><?= esc($cat['title'] ?? '') ?></span>
        </h3>
        <div class="tb-amenities__items row g-2">
          <?php foreach ($cat['items'] ?? [] as $item):
              $itemLabel = is_array($item) ? ($item['label'] ?? '') : (string)$item;
              $itemIcon = is_array($item) ? ($item['icon'] ?? 'bi-check-lg') : 'bi-check-lg';
          ?>
            <div class="col-6 col-md-4 col-lg-3">
              <div class="tb-amenities__pill d-flex align-items-start gap-2 p-2 rounded-3">
                <span class="tb-amenities__check" aria-hidden="true">
                  <i class="bi <?= esc($itemIcon) ?>"></i>
                </span>
                <span class="tb-amenities__label small fw-medium"><?= esc($itemLabel) ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
