<?php /* === CTA EDITORIAL SPLIT WITH ORNAMENT === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-cta tb-cta--5 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div class="text-center">
          <img src="<?= esc($d['image'] ?? placeholder('500x400', 'faf8f5', '8b9d83', 'CTA+Magnolia')) ?>"
               alt="<?= esc($d['image_alt'] ?? 'CTA') ?>"
               class="tb-cta--5__image img-fluid w-100" loading="lazy">
        </div>
      </div>
      <div class="col-lg-7">
        <div class="ps-lg-4">
          <div class="d-flex align-items-center gap-3 mb-3">
            <span class="tb-cta--5__line"></span>
            <span class="tb-cta--5__label tb-fs-label"><?= esc($d['label'] ?? 'Reserve ahora') ?></span>
          </div>
          <h2 class="tb-cta--5__title fw-bold mb-3"><?= esc($d['title'] ?? 'Haga realidad su celebración') ?></h2>
          <p class="tb-cta--5__text mb-4"><?= esc($d['text'] ?? 'Estamos a un mensaje de distancia. Escríbanos hoy y reciba una cotización personalizada.') ?></p>
          <div class="d-flex flex-wrap align-items-center gap-3">
            <a class="tb-btn tb-btn--whatsapp tb-btn--lg tb-cta--5__btn-primary" href="<?= esc($d['wa_link'] ?? wa_link('Hola, quiero información.')) ?>" target="_blank" rel="noopener">
              <i class="bi bi-whatsapp"></i> <?= esc($d['btn_label'] ?? 'Enviar mensaje') ?>
            </a>
            <?php if (!empty($d['secondary_label'])): ?>
              <a class="tb-btn tb-btn--outline tb-btn--lg tb-cta--5__btn-secondary" href="<?= esc($d['secondary_link'] ?? '#contacto') ?>">
                <?= esc($d['secondary_label']) ?>
              </a>
            <?php endif; ?>
          </div>
          <?php if (!empty($d['note'])): ?>
            <p class="tb-cta--5__note small mt-3 mb-0 fst-italic"><?= esc($d['note']) ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
