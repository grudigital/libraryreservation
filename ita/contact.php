<?php include 'includes/header.php' ?>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <?php include 'includes/menu.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-sm flags-header">
                <a href="../ger/reserve.php">DE</a>
            </div>
            <div class="col-sm flags-header">
                <a href="../eng/reserve.php">EN</a>
            </div>
            <div class="col-sm flags-header">
                <a href="../ita/reserve.php">IT</a>
            </div>
        </div>
    </div>
</nav>
<div class="container-fluid p-0">
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h2 style="margin-bottom: 20px" class="mb-0">
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, italy FROM languages where id=7";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[italy]";
                }
                mysqli_close($conn);
                ?>
            </h2>
            <div style="margin-top: 50px" class="mb-5">
                <p><strong>
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, italy FROM languages where id=8";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[italy]:";
                        }
                        mysqli_close($conn);
                        ?>
                    </strong>info@khi.fi.it</p>
                <p>
                    <strong>
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, italy FROM languages where id=9";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[italy]:";
                        }
                        mysqli_close($conn);
                        ?>
                    </strong> +39 055 24911-1
                </p>
            </div>
        </div>
    </section>
</div>
<?php include 'includes/footer.php' ?>

