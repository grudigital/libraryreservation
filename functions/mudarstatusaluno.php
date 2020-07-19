<?php
$id = intval($_REQUEST['id']);


require("conn.php");
$sql = "update usuarios set aceite='2' where id=$id";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../admin-alunos.php'>";
mysqli_close($conn);
?>
