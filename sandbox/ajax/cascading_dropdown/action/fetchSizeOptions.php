<?php 
	require_once('products.php');
	
	for ( $row = 0; $row < count($rows); $row++ ) {
		 if($rows[$row]['sku'] == $_GET['style']) {		 	
			//$colors = explode(', ',$rows[$row]['colors']);	
			echo '<option value="">-- choose a size --</option>';
			//for ($size = 0; $size < count($sizes); $size++ ) {
				//echo '<option value="$size">'.$sizes[$size].'</option>';
			//} 
		}
	} 
	
?>