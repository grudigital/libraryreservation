<?php include 'includes/header.php'?>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
<?php include 'includes/menu.php'?>
<div class="container">
    <div class="row">
        <div class="col-sm flags-header">
            <a href="../eng/index.php"><img width="100%" height="35px" src="../assets/img/flag-english.png"></a>
        </div>
        <div class="col-sm">
            <a href="../ger/index.php"><img width="100%" height="35px" src="../assets/img/flag-germany.png"></a>
        </div>
        <div class="col-sm">
            <a href="../ita/index.php"><img width="100%" height="35px" src="../assets/img/flag-italy.png"></a>
        </div>
    </div>
</div>
</nav>
<div class="container-fluid p-0">
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, germany FROM languages where id=5";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[germany]";
                }
                mysqli_close($conn);
                ?>
            </h1>
            <div class="subheading mb-5">
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, germany FROM languages where id=6";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[germany]";
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </section>
</div>
<?php include 'includes/footer.php'?>

