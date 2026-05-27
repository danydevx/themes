<?php /* === HERO SPLIT === */ ?>
<section id="<?= esc($data['id'] ?? 'inicio') ?>" class="tb-hero" <?= anim_attrs($data) ?> style="background-image: url('<?= esc($data['bg'] ?? placeholder('1920x1080', '2c2416', 'b87c4c', 'Terraza')) ?>');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <span class="tb-section__label" style="color:rgba(255,255,255,0.8)"><?= esc($data['label'] ?? 'Bienvenidos') ?></span>
        <h1 class="tb-hero__title display-2 fw-bold"><?= $data['title'] ?? 'Su celebración merece<br>un lugar especial' ?></h1>
        <p class="tb-hero__text"><?= esc($data['text'] ?? 'Reserve una terraza privada, elegante y lista para recibir a sus invitados.') ?></p>
        <div class="tb-hero__actions">
          <?php if (!empty($data['cta_primary'])): ?>
            <a class="tb-btn tb-btn--whatsapp tb-btn--lg" href="<?= esc($data['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
              <i class="bi bi-whatsapp"></i> <?= esc($data['cta_primary']['label'] ?? 'Consultar disponibilidad') ?>
            </a>
          <?php endif; ?>
          <?php if (!empty($data['cta_secondary'])): ?>
            <a class="tb-btn tb-btn--outline tb-btn--lg" style="color:#fff; border-color:#fff" href="<?= esc($data['cta_secondary']['href'] ?? '#') ?>">
              <?= esc($data['cta_secondary']['label'] ?? 'Ver más') ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-5 offset-lg-1 d-none d-lg-block">
        <?php if (!empty($data['feature_img'])): ?>
          <img src="<?= esc($data['feature_img']) ?>" alt="<?= esc($data['feature_alt'] ?? '') ?>" class="rounded-4 shadow-lg w-100" style="aspect-ratio:4/3;object-fit:cover;">
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
