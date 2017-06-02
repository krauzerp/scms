<?php
if (!isset($_GET['id'])) {
  $_GET['id'] = 1;
}
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

$sql = "SELECT * FROM page_deu WHERE id=$id;";

$res = $mysqli->query($sql);

$row = $res->fetch_assoc();

echo '<h1>'.$row['header'].'</h1>';

$sql = "SELECT * FROM page_content_deu WHERE page_id=$id;";

$res = $mysqli->query($sql);

echo '<div id="penedit">';

while($obj = $res->fetch_object())
{
  echo '<h2>'.$obj->header.'</h2>';
  echo '<p><i>'.$obj->abstract.'</i></p>';
  echo '<p>'.$obj->copy.'</p>';
}
echo '</div>';
?>
<script>
var editor = new Pen('#penedit');

</script>
