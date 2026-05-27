/* ═══════════════════════════════════════
   Terraza Analco — Main JS
   Premium luxury: Swiper galleries + testimonials + GLightbox
   ═══════════════════════════════════════ */

document.addEventListener('DOMContentLoaded', function () {

  /* ── AOS Animations ── */
  AOS.init({
    duration: 700,
    once: true,
    offset: 80
  });

  /* ── Header scroll shadow ── */
  var header = document.querySelector('.tb-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 20);
    });
  }

  /* ── Gallery Swiper ── */
  var gallerySwiper = document.querySelector('.tb-gallery__swiper');
  if (gallerySwiper) {
    new Swiper('.tb-gallery__swiper', {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      }
    });
  }

  /* ── GLightbox — Gallery1 ── */
  var lightboxEls = document.querySelectorAll('.tb-gallery-lightbox');
  if (lightboxEls.length) {
    GLightbox({
      selector: '.tb-gallery-lightbox',
      touchNavigation: true,
      loop: false
    });
  }

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
