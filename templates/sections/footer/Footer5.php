<?php /* === FOOTER COMPACTO BARRA === */ ?>
<?php $d = section_defaults($data); ?>
<footer class="tb-footer tb-footer--5 <?= esc($d['scheme']) ?>">
  <div class="container">
    <div class="row align-items-center g-3">
      <div class="col-md-4 text-center text-md-start">
        <?php if (!empty($d['logo'])): ?>
          <span class="tb-footer--5__logo fs-6">
            <?php if (!empty($d['logo_icon'])): ?><i class="bi <?= esc($d['logo_icon']) ?> me-1"></i><?php endif; ?>
            <?= esc($d['logo']) ?>
          </span>
        <?php endif; ?>
      </div>
      <div class="tb-footer--5__copy col-md-4 text-center small">
        <?= esc($d['copyright'] ?? '&copy; 2026 Todos los derechos reservados.') ?>
      </div>
      <div class="col-md-4">
        <div class="tb-footer--5__social d-flex justify-content-center justify-content-md-end gap-3">
          <?php foreach ($d['social'] ?? [] as $s): ?>
            <a href="<?= esc($s['href'] ?? '#') ?>" <?= !empty($s['target']) ? 'target="_blank" rel="noopener"' : '' ?> aria-label="<?= esc($s['label'] ?? '') ?>"
               class="fs-5">
              <i class="bi <?= esc($s['icon'] ?? '') ?>"></i>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</footer>
