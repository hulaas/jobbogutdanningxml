<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
    <head>
        <title>TestSide</title>
        <style>
            html, body {
                margin: 0;
                padding: 0;
                height: 100%;
                width: 100%;
            }
            #utdanningtable {
                width: 50%;
            }

            #yrketable {
                width: 50%;
            }
        </style>
    </head>
    <body>
      <h1>Yrker og Utdanninger</h1>
        <xsl:for-each select="utdanningogyrker/utdanninger">
          
          <table id="utdanningtable" border="1px solid black" >
            <tr><th width="175px">Utdanningstittel</th><th>Utdanningsbeskrivelse</th><th>Formelle krav</th></tr>

              <tr>

                <td width="175px"><xsl:value-of select="utdanningTittel" /></td>
                <td width="400px"><xsl:value-of select="utdanningBeskrivelse" /></td>
                <td width="250px"><xsl:value-of select="formelleKrav" /></td>

              </tr>
          </table>
        </xsl:for-each>

        <xsl:for-each select="utdanningogyrker/yrker">

            <table id="yrketable" border="1px solid black">
                <tr><th width="175px">Yrkestittel</th><th>Yrkesbeskrivelse</th></tr>

                <tr>

                    <td width="175px"><xsl:value-of select="yrkeTittel" /></td>
                    <td width="400px"><xsl:value-of select="yrkeBeskrivelse" /></td>

                </tr>
            </table>
        </xsl:for-each>
    </body>
  </html>
</xsl:template>

</xsl:stylesheet>
