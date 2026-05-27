<?php /* === SERVICES4 HORIZONTAL CARDS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'servicios') ?>" class="tb-section tb-services--4 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-4">
      <?php $i = 1; foreach ($data['items'] ?? [] as $item): ?>
        <div class="col-md-6 col-lg-4">
          <div class="tb-services--4__card h-100 rounded-4 p-4 d-flex flex-column" style="background:var(--section-surface); border:1px solid var(--section-border); border-left:4px solid var(--tb-primary)">
            <div class="d-flex align-items-center gap-3 mb-3">
              <span class="tb-services--4__num rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:48px; height:48px; background:var(--tb-primary); color:#fff; font-weight:700; font-size:1.1rem">
                <?= $i ?>
              </span>
              <h3 class="mb-0" style="font-size:1.05rem; font-weight:700"><?= esc($item['title'] ?? '') ?></h3>
            </div>
            <p class="mb-0 small" style="color:var(--section-muted); line-height:1.6; flex-grow:1"><?= esc($item['desc'] ?? '') ?></p>
          </div>
        </div>
      <?php $i++; endforeach; ?>
    </div>
  </div>
</section>