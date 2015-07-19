<?php

$server = "localhost";  //MySQL database server
$user="janetkul_ajax";
$password = "ajax";
$database = "janetkul_ajax";

$system = "Web Dev Sales & Services";

/* Write the header for a web page */

function pageHeader($systemName,$pageName) {
?>	
	<table width="975" height="60" id="<?php $pageName ?>" border="0" cellpadding="0" cellspacing="0" >
		<tr class="pageHeader">
			<td width="5%">&nbsp;</td>
			<th class="pageCell" width="45%" align="left"><?php echo $systemName; ?></th>
			<th class="pageCell" width="45%" align="right"><?php echo $pageName; ?></th>
			<td width="5%">&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	<?php } ?>



