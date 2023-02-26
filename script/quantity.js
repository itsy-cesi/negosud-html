$(document).on("click", 'a[name="quantity"]', function () {
  if ($(this).attr("action") == "remove") {
    const input = $(this).next();
    input.val(parseInt(input.val()) - (input.val() != 1));
    if ($(this).attr("offcanvas") == "true") {
      addCart($(this).attr("product-id"), input.val());
    }
  } else if ($(this).attr("action") == "add") {
    const input = $(this).prev();
    input.val(parseInt(input.val()) + (input.val() != 255));
    if ($(this).attr("offcanvas") == "true") {
      removeCart($(this).attr("product-id"), input.val());
    }
  } else if ($(this).attr("action") == "delete") {
    const input = $(this).parent().prev().find("input");
    removeCart($(this).attr("product-id"), input.val());
  }
});
$(document).on("blur", 'input[name="quantity"]', function () {
  if (parseInt($(this).val()) < 1) {
    $(this).val(1);
  } else if (parseInt($(this).val()) >= 255) {
    $(this).val(255);
  }
});
