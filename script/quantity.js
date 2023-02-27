$(document).on("click", 'a[name="quantity"]', function () {
  if ($(this).attr("action") == "remove") {
    const input = $(this).next();
    input.val(parseInt(input.val()) - (input.val() != 1));
  } else if ($(this).attr("action") == "add") {
    const input = $(this).prev();
    input.val(parseInt(input.val()) + (input.val() != 255));
  }
});
$(document).on("change", 'input[name="quantity"]', function () {
  if ($(this).attr("offcanvas") == "true") {
    if (parseInt($(this).val()) >= 255) {
      $(this).val(255);
    }
    $.ajax({
      url: "/api/Cart.php",
      method: "POST",
      data: {
        function: "update_cart",
        productId: $(this).attr("product-id"),
        quantity: $(this).val(),
      },
      success: function (response) {
        updateCart(response);
        if (response.success == "product removed from cart") {
          $(
            `#cartList div[product-id="${$(this).attr("product-id")}"]`
          ).remove();
        }
      },
      error: function (response) {
        console.log("err");
        console.log(response);
      },
    });
  } else {
    if (parseInt($(this).val()) < 1) {
      $(this).val(1);
    } else if (parseInt($(this).val()) >= 255) {
      $(this).val(255);
    }
  }
});
