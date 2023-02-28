
async function getCart() {
    let cart = {};
    await $.ajax({
        url: "/api/Cart.php",
        method: "POST",
        data: {
            function: "get_cart",
        },
        success: function (response) {
            response.cart.forEach(element => {
                product = element.product;
                quantity = element.quantity;
                $('#checkout-list').append(`
                <div class="d-flex" product-id="${product.id}">
                <div class="w-25">
                  <img src="http://127.0.0.1/wines/6K4A0480_533x.jpg" class="w-100 ratio ratio-1x1">
                </div>
                <div>
                    <h5action="delete">${product.nomProduit
                    }</h5action=><div class="d-flex">
                    <div class="w-50 p-4">
                        <div class="input-group d-flex mt-3">
                            <input style="flex: 1;" type="number" name="quantity" offcanvas="true" class="form-control text-center" value="${quantity}" product-id="${product.id
                    }">
                        </div>
                        <div>
                            <a class="btn btn-danger" product-id="${product.id
                    }" action="delete" name="quantity"><i class="fa fa-trash" aria-hidden="true"></i> Delete item</a>
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <h5>Unit: ${product.prix_unitaire}€</h5>
                        <h5>Total: <span name="prixTotalProduit">${Math.round(product.prix_unitaire * quantity * 100) / 100
                    }</span>€</h5>
                    </div>
                </div>
            </div>
                `)
            });
        },
    });
    hideLoader();
}