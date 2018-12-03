<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>TestSide</title>
                <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
            </head>
            <body>
                <section class="root-table">
                    <div class="leftcolumn">
                        <table class="table table-striped">
                            <tr>
                                <th>Utdanningstittel</th>
                                <th>Utdanningsbeskrivelse</th>
                            </tr>
                            <xsl:for-each select="utdanningogyrker/utdanninger">
                                <!--<xsl:sort select="utdanningTittel"/>-->
                                <!--<Gå gjennom alle "utdanninger i XML, og legger tittel og beskrivelse i tabellen/>-->
                                    <tr>
                                        <td><xsl:value-of select="utdanningTittel" /></td>
                                        <td><xsl:value-of select="utdanningBeskrivelse" /></td>
                                    </tr>
                            </xsl:for-each>
                        </table>
                    </div>
                </section>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>


<!-- Laget av Håvard Betten, sist endret 03.12.2018
Sist kontrollert av Ola Bredviken 03.12.2018 -->
