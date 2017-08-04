<?php
include('Sql.php');
include('Mysql.php');
include('PosgSql.php');


$sql = new Sql();

$postgre = new PosgSql();

?>
<h1>Postgres Insert</h1><br>
<?php
/*
$value = array('user10','zolo');
$pgInsert = $postgre->insert('pg_test')->values($value)->exec("INSERT");
$postInsertStr = str_replace('`',' ',$pgInsert);
pg_query("$postInsertStr");*/
?>
<h1>Postgres Update</h1><br>
<?php
$updatePostgre = array('Connor','Dallas');
$updatePg = $conn->update('pg_test')->set($updatePostgre)->where('key','user10')->exec("UPDATE");
$pgUpdate = str_replace('`',' ',$updatePg);
$resUpdatePg = pg_query("$pgUpdate");
if($resUpdatePg)
{
  echo "UPDATE";
}*/

?>

<h1>Postgres Select</h1><br>
<?php

$valuesPoStgre = array('key','data');
$postGres = $postgre->select($valuesPoStgre)->from('pg_test')->where('key','user10')->exec("SELECT");
$postGresStr = str_replace('`',' ',$postGres);
$result = pg_query("$postGresStr");
while($row = pg_fetch_array($result))
{
  echo $row['key']." ".$row['data']."<br>";
}

echo "<br>";
echo "<br>";
?>
<?php
$conn = new Msql();
$connect = $conn->getConn();
/*$value = array('alex','cardo');
$mysql = $conn->insert('MY_TEST')->values($value)->exec("INSERT");
mysql_query("$mysql");
*/
echo "<br>";
echo "<br>";
?>
<h1>Mysql</h1><br>
<?php

$valuesMysql = array('key','data');
$mysql = $conn->select($valuesMysql)->from('MY_TEST')->where('key','alex')->exec("SELECT");
$res = mysql_query("$mysql");

while($row = mysql_fetch_array($res,MYSQL_ASSOC))
{
  echo $row['key']." ".$row['data']."<br>";
}
?>
<?php
echo "<br>";
echo "<br>";
?>
<h1>UPDATE</h1><br>
<?php
/*$updateData = array('Connor','Dallas');
$update = $conn->update('MY_TEST')->set($updateData)->where('key','solo')->exec("UPDATE");
$resUpdate = mysql_query("$update");
if($resUpdate)
{
  echo "UPDATE";
}*/
  echo "<br>";
  echo "<br>";
 

?>

<h3>DELETE</h3><br>
<?php
/*$delete = $conn->delete()->from('MY_TEST')->where('key','alex')->exec("DELETE");
$resDelete = mysql_query("$delete");
if($resDelete)
{
  echo "Deleted";
}
*/
?>
