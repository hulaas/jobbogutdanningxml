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
                    <div class="rightcolumn">
                        <xsl:for-each select="utdanningogyrker/yrker">
                            <table class="yrketable" border="1px solid black">
                                <tr>
                                    <th width="175px">Yrkestittel</th>
                                    <th>Yrkesbeskrivelse</th></tr>
                                <tr>
                                    <td width="175px"><xsl:value-of select="yrkeTittel" /></td>
                                    <td width="400px"><xsl:value-of select="yrkeBeskrivelse" /></td>
                                </tr>
                            </table>
                        </xsl:for-each>
                    </div>
                </section>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>