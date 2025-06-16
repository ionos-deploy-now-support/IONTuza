<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" 
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9">
    <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <title>TUZA ASSETS Sitemap</title>
                <style type="text/css">
                    body {
                        font-family: Arial, sans-serif;
                        font-size: 14px;
                        color: #333;
                        background: #fff;
                        margin: 20px;
                    }
                    h1 {
                        color: #045501;
                        font-size: 24px;
                        margin-bottom: 20px;
                    }
                    table {
                        border-collapse: collapse;
                        width: 100%;
                        background: #fff;
                        margin-bottom: 20px;
                    }
                    th {
                        background-color: #045501;
                        color: white;
                        text-align: left;
                        padding: 10px;
                    }
                    td {
                        padding: 10px;
                        border-bottom: 1px solid #ddd;
                    }
                    tr:hover {
                        background-color: #f5f5f5;
                    }
                    a {
                        color: #045501;
                        text-decoration: none;
                    }
                    a:hover {
                        text-decoration: underline;
                    }
                    .count {
                        background: #045501;
                        color: white;
                        padding: 5px 10px;
                        border-radius: 3px;
                        margin-bottom: 20px;
                        display: inline-block;
                    }
                </style>
            </head>
            <body>
                <h1>TUZA ASSETS Sitemap</h1>
                <div class="count">
                    Total URLs: <xsl:value-of select="count(sitemap:urlset/sitemap:url)"/>
                </div>
                <table>
                    <tr>
                        <th>URL</th>
                        <th>Last Modified</th>
                        <th>Language</th>
                    </tr>
                    <xsl:for-each select="sitemap:urlset/sitemap:url">
                        <tr>
                            <td>
                                <a href="{sitemap:loc}">
                                    <xsl:value-of select="substring(sitemap:loc, 25)"/>
                                </a>
                            </td>
                            <td>
                                <xsl:value-of select="sitemap:lastmod"/>
                            </td>
                            <td>
                                <xsl:choose>
                                    <xsl:when test="contains(sitemap:loc, '/en/')">English</xsl:when>
                                    <xsl:when test="contains(sitemap:loc, '/fr/')">French</xsl:when>
                                    <xsl:otherwise>Default</xsl:otherwise>
                                </xsl:choose>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>