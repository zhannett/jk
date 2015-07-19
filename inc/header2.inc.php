		<div id="banner">
			<div class="bg_top"></div>		
			<div id="logo"><a href="http://janetkulyk.com">www.janetkulyk.com</a></div>										
			<div id="date_time"><span id="date"><?php echo date_format($datetime, "l, F j, Y");?></span><span id="clock">&nbsp;</span></div>
			<div class="bg_bottom"></div>
	    </div>
							
							
		<div id="doc4" class="yui-t1">
			
			<div id="hd">				
				<div class="bg_nav">
					<div id="navtop" class="page">
						<?php include("topNav.php") ?>
						<div id="date_switcher"><?php //include("inc/switcher.inc"); ?></div>							
						
													
						<ul id="menu_login">			
							<?php
								if (isset($_SESSION['user_id'])) {					
									// Add the logout link:
									echo '<li><a href="logout.php">Logout</a></li>
										  <li><a href="change_password.php">Change My Password</a></li>';					
								} else {				
									// Register, login, and change_password links:
									echo '<li><a href="register.php">Register</a></li>
										<li><a href="login.php">Login</a></li>';					
								}
							?>				
						</ul>		
						
						
						<?php
							if (isset($_SESSION['user_id'])) {												
								echo '<div class="hello">Hello ' . $_SESSION['first_name'] . '!</div>';					
							}
						?>								
					</div>					
				</div>				
			</div>	
				
	
		
			<div id="bd">	


			