<?php /* === SPECS: capacidad + reglas + anfitrión === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'info') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="row g-4">

      <!-- Capacidad -->
      <div class="col-md-4">
        <div class="rounded-4 p-4 h-100 text-center" style="background:var(--section-surface); border:1px solid var(--section-border)">
          <i class="bi bi-people-fill display-4 d-block mb-3" style="color:var(--tb-primary)"></i>
          <div class="display-5 fw-bold" style="color:var(--tb-primary)"><?= esc($data['capacity'] ?? '40') ?></div>
          <p class="small" style="color:var(--section-muted)"><?= esc($data['capacity_label'] ?? 'personas máximo') ?></p>
          <?php if (!empty($data['city'])): ?>
            <div class="mt-3 pt-3 border-top small" style="border-color:var(--section-border) !important">
              <i class="bi bi-geo-alt-fill me-1" style="color:var(--tb-primary)"></i>
              <?= esc($data['city']) ?><?= !empty($data['colony']) ? ', ' . esc($data['colony']) : '' ?>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <!-- Reglas -->
      <div class="col-md-5">
        <div class="rounded-4 p-4 h-100" style="background:var(--section-surface); border:1px solid var(--section-border)">
          <h4 style="font-family:var(--tb-heading-font)"><i class="bi bi-info-circle-fill me-2" style="color:var(--tb-primary)"></i><?= esc($data['rules_title'] ?? 'Información adicional') ?></h4>
          <ul class="list-unstyled small mb-0">
            <?php foreach ($data['rules'] ?? [] as $rule): ?>
              <li class="mb-2 d-flex gap-2">
                <i class="bi <?= esc($rule['icon'] ?? 'bi-dot') ?> mt-1 flex-shrink-0" style="color:var(--tb-primary)"></i>
                <span style="color:var(--section-muted)"><?= esc($rule['text'] ?? '') ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <!-- Anfitrión -->
      <div class="col-md-3">
        <div class="rounded-4 p-4 h-100 text-center" style="background:var(--section-surface); border:1px solid var(--section-border)">
          <div class="mb-2 fs-4" style="width:64px; height:64px; border-radius:50%; background:var(--tb-primary); color:#fff; display:inline-flex; align-items:center; justify-content:center">
            <i class="bi bi-person-fill"></i>
          </div>
          <p class="small fw-bold mb-0"><?= esc($data['host_name'] ?? 'Anfitrión') ?></p>
          <p class="small" style="color:var(--section-muted)"><?= esc($data['host_label'] ?? '') ?></p>
          <?php if (!empty($data['host_phone'])): ?>
            <a class="tb-btn tb-btn--whatsapp btn-sm w-100 mt-2" href="<?= esc($data['host_phone_link'] ?? '#') ?>" target="_blank" rel="noopener">
              <i class="bi bi-telephone-fill"></i> <?= esc($data['host_phone']) ?>
            </a>
          <?php endif; ?>
          <?php if (!empty($data['show_hours'])): ?>
            <p class="small mt-2 mb-0" style="color:var(--section-muted)">
              <i class="bi bi-eye-fill me-1" style="color:var(--tb-primary)"></i>
              <?= esc($data['show_hours']) ?>
            </p>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>
</section>
