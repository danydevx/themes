<?php /* === SERVICES LARGE ICONS WITH NUMBERS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'servicios') ?>" class="tb-section tb-services--3 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="tb-services--3__grid">
      <?php $n = 0; foreach ($data['items'] ?? [] as $item): $n++; ?>
        <div class="tb-services--3__item">
          <div class="tb-services--3__number">
            <?= esc((string)$n) ?>
          </div>
          <h4 class="tb-services--3__title"><?= esc($item['title'] ?? '') ?></h4>
          <p class="tb-services--3__desc"><?= esc($item['desc'] ?? '') ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>