<h2>Pages</h2>
<table class="table">
<?php
$scms_page = '';
$xml = simplexml_load_file('data/site.xml');

foreach($xml->page as $page) {
  $xml_page = simplexml_load_file('data/pages/'.$page['name']);
    if($scms_page == $page['name'])
      echo '<tr><td class="active"><a href="#" xml-data="'.$page['name'].'">'.$xml_page['name'].'</a></td></tr>';
    else
      echo '<tr><td><a href="#" xml-data="'.$page['name'].'">'.$xml_page['name'].'</a></td></tr>';
}
?>
</table>
