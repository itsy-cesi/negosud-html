<!DOCTYPE html>
<html lang="en">

<head>
    <?=!require('./cdn.php') ?>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
    <script src="/script/loader.js" defer></script>
    <script src="/script/user.js" defer></script>
</head>

<body class="overflow-hidden">
    <?=!require('./header2.php') ?>
    <section style="height: 75vh" class="d-flex justify-content-center">
        <div class="d-flex align-items-start w-75 mx-auto">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link active" id="v-pills-commandes-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-commandes" type="button" role="tab">Commandes</button>
                <button class="nav-link" id="v-pills-factures-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-factures" type="button" role="tab">Factures</button>
                <button class="nav-link" id="v-pills-adresses-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-adresses" type="button" role="tab">Adresses</button>
            </div>
            <div class="tab-content w-100" id="v-pills-tabContent">
                <div class="tab-pane show active" id="v-pills-commandes" role="tabpanel" tabindex="0">
                    <table class="w-100 table table-striped" id="commandes">
                    </table>
                </div>
                <div class="tab-pane" id="v-pills-factures" role="tabpanel" tabindex="0">
                    <table class="w-100 table table-striped" id="factures">
                    </table>
                </div>
                <div class="tab-pane" id="v-pills-adresses" role="tabpanel" tabindex="0">
                    <table class="w-100 table table-striped" id="adresses">
                    </table>
                    <form id="add_adresse" class="w-100 d-flex flex-column">
                        <div class="p-3 pb-0 d-flex">
                            <div class="form-group m-0 pe-3">
                                <label for="rue">Rue</label>
                                <input type="text" class="form-control" name="rue" id="rue" required>
                            </div>
                            <div class="form-group m-0 pe-3">
                                <label for="ville">Ville</label>
                                <input type="text" class="form-control" name="ville" id="ville" required>
                            </div>
                            <div class="form-group m-0 pe-3">
                                <label for="codePostal">Zip</label>
                                <input type="text" class="form-control" name="codePostal" id="codePostal" required>
                            </div>
                        </div>
                        <div class="p-3 pb-0 d-flex">
                            <div class="form-group m-0 pe-3">
                                <label for="region">Région</label>
                                <input type="text" class="form-control" name="region" id="region" required>
                            </div>
                            <div class="form-group m-0 pe-3">
                                <label for="pays">Pays</label>
                                <input type="text" class="form-control" name="pays" id="pays" required>
                            </div>
                            <div class="d-flex flex-column justify-content-end">
                                <button type="submit" class="btn btn-primary w-100">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>