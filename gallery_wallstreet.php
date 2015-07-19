<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title='Janet (Zhanna) Kulyk - Photogalleries - NYC - Wall Street';
	$page_keywords = 'Janet (Zhanna) Kulyk, web development, interface, frontend, photogalleries, photo gallery, image gallery, NYC, Wall Street'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering';     
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
								<h1>Wall Street</h1>	
								<div id="gallery">															
									<ul class="gallery">		
										<li><a href="img/photo/nyc/wallstreet/IMG_0055.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0055.JPG" width="80" height="60" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0064.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0064.JPG" width="80" height="60" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0061.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0061.JPG" width="80" height="60" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0058.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0058.JPG" width="80" height="60" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0059.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0059.JPG" width="60" height="80" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0057.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0057.JPG" width="60" height="80" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0053.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0053.JPG" width="60" height="80" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0056.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0056.JPG" width="60" height="80" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0060.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0060.JPG" width="60" height="80" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0062.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0062.JPG" width="60" height="80" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0066.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0066.JPG" width="60" height="80" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0067.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0067.JPG" width="60" height="80" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0068.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0068.JPG" width="60" height="80" alt="Wall Street" /></a></li>
										<li><a href="img/photo/nyc/wallstreet/IMG_0069.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0069.JPG" width="60" height="80" alt="Wall Street" /></a></li>																			
										<li><a href="img/photo/nyc/wallstreet/IMG_0070.JPG" rel="prettyPhoto[gallery]" title="Wall Street"><img src="img/photo/nyc/wallstreet/thumb/IMG_0070.JPG" width="60" height="80" alt="Wall Street" /></a></li>
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
  	</body>
</html>