<?php /* === WHATSAPP CTA FLOATING CARD === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-cta <?= esc($d['scheme']) ?>" <?= anim_attrs($d) ?><?= bg_style($d) ?>>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="rounded-4 p-4 p-lg-5 text-center" style="background:var(--section-surface); border:1px solid var(--section-border); box-shadow:var(--tb-shadow-md); position:relative; overflow:hidden">
          <div style="position:absolute; top:-40px; right:-40px; width:120px; height:120px; background:var(--tb-primary); opacity:.08; border-radius:50%"></div>
          <div style="position:absolute; bottom:-60px; left:-60px; width:180px; height:180px; background:var(--tb-accent); opacity:.06; border-radius:50%"></div>
          <div style="position:relative; z-index:1">
            <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-4" style="width:72px; height:72px; background:linear-gradient(135deg, var(--tb-primary), var(--tb-accent))">
              <i class="bi bi-whatsapp fs-2 text-white"></i>
            </div>
            <h2 class="fw-bold mb-3" style="font-family:var(--tb-heading-font)"><?= esc($data['title'] ?? 'Reserve con un solo mensaje') ?></h2>
            <p class="mb-4" style="color:var(--section-muted); max-width:500px; margin:0 auto"><?= esc($data['text'] ?? 'Sin vueltas. Escríbanos, cuéntenos qué necesita y reciba confirmación en minutos.') ?></p>
            <a class="tb-btn tb-btn--whatsapp tb-btn--lg" style="border-radius:50px; padding:.8rem 2.5rem" href="<?= esc($data['wa_link'] ?? wa_link('Hola, quiero más información.')) ?>" target="_blank" rel="noopener">
              <i class="bi bi-whatsapp me-2"></i> <?= esc($data['btn_label'] ?? 'Contactar ahora') ?>
            </a>
            <?php if (!empty($data['sub_text'])): ?>
              <p class="small mb-0 mt-3" style="color:var(--section-muted)"><?= esc($data['sub_text']) ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
