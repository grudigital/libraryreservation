<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: admin-error.php");
}
?>
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

        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Management Panel - Welcome <?php echo"$_SESSION[usuarioNome]"?> - <a href="functions/sair.php">Logout</a></h4>
            <hr class="mb-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <a href="admin.php">Today´s reservation</a>
                    </div>
                    <div class="col-sm">
                        <a href="admin-historico.php">Reservation history</a>
                    </div>
                    <div class="col-sm">
                        <a href="admin-alunos.php">Students</a>
                    </div>
                    <div class="col-sm">
                        <a href="admin-administradores.php">Administrators</a>
                    </div>
                </div>
            </div>

            <div class="espaco30"></div>
            <p class="lead">Fill in the fields below to register a new administrator:</p>
            <div class="espaco30"></div>
            <form class="form-row justify-content-end" action="functions/alunos-adicionar.php" enctype="multipart/form-data" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">KHI Card Number</span>
                    </div>
                    <input type="text" class="form-control" placeholder="KHI Card Number" aria-label="KHI Card Number" name="codigo" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Name</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Name" aria-label="Name" name="nome" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Surname</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Surname" aria-label="Surname" name="sobrenome" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Conduct Manual</span>
                    </div>
                    <select type="select" name="aceite" class="form-control" aria-label="aceite" id="aceite" aria-describedby="basic-addon1">
                        <option value="1">Signed</option>
                        <option value="2">Didn´t Sign</option>
                    </select>
                </div>

                <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Save</button>
            </form>
        </div>t
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

