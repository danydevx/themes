<?php /* === PACKAGES2 STEP CARDS WITH VISUAL HIERARCHY === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'paquetes') ?>" class="tb-section tb-packages--2 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">

    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php $pkgs = $data['packages'] ?? []; if (!empty($pkgs)): ?>
    <!-- Step navigation -->
    <div class="tb-packages--2__steps d-flex justify-content-center gap-3 gap-md-4 mb-5 flex-wrap">
      <?php foreach ($pkgs as $i => $pkg): ?>
        <button class="tb-packages--2__step d-flex align-items-center gap-2 rounded-pill px-4 py-2 fw-semibold transition-all"
                onclick="showPackage(<?= $i ?>)"
                id="step-<?= $i ?>"
                style="background:var(--section-surface); border:1.5px solid var(--section-border); color:var(--section-text)">
          <span class="d-flex align-items-center justify-content-center rounded-circle fw-bold"
                style="width:28px; height:28px; background:var(--tb-primary); color:#fff; font-size:0.85rem">
            <?= $i + 1 ?>
          </span>
          <span class="d-none d-sm-inline"><?= esc($pkg['name'] ?? ('Paquete ' . ($i + 1))) ?></span>
          <?php if (!empty($pkg['badge'])): ?>
            <span class="d-none d-md-inline badge rounded-pill px-2 py-0 small" style="background:rgba(var(--tb-primary-rgb),0.15); color:var(--tb-primary)">
              <?= esc($pkg['badge']) ?>
            </span>
          <?php endif; ?>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Package cards -->
    <?php foreach ($pkgs as $i => $pkg): ?>
      <div class="tb-packages--2__card row align-items-center g-0 rounded-4 overflow-hidden mb-4 p-4 p-lg-5"
           id="package-<?= $i ?>"
           style="background:var(--section-surface); border:1px solid var(--section-border)">
        <?php if (!empty($pkg['highlight'])): ?>
          <span class="position-absolute top-0 end-0 px-3 py-1 rounded-bottom-start rounded-top-end fw-bold small"
                style="background:var(--tb-primary); color:#fff; font-size:0.72rem; letter-spacing:.06em; text-transform:uppercase">
            <?= esc($pkg['highlight']) ?>
          </span>
        <?php endif; ?>

        <!-- Left: pricing + CTA -->
        <div class="col-lg-4 mb-4 mb-lg-0 pe-lg-4">
          <div class="text-center text-lg-start">
            <h3 class="fw-bold mb-1" style="font-family:var(--tb-heading-font); font-size:1.4rem; color:var(--heading-color)">
              <?= esc($pkg['name'] ?? ('Paquete ' . ($i + 1))) ?>
            </h3>
            <?php if (!empty($pkg['tagline'])): ?>
              <p class="small mb-3" style="color:var(--section-muted)"><?= esc($pkg['tagline']) ?></p>
            <?php endif; ?>

            <div class="mb-3">
              <span class="fw-bold" style="font-size:2.5rem; color:var(--tb-primary)"><?= esc($pkg['price'] ?? '') ?></span>
              <span class="small ms-1" style="color:var(--section-muted)">MXN</span>
            </div>

            <p class="small mb-0" style="color:var(--section-muted)">
              <i class="bi bi-people-fill me-1" style="color:var(--tb-primary)"></i>
              <?= esc($pkg['capacity'] ?? 'Hasta 50 personas') ?>
            </p>

            <?php if (!empty($pkg['duration'])): ?>
              <p class="small mb-0" style="color:var(--section-muted)">
                <i class="bi bi-clock me-1" style="color:var(--tb-primary)"></i>
                <?= esc($pkg['duration']) ?>
              </p>
            <?php endif; ?>

            <?php if (!empty($pkg['extras_gratis'])): ?>
              <div class="rounded-3 p-3 mt-3" style="background:rgba(var(--tb-primary-rgb),0.08); border:1px solid rgba(var(--tb-primary-rgb),0.15)">
                <p class="fw-bold small mb-2" style="color:var(--tb-primary)"><i class="bi bi-gift-fill me-1"></i> EXTRAS INCLUIDOS</p>
                <?php foreach (array_slice($pkg['extras_gratis'], 0, 3) as $ex): ?>
                  <p class="small mb-1" style="color:var(--section-text)"><i class="bi bi-check2 me-1" style="color:var(--tb-primary)"></i> <?= esc($ex) ?></p>
                <?php endforeach; ?>
                <?php if (count($pkg['extras_gratis']) > 3): ?>
                  <p class="small mb-0" style="color:var(--section-muted)">+ <?= count($pkg['extras_gratis']) - 3 ?> más</p>
                <?php endif; ?>
              </div>
            <?php endif; ?>

            <?php if (!empty($pkg['cta'])): ?>
              <a class="tb-btn tb-btn--primary w-100 mt-3" href="<?= esc($pkg['cta']['href'] ?? '#') ?>" <?= !empty($pkg['cta']['target']) ? 'target="_blank" rel="noopener"' : '' ?>>
                <?= esc($pkg['cta']['label'] ?? 'Reservar') ?>
                <i class="bi bi-arrow-right ms-1"></i>
              </a>
            <?php endif; ?>
          </div>
        </div>

        <!-- Right: sections detail -->
        <div class="col-lg-8">
          <div class="row g-3">
            <?php foreach ($pkg['sections'] ?? [] as $sec): ?>
              <div class="<?= esc($sec['col'] ?? 'col-md-6') ?>">
                <div class="rounded-3 p-3 h-100" style="background:var(--tb-bg); border:1px solid var(--section-border)">
                  <h5 class="fw-bold mb-2 small d-flex align-items-center gap-2" style="color:var(--tb-primary); text-transform:uppercase; letter-spacing:.05em">
                    <?php if (!empty($sec['icon'])): ?>
                      <span class="d-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width:28px; height:28px; background:var(--tb-primary); color:#fff">
                        <i class="bi <?= esc($sec['icon']) ?>"></i>
                      </span>
                    <?php endif; ?>
                    <?= esc($sec['title'] ?? '') ?>
                  </h5>
                  <?php foreach ($sec['items'] ?? [] as $item): ?>
                    <p class="small mb-1" style="color:var(--section-text); line-height:1.5">
                      <i class="bi bi-check2 text-success me-1 small"></i> <?= esc($item) ?>
                    </p>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    <?php if (!empty($data['note'])): ?>
      <p class="text-center mt-4 small" style="color:var(--section-muted)"><?= esc($data['note']) ?></p>
    <?php endif; ?>

  <?php endif; ?>
  </div>
</section>

<style>
.tb-packages--2__card { display: none; }
.tb-packages--2__card.is-visible { display: flex !important; }
</style>

<script>
(function() {
  window.showPackage = function(index) {
    var cards = document.querySelectorAll('.tb-packages--2__card');
    var steps = document.querySelectorAll('.tb-packages--2__step');

    cards.forEach(function(card, i) {
      if (i === index) {
        card.classList.add('is-visible');
      } else {
        card.classList.remove('is-visible');
      }
    });

    steps.forEach(function(btn, i) {
      if (i === index) {
        btn.style.background = 'var(--tb-primary)';
        btn.style.color = '#fff';
        btn.style.borderColor = 'var(--tb-primary)';
        var circle = btn.querySelector('span:first-child');
        if (circle) { circle.style.background = '#fff'; circle.style.color = 'var(--tb-primary)'; }
      } else {
        btn.style.background = 'var(--section-surface)';
        btn.style.color = 'var(--section-text)';
        btn.style.borderColor = 'var(--section-border)';
        var circle = btn.querySelector('span:first-child');
        if (circle) { circle.style.background = 'var(--tb-primary)'; circle.style.color = '#fff'; }
      }
    });
  };

  // Show first package after DOM ready
  document.addEventListener('DOMContentLoaded', function() {
    showPackage(0);
  });
})();
</script>