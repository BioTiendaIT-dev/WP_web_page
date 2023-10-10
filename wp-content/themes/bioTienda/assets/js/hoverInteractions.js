window.onload = (event) => {
  console.log("page loaded");
  let hoverIcons = document.querySelectorAll(".hoverIconBt");
  hoverIcons.forEach((containerIcon) => {
    let iconImage = containerIcon.querySelector("img");
    
    // iconImage.setAttribute('src',color);
    // Espera a que la imagen se cargue
    containerIcon.addEventListener("mouseenter", (e) => {
      let urlImage = iconImage.getAttribute("src");
      let nuevoSufijo = "_dark";
      // Verificar si la cadena original contiene el sufijo
      if (urlImage.endsWith(".svg") && !urlImage.includes('_dark')) {
        // Reemplazar el sufijo .svg con el nuevo sufijo
        let nuevaCadena = urlImage.replace(".svg", nuevoSufijo + ".svg");
        iconImage.setAttribute("src", nuevaCadena);
      }
    });

    containerIcon.addEventListener("mouseleave", (e) => {
      let urlImage = iconImage.getAttribute("src");
      // Definir el sufijo que deseas agregar
      // Verificar si la cadena original contiene el sufijo
      if (urlImage.includes("_dark")) {
        let nuevaCadena = urlImage.replaceAll("_dark", "");
        // Reemplazar el sufijo .svg con el nuevo sufijo
        iconImage.setAttribute("src", nuevaCadena);
      }
    });
  });
};
