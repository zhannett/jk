<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title='Janet (Zhanna) Kulyk - Portfolio'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering';     
	$media = 'http://janetkulyk.s3.amazonaws.com/img/';
	include("inc/header_new.inc.php");
?>

		<div class="aside_left" role="complementary">
			<?php include("inc/w3c.inc") ?>
		</div>
	
		<div  class="main_section">
			<div id="portfolio" class="main_content" data-behavior="smartLinks">			
				<h1>Portfolio</h1>
				<?php include("inc/newwindow.inc") ?>
				<p class="payattention">This list contains only links to public web sites. I worked on multiple web applications as well but they are not public.</p>
				<ul class="portfolio" data-behavior="colorLinks">
					<li><a href="http://www.pialaw.ca">www.pialaw.ca</a> <span>(developed image rotator with video player for landing page; the player is implemented with <em>video</em> tag and fall back to Flash player if <em>video</em> tag is not supported, 2012)</span></li>
					<li><a href="http://m.janetkulyk.com">m.janetkulyk.com</a> <span>(developed demo mobile web site from scratch; mobile site is compatible with wide range of mobile devices)</span></li>
					<li><a href="http://www.olg.ca/lotteries/games/howtoplay.do?game=rockpaperscissors">www.olg.ca/lotteries/games/howtoplay.do?game=rockpaperscissors</a> <span>(developed code for Rock-Paper-Scissor web page, 2011 - 2012)</span></li>
					<li><a href="http://www.dose.ca">www.dose.ca</a> <span>(developed front-end for dose.ca re-design project, 2009)</span></li>
					<li><a href="index.php">www.janetkulyk.com/</a> <span>(applied Yahoo! template/grid architecture and re-wrote CSS for the web site, 2009)</span></li>
					<li><a href="http://cox.com">http://www.cox.com</a> <span>(participated in re-designing Cox Communications, Inc. web site, front end development, 2009)</span></li>
					<li><a href="http://spark.chevrolet.com">http://spark.chevrolet.com</a> <span>(participated in development multilingual microsite for Geneva-2009 auto show, 2009)</span></li>
					<li class="internal"><a href="http://www.janetkulyk.com/game.php">www.janetkulyk.com/game.php</a> <span>(GWT, 2009)</span></li>
					<li><a href="http://www.janetkulyk.com" class="internal">www.janetkulyk.com</a> <span>(Full re-design of the website; XHTML, CSS, JavaScript, jQuery, PHP5, MySQL5, I18N, 2008 - 2009)</span></li>
					<li><span>Developed landing pages for Bank of America microsites (2008):</span>
						<ul id="BofA">																	
							<li><a href="http://promotions.bankofamerica.com/smallbusiness/multiproduct/">Small Business - Multiproduct</a></li>
							<li><a href="http://promotions.bankofamerica.com/nfl/nfl/">NFL</a></li>
							<li><a href="http://promotions.bankofamerica.com/nfl/nfl/dallasCowboys.html">NFL - Dallas Cowboys</a></li>
							<li><a href="http://promotions.bankofamerica.com/mlb/mlb/">Military Banking</a></li>
						</ul>
					</li>
					<li><a href="http://www.thankyou.com">www.thankyou.com</a> <span>(developed semantic HTML templates for ThankYou Rewards Network on-line shopping loyalty program for Citibank, 2008)</span></li>
					<li><a href="http://www.eyeweekly.com">www.eyeweekly.com</a> <span>(built dynamic features for websites in .NET framework using TorStar Digital proprietary TOTEL technology and TOPS CMS, as well as XML, XSLT, xPath,  and Lucene search engine queries), 2007</span></li>
					<li><a href="http://www.toronto.com/movies">www.toronto.com/movies</a> <span>(built dynamic features for websites in .NET framework using TorStar Digital proprietary TOTEL technology and TOPS CMS, as well as XML, XSLT, xPath,  and Lucene search engine queries), 2007</span></li>
					<li><a href="http://mobile.thestar.com">mobile.thestar.com</a> <span>(developed mobile CMS-based website mobile.thestar.com), 2007</span></li>
					<li><a href="http://www.mississauga.com">www.mississauga.com</a> <span>(built dynamic features for websites in .NET framework using TorStar Digital proprietary TOTEL technology and TOPS CMS, as well as XML, XSLT, xPath,  and Lucene search engine queries), 2007</span></li>
					<li><a href="http://www.virginmobile.ca">www.virginmobile.ca</a> <span>(designed and developed XHTML/CSS/SSI template architecture for the whole website; developed clear, cross-browser compatible, valid, CSS-based code according to W3C standards for layouts, templates, web pages), 2005&nbsp;-&nbsp;2007</span></li>
					<li><a href="http://www.canada.com">www.canada.com</a> <span>(developed  cross-browser compatible, valid, W3C compliant XHTML code for layouts, templates, web pages for sections &quot;Topics&quot; and &quot;Find it&quot;), 2005</span></li>
					<li><a href="http://www.cci-eschool.com">www.cci-eschool.com</a> <span>(Macromedia Authorware, Adobe Photoshop, created e-learning web modules for MS Office 2003), 2003 - 2004</span></li>
					<li><a href="http://www.desiconnection.ca">www.desiconnection.ca</a> <span>(PHP-MySQL, back end, admin site, connected back end with front end), 2003</span></li>
					<li><a href="http://www.preetlari.com">www.preetlari.com</a> <span>(PHP-MySQL, back end, admin site, connected back end with front end), 2003</span></li>
					<li><a href="http://www.bhajanawali.com">www.bhajanawali.com</a> <span>(PHP-MySQL, back end, admin site, connected back end with front end), 2003</span></li>
					<li><a href="http://www.punjabilehran.com">www.punjabilehran.com</a> <span>(PHP-MySQL, back end, admin site, connected back end with front end), 2003</span></li>
					<li><a href="http://janetkulyk.com/Flash/FASHION/fashion.html">Small Flash Demo Project, 2002</a></li>
				</ul>
			</div>
			<iframe src="https://www.facebook.com/plugins/like.php?href=http://www.janetkulyk.com/portfolio.php" scrolling="no" frameborder="0" style="border:none; width:450px; height:80px"></iframe>
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
						In order that people may be happy in their work, these three things are needed: They must be fit for it. They must not do too much of it. And they must have a sense of success in it.
						<cite>John Ruskin, 1850</cite>
					</blockquote>									
				</div>							
				<div class="quot">
					<blockquote>
						The art of leadership is saying no, not yes. It is very easy to say yes.
						<cite>Tony Blair, UK Prime Minister, 1997 - 2007</cite>
					</blockquote>									
				</div>
				<div class="quot">
					<blockquote>
						We shape our buildings: thereafter they shape us.
						<cite>Winston Churchill</cite>
					</blockquote>
				</div>
			</aside>
		</div>
	<?php include("inc/footer_new.inc.php"); ?>
	<?php include("inc/ga.php"); ?>
  	</body>		
</html>
