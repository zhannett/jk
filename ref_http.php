<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - HTTP Reference'; 
	$page_keywords = 'HTTP'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering';
	$thickbox="";
	include("inc/header.inc.php") 
?>				
				
					<div id="ref">
				
						<div id="col_left">
								<?php include("inc/w3c.inc") ?>
								<?php //include("inc/nav_ref.php") ?>
						</div>
		
						<div id="col_middle">											
							<div id="col_middle_container">																						
									<h1>HTTP Reference</h1>	
									
									<p>HTTP is a client/server protocol made up of requests and responses. A browser sends an HTTP request for a specific URL, and a server hosting that URL sends back an HTTP response. The protocol uses a simple, plain-text format.</p>
									<p>The types of requests are GET, POST, HEAD, PUT, DELETE, OPTIONS, and TRACE.</p>
									<p> The HTTP specification was coordinated by the World Wide Web Consortium (W3C) and Internet Engineering Task Force (IETF), resulting in RFC 2616. HTTP/1.1 is the most common version today, but some browsers and servers still use HTTP/1.0.</p>
									<p>A GET request includes a URL followed by headers. The HTTP response contains a status code, headers, and a body.</p>
									<code>
										<div class="http_term">Request Header</div>
										<div class="h10"></div>
										<div class="http_term">Host:</div><div class="http_definition">localhost:8080</div>
										<div class="http_term">User-Agent:</div><div class="http_definition">Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10</div>
										<div class="http_term">Accept:</div><div class="http_definition">text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</div>
										<div class="http_term">Accept-Language:</div><div class="http_definition">en-us,en;q=0.5</div>
										<div class="http_term">Accept-Encoding:</div><div class="http_definition">gzip,deflate</div>
										<div class="http_term">Accept-Charset:</div><div class="http_definition">ISO-8859-1,utf-8;q=0.7,*;q=0.7</div>
										<div class="http_term">Keep-Alive:</div><div class="http_definition">300</div>
										<div class="http_term">Connection:</div><div class="http_definition">keep-alive</div>
										<div class="http_term">Cookie:</div><div class="http_definition">PHPSESSID=f64b301ca245397c6ae82efc5f8fc261</div>									
									</code>
									<div class="h20"></div>
									<code>
										<div class="http_term">Response Header</div>
										<div class="h10"></div>
										<div class="http_term">Date</div><div class="http_definition">Sat, 02 May 2009 18:27:17 GMT</div>
										<div class="http_term">Server</div><div class="http_definition">Apache/2.2.11 (Win32)</div>
										<div class="http_term">X-Powered-By</div><div class="http_definition">PHP/5.2.8</div>
										<div class="http_term">Expires</div><div class="http_definition">Thu, 19 Nov 1981 08:52:00 GMT</div>
										<div class="http_term">Cache-Control</div><div class="http_definition">no-store, no-cache, must-revalidate, post-check=0, pre-check=0</div>
										<div class="http_term">Pragma</div><div class="http_definition">no-cache</div>
										<div class="http_term">Keep-Alive</div><div class="http_definition">timeout=5, max=100</div>
										<div class="http_term">Connection</div><div class="http_definition">Keep-Alive</div>
										<div class="http_term">Transfer-Encoding</div><div class="http_definition">chunked</div>
										<div class="http_term">Content-Type</div><div class="http_definition">text/html; charset=utf-8</div>									
									</code>
									<div class="h20"></div>
									
									<h3>Debugging Tools</h3>
									<ul>
											<li><a href="http://www.getfirebug.com">Firebug</a></li>
											<li><a href="http://livehttpheaders.mozdev.org">Live HTTP Headers</a></li>
											<li><a href="http://www.blunck.se/iehttpheaders/iehttpheaders.html">ieHTTPHeaders</a></li>
											<li><a href="http://www.charlesproxy.com/">Charles Web Debugging Proxy</a></li>
									</ul>														
							</div>
					</div>

					<div id="col_right">
							<a href="http://www.apress.com/book/view/1590597273"><img src="img/img_pro_js_techniques.gif" width="125" height="164" alt="Pro JavaScript Techniques" /></a>
							<div class="resizable quotation rounded {10px}">
									<blockquote>
											<div><span>&quot;</span>The most beautiful thing we can experience is the mysterious. It is the source of all true art and all science. He to whom this emotion is a stranger, who can no longer pause to wonder and stand rapt in awe, is as good as dead: his eyes are closed.<span>&quot;</span></div>
											<div class="author">&mdash; Albert Eistein</div>
									</blockquote>
							</div>										
					</div>										
				</div>											
				<?php include("inc/footer.inc.php"); ?>					
				
				<script type="text/javascript" src="js/dictionary.js"></script>
				<script type="text/javascript">
						//<![CDATA[
						$('#sf-menu_webdevref>a') .css('background-color','#005A9C') .css('color','#FFF') .css('cursor','text');							//]]>
				</script>
				<?php include("inc/ga.php"); ?>
  	</body>
</html>