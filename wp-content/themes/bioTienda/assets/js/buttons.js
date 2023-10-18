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
  const toggleSearchButton = (searchbar, classesToToggle) => {
    let searchBarClasses = searchbar.classList;
    const input = searchbar.querySelector("input#search");
    const animTime = 350;
    const changeState = new Promise((resolve) => {
      if (searchBarClasses.contains("hidden")) {
        searchBarClasses.toggle(["hidden"]);
        resolve("showing");
      } else {
        searchBarClasses.remove(...classesToToggle);
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
            searchBarClasses.add(...classesToToggle);
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
  };
  // --------------------------------- Searchbuton desktop and mobile
  const doSearchButton = () => {
    const btn = document.querySelector("#desktop_search.search-btn");
    const btnMobile = document.querySelector("#search_mobile.search-btn");
    const searchBarMobile = document.querySelector("#searchbar-mobile");
    const searchbar = document.querySelector("#searchbar-conteiner");
    let classes;

    btn.addEventListener("click", (e) => {
      classes = ["!translate-y-24", "!opacity-100"];
      toggleSearchButton(searchbar, classes);
    });
    btnMobile.addEventListener("click", (e) => {
      // console.log(searchBarMobile);
      // classes = ["translate-y-0", "!opacity-100"];
      classes = ["!opacity-100", "!-translate-y-8"];
      toggleSearchButton(searchBarMobile, classes);

      // toggleSearchButton(searchBarMobile);
    });
  };

  doSearchButton();
});
