<?php

$xml_filename = "user_data.xml";

header('Content-type: text/xml');
header('Content-Disposition: attachment; filename=' . $xml_filename);
header("Pragma: no-cache");
header("Expires: 0");

ini_set('display_errors', 1);

$tab = "\t";
$br = "\n";
$xml = '<?xml version="1.0" encoding="UTF-8"?>'.$br;

$xml .= '<records>'.$br;

foreach($tables_data as $table => $table_data) {
  foreach ($table_data as $row => $column) {
    $xml .= $tab.'<' . $table . '>'.$br;
    foreach ($column as $key => $value) {
		  $xml.= $tab.$tab.'<'.$key.'>'.htmlspecialchars(($value)).'</'.$key.'>'.$br;
    }
    $xml .= $tab.'</' . $table . '>'.$br;
  }

}

$xml .= '</records>'.$br;

$handle = fopen('user_data.xml','w+');
fwrite($handle, $xml);
fclose($handle);

echo $xml;

unlink($xml_filename);

?>
