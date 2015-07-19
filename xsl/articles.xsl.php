<?php
header ( "Content-Type: text/xml\n\n" ); 
$pageTitle = "Dann&#233; Articles";
$inPageTitle ="";
?>
<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<?php include ( "../inc/doc_body_top.inc" ); ?>
	<script language="JavaScript" src="./scripts/httprequest.js"></script>
	<table id="contentTable" class="contentTable" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center">
                <table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td colSpan="2">
				
						</td>
					</tr>
                    <tr>
                        <td id="pageText" class="rightSidePageText">
							<xsl:for-each select="records/files">
								<xsl:value-of select="contents"/>
							</xsl:for-each>
                        </td>
						<td>
                            <div class="leftSidePageNav" id="articlesList">
                                One moment please...
                            </div>
                        </td>
                    </tr>
	            </table>
    	    </td>
    	</tr>
	</table>
	<script language="JavaScript" src="./scripts/convert-ltgt.js">
	</script>
	<script language="JavaScript" src="./scripts/articles.js">
	</script>
	<?php include ( "../inc/doc_body_tail.inc" ); ?>
	</xsl:template>
</xsl:stylesheet>
