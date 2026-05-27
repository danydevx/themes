<?php /* === AVAILABILITY === */ ?>
<?php $d = section_defaults($data); ?>
<section id="<?= esc($d['id'] ?: 'disponibilidad') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?><?= bg_style($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="tb-availability__grid">
      <?php foreach ($data['dates'] ?? [] as $date): ?>
        <?php $status = $date['status'] ?? 'available'; ?>
        <div class="tb-availability__date tb-availability__date--<?= esc($status) ?>">
          <span class="tb-availability__date__day"><?= esc($date['day'] ?? '') ?></span>
          <?= esc($date['label'] ?? '') ?>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="tb-availability__legend mb-4">
      <span><span class="tb-availability__dot tb-availability__dot--available"></span> Disponible</span>
      <span><span class="tb-availability__dot tb-availability__dot--reserved"></span> Apartada</span>
      <span><span class="tb-availability__dot tb-availability__dot--taken"></span> No disponible</span>
    </div>

    <div class="text-center">
      <a class="tb-btn tb-btn--whatsapp tb-btn--lg"
         href="<?= esc($data['wa_link'] ?? wa_link('Hola, me gustaría consultar disponibilidad para una fecha en ' . ($data['brand'] ?? 'Terraza Balcones') . '.')) ?>"
         target="_blank" rel="noopener">
        <i class="bi bi-whatsapp"></i> <?= esc($data['wa_label'] ?? 'Consultar esta fecha por WhatsApp') ?>
      </a>
    </div>
  </div>
</section>
