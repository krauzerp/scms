<?php
$fp = fopen('../data/content/'.$_POST['file'], 'w');
//
// remove style attributes
//
$data = $output = preg_replace('/(<[^>]+) style=".*?"/i', '$1', $_POST['data']);
//
// store changes
//
fwrite($fp, $data);
fclose($fp);
?>
