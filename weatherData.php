<?php
//$weather = 'https://utdanning.no/data/atom/yrke';

//$hxml = simplexml_load_file($weather);

$xml = new DOMDocument();
$xml->load("yrke.xml");

$xmlUtdanning = new DOMDocument();
$xmlUtdanning->load("utdanning.xml");

$elm = new DOMDocument();
$elm->load("forecast.xsl");
$xslt = new XSLTProcessor();
$xslt->importStylesheet($elm);
//echo $resultat = $xslt->transformToXML($xml);

$entryUtdanning = $xmlUtdanning->getElementsByTagName("entry");
$titleUtdanning = $xmlUtdanning->getElementsByTagName("title");

$mainEntry1 = $entryUtdanning->item(0);
$mainTitle1 = $titleUtdanning->item(1);

for ($i = 0; $i < $titleUtdanning->length; $i++) {
    $title = $xmlUtdanning->getElementsByTagName("title");

    $mainTitle1 = $titleUtdanning->item($i+1);
    $entries1 = $xmlUtdanning->getElementsByTagName("content");
    $mainEntry1 = $entries1->item($i);

//    $category = $xmlUtdanning->getElementsByTagName("div");
////    $mainCategory = $category->item($i);
///     <td>', $mainCategory->nodeValue, PHP_EOL,'</td>



    echo '
<html>
<head>
<style>
    html, body {
        margin = 0;
        padding = 0;
        height: 100%;
        width: 100%;
    }
    
    #utdanningTable {
        clear: left;
        width: 30%;
    }
    
    #jobbTable {
        top: 0;
    }
</style>
</head>
<body>
<table id="utdanningTable" border="1px solid black">
  <tr>
    <td>UtdanningTittel</td>
    <td>', $mainTitle1->nodeValue,PHP_EOL, '</td>
  </tr>
  <tr>
    <td>UtdanningBeskrivelse</td>
    <td>', $mainEntry1->nodeValue, PHP_EOL, '</td>
  </tr>
</table>
</body>
</html>';
}

$entry = $xml->getElementsByTagName("feed");

$title = $xml->getElementsByTagName("title");

$entries = $xml->getElementsByTagName("entry");

$mainEntry = $entries->item(0);

$mainTitle = $title->item(1);

//echo $mainTitle->nodeValue . "\n";
//echo $mainEntry->nodeValue, PHP_EOL;

for ($i = 0; $i < $entries->length; $i++ ) {
    $title = $xml->getElementsByTagName("title");
    $mainTitle = $title->item($i+1);
//    echo $mainTitle->nodeValue, PHP_EOL;

    $entries = $xml->getElementsByTagName("entry");
    $mainEntry = $entries->item($i);
//    $strip = strip_tags($mainEntry, '<link><author><content>');
//    echo $mainEntry->nodeValue, PHP_EOL;
    echo '
<table id="jobbTable" border="1px solid black" width="30%">
  <tr>
    <td>JobbTittel</td>
    <td>', $mainTitle->nodeValue,PHP_EOL, '</td>
  </tr>
  <tr>
    <td>JobbBeskrivelse</td>
    <td>', $mainEntry->nodeValue, PHP_EOL, '</td>
  </tr>
</table>';
}

?>