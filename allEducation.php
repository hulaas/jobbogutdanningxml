<?php

include('menu.html');
$xml = new DOMDocument();
$xml->load("utdanningogyrker.xml");

$elm = new DOMDocument();
$elm->load("allEducation.xsl");
$xslt = new XSLTProcessor();
$xslt->importStylesheet($elm);
echo $resultat = $xslt->transformToXML($xml);