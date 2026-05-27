<?php /* === TESTIMONIALS8 CAROUSEL WITH PHOTOS === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'resenas') ?>" class="tb-section tb-testimonials--8 <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div id="testimonialsCarousel8" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
      <div class="carousel-inner">
        <?php foreach ($data['items'] ?? [] as $i => $item): ?>
          <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
            <div class="row justify-content-center">
              <div class="col-lg-8 text-center">
                <div class="tb-testimonials--8__card p-5 rounded-4" style="background:var(--section-surface); border:1px solid var(--section-border)">
                  <!-- Stars -->
                  <div class="mb-3">
                    <?php for ($s = 0; $s < ($item['stars'] ?? 5); $s++): ?>
                      <i class="bi bi-star-fill" style="color:var(--tb-primary)"></i>
                    <?php endfor; ?>
                  </div>

                  <!-- Quote -->
                  <blockquote class="mb-4" style="font-size:1.15rem; font-style:italic; line-height:1.7">
                    "<?= esc($item['text'] ?? '') ?>"
                  </blockquote>

                  <!-- Author -->
                  <div class="fw-700 mb-1"><?= esc($item['author'] ?? '') ?></div>
                  <small style="color:var(--section-muted)"><?= esc($item['event'] ?? '') ?></small>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel8" data-bs-slide="prev" style="width:50px">
        <span class="carousel-control-prev-icon rounded-circle" aria-hidden="true" style="background:var(--tb-primary); width:40px; height:40px"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel8" data-bs-slide="next" style="width:50px">
        <span class="carousel-control-next-icon rounded-circle" aria-hidden="true" style="background:var(--tb-primary); width:40px; height:40px"></span>
      </button>
    </div>

    <!-- Indicators -->
    <div class="d-flex justify-content-center gap-2 mt-4">
      <?php foreach ($data['items'] ?? [] as $i => $item): ?>
        <button type="button" data-bs-target="#testimonialsCarousel8" data-bs-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>" aria-current="<?= $i === 0 ? 'true' : '' ?>" style="width:8px; height:8px; border-radius:50%; border:none; background:<?= $i === 0 ? 'var(--tb-primary)' : 'var(--section-border)' ?>"></button>
      <?php endforeach; ?>
    </div>
  </div>
</section>