<?php /* === SERVICES LARGE ICONS WITH NUMBERS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'servicios') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4">
      <?php $n = 0; foreach ($data['items'] ?? [] as $item): $n++; ?>
        <div class="col-md-6 col-lg-4">
          <div class="d-flex gap-3 p-3 rounded-4 h-100" style="background:var(--section-surface); border:1px solid var(--section-border)">
            <div class="tb-icon-circle tb-icon-circle--md" style="background:var(--tb-primary); color:#fff;">
              <?= esc((string)$n) ?>
            </div>
            <div>
              <h4 class="fw-semibold mb-1 fs-6"><?= esc($item['title'] ?? '') ?></h4>
              <p class="small mb-0" style="color:var(--section-muted)"><?= esc($item['desc'] ?? '') ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
