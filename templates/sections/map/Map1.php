<?php /* === MAP === */ ?>
<?php $d = section_defaults($data); ?>
<section class="tb-section tb-map <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <iframe
          class="tb-map__frame"
          src="<?= esc($data['map_src'] ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14929.052536526394!2d-103.409631!3d20.653916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428add9a9232fe3%3A0x4cf3ee4e3f8b5c6a!2sZapopan%2C%20Jal.!5e0!3m2!1ses!2smx!4v1700000000000') ?>"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          title="<?= esc($data['map_title'] ?? 'Ubicación') ?>">
        </iframe>
      </div>
    </div>
  </div>
</section>
