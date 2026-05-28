<?php /* === EVENTTYPES2 HORIZONTAL SCROLL / TWO COLUMN LIST === */ ?>
<?php
$d = section_defaults($data);
$is_color = ($d['scheme'] ?? '') === 'scheme-color';
$is_soft = ($d['scheme'] ?? '') === 'scheme-soft';
?>
<section id="<?= esc($d['id'] ?: 'eventos') ?>" class="tb-section tb-event-types--2 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php if ($is_color): ?>
    <!-- scheme-color: vertical full-width cards con imagen -->
    <div class="row g-3 justify-content-center">
      <?php foreach ($data['items'] ?? [] as $item): ?>
        <div class="col-md-6 col-lg-4">
          <div class="tb-event-types--2__card-color rounded-4 overflow-hidden h-100">
            <?php if (!empty($item['img'])): ?>
              <div class="tb-event-types--2__img-wrap">
                <img class="tb-event-types--2__img" src="<?= esc($item['img']) ?>" alt="<?= esc($item['img_alt'] ?? $item['title'] ?? '') ?>">
              </div>
            <?php endif; ?>
            <div class="tb-event-types--2__body-color p-4 text-center">
              <div class="tb-event-types--2__icon-color rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                <i class="bi <?= esc($item['icon'] ?? 'bi-star') ?>"></i>
              </div>
              <h3 class="tb-event-types--2__title-color fs-5 fw-bold mb-2"><?= esc($item['title'] ?? '') ?></h3>
              <p class="tb-event-types--2__text-color mb-3 small"><?= esc($item['text'] ?? '') ?></p>
              <?php if (!empty($item['price'])): ?>
                <div class="tb-event-types--2__price-color">
                  <span class="badge"><?= esc($item['price']) ?></span>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php elseif ($is_soft): ?>
    <!-- scheme-soft: imagen izq + lista eventos der -->
    <div class="row g-5 align-items-start">
      <div class="col-lg-5">
        <?php $heroImg = $data['items'][0]['img'] ?? placeholder('800x900', '344e41', 'a3b18a', 'Eventos+Terraza'); ?>
        <img class="tb-event-types--2__feature-img rounded-4 w-100" src="<?= esc($heroImg) ?>" alt="<?= esc($data['items'][0]['img_alt'] ?? 'Terraza para eventos') ?>">
      </div>
      <div class="col-lg-7">
        <div class="d-flex flex-column gap-3">
          <?php foreach ($data['items'] ?? [] as $item): ?>
            <div class="tb-event-types--2__list-item rounded-4 p-3 d-flex align-items-center gap-3">
              <div class="tb-event-types--2__list-icon rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                <i class="bi <?= esc($item['icon'] ?? 'bi-star') ?>"></i>
              </div>
              <div class="flex-grow-1">
                <h4 class="tb-event-types--2__list-title mb-1"><?= esc($item['title'] ?? '') ?></h4>
                <p class="tb-event-types--2__list-text mb-0 small"><?= esc($item['text'] ?? '') ?></p>
              </div>
              <?php if (!empty($item['price'])): ?>
                <span class="tb-event-types--2__list-price badge"><?= esc($item['price']) ?></span>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <?php else: ?>
    <!-- default: horizontal scroll -->
    <div class="tb-event-types--2__scroll">
      <?php foreach ($data['items'] ?? [] as $item): ?>
        <div class="tb-event-types--2__card flex-shrink-0 rounded-4 overflow-hidden">
          <?php if (!empty($item['img'])): ?>
            <img class="tb-event-types--2__img" src="<?= esc($item['img']) ?>" alt="<?= esc($item['img_alt'] ?? $item['title'] ?? '') ?>">
          <?php endif; ?>
          <div class="tb-event-types--2__body p-3">
            <div class="row g-0 align-items-start">
              <div class="col-auto">
                <div class="tb-event-types--2__icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi <?= esc($item['icon'] ?? 'bi-star') ?>"></i>
                </div>
              </div>
              <div class="col">
                <h3 class="tb-event-types--2__title fs-6 fw-bold mb-1"><?= esc($item['title'] ?? '') ?></h3>
                <p class="tb-event-types--2__text small mb-0"><?= esc($item['text'] ?? '') ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($data['cta'])): ?>
      <div class="text-center mt-4">
        <a class="tb-btn tb-btn--outline" href="<?= esc($data['cta']['href'] ?? '#') ?>">
          <?= esc($data['cta']['label'] ?? 'Ver todos los eventos') ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>
