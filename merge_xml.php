<?php
$education = 'https://utdanning.no/data/atom/utdanningsbeskrivelse';
$profession = 'https://utdanning.no/data/atom/yrke';
//$hxml = simplexml_load_file($weather);

$xml = new DOMDocument();
$xml->load($profession);

$xmlUtdanning = new DOMDocument();
$xmlUtdanning->load($education);

$entryUtdanning = $xmlUtdanning->getElementsByTagName("entry");

$doc = new DOMDocument("1.0", "ISO-8859-1");
$doc->formatOutput = true;

$root = $doc->createElement('utdanningogyrker');
$doc->appendChild($root);

for ($i = 0; $i < $entryUtdanning->length; $i++) {

    $startTag = $doc->createElement('utdanninger');
    $root->appendChild($startTag);

    $title = $xmlUtdanning->getElementsByTagName("title");
    $mainTitle1 = $title->item($i+1);

    $entries1 = $xmlUtdanning->getElementsByTagName("content");
    $mainEntry1 = $entries1->item($i);

    $prereq = $xmlUtdanning->getElementsByTagName("field_formal_prerequisites");
    $prereq1 = $prereq->item($i);

    if(!empty($mainTitle1->nodeValue)){
        $title = $xmlUtdanning->getElementsByTagName("title");
        $mainTitle1 = $title->item($i+1);
        $element1 = $doc->createElement('utdanningTittel');
        $element1->nodeValue=htmlspecialchars($mainTitle1->nodeValue);
        $startTag->appendChild($element1);
    }

    if(!empty($mainEntry1->nodeValue)) {
        $entries1 = $xmlUtdanning->getElementsByTagName("content");
        $mainEntry1 = $entries1->item($i);
        $element2 = $doc->createElement('utdanningBeskrivelse');
        $element2->nodeValue=htmlspecialchars($mainEntry1->nodeValue);
        $startTag->appendChild($element2);
    }

    if(!empty($prereq1->nodeValue)){
        $prereq = $xmlUtdanning->getElementsByTagName("field_formal_prerequisites");
        $prereq1 = $prereq->item($i);
        $element3 = $doc->createElement('formelleKrav');
        $element3->nodeValue=htmlspecialchars($prereq1->nodeValue);
        $startTag->appendChild($element3);
    }

}
$entries = $xml->getElementsByTagName("entry");

for ($i = 0; $i < $entries->length; $i++ ) {

    $startTagYrke = $doc->createElement('yrker');
    $root->appendChild($startTagYrke);

    $title = $xml->getElementsByTagName("title");
    $mainTitle1 = $title->item($i+1);

    $entries1 = $xml->getElementsByTagName("content");
    $mainEntry1 = $entries1->item($i);


    if(!empty($mainTitle1->nodeValue)){
        $title = $xml->getElementsByTagName("title");
        $mainTitle1 = $title->item($i+1);
        $element1 = $doc->createElement('yrkeTittel');
        $element1->nodeValue=htmlspecialchars($mainTitle1->nodeValue);
        $startTagYrke->appendChild($element1);
    }

    if(!empty($mainEntry1->nodeValue)) {
        $entries1 = $xml->getElementsByTagName("content");
        $mainEntry1 = $entries1->item($i);
        $element2 = $doc->createElement('yrkeBeskrivelse');
        $element2->nodeValue=htmlspecialchars($mainEntry1->nodeValue);
        $startTagYrke->appendChild($element2);
    }
}

$doc->save('utdanningogyrker.xml');
?>