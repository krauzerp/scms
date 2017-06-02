<?php
require('../func_lastVersion.php');

$file = '../../data/content/'.$_POST['file'];
$data = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $_POST['data']);

$data = strip_tags($data, '<h1><h2><h3><p><i><b><u><br><span>');
//
// store changes
//
if(file_exists($file)){
  $xml = simplexml_load_file($file);

  $xml_last = lastVersion($xml);

  if($xml_last[0] != $data)
  {
      if($xml_last['version'] == 'draft')
        $xml_last[0] = $data;
      else {
        $text = $xml->addChild('text');
        $text['version'] = 'draft';
        $text[0] = $data;
      }
  }
} else {
  $xml = new SimpleXMLElement('<content></content>');
  $text = $xml->addChild('text');
  $text['version'] = 'draft';
  $text[0] = $data;
}
$xml->asXML($file);
?>
