<?php
require ("conn.php");

$sql="INSERT INTO admin (nome,email,senha,cadastroem) VALUES ('$_POST[nome]','$_POST[email]',MD5('$_POST[senha]'),now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../admin-administradores.php'>";
mysqli_close($conn);
?>


