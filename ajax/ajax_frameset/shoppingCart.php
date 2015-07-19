<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<?php
		include('common.php');
		
		$title = "Item Detail";
		$id = substr(@$_SERVER['QUERY_STRING'],3);
		$query = "CALL lineSelect(" . $id . ",NULL)";
		$mysqli = new mysqli($server,$user,$password,$database);
		
		if(mysqli_connect_errno()) {
			printf("Connect failed: %s/n", mysqli_connect_error());
			exit();
		}
		
		if(!$result = $mysqli->query($query)) {
			printf("Error: %s\n", $mysqli->error);
			exit();
		}
	?>
	
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="common.css" />
		<script type="text/javascript" src="library.js"></script>
	</head>
	
	<body onLoad="initialize()">
		<form name="hidden_form" id="hidden_form" action="post.php">
				<?php 
						pageHeader($system,$title); 
						
						$row = $result->fetch_array(MYSQLI_ASSOC);
						
						$rowLabel = "<div class='reoHEader' style='position:absolute; left:50px; right:auto%; bottom:auto; width:200px; top: '";
						$rowData = "div class='rowData' style='position:absolute; left:255px; right:auto;bottom:auto; width:600px; top: '";
						
						echo $rowLabel . "75px'>&nbsp;Guild Name:</div>";
						echo $rowLabel . "92px'>&nbsp;Item Name:</div>";
						echo $rowLabel . "110px'>&nbsp;Description:</div>";
						echo $rowLabel . "127px'>&nbsp;Price:</div>";
						echo $rowLabel . "144px'>&nbsp;Quantity:</div>";
						
						printf($rowData . "75px'>&nbsp;%s</div>",$row["guild_name"]);
						printf($rowData . "92px'>&nbsp;%s</div>",$row["item_name"]);
						printf($rowData . "110px'>&nbsp;%s</div>",$row["item_description"]);
						printf($rowData . "127px'>&nbsp;%s</div>",$row["item_price"]);
				?>
				
				<input type="text" id="quantity" name="quantity" value='' onkeyup = 'restrict(this,\'[0-9]\',\'gi\')' style='position:absolute; left:255px; right:auto; bottpm:auto; top:144px; text-align:right'>
				<?php
						echo "<input type='button' value='Add to Cart' onclick='javascript:add3Cart(" . $row["guild_item_id"] . ")' style='position:absolute; top:175px; left:50px; right:auto; bottom:auto; height:22px; width:110px'>";
						echo "<input type='button' value=Return to items' onclick='javascript:itemsList()' style='position:absolute; top:175px; left:175px; right:auto; bottom:auto; height:22px; width:110px'>";
						echo "<input type='button' value='View Cart' onclick='javascript:displayCart()' style='position:absolute; top:175px; left:300px; right:auto; bottom:auto; height:22px; width:110px'>";
						echo "<input type='button' value='Place Order' onclick='itemsList()' style='position:absolute; top:175px; left:425px; right:auto; bottom:auto; height:22px; width:110px'>";
				?>
		</form>
	</body>
	<?php
		mysqli_close($mysqli);
	?>
</html>
