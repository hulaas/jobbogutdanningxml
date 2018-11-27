<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">

<html>
    <head>
        <title>TestSide</title>
    </head>
    <body>
      <h1>Yrker</h1>
        <xsl:for-each select="utdanningogyrker/utdanninger">
          
          <table border="1px solid black" width="48%">
            <tr><th width="175px">Utdanningstittel</th><th>Utdanningsbeskrivelse</th><th>Formelle krav</th></tr>

              <tr>

                <td width="175px"><xsl:value-of select="utdanningTittel" /></td>
                <td width="400px"><xsl:value-of select="utdanningBeskrivelse" /></td>
                <td width="250px"><xsl:value-of select="formelleKrav" /></td>

              </tr>
          </table>
        </xsl:for-each>
    </body>
  </html>
</xsl:template>

</xsl:stylesheet>
