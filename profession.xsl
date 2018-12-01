<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>TestSide</title>
                <link rel="stylesheet" type="text/css" href="profession.css"/>
            </head>
            <body>
                <section class="root">
                    <h1>Formål</h1>
                    <p>Formålet med denne siden er å kombinere to xml-filer til en.</p>
                    <p>Vise innholdet til xml-filen</p>
                    <p>Søk på yrker eller utdanning</p>
                    <div>
                        <input type="submit" value="Alle utdanninger"/>
                        <input type="submit" value="Alle yrker"/>
                    </div>
                </section>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
