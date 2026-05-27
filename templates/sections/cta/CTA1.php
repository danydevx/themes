<?php /* === WHATSAPP CTA === */ ?>
<section class="tb-section tb-cta scheme-color" <?= anim_attrs($data) ?><?= bg_style($data) ?>>
  <div class="container">
    <h2 class="tb-cta__title"><?= esc($data['title'] ?? '¿Listo para reservar su fecha?') ?></h2>
    <p class="tb-cta__text"><?= esc($data['text'] ?? 'Escríbanos por WhatsApp y reciba atención personalizada. Le ayudamos a encontrar la mejor fecha y resolver todas sus dudas sin compromiso.') ?></p>
    <div class="tb-cta__actions">
      <a class="tb-btn tb-btn--white tb-btn--lg"
         href="<?= esc($data['wa_link'] ?? wa_link('Hola, me gustaría consultar disponibilidad y recibir información de paquetes para eventos.')) ?>"
         target="_blank" rel="noopener">
        <i class="bi bi-whatsapp"></i> <?= esc($data['btn_label'] ?? 'Enviar mensaje por WhatsApp') ?>
      </a>
    </div>
  </div>
</section>
