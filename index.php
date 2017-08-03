<?php
include('Sql.php');
include('Mysql.php');
$conn = new Msql();
$sql = new Sql();
$connect = $conn->getConn();
$str = $sql->select('data')->from('MY_TEST')->where('key','user2')->exec();

while($row = mysql_fetch_array($str))
{
  echo $row['key']." ".$row['data'];
}


?>
