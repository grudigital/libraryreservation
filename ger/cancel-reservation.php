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
                $sql = "select id, germany FROM languages where id=10";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[germany]";
                }
                mysqli_close($conn);
                ?>
            </h2>
            <div style="height: 20px"></div>
            <form action="functions/cancel-step1.php" enctype="multipart/form-data" method="post"
                  class="needs-validation" novalidate>
                <div>
                    <label for="cancel">
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, germany FROM languages where id=11";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[germany]";
                        }
                        mysqli_close($conn);
                        ?>
                        <span class='text-muted'></span></label>
                    <input type="text" name="codigo" placeholder="KHI Card Number" class="form-control"
                           id="email" required>
                    <br/>
                    <button class="btn btn-danger btn-lg btn-block" type="submit">
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, germany FROM languages where id=12";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[germany]";
                        }
                        mysqli_close($conn);
                        ?>
                    </button>
                </div>
            </form>
        </div>
    </section>
</div>
<?php include 'includes/footer.php' ?>
