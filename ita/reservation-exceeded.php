<?php include 'includes/header.php' ?>
<body id="page-top">
<?php include 'includes/logotipos.php' ?>
<div class="container menu-novo">
    <div class="row">
        <?php include 'includes/menu.php' ?>
        <div class="col-2" >
            <a class="botoes-idioma" href='../ger/reservation-exceeded.php'>
                <button>DE</button>
            </a>
            <a class="botoes-idioma" href='../eng/reservation-exceeded.php'>
                <button>EN</button>
            </a>
            <a class="botoes-idioma" href='../ita/reservation-exceeded.php'>
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
                ?>
            </h2>
            <div style="height: 20px"></div>
            <div class="alert alert-danger" role="alert">
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, italy FROM languages where id=22";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[italy]";
                }
                mysqli_close($conn);
                ?>
            </div>


            <div style="height: 20px"></div>
            <h2 style="margin-bottom: 20px" class="mb-0">
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, italy FROM languages where id=10";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[italy]";
                }
                mysqli_close($conn);
                ?>
            </h2>
            <div style="height: 20px"></div>
            <table class='table'>
                <thead>
                <tr>
                    <th width='35%' scope='col'>
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, italy FROM languages where id=14";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[italy]";
                        }
                        mysqli_close($conn);
                        ?>
                    </th>
                    <th width='35%' scope='col'>
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, italy FROM languages where id=15";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[italy]";
                        }
                        mysqli_close($conn);
                        ?>
                    </th>
                    <th width='30%' scope='col'>
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, italy FROM languages where id=16";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[italy]";
                        }
                        mysqli_close($conn);
                        ?>
                    </th>
                </tr>
                </thead>
                <tbody>


                <?php
                require("../admin/connections/conn.php");
                $pegaid = (int)$_GET['id'];
                if (date('H') < 15) {
                    $sql = "select id, codigo, nome, sobrenome, email, date_format(data, '%d/%m/%Y') as datareserva, periodo, cadastroem FROM reservas where codigo = '$pegaid' AND data > CURDATE()";
                }else{
                    $sql = "select id, codigo, nome, sobrenome, email, date_format(data, '%d/%m/%Y') as datareserva, periodo, cadastroem FROM reservas where codigo = '$pegaid' AND data > DATE_SUB(CURRENT_DATE(),INTERVAL -1 DAY)";
                }
                $result = mysqli_query($conn, $sql);
                $num_rows = mysqli_num_rows($result);
                if ($num_rows == 0) {
                    echo "<div class='alert alert-danger' role='alert'>";
                    echo "There are no scheduling records with the code entered!";
                    echo "</div>";
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>$row[datareserva]</td>";
                        if($row['periodo']=='1'){
                            echo "<td>Mattina</td>";
                        }
                        else if($row['periodo']=='2'){
                            echo "<td>Pomeriggio</td>";
                        }
                        else{
                            echo "<td>Tutto il giorno</td>";
                        }
                        echo "<td><a href='functions/cancel-step2.php?id=$row[id]'><button class='btn btn-danger btn-lg btn-block botao-cancelar' type='button'>Annulla prenotazione</button></a></td>";
                        echo "</tr>";
                    }
                }
                mysqli_close($conn);
                ?>
                </tbody>
            </table>



        </div>
    </section>
</div>
<?php include 'includes/footer.php' ?>
