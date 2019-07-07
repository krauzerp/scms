<?php
  $file = $_POST['file'];
  $xml = simplexml_load_file('../../data/pages/'.$file);

  foreach($xml->row as $row)
  {
    echo '<div class="row">';
    foreach($row->block as $block)
    {
      switch ($block['type']) {
        case 'content':
          echo '<div class="col-sm-'.$block['cols'].' content" contenteditable="true" xml-data="'.$block['name'].'"></div>';
          break;
        case 'media':
          $xml_media = simplexml_load_file('../../data/content/'.$block['name']);
          echo '<div class="col-sm-'.$block['cols'].' media" xml-data="'.$block['name'].'">';
          echo '<img src="data/media/'.$xml_media['src'].'" style="width:100%">';
          echo '<small>'.$xml_media->caption.'</small>';
          echo '</div>';
          break;
      }
    }
    echo '</div>';
  }
?>
