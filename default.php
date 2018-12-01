<?php 
include_once('merge_xml.php');
include('menu.html');

$xml = new DOMDocument();
$xml->load("utdanningogyrker.xml");

$elm = new DOMDocument();
$elm->load("profession.xsl");
$xslt = new XSLTProcessor();
$xslt->importStylesheet($elm);
echo $resultat = $xslt->transformToXML($xml);
?>