<?php
header ( "Content-Type: text/xml\n\n" ); 
$pageTitle = "Results Gallery";
$inPageTitle ="";
?>
<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<?php include ( "../inc/doc_body_top.inc" ); ?>
	<link rel="stylesheet" type="text/css" href="styles/transitions.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="styles/dhtml-popup.css" media="screen, projection" />
	<script language="JavaScript" src="scripts/moz_support.js"></script>
	<script language="JavaScript" src="scripts/crossfade.js"></script>
 
	<table class="contentTable" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center">
				<p class="strong">
					The Dann&#233; Remove - Rebuild - Protect - Maintain System matches individual body chemistry with the appropriate botanical formulations, professional treatments and home prescriptives. Regardless of ethnic background, gender, age or skin condition, Dann&#233; offers an effective program for all skin types.
				</p>
				<p>
     				The scientific concept behind the Dann&#233; Method is backed up not only by its relation to basic anatomy, physiology or chemistry, but by actual before and after pictures that are of actual clients used in the company research.
				</p>
				<xsl:for-each select="/records/results">
					<div class="resultContainer">
						<div style="display:none;" id="images_{id}"><xsl:value-of select="images"/></div>
						<div class="resultName"><div style='padding-top:2px;padding-bottom:4px;margin:0px;'>
							<xsl:value-of select="name"/></div>
						</div>
						<div>
							<img id="result_{id}"
                                    class="resultImage" src="images/results/default.gif" alt="Click the image for more result photos." />
						</div>
						<div class="small">Click on the image to view the stages of treatment.</div>
					</div>
				</xsl:for-each>
			</td>
        </tr>
    </table>
	<script language="JavaScript" src="scripts/dhtml-imageswap.js"></script>
	<script language="JavaScript" src="scripts/crossfade-inline.js"></script>
	<?php include ( "../inc/doc_body_tail.inc" ); ?>
	</xsl:template>
</xsl:stylesheet>
