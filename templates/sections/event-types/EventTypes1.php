<?php /* === EVENT TYPES === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'eventos') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
    <div class="row g-4">
      <?php foreach ($data['items'] ?? [] as $item): ?>
        <div class="col-md-6 col-lg-4">
          <div class="tb-card text-center">
            <img class="tb-card__img"
                 src="<?= esc($item['img'] ?? placeholder('600x400', 'f3dfc8', '7f5539', ($item['title'] ?? 'Evento'))) ?>"
                 alt="<?= esc($item['img_alt'] ?? $item['title'] ?? '') ?>">
            <div class="tb-card__body">
              <?php if (!empty($item['icon'])): ?>
                <div class="tb-card__icon"><i class="bi <?= esc($item['icon']) ?>"></i></div>
              <?php endif; ?>
              <h3 class="tb-card__title"><?= esc($item['title'] ?? '') ?></h3>
              <p class="tb-card__text"><?= esc($item['text'] ?? '') ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
