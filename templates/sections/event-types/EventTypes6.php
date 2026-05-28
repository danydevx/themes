<?php /* === EVENTTYPES6 HORIZONTAL SCROLL CARDS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'eventos') ?>" class="tb-section tb-event-types--6 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
  </div>

  <div class="tb-event-types--6__scroll">
    <div class="tb-event-types--6__track">
      <?php foreach ($data['items'] ?? [] as $item): ?>
        <div class="tb-event-types--6__card">
          <div class="text-center">
            <div class="tb-event-types--6__icon">
              <i class="bi <?= esc($item['icon'] ?? 'bi-star') ?>"></i>
            </div>
            <h3 class="tb-event-types--6__title"><?= esc($item['title'] ?? '') ?></h3>
            <p class="tb-event-types--6__text"><?= esc($item['text'] ?? '') ?></p>
            <?php if (!empty($item['price'])): ?>
              <div class="tb-event-types--6__price">
                <span class="badge"><?= esc($item['price']) ?></span>
                <?php if (!empty($item['price_note'])): ?>
                  <span class="tb-event-types--6__note"><?= esc($item['price_note']) ?></span>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <?php if (!empty($data['cta'])): ?>
    <div class="container mt-4 text-center">
      <a href="<?= esc($data['cta']['href'] ?? '#') ?>" class="tb-btn tb-btn--primary">
        <?= esc($data['cta']['label'] ?? 'Ver más') ?>
      </a>
    </div>
  <?php endif; ?>
</section>