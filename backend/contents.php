

$sql = "SELECT * FROM page_content_deu WHERE page_id=$id;";

$res = $mysqli->query($sql);

while($obj = $res->fetch_object())
{
  echo '<h2>'.$obj->header.'</h2>';
  echo '<p><i>'.$obj->abstract.'</i></p>';
  echo '<p>'.$obj->copy.'</p>';
}
?>
