<?php /* === TESTIMONIALS7 LARGE QUOTE CARDS === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-testimonials--7 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">

    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <?php $items = $data['items'] ?? []; ?>
    <div class="row g-4">
      <?php foreach ($items as $idx => $t): ?>
        <div class="col-lg-6">
          <div class="tb-testimonials--7__card rounded-4 p-4 p-lg-5 h-100 position-relative" style="background:var(--section-surface); border:1px solid var(--section-border)">
            <!-- Quote mark decorative -->
            <div class="position-absolute top-0 start-0 ms-4 mt-2" style="font-size:5rem; color:var(--tb-primary); opacity:.15; line-height:1; font-family:serif">"</div>

            <!-- Stars -->
            <?php if (!empty($t['stars'])): ?>
              <div class="d-flex gap-1 mb-3">
                <?php for ($s = 0; $s < ($t['stars'] ?? 5); $s++): ?>
                  <i class="bi bi-star-fill" style="color:var(--tb-primary); font-size:0.9rem"></i>
                <?php endfor; ?>
              </div>
            <?php endif; ?>

            <blockquote class="tb-testimonials--7__text mb-4" style="font-size:1.1rem; font-style:italic; line-height:1.7; color:var(--section-text)">
              <?= esc($t['text'] ?? '') ?>
            </blockquote>

            <div class="d-flex align-items-center gap-3 pt-3 border-top" style="border-color:var(--section-border) !important">
              <?php if (!empty($t['avatar'])): ?>
                <img src="<?= esc($t['avatar']) ?>" alt="<?= esc($t['author'] ?? '') ?>" class="rounded-circle" style="width:52px; height:52px; object-fit:cover; border:3px solid var(--tb-primary)">
              <?php else: ?>
                <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width:52px; height:52px; background:var(--tb-primary); color:#fff; font-weight:700; font-size:1.2rem">
                  <?= esc(substr(($t['author'] ?? 'C'), 0, 1)) ?>
                </div>
              <?php endif; ?>
              <div>
                <p class="fw-bold mb-0" style="font-size:0.95rem"><?= esc($t['author'] ?? '') ?></p>
                <?php if (!empty($t['event'])): ?>
                  <p class="mb-0 small" style="color:var(--section-muted)"><?= esc($t['event']) ?></p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>