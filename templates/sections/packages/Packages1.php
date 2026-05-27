<?php /* === PAQUETES CON TABS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'paquetes') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php $pkgs = $data['packages'] ?? []; if (!empty($pkgs)): ?>
      <!-- Tab nav -->
      <ul class="nav nav-pills justify-content-center gap-2 mb-4 flex-wrap" id="pkgTabs" role="tablist">
        <?php $active = true; foreach ($pkgs as $i => $pkg): ?>
          <li class="nav-item" role="presentation">
            <button class="nav-link fw-semibold px-4 py-2 rounded-pill <?= $active ? 'active' : '' ?>"
                    id="pkg-tab-<?= $i ?>" data-bs-toggle="tab" data-bs-target="#pkg-<?= $i ?>"
                    type="button" role="tab" aria-controls="pkg-<?= $i ?>"
                    aria-selected="<?= $active ? 'true' : 'false' ?>"
                    class="fs-6" style=" $active ? 'background:var(--tb-primary); border-color:var(--tb-primary);' : 'color:var(--section-text); border-color:var(--section-border);' ?>">
              <?= esc($pkg['tab_label'] ?? ('Paquete ' . ($i + 1))) ?>
              <span class="d-block small fw-normal opacity-75"><?= esc($pkg['capacity'] ?? '') ?></span>
            </button>
          </li>
          <?php $active = false; ?>
        <?php endforeach; ?>
      </ul>

      <!-- Tab content -->
      <div class="tab-content">
        <?php $active = true; foreach ($pkgs as $i => $pkg): ?>
          <div class="tab-pane fade <?= $active ? 'show active' : '' ?>" id="pkg-<?= $i ?>" role="tabpanel" aria-labelledby="pkg-tab-<?= $i ?>">
            <div class="row g-4">
              <!-- Info + precio -->
              <div class="col-lg-5">
                <div class="rounded-4 p-4 p-lg-5 h-100" style="background:var(--section-surface); border:1px solid var(--section-border)">
                  <h3 class="fw-bold mb-0 fs-4" style="font-family:var(--tb-heading-font)"><?= esc($pkg['name'] ?? 'Paquete ' . ($i + 1)) ?></h3>
                  <p class="small" style="color:var(--section-muted)"><?= esc($pkg['capacity'] ?? '') ?></p>
                  <div class="my-3">
                    <span class="fw-bold" class="tb-fs-price"><?= esc($pkg['price'] ?? '') ?></span>
                    <span class="small ms-1" style="color:var(--section-muted)">MXN</span>
                  </div>

                  <?php if (!empty($pkg['extras_gratis'])): ?>
                    <div class="rounded-3 p-3 mb-3" style="background:rgba(var(--tb-primary-rgb),0.08)">
                      <p class="fw-bold small mb-2" style="color:var(--tb-primary)"><i class="bi bi-gift-fill me-1"></i> EXTRAS SIN COSTO</p>
                      <?php foreach ($pkg['extras_gratis'] as $ex): ?>
                        <p class="small mb-1" style="color:var(--section-text)"><i class="bi bi-check-circle-fill me-1" style="color:var(--tb-primary)"></i> <?= esc($ex) ?></p>
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
                      <div class="rounded-3 p-3 h-100" style="background:var(--section-surface); border:1px solid var(--section-border)">
                        <h5 class="fw-bold mb-2 small" style="color:var(--tb-primary); text-transform:uppercase; letter-spacing:.05em">
                          <?php if (!empty($sec['icon'])): ?><i class="bi <?= esc($sec['icon']) ?> me-1"></i><?php endif; ?>
                          <?= esc($sec['title'] ?? '') ?>
                        </h5>
                        <?php foreach ($sec['items'] ?? [] as $item): ?>
                          <p class="small mb-1" style="color:var(--section-muted); line-height:1.5"><?= esc($item) ?></p>
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
