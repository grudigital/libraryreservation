<?php include 'includes/header.php' ?>
<body id="page-top">
<?php include 'includes/menu.php' ?>
<div class="container-fluid p-0">
    <section class="resume-section" id="about">
        <div class="resume-section-content">
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
                $pegaid = (int)$_GET['codigo'];
                $sql = "select * FROM reservas where codigo = '$pegaid'";
                $result = mysqli_query($conn, $sql);
                $num_rows = mysqli_num_rows($result);
                if ($num_rows == 0) {
                    echo "<div class='alert alert-danger' role='alert'>";
                    echo "There are no scheduling records with the code entered!";
                    echo "</div>";
                } else {


                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>$row[data]</td>";
                        echo "<td>$row[periodo]</td>";
                        echo "<td><a href='functions/cancel-step2.php?id=$row[id]'><button class='btn btn-danger btn-lg btn-block botao-cancelar' type='button'>Cancel Reservation</button></a></td>";
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