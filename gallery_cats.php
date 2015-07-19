<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title='Janet (Zhanna) Kulyk - Photogalleries - My Cats';
	$page_keywords = 'Janet (Zhanna) Kulyk, web development, interface, frontend, photogalleries, photo gallery, image gallery, my cats'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering. Photogallery: My Cats'; 
	$thickbox= '<link rel="stylesheet" type="text/css" href="css/thickbox.css" />'; 
	include("inc/header_new.inc.php");       
?>

			<div class="yui-b">
				<?php include("inc/w3c.inc") ?>	
				<?php include("inc/nav_photogallery.php") ?>
			</div>
			
			<div id="yui-main">
				<div class="yui-b">	
					<div class="yui-ge">
						<div class="yui-u first">
							<div id="main_content" class="resizable">
								<h1>My Cats</h1>								
								<p>This photogallery is devoted to my beloved cats.</p>
								<div id="gallery">																							
								<ul class="gallery">
									<li><a href="img/photo/cats/IMG_0359.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0359.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0072.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0072.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0100.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0100.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0102.JPG" rel="prettyPhoto[gallery]" title="Pussy Cat"><img src="img/photo/cats/thumb/IMG_0102.JPG" width="80" height="60" alt="Pussy Cat" /></a></li>
									<li><a href="img/photo/cats/IMG_0113.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0113.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0144.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0144.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0145.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0145.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0350.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0350.JPG" width="150" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0146.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0146.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0147.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0147.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0154.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0154.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0168.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0168.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0170.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0170.JPG" width="129" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0235.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0235.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0237.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0237.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0349.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0349.JPG" width="126" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0355.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0355.JPG" width="172" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0356.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0356.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0357.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0357.JPG" width="80" height="60" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0171.JPG" rel="prettyPhoto[gallery]" title="Pussy Cat"><img src="img/photo/cats/thumb/IMG_0171.JPG" width="60" height="80" alt="Pussy Cat" /></a></li>
									<li><a href="img/photo/cats/IMG_0236.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0236.JPG" width="60" height="80" alt="My Cats" /></a></li>
									<li><a href="img/photo/cats/IMG_0351.JPG" rel="prettyPhoto[gallery]" title="My Cats"><img src="img/photo/cats/thumb/IMG_0351.JPG" width="80" height="60" alt="My Cats" /></a></li>
								</ul>													
							</div>
						</div>
						</div>
	
						<div class="yui-u">		
									<div id="quot1" class="resizable">														
								<blockquote>
									<div><span>&quot;</span>A loving atmosphere in your home is the foundation for your life.<span>&quot;</span></div>
								</blockquote>
							</div>									
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("inc/footer_new.inc.php"); ?>	
		<script type="text/javascript" src="js/optim.js" charset="utf-8"></script>
		<script type="text/javascript" src="js/jquery.prettyPhoto.js" charset="utf-8"></script>	
		<script type="text/javascript">
			//<![CDATA[
				$('#sf-menu_fun>a') .css('background-color','#005A9C') .css('color','#FFF') .css('cursor','text');	
				$("a[rel^='prettyPhoto']").prettyPhoto({
					animationSpeed: 'normal', /* fast/slow/normal */
					padding: 40, /* padding for each side of the picture */
					opacity: 0.35, /* Value betwee 0 and 1 */
					showTitle: true, /* true/false */
					allowresize: true, /* true/false */
					counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
					theme: 'dark_rounded', /* light_rounded / dark_rounded / light_square / dark_square */
					callback: function(){}
				});
			//]]>
		</script>
		<script type="text/javascript" src="js/thickbox_min.js"></script>
		<?php include("inc/ga.php"); ?>
  	</body>
</html>