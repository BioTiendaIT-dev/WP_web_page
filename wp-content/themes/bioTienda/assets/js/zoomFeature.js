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
const dr = new Drift(img, {
    inlinePane: true,
    inlineOffsetX: 0,
    inlineOffsetY: -100,
    onShow: disableSwiper,
    onHide: enableSwiper,
    touchDelay: 450,
  });
  console.log(dr);
});