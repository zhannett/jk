<?
  	$folderPath = "http://www.smatac.com/janet/";
	  $homePath = "/home/smatacc/public_html/janet/";
    $img_size = getimagesize("$homePath$f");
    $w = $img_size[0];
    $h = $img_size[1];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html>
		<head>
			<title>Gallery Pop-Up</title>
			<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
			<script language="javascript">
				<!--
					function resizer(){	window.resizeTo(<? echo $w . "," . $h ?>) }
				//-->
			</script>
		</head>

		<body bgcolor="blue" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onload="javascript:resizer()">
			<a href="javascript:window.close()">
				<img src="<? echo $folderPath . $f;?>" border="0" alt="Click image to close the window" />
			</a>
		</body>
	</html>


