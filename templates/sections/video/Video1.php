<?php /* === VIDEO EMBED === */ ?>
<?php $d = section_defaults($data); ?>
<?php
$videoUrl  = $data['video_url'] ?? 'https://lorem.video/720p';
$videoType = $data['video_type'] ?? 'html5'; // html5 | youtube | vimeo
$poster    = $data['poster'] ?? placeholder('1280x720', '2c2416', 'b87c4c', 'Video+del+espacio');
?>
<section id="<?= esc($d['id'] ?: 'video') ?>" class="tb-section <?= esc($d['scheme']) ?> <?= anim_attrs($d) ?>">
  <div class="container">
    <div class="tb-section__header">
      <?php if ($d['label']): ?><span class="tb-section__label"><?= esc($d['label']) ?></span><?php endif; ?>
      <?php if ($d['title']): ?><h2 class="tb-section__title"><?= esc($d['title']) ?></h2><?php endif; ?>
      <?php if ($d['subtitle']): ?><p class="tb-section__subtitle"><?= esc($d['subtitle']) ?></p><?php endif; ?>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="rounded-4 overflow-hidden shadow-lg" style="background:#000;">

          <?php if ($videoType === 'html5'): ?>
            <video controls playsinline
                   poster="<?= esc($poster) ?>"
                   preload="metadata"
                   style="width:100%; aspect-ratio:16/9; display:block;">
              <source src="<?= esc($videoUrl) ?>" type="video/mp4">
              Su navegador no soporta la reproducción de video.
            </video>

          <?php elseif ($videoType === 'youtube'): ?>
            <?php
              preg_match('/[?&]v=([^&]+)/', $videoUrl, $m);
              $ytId = $m[1] ?? '';
            ?>
            <iframe
              src="https://www.youtube-nocookie.com/embed/<?= esc($ytId) ?>?rel=0&modestbranding=1"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen
              referrerpolicy="strict-origin-when-cross-origin"
              style="width:100%; aspect-ratio:16/9; border:0;">
            </iframe>

          <?php elseif ($videoType === 'vimeo'): ?>
            <?php
              $vimeoId = basename(parse_url($videoUrl, PHP_URL_PATH));
            ?>
            <iframe
              src="https://player.vimeo.com/video/<?= esc($vimeoId) ?>?title=0&byline=0&portrait=0"
              allow="autoplay; fullscreen; picture-in-picture"
              allowfullscreen
              style="width:100%; aspect-ratio:16/9; border:0;">
            </iframe>

          <?php else: ?>
            <div class="d-flex align-items-center justify-content-center" style="aspect-ratio:16/9; background:var(--section-surface);">
              <p style="color:var(--section-muted)">Video no disponible</p>
            </div>
          <?php endif; ?>

        </div>

        <?php if (!empty($data['caption'])): ?>
          <p class="text-center mt-3 small" style="color:var(--section-muted)"><?= esc($data['caption']) ?></p>
        <?php endif; ?>
      </div>
    </div>

    <?php if (!empty($data['cta'])): ?>
      <div class="text-center mt-4">
        <a class="tb-btn tb-btn--primary" href="<?= esc($data['cta']['href'] ?? '#') ?>">
          <i class="bi bi-calendar-check"></i> <?= esc($data['cta']['label'] ?? 'Agendar visita') ?>
        </a>
      </div>
    <?php endif; ?>
  </div>
</section>
