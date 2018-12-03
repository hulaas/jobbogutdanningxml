<?php

include('menu.html');
$xml = new DOMDocument();
$xml->load("xml/utdanningogyrker.xml");

$elm = new DOMDocument();
$elm->load("allEducation.xsl");
$xslt = new XSLTProcessor();
$xslt->importStylesheet($elm);
echo $resultat = $xslt->transformToXML($xml);

// Laget av Håvard Betten, sist endret 03.12.2018
// Sist kontrollert av Ola Bredviken 03.12.2018
