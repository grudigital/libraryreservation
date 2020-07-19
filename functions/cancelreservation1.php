<?php
$codigo = $_REQUEST['codigo'];
require ("conn.php");

$sql="Select * from reservas where codigo = $_POST[codigo]";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../cancelreservation.php?codigo=$codigo'>";
mysqli_close($conn);
?>

