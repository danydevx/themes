/* ═══════════════════════════════════════
   Terraza Alrio — Main JS
   Dark Luxury Commercial · Zapopan
   ═══════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', function () {

  /* ── AOS Animations ── */
  AOS.init({
    duration: 700,
    once: true,
    offset: 80
  });

  /* ── Header scroll shadow (Header2) ── */
  var header = document.querySelector('.tb-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 20);
    });
  }

  /* ── GLightbox para galería ── */
  GLightbox({
    selector: '.tb-gallery-lightbox',
    touchNavigation: true,
    loop: false
  });

});
