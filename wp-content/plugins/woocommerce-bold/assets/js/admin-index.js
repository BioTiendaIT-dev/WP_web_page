jQuery(document).ready(function () {
  jQuery("body").on("focus", ".bold_co_input_access_key", function () {
    jQuery(this).attr("type", "text");
  });
  jQuery("body").on("blur", ".bold_co_input_access_key", function () {
    jQuery(this).attr("type", "password");
  });
});
