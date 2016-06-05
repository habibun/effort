<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet
    version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns="http://www.w3.org/1999/xhtml">
    <xsl:output method="html"/>
        <xsl:template match="/stockList">
            <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
            <head>
                <title>Transforming XML to XHTML</title>
                <link rel="stylesheet" type="text/css" href="common.css" />
            </head>
            <body>
            <h1>Stock List</h1>
            <ul style="list-style: none;">
                <xsl:apply-templates select="item" />
            </ul>
            </body>
            </html>
        </xsl:template>
        <xsl:template match="item">
            <li>
                <dl>
                    <dt>Name:</dt>
                    <dd><xsl:value-of select="name"/></dd>
                    <dt>Quantity:</dt>
                    <dd><xsl:value-of select="quantity"/> left</dd>
                    <dt>Unit Price:</dt>
                    <dd>$<xsl:value-of select="unitPrice"/></dd>
                    <dt>Description:</dt>
                    <dd><xsl:value-of select="description"/></dd>
                </dl>
            </li>
        </xsl:template>
</xsl:stylesheet>
