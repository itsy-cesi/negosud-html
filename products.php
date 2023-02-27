<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script src="/script/cart.js" defer></script>
    <script src="/script/quantity.js" defer></script>

    <style>
        @media only screen and (max-width: 1200px) {
            li:has(*[name="product-description"]) {
                flex: 40% !important;
            }
        }

        @media only screen and (max-width: 900px) {
            *[name="suggestion"] {
                width: 90% !important;
            }
        }

        @media only screen and (max-width: 650px) {
            li:has(*[name="product-description"]) {
                flex: 90% !important;
                margin: auto !important;
            }

            *[name="suggestion"] {
                width: 100% !important;
            }
        }

        .h-fit-content {
            height: fit-content;
        }
    </style>
    <script src="/script/products.js" defer></script>
</head>

<body class="overflow-hidden">
    <header style="z-index: 10" class="d-flex w-100 justify-content-evenly p-3 position-fixed">
        <img src="/banner.jpg" style="height: 5em" alt="">
        <nav>
            <ul style="list-style: none; display:flex;">
                <li>
                    <a href="/" class="p-3 nav-link">Home</a>
                </li>
                <li>
                    <a href="/products" class="p-3 nav-link">Products</a>
                </li>
                <li>
                    <a href="/contact" class="p-3 nav-link">Contact</a>
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
    <header style="z-index: 10; opacity: 0;" class="d-flex w-100 justify-content-evenly p-3">
        <img src="/banner.jpg" style="height: 5em" alt="">
        <nav>
            <ul style="list-style: none; display:flex;">
                <li>
                    <a href="/" class="p-3 nav-link">Home</a>
                </li>
                <li>
                    <a href="/products" class="p-3 nav-link">Products</a>
                </li>
                <li>
                    <a href="/contact" class="p-3 nav-link">Contact</a>
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
                <li>
                    <a href="/account" class="m-3 nav-link position-relative">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger d-none"
                            id="badgeCart">
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="loader" style="z-index: 1;"
        class="vw-100 vh-100 top-0 d-flex justify-content-center align-items-center position-absolute bg-white">
        <img src="/d3f472b06590a25cb4372ff289d81711_w200.gif" alt="">
    </div>
    <section class="h-100 p-5 d-flex">
        <div class="col-2 position-relative">
            <div class="mx-auto position-fixed" style="width: 15%; height: 75vh; overflow-y: scroll;">
                <h3>Filters</h3>
                <p>
                    <a class="d-flex justify-content-between" data-toggle="collapse" href="#regionFilter" role="button">
                        <span>Region</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                </p>
                <div class="collapse w-75 p-3" id="regionFilter">
                    <input type="text" id="search-region">
                    <div class="p-0" name="regionList"></div>
                </div>

                <p>
                    <a class="d-flex justify-content-between" data-toggle="collapse" href="#priceFilter" role="button">
                        <span>Price</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                </p>
                <div class="collapse w-75 p-3" id="priceFilter">
                    <div class="d-flex justify-content-between">
                        <span>min</span>
                        <span>max</span>
                    </div>
                    <div class="d-flex justify-content-between">
                        <span class="min"></span>
                        <span class="max"></span>
                    </div>
                    <div id="slider-range"></div>
                </div>

                <p>
                    <a class="d-flex justify-content-between" data-toggle="collapse" href="#producerFilter"
                        role="button">
                        <span>Producer</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                    </a>
                </p>
                <div class="collapse w-75 p-3" id="producerFilter">
                    <input type="text" id="search-producer">
                    <div class="p-0" name="producerList"></div>
                </div>
            </div>
        </div>
        <div name="products" class="d-flex flex-wrap col-10"></div>
    </section>
</body>

</html>