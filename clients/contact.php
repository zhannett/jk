<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();	
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - Web Development Services - Contact Information'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, contact information, contact form'; 
	$page_desc = 'This page contains Janet (Zhanna) Kulyk&quot;s contact information: phone numbers, email, map as well as contact form.';
	$media = 'http://74fc8dbd1b965de1c679-6efcb597f6004a0f0ebadc4fc23e6156.r82.cf1.rackcdn.com';
	include("inc/header_new.inc.php");	
?>
	
		<div class="aside_left" role="complementary">
			<?php include("inc/w3c.inc") ?>
		</div>
				
		<div id="mainSection">
			<div class="main_content">
				<h1>Contact Information</h1>
				<div class="vcard">
					<p class="orange bold">Janet (Zhanna) Kulyk</p>
					<ul>
						<li><div class="contact_www"></div><span><a href="http://www.janetkulyk.com/" class="url">www.janetkulyk.com</a></span></li>
						<li><div class="contact_home"></div><span>Toronto, <abbr title="Ontario" class="region">ON</abbr>, M5R 2W5, Canada</span></li>
						<li><div class="contact_email"></div><span>E-mail: <a href="mailto:janetkulyk@yahoo.com">janetkulyk@yahoo.com</a></span></li>
						<li><div class="contact_phone"></div><span>Phone: <a href="tel:+14169294372">(416) 929-4372<a></span></li>
						<li><div class="contact_skype"></div><span>Skype: janetkulyk</span></li>
					</ul>
				</div>
				<div id="map" class="map" data-behavior="loadGoogleMap"></div>
			</div>
			<?php /* <!--
			<h2>Contact Me</h2>											
			//include_once("forms/form_contactme.php") ?>
			--> */ ?>
		</div>
		<div class="aside_right">
			<aside>
				<div class="quot">
					<blockquote>
						Non progrede est regrede.
					</blockquote>
				</div>
				<div class="quot">
					<blockquote>
						Not going forward is coming back.
					</blockquote>
				</div>
			</aside>
		</div>
		<?php include("inc/footer_new.inc.php"); ?>		
		<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAzVZ7k8GQ17_REu87hKibART2brbjrZI1bhFfmLcrkXQgFkYQyBT7L-ukC_SVUgALdt_ImjbYFDJMeA"></script>
		<?php include("inc/ga.php"); ?>
  	</body>
</html>