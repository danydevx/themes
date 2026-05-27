<?php /* === FOOTER CENTERED MINIMAL === */ ?>
<?php $d = section_defaults($data); ?>
<?php $footerScheme = !empty($d['scheme']) ? $d['scheme'] : 'scheme-dark'; ?>
<footer class="tb-footer <?= esc($footerScheme) ?>">
  <div class="container text-center">
    <?php if (!empty($data['logo'])): ?>
      <div class="tb-footer__logo justify-content-center d-flex align-items-center gap-2 mb-2">
        <?php if (!empty($data['logo_icon'])): ?><i class="bi <?= esc($data['logo_icon']) ?>"></i><?php endif; ?>
        <?= esc($data['logo']) ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($data['desc'])): ?>
      <p class="tb-footer__desc tb-footer__desc--narrow mx-auto"><?= esc($data['desc']) ?></p>
    <?php endif; ?>

    <?php if (!empty($data['links'])): ?>
      <div class="d-flex justify-content-center flex-wrap gap-3 mb-3">
        <?php foreach ($data['links'] as $link): ?>
          <a href="<?= esc($link['href'] ?? '#') ?>" class="tb-footer__link fs-6"><?= esc($link['label'] ?? '') ?></a>
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
      <p class="tb-footer__contact-line small"><?= esc($data['contact_line']) ?></p>
    <?php endif; ?>

    <div class="tb-footer__bottom tb-footer__bottom--flat mt-0 pt-3">
      <?= esc($data['copyright'] ?? '&copy; 2026 Todos los derechos reservados.') ?>
    </div>
  </div>
</footer>
