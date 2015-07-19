<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<?php
		include('common.php');
		
		$title = "Order Detail";
		$order = substr(@$_SERVER['QUERY_STRING'],6);
		$order = 1;
		$query = "CALL lineSelect(" . $order . ")";
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
		<script type="text/javascript>">window.history.forward(1)</script>
	</head>
	
	<body onload="initialize()">
		<form name="hidden_form" id="hidden_form" action="post.php">
				<?php pageHeader($system,$title); ?>
				<table width="980" ID="Table1"  border="1" cellpadding="2" cellspacing="2">
					<tr class="rowHeader">
						<th>Item Name</th>
						<th>Description</th>
						<th>Quantity</th>
						<th>Unit Price</th>
						<th>Price</th>
					</tr>
					<?php
						$total = 0;
						while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							printf("<tr class='rowData'><td align='center'>%s</a></td>",$row["item_name"]);
							printf("<td align='left'>%s</a></td>",$row["item_description"]);
							printf("<td class='numeric'>%s</a></td>",$row["line_quantity"]);
							printf("<td class='numeric'>%s</a></td>",$row["line_item_price"]);
							printf("<td class='numeric'>%s</a></td></tr>",($row["line_item_price"] * $row["line_quantity"]));
							
							$total += ($row["line_item_price"] * $row["line_quantity"]);							
						}
					?>
					<tr class="rowData">
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<th class="numeric">Total</th>
						<?php
							printf("<td class='numeric'>$%s</td>",$total);
						?>
					</tr>				
				</table>
		</form>
	</body>
	<?php
		$result->close();
	?>
</html>
