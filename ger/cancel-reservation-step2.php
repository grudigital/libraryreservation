<?php include 'includes/header.php' ?>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <?php include 'includes/menu.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-sm flags-header">
                <a href="../ger/cancel-reservation-step2.php">DE</a>
            </div>
            <div class="col-sm flags-header">
                <a href="../eng/cancel-reservation-step2.php">EN</a>
            </div>
            <div class="col-sm flags-header">
                <a href="../ita/cancel-reservation-step2.php">IT</a>
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
            <table class='table'>
                <thead>
                <tr>
                    <th width='35%' scope='col'>
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, germany FROM languages where id=14";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[germany]";
                        }
                        mysqli_close($conn);
                        ?>
                    </th>
                    <th width='35%' scope='col'>
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, germany FROM languages where id=15";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[germany]";
                        }
                        mysqli_close($conn);
                        ?>
                    </th>
                    <th width='30%' scope='col'>
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, germany FROM languages where id=16";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[germany]";
                        }
                        mysqli_close($conn);
                        ?>
                    </th>
                </tr>
                </thead>
                <tbody>


                <?php
                require("../admin/connections/conn.php");
                $pegaid = (int)$_GET['codigo'];
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
                            echo "<td>Morgen</td>";
                        }
                        else if($row['periodo']=='2'){
                            echo "<td>Nachmittag</td>";
                        }
                        else{
                            echo "<td>Den ganzen Tag</td>";
                        }
                        echo "<td><a href='functions/cancel-step2.php?id=$row[id]'><button class='btn btn-danger btn-lg btn-block botao-cancelar' type='button'>Cancel Reservation</button></a></td>";
                        echo "</tr>";
                    }
                }
                mysqli_close($conn);
                ?>
                </tbody>
            </table>
            <div style="height: 20px"></div>

            <h2 style="margin-bottom: 20px" class="mb-0">
                <?php
                require("../admin/connections/conn.php");
                $sql = "select id, germany FROM languages where id=21";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "$row[germany]";
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
                        $sql = "select id, germany FROM languages where id=14";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[germany]";
                        }
                        mysqli_close($conn);
                        ?>
                    </th>
                    <th width='35%' scope='col'>
                        <?php
                        require("../admin/connections/conn.php");
                        $sql = "select id, germany FROM languages where id=15";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "$row[germany]";
                        }
                        mysqli_close($conn);
                        ?>
                    </th>

                </tr>
                </thead>
                <tbody>


                <?php
                require("../admin/connections/conn.php");
                $pegaid = (int)$_GET['codigo'];
                $sql = "select id, codigo, nome, sobrenome, email, date_format(data, '%d/%m/%Y') as datareserva, periodo, cadastroem FROM reservas where codigo = '$pegaid' and data != 'null' order by data desc";
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
                            echo "<td>Morgen</td>";
                        }
                        else if($row['periodo']=='2'){
                            echo "<td>Nachmittag</td>";
                        }
                        else{
                            echo "<td>Den ganzen Tag</td>";
                        }
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
