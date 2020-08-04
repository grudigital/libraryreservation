<?php include 'includes/header.php' ?>
<body id="page-top">
<?php include 'includes/logotipos.php' ?>
<div class="container menu-novo">
    <div class="row">
        <?php include 'includes/menu.php' ?>
        <div class="col-2" >
            <a class="botoes-idioma" href='../ger/contact.php'>
                <button>DE</button>
            </a>
            <a class="botoes-idioma" href='../eng/contact.php'>
                <button>EN</button>
            </a>
            <a class="botoes-idioma" href='../ita/contact.php'>
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
                $sql = "select id, germany FROM languages where id=7";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[germany]";
                }
                mysqli_close($conn);
                ?>
            </h2>
            <div style="margin-top: 50px" class="mb-5">
                <p><strong>
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, germany FROM languages where id=8";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[germany]:";
                        }
                        mysqli_close($conn);
                        ?>
                    </strong><?php
                    require("../admin/connections/conn.php");
                    $sql = "select id, germany FROM languages where id=24";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "$row[germany]";
                    }
                    mysqli_close($conn);
                    ?></p>
                <p>
                    <strong>
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, germany FROM languages where id=9";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[germany]:";
                        }
                        mysqli_close($conn);
                        ?>
                    </strong>
                    <?php
                    require("../admin/connections/conn.php");
                    $sql = "select id, germany FROM languages where id=25";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "$row[germany]";
                    }
                    mysqli_close($conn);
                    ?>
                </p>
            </div>
        </div>
    </section>
</div>
<?php include 'includes/footer.php' ?>

