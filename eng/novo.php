<?php include 'includes/header.php' ?>
<body id="page-top">
<?php include 'includes/logotipos.php' ?>

<div class="container menu-novo">
    <div class="row">
        <?php include 'includes/menu.php' ?>
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

<?php include 'includes/footer.php' ?>
