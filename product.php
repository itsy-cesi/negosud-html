<!DOCTYPE html>
<html lang="en">

<head>
    <?=!require('./cdn.php') ?>
    <script src="/script/loader.js" defer></script>
    <script src="/script/product.js" defer></script>
    <script src="/script/quantity.js" defer></script>
</head>

<body class="overflow-hidden">
    <?=!require('./header2.php') ?>
    <div id="loader" style="width: 100vw; height: 100vh; z-index: 9;"
        class="top-0 d-flex justify-content-center align-items-center position-absolute bg-white">
        <img src="/images/d3f472b06590a25cb4372ff289d81711_w200.gif" alt="">
    </div>
    <section style="height: 75vh" class="d-flex justify-content-center align-items-center">
        <div class="d-flex w-75 h-100">
            <img src="" id="productImage" class="h-100" alt="">
            <div class="d-flex justify-content-between flex-column p-5 h-inherit">
                <div class="d-flex flex-column">
                    <h5 id="productProducer"></h5>
                    <h2 id="productName"></h2>
                    <div class="d-flex align-items-baseline">
                        <h2 id="productPrice"></h2>
                        <h2>€</h2>
                        <h5 class="ms-3" id="productTax"></h5>
                        <h5 class="ms-2">TTC</h5>
                    </div>
                </div>
                <div>
                    <h4>Quantity</h4>
                    <div class="input-group mb-3 d-flex p-5 mt-5 pt-0">
                        <input style="flex: 1;" type="number" name="quantity" class="form-control text-center" value="1"
                            min="1">
                    </div>
                </div>
                <div>
                    <p id="productDescription"></p>
                    <div class="d-flex align-items-baseline">
                        <h4 class="me-2">Year:</h4>
                        <h4 id="productAge"></h4>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <h4 class="me-2">Region:</h4>
                        <h4 id="productRegion"></h4>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <h4 class="me-2">Couleur:</h4>
                        <h4 id="productColor"></h4>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <h4 class="me-2">Alcool:</h4>
                        <h4 id="productAlcool"></h4>
                        <h4 class="me-2">°</h4>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <h4 class="me-2">Aliments:</h4>
                        <h4 id="productAlim"></h4>
                    </div>
                    <div class="d-flex align-items-baseline">
                        <h4 class="me-2">Expiration:</h4>
                        <h4 id="productExp"></h4>
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <a id="buy-it" product-id="" class="btn btn-primary w-50 ms-5" role="button"><i
                            class="fa fa-shopping-cart"></i>
                        Buy</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>