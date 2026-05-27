<?php /* === FOOTER 3 COLUMNAS CON NEWSLETTER === */ ?>
<footer class="tb-footer scheme-dark">
  <div class="container">
    <div class="row g-4">
      <!-- Logo + desc -->
      <div class="col-lg-4">
        <?php if (!empty($data['logo'])): ?>
          <div class="tb-footer__logo">
            <?php if (!empty($data['logo_icon'])): ?><i class="bi <?= esc($data['logo_icon']) ?>"></i><?php endif; ?>
            <?= esc($data['logo']) ?>
          </div>
        <?php endif; ?>
        <p class="tb-footer__desc"><?= esc($data['desc'] ?? '') ?></p>
        <div class="tb-footer__social mt-3">
          <?php foreach ($data['social'] ?? [] as $s): ?>
            <a href="<?= esc($s['href'] ?? '#') ?>" <?= !empty($s['target']) ? 'target="_blank" rel="noopener"' : '' ?> aria-label="<?= esc($s['label'] ?? '') ?>">
              <i class="bi <?= esc($s['icon'] ?? '') ?>"></i>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Links -->
      <div class="col-6 col-lg-3">
        <h5 class="tb-footer__heading"><?= esc($data['links_heading'] ?? 'Enlaces') ?></h5>
        <ul class="tb-footer__links">
          <?php foreach ($data['links'] ?? [] as $link): ?>
            <li><a href="<?= esc($link['href'] ?? '#') ?>"><?= esc($link['label'] ?? '') ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Newsletter + contacto -->
      <div class="col-lg-5">
        <?php if (!empty($data['newsletter'])): ?>
          <h5 class="tb-footer__heading"><?= esc($data['newsletter']['heading'] ?? 'Reciba ofertas') ?></h5>
          <p class="small" style="color:var(--section-muted)"><?= esc($data['newsletter']['text'] ?? '') ?></p>
          <form class="d-flex gap-2 mb-3">
            <input type="email" class="form-control form-control-sm" placeholder="<?= esc($data['newsletter']['placeholder'] ?? 'Su email') ?>" style="border-radius:var(--tb-radius-sm)">
            <button type="submit" class="tb-btn tb-btn--primary btn-sm flex-shrink-0"><?= esc($data['newsletter']['btn'] ?? 'Enviar') ?></button>
          </form>
        <?php endif; ?>
        <div class="d-flex flex-column gap-1 small" style="color:var(--section-muted)">
          <?php foreach ($data['contact_items'] ?? [] as $ci): ?>
            <div class="d-flex align-items-center gap-2">
              <?php if (!empty($ci['icon'])): ?><i class="bi <?= esc($ci['icon']) ?>" style="color:var(--tb-primary)"></i><?php endif; ?>
              <?= esc($ci['text'] ?? '') ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="tb-footer__bottom">
      <?= esc($data['copyright'] ?? '&copy; 2026 Todos los derechos reservados.') ?>
    </div>
  </div>
</footer>
