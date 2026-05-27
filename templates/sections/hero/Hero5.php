<?php /* === HERO WITH FLOATING CARD === */ ?>
<section id="<?= esc($data['id'] ?? 'inicio') ?>" class="tb-hero d-flex align-items-end pb-5" style="background-image: url('<?= esc($data['bg'] ?? placeholder('1920x1080', '0f172a', '3b82f6', 'Hero')) ?>'); min-height:90vh;">
  <div class="container" style="z-index:2; position:relative;">
    <div class="row">
      <div class="col-lg-8">
        <div class="rounded-4 p-4 p-lg-5" style="background:rgba(15,23,42,0.92); backdrop-filter:blur(20px); -webkit-backdrop-filter:blur(20px); border:1px solid rgba(59,130,246,0.2); box-shadow:0 20px 60px rgba(0,0,0,0.4);">
          <?php if (!empty($data['badge'])): ?>
            <span class="badge rounded-pill px-3 py-2 mb-3 fw-semibold tb-fs-badge" style="background:var(--tb-primary); letter-spacing:.05em">
              <?= esc($data['badge']) ?>
            </span>
          <?php endif; ?>
          <h1 class="tb-hero__title display-2 fw-bold" style="color:#fff;"><?= $data['title'] ?? 'Terraza Buenavista' ?></h1>
          <p class="tb-hero-text"><?= esc($data['text'] ?? '') ?></p>
          <?php if (!empty($data['features'])): ?>
            <div class="d-flex flex-wrap gap-3 mb-3">
              <?php foreach ($data['features'] as $feat): ?>
                <span class="d-flex align-items-center gap-2 small" style="color:rgba(255,255,255,0.7)">
                  <i class="bi <?= esc($feat['icon'] ?? 'bi-check-circle-fill') ?>" style="color:var(--tb-primary)"></i>
                  <?= esc($feat['label'] ?? '') ?>
                </span>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <div class="d-flex flex-wrap gap-3 mt-2">
            <?php if (!empty($data['cta_primary'])): ?>
              <a class="tb-btn tb-btn--primary tb-btn--lg" href="<?= esc($data['cta_primary']['href'] ?? '#') ?>">
                <i class="bi bi-whatsapp"></i> <?= esc($data['cta_primary']['label'] ?? 'Reservar') ?>
              </a>
            <?php endif; ?>
            <?php if (!empty($data['cta_secondary'])): ?>
              <a class="tb-btn tb-btn--outline tb-btn--lg" style="border-color:rgba(255,255,255,0.3); color:#fff;" href="<?= esc($data['cta_secondary']['href'] ?? '#') ?>">
                <i class="bi bi-play-circle"></i> <?= esc($data['cta_secondary']['label'] ?? 'Ver más') ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
