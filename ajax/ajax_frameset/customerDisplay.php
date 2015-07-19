<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
		include('common.php');
		
		$title = "customer Display";
		$email = substr(@$_SERVER['QUERY_STRING'],6);
		$query = "CALL addressSelect(" . $email . ")";
		$mysqli = new mysqli($server,$user,$password,$database);
		
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n",mysqli_connect_error());
			exit();
		}
		
		if(!$result = $mysqli->query($query)) {
			printf("Error: %s\n",$mysqli->error);
			exit();
		}
	  ?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="common.css" />
		<script type="text/javascript" src="library.js"></script>
	</head>
	
	<body onload="inicialize()">
		<form name="hidden_form" id="hidden_form" action="customerInput.php">
			<?php
				pageHeader($system,$title);
				
				$row = $result->fetch_array(MYSQLI_ASSOC);
				$rowLabel = "<div class='rowHeader' style='position:absolute; left:50px; right:auto%; bottom:auto; width:200px; top:'";
				$rowData = "<div class='rowData' style='position:absolute; left:255px; right:auto; bottom:auto; width:600px; top:'";
			?>
				<table width="980" id="Table1" border="1" cellpadding="2" cellspasing="2">
			<?php
				echo "<tr><th class='rowHeader' width='20%' align='left'>&nbsp;First Name:</th>";
				printf ("<td class='rowData'>&nbsp;<input type='text' name='names_first' id='names_first' size='50' maxlength='255' value='%s' onchange='changeEvent(this)'></td></tr>",$row["names_first"]);
		
				echo "<tr><th class='rowHeader' align='left'>&nbsp;Middle Initial:</th>";
				printf ("<td class='rowData'>&nbsp;<input type='text' name='names_mi' id='names_mi' size='2' maxlength='1' value='%s' onchange='changeEvent(this)'></td></tr>",$row["names_mi"]);
	
				echo "<tr><th class='rowHeader' align='left'>&nbsp;Last Name:</th>";
				printf ("<td class='rowData'>&nbsp;<input type='text' name='names_last' id='names_last' size='50' maxlength='255' value='%s' onchange='changeEvent(this)'></td></tr>",$row["names_last"]);
	
				echo "<tr><th class='rowHeader' align='left'>&nbsp;Address Line 1:</th>";
				printf ("<td class='rowData'>&nbsp;<input type='text' name='address_line1' id='address_line1' size='50' maxlength='255' value='%s' onchange='changeEvent(this)'></td></tr>",$row["address_line1"]);
	
				echo "<tr><th class='rowHeader' align='left'>&nbsp;Middle Initial:</th>";
				printf ("<td class='rowData'>&nbsp;<input type='text' name='address_line2' id='address_line2' size='50' maxlength='255' value='%s' onchange='changeEvent(this)'></td></tr>",$row["address_line2"]);
	
				echo "<tr><th class='rowHeader' align='left'>&nbsp;City:</th>";
				printf ("<td class='rowData'>&nbsp;<input type='text' name='address_city' id='address_city' size='50' maxlength='255' value='%s' onchange='changeEvent(this)'></td></tr>",$row["address_city"]);
	
				echo "<tr><th class='rowHeader' align='left'>&nbsp;State:</th>";
				printf ("<td class='rowData'>");
				stateSelect($server,$user,$password,$database,$row['state_abbreviation']);
				echo "</td></tr><tr><th class='rowHeader' align='left'>&nbsp;PostalCode:</th>";
	
				printf ("<td class='rowData'>&nbsp;<input type='text' name='address_postal' id='address_postal' size='50' maxlength='10' value='%s' onchange='changeEvent(this)'></td></tr>",$row["address_postal"]);
										
				echo "<tr><th class='rowHeader' align='left'>&nbsp;Telephone Number:</th>";
				printf ("<td class='rowData'>&nbsp;<input type='text' name='customer_telephone' id='customer_telephone' size='50' maxlength='10' value='%s' onchange='changeEvent(this)'></td></tr>",$row["customer_telephone"]);
										
				echo "<tr><th class='rowHeader' align='left'>&nbsp;Email Address:</th>";
				printf ("<td class='rowData'>&nbsp;<input type='text' name='customer_email' id='customer_email' size='50' maxlength='255' value='%s' onchange='changeEvent(this)'></td></tr>",$row["customer_email"]);
			?>
			</table>
			<?php
				echo "<input type='button' value='Place Order' onclick='submitForm()'>";
			?>
			</form>
			</body>
			
			<?php
				mysqli_close($mysqli);
				
				function stateSelect($server,$user,$password,$database,$value)
				{
					$query = "CALL stateSelect(null)";
					$mysqli =  new mysqli($server,$user,$password,$database);
					
					if (mysqli_connect_errno()) {
						printf ("Connect failed: %s\n",mysqli_connect_error());
						exit();
					}
					
					if (!$result = $mysqli->query($query)) {
						printf ("Error: %s\n",$mysqli->error);
					}
					
					echo "<select id='state_abbreviatoin' name='state_abbreviation' onchange='changeEvent(this)'>";
					
					while ($row = $result->fetch_array(MYSQL_ASSOC)) {
						if ($row['state_abbreviation'] == $value) 
							printf ("<option value='%s' selected='true'>%s</option>",$row[state_abbreviation],$row[state_name]);
						else
							printf ("<option value='%s'</option>",$row[state_abbreviation],$row[state_name]);
					}
					echo "</select>";
					
					mysqli_close($mysqli);					
				}
			?>
			
									
																																
				
				echo $rowData . "75px'>&nbsp;" . $row["names_last"] . ' , ' . $row["names_first"] . ' ' . $row["names_mi"] . "</div>";
				echo $rowData . "92px'>&nbsp;" . $row["address_company"] . "</div>";
				echo $rowData . "110px'>&nbsp;" . $row["address_line1"] . "</div>";
				echo $rowData . "127px'>&nbsp;" . $row["address_line2"] . "</div>";
				echo $rowData . "144px'>&nbsp;" . $row["address_city"] . "</div>";
				echo $rowData . "161px'>&nbsp;" . $row["state_name"] . "</div>";
				echo $rowData . "178px'>&nbsp;" . $row["address_postal"] . "</div>";
				echo $rowData . "195px'>&nbsp;" . $row["country_name"] . "</div>";
				echo $rowData . "212px'>&nbsp;" . $row["customer_telephone"] . "</div>";
				echo $rowData . "229px'>&nbsp;" . $row["customer_email"] . "</div>";
				
				echo "<input type='button' value='Continue to items' onclick='itemsList()' style='position:absolute; top:250px; left:50px; right:auto; bottom:auto; height:22px; width:120px'>";
				echo "<input type='button' value='Continue to items' onclick='itemsList()' style='position:absolute; top:250px; left:50px; right:auto; bottom:auto; height:22px; width:120px'>";


				hidden($row,'customer_id');	
				hidden($row,'names_last');
				hidden($row,'names_first');
				hidden($row,'names_mi');
				hidden($row,'customer_email');
				hidden($row,'customer_id');	
			?>
		</form>
	</body>
	<?php mysql_close(); ?>
</html>
