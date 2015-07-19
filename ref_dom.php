<?php $today = $today = date("l, F j, Y");  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
		<head>
				<title>Janet (Zhanna) Kulyk - WebDev Reference - DOM</title>
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<meta name="author" content="Janet (Zhanna) Kulyk" />
				<meta name="keywords" content="JavaScript, DOM, Document Object Model, events, web development, interface, frontend" />
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
														<h1>DOM Reference</h1>	
														<p>The DOM is an application programming interface (API) that defines a set of objects along with properties and methods. the API was designed to be generic enough for both XML and HTML.</p>
														<p class="codetitle">Node Types and the Corresponding NodeType IDs</p>
														<table>
																<tr><th>Description</th><th>Node Type</th></tr>
																<tr><td>Element</td><td>1</td></tr>
																<tr><td>Attribute</td><td>2</td></tr>
																<tr><td>Text</td><td>3</td></tr>
																<tr><td>Comment</td><td>8</td></tr>
																<tr><td>Document</td><td>9</td></tr>
														</table>
														<p>The space between tags is represented by a text node.</p>
														<p>IE doen't recognize that blank space as a node.</p>
														
														<h3>document Object</h3>
														<p>From the <em>document</em> object you can reference every element on the page, add new elements, and remove existing elements.</em></p>
														<p>Functions for getting elements:</p>
														<ul>
																<li><em>getElementById()</em></li>
																<li><em>getElementsByTagName()</em></li>
																<li><em>childNodes</em></li>
																<li><em>getAttribute()</em></li>
																<li><em>attributes</em></li>
																<li><em>getElementsByClassName()</em> - this function is not in the specification:</li>
														</ul>
														<code>
																function getElementsByClassNAme(node,classname) {<br/>
																&nbsp;&nbsp;&nbsp;var a = []; <br/>
																&nbsp;&nbsp;&nbsp;var re = new RegExp('(^| )'+className+'( |$)');<br/>
																&nbsp;&nbsp;&nbsp;var els = node.getElementsByTagName("*");<br/>
																&nbsp;&nbsp;&nbsp;for(var i=0,j=els.length; i&lt;j; i++)<br/>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(re.test(els[i].className)) a.push(els[i]);<br/>
																&nbsp;&nbsp;&nbsp;return a;<br/>
																}																		
														</code>
														<p>className is a property of an element and stores the value of the <em>class</em> attribute.</p>
														
														
														<h3>Moving Around the DOM</h3>
														<p> are  4 ways to move around the DOM:</p>
														<ul>
																<li><em>childNodes</em> enables to retrieve all nodes under the current element</li>
																<li><em>parentNode</em> retrieves the direct parent of the current element</li>
																<li><em>nextSibling/previousSibling</em> retrieves tha next or previous node, respectively</li>
																<li><em>firstChild/lastChild</em> retrieves the first or last child node of the current element.</li>
														</ul>
														<h4>Working Around Text Nodes</h4>
														<p>In all W3C browsers white space between tags is considered as a node (not in IE!). => while navigating from element to element, we should check whether the node is an element node or a text node.</p>
														<code>
																function getElement(node) {<br/>
																&nbsp;&nbsp;&nbsp;while(node && node.nodeType !=1) {<br/>
																&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node = node.nextSibling;<br/>
																&nbsp;&nbsp;&nbsp;}<br/>
																&nbsp;&nbsp;&nbsp;return node;<br/>
																};<br/>
														</code>
														
														<h4>Handling attributes</h4>
														<ul>
																<li><em>getAttribute()</em></li>
																<li><em>setAttribute()</em></li>
														</ul>
														
														<code>
																<a href="link.html" id="mylink">My Link</a><br/>
																var a = document.getElementById("mylink");<br/><br/>																
																a.setAttribute("href","newlink.html");
														</code>
														<p>Shortcut to an element's attributes:</p>
														<code>var href = a.href;</code>
														<p>When using the <em>href</em> property, the full resolved URL is returned. When using the getAttribute*( method, IE still returns the fully resolved URL, but FF returns only the exact value of the attribute => it's better to use <em>a.href</em> for consistency.</p>
														
														<h4>The style Property</h4>
														<p>Each element in the DOM has a "em>style</p> property that enables you to style the elements dynamically. Camel case is used:</p>
														<code>
																element.style.height = '100px';<br/>
																element.style.display = 'none';<br/>
																element.style.backgroundColor = 'F00';<br/>
																element.style.borderWidth = '2px';<br/>
																element.style.border = '1px solid blue';<br/>
																element.style.background = 'red url(img.gif) no-repeat 0 0';
														</code>
														
														<h4>The class Attribute</h4>
														<p>To avoid confusion with JavaScript classes, the <em>class</em> attribute is referred to using <em>className</em>.</p>
														<code>element.className = 'myclass';</code>
														<p class="codetitle">Example of displaying an error message:</p>
														<code>
														document.getElementById("frm").onsubmit = function() {<br/>
														var passcode = document.getElementById("passcode");<br/>
														&nbsp;&nbsp;&nbsp;if(!passcode.regexp.test(passcode.value))<br/>
														&nbsp;&nbsp;&nbsp;{<br/><strong>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var el = document.createElement("div");<br/>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;el.className = 'error';<br/>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e;.innerHTML = 'Not a valid passcode';<br/>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document.getElementsByTagName("body")[0].appendChild(el);<br/></strong>
														&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return false;<br/>
														&nbsp;&nbsp;&nbsp;}<br/>
														}<br/>
														</code>
														
														<h3>Inserting Content into the DOM</h3>
														<p>There are 3 DOM methods to add new content into the document:</p>
														<ul>
																<li><em>appendChild()</em> adds the element as the last child of a parent element</li>
																<li><em>insertBefore()</em> adds a new element before an element that you specify</li>
																<li><em>replaceChild()</em> replaces an existing element in the DOM with the element that you want to add</li>
														</ul>
														<p>There is one more (currently nonstandard) way of adding content into the document: the <em>innerHTML</em> property. It is a pert of any specification, but it is implemented across all browsers and is supported in XHTML.</p>
														<p><em>innerHTML</em> enables to specify a string of HTML that will be parsed and inserted into the document. That can be an efficient way of inserting multiple elements, attributes, or text content. It's preferable when a large block of HTML should be inserted.</p>
														<p>DOM manipulations gives you some fine-grained control over inserting new elements. Often a combination of techniques results in the best solution.</p>
					



														<h2>Links</h2>
														<ul>
																<li><a href="http://www.webdevout.net/browser-support-dom#dom3core">Web Browser DOM Support</a></li>
														</ul>
																			
										</div>

										<div id="col_right">
												<a href="http://www.apress.com/book/view/1590597648"><img src="img/img_accelerated_dom.gif" width="125" height="164" alt="Pro JavaScript Techniques" /></a>
												<div class="h20"></div>
												<p>See also the article <a href="http://tobielangel.com/2007/1/11/attribute-nightmare-in-ie/">Attribute Nightmare in IE</a> by Toby Langel.</p>
												<div class="resizable quotation rounded {10px}">
														<blockquote>
																<div><span>&quot;</span>The most beautiful thing we can experience is the mysterious. It is the source of all true art and all science. He to whom this emotion is a stranger, who can no longer pause to wonder and stand rapt in awe, is as good as dead: his eyes are closed.<span>&quot;</span></div>
																<div class="author">&mdash; Albert Eistein</div>
														</blockquote>
												</div>
												<div class="h20"></div>								
												<h4>Links</h4>
												<ul>
														<li><a href="http://www.webdevout.net/browser-support-dom#dom3core">Web Browser DOM Support</a></li>
												</ul>
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