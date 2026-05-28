<?php /* === AMENITIES CARDS GRANDES === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'amenidades') ?>" class="tb-section tb-amenities tb-amenities--2 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4">
      <?php foreach ($data['categories'] ?? [] as $cat): ?>
        <div class="col-md-6 col-lg-3">
          <div class="tb-amenities__card rounded-4 p-4 h-100">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="tb-amenities__icon tb-icon-circle tb-icon-circle--md"><?php if (!empty($cat['icon'])): ?><i class="bi <?= esc($cat['icon']) ?>"></i><?php endif; ?></div>
              <h4 class="tb-amenities__title mb-0 fs-6"><?= esc($cat['title'] ?? '') ?></h4>
            </div>
            <ul class="list-unstyled mb-0 small">
              <?php foreach ($cat['items'] ?? [] as $item): ?>
                <li class="tb-amenities__item mb-2 d-flex align-items-center gap-2">
                  <?php if (!empty($item['icon'])): ?>
                    <i class="bi <?= esc($item['icon']) ?> flex-shrink-0 tb-fs-caption"></i>
                  <?php endif; ?>
                  <?= esc($item['label'] ?? '') ?>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
