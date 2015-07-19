<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title>UXP Systems, Inc. - Upload Your Resume</title>
        <link rel="stylesheet" type="text/css" href="css/uxp.css" media="screen" />
    </head>
    
    <body>
    	<?php
						
						/*if(isset($_POST['submitted'])) {
							if(isset($_FILES['userfile'])) {
								
								*/
								if($_FILES['userfile']['error'] > 0) {
									echo '<p class="error">The file could not be uploaded because: <span class="strong">';
									switch ($_FILES['userfile']['error']) 
									{
										case 1:
											echo 'The file exceeds the upload_max_filesize setting in php.ini';
											break;
										case 2:
											echo 'The file exceeds the MAX_FILE_SIZE setting in the HTML form.';
											break;
										case 3:
											echo 'The file was only partially uploaded.';
											break;
										case 4:
											echo 'No file was uploaded.';
											break;
										case 6:
											echo 'Cannot upload file" No temp directory specified.';
											break;
										case 7:
											echo 'Upload failed: cannot write to the disk.';
											break;
								  }
								  exit;
								}
								echo '</span></p>';
								
								/*
								$allowed = array('doc','docs');
								if(in_array($_FILES['userfile']['type'], $allowed)) {
									if(move_uploaded_file($_FILES['upload']['tmp_name'], "../uploads/{$_FILES['upload']['name']}")) {
										//echo '<p>The file has benn uploaded!</p>';
									} else {
										echo '<p class="error">Please upload a document file.</p>';	
									}
								}
								*/
								
								// Does the file have the right MIME type?
								if($_FILES['userfile']['type']     != 'application/msword' 
									&& $_FILES['userfile']['type'] != 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' 
									&& $_FILES['userfile']['type'] != 'application/pdf')
								{
									echo 'Problem: file is not a Microsoft Word file or PDF file.';
									exit;
								}
								
								
								// Put the file where we'd like it
								$upfile = '../uploads/'.$_FILES['userfile']['name'];
								if(is_uploaded_file($_FILES['userfile']['tmp_name']))
								{
									if(!move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile))
									{
										echo 'Problem: Could not move file to destination directory.';
										exit;
									}
								}
								else 
								{
									echo 'Problem: Possible file upload attack. Filename: ';
									echo $_FILES['userfile']['name'];
									exit;	
								}
								echo 'File uploaded successfully.';
								
								// remove possible HTML and PHP tags from the file's contents
								$contents = file_get_contents($upfile);
								$contents = strip_tags($contents);
								file_put_contents($_FILES['userfile']['name'], $contents);
								
								
								
								
								if(file_exists ($_FILES['upload']['tmp_name']) && is_file($_FILES['upload']['tmp_name'])) {
									unlink($_FILES['upload']['tmp_name']);	 
								}
								/*
							}
						}
						*/
					?>	
						
        
    </body>
</html>