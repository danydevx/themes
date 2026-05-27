<?php /* === CTA6 MINIMAL CENTERED === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-cta--6 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="text-center" style="max-width:640px; margin:0 auto">

      <?php if (!empty($data['icon'])): ?>
        <div class="mb-4">
          <span class="d-inline-flex align-items-center justify-content-center rounded-circle" style="width:72px; height:72px; background:var(--tb-primary); color:#fff">
            <i class="bi <?= esc($data['icon']) ?> fs-3"></i>
          </span>
        </div>
      <?php endif; ?>

      <?php if ($d['label']): ?>
        <span class="tb-section__label"><?= esc($d['label']) ?></span>
      <?php endif; ?>

      <h2 class="display-5 fw-bold mb-3" style="font-family:var(--tb-heading-font)">
        <?= esc($data['title'] ?? '¿Listo para comenzar?') ?>
      </h2>

      <?php if (!empty($data['text'])): ?>
        <p class="lead mb-4" style="color:var(--section-muted)"><?= esc($data['text']) ?></p>
      <?php endif; ?>

      <div class="d-flex flex-wrap justify-content-center gap-3">
        <?php if (!empty($data['wa_link'])): ?>
          <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($data['wa_link']) ?>" target="_blank" rel="noopener">
            <i class="bi bi-whatsapp"></i> <?= esc($data['btn_label'] ?? 'Escribir por WhatsApp') ?>
          </a>
        <?php endif; ?>
        <?php if (!empty($data['secondary_link'])): ?>
          <a class="tb-btn tb-btn--outline tb-btn--lg" href="<?= esc($data['secondary_link']) ?>">
            <?= esc($data['secondary_label'] ?? 'Llamar') ?>
          </a>
        <?php endif; ?>
      </div>

      <?php if (!empty($data['note'])): ?>
        <p class="mt-3 small" style="color:var(--section-muted)"><?= esc($data['note']) ?></p>
      <?php endif; ?>

    </div>
  </div>
</section>