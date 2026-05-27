<?php /* === ABOUT STAGGERED ALTERNATING === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'nosotros') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php $i = 0; foreach ($data['items'] ?? [] as $item): ?>
      <div class="row g-5 align-items-center <?= $i > 0 ? 'mt-4 mt-lg-5' : '' ?>">
        <div class="col-lg-5 <?= $i % 2 === 0 ? '' : 'order-lg-2' ?>">
          <div class="position-relative rounded-4 overflow-hidden shadow-lg" style="aspect-ratio:4/3;">
            <img src="<?= esc($item['img'] ?? placeholder('800x600', '1e293b', '3b82f6', ($item['title'] ?? ''))) ?>"
                 alt="<?= esc($item['img_alt'] ?? '') ?>" loading="lazy"
                 style="width:100%; height:100%; object-fit:cover;">
            <?php if (!empty($item['badge'])): ?>
              <span class="position-absolute bottom-0 start-0 m-3 badge rounded-pill px-3 py-2 tb-fs-badge" style="background:var(--tb-primary)">
                <?= esc($item['badge']) ?>
              </span>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-lg-6 <?= $i % 2 === 0 ? 'offset-lg-1' : 'offset-lg-0 order-lg-1' ?>">
          <?php if (!empty($item['number'])): ?>
            <span class="display-4 fw-bold d-block mb-2" style="color:var(--tb-primary); opacity:.3; line-height:1"><?= esc((string)($item['number'])) ?></span>
          <?php endif; ?>
          <h3 class="fs-4" style="font-family:var(--tb-heading-font); margin-bottom:.5rem"><?= esc($item['title'] ?? '') ?></h3>
          <p class="fs-6" style="color:var(--section-muted); line-height:1.7"><?= esc($item['text'] ?? '') ?></p>
          <?php if (!empty($item['features'])): ?>
            <ul class="list-unstyled mt-3">
              <?php foreach ($item['features'] as $f): ?>
                <li class="mb-2 d-flex align-items-center gap-2 small" style="color:var(--section-muted)">
                  <i class="bi bi-check-circle-fill flex-shrink-0" style="color:var(--tb-primary)"></i>
                  <?= esc($f ?? '') ?>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
      <?php $i++; ?>
    <?php endforeach; ?>
  </div>
</section>
