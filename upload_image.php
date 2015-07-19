<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/1999/xhtml xml:lang="en" lang="en">
	<head>
		<title>Upload an Image</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<style type="text/css" title="text/css" media="all">
			.error {font-weight:bold; color:#CC0000}
		</style>
	</head>
	
	<body>
		<?php # Script 10.3 - upload_image.php
		
			if(isset($_POST['submitted'])) {
			
				// Check for an uploaded file:
				if(isset($_FILES['upload'])) {
				
					// Validate the type
					$allowed = array('image/pjpeg', 'image/jpeg', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/png', 'image/x-png');
					
					if(in_array($_FILES['upload']['type'], $allowed)) {
						
						// Move the file over
						if(move_uploaded_file($_FILES['upload']['tmp_name'], "../../uploads/{$_FILES['upload']['name']}")) {
							echo '<p><em>The file has been uploaded!</em></p>';
						}
						
					} else {  // invalid type
						echo '<div class="error"><p>Please upload a JPEG or PNG image.</p></div>';
					}
						
				}  // end of isset($_FILES['upload']) IF
				
				
				// Check for an error
				if ($_FILES['upload']['error'] > 0) {
					echo '<div class="error"><p>The file could not be uploaded because: <strong>';
					
					switch ($_FILES['upload']['error']) {
						case 1:
							print 'The file exceeds the upload_max_filesize setting in php.ini.';
							break;
						case 2:
							print 'The file exceeds the MAX_FILE_SIZE setting in the HTML form.';
							break;
						case 3:
							print 'The file was only partially uploaded.';
							break;
						case 4:
							print 'No file was uploaded.';
							break;
						case 6:
							print 'No temporary folder was available.';
							break;
						case 7:
							print 'Unable to write to the disk.';
							break;
						case 8:
							print 'File upload stopped.';
							break;							
						default:
							print 'A system error occured.';
							break;					
					}
					
					print '</strong></p></div>';
				}  // End of error IF
				
				if (file_exists($_FILES['upload']['tmp_name']) && is_file($_FILES['upload']['tmp_name'])) {
					unlink ($_FILES['upload']['tmp_name']);
				}
				
			} // End of the submitted conditional.		
		?>
		
		<form enctype="multipart/form-data" action="upload_image.php" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="524288" />
			<fieldset>
				<legend>Select a JPEG or PNG image of 512KB or smaller to be uploaded:</legend>
				
				<p><label for="upload">File: </label><input type="file" name="upload" /></p>
			</fieldset>
			<p><input type="submit" name="submit" value="Submit" /></p>
			<input type="hidden" name="submitted" value="TRUE" />
		</form>
		
	</body>
</html>
