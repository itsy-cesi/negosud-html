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
    <script src="/script/cart.js" defer></script>
    <script src="/script/quantity.js" defer></script>

    <script defer>
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            var documentHeight = $(document).height();
            console.log(scroll + "/" + windowHeight);

            if (scroll > windowHeight && scroll < windowHeight * 2) {
                $('header a').addClass('link-light');
            } else {
                $('header a').removeClass('link-light');
            }
        });
        $(document).ready(() => {
            $('#loader').addClass('d-none'); $('body').removeClass('overflow-hidden');
        })
    </script>
    <style>
        *[name="cepage_show"] {
            transition: 0.5s;
        }

        *[name="cepage_show"]:hover {
            flex: 2 !important;
        }

        *[name="cepage_show"] div:last-of-type {
            transition: 0.5s;
        }

        *[name="cepage_show"]:hover div:last-of-type {
            margin-bottom: 2em;
        }

        @media only screen and (max-width: 1200px) {
            *[name="cepage_show"] {
                flex: 50% !important;
            }

            *[name="history"]>*:has(img) {
                display: none;
            }
        }
    </style>
</head>

<body class="overflow-hidden" style="overflow-x: hidden;">
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
    <div id="loader" style="z-index: 1;"
        class="vw-100 vh-100 top-0 d-flex justify-content-center align-items-center position-absolute bg-white">
        <img src="/d3f472b06590a25cb4372ff289d81711_w200.gif" alt="">
    </div>
    <section class="vw-100 vh-100 d-flex justify-content-center align-items-center position-relative">
        <div style="z-index: -999; background-image: url('./5518724.jpg'); background-size: cover;"
            class="w-100 h-100 position-absolute top-50 start-50 translate-middle"></div>
        <div class="d-flex justify-content-center align-items-center flex-column text-white"
            style="font-family: fangsong;">
            <h1 style="font-size: 5em;">NégoSud</h1>
            <h5 class="fs-1">Wine seller from Pays d'Oc</h5>
        </div>
    </section>
    <section style="background-color: #1b1b1b"
        class="vw-100 vh-100 d-flex justify-content-center align-items-center position-relative shadow">
        <div class="text-white w-75 d-flex flex-wrap align-items-center" name="history">
            <div class="p-3" style="flex: 1;">
                <h1 style="font-family: math;">Qui somme nous ?</h1>
                <div class="row">
                    <div class="" style="font-family: math;">
                        <p>Négosud est une entreprise familiale française spécialisée dans la vente de vin. Depuis
                            sa
                            création il y a plus de 30 ans, Négosud s'est forgé une réputation solide en proposant
                            des
                            vins
                            de qualité issus des terroirs de la région des Pays d'Oc.</p>
                        <p>Le fondateur de l'entreprise, passionné par le monde viticole, a toujours été très
                            attaché à
                            la
                            préservation des savoir-faire français en matière de vinification. C'est pourquoi, dès
                            le
                            début,
                            Négosud a choisi de collaborer avec des viticulteurs locaux afin de proposer des vins de
                            qualité
                            qui reflètent l'authenticité des terroirs de la région.</p>
                        <p>Grâce à son engagement en faveur de la qualité et de l'authenticité, Négosud a su
                            conquérir
                            le
                            cœur de nombreux amateurs de vin en France et à l'étranger. Aujourd'hui, l'entreprise
                            continue
                            de travailler en étroite collaboration avec des viticulteurs locaux pour proposer des
                            vins
                            de
                            qualité exceptionnelle, tout en préservant l'héritage viticole français.</p>
                        <p>Chez Négosud, nous sommes fiers de notre histoire et de notre engagement en faveur des
                            terroirs
                            français. Nous sommes convaincus que notre passion pour le vin se reflète dans la
                            qualité de
                            nos
                            produits et nous sommes heureux de pouvoir les partager avec nos clients.</p>
                    </div>
                </div>
            </div>
            <div class="p-3 col-6" style="flex: 1;">
                <img class="w-75 mx-auto" src="/xqhs7k1tusvdohhgagmq.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="vw-100 vh-100 d-flex p-3 justify-content-center align-items-center position-relative flex-column">
        <h3 class="p-4">Cépages</h3>
        <div class="d-flex flex-wrap w-75 h-50">
            <div style="flex: 1; min-width: 225px;" name="cepage_show"
                class="position-relative h-100 overflow-hidden d-flex justify-content-end align-items-center flex-column">
                <div class="w-100 h-100 position-absolute top-50 start-50 translate-middle"
                    style="z-index: -1; background-image: url('./xqhs7k1tusvdohhgagmq.jpg'); background-size: cover; background-position: center;">
                </div>
                <div class="d-flex flex-column align-items-center w-100">
                    <hr class="border-top border-3 w-50" style="border-color: #000">
                    <h5 class="text-light fs-3 w-75 text-center" style="font-family: math;">Red wine</h5>
                    <hr class="mt-1 border-top border-3 w-50" style="border-color: #000">
                </div>
            </div>
            <div style="flex: 1; min-width: 225px;" name="cepage_show"
                class="position-relative h-100 overflow-hidden d-flex justify-content-end align-items-center flex-column">
                <div class="w-100 h-100 position-absolute top-50 start-50 translate-middle"
                    style="z-index: -1; background-image: url('./istockphoto-1034835628-612x612.jpg'); background-size: cover; background-position: center;">
                </div>
                <div class="d-flex flex-column align-items-center w-100">
                    <hr class="border-top border-3 w-50" style="border-color: #000">
                    <h5 class="text-light fs-3 w-75 text-center" style="font-family: math;">White wine</h5>
                    <hr class="mt-1 border-top border-3 w-50" style="border-color: #000">
                </div>
            </div>
            <div style="flex: 1; min-width: 225px;" name="cepage_show"
                class="position-relative h-100 overflow-hidden d-flex justify-content-end align-items-center flex-column">
                <div class="w-100 h-100 position-absolute top-50 start-50 translate-middle"
                    style="z-index: -1; background-image: url('./istockphoto-1281018997-612x612.jpg'); background-size: cover; background-position: center;">
                </div>
                <div class="d-flex flex-column align-items-center w-100">
                    <hr class="border-top border-3 w-50" style="border-color: #000">
                    <h5 class="text-light fs-3 w-75 text-center" style="font-family: math;">Rosé wine</h5>
                    <hr class="mt-1 border-top border-3 w-50" style="border-color: #000">
                </div>
            </div>
            <div style="flex: 1; min-width: 225px;" name="cepage_show"
                class="position-relative h-100 overflow-hidden d-flex justify-content-end align-items-center flex-column">
                <div class="w-100 h-100 position-absolute top-50 start-50 translate-middle"
                    style="z-index: -1; background-image: url('./stock-photo-cognac-glass-bottle-luxury-alcohol.jfif'); background-size: cover; background-position: center;">
                </div>
                <div class="d-flex flex-column align-items-center w-100">
                    <hr class="border-top border-3 w-50" style="border-color: #000">
                    <h5 class="text-light fs-3 w-75 text-center" style="font-family: math;">Digestifs</h5>
                    <hr class="mt-1 border-top border-3 w-50" style="border-color: #000">
                </div>
            </div>
        </div>
    </section>
</body>

</html>