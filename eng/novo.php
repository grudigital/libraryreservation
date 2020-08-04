<?php include 'includes/header.php' ?>
<body id="page-top">
<!--<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">-->
<!--    --><?php //include 'includes/menu.php' ?>
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-sm flags-header">-->
<!--                <a href="../ger/index.php">DE</a>-->
<!--            </div>-->
<!--            <div class="col-sm flags-header">-->
<!--                <a href="../eng/index.php">EN</a>-->
<!--            </div>-->
<!--            <div class="col-sm flags-header">-->
<!--                <a href="../ita/index.php">IT</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->

<!--Bloco header-->
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

<div class="container menu-novo">
    <div class="row">
        <div class="col-10">
        <ul>
            <?php
            require("../admin/connections/conn.php");
            $sql = "select id, english FROM languages where id=2";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='reserve.php'>";
                echo "<button>$row[english]</button>";
                echo "</a>";
            }
            mysqli_close($conn);
            ?>

            <?php
            require("../admin/connections/conn.php");
            $sql = "select id, english FROM languages where id=3";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='cancel-reservation.php'>";
                echo "<button>$row[english]</button>";
                echo "</a>";
            }
            mysqli_close($conn);
            ?>
            <?php
            require("../admin/connections/conn.php");
            $sql = "select id, english FROM languages where id=4";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<a href='contact.php'>";
                echo "<button>$row[english]</button>";
                echo "</a>";
            }
            mysqli_close($conn);
            ?>
        </ul>
    </div>
        <div class="col-2" >
            <a class="botoes-idioma" href='../ger/index.php'>
            <button>DE</button>
           </a>
            <a class="botoes-idioma" href='../eng/index.php'>
                <button>EN</button>
            </a>
            <a class="botoes-idioma" href='../ita/index.php'>
                <button>IT</button>
            </a>
        </div>
    </div>
</div>

<div style="border-top: solid 1px #dcdcdc;"></div>
<!--Bloco header-->


<div class="container conteudo-projeto">
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h2 style="margin-bottom: 20px" class="mb-0">
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, english FROM languages where id=17";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[english]";
                }
                mysqli_close($conn);
                ?>
            </h2>
            <div style="height: 20px"></div>
            <p><?php
                require("../admin/connections/conn.php");
                $sql = "select id, english FROM languages where id=6";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[english]";
                }
                mysqli_close($conn);
                ?></p>

            <div style="height: 20px"></div>

            <form action="functions/reservation-step1.php" enctype="multipart/form-data" method="post"
                  class="needs-validation" novalidate>
                <div class="mb-3">
                    <label class="username">
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, english FROM languages where id=18";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[english]";
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
                <div class="mb-3">
                    <label class="username">
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, english FROM languages where id=29";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[english]";
                        }
                        mysqli_close($conn);
                        ?>
                    </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">##</span>
                        </div>
                        <input type="text" name="sobrenome" class="form-control" id="sobrenome" required>
                    </div>

                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">
                    <?php
                    require("../admin/connections/conn.php");
                    $sql = "select id, english FROM languages where id=2";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "$row[english]";
                    }
                    mysqli_close($conn);
                    ?></button>
            </form>
        </div>
    </section>
</div>

<section style="height: 100px; background-color: #f2f2f2">
<div class="container">
    <div class="row">
        <div style="margin-top: 30px" class="col-4">
            <img style="float: left; margin-right:20px" src="../assets/img/facebook.png">
            <img style="float: left; margin-right:20px" src="../assets/img/twitter.png">
            <img style="float: left" src="../assets/img/vimeo.png">
        </div>
        <div style="font-size:30px; font-weight: bold; margin-top: 25px; color:#424242" class="col-8">
           Für den Newsletter anmelden
        </div>
    </div>
</div>
</section>
<section style="height: 60px; background-color: #424242">
<div class="container">
    <div class="row">
        <div style="text-align: center; padding-top:15px; color:#f2f2f2 " class="col-12">
        Kunsthistorisches Institut in Florenz. All rights reserved
        </div>
    </div>
</div>
</section>

<?php include 'includes/footer.php' ?>
