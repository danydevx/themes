document.addEventListener('DOMContentLoaded', function () {
  AOS.init({ duration: 800, once: true, offset: 80 });

  /* Header scroll */
  var header = document.querySelector('.tb-header');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 40);
    });
  }

  /* Swiper: testimonials */
  var testimonialSwiper = document.querySelector('.tb-testimonials__swiper');
  if (testimonialSwiper) {
    new Swiper(testimonialSwiper, {
      slidesPerView: 1, spaceBetween: 24, loop: true, autoplay: { delay: 5000, disableOnInteraction: false },
      pagination: { el: '.tb-testimonials__pagination', clickable: true }
    });
  }

  /* Swiper: gallery */
  var mainSwiperEl = document.querySelector('.tb-gallery__main');
  var thumbSwiperEl = document.querySelector('.tb-gallery__thumbs');
  if (mainSwiperEl && thumbSwiperEl) {
    var thumbs = new Swiper(thumbSwiperEl, {
      slidesPerView: 'auto', spaceBetween: 8, freeMode: true, watchSlidesProgress: true
    });
    new Swiper(mainSwiperEl, {
      navigation: {
        nextEl: '.tb-gallery__nav.swiper-button-next',
        prevEl: '.tb-gallery__nav.swiper-button-prev'
      },
      thumbs: { swiper: thumbs }
    });
    GLightbox({ selector: '.glightbox-magnolia' });
  }
});
