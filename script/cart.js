async function updateCart(response){
    let qtt = 0;
    await $('#badgeCart').html(response['quantity'])
    if (response['quantity'] == 0){
        $('#badgeCart').addClass('d-none')
    } else {
        $('#badgeCart').removeClass('d-none')
    }
}

async function getCart() {
    let cart = {};
    await $.ajax({
        url: "/api/Cart.php",
        method: "POST",
        data: {
            'function': 'get_cart',
        },
        success: function(response){
            updateCart(response);
            cart = response;
        }
    })
    return cart;
}
async function makeOffCanvas(){
    await $('body').append(`
        <div class="offcanvas offcanvas-end" tabindex="-1" id="cartMenu">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body" id="cartList">
          </div>
        </div>
    `);
    makeList()
}

async function makeList(){
    const cartList = await getCart();
    $('#cartList').html();
    Object.values(cartList.products).forEach(item => {
        product = item.product;
        quantity = item.quantity;
        $('#cartList').append(`
        <div class="d-flex">
            <img src="${product.imagePrincipal}" class="w-25">
            <div>
                <h5>${product.nomProduit}</h5><div class="d-flex">
                <div class="w-50 p-4">
                    <div class="input-group d-flex mt-3">
                        <a style="flex: 1;" class="btn btn-primary" name="quantity" action="remove" role="button">-</a>
                        <input style="flex: 1;" type="number" name="quantity" class="form-control text-center" value="${quantity}" min="1">
                        <a style="flex: 1;" class="btn btn-primary" name="quantity" action="add" role="button">+</a>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <h5>Unit: >${product.prix_unitaire}</h5>
                    <h5>Total: ${product.prix_unitaire}</h5>
                </div>
            </div>
        </div>
        `)
    });
}

async function clearCart(){
    let qtt = 0;
    await $.ajax({
        url: "/api/Cart.php",
        method: "POST",
        data: {
            'function': 'reset_cart',
        },
        success: function(response){
            updateCart(response);
            new Noty({
                type: (!response.success?'error':'success'),
                layout: 'topRight',
                text: response.success??response.error,
                timeout: 3e3
            }).show();
            qtt = response.quantity;
        }
    })
    return qtt;
}

async function addCart(productId, quantity = 1){
    let qtt = 0;
    await $.ajax({
        url: "/api/Cart.php",
        method: "POST",
        data: {
            'function': 'add_item',
            'productId': productId,
            'quantity': quantity
        },
        success: function(response){
            updateCart(response);
            new Noty({
                type: (!response.success?'error':'success'),
                layout: 'topRight',
                text: response.success??response.error,
                timeout: 3e3
            }).show();
            qtt = response.quantity;
        }
    })
    return qtt;
}

async function removeCart(productId){
    let qtt = 0;
    await $.ajax({
        url: "/api/Cart.php",
        method: "POST",
        data: {
            'function': 'remove_item',
            'productId': productId
        },
        success: function(response){
            updateCart(response);
            new Noty({
                type: (!response.success?'error':'success'),
                layout: 'topRight',
                text: response.success??response.error,
                timeout: 3e3
            }).show();
            qtt = response.quantity;
        }
    })
    return qtt;
}
$(document).ready(function() {
    makeOffCanvas();
    getCart();
    $(document).on('click', '#buy-it', async function(){
        let qtt = await addCart($(this).attr('product-id'), $('input[name="quantity"]').val())
        updateCart({quantity: qtt});
    })
});