<?php /* === WHATSAPP CTA === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-cta tb-cta--1 <?= esc($d['scheme'] ?: 'scheme-color') ?>" <?= anim_attrs($d) ?><?= bg_style($d) ?>>
  <div class="container">
    <h2 class="tb-cta--1__title"><?= esc($d['title'] ?? '¿Listo para reservar su fecha?') ?></h2>
    <p class="tb-cta--1__text"><?= esc($d['text'] ?? 'Escríbanos por WhatsApp y reciba atención personalizada. Le ayudamos a encontrar la mejor fecha y resolver todas sus dudas sin compromiso.') ?></p>
    <div class="tb-cta--1__actions">
      <a class="tb-btn tb-btn--white tb-btn--lg"
         href="<?= esc($d['wa_link'] ?? wa_link('Hola, me gustaría consultar disponibilidad y recibir información de paquetes para eventos.')) ?>"
         target="_blank" rel="noopener">
        <i class="bi bi-whatsapp"></i> <?= esc($d['btn_label'] ?? 'Enviar mensaje por WhatsApp') ?>
      </a>
    </div>
  </div>
</section>
