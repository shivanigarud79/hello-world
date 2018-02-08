<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
  <body background-color="green">
<h2> Customer Details</h2>
        
  <table border="1" text-align="center">
    <tr bgcolor="lightblue">
        <th>USERNAME</th>
        <th>CAKE NAME</th>
        <th>KG</th>
        <th>MOBILE NUMBER</th>
        <th>ORDER_DATE</th>
        <th>ADDRESS</th>
        <th>MESSAGE</th>
        <th>PRICE</th>
    </tr>
    <xsl:for-each select="Cakeshop/Buy_now/Order">
    <tr>
        <td><xsl:value-of select="username"/></td>
        <td><xsl:value-of select="cake_id"/></td>
        <td><xsl:value-of select="kg"/></td>
        <td><xsl:value-of select="phnnum"/></td>
        <td><xsl:value-of select="order_date"/></td>
        <td><xsl:value-of select="address"/></td>
        <td><xsl:value-of select="message"/></td>
        <td><xsl:value-of select="price"/></td>
    </tr>
   </xsl:for-each>
  </table>
  </body>
  </html>
</xsl:template>
</xsl:stylesheet>
