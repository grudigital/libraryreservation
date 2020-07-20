<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Agência Grudigital">
    <title>Library Reservation</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container">
    <div class="py-5 text-center logotipo">
        <img class="d-block mx-auto mb-4" src="img/logo.png" alt="">
    </div>
    <div class="row">

        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Management Panel</h4>
            <p class="lead">Access denied please try again.</p>
            <form action="functions/valida.php" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Mail</label>
                        <input type="text" name="email" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Password</label>
                        <input type="password" name="senha" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Log in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <section class="rodape-reservas">
        <p class="texto-rodape">&copy; 2020 Kunsthistorische Institut in Florenz</p>
    </section>
</div>
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/form-validation.js"></script>
</body>

