<?php
$codigo = $_REQUEST['codigo'];
require ("conn.php");

$sql="select * from reservas where codigo = $_POST[codigo]";
$resultados = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($resultados);

if($num_rows = 0){
    echo "<meta http-equiv='refresh' content=0;url='../cancelreservationnaoexiste.php?codigo=$codigo'>";
} else{
    echo "<meta http-equiv='refresh' content=0;url='../cancel-reservation-step2.php?codigo=$codigo'>";
}

mysqli_close($conn);
?>

