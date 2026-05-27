<?php /* === MAP5 MAP TOP CARDS BELOW === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'ubicacion') ?>" class="tb-section tb-map--5 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <!-- Map full width -->
    <div class="tb-map--5__map-wrapper rounded-4 overflow-hidden mb-4" style="height:320px; border:1px solid var(--section-border)">
      <iframe src="<?= esc($data['map_src'] ?? '') ?>" width="100%" height="100%" style="border:0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="<?= esc($data['map_title'] ?? 'Ubicación') ?>"></iframe>
    </div>

    <?php if (!empty($data['cta_link'])): ?>
      <div class="text-center mb-5">
        <a href="<?= esc($data['cta_link']) ?>" target="_blank" rel="noopener" class="tb-btn tb-btn--primary">
          <i class="bi bi-geo-alt-fill me-2"></i><?= esc($data['cta_label'] ?? 'Cómo llegar') ?>
        </a>
      </div>
    <?php endif; ?>

    <!-- Info cards row -->
    <div class="row g-4 justify-content-center">
      <div class="col-md-6 col-lg-3">
        <div class="tb-map--5__card h-100 rounded-4 p-3 text-center" style="background:var(--section-surface); border:1px solid var(--section-border)">
          <div class="tb-map--5__icon mx-auto mb-2 rounded-circle d-flex align-items-center justify-content-center" style="width:48px; height:48px; background:rgba(var(--tb-primary-rgb),0.12); color:var(--tb-primary)">
            <i class="bi bi-geo-alt-fill fs-5"></i>
          </div>
          <h4 class="mb-2" style="font-size:0.85rem; font-weight:700">Dirección</h4>
          <p class="mb-1 small" style="color:var(--section-muted)"><?= esc($data['address'] ?? '') ?></p>
          <?php if (!empty($data['cross_streets'])): ?>
            <p class="mb-0 small" style="color:var(--section-muted); font-size:0.75rem"><?= esc($data['cross_streets']) ?></p>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="tb-map--5__card h-100 rounded-4 p-3 text-center" style="background:var(--section-surface); border:1px solid var(--section-border)">
          <div class="tb-map--5__icon mx-auto mb-2 rounded-circle d-flex align-items-center justify-content-center" style="width:48px; height:48px; background:rgba(var(--tb-primary-rgb),0.12); color:var(--tb-primary)">
            <i class="bi bi-telephone-fill fs-5"></i>
          </div>
          <h4 class="mb-2" style="font-size:0.85rem; font-weight:700">Teléfono</h4>
          <p class="mb-2 small" style="color:var(--section-muted)"><?= esc($data['phone'] ?? '') ?></p>
          <?php if (!empty($data['whatsapp'])): ?>
            <a href="<?= esc($data['whatsapp']) ?>" target="_blank" rel="noopener" class="tb-btn tb-btn--whatsapp btn-sm">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="tb-map--5__card h-100 rounded-4 p-3 text-center" style="background:var(--section-surface); border:1px solid var(--section-border)">
          <div class="tb-map--5__icon mx-auto mb-2 rounded-circle d-flex align-items-center justify-content-center" style="width:48px; height:48px; background:rgba(var(--tb-primary-rgb),0.12); color:var(--tb-primary)">
            <i class="bi bi-clock-fill fs-5"></i>
          </div>
          <h4 class="mb-2" style="font-size:0.85rem; font-weight:700">Horario</h4>
          <?php foreach ($data['hours'] ?? [] as $h): ?>
            <p class="mb-1 small" style="color:var(--section-muted)">
              <span class="fw-600"><?= esc($h['days']) ?></span>: <?= esc($h['time']) ?>
            </p>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="tb-map--5__card h-100 rounded-4 p-3 text-center" style="background:var(--section-surface); border:1px solid var(--section-border)">
          <div class="tb-map--5__icon mx-auto mb-2 rounded-circle d-flex align-items-center justify-content-center" style="width:48px; height:48px; background:rgba(var(--tb-primary-rgb),0.12); color:var(--tb-primary)">
            <i class="bi bi-envelope-fill fs-5"></i>
          </div>
          <h4 class="mb-2" style="font-size:0.85rem; font-weight:700">Correo</h4>
          <p class="mb-0 small" style="color:var(--section-muted)"><?= esc($data['email'] ?? '') ?></p>
        </div>
      </div>
    </div>
  </div>
</section>