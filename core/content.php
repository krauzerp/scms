<?php
  $file = $_POST['file'];
  $xml = simplexml_load_file('../data/pages/'.$file);

  foreach($xml->row as $row)
  {
    echo '<div class="row">';
    foreach($row->block as $block)
    {
      echo '<div class="col-sm-'.$block['cols'].' content" contenteditable="true" xml-data="'.$block['name'].'">'.$block['name'].'</div>';
    }
    echo '</div>';
  }
?>
