<?php 
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - Web Development Services - PHP Reference'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, PHP, MySQL, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
	$page_desc = 'Short PHP Reference'; 
	$thickbox=""; 
	include("inc/header.inc.php");$thickbox=""; 
?>				

			<div id="ref">
			
					<div id="col_left">
							<?php include("inc/w3c.inc") ?>
							<?php //include("inc/nav_ref.php") ?>
					</div>
	
					<div id="col_middle">											
								<h1>PHP - MySQL Reference</h1>	
																
								<h2>Connecting to MySQL</h2>
								<code>$dbc = mysqli_connect(hostname, username, password, db_name);</code>
								<p>mysqli_connect_error();  returns the connection error message; it takes no arguments.</p>
								
								<h3>Executing Simple Queries</h3>
								<code>$result = mysqli_query($dbc, $query);</code><br/>
								<p>$result may be TRUE or FALSE.</p>
								<code>
									$r = mysqli_query($dbc, $q);<br/>
									if ($r) {<br/>
									<span class="comm">//works!!!</span><br/>
									}<br/>
									else {<br/>
									echo mysqli_error($dbc);<br/>
									}<br/>
									mysqli_close($dbc);<br/>
								</code>
								
								<h3>Retrieving Query Results</h3>
								<p>The primary tool for handling SELECT query results is <em>mysqli_fetch_array()</em>. Basic construction for reading each record from a query is</p>
								<code>
									while ($row=mysqli_fetch_array($r) {<br/>
									<span class="comm">// Do something with $row</span><br/>
									}<br/>
								</code>
								
								<h3>Ensuring Secure SQL</h3>
								<p>Database security with respect to PHP comes down with to three broad issues:</p>
								<ol>
									<li>Protecting the MySQL access information; can be provided by securing MySQL connection script outside of the web directory, so that it never viewable through a web browser.</li>
									<li>Not revealing too much about the database; can be achieved by not letting the user to see PHP's error messages or your queries.</li>
									<li>Being cautious when running queries, particularly those involving user-submitted data. Never trust user-supplied data!						
									<ol>
										<li>Validate that some value has been submitted, or that it is of the proper type (number, string, etc.)</li>
										<li>Use regular expressions to make sure that submitted datamatches what you would expect it to be.</li>
										<li>You should typecast some values to guarantee that they're numbers.</li>
										<li>
											Run user-submitted data through the <em>mysqli_real_escape_string()</em> function. This function cleans data by escaping what could be problematic characters.<br/>
											<em>$clean = mysqli_real_escape_string($dbc, data);</em><br/>
											For security purposes, mysqli_real_escape_string() should be used on every text input in a form.
										</li>
									</ol>
									</li>
								</ol>
								
								<h3>Counting Returned Records</h3>
								<p><em>mysqli_num_rows()</em> returns the number of rows retrieved by a SELECT query.</p>
								<code>$num = mysqli_num_rows($r);</code>
								
								<h3>Updating Records with PHP</h3>
								<p><em>mysqli_affected_rows()</em> returns the number of rows affected by an INSERT, UPDATE, or DELETE query.</p>
								<code>$num = mysqli_affected_rows($dbc);</code>
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								<h2>Links</h2>
								<ul>
										<li><a href="http://www.dmcinsights.com/phpmysql3/">About PHP 6 and MySQL 5 for Dynamic Web Sites: Visual QuickPro Guide (3rd Edition)</a></li>
								</ul>
													
				</div>

				<div id="col_right">
						<a href="http://www.dmcinsights.com/phpmysql3/scripts.php"><img src="img/img_php6mysql5.png" width="124" height="160" alt="Pro JavaScript Techniques" /></a>
						<div class="h20"></div>
						<p>Examples on this page are taken from the article <a href="http://www.sitepoint.com/article/get-specific-css-styles/">Get Specific with Your CSS Styles</a> by Paul O'Brien.</p>
						<div class="h20"></div>
						<div class="resizable quotation rounded {10px}">
								<blockquote>
										<div><span>&quot;</span>The most beautiful thing we can experience is the mysterious. It is the source of all true art and all science. He to whom this emotion is a stranger, who can no longer pause to wonder and stand rapt in awe, is as good as dead: his eyes are closed.<span>&quot;</span></div>
										<div class="author">&mdash; Albert Eistein</div>
								</blockquote>
						</div>										
				</div>
				
			</div>
										
			<?php include("inc/footer.inc.php"); ?>
			<?php  
				$user = $_SERVER['HTTP_USER_AGENT'];
				$server = $_SERVER['SERVER_SOFTWARE'];
				echo "<p>You are viewing this page using <strong>$user</strong>.</p>";
				echo '<p>This server is running version <strong>'.PHP_VERSION.'</strong> of PHP on <strong>'.$server.'</strong> web server on the <strong>'.PHP_OS.' </strong>operating system.</p>';
			?>			
			
			<script type="text/javascript" src="js/dictionary.js"></script>
			<script type="text/javascript">
					//<![CDATA[
					$('ul.nav>li') .hover(function(){$(this) .addClass('active');}, function(){$(this) .removeClass('active');});
					$('li.ref>a') .css('background-color','#005A9C') .css('color','#FFF') .css('border-bottom','1px solid #005A9C') .css('cursor','text');
					//]]>
			</script>
			<?php include("inc/ga.php"); ?>
  	</body>
</html>