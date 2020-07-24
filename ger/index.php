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
                $sql = "select id, germany FROM languages where id=17";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[germany]";
                }
                mysqli_close($conn);
                ?>
            </h2>
            <div style="height: 20px"></div>
            <p><?php
                require("../admin/connections/conn.php");
                $sql = "select id, germany FROM languages where id=6";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[germany]";
                }
                mysqli_close($conn);
                ?></p>

            <div style="height: 20px"></div>
            <form action="functions/reservation-step1.php" enctype="multipart/form-data" method="post" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label class="username">
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, germany FROM languages where id=18";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[germany]";
                        }
                        mysqli_close($conn);
                        ?>
                    </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">##</span>
                        </div>
                        <input type="text" name="codigo" class="form-control" id="Card Number" required>
                    </div>
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">
                    <?php
                    require("../admin/connections/conn.php");
                    $sql = "select id, germany FROM languages where id=2";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "$row[germany]";
                    }
                    mysqli_close($conn);
                    ?></button>
            </form>
        </div>
    </section>
</div>
<?php include 'includes/footer.php' ?>
