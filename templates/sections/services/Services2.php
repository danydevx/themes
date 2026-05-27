<?php /* === SERVICES ALTERNATING ROWS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'servicios') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php $idx = 0; foreach ($data['items'] ?? [] as $item): ?>
      <div class="row align-items-center <?= $idx > 0 ? 'mt-5 pt-lg-3' : '' ?>">
        <div class="col-lg-5 <?= $idx % 2 === 0 ? '' : 'order-lg-2' ?>">
          <div class="p-4 p-lg-5 rounded-4 text-center" style="background:var(--section-surface); border:1px solid var(--section-border)">
            <i class="bi <?= esc($item['icon'] ?? 'bi-star-fill') ?> display-5 mb-3 d-block" style="color:var(--tb-primary)"></i>
          </div>
        </div>
        <div class="col-lg-6 <?= $idx % 2 === 0 ? 'offset-lg-1' : 'offset-lg-0 order-lg-1' ?> mt-4 mt-lg-0">
          <h3 class="fs-3" style="font-family:var(--tb-heading-font); margin-bottom:.5rem"><?= esc($item['title'] ?? '') ?></h3>
          <p class="mb-0 fs-6" style="color:var(--section-muted); line-height:1.7"><?= esc($item['desc'] ?? '') ?></p>
          <?php if (!empty($item['badge'])): ?>
            <span class="badge mt-2 px-3 py-2 rounded-pill" style="background:var(--tb-primary); font-weight:500"><?= esc($item['badge']) ?></span>
          <?php endif; ?>
        </div>
      </div>
      <?php $idx++; ?>
    <?php endforeach; ?>
  </div>
</section>
