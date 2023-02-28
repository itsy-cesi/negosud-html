<!DOCTYPE html>
<html lang="en">

<head>
    <?=!require('./cdn.php') ?>
    <link rel="stylesheet" href="/stylesheets/home.css">
    <script src="/script/home.js" defer></script>
    <script src="/script/loader.js" defer></script>
    <script src="/script/quantity.js" defer></script>
</head>

<body class="overflow-hidden" style="overflow-x: hidden;">
    <?=!require('./header1.php') ?>
    <div id="loader" style="z-index: 1;"
        class="vw-100 vh-100 top-0 d-flex justify-content-center align-items-center position-absolute bg-white">
        <img src="/images/d3f472b06590a25cb4372ff289d81711_w200.gif" alt="">
    </div>
    <section class="vw-100 vh-100 d-flex justify-content-center align-items-center position-relative">
        <div style="z-index: -999; background-image: url('/images/5518724.jpg'); background-size: cover;"
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
                <img class="w-75 mx-auto" src="/images/xqhs7k1tusvdohhgagmq.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="vw-100 vh-100 d-flex p-3 justify-content-center align-items-center position-relative flex-column">
        <h3 class="p-4">Cépages</h3>
        <div class="d-flex flex-wrap w-75 h-50">
            <div style="flex: 1; min-width: 225px;" name="cepage_show"
                class="position-relative h-100 overflow-hidden d-flex justify-content-end align-items-center flex-column">
                <div class="w-100 h-100 position-absolute top-50 start-50 translate-middle"
                    style="z-index: -1; background-image: url('/images/xqhs7k1tusvdohhgagmq.jpg'); background-size: cover; background-position: center;">
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
                    style="z-index: -1; background-image: url('/images/istockphoto-1034835628-612x612.jpg'); background-size: cover; background-position: center;">
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
                    style="z-index: -1; background-image: url('/images/istockphoto-1281018997-612x612.jpg'); background-size: cover; background-position: center;">
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
                    style="z-index: -1; background-image: url('/images/stock-photo-cognac-glass-bottle-luxury-alcohol.jfif'); background-size: cover; background-position: center;">
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