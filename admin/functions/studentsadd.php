<?php
require ("../connections/conn.php");

$sql="INSERT INTO usuarios (codigo,nome,sobrenome,aceite,cadastroem) VALUES ('$_POST[codigo]','$_POST[nome]','$_POST[sobrenome]','$_POST[aceite]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../students.php'>";
mysqli_close($conn);
?>


