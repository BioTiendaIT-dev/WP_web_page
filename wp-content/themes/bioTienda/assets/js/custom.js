(function ($) {
  $(document).ready(function () {
    $(".bt-slider").slick();

  });
  
  let subTiendaMenu = $("li.sub-tienda > ul.sub-menu");
  

  $('.sub-tienda').hover(
    function () {
      subTiendaMenu.addClass("!block");
    },
    function () {
      subTiendaMenu.removeClass("!block");
    }
  );
  


})(jQuery);
