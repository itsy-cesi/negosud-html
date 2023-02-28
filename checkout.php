<!DOCTYPE html>
<html lang="en">

<head>
    <?=!require('./cdn.php') ?>
    <script src="/script/loader.js" defer></script>
    <script src="/script/checkout.js" defer></script>
</head>

<body class="overflow-hidden">
    <?=!require('./header2.php') ?>
    <div id="loader" style="width: 100vw; height: 100vh; z-index: 9;"
        class="top-0 d-flex justify-content-center align-items-center position-absolute bg-white">
        <img src="/images/d3f472b06590a25cb4372ff289d81711_w200.gif" alt="">
    </div>
    <section style="height: 75vh" class="d-flex justify-content-center align-items-center">
        <div id="checkout-list"></div>

    </section>
</body>

</html>