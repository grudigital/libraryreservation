<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "libraryreservation";

//$servidor = "localhost";
//$usuario = "grudit09_prod";
//$senha = "2423*Wxci290989";
//$dbname = "grudit09_libraryreservation";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die("Falha na conexao: " . mysqli_connect_error());
}else{
    //echo "Conexao realizada com sucesso";
}
?>


