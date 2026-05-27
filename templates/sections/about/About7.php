<?php /* === ABOUT7 HORIZONTAL STATS POOL === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'nosotros') ?>" class="tb-section tb-about--7 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <!-- Horizontal stats bar -->
    <?php if (!empty($data['stats'])): ?>
      <div class="tb-about--7__stats-row d-flex flex-wrap justify-content-center gap-5 mb-5 pb-5 border-bottom" style="border-color:var(--section-border)!important">
        <?php foreach ($data['stats'] as $stat): ?>
          <div class="tb-about--7__stat text-center">
            <div class="tb-about--7__stat-number" style="color:var(--tb-primary); font-size:2.5rem; font-weight:700; font-family:var(--tb-heading-font)">
              <?= esc($stat['number'] ?? '') ?>
              <?php if (!empty($stat['unit'])): ?><span class="small" style="color:var(--section-muted)"><?= esc($stat['unit']) ?></span><?php endif; ?>
            </div>
            <div class="small fw-600" style="color:var(--section-muted); text-transform:uppercase; letter-spacing:0.08em"><?= esc($stat['label'] ?? '') ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <div class="row g-5 align-items-center">
      <!-- Image -->
      <?php if (!empty($data['img'])): ?>
        <div class="col-lg-6">
          <div class="position-relative">
            <img src="<?= esc($data['img']) ?>" alt="<?= esc($data['img_alt'] ?: 'Imagen') ?>" class="tb-about--7__img img-fluid rounded-4 w-100" loading="lazy">
            <?php if (!empty($data['img_badge'])): ?>
              <div class="position-absolute bottom-0 start-0 m-3">
                <span class="badge" style="background:var(--tb-primary); color:#fff; font-size:0.75rem; padding:0.4rem 0.8rem; border-radius:20px">
                  <?= esc($data['img_badge']) ?>
                </span>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- Features -->
      <div class="col-lg-6">
        <div class="row g-4">
          <?php foreach (array_slice($data['features'] ?? [], 0, 4) as $f): ?>
            <div class="col-sm-6">
              <div class="tb-about--7__feature-card p-4 rounded-4 h-100" style="background:var(--section-surface); border:1px solid var(--section-border)">
                <div class="d-flex align-items-start gap-3">
                  <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:44px; height:44px; background:rgba(var(--tb-primary-rgb),0.12); color:var(--tb-primary)">
                    <i class="bi <?= esc($f['icon'] ?? 'bi-check') ?> fs-5"></i>
                  </div>
                  <div>
                    <h4 class="mb-2" style="font-size:1rem; font-weight:700"><?= esc($f['title'] ?? '') ?></h4>
                    <p class="mb-0 small" style="color:var(--section-muted); line-height:1.5"><?= esc($f['text'] ?? '') ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <?php if (!empty($data['cta'])): ?>
          <div class="mt-4">
            <a href="<?= esc($data['cta']['href'] ?? '#') ?>" class="tb-btn tb-btn--primary">
              <?= esc($data['cta']['label'] ?? 'Ver más') ?>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>