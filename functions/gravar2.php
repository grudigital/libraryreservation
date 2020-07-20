<?php
$id = intval($_REQUEST['id']);
$codigo = $_REQUEST['codigo'];
$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$email = $_REQUEST['email'];
$data = $_REQUEST['data'];
$periodo = $_REQUEST['periodo'];

require("conn.php");
$sql = "update reservas set codigo='$codigo',nome='$nome',sobrenome='$sobrenome',email='$email',data='$data',periodo='$periodo' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../reservaconfirmada.php'>";
mysqli_close($conn);
?>

