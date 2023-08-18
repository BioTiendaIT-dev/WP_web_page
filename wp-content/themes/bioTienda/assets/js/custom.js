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
  
  // ---------------------------------- Filter button mobile ------------ //
  let buton = $("#filter-col-button");
  let sideBarContent = $("#side-bar-content");
  let hideBar = true;
  buton.click(function(){
    sideBarContent.toggleClass("bottom-0", hideBar);
    $("#side-bar-content h3").toggleClass("pt-10");
    sideBarContent.toggleClass("-bottom-[63%]", !hideBar);
    hideBar = !hideBar;
  });

  // ------------------------- Asesorias tab ----------------------- //
  const tabs = document.querySelectorAll("[data-tab-target]");
  const tabContents = document.querySelectorAll("[data-tab-content]");

  tabs.forEach(tab => {
    tab.addEventListener('click',() => {
      const target = document.querySelector(tab.dataset.tabTarget);
      console.log(target);
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

function decrement(e) {
  const btn = e.target.parentNode.parentElement.querySelector(
    'button[data-action="decrement"]'
  );
  const target = btn.nextElementSibling.querySelector('input');
  let value = Number(target.value);
  value--;
  target.value = value;
}

function increment(e) {
  e.preventDefault();
  const btn = e.target.parentNode.parentElement.querySelector(
    'button[data-action="decrement"]'
  );
  const target = btn.nextElementSibling.querySelector('input');
  let value = Number(target.value);
  value++;
  target.value = value;
}

const decrementButtons = document.querySelectorAll(
  `button[data-action="decrement"]`
);

const incrementButtons = document.querySelectorAll(
  `button[data-action="increment"]`
);

decrementButtons.forEach((btn) => {
  btn.addEventListener("click", decrement);
});

incrementButtons.forEach((btn) => {
  btn.addEventListener("click", increment);
});
