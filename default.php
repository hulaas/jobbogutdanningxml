<?php

include_once('merge_xml.php');
include('menu.html');

$xml = new DOMDocument();
$xml->load("xml/utdanningogyrker.xml");

$elm = new DOMDocument();
$elm->load("default.xsl");
$xslt = new XSLTProcessor();
$xslt->importStylesheet($elm);
echo $resultat = $xslt->transformToXML($xml);


$searchByWord = '';
$titleList[] = null;
if(isset($_POST['submit'])) {
    $searchByWord = $_POST['search'];

    //content for search by profession
    $professions = $xml->getElementsByTagName('yrker');
    $description = null;
    // loops the nodes in the xml-document
    foreach($professions as $profession) {
        $professionTitle = $profession->getElementsByTagName('yrkeTittel');
        $professionsDescription = $profession->getElementsByTagName('yrkeBeskrivelse');
        $ifNotEmpty = $professionsDescription->item(0);
        // checks if node equals input from user
        if(like_match($searchByWord, $professionTitle->item(0)->nodeValue)) {
            $title = $professionTitle->item(0)->nodeValue;
            // checks if node is not empty
            if(!empty($ifNotEmpty->nodeValue)) {
                $description = $professionsDescription->item(0)->nodeValue;
            }
            ?>
            <table class="table table-striped">
                <tr>
                    <th width="175px">Yrkestittel</th>
                    <th>Yrkesbeskrivelse</th></tr>
                <tr>
                    <td width="175px"><?php echo $title?></td>
                    <td width="400px"><?php echo $description?></td>
                </tr>
            </table>
            <?php
        }
    }
    //content for search by education
    $educations = $xml->getElementsByTagName('utdanninger');
    // loops the nodes in the xml-document
    foreach($educations as $education) {
        $educationTitle = $education->getElementsByTagName('utdanningTittel');
        $educationDescription = $education->getElementsByTagName('utdanningBeskrivelse');
        $ifNotEmpty = $educationDescription->item(0);
        // checks if node equals input from user
        if(like_match($searchByWord, $educationTitle->item(0)->nodeValue)) {
            $title = $educationTitle->item(0)->nodeValue;
            // checks if node is not empty
            if(!empty($ifNotEmpty->nodeValue)) {
                $description = $educationDescription->item(0)->nodeValue;
            }
            ?>
            <table class="table table-striped">
                <tr>
                    <th width="175px">Utdanningstittel</th>
                    <th>Utdanningsbeskrivelse</th></tr>
                <tr>
                    <td width="175px"><?php echo $title?></td>
                    <td width="400px"><?php echo $description?></td>
                </tr>
            </table>
            <?php
        }
    }
}

//Returns true og false if params match
function like_match($searchParam, $subject) {
    $preg = preg_grep("/(.*)" . strtolower($searchParam) . "(.*)/", [strtolower($subject)]);
    if(!empty($preg)){
        return true;
    }
    return false;
}
//Denne siden er utviklet av Fredrik Ravndal og Fredrik Hulaas, sist endret 03.12.2018
//Denne siden er kontrollert av Håvard Betten og Ola Bredviken, sist kontrollert 03.12.2018
?>