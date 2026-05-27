<?php /* === SERVICES === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'servicios') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
    <div class="row g-2">
      <?php foreach ($data['items'] ?? [] as $item): ?>
        <div class="<?= esc($item['col'] ?? 'col-6 col-md-3') ?>">
          <div class="tb-service">
            <i class="bi <?= esc($item['icon'] ?? 'bi-star-fill') ?>"></i>
            <h4 class="tb-service__title"><?= esc($item['title'] ?? '') ?></h4>
            <p class="tb-service__desc"><?= esc($item['desc'] ?? '') ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
