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
				<script type="text/javascript" src="js/optimized.js"></script>
				<script type="text/javascript" src="js/dictionary.js"></script>
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
												<div id="col_middle_container">																						
														<h1>JavaScript Reference - DOM Events</h1>	
														<p>Code that is not encapsulated in a function or object gets executed as soon as it is parsed by the browser. Code that is in a function or an object has to be called via an event handler.</p>

																											
														<div id="terminology">																		
																<div id="termin">
																		<h4>Terminology</h4>
																		<ul>
																				<li><a href="ajax_terminology.php?term=Asynchronous">Asynchronous</a></li>
																				<li><a href="ajax_terminology.php?term=Attach/Bind/Register a Callback">Attach/Bind/Register a Callback</a></li>
																				<li><a href="ajax_terminology.php?term=Bubbling">Bubbling</a></li>
																				<li><a href="ajax_terminology.php?term=Capturing">Capturing</a></li>
																				<li><a href="ajax_terminology.php?term=Default Action">Default Action</a></li>
																				<li><a href="ajax_terminology.php?term=Event">Event</a></li>
																				<li><a href="ajax_terminology.php?term=Event Handler">Event Handler</a></li>
																				<li><a href="ajax_terminology.php?term=Threaded">Threaded</a></li>
																		</ul>
																</div>
																<div class="loading">Loading...</div>
																<div id="dictionary"></div>																				
														</div>																		

														<div id="event_object">
																<h4>Event Object</h4>
																<p>The event object is an object that's provided, or is available, inside of every event handler function. How it's handled in Internet Explorer and other browsers varies.</p>
																<p>W3C-compatible browsers provide a single argument to the event handler function, which contains a reference to the event object. Internet Explorer's event object is always available at the window.event property, which should only be accessed while within an event handler.</p>
																
																<h5>Attaching Events Using DOM Methods</h5>
																<p>There is a DOM method that enables multiple event handlers to be added to a single object: <em>addEventListener</em>.</p>
																<code>element.addEventListener(event,listener,false);</code>
																<p>The event parameter is the event type (click, focus, blur, without the <em>on</em> prefix). The second parameter is the function that should execute when the event is fired (without brackets; with the brackets the function would fire immediately). The last parameter is a Boolean indicating whether th event handler should use capturing.</p>
																
																<h5>Event Capturing vs.Event Bubbling</h5>
																<p>To stop an event from moving upand down the DOM tree, we can use <em>stopPropagation()</em> method (for W3C browsers):</p>
																<code>evt.stopPropagation();</code>
																<p>Event capturing isn't supported in IE.</p>
																<p class="codetitle">Attaching Events - Generic Function</p>
																<code>
																	function addListener(element, event, listener) {<br/>
																		if(element.addEventListener) {<br/>
																			element.addEventListener(event, listener, false);<br/>
																		} else if(element.attachEvent){<br/>
																			element.attachEvent('on'+event, function(){listener.call(element)});<br/>
																		}<br/>
																	}<br/>												
																</code>
																
																<h5>Cancelling Behavior</h5>
																<p class="codetitle">Example: the event handler is attached directly to the the element</p>
																<code>
																		var passcode = document.getElementById("passcode");<br/>
																		passcode.regexp = /^[0-9]+$/;<br/>
																		
																		document.getElementById("frm").onsubmit = function() {<br/>
																				var passcode = document.getElementById("passcode");<br/>
																				if(!passcode.regexp.test(passcode.value)) {<br/>
																						alert('Not a valid passcode');<br/>
																						return false;<br/>
																				}<br/>
																		}<br/>
																</code>
																<p class="codetitle">Example: using event listeners => <em>preventDefault()</em> for W3C browsers and property <em>returnValue</em> for IE</p>
																<code>
																		var passcode = document.getElementById("passcode");<br/>
																		passcode.regexp = /^[0-9]+$/;<br/>
																		
																		function isPasscodeValid(evt) {<br/>
																				evt = evt ||window.event;<br/>
																				var passcode = document.getElementById("passcode");<br/>
																				if(!passcode.regexp.test(passcode.value)) {<br/>
																						alert('Not a valid passcode');<br/>
																						if(evt.preventDefault) {<br/>
																								evt.preventDefault();<br/>
																						} else {<br/>
																								evt.returnValue=false;<br/>
																						}<br/>
																				}<br/>
																		}<br/>
																		addListener(document.getElementById("frm"),'submit',isPasscodeValid);<br/>
																		
																		<h5>Event Delegation</h5>
																		<p>Event delegation relies on an element farther up in the DOM stack to receive the event via event bubbling. From there, you can use the <em>target</em> property of the event (or <em>srcElement</em> in IE) to determine what element was the source of the click.</p>
																		<code>
																				//grab the target from the event or srcElement if target doesn't exist<br/>
																				var target = evt.target || evt.srcElement;
																		</code>


																		
																</code>
																
																
																
													
																<div id="props">
																			<div id="genprop">
																					<h5>General Properties</h5>
																					<ul>
																							<li><a href="ajax_event_gen_prop.php?term=type">type</a></li>
																							<li><a href="ajax_event_gen_prop.php?term=target/srcElement">target/srcElement</a></li>
																							<li><a href="ajax_event_gen_prop.php?term=stopPropagation()/cancelBubble">stopPropagation()/cancelBubble</a></li>
																							<li><a href="ajax_event_gen_prop.php?term=prevetDefault()/returnValue">preventDefault()/returnValue</a></li>
																					</ul>
																			</div>
																			<div id="mouseprop">
																					<h5>Mouse Properties</h5>
																					<ul>
																							<li><a href="ajax_event_mouse_prop.php?term=clientX/clientY">clientX/clientY</a></li>
																							<li><a href="ajax_event_mouse_prop.php?term=pageX/pageY">pageX/pageY</a></li>
																							<li><a href="ajax_event_mouse_prop.php?term=layerX/layerY and offsetX/offsetY">layerX/layerY and offsetX/offsetY</a></li>
																							<li><a href="ajax_event_mouse_prop.php?term=button">button</a></li>
																							<li><a href="ajax_event_mouse_prop.php?term=relatedTarget">relatedTarget</a></li>
																					</ul>																						
																			</div>
																			<div id="keyboardprop">
																					<h5>Keyboard Properties</h5>
																					<ul>
																							<li><a href="ajax_event_keyboard_prop.php?term=ctrlKey">ctrlKey</a></li>
																							<li><a href="ajax_event_keyboard_prop.php?term=keyCode">keyCode</a></li>
																							<li><a href="ajax_event_keyboard_prop.php?term=shiftKey">shiftKey</a></li>
																					</ul>																						
																			</div>
																</div>																				
																
																<div class="loading">Loading...</div>
																<div id="properties"></div>			
											</div>
											
											<div id="page_events">
													<h4>Page Events</h4>
													<p>All page events deal specifically with the function and status of the entire page. The majority of the event types handle the loading and unloading of a page (whenever a user visits the page and then leaves again).</p>
													<div id="pageevent">
															<ul>
																	<li><a href="ajax_page_event.php?term=load">load</a></li>
															</ul>																						
													</div>
													<div class="loading">Loading...</div>
													<div id="pageevents"></div>
											</div>
											
											<h4>JavaScript Events - Links</h4>
											<ul>	
													<li><a href="http://www.quirksmode.org/dom/events/index.html">Event compatibility tables</a></li>		
													<li><a href="http://www.w3.org/TR/DOM-Level-2-Events/events.html">W3C DOM Level 2 Events</a></li>
													<li><a href="http://msdn.microsoft.com/en-us/ie/default.aspx">Internet Explorer HTML Events</a></li>	
											</ul>
											
											<div class="lib"><h4>Code Library</h4></div>
											<ul>
													<li><a href="inc/DOM_lib.txt">DOM Library</a>	</li>
													<li><a href="js/addEvent.txt">addEvent removeEvent fixEvent</a></li>
													<li><a href="inc/fade-in-on-load_technique.txt">Fade-in-on-Load Technique Without Failing if JavaScript Is Disabled (JS is disabled or not supported by the browser but CSS is supported)</a></li>
													<li><a href="inc/accessible_js.txt">A Tabbed-Navigation Scenario with Hovering Effects - Attaching Pairs of events to Elements to Allow for Accessible Web Page Use</a></li>
													<li><a href="inc/getStyle.txt">CSS => Accessing Style Information: A Function for Finding the actual Computed Value of a CSS Style Property on an Element</a></li>
											</ul>
																						
											<div id="dynamic">
													<h4>Dynamic Elements - An Element's Position</h4>																		
													<div id="dyn">															
															<ul>
																	<li><a href="ajax_dynamic_events.php?term=Static positioning">Static positioning</a></li>
																	<li><a href="ajax_dynamic_events.php?term=Relative positioning">Relative positioning</a></li>
																	<li><a href="ajax_dynamic_events.php?term=Absolute positioning">Absolute positioning</a></li>
																	<li><a href="ajax_dynamic_events.php?term=Fixed positioning">Fixed positioning</a></li>
															</ul>
													</div>
													<div class="loading">Loading...</div>
													<div id="dynamic_elem"></div>																				
											</div>	
											
											<div class="lib"><h4>Code Library</h4></div>
											<h6>Getting the Position</h6>
											<ul>
													<li><a href="inc/positioning_XY.txt">Two Helper Functions for Determining the x and y Locations of an Element Relative to the Entire Document</a></li>
													<li><a href="inc/CSS_position_of_element_relative_to_its_parent.txt">Two Functions for Determining the Position of an Element Relative to Its Parent Element</a></li>
													<li><a href="inc/CSS_finding_CSS_positioning_of_element.txt">Helper Functions for Finding the CSS Positioning of an Element</a></li>
											</ul>
											<h6>Setting the Position</h6>
											<ul>
													<li><a href="inc/CSS_setting_position_of_element.txt">A Pair of Functions for Setting the x and y Positions of an Element, Regardless of Its Current Position</a></li>
													<li><a href="inc/CSS_adjusting _position_of_element_relative_to_its_current_position.txt">A Pair of Functions for Ajusting the Position of an Element Relative to Its Current Position</a></li>
											</ul>
													</div>
													
													
													
										</div>
										
										
										<div id="col_right">
												<a href='http://www.apress.com/ecommerce/goto?userid=87741&link=book%2Fview%2F9781590597279&key=b0591689f447f3d11205ec57a8df7ee1'><img src="img/img_pro_js_techniques.gif" width="125" height="164" alt="Pro JavaScript Techniques" /></a>
												<a href="http://www.apress.com/book/view/1590597648"><img src="img/img_accelerated_dom.gif" width="125" height="164" alt="Accelerated DOM Scripting with Ajax, APIs, and Libraries" /></a>
												<a href="http://www.packtpub.com/jQuery/book/mid/100407j4kh3d"><img src="img/img_learning_jquery.png" width="100" height="123" alt="Learning jQuery" /></a>
												<h4>Links</h4>					
												<ul>
														<li><a href="http://dean.edwards.name/">Dean Edwards's web site</a></li>
												</ul>
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
				<script type="text/javascript">
						//<![CDATA[
						$('ul.nav>li') .hover(function(){$(this) .addClass('active');}, function(){$(this) .removeClass('active');});
						$('li.ref>a') .css('background-color','#005A9C') .css('color','#FFF') .css('border-bottom','1px solid #005A9C') .css('cursor','text');
											
						$(document).ready(function() {
								$('#dictionary').empty();
								$('#termin a').click(function(){$('#dictionary').load('ajax_terminology.php', {'term': $(this).text()});return false;});
												
								$('#properties').empty();
								$('#genprop a').click(function(){$('#properties').load('ajax_event_gen_prop.php', {'term': $(this).text()});return false;});
							
								$('#properties').empty();
								$('#mouseprop a').click(function(){$('#properties').load('ajax_event_mouse_prop.php', {'term': $(this).text()});return false;});

								$('#properties').empty();
								$('#keyboardprop a').click(function(){$('#properties').load('ajax_event_keyboard_prop.php', {'term': $(this).text()});return false;});
							
								$('#pageevents').empty();
								$('#pageevent a').click(function(){$('#pageevents').load('ajax_page_event.php', {'term': $(this).text()});return false;});
							
								$('#dynamic_elem').empty();
								$('#dyn a').click(function(){$('#dynamic_elem').load('ajax_dynamic_elements.php', {'term': $(this).text()});return false;});
							
								$('#loading').ajaxStart(function(){$(this).show();}).ajaxStop(function(){$(this).hide();});
								$('body').click(function(event){if ($(event.target).is('h3')) {$(event.target).toggleClass('highlighted');}});
								});
								//]]>
				</script>
				<?php include("inc/ga.php"); ?>
  	</body>
</html>