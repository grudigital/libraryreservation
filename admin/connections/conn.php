<?php

//ambiente homologação
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "libraryreservation";

//ambiente produção
//$servidor = "localhost";
//$usuario = "grudigital";
//$senha = "grudigital";
//$dbname = "libraryreservation";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die("Falha na conexao: " . mysqli_connect_error());
}else{
}
?>


