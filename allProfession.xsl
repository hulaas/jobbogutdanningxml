<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>Yrker</title>
                <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
            </head>
            <body>
                <section class="root-table">
                    <div class="rightcolumn">

                        <!-- Oppretter tabell for yrke -->
                        <table class="table table-striped">
                            <tr>
                                <th>Yrkestittel</th>
                                <th>Yrkesbeskrivelse</th></tr>
                            <xsl:for-each select="utdanningogyrker/yrker">
                                <xsl:sort select="yrkeTittel"/>
                                    <tr>
                                      <!-- Henter ut verdier -->
                                        <td><xsl:value-of select="yrkeTittel" /></td>
                                        <td><xsl:value-of select="yrkeBeskrivelse" /></td>
                                    </tr>
                            </xsl:for-each>
                        </table>
                    </div>
                </section>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
<!-- Denne siden er utviklet av Ola Bredviken sist gang 02.12.2018 -->
<!-- Denne siden er kontrollert av Håvard Betten 03.12.2018 -->
