<?php
$id = intval($_REQUEST['id']);
$codigo = $_REQUEST['codigo'];
$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$email = $_REQUEST['email'];
$data = $_REQUEST['data'];
$periodo = $_REQUEST['periodo'];

require("../../admin/connections/conn.php");

$validacaodia = "select * from reservas where codigo = '$codigo' and data=DATE_FORMAT(STR_TO_DATE('$data', '%d/%m/%Y'), '%Y-%m-%d') and periodo = '$periodo'";
$result2 = mysqli_query($conn, $validacaodia);
$num_rows2 = mysqli_num_rows($result2);

if($num_rows2 >= '1'){
    echo "<meta http-equiv='refresh' content=0;url='../reservation-exceeded2.php'>";

}else {

$sql = "update reservas set codigo='$codigo',nome='$nome',sobrenome='$sobrenome',email='$email',data=DATE_FORMAT(STR_TO_DATE('$data', '%d/%m/%Y'), '%Y-%m-%d'),periodo='$periodo' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../reservation-confirm.php'>";
mysqli_close($conn);
}
?>

