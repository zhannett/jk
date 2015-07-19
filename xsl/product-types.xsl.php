<?php

header ( "Content-Type: text/xml\n\n" ); 
$pageTitle = "Products";
$inPageTitle ="Dann&#233; Products";

?>
<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<?php include ( "../inc/doc_body_top.inc" ); ?>
	
	<table class="contentTable" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center">
				<table cellpadding="0" cellspacing="0" border="0">
			        <tr>
            			<td>
							<div class="leftSidePageNav">
							<xsl:for-each select="records/producttypes">
								<a href="products-home.php?type={name}&amp;products={productlist}"><xsl:value-of select="name"/></a><br />
							</xsl:for-each>
							</div>
						</td>
						<td class="rightSidePageText">
				Every Dann&#233; product is an organic-based, transdermal formulation, which enables the skin's natural biochemistry to nourish and restore itself. Dann&#233; formulas contain collagen promoting vitamin C for making the skin look smooth, and enzymes for removing fine wrinkles and acne scars. Nutrients such as amino acids, proteins, and vitamins B, C and E work with the skin to promote miraculous powers of self-regeneration. Dann&#233; products do not contain animal or petroleum by-products found in most over-the-counter cosmetics and cleansers. All products are clinically tested. Dann&#233; products are not tested on animals.
						</td>
        			</tr>
    		</table>
		</td>
	</tr>
</table>

	<?php include ( "../inc/doc_body_tail.inc" ); ?>
	</xsl:template>
</xsl:stylesheet>
