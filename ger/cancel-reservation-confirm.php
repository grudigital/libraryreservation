<?php include 'includes/header.php' ?>
<body id="page-top">
<?php include 'includes/menu.php' ?>
<div class="container-fluid p-0">
    <!-- About-->
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
                ?>            </h2>
            <div style="height: 20px"></div>

            <div class="alert alert-danger" role="alert">
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, germany FROM languages where id=13";
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
<?php include 'includes/footer.php' ?>
