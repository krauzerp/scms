<?php
if(file_exists('../data/content/'.$_POST['file']))
{
  echo file_get_contents('../data/content/'.$_POST['file']);
}
else
{
  echo "<h2>New Content Block</h2><p>...</p>";
}


?>
