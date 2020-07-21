<?php include 'includes/header.php' ?>
<body id="page-top">
<?php include 'includes/menu.php' ?>
<div class="container-fluid p-0">
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

                if ($num_rows == 0) {
                    echo "<div class='alert alert-primary' role='alert'>";
                    echo "Card number \"".$pegaid."\" not registered. Contact the KHI.";
                    echo "</div>";
                } else {

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='mb-3'>";
                        echo "<label class='username'>Numero della carta KHI</label>";
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
                        echo "<label for='firstName'>Nome di battesimo</label>";
                        echo "<input type='text' name='nome' value='$row[nome]' class='form-control' id='firstName' readonly>";
                        echo "<div class='invalid-feedback'>Valid first name is required.</div>";
                        echo "</div>";
                        echo "<div class='col-md-6 mb-3'>";
                        echo "<label for='lastName'>Cognome</label>";
                        echo "<input type='text' name='sobrenome' value='$row[sobrenome]' class='form-control' id='lastName' readonly>";
                        echo " <div class='invalid-feedback'>Valid last name is required.</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='mb-3'>";
                        echo "<label for='email'>Posta <span class='text-muted'></span></label>";
                        echo "<input type='email' name='email' class='form-control' id='email'>";
                        echo "<div class='invalid-feedback'>Please enter a valid email address for shipping updates.</div>";
                        echo "</div>";
                        echo "<div class='mb-3'>";
                        echo "<label for='address'>Dati</label>";
                        echo "<input type='text' name='data' class='form-control datepicker' autocomplete='off' required>";
                        echo "<div class='invalid-feedback'>Please enter your date.</div>";
                        echo "</div>";
                        echo "<h4 class='mb-3'>Periodo</h4>";
                        echo "<div class='d-block my-3'>";
                        echo "<div class='form-check'>";
                        echo "<input class='form-check-input' type='radio' name='periodo' id='exampleRadios1' value='morning' checked>";
                        echo "<label class='form-check-label' for='exampleRadios1'>Mattina (9:00-12:00)</label>";
                        echo "</div>";
                        echo "<div class='form-check'>";
                        echo "<input class='form-check-input' type='radio' name='periodo' id='exampleRadios2' value='afternoon'>";
                        echo "<label class='form-check-label' for='exampleRadios2'>Pomeriggio (13:00-17:00)</label>";
                        echo "</div>";
//                        echo "<div class='form-check'>";
//                        echo "<input class='form-check-input' type='radio' name='periodo' id='exampleRadios2' value='day'>";
//                        echo "<label class='form-check-label' for='exampleRadios2'>Giorno intero (09:00-17:00)</label>";
//                        echo "</div>";
                        echo "<div class='custom-control custom-radio'>";
                        echo "<hr class='mb-4'>";
                        echo "<button class='btn btn-primary btn-lg btn-block' type='submit'>Riserva</button>";
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
