<?php /* === WHATSAPP CTA SPLIT LAYOUT === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-cta tb-cta--2 <?= esc($d['scheme']) ?> overflow-hidden" <?= anim_attrs($d) ?><?= bg_style($d) ?>>
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <h2 class="tb-cta--2__title display-4 fw-bold mb-3"><?= esc($d['title'] ?? 'Reserve su fecha ideal') ?></h2>
        <p class="tb-cta--2__text lead mb-4"><?= esc($d['text'] ?? 'Contáctenos por WhatsApp y reciba atención personalizada sin compromiso.') ?></p>
        <div class="d-flex flex-wrap gap-3">
          <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($d['wa_link'] ?? wa_link('Hola, me gustaría consultar disponibilidad.')) ?>" target="_blank" rel="noopener">
            <i class="bi bi-whatsapp"></i> <?= esc($d['btn_label'] ?? 'Enviar mensaje') ?>
          </a>
          <?php if (!empty($d['secondary_link'])): ?>
            <a class="tb-btn tb-btn--outline tb-btn--lg" href="<?= esc($d['secondary_link']) ?>">
              <i class="bi bi-telephone"></i> <?= esc($d['secondary_label'] ?? 'Llamar') ?>
            </a>
          <?php endif; ?>
        </div>
        <?php if (!empty($d['highlights'])): ?>
          <div class="tb-cta--2__highlights d-flex flex-wrap gap-4 mt-4 pt-3 border-top">
            <?php foreach ($d['highlights'] as $h): ?>
              <div class="d-flex align-items-center gap-2">
                <span class="tb-cta--2__highlight-icon d-flex align-items-center justify-content-center rounded-circle">
                  <i class="bi <?= esc($h['icon'] ?? 'bi-check-lg') ?>"></i>
                </span>
                <span class="small fw-semibold"><?= esc($h['label'] ?? '') ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-lg-5 text-center">
        <img src="<?= esc($d['image'] ?? placeholder('500x500', '2c2416', 'b87c4c', 'WhatsApp+CTA')) ?>"
             alt="<?= esc($d['image_alt'] ?? 'Contacto por WhatsApp') ?>"
             class="tb-cta__image img-fluid rounded-4 shadow-lg" loading="lazy">
      </div>
    </div>
  </div>
</section>
