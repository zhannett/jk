<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title='Janet (Zhanna) Kulyk - Photogalleries - NYC - Trump Tower';
	$page_keywords = 'Janet (Zhanna) Kulyk, web development, interface, frontend, photogalleries, photo gallery, image gallery, NYC, Trump Tower'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering. Photogallery: NYC - Trump Tower'; 
	$thickbox= '<link rel="stylesheet" type="text/css" href="css/thickbox.css" />'; 
	include("inc/header_new.inc.php")       
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
						<h1>Trump Tower</h1>
						<div id="gallery">														
							<ul class="gallery">		
								<li><a href="img/photo/nyc/trumptower/IMG_0171.JPG" rel="prettyPhoto[gallery]" title="Trump Tower"><img src="img/photo/nyc/trumptower/thumb/IMG_0171.JPG" width="60" height="80" alt="Trump Tower" /></a></li>
								<li><a href="img/photo/nyc/trumptower/IMG_0172.JPG" rel="prettyPhoto[gallery]" title="Trump Tower"><img src="img/photo/nyc/trumptower/thumb/IMG_0172.JPG" width="60" height="80" alt="Trump Tower" /></a></li>
								<li><a href="img/photo/nyc/trumptower/IMG_0175.JPG" rel="prettyPhoto[gallery]" title="Trump Tower"><img src="img/photo/nyc/trumptower/thumb/IMG_0175.JPG" width="60" height="80" alt="Trump Tower" /></a></li>
								<li><a href="img/photo/nyc/trumptower/IMG_0174.JPG" rel="prettyPhoto[gallery]" title="Trump Tower"><img src="img/photo/nyc/trumptower/thumb/IMG_0174.JPG" width="80" height="60" alt="Trump Tower" /></a></li>
								<li><a href="img/photo/nyc/trumptower/IMG_0177.JPG" rel="prettyPhoto[gallery]" title="Trump Tower"><img src="img/photo/nyc/trumptower/thumb/IMG_0177.JPG" width="80" height="60" alt="Trump Tower" /></a></li>
								<li><a href="img/photo/nyc/trumptower/IMG_0178.JPG" rel="prettyPhoto[gallery]" title="Trump Tower"><img src="img/photo/nyc/trumptower/thumb/IMG_0178.JPG" width="80" height="60" alt="Trump Tower" /></a></li>
							</ul>
						</div>	
					</div>
				</div>
			
				<div class="yui-u">		
					<div id="quot1" class="resizable">															
						<blockquote>
							<div><span>&quot;</span>Once a year, go some place you've never been before.<span>&quot;</span></div>
						</blockquote>
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