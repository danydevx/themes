/* ═══════════════════════════════════════
   Terraza Valle — Main JS
   Campestre · Cajititlán · Lago de Chapala
   ═══════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', function () {

  /* ── AOS Animations ── */
  AOS.init({
    duration: 700,
    once: true,
    offset: 80
  });

  /* ── Header scroll shadow (Header3) ── */
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

  /* ── Testimonials Swiper ── */
  var testimonialEl = document.querySelector('.tb-testimonials__swiper');
  if (testimonialEl) {
    new Swiper('.tb-testimonials__swiper', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      pagination: {
        el: '.tb-testimonials__pagination',
        clickable: true
      }
    });
  }

});
