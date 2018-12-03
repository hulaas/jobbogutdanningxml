<?php
include('menu.html');
$xml = new DOMDocument();
$xml->load("xml/utdanningogyrker.xml");

$elm = new DOMDocument();
$elm->load("allProfession.xsl");
$xslt = new XSLTProcessor();
$xslt->importStylesheet($elm);
echo $resultat = $xslt->transformToXML($xml);

// Denne siden er utviklet av Ola Bredviken sist gang 02.12.2018
// Denne siden er kontrollert av Håvard Betten 03.12.2018
