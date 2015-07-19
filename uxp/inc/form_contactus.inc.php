<form action="index.php" method="post" id="contactus_form">
	<fieldset>
    	<p>
        	<label for="fullname">Full Name: </label>
            <input type="text" name="fullname" value="<?php echo isset($_POST['fullname'])? $_POST['fullname'] : "; ?>" id="fullname" />
            <?php if(in_array('fullname',$validation)): ?>
            	<span class="error"><?php echo $error_messages['fullname'];?></span>span>
            <?php endif; ?>
        </p>
        <p>
        	<label for="email">Email: </label>
            <input type="text" name="email" value="" id="email" />
        </p>
        <p>
        	<label for="comment">Comment: </label>
            <textarea name="comment" id="comment"></textarea>
        </p>
        <p class="mand">* Mandatory fields</p>
        <p>
        	<input type="submit" name="submit" value="Send" />
        </p>
    </fieldset>
</form>
