<?php
include('Sql.php');
include('Mysql.php');
$conn = new Msql();
$sql = new Sql();
$str = $sql->select('data')->from('MY_TEST')->where('key','user2')->exec();
var_dump($str);
$connect = $conn->getConn();
/*while($row = mysql_fetch_array($str))
{
  echo $row['key']." ".$row['data'];
}*/


?>
