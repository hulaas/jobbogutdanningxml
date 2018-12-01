<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:template match="/">
        <html>
            <head>
                <title>TestSide</title>
                <link rel="stylesheet" type="text/css" href="tables.css"/>
            </head>
            <body>
                <section class="root">
                    <div class="leftcolumn">

                        <table class="utdanningtable" border="1px solid black" >
                            <tr>
                                <th width="175px">Utdanningstittel</th>
                                <th>Utdanningsbeskrivelse</th>
                                <th>Formelle krav</th></tr>
                            <xsl:for-each select="utdanningogyrker/utdanninger">
                                <xsl:sort select="utdanningTittel"/>
                                    <tr>
                                        <td width="175px"><xsl:value-of select="utdanningTittel" /></td>
                                        <td width="400px"><xsl:value-of select="utdanningBeskrivelse" /></td>
                                        <td width="250px"><xsl:value-of select="formelleKrav" /></td>
                                    </tr>
                            </xsl:for-each>
                        </table>

                    </div>
                </section>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>