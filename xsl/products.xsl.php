<?php
header ( "Content-Type: text/xml\n\n" ); 
$pageTitle = "Products";
$inPageTitle ="Dann&#233; Products";
?>
<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
	<?php include ( "../inc/doc_body_top.inc" ); ?>
	<link rel="stylesheet" type="text/css" href="styles/transitions.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="styles/dhtml-popup.css" media="screen, projection" />
	<script language="JavaScript" src="scripts/moz_support.js"></script>
	<script language="JavaScript" src="scripts/crossfade.js"></script>
	<script language="JavaScript" src="scripts/dhtml-popup.js"></script>
 
	<table class="contentTable" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center">
				<p>
				Every Dann&#233; product is an organic-based, transdermal formulation, which enables the skin's natural biochemistry to nourish and restore itself. Dann&#233; formulas contain collagen promoting vitamin C for making the skin look smooth, and enzymes for removing fine wrinkles and acne scars. Nutrients such as amino acids, proteins, and vitamins B, C and E work with the skin to promote miraculous powers of self-regeneration. Dann&#233; products do not contain animal or petroleum by-products found in most over-the-counter cosmetics and cleansers. All products are clinically tested. Dann&#233; products are not tested on animals.
				</p>
				<p class="strong" style="text-align:left;">Click on an image to find out more...</p>
				<xsl:for-each select="/records/product_1">
					<div class="productContainer">
						<div style="display:none;"><xsl:value-of select="longdesc"/></div>
						<div class="productName"><div style='padding-top:2px;padding-bottom:4px;margin:0px;'>
							<xsl:value-of select="name"/></div>
						</div>
						<div>
							<img id="product_{id}"
                                    onclick="void crossfade(document.getElementById('product_{id}'),
                                        'images/products/{id}.ingr.jpg', '1', '', 'images/products/{id}.jpg', 3000, dhtmlPopup.init )"
                                    class="productImage" src="images/products/{id}.jpg" />
						</div>
					</div>
				</xsl:for-each>
					<div class="errorBox"><xsl:value-of select="/records/error/errormsg"/></div>
			</td>
        </tr>
    </table>
	<script language="JavaScript" src="scripts/crossfade-inline.js"></script>
	<?php include ( "../inc/doc_body_tail.inc" ); ?>
	</xsl:template>
</xsl:stylesheet>
