<?php

	$fh = fopen("resume.xml",'r') or die($php_errormsg);

	$content = fread($fh,filesize("resume.xml"));	  	  

	fclose($fh);

echo $content;



	$xsl = new DomDocument(); 

	$xsl->load("resume.xsl"); 

	$inputdom = new DomDocument(); 

	$inputdom->load("resume.xml");



	$proc = new XsltProcessor(); 

	$xsl = $proc->importStylesheet($xsl);

	$newdom = $proc->transformToDoc($inputdom); 

	print $newdom->saveXML(); 

?>





