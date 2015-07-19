<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - Web Development Services WebDevLinks'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, URL, link, links, JavaScript, jQuery, PHP'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. This page contains a collection of web links (URLs)';
	$media = 'http://janetkulyk.s3.amazonaws.com/img/';
	include("inc/header_new.inc.php");
?>
		<div class="aside_left" role="complementary">
			<?php include("inc/w3c.inc") ?>
		</div>
		
		<div class="main_section">
			<div id="links" class="main_content">		
				<h1>Web Pro Links</h1>
				<?php include("inc/newwindow.inc") ?>				
				<div id="links">
					<div class="container">
						<dl class="accordion" data-behavior="accordion smartLinks">
							<dt>
								<a href="#"><span></span> General Links</a>
							</dt>
							<dd>
								<ul>
									<li><a href="http://w3.org">World Wide Web Consortium</a></li>
									<li><a href="http://validator.w3.org">W3C HTML Validation Service</a></li>
									<li><a hre="http://caniuse.com/">Can I Use?</a></li>
									<li><a href="http://www.sitepoint.com">Site Point</a></li>
									<li><a href="http://developer.yahoo.com">Yahoo Develolper Network</a></li>
									<li><a href="http://developer.yahoo.com/ypatterns/">Yahoo Develolper Network - Pattern Library</a></li>
									<li><a href="http://www.quirksmode.org">www.quirksmode.org</a></li>
									<li><a href="http://yuilibrary.com/yui/environments/">Browser support chart by Yahoo</a></li>
									<li><a href="http://www.w3schools.com/browsers/browsers_stats.asp">Browser Statistics</a></li>
									<li><a href="http://www.netmagazine.com/features/top-50-books-web-designers-and-developers">Top 50 Books for Web Designers and Developers</a></li>
									<li><a href="http://openjsan.org/">JavaScript Archive Network</a></li>
									<li><a href="http://ejohn.org/">John Resig's Website</a></li>
									<li><a href="http://csszengarden.com">CSS Zen Garden</a></li>
									<li><a hre="http://css-tricks.com/snippets/css/common-unicode-icons/">Common Unicode Icons</a></li>
								</ul>
							</dd>
							<dt>
								<a href="#"><span></span> JavaScript</a>
							</dt>
							<dd>
								<ul>
									<li><a href="http://news.dice.com/2012/09/26/javascript-interview-questions/">8 JavaScript Interview Questions</a></li>
									<li><a href="http://javascript.crockford.com/">Douglas Crockford</a></li>
									<li><a href="http://jquery.com">jQuery</a></li>
									<li><a href="http://ajaxian.com">Ajaxian</a></li>
									<li><a href="http://domscripting.com">DOM Scripting Blog</a></li>
									<li><a href="http://www.davidflanagan.com">David Flanagan</a></li>
									<li><a href="http://www.danwebb.net">Dan Webb</a></li>
									<li><a href="http://andrewdupont.net">Painfully Obvious</a></li>
									<li><a href="http://simon.incutio.com">Simon Willison's Weblog</a></li>
									<li><a href="http://erik.eae.net">Erik's Weblog</a></li>
									<li><a href="http://me.eae.net">Emil's Chronicle</a></li>
									<li><a href="http://dean.edwards.name/">Dean Edwards</a></li>
								</ul>
							</dd>
							<dt>
								<a href="#"><span></span> JavaScript - Events</a>
							</dt>
							<dd>
								<ul>	
									<li><a href="http://www.quirksmode.org/dom/events/index.html">Event compatibility tables</a></li>		
									<li><a href="http://www.w3.org/TR/DOM-Level-2-Events/events.html">W3C DOM Level 2 Events</a></li>
									<li><a href="http://msdn.microsoft.com/en-us/ie/default.aspx">Internet Explorer HTML Events</a></li>	
								</ul>
							</dd>
							<dt>
								<a href="#"><span></span> JavaScript Debugging tools</a>
							</dt>
							<dd>
								<ul>
									<li><a href="http://www.jquery.com">jQuery</a></li>
									<li><a href="http://docs.jquery.com/Selectors">jQuery Selectors</a></li>
									<li><a href="http://devkick.com/lab/galleria/">Galleria</a></li>
									<li><a href="http://yensdesign.com/2009/01/how-to-set-maxlength-textareas-by-creating-jquery-plugin/">Maxlength in textareas by jQuery plugin</a></li>
								</ul>
							</dd>
							<dt>
								<a href="#"><span></span> jQuery</a>
							</dt>
							<dd>
								<ul>
									<li><a href="http://www.getfirebug.com">Firebug</a></li>
									<li><a href="http://livehttpheaders.mozdev.org">Live HTTP Headers</a></li>
									<li><a href="http://www.blunck.se/iehttpheaders/iehttpheaders.html">ieHTTPHeaders</a></li>
									<li><a href="http://www.charlesproxy.com/">Charles Web Debugging Proxy</a></li>
								</ul>		
							</dd>
							<dt>
								<a href="#"><span></span> QA</a>
							</dt>
							<dd>
								<ul>
									<li><a href="http://fogbugz.simplymap.net/fogbugz/help/topics/basics/Thebasicsofbugtracking.html">The Basics of Bug Tracking</a></li>
									<li><a href="http://fogbugz.simplymap.net/fogbugz/help/topics/basics/Tentipsforbugtracking.html">10 Tips for Bug Tracking</a></li>
									<li><a href="http://fogbugz.simplymap.net/fogbugz/help/topics/basics/Filters.html">FogBugz - Filters</a></li>
									<li><a href="http://fogbugz.simplymap.net/fogbugz/help/topics/basics/Savingfilters.html">FogBugz - Saved Filters</a></li>
									<li><a href="http://fogbugz.simplymap.net/fogbugz/help/topics/basics/Capturescreenshots.html">FogBugz - Capture Screenshots</a></li>
									<li><a href="http://fogbugz.simplymap.net/fogbugz/help/topics/basics/Findingoutaboutchanges.html">FogBugz - Finding Out About Changes</a></li>
								</ul>	
							</dd>
							<dt>
								<a href="#"><span></span>Installations</a>
							</dt>
							<dd>
								<ul>
									<li><a href="http://addyosmani.com/blog/client-side-build-process/">Client-Side Build Process</a></li>
									<li><a href="http://techxplorer.com/2011/02/26/installing-apache-ant-on-mac-os-x/">Installing Apache Ant on Mac OS X</a></li>
									<li><a href="http://akrabat.com/computing/setting-up-php-mysql-on-os-x-10-8-mountain-lion/">Setting up PHP & MySQL on OS X 10.8 Mountain Lion (including PEAR and PECL)</a></li>
									<li><a href="http://serverfault.com/questions/361049/php-autoconf-errors-on-mac-os-x-10-7-3-when-trying-to-install-pecl-extensions">$PHP_AUTOCONF</a></li>
									<li><a href="http://www.cameronstokes.com/2011/07/20/compressed-content-amazon-s3-and-cloudfront/">Compressed content on Amazon S3</a></li>
									<li><a href="http://log.adamwilcox.org/2012/05/04/css-on-amazon-s3/">CSS on Amazon S3</a></li>
									<li><a href="http://kvz.io/blog/2007/07/16/control-cache-expire-dates-using-htaccess/">Control cache expire dates using htaccess</a></li>
									<li><a href="http://www.jonsblog.org/2011/11/28/installing-mysql-on-osx-lion-server/">Installing MySQL on OS X Lion Server</a></li>
									<li><a href="http://architectryan.com/2012/10/02/add-to-the-path-on-mac-os-x-mountain-lion/#.UP4qyqFxfhA">Add PATH on Mac OS X Mountain Lion</a></li>
									<li><a href="http://shiftcommathree.com/articles/how-to-install-mongodb-on-os-x">How to Install MongoDB on OS X</a></li>
								</ul>		
							</dd>
							
						</dl>
					</div>
							
					<div class="container">
						<dl class="accordion" data-behavior="accordion">
							<dt>
								<a href="#"><span></span> HTML5</a>
							</dt>
							<dd>
								<ul>
									<li><a href="http://html5readiness.com/">HTML5 Readiness</a></li>
									<li><a href="http://html5boilerplate.com/">HTML5 Boilerplate</a></li>
									<li><a href="http://www.initializr.com/">Initializr</a></li>
									<li><a href="http://html5doctor.com/avoiding-common-html5-mistakes/">Avoiding Common HTML5 Mistakes</a></li>
								</ul>
							</dd>
							<dt>
								<a href="#"><span></span> CSS3</a>
							</dt>
							<dd>
								<ul>
									<li><a href="http://www.netmagazine.com/tutorials/how-structure-your-css">How to structure your CSS</a></li>
									<li><a href="http://www.google.com/webfonts/">Google Web Fonts</a></li>
									<li><a href="http://www.hongkiat.com/blog/beautiful-free-fonts-for-titles-and-headlines/">Fonts for Titles and Headlines</a></li>
									<li><a href="http://html5doctor.com/blockquote-q-cite/">Quote Punctuation</a></li>
									<li><a href="http://www.sitepoint.com/pure-css3-ribbons/">CSS3 Ribbons</a></li>
									<li><a href="http://css-tricks.com/snippets/css/ribbon/">Ribbon</a></li>
									<li><a hre="http://tympanus.net/codrops/2012/07/25/modern-block-quote-styles/">Modern Blockquote Styles</a></li>
									<li><a href="http://dabblet.com/gist/3399476">Zigzag Border</a></li>
									<li><a href="http://themes.pixelworkshop.fr/?theme=CSS3MegaMenu">CSS3 Mega Menu</a></li>
									<li><a href="http://cssdeck.com/labs/pure-css3-smooth-ribbon-with-borders">Pure CSS3 Smooth Ribbon with Borders</a></li>
									<li><a href="http://css-tricks.com/html-for-icon-font-usage/">HTML for Icon Font Usage</a></li>
								</ul>
							</dd>
							<dt>
								<a href="#"><span></span> Java</a>
							</dt>
							<dd>
								<ul>
									<li><a href="http://javasun.com/j2se/downloads/">J2SE downloads</a></li>
									<li><a href="http://ant.apache.org">Ant</a></li>
									<li><a href="http://tomcat.apache.org/download-55.cgi">Tomcat</a></li>
									<li><a href="http://www.developer.com/java/ent/article.php/2107401">Struts from scratch</a></li>
									<li><a href="http://struts.apache.org/1.2.9/faqs/eclipse.html">Set up basic Struts project using Eclipse</a></li>
								</ul>
							</dd>
							<dt>
								<a href="#"><span></span> Web Design Inspitation Resources</a>
							</dt>
							<dd>
								<ul>
									<li><a href="http://www.blueprintcss.org/">Web Designer wall</a></li>
									<li><a href="http://uxdesign.smashingmagazine.com/2012/03/15/symptoms-of-epidemic-web-design-trends/">Current Web Design Trends</a></li>
									<li><a href="http://www.flickr.com/photos/splat/collections/72157600060481506/">Patrick Haney&quot;s collection</a></li>
									<li><a href="http://www.flickr.com/groups/webdesign-inspiration/">Web Design Inspiration flickr Pool</a></li>
									<li><a href="http://vandelaydesign.com/blog/design/flickr-groups-for-designers/">Vandelay Design's list of 99 Flickr groups for design inspiration.</a></li>
									<li><a href="http://uipatternfactory.com/">UI Pattern Factory</a></li>
									<li><a href="http://patterntap.com/">UI Examples</a></li>	
									<li><a href="http://factoryjoe.com/">Chris Messina's web site</a></li>
									<li><a href="http://www.flickr.com/photos/factoryjoe/collections/72157600001823120/">Collection of UI Design on Flickr by Chris Messina</a></li>
									<li><a href="http://designreviver.com/">Design Reviver</a></li>		
									<li><a href="http://www.lukew.com/resources/web_form_design.asp">Web Form Design</a></li>
									<li><a href="http://www.autisticcuckoo.net/blog.php">Gooe Example of Elastic Design</a></li>
									<li><a href="http://green-beast.com/blog/?p=199">CSS Layouts: The Fixed. The Fluid. The Elastic.</a></li>
									<li><a href="http://www.onenaught.com/posts/9/fixed-fluid-or-elastic-width-layouts/">Fixed, Fluid, or Elastic Width Layouts?</a></li>
									<li><a href="http://developer.yahoo.com/yui/grids/">Yahoo User Interface Libarary's Grid</a></li>
									<li><a href="http://www.blueprintcss.org/">Blueprint CSS framework</a></li><li><a href="http://colorschemedesigner.com/">Color Schema Designer</a></li>
									<li><a href="http://kuler.adobe.com">Adobe Kuler Color Schema</a></li>
									<li><a href="http://www.colourlovers.com/">COlor Combinations</a></li>
									<li><a href="http://www.webdesignerwall.com/tutorials/css-decorative-gallery/">Border Styles for Images</a></li>
									<li><a href="http://www.sitepoint.com/article/eight-definitive-font-stacks/">Typography on the Web</a></li>
									<li><a href="http://mezzoblue.com/tests/revised-image-replacement/">Revised Image Replacement</a></li>
									<li><a href="http://www.mikeindustries.com/blog/sifr/">Replacement technique: sIFR</a></li>
									<li><a href="http://simplebits.com/">Examples of decorative fonts</a></li>
									<li><a href="http://ilovetypography.com">ilovetypography.com</a></li>
									<li><a href="http://designr.it">Example of decorative text</a></li>
									<li><a href="http://www.alistapart.com/articles/writingainterfacestyleguide/">Writing an Interface Style Guide</a></li>
									<li><a href="http://elliotjaystocks.com">Elliot Jay Stocks's Web Site</a></li>
									<li><a href="http://3oneseven.com/23/milo-web-design-expertise/">Milo Web Design</a></li>
								</ul>
							</dd>
							<dt>
									<a href="#"><span></span> Photography</a>
							</dt>
							<dd>
								<ul>
									<li><a href="http://www.creativepro.com/article/advanced-color-correction-with-photoshop-levels/">Tutorial: Photoshop Levels tool</a></li>
									<li><a href="http:///photographytips/2008/aperture_fstops_camera_settings.htm">www.picturecorrect.com</a></li>
									<li><a href="http://digital-photography-school.com/">Digital Photography School</a></li>
									<li><a href="http://24ways.org/">24ways.org</a></li>							
								</ul>
							</dd>
							<dt>
								<a href="#"><span></span> Photoshop</a>
							</dt>
							<dd>
								<ul>
									<li><a href="http://designfestival.com/build-a-persuasive-pretty-125x125-advertisement-in-photoshop/?utm_medium=email&utm_campaign=DesignFestival+October+30th+2012&utm_content=DesignFestival+October+30th+2012+Version+B+CID_cfe7f64be52ae27dc65ca068c32aee37&utm_source=Newsletter&utm_term=Build%20a%20Persuasive%20125x125%20Ad%20in%20Photoshop">Tutorial: HOw to build a 125x125 Ad in Photoshop</a></li>		
								</ul>
							</dd>
							
						</dl>
					</div>																
				</div>	
			</div>
			<iframe src="https://www.facebook.com/plugins/like.php?href=http://www.janetkulyk.com/links.php" scrolling="no" frameborder="0" style="border:none; width:450px; height:80px"></iframe>
		</div>
		<div class="aside_right">
			<aside>
				<div class="quot">
					<blockquote>
						Share your knowledge. It is a way to achieve immortality.
					</blockquote>
				</div>
			</aside>
		</div>
		<?php include("inc/footer_new.inc.php"); ?>
		<?php include("inc/ga.php"); ?>
  	</body>
</html>