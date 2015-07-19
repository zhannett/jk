<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - AJAX Reference'; 
	$page_keywords = 'AJAX, XMLHttpRequest, JavaScript, DOM, XML, JSON'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering';
	$thickbox="";
	include("inc/header_new.inc.php") 
?>				
						<div class="yui-b">
								<?php include("inc/w3c.inc") ?>
								<?php include("inc/nav_ref.php") ?>
						</div>
		
						<div id="yui-main">
										<div class="yui-b">	
											<div class="yui-ge">
												<div class="yui-u first">
													<div id="main_content" class="resizable">																						
														<h1>AJAX Reference</h1>	
														
														<h3>HTTP Requests</h3>
														<h4>Establishing a Connection using XMLHttpRequest object</h4>
														<p>IE establishes all its connections using ActiveXObject. IE7 and IE8 have native support for the XMLHttpRequest object.</p>
														<p>All modern browsers have localized the capabilities of the XMLHttpRequest object into the XMLHttpObject (FF, Opera, Safari).</p>
														<p class="codetitle">Function for Establishing generic AJAX functionality</p>
														
															<code class="comm">/* SimpleXhrFactory singleton. */</code><br/>
															<code>var SimpleXhrFactory = (function() {</code><br/>
															  
																  <code class="shift comm">// The three branches.</code><br/>
																  <code class="shift">var standard = {</code><br/>
																		<code class="doubleshift">createXhrObject: function() {</code><br/>
																		  	<code class="tripleshift">return new XMLHttpRequest();</code><br/>
																		<code class="doubleshift">}</code><br/>
																  <code class="shift">};</code><br/>
																  <code class="shift">var activeXNew = {</code><br/>
																		<code class="doubleshift">createXhrObject: function() {</code><br/>
																		  	<code class="tripleshift">return new ActiveXObject('Msxml2.XMLHTTP');</code><br/>
																		<code class="doubleshift">}</code><br/>
																  <code class="shift">};</code><br/>
																  <code class="shift">var activeXOld = {</code><br/>
																		<code class="doubleshift">createXhrObject: function() {</code><br/>
																		  	<code class="tripleshift">return new ActiveXObject('Microsoft.XMLHTTP');</code><br/>
																		<code class="doubleshift">}</code><br/>
																  <code class="shift">};</code><br/>
																  
																  <code class="shift comm">// To assign the branch, try each method; return whatever doesn't fail.</code><br/>
																 <code class="shift"> var testObject;</code><br/>
																  <code class="shift">try {</code><br/>
																		<code class="doubleshift">testObject = standard.createXhrObject();</code><br/>
																		<code class="doubleshift">return standard; <span class="comm">// Return this if no error was thrown.</span></code><br/>
																  <code class="shift">}</code><br/>
																  <code class="shift">catch(e) {</code><br/>
																		<code class="doubleshift">try {</code><br/>
																		  	<code class="tripleshift">testObject = activeXNew.createXhrObject();</code><br/>
																		  	<code class="tripleshift">return activeXNew; <span class="comm">// Return this if no error was thrown.</span></code><br/>
																		<code class="doubleshift">}</code><br/>
																		<code class="doubleshift">catch(e) {</code><br/>
																			  <code class="tripleshift">try {</code><br/>
																					<code class="quadshift">testObject = activeXOld.createXhrObject();</code><br/>
																					<code class="quadshift">return activeXOld; <span class="comm">// Return this if no error was thrown.</span></code><br/>
																			  <code class="tripleshift">}</code><br/>
																			  <code class="tripleshift">catch(e) {</code><br/>
																					<code class="quadshift">throw new Error('No XHR object found in this environment.');</code><br/>
																			  <code class="tripleshift">}</code><br/>
																		<code class="doubleshift">}</code><br/>
																  <code class="shift">}</code><br/>
																
															<code>})();</code><br/>
					
														<p class="codetitle">Establishing an HTTP GET Request with the server</p>
														<code>								
																var ajax = SimpleXhrFactory;<br/>				
																ajax.open('GET', '/some/url.php', true);  <span class="comm">// Open the socket</span><br/>
																<span class="comm">// Establish the connection to the server and send any additional data </span><br/>
																ajax.onreadystatechange = function() {  <span class="comm">//Function that handles the response</span><br/>
																	<span class="comm">//handleResponse(ajax); </span><br/>
																}<br/>
																ajax.send();<br/>
														</code>
														<p class="codetitle">Possible  <em>readyState</em> States</p>
														<table id="readystatestates">
																<tr><th>Value</th><th>State</th><th>Description</th></tr>
																<tr><td>0</td><td>Uninitialized</td><td>The open method of the XHP object hasn't been called yet.</td></tr>
																<tr><td>1</td><td>Loading</td><td>The send method hasn't been called yet.</td></tr>
																<tr><td>2</td><td>Loaded</td><td>The send methohd has been called; response headers are available.</td></tr>
																<tr><td>3</td><td>Interactive</td><td>The response data is in the process of downloading, and is available via the <em>responseText</em> property of the XHR object.</td></tr>
																<tr><td>4</td><td>Completed</td><td>Everything is done, and the entire result is available in the <em>responseText</em> and, if available, the <em>responseXML</em> properties of the XHR object.</td></tr>
														</table>
																																	
														<h4>Serializing Data</h4>
														<p>The first step of sending a set of data to a server is to format it so that the server can easily read it; this process is called <em>serialization:</em>. There are two serialization cases of data that can give you the greatest range of transmission possibilities:</p>
														<p>1. The transmission of a regular JavaScript object, which can be used to hold pairs of kews/values (where the values are either numbers or strings). (In this case, the order of submitte values doesn't matter).</p>
														<p>2. The submission of the values from a number of form input elements (in this case the order of submitted elements matters).</p>
														<p class="codetitle">Examples of Raw JavaScript Objects Converted to Their Serialized Form</p>
														<code>
																	<span class="comm">// A simple object holding key/value pairs</span><br/>
																	{<br/>
																			name: 'John',<br/>
																			last: 'Resig',<br/>
																			city: 'Cambridge',<br/>
																			zip: 02140<br/>
																	}<br/>
																	<span class="comm">// Serialized form</span><br/>
																	name=John&amp;last=Resig&amp;city=Cambridge&amp;zip=02140<br/>
																	<span class="comm">// Another set of data, with multiple values</span><br/>
																	[<br/>
																			{ name: 'name', value: 'John' },<br/>
																			{ name: 'last', value: 'Resig' },<br/>
																			{ name: 'lang', value: 'JavaScript' },<br/>
																			{ name: 'lang', value: 'Perl' },<br/>
																			{ name: 'lang', value: 'Java' }<br/>
																	]<br/>
																	<span class="comm">// And the serialized form of that data</span><br/>
																	name=John&amp;last=Resig&amp;lang=JavaScript&amp;lang=Perl&amp;lang=Java<br/>
														</code>
																					
														<p class="codetitle">A standard function for serializing data structures to an http-compatible parameter scheme</p>
														<code>
																<span class="comm">// Serialize a set of data. It can take two different types of objects:</span><br/>
																<span class="comm">//  - An array of input elements.</span><br/>
																<span class="comm">//  - A hash of key/value pairs</span><br/>
																<span class="comm">// The function returns a serialized string</span><br/>
																function serialize(a) {<br/>
																		<span class="comm">// The set of serialize results</span><br/>
																		var s = [];<br/>
																		<span class="comm">// If an array was passed in, assume that it is an array of form elements</span><br/>
																		if ( a.constructor == Array ) {<br/>
																		<span class="comm">// Serialize the form elements</span><br/>
																		for ( var i = 0; i &lt; a.length; i++) { <br/>
																		s.push( a[i].name + '=' + encodeURIComponent( a[i].value ) );<br/>
																		} else {<br/>
																		for ( var j in a )<span class="comm">// Otherwise, assume that it's an object of key/value pairs</span><br/>
																		s.push( j + '=' + encodeURIComponent( a[j] ) );<span class="comm">// Serialize the key/values</span><br/>
																		}<br/>
																		return s.join('&amp;');<span class="comm">// Return the resulting serialization</span><br/>
																}<br/>
														</code>
											
														<h4>Establishing a GET Request</h4>
														<p class="codetitle">Establishing an HTTP GET Request with the Server (and Not Reading Any Resulting Data)</p>
														<code>
															var ajax = new XMLHttpRequest();<span class="comm"> // Create the request object</span><br/>
															ajax.open('GET', '/some/url.cgi?' + serialize( data ), true);<span class="comm"> // Open the asynchronous GET request</span><br/>
															ajax.send();<span class="comm"> // Establish the connection to the server</span><br/>
														</code>
														<p>Serialized data is appended to the server URL (separated by a ? character). All web servers and application frameworks know to interpret the data included after the ? as a serialized set of key/value pairs.</p>
														
																					
														<h4>Establishing a POST  Request</h4>
														<p>POST request involves a fundamentally different way of sending data to the server. POST request is capable of sending data of any format and of any length (not just limited to serialized string of data).</p>
														<p>The serialization format that you've been using for your data is generally given the content type of application/x-www-form-urlencoded when passed to the server. This means that you could also send pure XML to the server (with a content type of text/xml or application/xml) or even a JavaScript object (using the content type application/json).</p>
														<p class="codetitle">A Cross-Browser Means of Establishing an HTTP POST Request with the Server (and Not Reading Any Resulting Data)</p>
														<code>
																var ajax = new XMLHttpRequest(); <span class="comm">// Create the request object</span><br/>
																xml.open('POST', '/some/url.cgi', true); <span class="comm">// Open the asynchronous POST request</span><br/>
																<span class="comm">// Set the content-type header, so that the server knows how to interpret the data that we're sending</span><br/>
																ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');<br/>
																<span class="comm">// Make sure the browser sends the right content length of the serialized data - Mozilla-based browsers sometimes have trouble with this</span><br/>
																if (ajax.overrideMimeType) ajax.setRequestHeader('Connection', 'close');<br/>
																ajax.send( serialize( data ) ); <span class="comm"> // Establish the connection to the server and send the serialized data</span><br/>
														</code>
														<p class="codetitle">An Example of POSTing XML Data to a Server</p>
														<code>
																var ajax = new XMLHttpRequest(); <span class="comm">// Create the request object</span><br/>
																ajax.open('POST', '/some/url.cgi', true); <span class="comm">// Open the asynchronous POST request</span><br/>
																<span class="comm">// Set the content-type header, so that the server knows how to interpret the XML data that we're sending</span><br/>
																ajax.setRequestHeader( 'Content-Type', 'text/xml');<br/>
																<span class="comm">// Make sure the browser sends the right content length of the serialized data - Mozilla-based browsers sometimes have trouble with this</span><br/>
																if ( ajax.overrideMimeType ) ajax.setRequestHeader('Connection', 'close');<br/>											ajax.send("&lt;items&gt;&lt;item id='one'/&gt;&lt;item id='two'/&gt;&lt;/items>");<span class="comm">// Establish the connection to the server and send the serialized data</span><br/>
														</code>
														<p>The ability to send bulk amounts of data (there is no limit on the amount of data that you can send via POST) is extremely important. With it, you can create implementations of different communication protocols, such as XML-RPC or SOAP.</p>
																
														<h3>HTTP Response</h3>
														<p>The aspect of creating and using an XMLHttpRequestthat elevates it above other simplistic forms of one-way communication is its ability to read different textual data formats from a server.</p>
														<p class="codetitle">Establishing a Connection with a Server and Reading the Resulting Data</p>
														<code>
																var ajax = new XMLHttpRequest(); <span class="comm">// Create the request object</span><br/>
																ajax.open('GET', '/some/url.cgi', true); <span class="comm">// Open the asynchronous POST request</span><br/>
																ajax.onreadystatechange = function(){ <span class="comm">// Watch for when the state of the document gets updated</span><br/>
																if ( ajax.readyState == 4 ) {<span class="comm"> // Wait until the data is fully loaded</span><br/>
																<span class="comm">// ajax.responseXML contains the XML Document (if one was returned)</span><br/>
																<span class="comm">// ajax.responseText contains the response text (if no XML document was provided)</span><br/>
																<span class="comm">// Clean up after ourselves, to avoid memory leaks</span><br/>
																ajax = null;<br/>
																}<br/>
																};<br/>
																ajax.send(); <span class="comm">// Establish the connection to the server</span><br/>
														</code>
														<p>The <em>responseXML</em> property will be populated only if the server returns a valid XML document with the MIME type text/xml.</p>
														
														<h4>Handling Errors</h4>
														<p>XMLHttpRequest object doesn't have any built-in mechanism for handling server errors.</p>
														<p>The way one would expect to check for errors would be by looking at the HTTP response status code.</p>
														<ul class="simple">
																<li><em>Successful response codes:</em> A successful request is classified as one where status code of the request is within the 200 range.</li>
																<li><em>Not modified response:</em> A document returned from the server could be labeled as 'Not Modified' (status code 304). This means that the data from the server has not been modified and is instead loaded from the browser's personal cache. It is important to not classify this as an error, as data is still available to be read by the client.</li>
																<li><em>Locally hosted files:</em> If you're running an Ajax application on your local computer (but not through a web server) there will be no status code returned - even if the request is successful. This means that you need to make sure that if no status code is provided, and if you're looking at a local file, you classify it as a successful response.</li>
																<li><em>Not modified and Safari: </em> Safari returns a status code of 'undefined' if the document has not been modified since the last request (and if you explicitly send an IF-MODIFIED-SINCE header to the server). This is a rather strange case, and a frustrating one to debug later.</li>
														</ul>
														<p class="codetitle">A Function that Can Be Used to Check the Success State of an HTTP Response From a Server</p>
														<code>
																<span class="comm">// Check to see if an XMLHttpRequest object has a 'Success' state, or not.</span><br/>
																<span class="comm">// The function takes one argument, the XMLHttpRequest object</span><br/>
																function httpSuccess(r) {<br/>
																try {<br/>
																<span class="comm">// If no server status is provided, and we're actually requesting a local file, then it was successful</span><br/>
																return !r.status &amp;&amp; location.protocol == 'file:' ||<br/>
																( r.status &gt;= 200 &amp;&amp; r.status &lt; 300 ) || <span class="comm">// Any status in the 200 range is good</span><br/>											r.status == 304 || <span class="comm">// Successful if the document has not been modified</span><br/>
																<span class="comm">// Safari returns an empty status if the file has not been modified</span><br/>
																navigator.userAgent.indexOf('Safari') &gt;= 0 &amp;&amp; typeof r.status == 'undefined';<br/>
																} catch(e){}<br/>											return false; <span class="comm">// If checking the status failed, then assume that the request failed too</span><br/>
																}<br/>
														</code>
														
														<h4>Checking for time-Outs</h4>
														<p class="codetitle">An Example of Checking for a Request Time-Out</p>
														<code>
																var ajax = new XMLHttpRequest(); <span class="comm">// Create the request object</span><br/>
																ajax.open('GET', '/some/url.cgi', true); <span class="comm">// Open the asynchronous POST request</span><br/>
																var timeoutLength = 5000; <span class="comm">// We're going to wait for a request for 5 seconds, before giving up</span><br/>
																var requestDone = false; <span class="comm">// Keep track of when the request has been succesfully completed</span><br/>
																setTimeout(function(){ <span class="comm">// Initalize a callback which will fire 5 seconds from now, cancelling the request (if it has not already occurred).</span><br/>
																<span class="shift">requestDone = true;</span><br/>
																}, timeoutLength);<br/>
																ajax.onreadystatechange = function(){ <span class="comm">// Watch for when the state of the document gets updated</span><br/>
																if (ajax.readyState == 4 &amp;&amp; !requestDone) { <span class="comm">// Wait until the data is fully loaded, and make sure that the request hasn't already timed out</span><br/>
																<span class="comm">// xml.responseXML contains the XML Document (if one was returned)</span><br/>
																<span class="comm">// xml.responseText contains the response text (if no XML document was provided)</span><br/>
																ajax = null; <span class="comm">// Clean up after ourselves, to avoid memory leaks</span><br/>
																} <br/>
																};<br/>											
																ajax.send(); <span class="comm">// Establish the connection to the server</span><br/>
														</code>	
														<div class="h20"></div>													
														
														<h3>Handling Response Data</h3>
														<p>In reality, the XMLHttpRequest only deals with text-based data formats, and even then, it deals with some (XML) better than others (JSON).</p>
														<p>3 typical data formats that can be returned by the server, then read and manipulated by the client:</p>
														<ul>
																<li><em>XML:</em> All modern browsers provide hooks to handle XML documents natively, automatically transforming them into useful DOM documents.</li>
																<li><em>HTML:</em> This is different from XML document in that it usually only exists as a plain text string, holding only an HTML snippet.</li>
																<li><em>JavaScript/JSON:</em> This encompasses 2 data fromats - raw, executable JavaScript code, and the JSON data format.</li>
														</ul>
														<p>The important aspect of retrieving the data from the HTTP response lies in two properties of the XMLHttpRequest object:</p>
														<ul>
																<li><em>responseXML:</em> With <em>responseXML</em>, you have an XML object automatically ready to go. This property will contain a reference to a precomputed DOM document (which represents an XML document) if an XML document has been returned from the server.This will only be the case if the server has explicitly specified its content headers as 'Content-type:text/xml', or similar XML data type.</li>
																<li><em>responseText:</em> With <em>responseText</em>, you have to parse it into whatever format you think you need. This property contains a reference to the raw text string of data returned by the server. Both the HTML and JavaScript data types rely on this methid for accessing their data.</li>
														</ul>
														<p class="codetitle">A Function for Extracting the Correct Data From an HTTP Server Response</p>
														<code>
																<span class="comm">// A function for extracting data from an HTTP reponse. It takes two arguments, the XMLHttpRequest object and an optional argument – the type of data that you're expecting from the server</span><br/>
																<span class="comm">// Correct values include: xml, script, text, or html – the default is "", which determines what the data type is based upon the content-type header</span><br/>
																function httpData(r, type) {<br/>
																<span class="comm">// Get the content-type header</span><br/>
																var ct = r.getResponseHeader("content-type");<br/>
																<span class="comm">// If no default type was provided, determine if some form of XML was returned from the server</span><br/>
																var data = !type &amp;&amp; ct &amp;&amp; ct.indexOf("xml") >= 0;<br/>
																<span class="comm">// Get the XML Document object if XML was returned from the server, otherwise return the text contents returned by the server</span><br/>
																data = type == "xml" || data ? r.responseXML : r.responseText;<br/>
																<span class="comm">// If the specified type is "script", execute the returned text response as if it was JavaScript</span><br/>
																if ( type == "script" ) eval.call( window, data );<br/>
																<span class="comm">// Return the response data (either an XML Document or a text string)</span><br/>
																return data;<br/>
																}<br/>
														</code>
					
														<h3>The Complete AJAX Package</h3>		
														<p class="codetitle">A Complete Function Capable ofPerforming the Necessary Ajax-Related Tasks</p>		
														<code>
																if (typeof XMLHttpRequest == 'undefined')<br/>
																		XMLHttpRequest = function(){<br/>
																		return new ActiveXObject(<br/>
																				navigator.userAgent.indexOf('MSIE 5') >= 0 ? 'Microsoft.XMLHTTP' : 'Msxml2.XMLHTTP'<br/>
																		);<br/>
																};<br/>
																<span class="comm">// A generic function for performming AJAX requests</span><br/>
																<span class="comm">// It takes one argument, which is an object that contains a set of options all of which are outline in the comments, below</span><br/>
																function ajax( options ) { <br/>
																options = {  <span class="comm">// Load the options object with defaults, if no values were provided by the user</span><br/>
																type: options.type || "POST",  <span class="comm">// The type of HTTP Request</span><br/>
																url: options.url || "",  <span class="comm">// The URL the request will be made to</span><br/>
																timeout: options.timeout || 5000,  <span class="comm">// How long to wait before considering the request to be a timeout</span><br/>
																<span class="comm">// Functions to call when the request fails, succeeds, or completes (either fail or succeed)</span><br/>
																onComplete: options.onComplete || function(){},<br/>
																onError: options.onError || function(){},<br/>
																onSuccess: options.onSuccess || function(){},<br/>
																<span class="comm">// The data type that'll be returned from the server the default is simply to determine what data was returned from the and act accordingly.</span><br/>
																data: options.data || ""<br/>
																};<br/>
																<br/>
																var ajax = new XMLHttpRequest();  <span class="comm">// Create the request object</span><br/>
																ajax.open("GET", "/some/url.cgi", true);  <span class="comm">// Open the asynchronous POST request</span><br/>
																var timeoutLength = 5000; <span class="comm">// We're going to wait for a request for 5 seconds, before giving up</span><br/>
																var requestDone = false;  <span class="comm">// Keep track of when the request has been succesfully completed</span><br/>
																setTimeout(function(){  <span class="comm">// Initalize a callback which will fire 5 seconds from now, cancelling the request (if it has not already occurred).</span><br/>
																requestDone = true;<br/>
																}, timeoutLength);<br/>
																ajax.onreadystatechange = function(){  <span class="comm">// Watch for when the state of the document gets updated</span><br/>
																if ( ajax.readyState == 4 &amp;&amp; !requestDone ) {  <span class="comm">// Wait until the data is fully loaded, and make sure that the request hasn't already timed out</span><br/>
																if ( httpSuccess( ajax ) ) { <span class="comm">// Check to see if the request was successful</span><br/>
																options.onSuccess( httpData( ajax, options.type ) );  <span class="comm">// Execute the success callback with the data returned from the server</span><br/>
																} else {<br/>
																options.onError();  <span class="comm">// Otherwise, an error occurred, so execute the error callback</span><br/>
																}<br/>
																options.onComplete();  <span class="comm">// Call the completion callback</span><br/>
																ajax = null;  <span class="comm">// Clean up after ourselves, to avoid memory leaks</span><br/>
																}<br/>
																};<br/>
																ajax.send();  <span class="comm">// Establish the connection to the server</span><br/>
																function httpSuccess(r) {  <span class="comm">// Determine the success of the HTTP response</span><br/>
																try {<br/>
																return !r.status &amp;&amp; location.protocol == "file:" ||  <span class="comm">// If no server status is provided, and we're actually requesting a local file, then it was successful</span><br/>
																( r.status &gt;= 200 &amp;&amp; r.status &lt; 300 ) ||  <span class="comm">// Any status in the 200 range is good</span><br/>
																r.status == 304 ||  <span class="comm">// Successful if the document has not been modified</span><br/>
																navigator.userAgent.indexOf("Safari") >= 0 &amp;&amp; typeof r.status == "undefined";  <span class="comm">// Safari returns an empty status if the file has not been modified</span><br/>
																} catch(e){}<br/>
																return false;  <span class="comm">// If checking the status failed, then assume that the request failed too</span><br/>
																}<br/>
																function httpData(r,type) {  <span class="comm">// Extract the correct data from the HTTP response</span><br/>
																var ct = r.getResponseHeader("content-type");  <span class="comm">// Get the content-type header</span><br/>
																<span class="comm">// If no default type was provided, determine if some form of XML was returned from the server</span><br/>
																var data = !type &amp;&amp; ct &amp;&amp; ct.indexOf("xml") >= 0;<br/>
																<span class="comm">// Get the XML Document object if XML was returned from the server, otherwise return the text contents returned by the server</span><br/>
																data = type == "xml" || data ? r.responseXML : r.responseText;<br/>
																if ( type == "script" )  <span class="comm">// If the specified type is "script", execute the returned text response as if it was JavaScript</span><br/>
																eval.call( window, data );<br/>
																return data;  <span class="comm">// Return the response data (either an XML Document or a text string)</span><br/>
																}<br/>
																}<br/>
														</code>
																			
														<h4>Handling XML Response</h4>
														<code>
																var doc = ajax.responseXML.documentElement;  <span class="comm">// grabs the root node</span><br/>
														</code>
														<div class="h20"></div>
														
														<h5>Encoding XML</h5>
														<p>XML has 5 characters that can be encoded: &amp; &lt;, &gt;, &apos;, and &quot;. These characters can be encoded with their numerical character references or their predefined entities.</p>
														<p class="codetitle">Available Predefined Entities</p>
														<table>
																<tr><th>Character</th><th>Numerical Character reference</th><th>Predefined Entity</th></tr>
																<tr><td>&amp;</td><td>&amp;#38;</td><td>&amp;amp;</td></tr>
																<tr><td>&lt;</td><td>&amp;#60;</td><td>&amp;lt;</td></tr>
																<tr><td>&gt;</td><td>&amp;#62;</td><td>&amp;gt;</td></tr>
																<tr><td>&apos;</td><td>&amp;#39;</td><td>&amp;apos;</td></tr>
																<tr><td>&quot;</td><td>&amp;#34;</td><td>&amp;quot;</td></tr>
														</table>
														<div class="h20"></div>
														
														<h5>CDATA Nodes</h5>
														<p>CDATA sections give you a lot of flexibility and can remove much of the worry about encoding:</p>
														<code>&lt;myhtml&gt;&lt;![CDATA[&amp;copy; &lt;strong&gt;Smith &amp; Smith&lt;/strong&gt;]]>&lt;/myhtml&gt;</code>
														<p>Retrieving the content from a CDATA section works exactly like retrieving it from a text node.</p>
														<div class="h20"></div>
														
														<h5>XSLT</h5>
														<p>One reason to use XML as a data format is to take advantage of XSLT, which is a transformation language that converts an XML document into another format (another XML such as XHTML). Unfortunately, cross-browser support is often slow or buggy with libraries built to address these shortcomings:</p>
														<ul>
																<li><a href="http://goog-ajaxslt.sourceforge.net/">Google AJAXSLT</a> is a Google's cross-browser XSLT library (supports for Safari 1.3+, Opera 7.5+, IE6+, and FireFox 1+.</li>
																<li><a href="http://dev.abiss.gr/sarissa/">Sarissa</a> acts as a cross-browser wrapper for a number of XML APIs, including XMLDocument, XMLElement, XMLHttpRequest, XMLSerializer, and XSLTProcessor.</li>
														</ul>
														
														<h4>Alternatives to XML</h4>
														<p>XML format has downsides. It can be a complicated method of navigating the document and it is verbose. A variety of cross-browser issues take place as well.</p>
														<p>A string response <em>responseText</em> can be quite powerful  because we can transform the sting into something much more useful.</p>
														<div class="h20"></div>
														
														<h5>HTML</h5>
														<p>This is super easy. We just need to return an HTML snippet and then insert that snippet into the document:</p>
														<code>
																var htmlSnippet = ajax.responseText; <span class="comm">//grabs the text response</span><br/>
																var el = document.getElementById('placeholder');<br/>
																el.innerHTML = htmlSnippet;<br/>
														</code>
														<div class="h20"></div>
														
														<h5>JavaScript - JSON</h5>
														<p>When JSON data is returned from the server, it needs to be evaluated just like any other data. Because of the potential for code injection attacks, it's recommended using a client-side parser such as the one on the <a href="http://www.json.org">JSON web site</a>.</p>
														<code>
																var obj = ajax.responseText.parseJSON();<br/>
																if(obj) performMagic(obj);<br/>
														</code>
														<p>Returning the data in any other format besides JSON usually means parsing the data into JavaScript before you can manipulate it; hence the reason JSON has become such a popular format.</p>
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

										<div class="yui-u">
											<ul>
												<li><a href="http://www.apress.com/book/view/1590597273"><img src="img/img_pro_js_techniques.gif" width="125" height="164" alt="Pro JavaScript Techniques" /></a></li>
												<li><a href="http://www.apress.com/book/view/1590597648"><img src="img/img_accelerated_dom.gif" width="125" height="164" alt="Pro JavaScript Techniques" /></a></li>
												<li><a href="http://www.amazon.ca/Building-Web-Site-Ajax-QuickProject/dp/0321524411/ref=sr_1_2?ie=UTF8&amp;s=books&amp;qid=1241027346&amp;sr=1-2"><img src="img/img_website_ajax.gif" width="125" height="158" alt="Pro JavaScript Techniques" /></a></li>
											</ul>
											<div id="quot1" class="resizable">
												<blockquote>
													<div><span>&quot;</span>The most beautiful thing we can experience is the mysterious. It is the source of all true art and all science. He to whom this emotion is a stranger, who can no longer pause to wonder and stand rapt in awe, is as good as dead: his eyes are closed.<span>&quot;</span></div>
													<div class="author">&mdash; Albert Eistein</div>
												</blockquote>
											</div>										
										</div>										
									</div>	
								</div>	
							</div>	
						</div>	
					</div>	
				</div>											
				<?php include("inc/footer_new.inc.php"); ?>					
				<script type="text/javascript" src="js/optim.js" charset="utf-8"></script>
				<script type="text/javascript" src="js/dictionary.js"></script>
				<script type="text/javascript">
					//<![CDATA[
						$('#sf-menu_webdevref>a') .css('background-color','#005A9C') .css('color','#FFF') .css('cursor','text');							
					//]]>
				</script>
				<?php include("inc/ga.php"); ?>
  	</body>
</html>