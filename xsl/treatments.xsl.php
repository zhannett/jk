<?php
header ( "Content-Type: text/xml\n\n" ); 
$pageTitle = "Dann&#233; Treatments";
$inPageTitle ="";
?>
<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<?php include ( "../inc/doc_body_top.inc" ); ?>
	<script language="JavaScript">
	function displayTreatment ( idx ) {
		document.getElementById ( "treatmentText" ).innerHTML = document.getElementById ( "treatmentText_" + idx ).innerHTML;
		window.focus();
		return false;

	}
	</script>

	<table id="contentTable" class="contentTable" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center">
                <table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td colSpan="2">
							<p class="strong">Dann&#233; paramedical skin procedures have won international recognition and endorsement by the medical profession. We are proud to bring these skin revision therapies to Eastern Canada.</p>
				
						</td>
					</tr>
                    <tr>
                        <td>
							<div class="leftSidePageNav">
							<ul>
                            <xsl:for-each select="records/product_1">
                                <li><a href="javascript:void displayTreatment({id});"><xsl:value-of select="name"/></a></li>
                            </xsl:for-each>
							</ul>
							</div>
                        </td>
                        <td class="rightSidePageText" id="treatmentText">
							Dann&#233; treatments have helped change the face of aesthetics and is currently changing the way physicians view skin revision the world over. We have medical doctors researching our protocol continually. Among the many contributors are: Sir Thomkin Smith, M.D., USA, medical professor Dr. Frank Abyholm, Norway, celebrity surgeon Dr. Lawrence Birnbaum, Beverly Hills, USA, Dr. Jurgen Esche, Germany, and Dr. Ahmed El Gaky, Riyadh Saudi Arabia, to name a few.	
                        </td>
						<xsl:for-each select="records/product_1">
						<div style="display:none;" id="treatmentText_{id}">
								<div class="treatmentName"><xsl:value-of select="name"/></div>
								<p><xsl:value-of select="longdesc"/></p>
						</div>
                        </xsl:for-each>
                    </tr>
	            </table>
    	    </td>
    	</tr>
	</table>

	<?php include ( "../inc/doc_body_tail.inc" ); ?>
	</xsl:template>
</xsl:stylesheet>
