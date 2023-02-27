<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="product-id" content="<?= $_GET['id'] ?>">
    <title>NégoSud</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js'
        integrity='sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A=='
        crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js'
        integrity='sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ=='
        crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.js'
        integrity='sha512-mgZL3SZ/vIooDg2mU2amX6NysMlthFl/jDbscSRgF/k3zmICLe6muAs7YbITZ+61FeUoo1plofYAocoR5Sa1rQ=='
        crossorigin='anonymous'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.0/jquery-ui.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.js'
        integrity='sha512-t2sE4D8vBHZoytr423dbCPmX8MUKM9bNiVKGOMpqFYEsV8/GilxvresTtCsv9RDzqGMcizOd7EuXssJUtaGZLg=='
        crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css'
        integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw=='
        crossorigin='anonymous' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.css'
        integrity='sha512-+ouAqATs1y4kpPMCHfKHVJwf308zo+tC9dlEYK9rKe7kiP35NiP+Oi35rCFnc16zdvk9aBkDUtEO3tIPl0xN5w=='
        crossorigin='anonymous' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css'
        integrity='sha512-NXUhxhkDgZYOMjaIgd89zF2w51Mub53Ru3zCNp5LTlEzMbNNAjTjDbpURYGS5Mop2cU4b7re1nOIucsVlrx9fA=='
        crossorigin='anonymous' />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.0/themes/smoothness/jquery-ui.css">
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.css'
        integrity='sha512-03p8fFZpOREY+YEQKSxxretkFih/D3AVX5Uw16CAaJRg14x9WOF18ZGYUnEqIpIqjxxgLlKgIB2kKIjiOD6++w=='
        crossorigin='anonymous' />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>

    <script src="/script/product.js" defer></script>
    <script src="/script/cart.js" defer></script>
    <script src="/script/quantity.js" defer></script>
    <style>
        .h-inherit {
            width: inherit;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button,
        input[type=number] {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body class="overflow-hidden">
    <header style="z-index: 10" class="d-flex w-100 justify-content-evenly p-3 position-fixed visually-hidden">
        <img src="/banner.jpg" style="height: 5em" alt="">
        <nav>
            <ul style="list-style: none; display:flex;">
                <li>
                    <a href="http://127.0.0.1/" class="p-3 nav-link">Home</a>
                </li>
                <li>
                    <a href="http://127.0.0.1/products" class="p-3 nav-link">Products</a>
                </li>
                <li>
                    <a href="#" class="p-3 nav-link">Contact</a>
                </li>
                <li>
                    <a href="#" class="p-3 nav-link">
                        <span style="border-right: 1px solid rgba(0, 0, 0, 0.466)"></span>
                    </a>
                </li>
                <li>
                    <a data-bs-toggle="offcanvas" data-bs-target="#cartMenu" class="m-3 nav-link position-relative">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger d-none"
                            id="">
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <header style="z-index: 10" class="d-flex w-100 justify-content-evenly p-3">
        <img src="/banner.jpg" style="height: 5em" alt="">
        <nav>
            <ul style="list-style: none; display:flex;">
                <li>
                    <a href="http://127.0.0.1/" class="p-3 nav-link">Home</a>
                </li>
                <li>
                    <a href="http://127.0.0.1/products" class="p-3 nav-link">Products</a>
                </li>
                <li>
                    <a href="#" class="p-3 nav-link">Contact</a>
                </li>
                <li>
                    <a href="#" class="p-3 nav-link">
                        <span style="border-right: 1px solid rgba(0, 0, 0, 0.466)"></span>
                    </a>
                </li>
                <li>
                    <a data-bs-toggle="offcanvas" data-bs-target="#cartMenu" class="m-3 nav-link position-relative">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger d-none"
                            id="badgeCart">
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="loader" style="width: 100vw; height: 100vh; z-index: -1;"
        class="top-0 d-flex justify-content-center align-items-center position-absolute bg-white">
        <img src="http://127.0.0.1/d3f472b06590a25cb4372ff289d81711_w200.gif" alt="">
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
                    <div class="input-group mb-3 d-flex w-25 p-5 mt-5 pt-0">
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