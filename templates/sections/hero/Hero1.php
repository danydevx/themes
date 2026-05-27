<?php /* === HERO === */ ?>
<section id="<?= esc($data['id'] ?? 'inicio') ?>" class="tb-hero py-5" <?= anim_attrs($data) ?> style="background-image: url('<?= esc($data['bg'] ?? placeholder('1920x1080', '2c2416', 'b87c4c', 'Terraza+Balcones')) ?>'); ">
  <div class="container">
    <h1 class="tb-hero__title display-2 fw-bold"><?= $data['title'] ?? 'Su celebración merece<br>un lugar especial' ?></h1>
    <p class="tb-hero__text"><?= esc($data['text'] ?? 'Reserve una terraza privada, elegante y lista para recibir a sus invitados en el corazón de Zapopan.') ?></p>
    <div class="tb-hero__actions">
      <?php if (!empty($data['cta_primary'])): ?>
        <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($data['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
          <i class="bi bi-whatsapp"></i> <?= esc($data['cta_primary']['label'] ?? 'Consultar disponibilidad') ?>
        </a>
      <?php endif; ?>
      <?php if (!empty($data['cta_secondary'])): ?>
        <a class="tb-btn tb-btn--white tb-btn--lg" href="<?= esc($data['cta_secondary']['href'] ?? '#') ?>">
          <i class="bi bi-images"></i> <?= esc($data['cta_secondary']['label'] ?? 'Ver galería') ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>
