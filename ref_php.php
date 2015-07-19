<?php 
	$today = $today = date("l, F j, Y"); 
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - Web Development Services - PHP Reference'; 
	$page_keywords = 'Janet (Zhanna) Kulyk, PHP, MySQL, freelancer, freelance developer, web freelancer, web development, interface, frontend, performanse, web 2.0, Toronto, Ontario, Canada'; 
	$page_desc = 'Short PHP Reference'; 
	$thickbox="";
	include("inc/header.inc.php"); 
?>				

			<div id="ref">
			
					<div id="col_left">
							<?php include("inc/w3c.inc") ?>
							<?php //include("inc/nav_ref.php") ?>
					</div>
	
					<div id="col_middle">											
								<h1>PHP Reference</h1>	
								<h3>Variables</h3>
								<p>PHP has eight types of variables: 4 scalar (single-valued) types - Boolean, integer, floating point, and strings; two non-scalar (multivalued) - arrays and objects; plus resources (used when interacting with databases) and NULL (NULL is a special type in PHP, representing no set value).</p>
								<p>Variables can be printed without quotation marks or within double quotation marks. You cannot print variables within single quotation marks.</p>
								<p>PHP is very casual in how it treats variables, meaning that you don't need to initialize them (set an immediate value) or declare them (set a specific type), and you can convert a variable among the many types without problem.</p>
								<p>PHP runs with several prdefined variables; for example, $_SERVER['SCRIPT_FILENAME'], $_SERVER['HTTP_USER_AGENT'], $_SERVER['SERVER_SOFTWARE'].</p>
								<p>$_REQUEST is a special variable type, known as <em>superglobal</em>. It stores all the data sent to a PHP page through either the GET or POST method, as well as data accessible in cookies.</p>
								
								
								
								<h3>Strings</h3>
								<p>PHP has no set limits on  how big a string can be. It's theoretically possible that you'll be limited by the resources of the server, but it's doubtful that you'll ever encounter such a problem.</p>
								<p>Concatenation works with strings or numbers.</p>
								<ul>
									<li>strlen() - length of the string</li>
									<li>strtolower() - converts the case of the string to lowercase</li>
									<li>strtoupper() - converts the case of the string to uppercase</li>
									<li>ucfirst() - capitalizes the frirst character of the string</li>
									<li>ucwords() - capitalizes the first character of every word</li>
								</ul>
								
								<h3>Numbers</h3>
								<ul>
									<li>round() -  rounds a decimal to the nearest integer or to a specified number of decimal places</li>
									<li>number_format() turns a number into the more commonly written version, grouped into thousands using commas; this function can also set a specific number of decimal points.</li>
								</ul>
								
								<h3>Constants</h3>
								<p>To create a constant, define() function is used:</p>
								<code>define('NAME','value');</code>
								<p>Constants do not use the initial dollar sign as variables do. A constant can only be assigned a scalar value, like a strind or a number.</p>
								<p>PHP runs with several predefined constants; for eaxample, PHP_VERSION, PHP_OS, SID.</p>
								
								<h3>Conditionals and Operators</h3>
								<p>$var = true if $var has a value other than 0, an empty string, FALSE, or NULL</p>
								<p>($var) == true if $var has any value other than NULL, including 0, FALSE, or an empty string. isset() function checks if a variable is set, meaning that it has a value other than NULL.</p>
								<p>empty() function checks if a variable has an <em>empty</em> value: an empty string, 0, NULL, or FALSE.</p>
								<p>is_number() function can be used to test if a submitted value is a number.</p>
								
								<h3>Arrays</h3>
								<p>PHP supports two kinds of arrays: indexed, which use numbers as the keys and associative, which use strings as keys. An array's key can be multiple-worded strings.</p>
								<p>To refer to a specific value in an array, start with the variable name, followed by the key in suqare brackets:</p>
								<code>
									echo $artists[2];
									echo $states['MD'];
								</code>
								<p>To print an element of an associative array, we need to wrap the array name and key in curly braces:</p>
								<code>echo "IL is {$states['IL']}.";</code>
								<p>PHP includes several predefined arrays called the <em>superglobal</em> variables. They are: <strong>$_GET, $_POST, $_REQUEST, $_SERVER, $_ENV, $_SESSION, and $_COOKIE</strong>.</p>
								<p>The $_GET variable is where PHP stores all of the values sent toa PHP script via the get method (possibly but not necessarily from a n HTML form).</p>
								<p>$_POST stores all of the data sent to a PHP script from an HTML form that uses post method.</p>
								<p>$_GET, $_POST, and $_COOKIE are subsets of $_REQUEST.</p>
								<p>$_SERVER stores information about the server PHP is running on, as does $_ENV.</p>
								<p>One aspect of good security and programming is to be precise when referring to a variable. This means that, although you can use $_REQUEST to access form data submitted through the post method, $_POST would be more accurate.</p>
								<p>BEcause PHP is lax with its variable structures, an array can even use a combination of numbers and strings as its keys. The only important rule is that the keys of an array must each be unique.</p>
								<p>Initializing an array (or any variable) in PHP isn't required, but it makes for clearer code and can help avoid errors.</p>
								<code>
									$tv = array();<br/>
									$tv[] = 'Flight of the Conchords';<br/>
								</code>
								<p>If you want to ceate an array of sequential numbers or an array of sequential letters, you can use the range() function:</p>
								<code>
									$ten = range(1,10);<br/>
									$alphabet = range('a','z');<br/>
								</code>
								<p>The <em>is_array() function confirms that a variable is of the array type.</em></p>
								
								<h4>Accessing Arrays</h4>
								<p>To access every array element, use the <em>foreach</em> loop:</p>
								<code>
									foreach ($array as $value) {<br/>
										//Do smth with $value<br/>
									} <br/>
								</code>
								<p>To access both the keys and values, use </p>
								<code>
									foreach ($array as $key => $value) {<br/>
									echo "The value at $key is $value.";<br/>
									}<br/>
								</code>
								<p>count() function determines the number of elements in an array:</p>
								<code>$num = count($array);<br/></code>
								
								<h4>Arrays and Strings</h4>
								<p>PHP has two functions for converting between arrays and strings.</p>
								<code>
									$array = explode(separator, $string);<br/>
									$string = implode(glue, $array);<br/>
								</code>
								
								<h4>Sorting Arrays</h4>
								<ul>
									<li><em>sort($array)</em> sorts an array by value, discarding the original keys; the array's keys will be reset after the sorting process, so if the key-value relationship is important, you should not use this function.</li>
									<li><em>asort($array)</em> sorts array by value while maintaining the keys.</li>
									<li><em>ksort($array)</em> sorts array by key.</li>
									<li>Appropriate functions for sorting in reverse order are: <em>rsort()</em>, <em>arsort()</em>, and <em>krsort()</em> respectively.</li>
									<li><em>shuffle()</em> function randomises the order of the array.</li>
									<li><em>natsort()</em> function can be used to sort arrays in a more natural order (primarily handling numbers in strings better).</li>
									<li><em>usort()</em> -  for multidimentional arrays.</li>
									<li>By default, PHP will sort arrays as if they were in English. For other languages, we should use <em>setlocale()</em> function to change the language setting.</li>
								</ul>
								
								<h3>Loops</h3>
									<ul><li>To access every array element, use the <em>foreach</em> loop:</p></li></ul>
									<code>
										foreach ($array as $value) {<br/>
											//Do smth with $value<br/>
										} <br/>
									</code>
									<ul><li>To access both the keys and values, use</li></ul>
									<code>
										foreach ($array as $key => $value) {<br/>
										echo "The value at $key is $value.";<br/>
										}<br/>
									</code>
								
									<ul><li><em>while</em> loop:</li></ul>
										<code>
											while (condition) {<br/>
												//Do something<br/>
											}<br/>
										</code>
									
									<ul><li><em>for</em> loop</li></ul>
										<code>
											for (initial expression; condition; closing expression ) { <br/>
												//Do something  <br/>
											}<br/>
										</code>
									
									<ul><li><em>do..while</em> - this loop will always be executed at least once.</li></ul>
								
								
								<p>The <em>for</em> loop is a better choice for doing something a known number of times, whereas <em>while</em> is used when a condition will be true an unknown number of times. <em>while</em> loop will most frequently be used when retrieving results from a database.</p>
								
								<h3>Including Multiple Files</h3>
								<p>PHP has 4 functions for using external files:</p>
								<ul>
									<li>include()</li>
									<li>include_once()</li>
									<li>require()</li>
									<li>require_once()</li>
								</ul>
								<p>The include() and require() functions are exactly the same when working properly but behave differently when they fail. If an include() functiondoesn't work (cannot include the file for some reason), a warning will be printed to the web browser but the script will continue to run. If require() fails, an error is printed and the script is halted.</p>
								<p>Any included file that contains sensitive information (like database access) should be stored outside of the Web document directory so it can't be viewed within a web browser.</p>
								<p>Since require() has more impact on a script when it fails, it's recommended for mission-critical includes (like those that connect to a database). The include() function would be used for less important inclusions. The *_once() versions provide for nice redundancy checking in complex applications, but they may be unnecessary in simple sites.</p>
									
								
								<h3>Functions</h3>
								<p>When calling a function that returns an array, use the list() function to assign the array elements to individual variables:</p>
								<code>list($sum, $taxrate) = calculate_total(param1, param2, param3);<br/></code>
								<p>USer-defined functions have their own scope: variables defined within a function are not available outside of it, and variables defined outside of the function are not available within it.</p>
								<p>To alter the variable scope within a function, you can use the <em>global</em> statement.</p>
								<code>
									function function_name() {<br/>
										global $var;<br/>
									}<br/>
									$var = 20;<br/>
									function_name(); <br/>
								</code>
								<p>Another option for circumventing variable scope is to make use of the superglobals: $_GET, $_POST, $_REQUEST, etc. These variables are automatically accessible within your functions. You can also add elements to $GLOBALS array to make them available within a function/</p>
								
								
								<h2>Debugging</h2>
								<p>Tracking variables:</p>
								<code>echo &quot;&lt;p&gt;\$var = $var&lt;/p&gt;\n&quot;;</code>
								<p>For more complicated variable types (arrays and objects), the print_r() and var_dump() functions will print out their values without the need for loops. Both functions accomplish the same task, although var_dump() is more detailed in its reporting than print_r().</p>
								<code>echo '&lt;pre&gt;' .print_r($var,1) . '&lt;/pre&gt;';</code>
								<p>Functions die() and exit() are usually used for error management. When die() or exit() is called iin the script, the script is terminated.</p>
								
								
								
								<h2>Links</h2>
								<ul class="external">
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