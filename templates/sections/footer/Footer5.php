<?php /* === FOOTER COMPACTO BARRA === */ ?>
<footer class="scheme-dark" style="padding:2rem 0; border-top:1px solid var(--section-border); background:var(--section-bg); color:var(--section-text)">
  <div class="container">
    <div class="row align-items-center g-3">
      <div class="col-md-4 text-center text-md-start">
        <?php if (!empty($data['logo'])): ?>
          <span class="fs-6" style="font-family:var(--tb-heading-font); font-weight:700; color:var(--tb-primary)">
            <?php if (!empty($data['logo_icon'])): ?><i class="bi <?= esc($data['logo_icon']) ?> me-1"></i><?php endif; ?>
            <?= esc($data['logo']) ?>
          </span>
        <?php endif; ?>
      </div>
      <div class="col-md-4 text-center small" style="color:var(--section-muted)">
        <?= esc($data['copyright'] ?? '&copy; 2026 Todos los derechos reservados.') ?>
      </div>
      <div class="col-md-4">
        <div class="d-flex justify-content-center justify-content-md-end gap-3">
          <?php foreach ($data['social'] ?? [] as $s): ?>
            <a href="<?= esc($s['href'] ?? '#') ?>" <?= !empty($s['target']) ? 'target="_blank" rel="noopener"' : '' ?> aria-label="<?= esc($s['label'] ?? '') ?>"
               class="fs-5" style="color:var(--section-muted); transition:color .3s ease;"
               onmouseover="this.style.color='var(--tb-primary)'"
               onmouseout="this.style.color='var(--section-muted)'">
              <i class="bi <?= esc($s['icon'] ?? '') ?>"></i>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</footer>
