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
                    <div class="rightcolumn">

                        <table class="yrketable">
                            <tr>
                                <th>Yrkestittel</th>
                                <th>Yrkesbeskrivelse</th></tr>
                            <xsl:for-each select="utdanningogyrker/yrker">
                                <xsl:sort select="yrkeTittel"/>
                                    <tr>
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