<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title='Janet (Zhanna) Kulyk - Photogalleries - NYC - Around the City';
	$page_keywords = 'Janet (Zhanna) Kulyk, web development, interface, frontend, photogalleries, photo gallery, image gallery, NYC'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering. Photogallery: NYC.'; 
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
								<h1>Around NYC</h1>
								<div id="gallery">
									<ul class="gallery">															
										<li><a href="img/photo/nyc/central_park_st1.jpg" rel="prettyPhoto[gallery]" title="Central Park St."><img src="img/photo/nyc/thumb/central_park_st1.jpg" width="80" height="60" alt="Central Park St." /></a></li>		
										<li><a href="img/photo/nyc/cenral_park.jpg" rel="prettyPhoto[gallery]" title="Central Park St."><img src="img/photo/nyc/thumb/cenral_park.jpg" width="80" height="60" alt="Central Park" /></a></li>
										<li><a href="img/photo/nyc/IMG_0013.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0013.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0014.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0014.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0015.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0015.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0017.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0017.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0018.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0018.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0019.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0019.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0020.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0020.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0021.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0021.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0024.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0024.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0027.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0027.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0028.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0028.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0037.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0037.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0048.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0048.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0049.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0049.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0050.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0050.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0051.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0051.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0052.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0052.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0071.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0071.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0090.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0090.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0102.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0102.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0108.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0108.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0150.JPG" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0150.JPG" width="80" height="60" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0157.JPG" rel="prettyPhoto[gallery]" title="Christmas Decoration on 5th Avenue"><img src="img/photo/nyc/thumb/IMG_0157.JPG" width="80" height="60" alt="Christmas Decoration on 5th Avenue" /></a></li>
										<li><a href="img/photo/nyc/grand_hyatt1.jpg" rel="prettyPhoto[gallery]" title="Grand Hyatt Hotel, Manhattan"><img src="img/photo/nyc/thumb/grand_hyatt1.jpg" width="80" height="60" alt="Grand Hyatt Hotel, Manhattan" /></a></li>		
										<li><a href="img/photo/nyc/grand_hyatt2.jpg" rel="prettyPhoto[gallery]" title="Grand Hyatt Hotel, Manhattan"><img src="img/photo/nyc/thumb/grand_hyatt2.jpg" width="80" height="60" alt="Grand Hyatt Hotel, Manhattan" /></a></li>
										<li><a href="img/photo/nyc/grand_hyatt3.jpg" class="thickbox" rel="prettyPhoto[gallery]" title="Grand Hyatt Hotel, Manhattan"><img src="img/photo/nyc/thumb/grand_hyatt2.jpg" width="80" height="60" alt="Grand Hyatt Hotel, Manhattan" /></a></li>		
										<li><a href="img/photo/nyc/IMG_0001.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0001.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/statue_of_liberty1.jpg" class="thickbox" rel="prettyPhoto[gallery]" title="Statue of Liberty"><img src="img/photo/nyc/thumb/statue_of_liberty1.jpg" width="60" height="80" alt="Statue of Liberty" /></a></li>		
										<li><a href="img/photo/nyc/IMG_0008.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0008.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0091.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0091.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0009.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0009.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0010.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0010.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0011.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0011.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0103.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0103.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0104.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0104.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_00012.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0012.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0032.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="Statue of Liberty"><img src="img/photo/nyc/thumb/IMG_0032.JPG" width="60" height="80" alt="Statue of Liberty" /></a></li>
										<li><a href="img/photo/nyc/IMG_0034.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="Statue of Liberty"><img src="img/photo/nyc/thumb/IMG_0034.JPG" width="60" height="80" alt="Statue of Liberty" /></a></li>
										<li><a href="img/photo/nyc/IMG_0081.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0081.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0082.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0082.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0084.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0084.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0087.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0087.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0089.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0089.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0105.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0105.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0106.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0106.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0107.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0107.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0137.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0137.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0149.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0149.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0151.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0151.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0153.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0153.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0158.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="Christmas Decoration on 5th Avenue"><img src="img/photo/nyc/thumb/IMG_0158.JPG" width="60" height="80" alt="Christmas Decoration on 5th Avenue" /></a></li>
										<li><a href="img/photo/nyc/IMG_0160.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0160.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0163.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0163.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0164.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0164.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0165.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0165.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0168.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0168.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0169.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0169.JPG" width="60" height="80" alt="?" /></a></li>
										<li><a href="img/photo/nyc/IMG_0170.JPG" class="thickbox" rel="prettyPhoto[gallery]" title="?"><img src="img/photo/nyc/thumb/IMG_0170.JPG" width="60" height="80" alt="?" /></a></li>												
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
			<?php include("inc/ga.php"); ?>
  	</body>
</html>