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
        <div class="textos-topo">
            <hr class="mb-4">
            <h2>Library Reservation</h2>
            <p class="lead">Please, submit your booking request filling out the form below:</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Contact Information</span>
                <span class="badge badge-secondary badge-pill">i</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">E-mail</h6>
                        <small class="text-muted">contact@exemple.com</small>
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Telephone</h6>
                        <small class="text-muted">+352 1234-4321</small>
                    </div>
                    <span class="text-muted"></span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">WhatsApp</h6>
                        <small class="text-muted">+351 98888-1212</small>
                    </div>
                    <span class="text-muted"></span>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Personal Data</h4>
            <form action="functions/gravar.php" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" name="nome" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" name="sobrenome" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="username">KHI Card Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">##</span>
                        </div>
                        <input type="text" name="codigo" class="form-control" id="Card Number" placeholder="Card Number" required>
                        <div class="invalid-feedback">
                            Your Card Number is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email <span class="text-muted"></span></label>
                    <input type="email" name="email" class="form-control" id="email">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address">Date</label>
                    <input type="date" name="data" class="form-control" id="address" placeholder="mm/dd/yyyy" required>
                    <div class="invalid-feedback">
                        Please enter your date.
                    </div>
                </div>
                <h4 class="mb-3">Period</h4>
                <div class="d-block my-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="periodo" id="exampleRadios1" value="manha" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Morning (9:00-12:00)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="periodo" id="exampleRadios2" value="tarde">
                        <label class="form-check-label" for="exampleRadios2">
                            Afternoon (13:00-17:00)
                        </label>
                    </div>
                    <div class="custom-control custom-radio">
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Reserve</button>
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

