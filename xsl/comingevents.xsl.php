<?php
header ( "Content-Type: text/xhtml" ); 
$pageTitle = "Coming Events";
$inPageTitle ="Dann&#233; Coming Events";
?>
<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<?php include ( "../inc/doc_body_top.inc" ); ?>
 
	<table class="contentTable" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td id="pageText">
				<xsl:for-each select="/records/comingevents">
					<table cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td class="comingEventContainer">
								<div class="comingEventHeadline"><xsl:value-of select="headline"/></div>
                            					<div class="comingEventBody"><xsl:value-of select="body"/></div>
							</td>
						</tr>
					</table>
				</xsl:for-each>
			</td>
        </tr>
    </table>
	<script language="JavaScript" src="scripts/convert-ltgt.js"></script>
	<?php include ( "../inc/doc_body_tail.inc" ); ?>
	</xsl:template>
</xsl:stylesheet>
