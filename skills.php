<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title='Janet (Zhanna) Kulyk - Computer Skills'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering';
	$media = 'http://janetkulyk.s3.amazonaws.com/img/';
	include("inc/header_new.inc.php");   
?>

			<div class="aside_left" role="complementary">
				<?php include("inc/w3c.inc") ?>
			</div>
									
			<div class="main_section">
				<div id="skills" class="main_content" data-behavior="prettyPhotoInit">
					<h1 class="hidden_seo">Professional Skills</h1>
					<h2>Certificates</h2>
					<div class="clearfix">
						<ul data-behavior="smartLinks">
							<li><span><strong>2015</strong> - <strong>JavaScript</strong> Certificate (</span><a href="http://www.testdome.com/cert/9sa7a5vy48">TestDome</a><span>)</span></li>
							<li><span><strong>2015</strong> - <strong>HTML / CSS, JavaScript</strong> Certificate (</span><a href="http://www.testdome.com/cert/pcqgf6jjzr">TestDome</a><span>)</span></li>
							<li><span><strong>2005</strong> - <strong><acronym title="Cascading Style Sheets">CSS2</acronym></strong> Certificate (</span><a href="http://www.brainbench.com">www.brainbench.com</a><span>)</span></li>
							<li><span><strong>2005</strong> - <strong><acronym title="Extensible Markup Language">XML</acronym></strong>  Certificate (</span><a href="http://www.brainbench.com">www.brainbench.com</a><span>)</span></li>
							<li><span><strong>2005</strong> - <strong>PHP4</strong> Certificate (</span><a href="http://www.brainbench.com">www.brainbench.com</a><span>)</span></li>
							<li><span><strong>2005</strong> - <strong>JavaScript</strong> Certificate (</span><a href="http://www.brainbench.com">www.brainbench.com</a><span>)</span></li>
							<li><span><strong>2002</strong> - <strong><acronym title="Structured Query Language">SQL</acronym> and PL/SQL</strong>  Certificate (</span><a href="http://www.oracle.com">ORACLE</a><span>)</span></li>
							<li><span><strong>2000</strong> - <strong>MS SQL Server 6.5</strong> Certificate (</span><a href="http://www.brainbench.com">www.brainbench.com</a><span>)</span></li>
						</ul>
					</div>
					<ul class="gallery clearfix">
						<li style="margin-right: 2rem"><a href="http://www.testdome.com/cert/9sa7a5vy48" class="testdome-certificate-stamp gold"><span class="testdome-certificate-name">Janet Kulyk</span><span class="testdome-certificate-test-name">JS </span><span class="testdome-certificate-card-logo">TestDome<br />Certificate</span></a></li>
						<li><a href="http://www.testdome.com/cert/pcqgf6jjzr" class="testdome-certificate-stamp gold"><span class="testdome-certificate-name">Janet Kulyk</span><span class="testdome-certificate-test-name">HTML/CSS, JS </span><span class="testdome-certificate-card-logo">TestDome<br />Certificate</span></a></li>
						<li><a href="<?php echo $media ?>certificates/sql.jpg" class="certimg" rel="prettyPhoto[gallery]" title="SQL Server Certificate"><img src="<?php echo $media ?>certificates/sql-thumb.jpg" width="120" height="91" alt="SQL Server Certificate" /></a></li>
						<li><a href="<?php echo $media ?>certificates/php.jpg" class="certimg" rel="prettyPhoto[gallery]" title="PHP Certificate"><img src="<?php echo $media ?>certificates/php-thumb.jpg"  width="120" height="91"alt="PHP Certificate" /></a></li>		
						<li><a href="<?php echo $media ?>certificates/js.jpg" class="certimg" rel="prettyPhoto[gallery]" title="JavaScript Certificate"><img src="<?php echo $media ?>certificates/js-thumb.jpg" width="120" height="91" alt="JavaScript Certificate" /></a></li>		
						<li><a href="<?php echo $media ?>certificates/xml.jpg" class="certimg" rel="prettyPhoto[gallery]" title="XML Certificate"><img src="<?php echo $media ?>certificates/xml-thumb.jpg" width="120" height="91" alt="XML Certificate" /></a></li>	
						<li><a href="<?php echo $media ?>certificates/css.jpg" class="certimg" rel="prettyPhoto[gallery]" title="CSS2 Certificate"><img src="<?php echo $media ?>certificates/css-thumb.jpg" width="120" height="91"alt="CSS2 Certificate" /></a></li>
						<li><a href="<?php echo $media ?>certificates/oracle.jpg" class="certimg" rel="prettyPhoto[gallery]" title="Oracle certificate"><img src="<?php echo $media ?>certificates/oracle-thumb.jpg" width="91" height="120"alt="Oracle certificate" /></a></li>	
					</ul>


					
					<h2>Computer Skills</h2>
					<dl>																	
						<dt>Operating Systems:</dt>
						<dd>Windows 7/XP, MAC OS X, Linux</dd>
					</dl>	
					<dl>	
						<dt>Programming Languages:</dt>
						<dd>HTML5/HTML4/XHTML/DHTML; CSS1/CSS2/CSS3; JavaScript/DOM-Scripting/jQuery;<br/>XML/XSL(XPath, XSLT);<br/>PHP 3/4/5, JSP;<br/>SQL</dd>
					</dl>
					<dl>	
						<dt>Technologies:</dt>
						<dd>XML, JSP, ASP, OOD, RDBMS, AJAX</dd>	
					</dl>
					<dl>									
						<dt>Databases:</dt>
						<dd>MySQL</dd>
					</dl>
					<dl>										
						<dt>Software:</dt>
						<dd>MS Office, Adobe Suite, phpMyAdmin</dd>
					</dl>
					<dl>	
						<dt>Content Management:</dt>
						<dd>TOPS (TorStar appropriate Open Publishing System)</dd>	
					</dl>
					<dl>									
						<dt>e-Commerce:</dt>
						<dd>Zen Cart</dd>	
					</dl>
					<dl>									
						<dt>Internet:</dt>
						<dd>Apache, Tomcat, TCP/IP, HTTP, SMTP, FTP</dd>	
					</dl>
					<dl>									
						<dt>Web Design:</dt>
						<dd>Wireframes design, information architecture, layouts, templates, usability, accessibility, W3C-compliancy, cross-browser compatibility, responsive design;</dd>
					</dl>
					<dl>										
						<dt>QA:</dt>
						<dd>Experience designing test cases and test plans, Mercury Test Director, Mercury Quality Center</dd>									
					</dl>
				</div>
				<iframe src="https://www.facebook.com/plugins/like.php?href=http://www.janetkulyk.com/skills.php" scrolling="no" frameborder="0" style="border:none; width:450px; height:80px"></iframe>
			</div>				
			<div class="aside_right">
				<aside>
					<div class="quot">
						<blockquote>
							We are all building the future through the work and the projects that we do today.
						</blockquote>
					</div>
					<div class="quot">
							<blockquote>
								We shape our buildings: thereafter they shape us.
								<cite>Winston Churchill</cite>
							</blockquote>
					</div>		
					<div class="quot">						
						<blockquote>
							Judge your success by what you had to give up in order to get it.
						</blockquote>							
					</div>
				</aside>
			</div>
		</div>
		<script type="text/javascript">var stylesheet = "http://www.testdome.com/Content/source/stylesheets/embed.css", link = document.createElement("link"); link.href = stylesheet, link.type = "text/css", link.rel = "stylesheet", link.media = "screen,print", document.getElementsByTagName("head")[0].appendChild(link);</script>
		<?php include("inc/footer_new.inc.php"); ?>
		<?php include("inc/ga.php"); ?>
	</body>		
</html>