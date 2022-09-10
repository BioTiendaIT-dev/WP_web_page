(function ($) {
  // ------------------------- Slider ----------------------- //
  $(document).ready(function () {
    $(".bt-slider").slick();
  });

  // ------------------------- Hover effect ----------------------- //
  let subTiendaMenu = $("li.sub-tienda > ul.sub-menu");
  $(".sub-tienda").hover(
    function () {
      subTiendaMenu.addClass("!block");
    },
    function () {
      subTiendaMenu.removeClass("!block");
    }
  );
  let showMenu = false;

  // ------------------------- Asesorias tab ----------------------- //
  const tabs = document.querySelectorAll("[data-tab-target]");
  const tabContents = document.querySelectorAll("[data-tab-content]");

  tabs.forEach(tab => {
    tab.addEventListener('click',() => {
      const target = document.querySelector(tab.dataset.tabTarget);
      tabs.forEach(tab => {
        tab.classList.remove("active-tab");
      })
      tabContents.forEach((cont) => {
        cont.classList.remove("active-content");
      });
      tab.classList.add('active-tab');
      target.classList.add('active-content');
    });

  });

  // ------------------------- Mobile menu burguer ----------------------- //
  $("#mobile-burguer").click(function () {
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
})(jQuery);
