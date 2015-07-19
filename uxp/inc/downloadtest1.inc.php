	<?php if($form_complete === FALSE): ?>
    
    <script type="text/javascript">
		var RecaptchaOptions = {
			theme : 'white'
		};
	</script>
       
	<form action="downloadtest1.php" method="post" id="download_form">
		<fieldset>
			<div>
				<label for="fullname">Full Name: <strong>*</strong></label>
				<input type="text" name="fullname" value="<?php echo isset($_POST['fullname'])? $_POST['fullname'] : ''; ?>" id="fullname" />
				<?php if(in_array('fullname', $validation)): ?><span class="error"><?php echo $error_messages['fullname']; ?></span><?php endif; ?>
			</div>
			<div>
				<label for="email">Email Address: <strong>*</strong></label>
				<input type="text" name="email" value="<?php echo isset($_POST['email'])? $_POST['email'] : ''; ?>" id="email" />
				<?php if(in_array('email', $validation)): ?><span class="error"><?php echo $error_messages['email']; ?></span><?php endif; ?>
			</div>
			<div>
				<label for="comment">Comment: <strong>*</strong></label>
				<textarea name="comment" id="comment"><?php echo isset($_POST['comment'])? $_POST['comment'] : ''; ?></textarea>
				<?php if(in_array('comment', $validation)): ?><span class="error"><?php echo $error_messages['comment']; ?></span><?php endif; ?>
			</div>
			<p class="mand">* Mandatory fields</p>
            <?php
			  require_once('recaptchalib.php');
			  $publickey = "6LegHsQSAAAAAMliR9VvtwN0krUlCrTUgWJRmFNO";
			  echo recaptcha_get_html($publickey);
			?>
            <div id="recaptcha_div"></div>
			<div class="submit">
				<input type="submit" name="submit" value="Send" id="submit" />
			</div>
		</fieldset>
	</form>
	<?php else: ?>
		<p class="thankyou">Thank you for your feedback!</p>
	<?php endif; ?>