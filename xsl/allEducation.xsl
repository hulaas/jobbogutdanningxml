<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>TestSide</title>
                <link rel="stylesheet" type="text/css" href="../css/tables.css"/>
            </head>
            <body>
                <section class="root">
                    <div class="leftcolumn">
                        <table class="utdanningtable">
                            <tr>
                                <th>Utdanningstittel</th>
                                <th>Utdanningsbeskrivelse</th>
                            </tr>
                            <xsl:for-each select="utdanningogyrker/utdanninger">
                                <!--<xsl:sort select="utdanningTittel"/>-->
                                <!--<xsl:sort select="utdanningTittel"/>-->
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