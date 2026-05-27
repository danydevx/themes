<?php /* === CTA EDITORIAL SPLIT WITH ORNAMENT === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-cta <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div class="text-center">
          <img src="<?= esc($data['image'] ?? placeholder('500x400', 'faf8f5', '8b9d83', 'CTA+Magnolia')) ?>"
               alt="<?= esc($data['image_alt'] ?? 'CTA') ?>"
               class="img-fluid w-100" loading="lazy"
               style="aspect-ratio:4/3; object-fit:cover; border:1px solid var(--section-border)">
        </div>
      </div>
      <div class="col-lg-7">
        <div class="ps-lg-4">
          <div class="d-flex align-items-center gap-3 mb-3">
            <span style="width:60px; height:1px; background:var(--tb-primary)"></span>
            <span class="tb-fs-label" style="color:var(--tb-primary); letter-spacing:.15em"><?= esc($data['label'] ?? 'Reserve ahora') ?></span>
          </div>
          <h2 class="fw-bold mb-3" style="font-family:var(--tb-heading-font); font-size:clamp(1.8rem, 4vw, 2.5rem); line-height:1.2"><?= esc($data['title'] ?? 'Haga realidad su celebración') ?></h2>
          <p class="mb-4" style="color:var(--section-muted); line-height:1.7; max-width:480px"><?= esc($data['text'] ?? 'Estamos a un mensaje de distancia. Escríbanos hoy y reciba una cotización personalizada.') ?></p>
          <div class="d-flex flex-wrap align-items-center gap-3">
            <a class="tb-btn tb-btn--whatsapp tb-btn--lg" style="border-radius:2px; letter-spacing:.03em" href="<?= esc($data['wa_link'] ?? wa_link('Hola, quiero información.')) ?>" target="_blank" rel="noopener">
              <i class="bi bi-whatsapp"></i> <?= esc($data['btn_label'] ?? 'Enviar mensaje') ?>
            </a>
            <?php if (!empty($data['secondary_label'])): ?>
              <a class="tb-btn tb-btn--outline tb-btn--lg" style="border-radius:2px" href="<?= esc($data['secondary_link'] ?? '#contacto') ?>">
                <?= esc($data['secondary_label']) ?>
              </a>
            <?php endif; ?>
          </div>
          <?php if (!empty($data['note'])): ?>
            <p class="small mt-3 mb-0 fst-italic" style="color:var(--section-muted)"><?= esc($data['note']) ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
