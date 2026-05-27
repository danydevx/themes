<?php /* === FOOTER CENTERED MINIMAL === */ ?>
<footer class="tb-footer scheme-dark">
  <div class="container text-center">
    <?php if (!empty($data['logo'])): ?>
      <div class="tb-footer__logo justify-content-center d-flex align-items-center gap-2 mb-2">
        <?php if (!empty($data['logo_icon'])): ?><i class="bi <?= esc($data['logo_icon']) ?>"></i><?php endif; ?>
        <?= esc($data['logo']) ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($data['desc'])): ?>
      <p class="tb-footer__desc mx-auto" style="max-width:420px"><?= esc($data['desc']) ?></p>
    <?php endif; ?>

    <?php if (!empty($data['links'])): ?>
      <div class="d-flex justify-content-center flex-wrap gap-3 mb-3">
        <?php foreach ($data['links'] as $link): ?>
          <a href="<?= esc($link['href'] ?? '#') ?>" class="fs-6" style="color:var(--section-muted)"><?= esc($link['label'] ?? '') ?></a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($data['social'])): ?>
      <div class="tb-footer__social justify-content-center mb-3">
        <?php foreach ($data['social'] as $s): ?>
          <a href="<?= esc($s['href'] ?? '#') ?>" <?= !empty($s['target']) ? 'target="_blank" rel="noopener"' : '' ?> aria-label="<?= esc($s['label'] ?? '') ?>">
            <i class="bi <?= esc($s['icon'] ?? '') ?>"></i>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($data['contact_line'])): ?>
      <p class="small" style="color:var(--section-muted)"><?= esc($data['contact_line']) ?></p>
    <?php endif; ?>

    <div class="tb-footer__bottom mt-0 pt-3" style="border-top:none">
      <?= esc($data['copyright'] ?? '&copy; 2026 Todos los derechos reservados.') ?>
    </div>
  </div>
</footer>
