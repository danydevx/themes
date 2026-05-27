<?php /* === WHATSAPP CTA SPLIT LAYOUT === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-cta <?= esc($d['scheme']) ?> overflow-hidden" <?= anim_attrs($d) ?><?= bg_style($d) ?>>
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <h2 class="display-4 fw-bold mb-3" style="font-family:var(--tb-heading-font)"><?= esc($data['title'] ?? 'Reserve su fecha ideal') ?></h2>
        <p class="lead mb-4" style="color:var(--section-muted)"><?= esc($data['text'] ?? 'Contáctenos por WhatsApp y reciba atención personalizada sin compromiso.') ?></p>
        <div class="d-flex flex-wrap gap-3">
          <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($data['wa_link'] ?? wa_link('Hola, me gustaría consultar disponibilidad.')) ?>" target="_blank" rel="noopener">
            <i class="bi bi-whatsapp"></i> <?= esc($data['btn_label'] ?? 'Enviar mensaje') ?>
          </a>
          <?php if (!empty($data['secondary_link'])): ?>
            <a class="tb-btn tb-btn--outline tb-btn--lg" href="<?= esc($data['secondary_link']) ?>">
              <i class="bi bi-telephone"></i> <?= esc($data['secondary_label'] ?? 'Llamar') ?>
            </a>
          <?php endif; ?>
        </div>
        <?php if (!empty($data['highlights'])): ?>
          <div class="d-flex flex-wrap gap-4 mt-4 pt-3 border-top" style="border-color:var(--section-border) !important">
            <?php foreach ($data['highlights'] as $h): ?>
              <div class="d-flex align-items-center gap-2">
                <span class="d-flex align-items-center justify-content-center rounded-circle" style="width:40px; height:40px; background:var(--tb-primary); color:#fff">
                  <i class="bi <?= esc($h['icon'] ?? 'bi-check-lg') ?>"></i>
                </span>
                <span class="small fw-semibold"><?= esc($h['label'] ?? '') ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-lg-5 text-center">
        <img src="<?= esc($data['image'] ?? placeholder('500x500', '2c2416', 'b87c4c', 'WhatsApp+CTA')) ?>"
             alt="<?= esc($data['image_alt'] ?? 'Contacto por WhatsApp') ?>"
             class="img-fluid rounded-4 shadow-lg" style="max-height:380px; object-fit:cover" loading="lazy">
      </div>
    </div>
  </div>
</section>
