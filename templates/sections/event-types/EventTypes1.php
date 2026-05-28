<?php /* === EVENTTYPES1 GRID CARDS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'eventos') ?>" class="tb-section tb-event-types--1 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
    <div class="row g-4">
      <?php foreach ($data['items'] ?? [] as $item): ?>
        <div class="col-md-6 col-lg-4">
          <div class="tb-event-types--1__card">
            <?php if (!empty($item['img'])): ?>
              <img class="tb-event-types--1__img" src="<?= esc($item['img']) ?>" alt="<?= esc($item['img_alt'] ?? $item['title'] ?? '') ?>">
            <?php endif; ?>
            <div class="tb-event-types--1__body">
              <?php if (!empty($item['icon'])): ?>
                <div class="tb-event-types--1__icon"><i class="bi <?= esc($item['icon']) ?>"></i></div>
              <?php endif; ?>
              <h3 class="tb-event-types--1__title"><?= esc($item['title'] ?? '') ?></h3>
              <p class="tb-event-types--1__text"><?= esc($item['text'] ?? '') ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
