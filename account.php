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

    <script src="/script/account.js" defer></script>
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
    <section style="height: 75vh" class="d-flex justify-content-center">
        <div id="accountForm" class="carousel slide w-100">
            <div class="carousel-inner">
                <section id="loginForm" class="mx-auto carousel-item vw-100 mt-5 active">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div>
                                <div class="card-header">
                                    <h4 class="mb-4">Login</h4>
                                </div>
                                <div class="card-body">
                                    <form id="login-form">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block mb-3">Login</button>
                                            <a onclick="$('#accountForm').carousel(1);">Don't
                                                have an account ?
                                                Register</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="registrationForm" class="mx-auto carousel-item vw-100 mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-4">Registration</h4>
                                </div>
                                <div class="card-body">
                                    <form id="register-form">
                                        <div class="form-group">
                                            <label>Nom:</label>
                                            <input type="text" name="nom" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Prénom:</label>
                                            <input type="text" name="prenom" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Téléphone:</label>
                                            <input type="tel" name="tel" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Mot de passe:</label>
                                            <input type="password" name="motDePasse" class="form-control" required>
                                        </div>
                                        <div class="form-group" id="siren-field">
                                            <label>SIREN:</label>
                                            <input type="text" name="siren" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                            <a onclick="$('#accountForm').carousel(0);">Already have an account ?
                                                Login
                                                here</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</body>

</html>