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

    <script src="/script/contact.js" defer></script>
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
                            id="">
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
    <header style="z-index: 10" class="d-flex w-100 justify-content-evenly p-3">
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
    <div id="loader" style="width: 100vw; height: 100vh; z-index: 9;"
        class="top-0 d-flex justify-content-center align-items-center position-absolute bg-white">
        <img src="/d3f472b06590a25cb4372ff289d81711_w200.gif" alt="">
    </div>
    <section style="height: 75vh" class="d-flex justify-content-center align-items-center">
        <div class="d-flex w-75">
            <div class="w-100 mt-5 p-3 h-100">
                <div class="row justify-content-center w-100 h-100">
                    <h4>Contact Us</h4>
                    <form id="contact">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="object">Object</label>
                            <input type="text" class="form-control" id="object" name="object" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <iframe class="w-50"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2597.4015406735484!2d1.0729677160149542!3d49.38239587934232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e0dda5e15aae21%3A0x745811abc4f77adb!2sTraining%20Center%20CESI%20Rouen!5e0!3m2!1sen!2sfr!4v1677503042545!5m2!1sen!2sfr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</body>

</html>