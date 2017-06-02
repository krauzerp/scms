<?php

/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
$id = $_GET['id'];
/*
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

$sql = "SELECT * FROM content_deu WHERE id = $id;";

$res = $mysqli->query($sql);

$row = $res->fetch_assoc();
?>

<input type = "text" name = "header" value="<?php echo $row['header']?>">
<br/>
<input type = "text" name = "abstract" value="<?php echo $row['abstract']?>">
<br/>
<textarea name = "copy"><?php echo $row['copy']?></textarea >
