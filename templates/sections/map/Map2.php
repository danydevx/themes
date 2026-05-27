<?php /* === MAP FULL-WIDTH WITH OVERLAY === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-map p-0 position-relative overflow-hidden" <?= anim_attrs($d) ?> style="min-height:500px">
  <iframe
    class="position-absolute top-0 start-0 w-100 h-100"
    src="<?= esc($data['map_src'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14929.052536526394!2d-103.409631!3d20.653916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428add9a9232fe3%3A0x4cf3ee4e3f8b5c6a!2sZapopan%2C%20Jal.!5e0!3m2!1ses!2smx!4v1700000000000') ?>"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    title="<?= esc($data['map_title'] ?? 'Ubicación') ?>"
    style="border:0; filter:grayscale(40%) brightness(0.85)">
  </iframe>
  <div class="container position-relative d-flex align-items-center" style="z-index:1; min-height:500px; pointer-events:none">
    <div class="row">
      <div class="col-lg-5">
        <div class="rounded-4 p-4 p-lg-5" style="background:rgba(0,0,0,0.88); backdrop-filter:blur(16px); -webkit-backdrop-filter:blur(16px); border:1px solid rgba(255,255,255,0.1); pointer-events:auto">
          <?php if ($d['label']): ?><span class="badge rounded-pill px-3 py-2 mb-3 fw-semibold" style="background:var(--tb-primary)"><?= esc($d['label']) ?></span><?php endif; ?>
          <?php if ($d['title']): ?><h2 class="text-white fw-bold mb-3" style="font-family:var(--tb-heading-font)"><?= esc($d['title']) ?></h2><?php endif; ?>
          <?php if ($d['subtitle']): ?><p class="text-white mb-0 small" style="opacity:.7"><?= esc($d['subtitle']) ?></p><?php endif; ?>
          <?php if (!empty($data['address'])): ?>
            <div class="d-flex align-items-center gap-3 mt-3 pt-3 border-top border-secondary">
              <i class="bi bi-geo-alt-fill fs-4" style="color:var(--tb-primary)"></i>
              <span class="text-white small"><?= esc($data['address']) ?></span>
            </div>
          <?php endif; ?>
          <?php if (!empty($data['cta_link'])): ?>
            <a class="tb-btn tb-btn--primary mt-4 w-100" href="<?= esc($data['cta_link']) ?>" target="_blank" rel="noopener">
              <i class="bi bi-signpost-2"></i> <?= esc($data['cta_label'] ?? 'Cómo llegar') ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
