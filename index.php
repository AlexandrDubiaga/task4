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
<?php
$conn = new Msql();
$connect = $conn->getConn();
$value = array('alex','cardo');
$mysql = $conn->insert('MY_TEST')->values($value)->exec("INSERT");
mysql_query("$mysql");

echo "<br>";
echo "<br>";
?>
<h1>Mysql</h1><br>
<?php

$valuesMysql = array('key','data');
$mysql = $conn->select($valuesMysql)->from('MY_TEST')->where('key','solo')->exec("SELECT");
$res = mysql_query("$mysql");

while($row = mysql_fetch_array($res,MYSQL_ASSOC))
{
  echo $row['key']." ".$row['data']."<br>";
}

<?php
echo "<br>";
echo "<br>";
?>
<h1>UPDATE/h1><br>
<?php

$updateData = array('Connor','Dallas');
$mysql = $conn->update('MY_TEST')->set('MY_TEST')->where('key','solo')->exec("UPDATE");
$res = mysql_query("$mysql");
if($res)
{
  echo "UPDATE";
}

?>
