<?php
/*
*
* establish DB connection
*
*/
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_pw = "root";
$mysql_db = "smart_cms";

$mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pw, $mysql_db);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$lng = 'deu';


$sql = "SELECT * FROM page_deu WHERE 1;";
$res = $mysqli->query($sql);
echo "<ul>";
while($row = $res->fetch_assoc()) {
  echo '<li>['.$row['id'].'] '.$row['header'].'</li>';
}
echo "</ul>"
?>
