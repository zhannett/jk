<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        	<title></title>
            <link rel="stylesheet" type="text/css" href="css/recaptcha.css" media="screen" />
			
        </head>
        
        <body>
        
        <script type="text/javascript">
		 	var RecaptchaOptions = {
				theme : 'clean'
		 	};
		 </script>
        <form method="post" action="verify.php">
			<?php
              require_once('recaptchalib.php');
              $publickey = "6LegHsQSAAAAAMliR9VvtwN0krUlCrTUgWJRmFNO";
              echo recaptcha_get_html($publickey);
            ?>
        	<input type="submit" />
      	</form>
      
      
        </body>
        
</html>




