<?php
	// include PEAR mail classes
	include_once('Mail.php');
	include_once('Mail/mime.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>UXP Systems, Inc. - Careers</title>
        <link rel="shortcut icon" href="favicon.ico" />
        <link rel="stylesheet" type="text/css" href="css/uxp.css" media="screen" /> 
        <link rel="stylesheet" type="text/css" href="css/recaptcha_upload_resume.css" media="screen" />
        <!--[if IE 8]>
        	<link rel="stylesheet" type="text/css" href="css/uxp_ie8.css" media="screen" /> 
		<![endif]-->
        <!--[if IE 7]>
        	<link rel="stylesheet" type="text/css" href="css/uxp_ie7.css" media="screen" /> 
		<![endif]-->
        <!--[if IE 6]>
        	<link rel="stylesheet" type="text/css" href="css/uxp_ie6.css" media="screen" /> 
		<![endif]-->
        <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>  
    </head>
    <body class="careers">
    	<div class="page">    
            <?php include("inc/header.inc.php") ?>
            <div class="content">
            	<h1><span>UXP SYSTEMS</span>CAREERS</h1>
                <div class="title_bar"></div>
                <div class="colleft">
                    <ul id="sidenav">
                    	<li><span id="careerslink">UXP Systems: Join the Team!</span></li>
                        <li><span id="careerlink1">April 15, 2011<br/>Posting:  Senior Platform Developer</span></li>
                        <li><span id="careerlink2">April 15, 2011<br/>Posting:  Build/Release Engineer</span></li>
                    </ul>
                </div>
                <div class="colright">
                    <div class="colrightcontainer">
                        <div id="openings">
                        	<div id="careers">
                            	<h2>UXP SYSTEMS</h2>
                        		<p class="intro">Powering the Connected Experience:  Join the Team!</p>
                            	<?php include("inc/careers.inc.php") ?>
                            </div>
                            <div id="career1">
                            	<h2>Senior Java Developer</h2>
                            	<?php include("inc/career1.inc.php") ?>
                            </div>
                            <div id="career2">
                            	<h2>Build/Release Engineer</h2>
                            	<?php include("inc/career2.inc.php") ?>
                            </div>
                        </div>
                       <?php
                            if(isset($_POST['submit'])) {
                                if(isset($_FILES['userfile'])) {
                                    if($_FILES['userfile']['error'] > 0) {
                                        echo '<p class="error">The file could not be uploaded because: <span class="strong">';
                                        switch ($_FILES['userfile']['error']) 
                                        {
                                            case 1:
                                                echo '<p>The file exceeds the upload_max_filesize (2M).</p>';
                                                include("inc/form_upload_resume.inc.php");
                                                break;
                                            case 2:
                                                echo '<p>The file exceeds the MAX_FILE_SIZE setting in the HTML form (1M).</p>';
                                                include("inc/form_upload_resume.inc.php");
                                                break;
                                            case 3:
                                                echo '<p>The file was only partially uploaded. Please try again.</p>';
                                                include("inc/form_upload_resume.inc.php");
                                                break;
                                            case 4:
                                                echo '<p>No file was uploaded. Please try again.</p>';
                                                include("inc/form_upload_resume.inc.php");
                                                break;
                                            case 6:
                                                echo '<p>Cannot upload file" No temp directory specified.</p>';
                                                include("inc/form_upload_resume.inc.php");
                                                break;
                                            case 7:
                                                echo '<p>Upload failed: cannot write to the disk. . Please try again.</p>';
                                                include("inc/form_upload_resume.inc.php");
                                                break;
                                      }
                                      exit;
                                    }
                                    echo '</span></p>';
                                    
                                    // Does the file have the right MIME type?
                                    if($_FILES['userfile']['type']     != 'application/msword' 
                                        && $_FILES['userfile']['type'] != 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' 
                                        && $_FILES['userfile']['type'] != 'application/pdf')
                                    {
                                        echo '<p class="error">Problem: file is not a Microsoft Word file or PDF file.</p>';
                                        include("inc/form_upload_resume.inc.php");
                                        exit;
                                    } 
                                    else
                                    {
                                        
                                        // Put the file where we'd like it
                                        $upfile = '../../uploads/'.$_FILES['userfile']['name'];
                                        if(is_uploaded_file($_FILES['userfile']['tmp_name']))
                                        {
                                            if(!move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile))
                                            {
                                                echo 'We experience problems with uploading your file. Please try again.';
                                                exit;
                                            }
                                        }
                                        else 
                                        {
                                            echo 'Problem: Possible file upload attack. Filename: ';
                                            echo $_FILES['userfile']['name'];
                                            exit;	
                                        }
                                        echo '<p class="success">File uploaded successfully.</p>';
                                        
                                        // remove possible HTML and PHP tags from the file's contents
                                        $contents = file_get_contents($upfile);
                                        $contents = strip_tags($contents);
                                        file_put_contents($_FILES['userfile']['name'], $contents);
                                        
                                        if(file_exists ($_FILES['upload']['tmp_name']) && is_file($_FILES['upload']['tmp_name'])) {
                                            unlink($_FILES['upload']['tmp_name']);	 
                                        }
                                    
                                        $file = '../../uploads/'.basename($_FILES['userfile']['name']);
                                        $crlf = "\n";
                                        $hdrs = array(
                                                      'From'    => 'janetkulyk@yahoo.com',
                                                      'Subject' => 'Thought Paper'
                                                      );
                                        
                                        $mime = new Mail_mime($crlf);
                                        
                                        $mime->setTXTBody($text);
                                        $mime->setHTMLBody($html);
                                        $mime->addAttachment($file, $_FILES['userfile']['type']);
                                        
                                        //do not ever try to call these lines in reverse order
                                        $body = $mime->get();
                                        $hdrs = $mime->headers($hdrs);
                                        
                                        $mail =& Mail::factory('mail');
                                        $mail->send('gemini.waghmare@uxpsystems.com,jerry.wang@uxpsystems.com, design_patterns@hotmail.com', $hdrs, $body);
                                        echo '<p class="success">Thank you for submitting your resume.</p>';
                                    }
                                }	
                            }
                            else {
                                include("inc/form_upload_resume.inc.php");
                            }
                        ?>
                    </div>
                 </div>
            </div>
            <?php include("inc/footer.inc.php") ?>
        </div>
        <script type="text/javascript" src="js/careers.js"></script> 
    </body>
</html>