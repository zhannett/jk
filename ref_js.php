<?php $today = $today = date("l, F j, Y");  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
		<head>
				<title>Janet (Zhanna) Kulyk - WebDev Reference</title>
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<meta name="author" content="Janet (Zhanna) Kulyk" />
				<meta name="keywords" content="JavaScript, DOM, events, web development, interface, frontend" />
				<meta name="description" content="Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering. Web Developer's brief references." />
				<meta name="robots" content="all" />
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<link rel="stylesheet" type="text/css" href="css/gen.css" />
				<!--[if IE]> <link href="css/ie.css" rel="stylesheet" /> <![endif]-->  
				<!--[if lt IE 7]> <link href="css/ie6.css" rel="stylesheet" /> <![endif]-->	
		</head>
		
		<body>		
			
				<?php include("inc/header.php") ?>				
				<div class="bg_nav">
						<div id="navtop" class="page">
								<?php include("inc/topNav.php") ?>
								<div id="date_switcher"><?php include("inc/switcher.inc"); ?></div>
						</div>
				</div>		
					
					<div id="content">
							<div id="content_container">
									<div id="ref">
									
											<div id="col_left">
													<?php include("inc/w3c.inc") ?>
													<?php include("inc/nav_ref.php") ?>
											</div>
							
											<div id="col_middle">											
												<div id="col_middle_container">																						
														<h1>JavaScript Reference</h1>	
														
														<p>Functions in JavaScript can be assigned to variables and passed as arguments into other functions, returned from functions, and stored as an element of an array or as a property of an object.</p>
														
														<p>Code that is not encapsulated in a function or object gets executed as soon as it is parsed by the browser. Code that is in a function or an object has to be called via an event handler.</p>
														
														
														<h3>Regular Expressions</h3>
														<p>Regular expressions are a way to accomplish string matching. They are especially popular for validating form data.</p>
														<p>A regular expression can be instattiated in one of two ways:</p>
														<p> 1. By using regular expression class:</p>
																<code>var re = new RegExp('regex','ig');</code>
																<p>first parameter 'regex' is the regular expression string to match; the second parameter is the flags. There are 3 possible flags:</p>
																<ul>
																		<li>i: Ignore case</li>
																		<li>g:Global match</li>
																		<li>Match over multiple lines</li>
																</ul>
														<p>2. Using literal format:</p>
														<code>var re = /regex/ig;</code>
														<p>A regular expression object has 2 main functions: <em>exec</em> and <em>test</em>.</p>
														<p><em>exec</em> performs a search on a string and returns an array of matches. <em>test</em> returns <em>true</em> if a match is found and <em>false</em> otherwise.</p>
														<div class="codetitle">Testing Canadian (American) phone number</div>
														<code>
																var phonenumber = '613-555-1212';<br/>
																/^\d{3}-\d{3}-\d{4}$/.test(phonenumber); // returns true															
														</code>
														<p>The <em>match</em>, <em>search</em>, and <em>replace</em> methods of the built-in String object accept regular expressions as parameters:</p>
														<ul>
																<li><em>match</em> behaves like <em>exec</em> by returning an array of results that match the regular expression.</li>
																<li><em>search</em> returns the index in which it could find a match within the string or returns -1 if no match is found.</li>
																<li><em>replace</em> replaces the substring match with the characters of your choosing.</li>
																<div class="codetitle">Rearranging a date format</div>
																<code>
																		var dt = '12-01-2007';
																		dt.replace(/^(\d{2})-(\d{2})-(\d{4})$/,'$3$2$1');  // returns 20070112
																</code>
														</ul>
														
														<!--<h2>Links</h2>
														<ul>
																<li><a href="http://w3.org">World Wide Web Consortium</a></li>
																<li><a href="http://validator.w3.org">W3C HTML Validation Service</a></li>
																<li><a href="http://www.w3.org/TR/REC-html40">HTML 4.01 Strict</a></li>
														</ul>-->
																			
												</div>
										</div>

										<div id="col_right">
												<a href="http://www.apress.com/book/view/1590597273"><img src="img/img_pro_js_techniques.gif" width="125" height="164" alt="Pro JavaScript Techniques" /></a>
												<a href="http://www.apress.com/book/view/1590597648"><img src="img/img_accelerated_dom.gif" width="125" height="164" alt="Pro JavaScript Techniques" /></a>
												<div class="resizable quotation rounded {10px}">
														<blockquote>
																<div>There is usually never just one way to do things.</div>
														</blockquote>
												</div>										
										</div>
										
										</div>
										
										<div class="bg_nav">
											<div id="navbottom" class="page">
													<?php include("inc/bottomNav.php") ?>
											</div>
										</div>
										
							</div>
				</div>												
				<?php include("inc/footer.inc"); ?>					
				<script type="text/javascript" src="js/optimized.js"></script>
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