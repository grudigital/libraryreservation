<?php include 'includes/header.php' ?>
<body id="page-top">
<?php include 'includes/logotipos.php' ?>
<div class="container menu-novo">
    <div class="row">
        <?php include 'includes/menu.php' ?>
        <div class="col-2" >
            <a class="botoes-idioma" href='../ger/reservation-step2.php'>
                <button>DE</button>
            </a>
            <a class="botoes-idioma" href='../eng/reservation-step2.php'>
                <button>EN</button>
            </a>
            <a class="botoes-idioma" href='../ita/reservation-step2.php'>
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
                $sql = "select id, italy FROM languages where id=17";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[italy]";
                }
                mysqli_close($conn);
                ?>            </h2>
            <div style="height: 20px"></div>
            <form action="functions/reservation-step2.php" enctype="multipart/form-data" method="post" class="needs-validation"
                  novalidate>

                <?php
                require("../admin/connections/conn.php");

                $pegaid = (int)$_GET['id'];
                $sql = "select * FROM usuarios where codigo = '$pegaid'";
                $result = mysqli_query($conn, $sql);
                $num_rows = mysqli_num_rows($result);

                $sqltitulo1 = $conn->query("select italy from languages where id = 27");
                $row1 = $sqltitulo1->fetch_row();

                $sqltitulo2 = $conn->query("select italy from languages where id = 28");
                $row2 = $sqltitulo2->fetch_row();

                $sqltitulo3 = $conn->query("select italy from languages where id = 29");
                $row3 = $sqltitulo3->fetch_row();

                $sqltitulo4 = $conn->query("select italy from languages where id = 30");
                $row4 = $sqltitulo4->fetch_row();

                $sqltitulo5 = $conn->query("select italy from languages where id = 31");
                $row5 = $sqltitulo5->fetch_row();

                $sqltitulo6 = $conn->query("select italy from languages where id = 32");
                $row6 = $sqltitulo6->fetch_row();

                $sqltitulo7 = $conn->query("select italy from languages where id = 33");
                $row7 = $sqltitulo7->fetch_row();

                $sqltitulo8 = $conn->query("select italy from languages where id = 34");
                $row8 = $sqltitulo8->fetch_row();

                $sqltitulo9 = $conn->query("select italy from languages where id = 35");
                $row9 = $sqltitulo9->fetch_row();

                if ($num_rows == 0) {
                    echo "<div class='alert alert-primary' role='alert'>";
                    echo "Card number \"".$pegaid."\" not registered. Contact the KHI.";
                    echo "</div>";
                } else {

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='mb-3'>";
                        echo "<label class='username'>$row1[0]</label>";
                        echo "<div class='input-group'>";
                        echo "<div class='input-group-prepend'>";
                        echo "<span class='input-group-text'>##</span>";
                        echo "</div>";
                        echo "<input type='text' name='codigo' value='$row[codigo]' class='form-control' id='Card Number'  readonly>";
                        echo "<div class='invalid-feedback'>Your Card Number is required.</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='row'>";
                        echo "<div class='col-md-6 mb-3'>";
                        echo "<label for='firstName'>$row2[0]</label>";
                        echo "<input type='text' name='nome' value='$row[nome]' class='form-control' id='firstName' readonly>";
                        echo "<div class='invalid-feedback'>Valid first name is required.</div>";
                        echo "</div>";
                        echo "<div class='col-md-6 mb-3'>";
                        echo "<label for='lastName'>$row3[0]</label>";
                        echo "<input type='text' name='sobrenome' value='$row[sobrenome]' class='form-control' id='lastName' readonly>";
                        echo " <div class='invalid-feedback'>Valid last name is required.</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='mb-3'>";
                        echo "<label for='email'>$row4[0]<span class='text-muted'></span></label>";
                        echo "<input type='email' name='email' class='form-control' id='email' required>";
                        echo "<div class='invalid-feedback'>Please enter a valid email address for shipping updates.</div>";
                        echo "</div>";
                        echo "<div class='mb-3'>";
                        echo "<label for='address'>$row5[0]</label>";
                        echo "<input type='text' name='data' id='datepicker'  class='form-control datepicker' autocomplete='off' required>";
                        echo "<div class='invalid-feedback'>Please enter your date.</div>";
                        echo "</div>";
                        echo "<h4 class='mb-3'>$row6[0]</h4>";
                        echo "<div class='d-block my-3'>";
                        echo "<div class='form-check'>";
                        echo "<input class='form-check-input' type='radio' name='periodo' id='exampleRadios1' value='1' checked>";
                        echo "<label class='form-check-label' for='exampleRadios1'>$row7[0]</label>";
                        echo "</div>";
                        echo "<div class='form-check'>";
                        echo "<input class='form-check-input' type='radio' name='periodo' id='exampleRadios2' value='2'>";
                        echo "<label class='form-check-label' for='exampleRadios2'>$row8[0]</label>";
                        echo "</div>";
//                        echo "<div class='form-check'>";
//                        echo "<input class='form-check-input' type='radio' name='periodo' id='exampleRadios2' value='3'>";
//                        echo "<label class='form-check-label' for='exampleRadios2'>Giorno intero (09:00-17:00)</label>";
//                        echo "</div>";
                        echo "<div class='custom-control custom-radio'>";
                        echo "<hr class='mb-4'>";
                        echo "<button class='btn btn-primary btn-lg btn-block' type='submit'>$row9[0]</button>";
                        echo "</div>";
                        echo "</div>";
                    }
                }

                mysqli_close($conn);
                ?>
                <?php
                require("../admin/connections/conn.php");

                $pegaid = (int)$_GET['id'];
                $sql = "select * FROM reservas where codigo = '$pegaid' order by id desc limit 1";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<input type='hidden' value='$row[id]' name='id'>";
                }
                mysqli_close($conn);
                ?>

            </form>
        </div>
    </section>
</div>
<?php include 'includes/footer.php' ?>
