<!DOCTYPE html>
<html lang="en">

<head>
    <?=!require('./cdn.php') ?>
    <link rel="stylesheet" href="/stylesheets/style.css">
    <script src="/script/loader.js" defer></script>
    <script src="/script/products.js" defer></script>
    <script src="/script/quantity.js" defer></script>
</head>

<body class="overflow-hidden">
    <?=!require('./header2.php') ?>
    <div id="loader" style="z-index: 1;"
        class="vw-100 vh-100 top-0 d-flex justify-content-center align-items-center position-absolute bg-white">
        <img src="/images/d3f472b06590a25cb4372ff289d81711_w200.gif" alt="">
    </div>
    <section class="h-100 p-5 d-flex">
        <div class="col-2 position-relative">
            <div class="mx-auto position-fixed" style="width: 15%;height: 75vh;overflow-y: auto;">
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