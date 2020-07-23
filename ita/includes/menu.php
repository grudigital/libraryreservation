   <a class="navbar-brand js-scroll-trigger" href="index.php">
        <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../assets/img/profile.jpg" alt="" /></span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
<!--            --><?php
//            require("../admin/connections/conn.php");
//            $sql = "select id, italy FROM languages where id=1";
//            $result = mysqli_query($conn, $sql);
//            while ($row = mysqli_fetch_assoc($result)) {
//                echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='index.php'>$row[italy]</a></li>";
//            }
//            mysqli_close($conn);
//            ?>

            <?php
            require("../admin/connections/conn.php");
            $sql = "select id, italy FROM languages where id=2";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='reserve.php'>$row[italy]</a></li>";
            }
            mysqli_close($conn);
            ?>

            <?php
            require("../admin/connections/conn.php");
            $sql = "select id, italy FROM languages where id=3";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='cancel-reservation.php'>$row[italy]</a></li>";
            }
            mysqli_close($conn);
            ?>

            <?php
            require("../admin/connections/conn.php");
            $sql = "select id, italy FROM languages where id=4";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li class='nav-item'><a class='nav-link js-scroll-trigger' href='contact.php'>$row[italy]</a></li>";
            }
            mysqli_close($conn);
            ?>
        </ul>
    </div>
