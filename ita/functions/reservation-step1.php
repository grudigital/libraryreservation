<?php
$codigo = $_REQUEST['codigo'];
$sobrenome = $_REQUEST['sobrenome'];
require("../../admin/connections/conn.php");

$validacaoquantidade = "select * from reservas where codigo = '$codigo' and data between NOW() and DATE_ADD(NOW(), INTERVAL 8 DAY)";
$result2 = mysqli_query($conn, $validacaoquantidade);
$num_rows2 = mysqli_num_rows($result2);

if ($num_rows2 >= '4') {
    echo "<meta http-equiv='refresh' content=0;url='../reservation-exceeded.php?id=$codigo'>";
} else {

    /*Validacao de codigo / nome*/
    $validacaocodigosobrenome = "select * from usuarios where codigo = '$codigo' and sobrenome = '$sobrenome'";
    $resultcodigosobrenome = mysqli_query($conn, $validacaocodigosobrenome);
    $num_rowscodigosobrenome = mysqli_num_rows($resultcodigosobrenome);

    if ($num_rowscodigosobrenome == 'null') {
        echo "<meta http-equiv='refresh' content=0;url='../reservation-exceeded-divergent.php'>";
    } else {
        /*Validacao de codigo / nome*/

        $sql = "INSERT INTO reservas (codigo,cadastroem) VALUES ('$_POST[codigo]',now())";
        if (!mysqli_query($conn, $sql)) {
            die('Error: ' . mysqli_error($conn));
        }
        echo "<meta http-equiv='refresh' content=0;url='../reservation-step2.php?id=$codigo'>";
        mysqli_close($conn);
    }
}
?>

