<?php
include('menu.html');
$xml = new DOMDocument();
$xml->load("utdanningogyrker.xml");

$elm = new DOMDocument();
$elm->load("allProfession.xsl");
$xslt = new XSLTProcessor();
$xslt->importStylesheet($elm);
echo $resultat = $xslt->transformToXML($xml);