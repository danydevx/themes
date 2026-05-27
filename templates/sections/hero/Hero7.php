<?php /* === HERO PREMIUM LUXURY FULL-SCREEN === */ ?>
<section id="<?= esc($data['id'] ?? 'inicio') ?>" class="tb-hero position-relative d-flex align-items-center" <?= anim_attrs($data) ?> style="min-height:100vh; background-image: url('<?= esc($data['bg'] ?? placeholder('1920x1080', '1a1a1a', 'd4af37', 'Luxury+Event')) ?>'); background-size:cover; background-position:center; background-attachment:fixed;">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background:linear-gradient(to right, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0.3) 100%); z-index:1"></div>
  <div class="position-absolute top-0 end-0 w-100 h-100" style="background:radial-gradient(ellipse at 30% 50%, rgba(var(--tb-primary-rgb),0.15) 0%, transparent 60%); z-index:1"></div>
  <div class="container position-relative" style="z-index:2">
    <div class="row">
      <div class="col-lg-7">
        <?php if (!empty($data['overline'])): ?>
          <span class="d-block mb-3 fw-semibold" style="letter-spacing:.2em; text-transform:uppercase; color:var(--tb-primary); font-size:.85rem"><?= esc($data['overline']) ?></span>
        <?php endif; ?>
        <h1 class="display-1 fw-bold mb-4 text-white" style="font-family:var(--tb-heading-font); line-height:1.05"><?= $data['title'] ?? 'Excelencia<br>en cada<br>detalle' ?></h1>
        <p class="lead mb-5 text-white" style="opacity:.8; max-width:500px; font-weight:300"><?= esc($data['text'] ?? '') ?></p>
        <?php if (!empty($data['stats'])): ?>
          <div class="d-flex flex-wrap gap-4 mb-5">
            <?php foreach ($data['stats'] as $stat): ?>
              <div class="pe-4">
                <span class="d-block display-6 fw-bold" style="color:var(--tb-primary)"><?= esc($stat['value'] ?? '') ?></span>
                <span class="small text-white" style="opacity:.6"><?= esc($stat['label'] ?? '') ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        <div class="d-flex flex-wrap gap-3">
          <?php if (!empty($data['cta_primary'])): ?>
            <a class="tb-btn tb-btn--primary tb-btn--lg px-4 py-3" style="font-size:1.05rem; border-radius:4px" href="<?= esc($data['cta_primary']['href'] ?? '#') ?>" target="_blank" rel="noopener">
              <?= esc($data['cta_primary']['label'] ?? 'Solicitar información') ?>
            </a>
          <?php endif; ?>
          <?php if (!empty($data['cta_secondary'])): ?>
            <a class="btn btn-outline-light px-4 py-3" style="font-size:1.05rem; border-radius:4px; border-width:2px" href="<?= esc($data['cta_secondary']['href'] ?? '#') ?>">
              <i class="bi bi-play-circle me-2"></i> <?= esc($data['cta_secondary']['label'] ?? 'Ver recorrido') ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <?php if (!empty($data['scroll_hint'])): ?>
    <div style="position:absolute; bottom:2.5rem; left:50%; transform:translateX(-50%); color:rgba(255,255,255,.4); z-index:3; animation:bounce 2s infinite">
      <i class="bi bi-chevron-down fs-5"></i>
    </div>
  <?php endif; ?>
</section>
<style>
  @keyframes bounce {
    0%, 100% { transform:translateX(-50%) translateY(0); }
    50% { transform:translateX(-50%) translateY(8px); }
  }
</style>
