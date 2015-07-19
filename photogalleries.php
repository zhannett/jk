<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title ='Janet (Zhanna) Kulyk - Photogalleries';
	$page_keywords = 'Janet (Zhanna) Kulyk, web development, interface, frontend, photogalleries, photo gallery, image gallery'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering. Photogalleries.';
	$media = 'http://janetkulyk.s3.amazonaws.com/img/photo/';
	include("inc/header_new.inc.php")
?>
	
		<div class="aside_left" role="complementary">
			<?php include("inc/w3c.inc") ?>
		</div>
		
		<div class="main_section">
			<div class="main_content">						
				<h1>Photogalleries</h1>													
				<p>Here are some links to the pages where I keep my pictures. I am not a professional photographer but I like taking pictures; every of them is a piece of memory.</p>
				<p>This section of the website is still under development. Updates and new photogalleries will come shortly.</p>
				<ul class="galleries clearfix">
					<li id="to_gallery_cats">
						<a href="#" title="My Cats Photogallery">
							<article>
								<h5>My Cats</h5>
								<img src="<?php echo $media ?>cats/IMG_0146.JPG" width="80" height="60" alt="My Cats Image Gallery" title="My Cats Image Gallery"/>
							</article>
						</a>
					</li>
					<li id="to_gallery_around_nyc">
						<a href="#"  title="Around NYC Photogallery">
							<article>
								<h5>Around NYC</h5>
								<img src="<?php echo $media ?>nyc/grand_hyatt3.jpg" width="80" height="60" alt="Around NYC Image Gallery" title="Around NYC Image Gallery"/>
							</article>
						</a>
					</li>
					<li id="to_gallery_views_from_esb">
						<a href="#" title="Views from the Emapire State Building Photogallery">
							<article>
								<h5>Empire State Building</h5>
								<img src="<?php echo $media ?>nyc/views_esb/IMG_0127.JPG" width="80" height="60" alt="A View from the Empire State Building Image Gallery" title="A View from the Empire State Building Image Gallery" />
							</article>
						</a>
					</li>
					<li id="to_gallery_wallstreet">
						<a href="#" title="Wall Street Photogallery">
							<article>
								<h5>Wall Street</h5>
								<img src="<?php echo $media ?>nyc/wallstreet/IMG_0058.JPG" width="80" height="60" alt="Wall Street Image Gallery" title="Wall Street Image Gallery" />
							</article>
						</a>
					</li>
					<li id="to_gallery_trumptower">
						<a href="#" title="Trump Tower Photogallery">
							<article>
								<h5>Trump Tower</h5>
								<img src="<?php echo $media ?>nyc/trumptower/IMG_0171.JPG" width="60" height="80" alt="Trump Tower Image Gallery" title="Trump Tower Image Gallery" />
							</article>
						</a>
					</li>
				</ul>
				<section>
					<div id="gallery_cats" class="thegallery clearfix" data-behavior="photogallery prettyPhotoInit">
						<?php include("inc/galleries/gallery_cats.inc.php") ?>
					</div>
					<div id="gallery_around_nyc" class="thegallery clearfix" data-behavior="photogallery prettyPhotoInit"">
						<?php include("inc/galleries/gallery_around_nyc.inc.php") ?>
					</div>
					<div id="gallery_views_from_esb" class="thegallery clearfix" data-behavior="photogallery prettyPhotoInit"">
						<?php include("inc/galleries/gallery_views_from_esb.inc.php") ?>
					</div>
					<div id="gallery_wallstreet" class="thegallery clearfix" data-behavior="photogallery prettyPhotoInit"">
						<?php include("inc/galleries/gallery_wallstreet.inc.php") ?>
					</div>
					<div id="gallery_trumptower" class="thegallery clearfix" data-behavior="photogallery prettyPhotoInit"">	
						<?php include("inc/galleries/gallery_trumptower.inc.php") ?>
					</div>
				</section>
			</div>
			<iframe src="https://www.facebook.com/plugins/like.php?href=http://www.janetkulyk.com/photogalleries.php" scrolling="no" frameborder="0" style="border:none; width:450px; height:80px"></iframe>
		</div>	
		<div class="aside_right">
			<aside>
				<div class="quot">														
					<blockquote>
						Once a year, go some place you've never been before.
					</blockquote>
				</div>
			</aside>
		</div>
		<?php include("inc/footer_new.inc.php"); ?>
		<?php include("inc/ga.php"); ?>
  	</body>
</html>