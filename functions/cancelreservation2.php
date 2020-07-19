<?php
$id = intval($_REQUEST['id']);

include("conn.php");

$result = mysqli_query($conn,"delete from reservas where id = '$id' order by id DESC");

if ($result){
    echo "<meta http-equiv='refresh' content=0;url='../reservar3.php'>";
} else {
    echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>
