<?php
//$servidor = "localhost";
//$usuario = "grudigital";
//$senha = "grudigital";
//$dbname = "libraryreservation";

//$servidor = "localhost";
//$usuario = "grudit09_prod";
//$senha = "2423*Wxci290989";
//$dbname = "grudit09_libraryreservation";

$servidor = "localhost";
$usuario = "grudigital";
$senha = "grudigital";
$dbname = "libraryreservation";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die("Falha na conexao: " . mysqli_connect_error());
}else{
}
?>


