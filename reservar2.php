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
                <span class="text-muted">Cancel reservation</span>
                <span class="badge badge-secondary badge-pill">X</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <form action="functions/cancelreservation1.php" enctype="multipart/form-data" method="post"
                          class="needs-validation" novalidate>
                        <div>
                            <label for="cancel">Insert yout KHI Card Number <span class='text-muted'></span></label>
                            <input type="text" name="codigo" placeholder="KHI Card Number" class="form-control"
                                   id="email">
                            <br/>
                            <button class="btn btn-danger btn-lg btn-block" type="submit">Cancel Reservation</button>
                        </div>
                    </form>
                </li>
            </ul>
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Contact Information</span>
                <span class="badge badge-secondary badge-pill">i</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Mail</h6>
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
            <form action="functions/gravar2.php" enctype="multipart/form-data" method="post" class="needs-validation"
                  novalidate>

                <?php
                require("functions/conn.php");

                $pegaid = (int)$_GET['id'];
                $sql = "select * FROM usuarios where codigo = '$pegaid'";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='mb-3'>";
                    echo "<label class='username'>KHI Card Number</label>";
                    echo "<div class='input-group'>";
                    echo "<div class='input-group-prepend'>";
                    echo "<span class='input-group-text'>##</span>";
                    echo "</div>";
                    echo "<input type='text' name='codigo' value='$row[codigo]' class='form-control' id='Card Number' placeholder='Card Number' readonly>";
                    echo "<div class='invalid-feedback'>Your Card Number is required.</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-md-6 mb-3'>";
                    echo "<label for='firstName'>First name</label>";
                    echo "<input type='text' name='nome' value='$row[nome]' class='form-control' id='firstName' readonly>";
                    echo "<div class='invalid-feedback'>Valid first name is required.</div>";
                    echo "</div>";
                    echo "<div class='col-md-6 mb-3'>";
                    echo "<label for='lastName'>Last name</label>";
                    echo "<input type='text' name='sobrenome' value='$row[sobrenome]' class='form-control' id='lastName' readonly>";
                    echo " <div class='invalid-feedback'>Valid last name is required.</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='mb-3'>";
                    echo "<label for='email'>Mail <span class='text-muted'></span></label>";
                    echo "<input type='email' name='email' value='email' class='form-control' id='email'>";
                    echo "<div class='invalid-feedback'>Please enter a valid email address for shipping updates.</div>";
                    echo "</div>";
                    echo "<div class='mb-3'>";
                    echo "<label for='address'>Date</label>";
                    echo "<input type='date' name='data' class='form-control' id='address' placeholder='mm/dd/yyyy' required>";
                    echo "<div class='invalid-feedback'>Please enter your date.</div>";
                    echo "</div>";
                    echo "<h4 class='mb-3'>Period</h4>";
                    echo "<div class='d-block my-3'>";
                    echo "<div class='form-check'>";
                    echo "<input class='form-check-input' type='radio' name='periodo' id='exampleRadios1' value='morning' checked>";
                    echo "<label class='form-check-label' for='exampleRadios1'>Morning (9:00-12:00)</label>";
                    echo "</div>";
                    echo "<div class='form-check'>";
                    echo "<input class='form-check-input' type='radio' name='periodo' id='exampleRadios2' value='afternoon'>";
                    echo "<label class='form-check-label' for='exampleRadios2'>Afternoon (13:00-17:00)</label>";
                    echo "</div>";
                    echo "<div class='form-check'>";
                    echo "<input class='form-check-input' type='radio' name='periodo' id='exampleRadios2' value='day'>";
                    echo "<label class='form-check-label' for='exampleRadios2'>Day (09:00-17:00)</label>";
                    echo "</div>";
                    echo "<div class='custom-control custom-radio'>";
                    echo "<hr class='mb-4'>";
                    echo "<button class='btn btn-primary btn-lg btn-block' type='submit'>Reserve</button>";
                    echo "</div>";
                    echo "</div>";
                }
                mysqli_close($conn);
                ?>
                <?php
                require("functions/conn.php");

                $pegaid = (int)$_GET['id'];
                $sql = "select * FROM reservas where codigo = '$pegaid' order by id desc limit 1";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<input type='hidden' value='$row[id]' name='id'>";
                }
                mysqli_close($conn);
                ?>

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

