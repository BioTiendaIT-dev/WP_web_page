// Espera a que se cargue el documento
jQuery(document).ready(function ($) {
  // Almacena el método original para llamarlo más adelante
  $.fn.wc_variations_image_update_original = $.fn.wc_variations_image_update;
  const swiperInstance = swiper;
  const thumbSwiperInstance = thumbSwiper;
  // Extiende o modifica el método wc_variations_image_update
  $.fn.wc_variations_image_update = function (variation) {
    // Agrega tu lógica personalizada aquí
    var $form = this,
      $product = $form.closest(".product"),
      $product_gallery = $product.find(".images"),
      $gallery_nav = $product.find(".flex-control-nav"),
      $gallery_img = $gallery_nav.find("li:eq(0) img"),
      $product_img_wrap = $product_gallery
        .find(
          ".woocommerce-product-gallery__image, .woocommerce-product-gallery__image--placeholder"
        )
        .eq(0),
      $product_img = $product_img_wrap.find(".wp-post-image"),
      $product_link = $product_img_wrap.find("a").eq(0);

    if (
      variation &&
      variation.image &&
      variation.image.src &&
      variation.image.src.length > 1
    ) {
      const variationSrc = variation.image.src;
      swiperInstance.slides.forEach((slide) => {
        const picture = slide.querySelector("picture");
        const img = picture.querySelector("img");
        const slideSrc = img.getAttribute("src");
        if (variationSrc === slideSrc) {
          const indexToSlide = slide.getAttribute("data-swiper-slide-index");
          swiperInstance.slideTo(indexToSlide);
          return;
        }
      });
    } else {
      $form.wc_variations_image_reset();
    }
  };
});
