<?php /* === AMENITIES CARDS GRANDES === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'amenidades') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4">
      <?php foreach ($data['categories'] ?? [] as $cat): ?>
        <div class="col-md-6 col-lg-3">
          <div class="rounded-4 p-4 h-100" style="background:var(--section-surface); border:1px solid var(--section-border)">
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="tb-icon-circle tb-icon-circle--md"><?php if (!empty($cat['icon'])): ?><i class="bi <?= esc($cat['icon']) ?>"></i><?php endif; ?></div>
              <h4 class="mb-0 fs-6" style="font-weight:600"><?= esc($cat['title'] ?? '') ?></h4>
            </div>
            <ul class="list-unstyled mb-0 small">
              <?php foreach ($cat['items'] ?? [] as $item): ?>
                <li class="mb-2 d-flex align-items-center gap-2" style="color:var(--section-muted)">
                  <?php if (!empty($item['icon'])): ?>
                    <i class="bi <?= esc($item['icon']) ?> flex-shrink-0" style="color:var(--tb-primary); tb-fs-caption"></i>
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
