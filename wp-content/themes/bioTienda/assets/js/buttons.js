window.addEventListener("DOMContentLoaded", (ev) => {
  console.log("loaded from butoons");
  const $ = jQuery;

  let showMenu = false;
  // ------------------------- Mobile menu burguer ----------------------- //
  let menu = $("#mobile-menu");
  document.querySelector("#mobile-burguer").addEventListener("click", (e) => {
    // let menu = document.querySelector("#mobile-menu");
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
    let buton = document.querySelector("#search_mobile.search-btn");
    let sideBarContent = document.querySelector("#side-bar-content");
    let hideBar = true;
    const input = sideBarContent.querySelector("input#search");
    buton.addEventListener("click", (e) => {
      sideBarContent.classList.toggle("bottom-0", hideBar);
      document.querySelector("#side-bar-content h3").classList.toggle("pt-10");
      sideBarContent.classList.toggle("-bottom-[80%]", !hideBar);
      hideBar = !hideBar;
    });
  } catch (error) {
    console.error(error + ' this error is catched');
  }
  // ---------------------------------------- SearchbuttonMobile
  const show = (input) => {
    input.focus();
  };
  const toggleSearchButton = (searchbar, classesToToggle) => {
    let searchBarClasses = searchbar.classList;
    const input = searchbar.querySelector("input#search");
    const animTime = 350;
    const changeState = new Promise((resolve) => {
      console.log(classesToToggle);
      if (classesToToggle == "") {
        resolve("showing");
      }
      if (searchBarClasses.contains("hidden")) {
        searchBarClasses.toggle(["hidden"]);
        resolve("showing");
      } else {
        try {
          searchBarClasses.remove(...classesToToggle);
        } catch (error) {}
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
            show(input);
            try {
              searchBarClasses.add(...classesToToggle);
            } catch (error) {}
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
    let searchbar = document.querySelector("#searchbar-conteiner");
    // const btnMobile = document.querySelector("#search_mobile.search-btn");
    // const searchBarMobile = document.querySelector("#searchbar-mobile");
    let classes;
    let sidebarCategories = document.querySelector("#side_col_categories");
    btn.addEventListener("click", (e) => {
      if (sidebarCategories !== null && !sidebarCategories.classList.contains('lg:hidden')) {
        searchbar = document.querySelector(
          "#seach_page_search_bar.searchbar_container"
        );
        classes = "";
      } else {
        classes = ["!translate-y-24", "!opacity-100"];
      }
      toggleSearchButton(searchbar, classes);
    });
    // btnMobile.addEventListener("click", (e) => {
    //   // console.log(searchBarMobile);
    //   // classes = ["translate-y-0", "!opacity-100"];
    //   classes = ["!opacity-100", "!-translate-y-8"];
    //   toggleSearchButton(searchBarMobile, classes);

    //   // toggleSearchButton(searchBarMobile);
    // });
  };

  // boton de preguntas frecuentes
  function btnCardFaqs(){
    try {
      const cardContainer = document.getElementById("faq_card_container");
      const cards = cardContainer.querySelectorAll(".card_container");
      cards.forEach(card => {
        const btn = card.querySelector(".card_btn");
        const answer = card.querySelector(".faq_answer");
        const iconBtn = btn.querySelector("iconify-icon");

        btn.addEventListener('click', (e)=> {
          answer.classList.toggle("hidden");
          answer.classList.contains("hidden")
            ? iconBtn.setAttribute("icon", "typcn:plus")
            : iconBtn.setAttribute("icon", "typcn:minus");
        });
      });
      
    } catch (error) {
      console.error(error + ' this error is catched');
    }
  }
  btnCardFaqs();
  doSearchButton();
});
