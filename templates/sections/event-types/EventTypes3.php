<?php /* === EVENTTYPES3 ALTERNATING ROWS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'eventos') ?>" class="tb-section tb-event-types--3 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php $idx = 0; foreach ($data['items'] ?? [] as $item): ?>
      <div class="tb-event-types--3__row row g-0 align-items-center mb-4 rounded-4 overflow-hidden">
        <?php if ($idx % 2 === 0): ?>
          <div class="col-md-6">
            <img class="tb-event-types--3__img" src="<?= esc($item['img'] ?? placeholder('800x500', 'f8d4de', 'c06c84', $item['title'] ?? '')) ?>" alt="<?= esc($item['img_alt'] ?? '') ?>">
          </div>
          <div class="col-md-6 tb-event-types--3__content p-4 p-lg-5">
            <?php if (!empty($item['icon'])): ?><i class="tb-event-types--3__icon bi <?= esc($item['icon']) ?>"></i><?php endif; ?>
            <h3 class="tb-event-types--3__title fs-4 fw-bold"><?= esc($item['title'] ?? '') ?></h3>
            <p class="tb-event-types--3__text mb-3"><?= esc($item['text'] ?? '') ?></p>
            <?php if (!empty($item['cta'])): ?>
              <a class="tb-btn tb-btn--outline" href="<?= esc($item['cta']['href'] ?? '#') ?>"><?= esc($item['cta']['label'] ?? 'Más info') ?></a>
            <?php endif; ?>
          </div>
        <?php else: ?>
          <div class="col-md-6 order-md-2">
            <img class="tb-event-types--3__img" src="<?= esc($item['img'] ?? placeholder('800x500', 'f8d4de', 'c06c84', $item['title'] ?? '')) ?>" alt="<?= esc($item['img_alt'] ?? '') ?>">
          </div>
          <div class="col-md-6 order-md-1 tb-event-types--3__content p-4 p-lg-5">
            <?php if (!empty($item['icon'])): ?><i class="tb-event-types--3__icon bi <?= esc($item['icon']) ?>"></i><?php endif; ?>
            <h3 class="tb-event-types--3__title fs-4 fw-bold"><?= esc($item['title'] ?? '') ?></h3>
            <p class="tb-event-types--3__text mb-3"><?= esc($item['text'] ?? '') ?></p>
            <?php if (!empty($item['cta'])): ?>
              <a class="tb-btn tb-btn--outline" href="<?= esc($item['cta']['href'] ?? '#') ?>"><?= esc($item['cta']['label'] ?? 'Más info') ?></a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php $idx++; ?>
    <?php endforeach; ?>
  </div>
</section>
