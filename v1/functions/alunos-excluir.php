<?php
$id = intval($_REQUEST['id']);

include("conn.php");

$result = mysqli_query($conn,"delete from usuarios where id = '$id' order by id DESC");

if ($result){
    echo "<meta http-equiv='refresh' content=0;url='../admin-alunos.php'>";
} else {
    echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>
