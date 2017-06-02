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
