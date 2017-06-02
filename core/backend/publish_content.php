<?php
$file = $_POST['file'];

$xml_page = simplexml_load_file('../../data/pages/'.$file);

$blocks = $xml_page->xpath('//block');

foreach($blocks as $block) {
  $xml_block = simplexml_load_file('../../data/content/'.$block['name']);

  $last_version = 0;

  foreach($xml_block->text as $text) {
    if($text['version'] > $last_version && $text['version'] != 'draft') {
      $last_version = (int)$text['version'];
    }
  }

  foreach($xml_block->text as $text) {
    if($text['version'] == 'draft') {
      $date = date('Y/m/d H:i:s');

      $text['version'] = $last_version + 1;
      $text['date'] = $date;

      $xml_block['date'] = $date;
      $xml_block->asXML('../../data/content/'.$block['name']);

      $xml_page['date'] = $date;
      $xml_page->asXML('../../data/pages/'.$file);
    }
  }
}
?>
<table class="table">
<?php
$xml = simplexml_load_file('../../data/site.xml');

foreach($xml->page as $page) {
  $xml_page = simplexml_load_file('../../data/pages/'.$page['name']);
  $draft = false;

  $blocks = $xml_page->xpath('//block');

  foreach($blocks as $block) {
    $xml_block = simplexml_load_file('../../data/content/'.$block['name']);

    $xml_draft = $xml_block->xpath("//text[@version='draft']");

    if($xml_draft != null) {
      $draft = true;
    }
  }
  if($draft)
    echo '<tr><td><a href="#" publish-data="'.$page['name'].'">'.$xml_page['name'].'</a></td></tr>';
}
?>
</table>
