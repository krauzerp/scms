<?php
function lastVersion($xml, $getDraft = false)
{
  $hasDraft = false;
  $last_version = 0;

  foreach($xml->text as $text) {
    if($text['version'] > $last_version || $text['version'] == 'draft') {
      if($text['version'] == 'draft')
      {
        $draft = $text;
        $hasDraft = true;
      } else
        $last_version = (int)$text['version'];
    }
  }

  if($hasDraft && $getDraft)
    return $draft;

  if($last_version == 0)
    foreach($xml->text as $text) {
      if($text['version'] == 'draft')
        return $text;
    }
  else
    foreach($xml->text as $text) {
      if($text['version'] == $last_version)
        return $text;
    }
}
?>
