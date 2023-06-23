<?php
$xmlString = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<root>
  <person>
    <name>John Doe</name>
    <age>30</age>
    <city>New York</city>
  </person>
  <person>
    <name>Jane Smith</name>
    <age>25</age>
    <city>London</city>
  </person>
</root>
XML;

$xml = simplexml_load_string($xmlString);
$json = json_encode($xml);
$jsonArray = json_decode($json, true);

echo $json;
?>
