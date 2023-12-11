(function ($) {
  // ------------------------- Slider ----------------------- //
  $(document).ready(function () {
    //------- Pagina de producto
    $('.single_variation').on('show_variation', function(event, variation) {
      const pricesVariable = document.getElementById("variable_price");
      const classes = pricesVariable.classList;
      pricesVariable.classList.add("opacity-40",'!text-lg');
      pricesVariable.classList.remove("text-2xl");
    })
  });

  // ------------------------- Asesorias tab ----------------------- //
  const tabs = document.querySelectorAll("[data-tab-target]");
  const tabContents = document.querySelectorAll("[data-tab-content]");

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      const target = document.querySelector(tab.dataset.tabTarget);
      console.log(target);
      tabs.forEach((tab) => {
        tab.classList.remove("active-tab");
      });
      tabContents.forEach((cont) => {
        cont.classList.remove("active-content");
      });
      tab.classList.add("active-tab");
      target.classList.add("active-content");
    });
  });
})(jQuery);

function decrement(e) {
  const btn = e.target.parentNode.parentElement.querySelector(
    'button[data-action="decrement"]'
  );
  const target = btn.nextElementSibling.querySelector("input");
  let value = Number(target.value);
  value--;
  target.value = value;
}

function increment(e) {
  e.preventDefault();
  const btn = e.target.parentNode.parentElement.querySelector(
    'button[data-action="decrement"]'
  );
  const target = btn.nextElementSibling.querySelector("input");
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