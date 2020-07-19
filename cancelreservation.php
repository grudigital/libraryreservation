<!doctype html>
<html lang="en">
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
            <p class="lead">Manage your reservations</p>
                  novalidate>
                <table class='table'>
                    <thead>
                    <tr>
                        <th width="35%" scope='col'>Date</th>
                        <th width="35%" scope='col'>Period</th>
                        <th width="30%" scope='col'>Actions</th>
                    </tr>
                    </thead>
                    <tbody>


                <?php
                require("functions/conn.php");

                $pegaid = (int)$_GET['codigo'];
                $sql = "select * FROM reservas where codigo = '$pegaid'";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<tr>";
                    echo "<td>$row[data]</td>";
                    echo "<td>$row[periodo]</td>";
                    echo "<td><a href='functions/cancelreservation2.php?id=$row[id]'><button class='btn btn-danger btn-lg btn-block botao-cancelar' type='button'>Cancel Reservation</button></a></td>";
                    echo "</tr>";

                }
                mysqli_close($conn);
                ?>

                    </tbody>
                </table>
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

