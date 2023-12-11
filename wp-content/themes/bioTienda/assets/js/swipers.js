const thumbSwiper = new Swiper(".swiper-thumbnails", {
  slidesPerView: 5,
  spaceBetween: 16, 
});
// init Swiper:
const swiper = new Swiper(".swiper", {
  loop: true,
  autoHeight: true,
  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  thumbs: {
    swiper: thumbSwiper,
  }
});

const frontSwiper = new Swiper(".bt-slider", {
  pagination: {
    el: ".front-swiper-pagination",
  },
  // Navigation arrows
  navigation: {
    nextEl: ".front-swiper-button-next",
    prevEl: ".front-swiper-button-prev",
  },
});
console.log(frontSwiper);