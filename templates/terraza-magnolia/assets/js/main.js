/* ═══════════════════════════════════════
   Terraza Magnolia — Main JS
   Solo inicializa las librerías que este template usa.
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

  /* ── Gallery Thumbnails Swiper ── */
  var thumbsEl = document.querySelector('.tb-gallery__thumbs');
  if (thumbsEl) {
    var thumbsSwiper = new Swiper('.tb-gallery__thumbs', {
      slidesPerView: 'auto',
      spaceBetween: 8,
      freeMode: true,
      watchSlidesProgress: true
    });

    /* ── Gallery Main Swiper ── */
    new Swiper('.tb-gallery__main', {
      navigation: {
        nextEl: '.tb-gallery__nav.swiper-button-next',
        prevEl: '.tb-gallery__nav.swiper-button-prev'
      },
      thumbs: {
        swiper: thumbsSwiper
      }
    });

    /* ── GLightbox ── */
    GLightbox({
      selector: '.tb-gallery__lightbox',
      touchNavigation: true,
      loop: false
    });
  }

  /* ── Testimonials Swiper (si existe) ── */
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
