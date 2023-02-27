<!DOCTYPE html>
<html lang="en">

<head>
    <?=!require('./cdn.php') ?>
    <link rel="stylesheet" href="/stylesheets/account.css">
    <script src="/script/account.js"></script>
    <script src="/script/loader.js" defer></script>
</head>

<body class="overflow-hidden">
    <?=!require('./header2.php') ?>
    <section style="height: 75vh" class="d-flex justify-content-center">
        <div id="accountForm" class="carousel slide w-100">
            <div class="carousel-inner d-flex">
                <section id="loginForm" class="mx-auto carousel-item vw-100 mt-5 active">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div>
                                <div>
                                    <h4 class="mb-4">Login</h4>
                                </div>
                                <div>
                                    <form id="login-form">
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input type="text" name="email" class="form-control" required>
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
                            <div>
                                <div>
                                    <h4 class="mb-4">Registration</h4>
                                </div>
                                <div>
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