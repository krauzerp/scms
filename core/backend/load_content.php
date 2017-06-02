<?php
require('../func_lastVersion.php');

$file = '../../data/content/'.$_POST['file'];

if(file_exists($file))
{
  $xml = simplexml_load_file($file);

  $content = lastVersion($xml, true);

  if($content['version'] == 'draft')
    echo '<div style="background: coral">';

  echo $content[0];

  if($content['version'] == 'draft')
    echo '</div>';
}
else
{
  echo "<h2>New Content Block</h2><p>...</p>";
}
?>
