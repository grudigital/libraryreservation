<?php include 'includes/header.php' ?>
<body id="page-top">
<?php include 'includes/logotipos.php' ?>
<div class="container menu-novo">
    <div class="row">
        <?php include 'includes/menu.php' ?>
        <div class="col-2" >
            <a class="botoes-idioma" href='../ger/cancel-reservation.php'>
                <button>DE</button>
            </a>
            <a class="botoes-idioma" href='../eng/cancel-reservation.php'>
                <button>EN</button>
            </a>
            <a class="botoes-idioma" href='../ita/cancel-reservation.php'>
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
                $sql = "select id, english FROM languages where id=10";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[english]";
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
                        $sql = "select id, english FROM languages where id=11";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[english]";
                        }
                        mysqli_close($conn);
                        ?>
                        <span class='text-muted'></span></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">##</span>
                        </div>
                        <input type="text" name="codigo" placeholder="KHI Card Number" class="form-control"
                               id="email" required>
                    </div>
                    <br/>
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
                            <input type="text" name="sobrenome" class="form-control" id="sobrenome" required>
                        </div>

                    </div>
                    <br/>

                    <button class="btn btn-danger btn-lg btn-block" type="submit">
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, english FROM languages where id=12";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[english]";
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
