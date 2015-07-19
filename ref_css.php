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
													<?php //include("inc/nav_ref.php") ?>
											</div>
							
											<div id="col_middle">											
														<h1>CSS Reference</h1>	
														<p>The W3C specification says:</p>
														<p><em><strong>ID</strong> and <strong>NAME</strong> tokens begin with a letter ([A-Za-z]) and might be followed by any number of letters, digits ([0-9]), hyphens ('-'), underscores ('_'), colons (':'), and periods ('.').</em></p>
														<p>Class naming conventions are much looser than for IDs. You have letters, numbers, the hyphen, and most of the Unicode character set at your disposal.</p>
														
														<h2>Specificity</h2>
														<p>Specificity is a mechanism within the CSS cascade that aids conflict resolution. The concept of specificity states that when two or more declarations that apply to the same element, and set the same property, have the same importance and origin, the declaration with the most specific selector will take precedence.</p>
														<p>Specificity is calculated by using 4 levels:</p>
														<ol>
																<li>Count 1 if the selector is the <em>style</em> attribute.</li>
																<li>Count the number of <em>id</em> attributes in the selector.</li>
																<li>Count the number of other attributes (including classes and pseudoclasses) in the selector.</li>
																<li>Count the number of element names (including pseudoelement names) in the selector.</li>
														</ol>
														<p>The result of counting these elements is not a score, but a matrix of values that can be compared column by column. </p>
														
														<h3>Specificity Step by Step</h3>
														<p class="codetitle">Example</p>
														<code>
																p {color: black; background-color: white}<br/>
																div.warning p {color: red}<br/>
																div#caution p {color: yellow}<br/>
																body#home div p {color: white}<br/>
														</code>

														<p>The first step is to calculate the value for column a. If the style rule is specified within the element's HTML style attribute, ait should equal 1; otherwise, it should equal 0. In fact, this is the only case where there is a value in column a.</p>
														<p>Inline Style: Column A = 1. An inline style rule will always have a specificity of 1,0,0,0 -- the highest level of specificity. Here's an example of such a style rule: </p>
														<p><code>&lt;p style=&quot;color:red;&quot;&gt;Red Text&lt;/p&gt;</code></p>
														<p>This is one of the reasons why inline styles should be avoided. As inline style rules always have the highest specificity, the only way to overwrite them within the CSS cascade is to use the !important statement on the relevant declarations -- an approach that creates a maintenance nightmare.</p>
														<p>For rules other than inline styles, we need to calculate columns b, c, and d. Let's run through a full calculation for the following rule:</p>
														<code>body#home div#warning p.message { color: red;}</code>
														<p>The above rule has a selector, body#home div#warning p.message, and a single declaration, color: red;. Since this isn't an inline style, we start off with a 0 in the first column. To calculate the value for column b, we count the number of ID selectors in the selector. In our selector, body#home div#warning p, there are two -- #home and #warning -- thus, column b is equal to 2.</p>
														<p>Next, we calculate the value for column C, counting the number of class selectors, attribute selectors, and pseudo-classes in the selector.</p>
														<p><em>Attribute Selectors for IDs<br/>Note that [id="foo"] is not equivalent to #foo -- you can see there's a significant difference in their levels of specificity.</em></p>
														<p>In our example selector, body#home div#warning p.message, there's one class selector, .message, so C is equal to 1.</p>
														<p>Finally, for column D, we count the number of element type selectors and pseudo-elements in the selector. In our example selector, body#home div#warning p.message, there are three: body, div, and p. There are no pseudo-elements to be counted, so we put a 3 in the last column.</p>
														<p>We now have our result. The specificity for the selector body#home div#warning p.message can be expressed as: 0,2,1,3.</p>
														<div class="h20"></div>
														<p>All right, let's consider a crazy situation where more than half a dozen color declarations for the same p element have the same levels of importance and origins. Which color would the browser apply to the element?</p>
														<code>
																p.message { color: green}<br/>
																#home #warning p.message {color: yellow}<br/>
																#warning p.message {color: white}<br/>
																body#home div#warning p.message {color: blue}<br/>
																p {color: teal}<br/>
																* body#home>div#warning p.message {color: red}<br/>
																#warning p {color: black}
														</code>
														<p>We should be able to use the specificity calculation method to work out which of the declarations would be applied. But, wait a minute! What are the levels of specificity of the universal selector, *, and the child combinator, >? The answer is that they don't have any specificity at all; they're simply ignored in all calculations. This is true for all combinators, which you can treat as though they had a specificity of zero, as they will make no difference to your calculation. After all, five out of the seven selectors above use the descendant combinator and you weren't worried about those!</p>
														<p>Table. Selector Specificity Results</p>
														<table>
																<tr><th>Selector</th><th>Inline Style</th><th>IDs</th><th>Classes, Attributes, and Pseudo-classes</th><th>Element Types and Pseudo-elements</th></tr>
																<tr><td>body#home div#warning p.message</td><td>0</td><td>2</td><td>1</td><td>3</td></tr>
																<tr><td>* body#home>div#warning p.message</td><td>0</td><td>2</td><td>1</td><td>3</td></tr>
																<tr><td>#home #warning p.message</td><td>0</td><td>2</td><td>1</td><td>1</td></tr>
																<tr><td>#warning p.message</td><td>0</td><td>1</td><td>1</td><td>1</td></tr>
																<tr><td>#warning p</td><td>0</td><td>1</td><td>0</td><td>1</td></tr>
																<tr><td>p.message</td><td>0</td><td>0</td><td>1</td><td>1</td></tr>
																<tr><td>p</td><td>0</td><td>0</td><td>0</td><td>1</td></tr>
														</table>
														<p>The results have been ordered according to specificity -- the highest are at the top, and the lowest are at the bottom. As you can see, the top two selectors have exactly the same specificity, despite the extra universal selector and combinator in one of them. In this case, they tie for specificity and the one that appears last in the style sheet will be the winner. If you look at the original style sheet source above, the red color will be applied to the p element.</p>
														<p>You can see from Table 6 that the selector p.message has a lower specificity than the selector #warning p. This is a common cause of head scratching among those new to CSS, who often think that a class selector will be specific enough to match an element in all cases.</p>
														<p>* * *</p>
														<p>There are 2 factors for deciding whether something has higher specificity:</p>
														<ul>
																<li>The larger number at a certain level has a higher specificity.</li>
																<li>More importantly, a selector at a higher level has higher specificity than a number at a lower level.</li>
														</ul>

														<h2>Links</h2>
														<ul>
																<li><a href="http://w3.org">World Wide Web Consortium</a></li>
																<li><a href="http://validator.w3.org">W3C HTML Validation Service</a></li>
																<li><a href="http://www.w3.org/TR/REC-html40">HTML 4.01 Strict</a></li>
														</ul>
																			
										</div>

										<div id="col_right">
												<a href="http://www.apress.com/book/view/1590597648"><img src="img/img_accelerated_dom.gif" width="125" height="164" alt="Pro JavaScript Techniques" /></a>
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
										
										<div class="bg_nav">
											<div id="navbottom" class="page">
													<?php include("inc/bottomNav.php") ?>
											</div>
										</div>
										
							</div>
				</div>												
				<?php include("inc/footer.inc"); ?>					
				
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