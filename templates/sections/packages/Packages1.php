<?php /* === PAQUETES CON TABS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'paquetes') ?>" class="tb-section tb-packages tb-packages--1 <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?><?= bg_style($d) ?>>
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php $pkgs = $d['packages'] ?? []; if (!empty($pkgs)): ?>
      <!-- Tab nav -->
      <ul class="tb-packages--1__tabs d-flex justify-content-center gap-2 mb-4 flex-wrap" id="pkgTabs" role="tablist">
        <?php $active = true; foreach ($pkgs as $i => $pkg): ?>
          <li class="tb-packages--1__tab-item" role="presentation">
            <button class="tb-packages--1__tab tb-packages__tab fw-semibold px-4 py-2 rounded-pill <?= $active ? 'active' : '' ?>"
                    id="pkg-tab-<?= $i ?>" data-bs-toggle="tab" data-bs-target="#pkg-<?= $i ?>"
                    type="button" role="tab" aria-controls="pkg-<?= $i ?>"
                    aria-selected="<?= $active ? 'true' : 'false' ?>">
              <?= esc($pkg['tab_label'] ?? ('Paquete ' . ($i + 1))) ?>
              <span class="d-block small fw-normal opacity-75"><?= esc($pkg['capacity'] ?? '') ?></span>
            </button>
          </li>
          <?php $active = false; ?>
        <?php endforeach; ?>
      </ul>

      <!-- Tab content -->
      <div class="tb-packages--1__content tab-content">
        <?php $active = true; foreach ($pkgs as $i => $pkg): ?>
          <div class="tb-packages--1__pane tab-pane fade <?= $active ? 'show active' : '' ?>" id="pkg-<?= $i ?>" role="tabpanel" aria-labelledby="pkg-tab-<?= $i ?>">
            <div class="row g-4">
              <!-- Info + precio -->
              <div class="col-lg-5">
                <div class="tb-packages--1__summary rounded-4 p-4 p-lg-5 h-100">
                  <h3 class="tb-packages__name fw-bold mb-0 fs-4"><?= esc($pkg['name'] ?? 'Paquete ' . ($i + 1)) ?></h3>
                  <p class="tb-packages--1__capacity small"><?= esc($pkg['capacity'] ?? '') ?></p>
                  <div class="my-3">
                    <span class="tb-packages__price fw-bold"><?= esc($pkg['price'] ?? '') ?></span>
                    <span class="tb-packages--1__currency small ms-1">MXN</span>
                  </div>

                  <?php if (!empty($pkg['extras_gratis'])): ?>
                    <div class="tb-packages__extras rounded-3 p-3 mb-3">
                      <p class="tb-packages--1__extras-title fw-bold small mb-2"><i class="bi bi-gift-fill me-1"></i> EXTRAS SIN COSTO</p>
                      <?php foreach ($pkg['extras_gratis'] as $ex): ?>
                        <p class="tb-packages__extras-item small mb-1"><i class="tb-packages--1__check bi bi-check-circle-fill me-1"></i> <?= esc($ex) ?></p>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>

                  <?php if (!empty($pkg['cta'])): ?>
                    <a class="tb-btn tb-btn--primary w-100 mt-2" href="<?= esc($pkg['cta']['href'] ?? '#') ?>" <?= !empty($pkg['cta']['target']) ? 'target="_blank" rel="noopener"' : '' ?>>
                      <?= esc($pkg['cta']['label'] ?? 'Reservar') ?>
                    </a>
                  <?php endif; ?>
                </div>
              </div>

              <!-- Detalles -->
              <div class="col-lg-7">
                <div class="row g-3">
                  <?php foreach ($pkg['sections'] ?? [] as $sec): ?>
                    <div class="<?= esc($sec['col'] ?? 'col-md-6') ?>">
                      <div class="tb-packages--1__detail rounded-3 p-3 h-100">
                        <h5 class="tb-packages__section-title fw-bold mb-2 small">
                          <?php if (!empty($sec['icon'])): ?><i class="bi <?= esc($sec['icon']) ?> me-1"></i><?php endif; ?>
                          <?= esc($sec['title'] ?? '') ?>
                        </h5>
                        <?php foreach ($sec['items'] ?? [] as $item): ?>
                          <p class="tb-packages__section-item small mb-1"><?= esc($item) ?></p>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          <?php $active = false; ?>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
