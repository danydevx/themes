<?php /* === EVENT TYPES EDITORIAL LIST === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'eventos') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?>
        <div class="d-flex align-items-center justify-content-center gap-3 mb-2">
          <span class="tb-ornament"></span>
          <span class="tb-section__label"><?= esc($d['label']) ?></span>
          <span class="tb-ornament"></span>
        </div>
      <?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-0">
      <?php foreach ($data['items'] ?? [] as $idx => $item): ?>
        <div class="col-md-6">
          <div class="d-flex align-items-start gap-4 py-4 px-3" style="border-bottom:1px solid var(--section-border)">
            <span class="flex-shrink-0 fw-bold" style="font-family:var(--tb-heading-font); font-size:2.5rem; color:var(--tb-primary); line-height:1; opacity:.7">
              <?= esc(str_pad((string)($idx + 1), 2, '0', STR_PAD_LEFT)) ?>
            </span>
            <div>
              <h3 class="fw-bold mb-2 fs-5" style="font-family:var(--tb-heading-font)"><i class="bi <?= esc($item['icon'] ?? 'bi-star') ?> me-2" style="color:var(--tb-primary); font-size:1.1rem"></i><?= esc($item['title'] ?? '') ?></h3>
              <p class="mb-0 small" style="color:var(--section-muted); line-height:1.7; max-width:360px"><?= esc($item['text'] ?? '') ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <?php if (!empty($data['cta_text'])): ?>
      <div class="text-center mt-5">
        <?php if (!empty($data['cta_link'])): ?>
          <a class="tb-btn tb-btn--outline" href="<?= esc($data['cta_link']) ?>" <?= !empty($data['cta_target']) ? 'target="_blank" rel="noopener"' : '' ?>>
            <i class="bi bi-arrow-right"></i> <?= esc($data['cta_text']) ?>
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
