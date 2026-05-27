<?php /* === WHATSAPP CTA BANNER === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-cta p-0 position-relative" <?= anim_attrs($d) ?> style="min-height:380px; background: linear-gradient(135deg, rgba(0,0,0,0.75), rgba(0,0,0,0.45)), url('<?= esc($data['bg'] ?? placeholder('1920x600', '1a1a2e', 'e09f3e', 'Contacto+WhatsApp')) ?>') center/cover no-repeat;">
  <div class="container py-5">
    <div class="row align-items-center" style="min-height:380px">
      <div class="col-lg-8 mx-auto text-center text-white">
        <?php if (!empty($data['icon'])): ?>
          <i class="bi <?= esc($data['icon']) ?> display-3 mb-3 d-block" style="color:var(--tb-primary); opacity:.9"></i>
        <?php endif; ?>
        <h2 class="display-4 fw-bold mb-3" style="font-family:var(--tb-heading-font)"><?= esc($data['title'] ?? 'Hagamos su evento realidad') ?></h2>
        <p class="lead mb-4 mx-auto" style="max-width:680px; opacity:.85"><?= esc($data['text'] ?? 'Estamos a un mensaje de distancia. Escríbanos hoy y reciba una cotización personalizada.') ?></p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a class="tb-btn tb-btn--whatsapp tb-btn--lg px-4 py-3" style="font-size:1.1rem; border-radius:50px" href="<?= esc($data['wa_link'] ?? wa_link('Hola, quiero información.')) ?>" target="_blank" rel="noopener">
            <i class="bi bi-whatsapp me-2"></i> <?= esc($data['btn_label'] ?? 'Escríbanos por WhatsApp') ?>
          </a>
          <?php if (!empty($data['secondary_label'])): ?>
            <a class="btn btn-outline-light px-4 py-3" style="font-size:1.1rem; border-radius:50px; border-width:2px" href="<?= esc($data['secondary_link'] ?? '#contacto') ?>">
              <i class="bi bi-envelope me-2"></i> <?= esc($data['secondary_label']) ?>
            </a>
          <?php endif; ?>
        </div>
        <?php if (!empty($data['footnote'])): ?>
          <p class="small mt-4 mb-0" style="opacity:.6"><?= esc($data['footnote']) ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
