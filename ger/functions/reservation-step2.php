<?php
$id = intval($_REQUEST['id']);
$codigo = $_REQUEST['codigo'];
$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$email = $_REQUEST['email'];
$data = $_REQUEST['data'];
$periodo = $_REQUEST['periodo'];

require("../../admin/connections/conn.php");
$sql = "update reservas set codigo='$codigo',nome='$nome',sobrenome='$sobrenome',email='$email',data=DATE_FORMAT(STR_TO_DATE('$data', '%d/%m/%Y'), '%Y-%m-%d'),periodo='$periodo' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../reservation-confirm.php'>";
mysqli_close($conn);
?>

