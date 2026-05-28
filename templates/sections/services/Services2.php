<?php /* === SERVICES ALTERNATING ROWS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'servicios') ?>" class="tb-section tb-services tb-services--2 <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?>>
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php $idx = 0; foreach ($d['items'] ?? [] as $item): ?>
      <div class="tb-services--2__row row align-items-center <?= $idx > 0 ? 'mt-5 pt-lg-3' : '' ?>">
        <div class="col-lg-5 <?= $idx % 2 === 0 ? '' : 'order-lg-2' ?>">
          <div class="tb-services--2__media p-4 p-lg-5 rounded-4 text-center">
            <i class="tb-services--2__icon bi <?= esc($item['icon'] ?? 'bi-star-fill') ?> display-5 mb-3 d-block"></i>
          </div>
        </div>
        <div class="col-lg-6 <?= $idx % 2 === 0 ? 'offset-lg-1' : 'offset-lg-0 order-lg-1' ?> mt-4 mt-lg-0">
          <h3 class="tb-services--2__title fs-3"><?= esc($item['title'] ?? '') ?></h3>
          <p class="tb-services--2__desc mb-0 fs-6"><?= esc($item['desc'] ?? '') ?></p>
          <?php if (!empty($item['badge'])): ?>
            <span class="tb-services--2__badge badge mt-2 px-3 py-2 rounded-pill"><?= esc($item['badge']) ?></span>
          <?php endif; ?>
        </div>
      </div>
      <?php $idx++; ?>
    <?php endforeach; ?>
  </div>
</section>
