// Obtener el ancho de la pantalla
var screenWidth =
  window.innerWidth ||
  document.documentElement.clientWidth ||
  document.body.clientWidth;

// Definir un ancho límite para dispositivos móviles (por ejemplo, 768 píxeles)
var mobileWidth = 768;
function disableSwiper() {
  // console.log("desctivando swiper");
  if (screenWidth <= mobileWidth) swiper.disable();
}
function enableSwiper() {
  // console.log('activando swiper');
  if (screenWidth <= mobileWidth) swiper.enable();
}
const driftImgs = document.querySelectorAll(".drift-img");
driftImgs.forEach((img) => {
  img.addEventListener("touchStart", (e) => {
    e.preventDefault();
  });
  const dr = new Drift(img, {
    inlinePane: true,
    inlineOffsetX: 0,
    inlineOffsetY: -120,
    onShow: disableSwiper,
    onHide: enableSwiper,
    hoverDelay: 1,
    touchDelay: 500,
  });
  console.log(dr);
});
