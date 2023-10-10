const thumbSwiper = new Swiper(".swiper-thumbnails", {
  loop:true,
  spaceBetween: 16, 
});
// init Swiper:
const swiper = new Swiper(".swiper", {
  loop: true,
  zoom: true,
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