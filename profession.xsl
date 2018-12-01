<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>TestSide</title>
                <link rel="stylesheet" type="text/css" href="profession.css"/>
            </head>
            <body>
                <main class="root">
                    <h1>Formål<br/></h1>
                    <p>Formålet med denne siden er å vise alle utdanning og alle yrker for å se hvilke utdanninger man må velge for hvilke yrker.</p>
                    <p>Vise innholdet til xml-filen</p>
                    <p>Søk på yrker eller utdanning</p>

                </main>
                <section>
                    <div>
                        <input type="submit" value="Alle utdanninger"/>
                        <input type="submit" value="Alle yrker"/>
                    </div>
                </section>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
