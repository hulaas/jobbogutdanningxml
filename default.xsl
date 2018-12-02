<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>TestSide</title>
                <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
            </head>
            <body>
                <main class="jumbotron">
                    <div class="container">
                    <h1 class="display-3">Formål med nettsiden<br/></h1>
                    <p>Formålet med denne siden er å vise alle utdanninger og yrker for å se hvilke utdanninger man må velge for hvilke yrker.</p>

                    <p>Vi har hentet ut data fra utdanning.no, og viser til link under:</p>
                    <a class="btn btn-primary btn-lg" role="button" href="https://utdanning.no/data/atom/utdanningsbeskrivelse/">Utdanninger</a>
                    <a class="btn btn-primary btn-lg" role="button" href="https://utdanning.no/data/atom/yrke/">Yrker</a>
                    </div>
                </main>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
