<?php
$id = intval($_REQUEST['id']);
$english = $_REQUEST['english'];
$germany = $_REQUEST['germany'];
$italy = $_REQUEST['italy'];

require("../connections/conn.php");
$sql = "update languages set english=\"$english\",germany=\"$germany\",italy=\"$italy\" where id='$id'";
if (!mysqli_query($conn,$sql))
{
    die('Error: ' . mysqli_error($conn));
}
echo "<meta http-equiv='refresh' content=0;url='../languages.php'>";
mysqli_close($conn);
?>

