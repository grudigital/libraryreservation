<?php
session_start();
if ($_SESSION['usuarioNome'] == '') {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Kunsthistorisches Institut in Florenz</title>
    <link rel="icon" href="../assets/img/favicon.png" />
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <link href="../css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

</head>
<body id="page-top">
<header class="container topo-logotipos">
    <div class="row">
        <div class="col">
            <img src="../assets/img/logo-oficial.png">
        </div>
        <div class="col"></div>
        <div class="col">
            <img style="float: right" src="../assets/img/logo-2.png">
        </div>
    </div>
</header>
<div style="border-bottom: solid 1px #dcdcdc;"></div>

<div class="container menu-novo-admin">
    <div class="row">

        <div class="col-12">
            <ul>
                <a href='index.php'>
                    <button>About</button>
                </a>
                <a  href='todaysreservations.php'>
                    <button>Today´s reservation</button>
                </a>
                <a  href='tomorrowsreservations.php'>
                    <button>Tomorrow reservation</button>
                </a>
                <a href='allreserve.php'>
                    <button>All reservation</button>
                </a>
                <a href='students.php'>
                    <button>Students</button>
                </a>
                <a href='administrators.php'>
                    <button>Administrators</button>
                </a>
                <a href='languages.php'>
                    <button>Languages</button>
                </a>
                <a href='logout.php'>
                    <button>Log out</button>
                </a>
            </ul>
        </div>
    </div>
</div>

<div style="border-top: solid 1px #dcdcdc;"></div>
<div class="container conteudo-projeto">
        <section class="resume-section">
            <div class="resume-section-content">
                <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Students management - Add</h4>
                    <hr class="mb-4">
                    <div style="height: 20px"></div>

                    <form class="form-row justify-content-end" action="functions/studentsadd.php" enctype="multipart/form-data" method="post">
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
                                <span class="input-group-text" id="basic-addon1">Mail</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Mail" name="email" aria-label="Mail" class="mail" aria-describedby="basic-addon1">
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
                </div>
            </div>
        </section>
    </div>


</div>
<section style="height: 100px; background-color: #f2f2f2">
    <div class="container">
        <div class="row">
            <div style="margin-top: 30px" class="col-4">
                <a href="https://www.facebook.com/khiflorenz" target="_blank"><img style="float: left; margin-right:20px" src="../assets/img/facebook.png"></a>
                <a href="https://twitter.com/khiflorenz" target="_blank"><img style="float: left; margin-right:20px" src="../assets/img/twitter.png"></a>
                <a href="https://vimeo.com/khiflorenz" target="_blank"><img style="float: left" src="../assets/img/vimeo.png"></a>
            </div>
            <div style="font-size:30px; font-weight: bold; margin-top: 25px; color:#424242" class="col-8">
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, english FROM languages where id=37";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[english]";
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</section>
<section style="height: 60px; background-color: #424242">
    <div class="container">
        <div class="row">
            <div style="text-align: center; padding-top:15px; color:#f2f2f2 " class="col-12">

                Kunsthistorisches Institut in Florenz.
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, english FROM languages where id=38";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[english]";
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $('.datepicker').datepicker({
        autoclose: true,
        format: 'dd/mm/yyyy',
        startDate: new Date(Date.now() + 72 * 60 * 60 * 1000),
        endDate: new Date(Date.now() + 8 * 24 * 60 * 60 * 1000),
        daysOfWeekDisabled: [0,6],
    });
    $('.datepicker').on("keydown", function() {
        event.preventDefault();
        return false;

    });
    $('.datepicker').datepicker({
        startDate: '+1d'
    })

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
<script src="../js/scripts.js"></script>

<script src="../js/popper.js"></script>
<script src="../js/scripts.js"></script>
<script src="../js/form-validation.js"></script>
</body>
</html>
