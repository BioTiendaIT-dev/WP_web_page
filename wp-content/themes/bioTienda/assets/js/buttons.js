window.addEventListener("load", (ev) => {
  const $ = jQuery;
  console.log("loaded from butoons");

  let showMenu = false;
  // ------------------------- Mobile menu burguer ----------------------- //
  document.querySelector("#mobile-burguer").addEventListener("click", (e) => {
    // let menu = document.querySelector("#mobile-menu");
    let menu = $("#mobile-menu");

    if (!showMenu) {
      menu.slideDown();
      menu.addClass("!flex");
    } else {
      menu.slideUp("slow", function () {
        menu.removeClass("!flex");
      });
    }
    showMenu = !showMenu;
  });

  // ---------------------------------- Filter button mobile ------------ //
  try {
    let buton = document.querySelector("#filter-col-button");
    console.log(buton);
    console.log("-----------------------------------");
    if (buton === null) {
      buton = document.querySelector("#search_mobile.search-btn");
      console.log(buton);
    }
    let sideBarContent = document.querySelector("#side-bar-content");
    let hideBar = true;
    buton.addEventListener("click", (e) => {
      sideBarContent.classList.toggle("bottom-0", hideBar);
      document.querySelector("#side-bar-content h3").classList.toggle("pt-10");
      sideBarContent.classList.toggle("-bottom-[63%]", !hideBar);
      hideBar = !hideBar;
    });
  } catch (error) {
    console.error(error);
  }
  // ---------------------------------------- SearchbuttonMobile
  try {
  } catch (error) {
    console.error(error);
  }
  // --------------------------------- Searchbuton desktop
  const doSearchButton = () => {
    const btn = document.querySelector("#search-btn");
    const searchbar = document.querySelector("#searchbar-conteiner");
    const input = searchbar.querySelector("input#search");

    let searchBarClasses = searchbar.classList;
    const animTime = 350;
    btn.addEventListener("click", (e) => {
      const changeState = new Promise((resolve) => {
        if (searchBarClasses.contains("hidden")) {
          searchBarClasses.toggle(["hidden"]);
          resolve("showing");
        } else {
          searchBarClasses.toggle(["!translate-y-24"]);
          searchBarClasses.toggle(["!opacity-100"]);
          setTimeout(() => {
            resolve("hidding");
            // console.log("desde la promesa");
          }, animTime);
        }
      });
      changeState.then((result) => {
        switch (result) {
          case "showing":
            setTimeout(() => {
              searchBarClasses.toggle(["!translate-y-24"]);
              searchBarClasses.toggle(["!opacity-100"]);
              input.focus();
            }, 10);
            break;
          case "hidding":
            searchBarClasses.toggle(["hidden"]);
            input.blur();
            break;
        }
        console.log("despues de la promesa");
      });
      // searchbar.classList.toggle(['hidden']);
    });
  };

  doSearchButton();
});
