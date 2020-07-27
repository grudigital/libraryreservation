<?php
$codigo = $_REQUEST['codigo'];
$sobrenome = $_REQUEST['sobrenome'];
require("../../admin/connections/conn.php");

/*Validacao de codigo / nome*/
$validacaocodigosobrenome = "select * from usuarios where codigo = '$codigo' and sobrenome = '$sobrenome'";
$resultcodigosobrenome = mysqli_query($conn, $validacaocodigosobrenome);
$num_rowscodigosobrenome = mysqli_num_rows($resultcodigosobrenome);

if ($num_rowscodigosobrenome == 'null') {
    echo "<meta http-equiv='refresh' content=0;url='../reservation-cancel-divergent.php'>";
} else {
    /*Validacao de codigo / nome*/

    $sql = "select * from reservas where codigo = $_POST[codigo]";
    $resultados = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($resultados);

    if ($num_rows = 0) {
        echo "<meta http-equiv='refresh' content=0;url='../cancel-reservation-not-exist.php?codigo=$codigo'>";
    } else {
        echo "<meta http-equiv='refresh' content=0;url='../cancel-reservation-step2.php?codigo=$codigo'>";
    }
}
mysqli_close($conn);
?>

