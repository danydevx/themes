<?php /* === HERO EDITORIAL / ASYMMETRICAL === */ ?>
<section id="<?= esc($data['id'] ?? 'inicio') ?>" class="tb-hero position-relative overflow-hidden" <?= anim_attrs($data) ?> style="min-height:90vh; background:var(--section-bg)">
  <div class="container h-100">
    <div class="row align-items-center h-100 g-0" style="min-height:90vh">
      <div class="col-lg-5 py-5 py-lg-0 order-lg-2">
        <div class="position-relative">
          <img src="<?= esc($data['image'] ?? placeholder('600x800', '2c2416', 'b87c4c', 'Hero+Editorial')) ?>"
               alt="<?= esc($data['image_alt'] ?? 'Hero') ?>"
               class="img-fluid rounded-4 shadow-lg w-100" loading="lazy"
               style="aspect-ratio:3/4; object-fit:cover">
          <?php if (!empty($data['image_badge'])): ?>
            <span class="position-absolute bottom-0 start-0 mb-4 ms-4 badge rounded-pill px-3 py-2 fw-semibold" style="background:var(--tb-primary); font-size:.85rem">
              <?= esc($data['image_badge']) ?>
            </span>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-7 py-5 py-lg-0 pe-lg-5 order-lg-1">
        <div style="max-width:600px">
          <?php if (!empty($data['label'])): ?>
            <span class="tb-fs-label fw-semibold mb-3 d-block" style="letter-spacing:.15em; text-transform:uppercase; color:var(--tb-primary)"><?= esc($data['label']) ?></span>
          <?php endif; ?>
          <h1 class="display-3 fw-bold mb-4" style="font-family:var(--tb-heading-font); line-height:1.1">
            <?= $data['title'] ?? 'Elegancia que<br>se siente al<br>llegar' ?>
          </h1>
          <p class="lead mb-4" style="color:var(--section-muted); max-width:480px"><?= esc($data['text'] ?? '') ?></p>
          <div class="d-flex flex-wrap gap-3">
            <?php if (!empty($data['cta_primary'])): ?>
              <a class="tb-btn tb-btn--primary tb-btn--lg px-4" style="border-radius:50px" href="<?= esc($data['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
                <i class="bi bi-whatsapp"></i> <?= esc($data['cta_primary']['label'] ?? 'Reservar') ?>
              </a>
            <?php endif; ?>
            <?php if (!empty($data['cta_secondary'])): ?>
              <a class="tb-btn tb-btn--outline tb-btn--lg px-4" style="border-radius:50px" href="<?= esc($data['cta_secondary']['href'] ?? '#') ?>">
                <i class="bi bi-arrow-down-circle"></i> <?= esc($data['cta_secondary']['label'] ?? 'Explorar') ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if (!empty($data['bg_element'])): ?>
    <div class="position-absolute top-0 end-0 w-50 h-100" style="background:linear-gradient(135deg, transparent 60%, rgba(var(--tb-primary-rgb),.06)); z-index:0; pointer-events:none"></div>
  <?php endif; ?>
</section>
