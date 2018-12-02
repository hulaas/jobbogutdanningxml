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
    $professions = $xml->getElementsByTagName('yrker');
    $description = null;
    foreach($professions as $profession) {
        $professionTitle = $profession->getElementsByTagName('yrkeTittel');
        $professionsDescription = $profession->getElementsByTagName('yrkeBeskrivelse');
        $ifNotEmpty = $professionsDescription->item(0);
        if($professionTitle->item(0)->nodeValue == $searchByWord ) {
            $title = $professionTitle->item(0)->nodeValue;
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

    $educations = $xml->getElementsByTagName('utdanninger');
    foreach($educations as $education) {
        $educationTitle = $education->getElementsByTagName('utdanningTittel');
        $educationDescription = $education->getElementsByTagName('utdanningBeskrivelse');
        $ifNotEmpty = $educationDescription->item(0);
        if($educationTitle->item(0)->nodeValue == $searchByWord ) {
            $title = $educationTitle->item(0)->nodeValue;
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
?>