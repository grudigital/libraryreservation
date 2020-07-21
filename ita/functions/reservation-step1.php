<?php
$codigo = $_REQUEST['codigo'];
require("../../admin/connections/conn.php");

$sql="INSERT INTO reservas (codigo,cadastroem) VALUES ('$_POST[codigo]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../reservation-step2.php?id=$codigo'>";
mysqli_close($conn);
?>

