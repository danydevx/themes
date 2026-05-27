<?php /* === EVENT TYPES ALTERNATING ROWS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'eventos') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php $idx = 0; foreach ($data['items'] ?? [] as $item): ?>
      <div class="row g-0 align-items-center mb-4 rounded-4 overflow-hidden" style="background:var(--section-surface); border:1px solid var(--section-border)">
        <?php if ($idx % 2 === 0): ?>
          <div class="col-md-6">
            <img src="<?= esc($item['img'] ?? placeholder('800x500', 'f8d4de', 'c06c84', $item['title'] ?? '')) ?>" alt="<?= esc($item['img_alt'] ?? '') ?>" style="width:100%; aspect-ratio:4/3; object-fit:cover;">
          </div>
          <div class="col-md-6 p-4 p-lg-5">
            <?php if (!empty($item['icon'])): ?><i class="bi <?= esc($item['icon']) ?> fs-2 mb-3 d-block" style="color:var(--tb-primary)"></i><?php endif; ?>
            <h3 class="fs-4" style="font-family:var(--tb-heading-font); margin-bottom:.5rem"><?= esc($item['title'] ?? '') ?></h3>
            <p style="color:var(--section-muted); margin-bottom:0"><?= esc($item['text'] ?? '') ?></p>
            <?php if (!empty($item['cta'])): ?>
              <a class="tb-btn tb-btn--outline mt-3" href="<?= esc($item['cta']['href'] ?? '#') ?>"><?= esc($item['cta']['label'] ?? 'Más info') ?></a>
            <?php endif; ?>
          </div>
        <?php else: ?>
          <div class="col-md-6 order-md-2">
            <img src="<?= esc($item['img'] ?? placeholder('800x500', 'f8d4de', 'c06c84', $item['title'] ?? '')) ?>" alt="<?= esc($item['img_alt'] ?? '') ?>" style="width:100%; aspect-ratio:4/3; object-fit:cover;">
          </div>
          <div class="col-md-6 order-md-1 p-4 p-lg-5">
            <?php if (!empty($item['icon'])): ?><i class="bi <?= esc($item['icon']) ?> fs-2 mb-3 d-block" style="color:var(--tb-primary)"></i><?php endif; ?>
            <h3 class="fs-4" style="font-family:var(--tb-heading-font); margin-bottom:.5rem"><?= esc($item['title'] ?? '') ?></h3>
            <p style="color:var(--section-muted); margin-bottom:0"><?= esc($item['text'] ?? '') ?></p>
            <?php if (!empty($item['cta'])): ?>
              <a class="tb-btn tb-btn--outline mt-3" href="<?= esc($item['cta']['href'] ?? '#') ?>"><?= esc($item['cta']['label'] ?? 'Más info') ?></a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
      <?php $idx++; ?>
    <?php endforeach; ?>
  </div>
</section>
