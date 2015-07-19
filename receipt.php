<?php
	if ($receipt == "1234567") {
	 	header("Content-type: text/xml");
	 	$filePointer = fopen("example.xml", "r");
	 	$exampleXML = fread($filePointer, filesize("example.xml"));
	 	fclose($filePointer);
	 	print($exampleXML);
	} else {
	 	header("Content-type: text/plain");
	 	print("empty");
	}
?>