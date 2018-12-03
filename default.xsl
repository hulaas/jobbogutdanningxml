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
                    <p>Formålet med denne siden er å hente xml-data fra utdanning.no og presentere dataen.</p>

                    <p>Vi har hentet ut data fra utdanning.no, og viser til link under:</p>
                    <a class="btn btn-primary btn-lg" role="button" href="https://utdanning.no/data/atom/utdanningsbeskrivelse/">Utdanninger</a>
                    <a class="btn btn-primary btn-lg" role="button" href="https://utdanning.no/data/atom/yrke/">Yrker</a>
                    </div>
                </main>
            </body>
        </html>
    </xsl:template>
    <!-- Denne filen er utviklet av Fredrik Ravndal og Fredrik Hulaas, sist endret 03.12.2018
         Denne filen er kontrollert av Ola Bredviken og Håvard Betten sist kontrollert 03.12.2018  -->
</xsl:stylesheet>
