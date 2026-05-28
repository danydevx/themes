<?php /* === GALLERY JUSTIFIED GRID === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'galeria') ?>" class="tb-section tb-gallery tb-gallery--3 <?= esc($d['scheme']) ?>"<?= anim_attrs($d) ?>>
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row g-2">
      <?php
      $rows = [
        [3, 4, 5],
        [4, 4, 4],
        [6, 6],
        [3, 3, 3, 3],
      ];
      $imgIdx = 0;
      $allImages = $d['images'] ?? [];
      $total = count($allImages);
      foreach ($rows as $row):
        $remaining = $total - $imgIdx;
        if ($remaining <= 0) break;
        $colsForRow = min(count($row), $remaining);
      ?>
        <?php for ($c = 0; $c < $colsForRow; $c++, $imgIdx++): $img = $allImages[$imgIdx]; ?>
          <div class="col-sm-<?= $row[$c] ?>">
            <a class="tb-gallery--3__grid-item tb-gallery-lightbox d-block"
               href="<?= esc($img['full'] ?? placeholder('1200x900', '2c2416', 'c06c84', $img['alt'] ?? '')) ?>">
              <img src="<?= esc($img['thumb'] ?? placeholder('600x600', '2c2416', 'c06c84', $img['alt'] ?? '')) ?>"
                   alt="<?= esc($img['alt'] ?? '') ?>" loading="lazy" class="tb-gallery--3__image">
            </a>
          </div>
        <?php endfor; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
