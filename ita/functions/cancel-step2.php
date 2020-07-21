<?php
$id = intval($_REQUEST['id']);

require("../../admin/connections/conn.php");

$result = mysqli_query($conn,"delete from reservas where id = '$id' order by id DESC");

if ($result){
    echo "<meta http-equiv='refresh' content=0;url='../cancel-reservation-confirm.php'>";
} else {
    echo json_encode(array('msg'=>'Erro ao remover dados.'));
}
?>
