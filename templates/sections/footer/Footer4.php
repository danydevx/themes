<?php /* === FOOTER SPLIT: columnas arriba + barra full-width abajo === */ ?>
<footer class="scheme-dark" style="padding:4rem 0 0; border-top:1px solid var(--section-border); background:var(--section-bg); color:var(--section-text)">
  <div class="container">
    <div class="row g-4 pb-4">

      <?php $cols = $data['columns'] ?? []; ?>
      <?php foreach ($cols as $col): ?>
        <div class="<?= esc($col['col'] ?? 'col-md-3') ?>">
          <h5 class="tb-footer__heading"><?= esc($col['heading'] ?? '') ?></h5>
          <?php if (!empty($col['text'])): ?>
            <p class="small" style="color:var(--section-muted)"><?= nl2br(esc($col['text'])) ?></p>
          <?php endif; ?>
          <?php if (!empty($col['links'])): ?>
            <ul class="list-unstyled mb-0 small">
              <?php foreach ($col['links'] as $link): ?>
                <li class="mb-1"><a href="<?= esc($link['href'] ?? '#') ?>" style="color:var(--section-muted)"><?= esc($link['label'] ?? '') ?></a></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <?php if (!empty($col['social'])): ?>
            <div class="d-flex gap-2 mt-2">
              <?php foreach ($col['social'] as $s): ?>
                <a href="<?= esc($s['href'] ?? '#') ?>" <?= !empty($s['target']) ? 'target="_blank" rel="noopener"' : '' ?> aria-label="<?= esc($s['label'] ?? '') ?>"
                   class="fs-6" style="width:36px; height:36px; border-radius:50%; display:inline-flex; align-items:center; justify-content:center; background:rgba(255,255,255,0.08); color:var(--section-muted); transition:all .3s ease;"
                   onmouseover="this.style.background='var(--tb-primary)'; this.style.color='#fff'"
                   onmouseout="this.style.background='rgba(255,255,255,0.08)'; this.style.color='var(--section-muted)'">
                  <i class="bi <?= esc($s['icon'] ?? '') ?>"></i>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>

    </div>
  </div>

  <!-- barra inferior full-width -->
  <div style="background:var(--section-surface); border-top:1px solid var(--section-border); padding:1rem 0;">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center small" style="color:var(--section-muted)">
      <span><?= esc($data['copyright'] ?? '&copy; 2026 Todos los derechos reservados.') ?></span>
      <?php if (!empty($data['bottom_links'])): ?>
        <div class="d-flex gap-3 mt-2 mt-md-0">
          <?php foreach ($data['bottom_links'] as $bl): ?>
            <a href="<?= esc($bl['href'] ?? '#') ?>" class="text-decoration-none" style="color:var(--section-muted)"><?= esc($bl['label'] ?? '') ?></a>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</footer>
