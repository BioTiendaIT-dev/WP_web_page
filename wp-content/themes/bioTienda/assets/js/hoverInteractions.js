window.onload = (event) => {
  let greenDarkColor = "#086175";
  console.log("page loaded");
  let hoverIcons = document.querySelectorAll(".hoverIconBt");
  let changeColor = (iconImage) => {
    // Encuentra el elemento SVG dentro de la imagen
    // var svg = iconImage.querySelector("svg");
    // console.log(svg);
    // Cambia el valor del atributo 'fill' en el elemento SVG
    // var paths = svg.querySelectorAll("path");
    // for (var i = 0; i < paths.length; i++) {
    //   paths[i].setAttribute("fill", greenDarkColor);
    // }
  };
  hoverIcons.forEach((containerIcon) => {
    let iconImage = containerIcon.querySelector("img");
    // Espera a que la imagen se cargue
    iconImage.addEventListener("load", changeColor(iconImage));
  });
};
