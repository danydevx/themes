<?php /* === HERO9 VERTICAL SPLIT COLLAGE === */ ?>
<section id="<?= esc($data['id'] ?? 'inicio') ?>" class="tb-hero tb-hero--9" <?= anim_attrs($data) ?>>
  <div class="container">
    <div class="row g-0 rounded-4 overflow-hidden shadow-lg" style="min-height:580px">

      <!-- Lado izquierdo: contenido -->
      <div class="col-lg-6 d-flex align-items-center" style="background:var(--tb-primary); position:relative; overflow:hidden">
        <!-- Pattern decoration -->
        <div style="position:absolute; top:-40px; right:-40px; width:200px; height:200px; border-radius:50%; background:rgba(255,255,255,0.08)"></div>
        <div style="position:absolute; bottom:-60px; left:-30px; width:180px; height:180px; border-radius:50%; background:rgba(255,255,255,0.05)"></div>

        <div class="p-4 p-lg-5 position-relative" style="z-index:2">
          <?php if (!empty($data['overline'])): ?>
            <span class="d-block mb-3 fw-bold" style="color:rgba(255,255,255,0.8); letter-spacing:.15em; text-transform:uppercase; font-size:.78rem">
              <?= esc($data['overline']) ?>
            </span>
          <?php endif; ?>

          <h1 class="tb-hero__title display-4 fw-bold mb-4" style="font-family:var(--tb-heading-font); color:#fff; line-height:1.1">
            <?= $data['title'] ?? 'Un lugar que<br>cuida cada detalle' ?>
          </h1>

          <p class="mb-4" style="color:rgba(255,255,255,0.75); font-size:1.05rem; max-width:400px; line-height:1.6">
            <?= esc($data['text'] ?? '') ?>
          </p>

          <?php if (!empty($data['features'])): ?>
            <div class="d-flex flex-wrap gap-3 mb-4">
              <?php foreach ($data['features'] as $f): ?>
                <div class="d-flex align-items-center gap-2 rounded-pill px-3 py-2" style="background:rgba(255,255,255,0.15)">
                  <i class="bi <?= esc($f['icon'] ?? 'bi-check') ?>" style="color:#fff"></i>
                  <span class="small fw-semibold" style="color:#fff"><?= esc($f['label'] ?? '') ?></span>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <div class="d-flex flex-wrap gap-3">
            <?php if (!empty($data['cta_primary'])): ?>
              <a class="tb-btn tb-btn--white tb-btn--lg" href="<?= esc($data['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
                <i class="bi bi-whatsapp"></i> <?= esc($data['cta_primary']['label'] ?? 'Reservar ahora') ?>
              </a>
            <?php endif; ?>
            <?php if (!empty($data['cta_secondary'])): ?>
              <a class="tb-btn tb-btn--outline tb-btn--lg" style="border-color:rgba(255,255,255,0.5); color:#fff" href="<?= esc($data['cta_secondary']['href'] ?? '#') ?>">
                <?= esc($data['cta_secondary']['label'] ?? 'Ver más') ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <!-- Lado derecho: collage de imágenes -->
      <div class="col-lg-6 position-relative d-none d-lg-flex" style="background:#1a1a1a">
        <div class="row g-0 w-100 h-100">
          <?php $images = $data['images'] ?? [
            ['src' => placeholder('400x400', 'e8d4c4', '8b6b4a', 'Terraza+Principal'), 'alt' => 'Terraza principal'],
            ['src' => placeholder('400x200', 'd4c4b0', '8b6b4a', 'Jardín+Lateral'), 'alt' => 'Jardín lateral'],
            ['src' => placeholder('400x200', 'c8b89a', '8b6b4a', 'Detalle+Flora'), 'alt' => 'Detalle floral'],
          ]; ?>
          <div class="col-6">
            <img src="<?= esc($images[0]['src'] ?? '') ?>" alt="<?= esc($images[0]['alt'] ?? '') ?>"
                 class="w-100 h-100" style="object-fit:cover; min-height:280px">
          </div>
          <div class="col-6 d-flex flex-column">
            <img src="<?= esc($images[1]['src'] ?? '') ?>" alt="<?= esc($images[1]['alt'] ?? '') ?>"
                 class="w-100" style="height:50%; object-fit:cover">
            <img src="<?= esc($images[2]['src'] ?? '') ?>" alt="<?= esc($images[2]['alt'] ?? '') ?>"
                 class="w-100" style="height:50%; object-fit:cover">
          </div>
        </div>
        <?php if (!empty($data['badge'])): ?>
          <span class="position-absolute bottom-0 start-0 m-3 px-3 py-2 rounded-3 fw-bold small" style="background:rgba(255,255,255,0.15); color:#fff; backdrop-filter:blur(4px)">
            <?= esc($data['badge']) ?>
          </span>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>