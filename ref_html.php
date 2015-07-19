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
				<link rel="stylesheet" type="text/css" href="css/new.css" />
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
														<h1>HTML Reference</h1>	
														
														<p>Using semantic HTML means using elements that are appropriate for the content that it contains.</p>
														<p>Semantic HTML is important for using assistive technologies such as screen readers. Semantic HTML gives users more control over the page.</p>
														<p>In web application development, using semantic HTMLimproves code readability, makes CSS easier to work with , and allows for additional hooks with which to tie in JavaScripting goodness.</p>
														<p>Semantic markup can also apply to your choice of class names on an element.</p>
														
														<h3>XHTML and MIME type</h3>
														<p>XHTML should be sent to the browser and identified as such by using the MIME type application/xhtml+xml. Unfortunately, IE does not support this MIME type and will try to download the file or pass it off to another application to handle. XHTML 1.0 can be sent using the MIME type text/html, but browsers will render the page as ordinary HTML.</p>
														<p>When serving as XML, some older DOM objects and methods - such as innerHTML, document,images, and document.forms - might no longer be available in some browsers.</p>
														
														
														<h2>Links</h2>
														<ul>
																<li><a href="http://w3.org">World Wide Web Consortium</a></li>
																<li><a href="http://validator.w3.org">W3C HTML Validation Service</a></li>
																<li><a href="http://www.w3.org/TR/REC-html40">HTML 4.01 Strict</a></li>
														</ul>
																			
												</div>
										</div>

										<div id="col_right">
												<a href="http://www.apress.com/book/view/1590597273"><img src="img/img_pro_js_techniques.gif" width="125" height="164" alt="Pro JavaScript Techniques" /></a>
												<a href="http://www.apress.com/book/view/1590597648"><img src="img/img_accelerated_dom.gif" width="125" height="164" alt="Pro JavaScript Techniques" /></a>
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