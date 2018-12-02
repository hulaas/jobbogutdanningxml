<?php
include('menu.html');
$xml = new DOMDocument();
$xml->load("xml/utdanningogyrker.xml");

$elm = new DOMDocument();
$elm->load("xsl/allProfession.xsl");
$xslt = new XSLTProcessor();
$xslt->importStylesheet($elm);
echo $resultat = $xslt->transformToXML($xml);
