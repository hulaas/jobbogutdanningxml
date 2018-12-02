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



$isPressed = false;
$searchByWord = '';
$titleList[] = null;
if(isset($_POST['submit'])) {
    $searchByWord = $_POST['search'];
    $professions = $xml->getElementsByTagName('yrker');
    foreach($professions as $profession) {
        $professionTitle = $profession->getElementsByTagName('yrkeTittel');
        if(like_match($professionTitle->item(0)->nodeValue, $searchByWord) ) {
            $titleList[] = $professionTitle->item(0)->nodeValue;
        }
    }
    print_r($titleList);
    $isPressed = true;
}





include('search.php');

function like_match($pattern, $subject)
{
    $pattern = str_replace('%', '.*', preg_quote($pattern, '/'));
    return (bool) preg_match("/^{$pattern}$/i", $subject);
}
?>