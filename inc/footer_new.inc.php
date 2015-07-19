				</section>
			</div>
	</div>
	
	<footer>
		<div class="stay_connected_wrapper">
			<div class="stay_connected">
				<h2 class="inline">Stay Connected:</h2>
				<ul class="list_social">
					<li><a href="http://www.linkedin.com/in/janetkulyk"><div class="social linkedin"></div></a></li>
					<li><a href="mailto:janetkulyk@yahoo.com"><div class="social yahoo"></div></a></li>
					<li><a href="https://www.facebook.com/janetkulyk"><div class="social facebook"></div></a></li>
					<li><a href="https://twitter.com/zhannett"><div class="social twitter"></div></a></li>
					<li><a href="https://plus.google.com/110317853968895582194/"><div class="social googleplus"></div></a></li>
				</ul>
			</div>
		</div>
		<div class="fatfooter_wrapper">
			<div class="fatfooter">
				<div class="cols clearfix">
					<div class="col">
						<h2>For Clients <br/>&amp; Recruiters</h2>
						<ul>
							<li><a href="portfolio.php">Portfolio</a></li>
							<li><a href="skills.php">Skills</a></li>
							<li><a href="education.php">Education</a></li>
						</ul>							
					</div>													
					<div class="col">
						<h2>For Fellow<br/>Developers</h2>
						<ul>
							<li><a href="links.php">WebDev Links</a></li>
						</ul>
					</div>	
					<div class="col">
						<h2>For My<br/>Dear Friends</h2>
						<ul>
							<li><a href="photogalleries.php">Photogalleries</a></li>
							<li><a href="game.php">Game</a></li>
						</ul>
					</div>
					<div class="col">
						<h2>Highly<br/>Recommended</h2>
						<a href="http://www.manning.com/resig/" title="Secrets of the JavaScript Ninja"><img src="http://janetkulyk.s3.amazonaws.com/img/secrets_of_JS_ninja.png" alt="Secrets of the JavaScript Ninja" /></a>			
						<!-- <p>The untold secrets of the elite JavaScript programmers distilled for intermediate JavaScript programmers, bringing them completely up to speed with the challenges of modern JavaScript development. Explores specific techniques, strategies, and solutions to developing robust, cross-browser, JavaScript code.</p> -->
					</div>
				</div>
			</div>
		</div>
		<?php /*
		<div class="fatfooter2_wrapper">
			<div class="fatfooter2">
				<h2>Latest Tweets:</h2>
				<?php
					include('inc/twitter.inc.php');
					$twitter = new Twitter();
					$tweets = $twitter->getTweets('sitepointdotcom');
					if (is_array($tweets)) {
						echo '<ul id="tweets">';
						foreach ($tweets as $tweet) {
							echo '<li>' . date("jS M Y (H:i)", strtotime($tweet['created'])) . ' - ' . $tweet['text'] . '</li>';
						}
						echo '</ul>';
					}
					else echo '<p>' . $tweets . '</p>';
				?>
			</div>
		</div>
		*/ ?>
		<div class="copyright">
			&copy; Copyright <?=date('Y'); ?>. All Rights Reserved
		</div>
	</footer>

<script src="http://janetkulyk.s3.amazonaws.com/js/jquery-1.8.2.min.gz.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
<?php /* 
<script src="js/vendor/modernizr-2.6.2.js"></script>
<script src="js/application.js"></script>
<script src="js/behaviors/common.js"></script>
<script src="js/behaviors/clock.js"></script>
<script src="js/behaviors/topnav.js"></script>
<script src="js/behaviors/modal.js"></script>
<script src="js/behaviors/smartLinks.js"></script>
<script src="js/plugins/jquery.prettyPhoto.js"></script>
<script src="js/behaviors/photogallery.js"></script>
<script src="js/behaviors/prettyPhotoInit.js"></script>
<script src="js/behaviors/accordion.js"></script>
<script src="js/behaviors/contact.js"></script>
<script src="js/behaviors/loadGoogleMap.js"></script>
*/ ?>
<script src="http://janetkulyk.s3.amazonaws.com/js/concat-min.gz.js"></script>
<?php /* <script src="js/concat-min.js"></script>*/ ?>  
<?php /*
<script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
<script>
	window.onload = function() {
		CFInstall.check({
			mode: overlay,
			destination: "http://www.janetkulyk.com"
		});
	};
</script>
*/ ?>