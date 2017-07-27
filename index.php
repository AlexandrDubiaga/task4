<?php
include('Sql.php');
include('Mysql.php');
$conn = new Msql();
$sql = new Sql();
$x = $sql->select('SELECT')->table('nameSVT')->from('FROM')->nameDB('svt')->exec();
$result = $conn->getConn()->query($x);
while($row = mysqli_fetch_array($result)){
    echo $row['nameSVT']."<br>";
}

?>