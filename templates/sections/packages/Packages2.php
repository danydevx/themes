<?php /* === PACKAGES2 STEP CARDS WITH VISUAL HIERARCHY === */ ?>
<?php $d = section_defaults($data); ?>
<?php $pkgs = $d['packages'] ?? []; ?>

<section id="<?= esc($d['id'] ?: 'paquetes') ?>" class="tb-section tb-packages--2 <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?><?= bg_style($d) ?>>
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php if (!empty($pkgs)): ?>
      <div class="tb-packages--2__layout row g-4 align-items-start">
        <div class="col-lg-4">
          <aside class="tb-packages--2__rail">
            <p class="tb-packages--2__rail-title mb-3">Seleccione un paquete</p>
            <div class="tb-packages--2__steps nav nav-pills d-grid gap-2" role="tablist" aria-label="Selector de paquetes">
              <?php foreach ($pkgs as $i => $pkg): ?>
                <button
                  id="pkg2-step-<?= $i ?>"
                  class="tb-packages--2__step d-flex align-items-center gap-2 rounded-3 px-3 py-2 fw-semibold transition-all <?= $i === 0 ? 'active is-active' : '' ?>"
                  type="button"
                  role="tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pkg2-pane-<?= $i ?>"
                  aria-controls="pkg2-pane-<?= $i ?>"
                  aria-selected="<?= $i === 0 ? 'true' : 'false' ?>">
                  <span class="tb-packages--2__step-num d-flex align-items-center justify-content-center rounded-circle fw-bold"><?= $i + 1 ?></span>
                  <span class="tb-packages--2__step-name"><?= esc($pkg['name'] ?? ('Paquete ' . ($i + 1))) ?></span>
                  <?php if (!empty($pkg['badge'])): ?>
                    <span class="tb-packages--2__step-badge badge rounded-pill px-2 py-0 small ms-auto"><?= esc($pkg['badge']) ?></span>
                  <?php endif; ?>
                </button>
              <?php endforeach; ?>
            </div>
          </aside>
        </div>

        <div class="col-lg-8">
          <div class="tab-content tb-packages--2__content">
            <?php foreach ($pkgs as $i => $pkg): ?>
              <div
                id="pkg2-pane-<?= $i ?>"
                class="tab-pane fade <?= $i === 0 ? 'show active' : '' ?>"
                role="tabpanel"
                aria-labelledby="pkg2-step-<?= $i ?>">

                <article class="tb-packages--2__card rounded-4 overflow-hidden p-4 p-lg-5">
                  <?php if (!empty($pkg['highlight'])): ?>
                    <span class="tb-packages--2__highlight position-absolute top-0 end-0 px-3 py-1 rounded-bottom-start rounded-top-end fw-bold small">
                      <?= esc($pkg['highlight']) ?>
                    </span>
                  <?php endif; ?>

                  <div class="row g-4 align-items-start">
                    <div class="col-lg-4">
                      <h3 class="tb-packages--2__title fw-bold mb-1"><?= esc($pkg['name'] ?? ('Paquete ' . ($i + 1))) ?></h3>
                      <?php if (!empty($pkg['tagline'])): ?>
                        <p class="tb-packages--2__tagline small mb-3"><?= esc($pkg['tagline']) ?></p>
                      <?php endif; ?>

                      <div class="mb-3">
                        <span class="tb-packages--2__price fw-bold"><?= esc($pkg['price'] ?? '') ?></span>
                        <span class="tb-packages--2__currency small ms-1">MXN</span>
                      </div>

                      <p class="tb-packages--2__meta small mb-0"><i class="tb-packages--2__meta-icon bi bi-people-fill me-1"></i><?= esc($pkg['capacity'] ?? 'Hasta 50 personas') ?></p>
                      <?php if (!empty($pkg['duration'])): ?>
                        <p class="tb-packages--2__meta small mb-0"><i class="tb-packages--2__meta-icon bi bi-clock me-1"></i><?= esc($pkg['duration']) ?></p>
                      <?php endif; ?>

                      <?php if (!empty($pkg['extras_gratis'])): ?>
                        <div class="tb-packages--2__extras rounded-3 p-3 mt-3">
                          <p class="tb-packages--2__extras-title fw-bold small mb-2"><i class="bi bi-gift-fill me-1"></i> EXTRAS INCLUIDOS</p>
                          <?php foreach (array_slice($pkg['extras_gratis'], 0, 3) as $ex): ?>
                            <p class="tb-packages--2__extras-item small mb-1"><i class="tb-packages--2__extras-check bi bi-check2 me-1"></i><?= esc($ex) ?></p>
                          <?php endforeach; ?>
                          <?php if (count($pkg['extras_gratis']) > 3): ?>
                            <p class="tb-packages--2__extras-more small mb-0">+ <?= count($pkg['extras_gratis']) - 3 ?> más</p>
                          <?php endif; ?>
                        </div>
                      <?php endif; ?>

                      <?php if (!empty($pkg['cta'])): ?>
                        <a class="tb-btn tb-btn--primary w-100 mt-3" href="<?= esc($pkg['cta']['href'] ?? '#') ?>" <?= !empty($pkg['cta']['target']) ? 'target="_blank" rel="noopener"' : '' ?>>
                          <?= esc($pkg['cta']['label'] ?? 'Reservar') ?> <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                      <?php endif; ?>
                    </div>

                    <div class="col-lg-8">
                      <div class="row g-3">
                        <?php foreach ($pkg['sections'] ?? [] as $sec): ?>
                          <div class="<?= esc($sec['col'] ?? 'col-md-6') ?>">
                            <div class="tb-packages--2__detail rounded-3 p-3 h-100">
                              <h5 class="tb-packages--2__detail-title fw-bold mb-2 small d-flex align-items-center gap-2">
                                <?php if (!empty($sec['icon'])): ?>
                                  <span class="tb-packages--2__detail-icon d-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                    <i class="bi <?= esc($sec['icon']) ?>"></i>
                                  </span>
                                <?php endif; ?>
                                <?= esc($sec['title'] ?? '') ?>
                              </h5>
                              <?php foreach ($sec['items'] ?? [] as $item): ?>
                                <p class="tb-packages--2__detail-item small mb-1"><i class="tb-packages--2__detail-check bi bi-check2 me-1 small"></i><?= esc($item) ?></p>
                              <?php endforeach; ?>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <?php if (!empty($d['note'])): ?>
        <p class="tb-packages--2__note text-center mt-4 small"><?= esc($d['note']) ?></p>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</section>
