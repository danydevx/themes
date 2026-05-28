<?php /* === WHATSAPP CTA BANNER === */ ?>
<?php $d = section_defaults($data); ?>
<?php $bg = $d['bg'] ?? placeholder('1920x600', '1a1a2e', 'e09f3e', 'Contacto+WhatsApp'); ?>
<section class="tb-section tb-cta tb-cta--3 p-0 position-relative <?= esc($d['scheme']) ?>" <?= anim_attrs($d) ?> style="background-image: url('<?= esc($bg) ?>');">
  <div class="tb-cta--3__overlay"></div>
  <div class="container py-5">
    <div class="tb-cta--3__row row align-items-center">
      <div class="col-lg-8 mx-auto text-center">
        <?php if (!empty($d['icon'])): ?>
          <i class="tb-cta--3__icon bi <?= esc($d['icon']) ?> display-3 mb-3 d-block"></i>
        <?php endif; ?>
        <h2 class="tb-cta--3__title display-4 fw-bold mb-3"><?= esc($d['title'] ?? 'Hagamos su evento realidad') ?></h2>
        <p class="tb-cta--3__text lead mb-4 mx-auto"><?= esc($d['text'] ?? 'Estamos a un mensaje de distancia. Escríbanos hoy y reciba una cotización personalizada.') ?></p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a class="tb-btn tb-btn--whatsapp tb-btn--lg px-4 py-3 tb-cta--3__btn" href="<?= esc($d['wa_link'] ?? wa_link('Hola, quiero información.')) ?>" target="_blank" rel="noopener">
            <i class="bi bi-whatsapp me-2"></i> <?= esc($d['btn_label'] ?? 'Escríbanos por WhatsApp') ?>
          </a>
          <?php if (!empty($d['secondary_label'])): ?>
            <a class="tb-btn tb-btn--outline tb-btn--lg px-4 py-3 tb-cta--3__btn tb-cta--3__btn-secondary" href="<?= esc($d['secondary_link'] ?? '#contacto') ?>">
              <i class="bi bi-envelope me-2"></i> <?= esc($d['secondary_label']) ?>
            </a>
          <?php endif; ?>
        </div>
        <?php if (!empty($d['footnote'])): ?>
          <p class="tb-cta--3__footnote small mt-4 mb-0"><?= esc($d['footnote']) ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
