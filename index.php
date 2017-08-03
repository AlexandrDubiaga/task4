<?php
include('Sql.php');
include('Mysql.php');
include('PosgSql.php');


$sql = new Sql();

?>

<h1>Postgres</h1><br>
<?php
//$postgre = new PosgSql();
//$postGres = $postgre->select('data')->from('pg_test')->where('key','user10')->exec();
//$result = pg_query("$postGres");

echo "<br>";
echo "<br>";
?>
<h1>Mysql</h1><br>
<?php
$conn = new Msql();
$connect = $conn->getConn();
$mysql = $conn->insert('MY_TEST',array('key','data')->values(array('hosting_max','user2'))->exec("INSERT");
var_dump($mysql);
/*$result = mysql_query("$mysql");
while($row = mysql_fetch_array($result,MYSQL_ASSOC))
{
  echo $row['key']." ".$row['data']."<br>";
}*/
echo "<br>";
echo "<br>";


?>
