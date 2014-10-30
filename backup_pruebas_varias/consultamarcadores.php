<?php
$host = "localhost";
$user = "hidden";
$pass = "";

$databaseName = "database";
$tableName = "locations";


$con = mysql_connect($host, $user, $pass);
$dbs = mysql_select_db($databaseName, $con);

$result = mysql_query("SELECT * FROM $tableName");

$data = array();

while ($row = mysql_fetch_row($result)) {
    $data[] = $row;
}  

echo json_encode($data);
?>