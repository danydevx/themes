<?php /* === CTA6 MINIMAL CENTERED === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-cta--6 <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?><?= bg_style($d) ?>>
  <div class="container">
    <div class="tb-cta--6__content text-center">

      <?php if (!empty($d['icon'])): ?>
        <div class="mb-4">
          <span class="tb-cta--6__icon d-inline-flex align-items-center justify-content-center rounded-circle">
            <i class="bi <?= esc($d['icon']) ?> fs-3"></i>
          </span>
        </div>
      <?php endif; ?>

      <?php if ($d['label']): ?>
        <span class="tb-section__label"><?= esc($d['label']) ?></span>
      <?php endif; ?>

      <h2 class="tb-cta--6__title display-5 fw-bold mb-3">
        <?= esc($d['title'] ?? '¿Listo para comenzar?') ?>
      </h2>

      <?php if (!empty($d['text'])): ?>
        <p class="tb-cta--6__text lead mb-4"><?= esc($d['text']) ?></p>
      <?php endif; ?>

      <div class="d-flex flex-wrap justify-content-center gap-3">
        <?php if (!empty($d['wa_link'])): ?>
          <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($d['wa_link']) ?>" target="_blank" rel="noopener">
            <i class="bi bi-whatsapp"></i> <?= esc($d['btn_label'] ?? 'Escribir por WhatsApp') ?>
          </a>
        <?php endif; ?>
        <?php if (!empty($d['secondary_link'])): ?>
          <a class="tb-btn tb-btn--outline tb-btn--lg" href="<?= esc($d['secondary_link']) ?>">
            <?= esc($d['secondary_label'] ?? 'Llamar') ?>
          </a>
        <?php endif; ?>
      </div>

      <?php if (!empty($d['note'])): ?>
        <p class="tb-cta--6__note mt-3 small"><?= esc($d['note']) ?></p>
      <?php endif; ?>

    </div>
  </div>
</section>
