async function updateCart(response) {
  let qtt = 0;
  await $("#badgeCart").html(response["quantity"]);
  if (response["quantity"] == 0) {
    $("#badgeCart").addClass("d-none");
  } else {
    $("#badgeCart").removeClass("d-none");
  }
  makeList(response);
}

async function getCart() {
  let cart = {};
  await $.ajax({
    url: "/api/Cart.php",
    method: "POST",
    data: {
      function: "get_cart",
    },
    success: function (response) {
      cart = response;
    },
  });
  return cart;
}
async function makeOffCanvas() {
  await $("body").append(`
        <div class="offcanvas offcanvas-end" tabindex="-1" id="cartMenu">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body h-100" id="cartList">
          </div>
        </div>
    `);
  updateCart(await getCart());
}

async function makeList(cartList) {
  $("#cartList").html("");
  if (Object.values(cartList.cart).length == 0) {
    $("#cartList").append(`
      <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="w-50">
          <img class="w-100"src="https://img.icons8.com/stickers/100/null/nothing-found.png"/>
          <p>Nothing in your cart from now</p>
        </div>
      </div>
    `);
  }
  Object.values(cartList.cart).forEach((item) => {
    product = item.product;
    quantity = item.quantity;
    $("#cartList").append(`
        <div class="d-flex" product-id="${product.id}">
            <div class="w-25">
              <img src="${
                product.imagePrincipal
              }" class="w-100 ratio ratio-1x1">
            </div>
            <div>
                <h5action="delete">${
                  product.nomProduit
                }</h5action=><div class="d-flex">
                <div class="w-50 p-4">
                    <div class="input-group d-flex mt-3">
                        <input style="flex: 1;" type="number" name="quantity" offcanvas="true" class="form-control text-center" value="${quantity}" product-id="${
      product.id
    }">
                    </div>
                    <div>
                        <a class="btn btn-danger" product-id="${
                          product.id
                        }" action="delete" name="quantity"><i class="fa fa-trash" aria-hidden="true"></i> Delete item</a>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <h5>Unit: ${product.prix_unitaire}€</h5>
                    <h5>Total: ${
                      Math.round(product.prix_unitaire * quantity * 100) / 100
                    }€</h5>
                </div>
            </div>
        </div>
        `);
  });
}

async function clearCart() {
  let qtt = 0;
  await $.ajax({
    url: "/api/Cart.php",
    method: "POST",
    data: {
      function: "reset_cart",
    },
    success: function (response) {
      updateCart(response);
      new Noty({
        type: !response.success ? "error" : "success",
        layout: "topRight",
        text: response.success ?? response.error,
        timeout: 3e3,
      }).show();
      qtt = response.quantity;
    },
  });
  return qtt;
}

async function addCart(productId, quantity = 1) {
  let qtt = 0;
  await $.ajax({
    url: "/api/Cart.php",
    method: "POST",
    data: {
      function: "add_item",
      productId: productId,
      quantity: quantity,
    },
    success: function (response) {
      updateCart(response);
      new Noty({
        type: !response.success ? "error" : "success",
        layout: "topRight",
        text: response.success ?? response.error,
        timeout: 3e3,
      }).show();
      qtt = response.quantity;
    },
  });
  return qtt;
}

async function removeCart(productId, quantity = 1) {
  let qtt = 0;
  await $.ajax({
    url: "/api/Cart.php",
    method: "POST",
    data: {
      function: "remove_item",
      productId: productId,
      quantity: quantity,
    },
    success: function (response) {
      updateCart(response);
      new Noty({
        type: !response.success ? "error" : "success",
        layout: "topRight",
        text: response.success ?? response.error,
        timeout: 3e3,
      }).show();
      qtt = response.quantity;
    },
  });
  return qtt;
}
$(document).ready(function () {
  makeOffCanvas();
  $(document).on("click", "#buy-it", async function () {
    let qtt = await addCart(
      $(this).attr("product-id"),
      $('input[name="quantity"]').val()
    );

    updateCart(await getCart());
  });
  $(document).on("click", '*[action="delete"]', async function () {
    const productId = $(this).attr("product-id");
    await $.ajax({
      url: "/api/Cart.php",
      method: "POST",
      data: {
        function: "delete_item",
        productId: productId,
      },
      success: function (response) {},
    });
    makeList();
  });
});
