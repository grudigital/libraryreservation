<?php
require ("conn.php");

$sql="INSERT INTO usuarios (codigo,nome,sobrenome,cadastroem) VALUES ('$_POST[codigo]','$_POST[nome]','$_POST[sobrenome]',now())";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../admin-alunos.php'>";
mysqli_close($conn);
?>


