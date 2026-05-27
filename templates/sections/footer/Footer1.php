<?php /* === FOOTER === */ ?>
<footer class="tb-footer scheme-dark">
  <div class="container">
    <div class="row g-4">

      <!-- Brand -->
      <div class="<?= esc($data['brand_col'] ?? 'col-md-5') ?>">
        <?php if (!empty($data['logo'])): ?>
          <div class="tb-footer__logo">
            <?php if (!empty($data['logo_icon'])): ?><i class="bi <?= esc($data['logo_icon']) ?>"></i><?php endif; ?>
            <?= esc($data['logo']) ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($data['desc'])): ?>
          <p class="tb-footer__desc"><?= esc($data['desc']) ?></p>
        <?php endif; ?>
        <div class="tb-footer__social mt-3">
          <?php foreach ($data['social'] ?? [] as $s): ?>
            <a href="<?= esc($s['href'] ?? '#') ?>" <?= !empty($s['target']) ? 'target="_blank" rel="noopener"' : '' ?>
               aria-label="<?= esc($s['label'] ?? '') ?>">
              <i class="bi <?= esc($s['icon'] ?? '') ?>"></i>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Link columns -->
      <?php foreach ($data['columns'] ?? [] as $col): ?>
        <div class="<?= esc($col['col'] ?? 'col-6 col-md-2') ?>">
          <h5 class="tb-footer__heading"><?= esc($col['heading'] ?? '') ?></h5>
          <ul class="tb-footer__links">
            <?php foreach ($col['links'] ?? [] as $link): ?>
              <li><a href="<?= esc($link['href'] ?? '#') ?>"><?= esc($link['label'] ?? '') ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php endforeach; ?>

      <!-- Contact column -->
      <?php if (!empty($data['contact'])): ?>
        <div class="<?= esc($data['contact_col'] ?? 'col-md-3') ?>">
          <h5 class="tb-footer__heading"><?= esc($data['contact']['heading'] ?? 'Contacto') ?></h5>
          <?php foreach ($data['contact']['items'] ?? [] as $ci): ?>
            <div class="tb-footer__contact-item">
              <?php if (!empty($ci['icon'])): ?>
                <i class="bi <?= esc($ci['icon']) ?>"></i>
              <?php endif; ?>
              <span><?= $ci['text'] ?? '' /* permite HTML para <br> */ ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

    </div>

    <div class="tb-footer__bottom">
      <?= esc($data['copyright'] ?? '&copy; 2026 Terraza Balcones. Todos los derechos reservados.') ?>
    </div>
  </div>
</footer>
