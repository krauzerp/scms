<?php 
  $xml = simplexml_load_file('data/pages/'.$scms_page);

  foreach($xml->row as $row)
  {
    echo '<div class="row">';
    foreach($row->block as $block)
    {
      echo '<div class="col-sm-'.$block['cols'].'">';
      include('data/content/'.$block['name']);
      echo '</div>';
    }
    echo '</div>';
  }
?>
