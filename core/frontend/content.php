<?php

require('core/func_lastVersion.php');

  $xml = simplexml_load_file('data/pages/'.$scms_page);

  foreach($xml->row as $row)
  {
    echo '<div class="row">';
    foreach($row->block as $block)
    {
      echo '<div class="col-sm-'.$block['cols'].'">';

      switch($block['type'])
      {
        case 'content':
          $xml_content = simplexml_load_file('data/content/'.$block['name']);

          $content = lastVersion($xml_content);

          if($content['version'] == 'draft')
            echo '<div style="background: coral">';

          echo $content[0];

          if($content['version'] == 'draft')
            echo '</div>';

          break;
        case 'media':
          $xml_media = simplexml_load_file('data/content/'.$block['name']);
          echo '<img src="data/media/'.$xml_media['src'].'" style="width:100%">';
          echo '<small>'.$xml_media->caption.'</small>';
          break;
      }
      echo '</div>';
    }
    echo '</div>';
  }
?>
