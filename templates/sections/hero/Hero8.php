<?php /* === HERO EDITORIAL MAGAZINE COVER === */ ?>
<section id="<?= esc($data['id'] ?? 'inicio') ?>" class="tb-hero position-relative overflow-hidden" <?= anim_attrs($data) ?> style="min-height:100vh; background:var(--section-bg)">
  <div class="container h-100">
    <div class="row align-items-center h-100 g-0" style="min-height:100vh">
      <div class="col-lg-6 py-5 py-lg-0 order-lg-1">
        <div class="pe-lg-5" style="max-width:560px">
          <?php if (!empty($data['overline'])): ?>
            <div class="d-flex align-items-center gap-3 mb-3">
              <span style="width:48px; height:1px; background:var(--tb-primary); display:block"></span>
              <span class="tb-fs-label fw-semibold" style="letter-spacing:.2em; text-transform:uppercase; color:var(--tb-primary)"><?= esc($data['overline']) ?></span>
            </div>
          <?php endif; ?>
          <h1 class="mb-4 fw-bold" style="font-family:var(--tb-heading-font); font-size:clamp(2.8rem, 6vw, 5rem); line-height:1.05; color:var(--section-text); letter-spacing:-0.02em">
            <?= $data['title'] ?? 'Donde su evento<br>se convierte en<br>obra de arte' ?>
          </h1>
          <p class="mb-5" style="font-size:1.15rem; color:var(--section-muted); line-height:1.7; max-width:420px"><?= esc($data['text'] ?? '') ?></p>
          <div class="d-flex flex-wrap gap-3">
            <?php if (!empty($data['cta_primary'])): ?>
              <a class="tb-btn tb-btn--primary tb-btn--lg px-4" style="border-radius:2px; letter-spacing:.03em" href="<?= esc($data['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
                <?= esc($data['cta_primary']['label'] ?? 'Reservar') ?>
                <i class="bi bi-arrow-right ms-1"></i>
              </a>
            <?php endif; ?>
            <?php if (!empty($data['cta_secondary'])): ?>
              <a class="tb-btn tb-btn--outline tb-btn--lg px-4" style="border-radius:2px" href="<?= esc($data['cta_secondary']['href'] ?? '#') ?>">
                <?= esc($data['cta_secondary']['label'] ?? 'Conocer más') ?>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="col-lg-6 py-4 py-lg-0 order-lg-2">
        <div class="position-relative">
          <img src="<?= esc($data['image'] ?? placeholder('700x900', 'faf8f5', '8b9d83', 'Hero+Magnolia')) ?>"
               alt="<?= esc($data['image_alt'] ?? 'Hero') ?>"
               class="img-fluid w-100" loading="eager"
               style="aspect-ratio:3/4; object-fit:cover; border:1px solid var(--section-border)">
          <?php if (!empty($data['image_caption'])): ?>
            <p class="mt-2 small fst-italic" style="color:var(--section-muted); text-align:right"><?= esc($data['image_caption']) ?></p>
          <?php endif; ?>
          <?php if (!empty($data['ornament'])): ?>
            <div style="position:absolute; top:-20px; right:-20px; color:var(--tb-primary); font-size:2rem; line-height:1" aria-hidden="true"><?= esc($data['ornament']) ?></div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
