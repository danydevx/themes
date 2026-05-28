<?php /* === WHATSAPP CTA FLOATING CARD === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-cta tb-cta--4 <?= esc($d['scheme']) ?>" <?= anim_attrs($d) ?><?= bg_style($d) ?>>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="tb-cta--4__card rounded-4 p-4 p-lg-5 text-center">
          <div class="tb-cta--4__shape tb-cta--4__shape--top"></div>
          <div class="tb-cta--4__shape tb-cta--4__shape--bottom"></div>
          <div class="tb-cta--4__content">
            <div class="tb-cta--4__icon-wrap d-inline-flex align-items-center justify-content-center rounded-circle mb-4">
              <i class="bi bi-whatsapp fs-2 text-white"></i>
            </div>
            <h2 class="tb-cta--4__title fw-bold mb-3"><?= esc($d['title'] ?? 'Reserve con un solo mensaje') ?></h2>
            <p class="tb-cta--4__text mb-4"><?= esc($d['text'] ?? 'Sin vueltas. Escríbanos, cuéntenos qué necesita y reciba confirmación en minutos.') ?></p>
            <a class="tb-btn tb-btn--whatsapp tb-btn--lg tb-cta--4__btn" href="<?= esc($d['wa_link'] ?? wa_link('Hola, quiero más información.')) ?>" target="_blank" rel="noopener">
              <i class="bi bi-whatsapp me-2"></i> <?= esc($d['btn_label'] ?? 'Contactar ahora') ?>
            </a>
            <?php if (!empty($d['sub_text'])): ?>
              <p class="tb-cta--4__subtext small mb-0 mt-3"><?= esc($d['sub_text']) ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
