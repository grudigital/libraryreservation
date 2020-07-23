<?php include 'includes/header.php' ?>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
<?php include 'includes/menu.php' ?>
<div class="container">
    <div class="row">
        <div class="col-sm flags-header">
            <a href="../eng/cancel-reservation-confirm.php"><img width="100%" height="35px" src="../assets/img/flag-english.png"></a>
        </div>
        <div class="col-sm">
            <a href="../ger/cancel-reservation-confirm.php"><img width="100%" height="35px" src="../assets/img/flag-germany.png"></a>
        </div>
        <div class="col-sm">
            <a href="../ita/cancel-reservation-confirm.php"><img width="100%" height="35px" src="../assets/img/flag-italy.png"></a>
        </div>
    </div>
</div>
</nav>
<div class="container-fluid p-0">
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h2 style="margin-bottom: 20px" class="mb-0">
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, italy FROM languages where id=17";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[italy]";
                }
                mysqli_close($conn);
                ?>            </h2>
            <div style="height: 20px"></div>

            <div class="alert alert-danger" role="alert">
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, italy FROM languages where id=13";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[italy]";
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </section>
</div>
<?php include 'includes/footer.php' ?>
