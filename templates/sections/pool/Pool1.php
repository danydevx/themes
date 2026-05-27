<?php /* === ALBERCA CON IMÁGENES Y CARACTERÍSTICAS === */ ?>
<?php $d = section_defaults($data); ?>
<?php $paddingClass = $d['padding'] ? ' tb-section--pad-' . esc($d['padding']) : ''; ?>
<?php $fwClass = $d['fullwidth'] ? ' tb-section--fullwidth' : ''; ?>
<section id="<?= esc($d['id'] ?: 'alberca') ?>" class="tb-section tb-pool <?= esc($d['scheme']) ?><?= $paddingClass ?><?= $fwClass ?>" <?= anim_attrs($d) ?><?= bg_style($d) ?>>
  <div class="container">
    <?php if ($d['label'] || $d['title'] || $d['subtitle']): ?>
    <div class="tb-section__header<?= $data['header_left'] ? ' tb-section__header--left' : '' ?>">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
    <?php endif; ?>

    <div class="row g-4 align-items-center mb-5">
      <div class="col-lg-6">
        <div class="tb-pool__feature-image">
          <img src="<?= esc($data['main_image'] ?? placeholder('800x500', '00b4d8', 'ffffff', 'Alberca+Principal')) ?>"
               alt="<?= esc($data['main_image_alt'] ?? 'Alberca principal') ?>"
               class="tb-pool__main-img w-100 rounded-4 shadow-lg"
               style="aspect-ratio:16/10; object-fit:cover" loading="eager">
          <?php if (!empty($data['main_badge'])): ?>
          <span class="tb-pool__badge"><?= esc($data['main_badge']) ?></span>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row g-3">
          <?php foreach ($data['features'] ?? [] as $f): ?>
          <div class="col-6">
            <div class="tb-pool__feature-card text-center p-3 rounded-4" style="background:var(--section-surface);border:1px solid var(--section-border)">
              <div class="tb-pool__feature-icon">
                <i class="bi <?= esc($f['icon'] ?? 'bi-droplet') ?>"></i>
              </div>
              <div class="tb-pool__feature-value"><?= esc($f['value'] ?? '') ?></div>
              <div class="tb-pool__feature-label"><?= esc($f['label'] ?? '') ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <?php if (!empty($data['images'])): ?>
    <div class="row g-3">
      <?php foreach ($data['images'] as $img): ?>
      <div class="col-6 col-md-4 col-lg-3">
        <img src="<?= esc($img['src'] ?? placeholder('400x300', 'e0f7fa', '00b4d8', 'Alberca')) ?>"
             alt="<?= esc($img['alt'] ?? 'Alberca') ?>"
             class="w-100 rounded-3"
             style="aspect-ratio:4/3; object-fit:cover; border:2px solid var(--section-border)"
             loading="lazy">
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($data['safety'])): ?>
    <div class="tb-pool__safety mt-5 p-4 rounded-4" style="background:rgba(var(--tb-primary-rgb),0.06); border:1px solid var(--section-border)">
      <div class="d-flex align-items-center gap-2 mb-2">
        <i class="bi bi-shield-check fs-4" style="color:var(--icon-color, var(--tb-primary))"></i>
        <strong><?= esc($data['safety_title'] ?? 'Seguridad') ?></strong>
      </div>
      <p class="mb-0" style="color:var(--section-muted); font-size:0.92rem"><?= nl2br(esc($data['safety'] ?? '')) ?></p>
    </div>
    <?php endif; ?>
  </div>
</section>
