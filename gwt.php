<?php $today = $today = date("l, F j, Y");  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
		<head>
				<title>Janet (Zhanna) Kulyk - GWT</title>
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<link rel="stylesheet" type="text/css" href="css/gen.css" />
				<!--[if IE]> <link href="css/ie.css" rel="stylesheet" /> <![endif]-->  
				<!--[if lt IE 7]> <link href="css/ie6.css" rel="stylesheet" /> <![endif]-->	
		</head>
		
		<body>		
			
				<?php include("inc/header.php") ?>				
				<div class="bg_nav">
						<div id="navtop" class="page">
								<?php include("inc/topNav.php") ?>
								<div id="date_switcher"><?php include("inc/switcher.inc"); ?></div>
						</div>
				</div>		
					
					<div id="content">
							<div id="content_container">
									<div id="education">
									
											<div id="col_left">
													<?php include("inc/w3c.inc") ?>	
											</div>
							
											<div id="col_middle">											
												<h3>Game: Hangman - Guess the Movie Name</h3>
												<div id="game"></div>													
											</div>
										
											<div id="col_right">
													<div class="resizable quotation rounded {10px}">
															<blockquote>
																	<div><span>&quot;</span>The most beautiful thing we can experience is the mysterious. It is the source of all true art and all science. He to whom this emotion is a stranger, who can no longer pause to wonder and stand rapt in awe, is as good as dead: his eyes are closed.<span>&quot;</span></div>
																	<div class="author">&mdash; Albert Eistein</div>
															</blockquote>
													</div>										
											</div>
										</div>
										
										<div class="bg_nav">
											<div id="navbottom" class="page">
													<?php include("inc/bottomNav.php") ?>
											</div>
										</div>
										
							</div>
				</div>												
				<?php include("inc/footer.inc"); ?>					
				<script type="text/javascript" src="js/optimized.js"></script>
				<script type="text/javascript">
						//<![CDATA[
						$('ul.nav>li') .hover(function(){$(this) .addClass('active');}, function(){$(this) .removeClass('active');});
						$('li.edu>a') .css('background-color','#005A9C') .css('color','#FFF') .css('border-bottom','1px solid #005A9C') .css('cursor','text');
						//]]>
				</script>
				<script type="text/javascript" src="com.gwtapps.tutorial.Game/com.gwtapps.tutorial.Game.nocache.js"></script>
				<?php include("inc/ga.php"); ?>
  	</body>
</html>