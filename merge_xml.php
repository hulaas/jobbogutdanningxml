
<!--Document that merges two xml-files to one xml-file.-->
<?php
$education = 'https://utdanning.no/data/atom/utdanningsbeskrivelse';
$profession = 'https://utdanning.no/data/atom/yrke';

$file = 'utdanningogyrker.xml';
$time = 600;

// Updating only if it's 10 minutes since last update
if(file_exists($file) && time() - filemtime($file) >= $time) {

    // Load the remote xml files from utdanning.no
    $xml = new DOMDocument();
    $xml->load($profession);
    $xmlUtdanning = new DOMDocument();
    $xmlUtdanning->load($education);

    $entryUtdanning = $xmlUtdanning->getElementsByTagName("entry");

    $doc = new DOMDocument("1.0", "ISO-8859-1");
    $doc->formatOutput = true;

    //append the root element of our xml-structure
    $root = $doc->createElement('utdanningogyrker');
    $doc->appendChild($root);

    // for-loop for the education xml
    for ($i = 0; $i < $entryUtdanning->length; $i++) {

        //append the education element
        $startTag = $doc->createElement('utdanninger');
        $root->appendChild($startTag);

        // get the desired datafields we want
        $title = $xmlUtdanning->getElementsByTagName("title");
        $mainTitle1 = $title->item($i+1);

        $entries1 = $xmlUtdanning->getElementsByTagName("content");
        $mainEntry1 = $entries1->item($i);

        //make sure the title-node is not empty
        if(!empty($mainTitle1->nodeValue)){
            $title = $xmlUtdanning->getElementsByTagName("title");
            $element1 = $doc->createElement('utdanningTittel');
            $element1->nodeValue=htmlspecialchars($mainTitle1->nodeValue);
            $startTag->appendChild($element1);
        }
        //make sure the content-node is not empty
        if(!empty($mainEntry1->nodeValue)) {
            $entries1 = $xmlUtdanning->getElementsByTagName("content");
            $mainEntry1 = $entries1->item($i);
            $element2 = $doc->createElement('utdanningBeskrivelse');
            $element2->nodeValue=htmlspecialchars($mainEntry1->nodeValue);
            $startTag->appendChild($element2);
        }

    }
    $entries = $xml->getElementsByTagName("entry");

    // for-loop for the profession xml
    for ($i = 0; $i < $entries->length; $i++ ) {

        // append the profession element on our root element
        $startTagYrke = $doc->createElement('yrker');
        $root->appendChild($startTagYrke);

        // get the desired datafields we want
        $title = $xml->getElementsByTagName("title");
        $mainTitle1 = $title->item($i+1);

        $entries1 = $xml->getElementsByTagName("content");
        $mainEntry1 = $entries1->item($i);

        //make sure the title-node is not empty
        if(!empty($mainTitle1->nodeValue)){
            $title = $xml->getElementsByTagName("title");
            $element1 = $doc->createElement('yrkeTittel');
            $element1->nodeValue=htmlspecialchars($mainTitle1->nodeValue);
            $startTagYrke->appendChild($element1);
        }

        //make sure the content-node is not empty
        if(!empty($mainEntry1->nodeValue)) {
            $entries1 = $xml->getElementsByTagName("content");
            $mainEntry1 = $entries1->item($i);
            $element2 = $doc->createElement('yrkeBeskrivelse');
            $element2->nodeValue=htmlspecialchars($mainEntry1->nodeValue);
            $startTagYrke->appendChild($element2);
        }
    }

    $doc->save('xml/utdanningogyrker.xml');
}

/* Denne filen er utviklet av Fredrik Hulaas og Fredrik Ravndal
   Denne filen er kontrollert av Ola Bredviken og Håvard Betten  */
?>
