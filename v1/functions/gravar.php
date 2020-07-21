<?php
require ("conn.php");

$sql="INSERT INTO reservas (codigo,nome,email,data,periodo,cadastroem) VALUES ('$_POST[codigo]','$_POST[nome]','$_POST[email]','$_POST[data]','$_POST[periodo]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../_index.php'>";
mysqli_close($conn);
?>

