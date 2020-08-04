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
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kunsthistorisches Institut in Florenz</title>
    <link rel="icon" href="../assets/img/favicon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Clarence Taylor</span>
        <span class="d-none d-lg-block"><img class="img-fluid img-profile mx-auto mb-2" src="../assets/img/profile.jpg" alt="" /></span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">About</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="todaysreservations.php">Today´s reservations</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tomorrowsreservations.php">Tomorrow reservation</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="allreserve.php">All reservations</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="students.php">Students</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="administrators.php">Administrators</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="languages.php">Languages</a></li>
        </ul>
    </div>
</nav>
<!-- Page Content-->
<div class="container-fluid p-0">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kunsthistorisches Institut in Florenz</title>
        <link rel="icon" href="../assets/img/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Clarence Taylor</span>
            <span class="d-none d-lg-block"><img class="img-fluid img-profile mx-auto mb-2" src="../assets/img/profile.jpg" alt="" /></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="todaysreservations.php">Today´s reservations</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tomorrowsreservations.php">Tomorrow reservation</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="allreserve.php">All reservations</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="students.php">Students</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="administrators.php">Administrators</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="languages.php">Languages</a></li>
                <a href="functions/logout.php"><button class="btn btn-primary btn-lg btn-block" type="submit">Log out</button></a>
            </ul>
        </div>
    </nav>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <section class="resume-section">
            <div class="resume-section-content">
                <div class="col-md-12 order-md-1">
                    <h4 class="mb-3">Management Administrators</h4>
                    <hr class="mb-4">
                    <div class="container bloco-botoes">
                        <div class="row">
                            <div class="col"><a href="functions/reportadministrators.php"><button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Export data</button></a></div>
                            <div class="col"><a href="administratorsadd.php"><button class="btn btn-secondary btn-lg btn-block" name="submit" type="submit">Add</button></a></div>
                        </div>
                    </div>
                    <div style="height: 20px"></div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        require ("connections/conn.php");

                        $sql = "select * FROM admin";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result))
                        {

                            echo "<tr>";
                            echo "<th scope='row'>$row[id]</th>";
                            echo "<td>$row[nome]</td>";
                            echo "<td>$row[email]</td>";
                            echo "<td><a href='functions/administratorsdelete.php?id=$row[id]'><button class='btn btn-danger btn-lg btn-block botao-excluir' >X</button></a></td>";
                            echo "</tr>";

                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="../js/scripts.js"></script>
    </body>
    </html>

</div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>
</body>
</html>
