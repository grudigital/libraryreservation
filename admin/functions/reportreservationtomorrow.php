<?php
$dadosXls  = "";
$dadosXls .= "  <table border='1' >";
$dadosXls .= "          <tr>";
$dadosXls .= "          <th>Id</th>";
$dadosXls .= "          <th>Name</th>";
$dadosXls .= "          <th>Surname</th>";
$dadosXls .= "          <th>Mail</th>";
$dadosXls .= "          <th>Date</th>";
$dadosXls .= "          <th>Period</th>";
$dadosXls .= "          <th>Scheduled on</th>";
$dadosXls .= "      </tr>";
include_once('../connections/report.php');
$pdo = new Conexao();
$result = $pdo->select("SELECT id,nome,sobrenome,email,data,periodo,cadastroem FROM reservas where data=CURRENT_DATE +1");
foreach($result as $res){
    $dadosXls .= "      <tr>";
    $dadosXls .= "          <td>".$res['id']."</td>";
    $dadosXls .= "          <td>".$res['nome']."</td>";
    $dadosXls .= "          <td>".$res['sobrenome']."</td>";
    $dadosXls .= "          <td>".$res['email']."</td>";
    $dadosXls .= "          <td>".$res['data']."</td>";
    $dadosXls .= "          <td>".$res['periodo']."</td>";
    $dadosXls .= "          <td>".$res['cadastroem']."</td>";
    $dadosXls .= "      </tr>";
}
$dadosXls .= "  </table>";

$arquivo = "tomorrowreservation.xls";
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$arquivo.'"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');

echo $dadosXls;
exit;
?>