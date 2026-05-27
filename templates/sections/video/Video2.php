<?php /* === VIDEO MODAL TRIGGER WITH THUMBNAIL === */ ?>
<?php $d = section_defaults($data); ?>
<?php
$videoUrl  = $data['video_url'] ?? 'https://lorem.video/720p';
$videoType = $data['video_type'] ?? 'html5';
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
      <div class="col-lg-8">
        <div id="videoModalTrigger" class="rounded-4 overflow-hidden position-relative cursor-pointer" role="button" tabindex="0"
             style="aspect-ratio:16/9; cursor:pointer; box-shadow:var(--tb-shadow-md)"
             onclick="openVideoModal()"
             onkeydown="if(event.key==='Enter'||event.key===' '){event.preventDefault();openVideoModal()}">
          <img src="<?= esc($poster) ?>"
               alt="<?= esc($data['poster_alt'] ?? 'Ver video del espacio') ?>"
               class="w-100 h-100" style="object-fit:cover" loading="lazy">
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center"
               style="background:rgba(0,0,0,0.3); transition:background .3s">
            <div class="d-flex align-items-center justify-content-center rounded-circle bg-white"
                 style="width:80px; height:80px; box-shadow:0 8px 32px rgba(0,0,0,.3)">
              <i class="bi bi-play-fill fs-1" style="color:var(--tb-primary); margin-left:4px"></i>
            </div>
          </div>
          <?php if (!empty($data['duration'])): ?>
            <span class="position-absolute bottom-0 end-0 m-3 px-2 py-1 rounded text-white small"
                  style="background:rgba(0,0,0,0.7)"><?= esc($data['duration']) ?></span>
          <?php endif; ?>
        </div>

        <div id="videoModal" class="position-fixed top-0 start-0 w-100 h-100 d-none align-items-center justify-content-center"
             style="z-index:99999; background:rgba(0,0,0,0.92); backdrop-filter:blur(8px)"
             onclick="closeVideoModal(event)">
          <div class="position-relative" style="width:90vw; max-width:960px" onclick="event.stopPropagation()">
            <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-0"
                    style="transform:translate(50%,-50%); width:40px; height:40px; border-radius:50%; background-color:rgba(0,0,0,.7); opacity:1; z-index:2"
                    onclick="closeVideoModal()" aria-label="Cerrar video"></button>
            <?php if ($videoType === 'html5'): ?>
              <video id="modalVideo" controls playsinline preload="metadata"
                     style="width:100%; aspect-ratio:16/9; display:block; border-radius:12px; overflow:hidden">
                <source src="<?= esc($videoUrl) ?>" type="video/mp4">
              </video>
            <?php elseif ($videoType === 'youtube'): ?>
              <?php preg_match('/[?&]v=([^&]+)/', $videoUrl, $m); $ytId = $m[1] ?? ''; ?>
              <div style="position:relative; padding-bottom:56.25%; height:0">
                <iframe id="modalYtFrame"
                  style="position:absolute; top:0; left:0; width:100%; height:100%; border:0; border-radius:12px"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen
                  referrerpolicy="strict-origin-when-cross-origin">
                </iframe>
              </div>
            <?php elseif ($videoType === 'vimeo'): ?>
              <?php $vimeoId = basename(parse_url($videoUrl, PHP_URL_PATH)); ?>
              <div style="position:relative; padding-bottom:56.25%; height:0">
                <iframe id="modalVimeoFrame"
                  style="position:absolute; top:0; left:0; width:100%; height:100%; border:0; border-radius:12px"
                  allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
                </iframe>
              </div>
            <?php endif; ?>
          </div>
        </div>

        <?php if (!empty($data['caption'])): ?>
          <p class="text-center mt-3 small" style="color:var(--section-muted)"><?= esc($data['caption']) ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<script>
(function(){
  var vType = <?= json_encode($videoType) ?>;
  var vUrl  = <?= json_encode($videoUrl) ?>;
  var ytId  = <?= json_encode($ytId ?? '') ?>;
  var vimeoId = <?= json_encode($vimeoId ?? '') ?>;

  window.openVideoModal = function(){
    var modal = document.getElementById('videoModal');
    modal.classList.remove('d-none');
    modal.classList.add('d-flex');
    document.body.style.overflow = 'hidden';

    if (vType === 'youtube' || vType === 'vimeo') {
      var frameId = vType === 'youtube' ? 'modalYtFrame' : 'modalVimeoFrame';
      var frame = document.getElementById(frameId);
      if (frame && !frame.src) {
        frame.src = vType === 'youtube'
          ? 'https://www.youtube-nocookie.com/embed/' + ytId + '?rel=0&modestbranding=1&autoplay=1'
          : 'https://player.vimeo.com/video/' + vimeoId + '?title=0&byline=0&portrait=0&autoplay=1';
      }
    }
  };

  window.closeVideoModal = function(e){
    if (e && e.target !== document.getElementById('videoModal')) return;
    var modal = document.getElementById('videoModal');
    modal.classList.add('d-none');
    modal.classList.remove('d-flex');
    document.body.style.overflow = '';

    var vid = document.getElementById('modalVideo');
    if (vid) { vid.pause(); vid.currentTime = 0; }

    var ytFrame = document.getElementById('modalYtFrame');
    if (ytFrame) ytFrame.src = '';

    var vimeoFrame = document.getElementById('modalVimeoFrame');
    if (vimeoFrame) vimeoFrame.src = '';
  };

  document.addEventListener('keydown', function(e){
    if (e.key === 'Escape') closeVideoModal();
  });
})();
</script>
