<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();
	$page_title='Janet (Zhanna) Kulyk\'s Web Site - Object-Oriented JavaScript Reference'; 
	$page_keywords = 'Object-Oriented JavaScript, OO JavaScript, DOM, events, web development, interface, frontend'; 
	$page_desc = 'Personal web site of Janet (Zhanna) Kulyk and JK IT Consulting Ltd. Web development, design, fronend engineering';
	$thickbox="";
	include("inc/header_new.inc.php"); 
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
										<h1>Reference - Object-Oriented JavaScript</h1>	
										
										<p>JavaScript enables to modify properties directly.</p>
										<p><em>Encapsulation</em> hides implementation details and restricts access to certain functionality based on what needs to access it.</p>
										<p><em>Inheritance</em> enables you to define subclasses that can inherit properties and methods from a parent object while offering up its own.</p>
										<p><em>Polymorphism</em> allows for the same method name on two different subclasses to exhibit different behavior.</p>
										
										<h3>Functions</h3>
										<p>In JavaScript, functions are objects. The function in JavaScript IS the class definition. The code within the function gets executed each time you instantiate a new object.</p>
										
												<code>function CustomObject();</code><br/>
												<code>var CustomObject = function(){};</code><br/>
												<code>var newObject = new CustomObject();</code><br/>
										<p class="codetitle">Example: Hello, World!</p>
										
												<code>function Hello() {</code><br/>
														<code class="shift">alert("Hello, World!");</code><br/>
												<code>}</code><br/>
												<code>var notifyTheWorld = new Hello();</code><br/>							
										
										<h4>Adding Methods and Properties</h4>
										<p>To add properties to a class, use the <em>this</em> keyword from within the function:</p>
										
												<code>var CustomObject = function() {</code><br/>
														<code class="shift">this.value = 5;</code><br/>
														<code class="shift">this.methodName = function() {alert(this.value)};</code><br/>
												<code>};</code><br/>
												<code>var newObject = new CustomObject();</code><br/>
												<code>newObject.methodName();  //it's 5</code><br/>
										
										
										<h4>The Mechanics of Object Instantiation</h4>
										<p>When the function is executed with the <em>new</em> keyword, a new object is instantiated and used as the context from within the function. Within the function, the <em>this</em> keyword refers to that object,and you can attach new properties and methods to that object. After your function is done, that new object is assigned to your variable.</p>
										
												<code>var Adder = function(valueA,valueB) {</code><br/>
														<code class="shift">var newvalue = valueA + valueB;</code><br/>
														<code class="shift">this.value = newvalue;</code><br/>
														<code class="shift">this.result = function(){alert(this.value)};</code><br/>
												<code>};</code><br/>
												<code>var added = new Adder(5,6);</code><br/>
												<code>added.result(); //it's 11</code><br/>							
										
										<h4>Returning an Object in the Constructor</h4>
										<p>You can decide to ignore the <em>this</em> keyword and explicitly return your own object withmethods and properties attached to it:</p>
										
												<code>var Adder = function(valueA,valueB) {</code><br/>
														<code class="shift">var newvalue = valueA + valueB;</code><br/>
														<code class="shift">var object = new Object();</code><br/>
														<code class="shift">object.value = newvalue;</code><br/>
														<code class="shift">object.result = function(){alert(this.value)};</code><br/>
														<code class="shift">return object;</code><br/>
												<code>};</code><br/>
												<code>var added = new Adder(5,6);</code><br/>
												<code>added.result(); // it's 11</code><br/>
										
										
										<h3>Prototypes and Inheritance</h3>
										<p>Every JavaScript object includes an internal reference to another object known as its prototype object. JavaScript object <em>inherits</em> properties from its prototype.</p>
										<p><em>New</em> operator creates a new, empty object and then invokes a constructor functiona as a method of that object. After creating the empty object, <em>new</em> sets the prototype of that object. The prototype of an object is the value of the prototype property of its constructor function. All functions have a prototype property that is automatically created and initialized when the function is defined. The initial value of the prototype property is an object with a single property. This property is named <em>constructor</em> and refers back to the constructor function with which the prototype is associated. Any properties you add to this prototype object wil appear to be properties of objects initialized by the constructor.</p>
										<p>The prototype object is associated with the constructor, and each object initialized by the constructor inherits exactly the same set of properties from the prototype. This means thatthe prototype object is an ideal place for methods and other constant properties.</p>
										<p>Properties are not copied from the prototype object into new objects; they merely appear as if they were properties of those objects. Hence,</p>
										<ul>
											<li>The use of prototype objects can dramatically decrease the amount of memory required by each object because the object can inherit many of its properties.</li>
											<li>An object inherits properties even if they are added to its prototype <em>after</em> the object is created. This means that it is possible to add new methods to existing classes.</li>
										</ul>
										<p>Inherited properties behave just like regular properties of an object. They are enumerated by the for/in loop and can be tested with the <em>in</em> operator. you can distinguish them only with the Object.hasOwnProperty() method.</p>
										<p>JavaScript is called a prototype-based language because inheritance is handled through <em>prototype chaining</em>. Prototype property allows attach methods that are meant to be shared across all objects.</p>
										
												<code>var Adder = function(valueA,valueB) {</code><br/>
														<code class="shift">var newvalue = valueA + valueB;</code><br/>
														<code class="shift">this.value = newvalue;</code><br/> 
														<code class="shift">this.result = function(){alert(this.value)};</code><br/>
												<code>};</code><br/>
												<code>Adder.prototype.result = function(){alert(this.value)};</code><br/>
												<code>var added = new Adder(5,6);</code><br/>
												<code>added.result(); //it's 11</code><br/>
												
										<h3>Simulating Classes in JavaScript</h3>
										<p>Although JavaScript is not a class-based object-oriented language, it does a good job of simulating the features of class-based languages such as Java and C++.</p>
										<p>An <em>object</em> is a data structure that contains various pieces of named data and may also contain various methods to operate on those pieces of data. An object groups related values and methods into a single convenient package, which generally makes programming easier by increasing the modularity and reusability of code. Objects in JavaScript may have any number of properties, and properties may be dynamically added to an object.</p>
										<p>By default, any object property in JavaScript is an instance property. To truly simulate traditional class-based object-oriented programming, however, we will say that instance properties in JavaScript are those properties that are created and initialized by the constructor function. The implementation of an instance method uses <em>this</em> keyword to refer to the object or instance on which it invoked. Each instance method is shared by all instances of a class. In JavaScript, an instance method for a class is defined by setting a propertyin the constructor's prototype object to a function value.</p>
										<p>To define a class method in JavaScript, simply make the appropriate function a property of the constructor.</p>
										
										<h4>Private Members</h4>
										<p>JavaScript can simulate data encapsulation using closures, but to do so, the accessor methods must be stored on each object instance; they cannot be inherited from the prototype object.</p>
										
										
										<h3>Object Literals</h3>
										<p>Using an <em>object literal</em> is the other primary way of creating a new object.</p>
										<code>var customObject = {};</code>
										<p>Extending the object with its own properties and methods:</p>
										<code>
												var customObject {<br/>
														customProperty:5;<br/>
														customMethod: function(){}<br/>
												};
										</code>
										<p>If you use special characters such as spaces, or if the property name starts with a number, the only way to access those properties is through bracket notation or by looping through all properties using a <em>for...in</em>loop.</p>
										<p>The object literal is limited in that you can't use it as a class to instantiate new objects. One object is defined, and that's it. Having only one of an object can be very good thing. Sometimes you want only a central location to manage things (<em>singleton design patter</em>).</p>
										
										<h3>The for...in Loop</h3>
										<p>The <em>for...in</em> loop loops through methods and properties on the object and on the prototype.</p>
										<p>When using a <em>for...in</em> loop, it's a good practice to always check for <em>hasOwnProperty</em>.</p>
										
										<h3>Named Parameters</h3>
										<p>The object literal can be a handy way to handle names and optional arguments in JavaScript, as well as being able to easily define default options for an object.</p>
										<code>
												function func(options) {<br/>
														alert(options.a); //alert's 5<br/>
												}<br/>
												var myOptions = {a:5, b:6, c:7};<br/>
												func(myOptions);<br/>
										</code>
										<p>To have default options, you can declare them within the function and then overwrite them:</p>
										<code>
												function func(updates) {<br/>
														var options = {a:5, b:6, c:7};<br/>
														for(var property in updates) {<br/>
																options[property] = updates[property];<br/>
														}<br/>
														alert(options.a); //alert's 8<br/>
												}<br/>
												func({a:8});<br/>
										</code>
										
										<h3>Namespaces</h3>
										<p>A <em>namespace</em> is a container for a bunch of related items. Benefits of namespaces:</p>
										<ul>
												<li>It keeps the <em>global</em> object (= <em>window</em> object cleaner. It helps to escape naming collisions.</li>
												<li>It can make a code easier to read. By encapsulating things into a single object, it establishes code ownership and enables the code within to be more self-contained.</li>
										</ul>
										
										<h3>Closures</h3>
										<p>A <em>closure</em> is a protected variable space, created by using nested functions. JavaScript has function-level scope.</p>
										<p>With a <em>closure</em>, a child function has acess to the environment of the parent function, even after the parent function has completed execution.</p>
										<p class="codetitle">Example of closure: declaring event handlers:</p>
										
											<code>function attachBehaviour() {</code><br/>
													<code class="shift">var element = document.getElementById('main');</code><br/>
													<code class="shift">element.onclick = function(){element.innerHTML = 'Surprise!';};</code><br/>
											<code>}</code><br/>
										
										<p>The function attached to the onclick event creates a closure => it still has access to the <em>element</em> variable. As functions get passed around, they always retain access to this initial scoping. The function can be returned or set as a parameter to another function, and it still has access to its original scope. However, <strong>the function has to be declared from within the function whose variables you want to retain access to</strong>.</p>
			
										<h3>Functional Programming</h3>
										<p><em>Functional programming</em> is another programming paradigm, just as OOP is a paradigm. It is the concept of accepting functions as arguments and being able to return functions as a result (known as <em>higher-order functions</em>. This approach is very powerful.</p>
										
										<h4>Callbacks</h4>
										<p>A <em>callback</em> is the process of passing in a function (or the name of a function) into another function so that when the code finishes executing, it can "call that function back". Callbacks are quite common, especially in event-driven scenarios.</p>
										<p>Callbacks are normally handled by passing a function into another object as one of the parameters:</p>
										<code>
												function Animation(startFunction, endFunction) {<br/>
														startFunction();<br/>
														....<br/>
														endFunction();<br/>
												}<br/>
												Animation(function(){alert('Start')}, function(){alert('End')});<br/>
										</code>
										<p>Passing a function that is a method of an object cam be problematic unless you know what to expect. In this case, the method will be disconnected from the object. You can use the JavaScript function <em>call()</em> to run the function int the context of another object.</p>
										
										<h4>The Functions call and apply</h4>
										<p>You can use <em>call</em> to run a function as it were attached to a particular object. You can also specify any number of additional parameters tthat should be passed on to the function.</p>
										<p>The <em>apply</em> function works almost the same way, but instead of specifying each parameter separately, you can pass in an array as the second parameter, and each of those parameters is passed through to the function in the same order as specified in the array.</p>
										
										<h4>Applying a Function to a Collection</h4>
										<p>A handy way to use callbacks is to apply a function to a series of elements within an array or object (which are very similar in functionality). The ability to receive functions as parameters enables you to apply a function to any and all items within a collection.</p>
										<p class="codetitle">Example from jQuery:</p>
										<code>
												$("p").each(function() {<br/>
														this.innerHTML = this + " is the Element";<br/>
												});<br/>
										</code>
										<p class="codetitle">Example: parsing through a special array:</p>
										<code>
												function SpecialArray(arr) {<br/>
														this.arr = arr;<br/>
												}<br/>
												SpecialArray.prototype.map = function(func) {<br/>
														for(var i=0;i&lt;this.arr.length; i++) {<br/>
																this.arr[i] = func(this.arr[i]);<br/>
														}<br/>
														return this;<br/>
												}<br/>
												var obj = new SpecialArray(['A','B','C']);<br/>
												obj.map(function(el){return el.toLowerCase()}); //returns ['a','b','c']<br/><br/>
												var obj = new SpecialArray([1,2,3]);<br/>
												obj.map(function(el){return el*el});  //returns [1,4,9]<br/>
										</code>
										
										<h4>Internal Iterators</h4>
										<p>An <em>internal iterator</em> is a mechanism that enables youto navigate and manipulate collections.</p>
										<p class="codetitle">Example collection object that enables you to navigate:</p>
										<code>
												function Colection(arr) {
														this.current = 0;
														this.items = arr;
												}
												Collection.prototype.getCurrent = function() {
														return this.items[this.current];
												}
												Collection.prototype.getNext = function() {
														return this.items[++this.current];
												}
												Collection.prototype.getPrevious = function() {
														return this.items[--this.current];
												}
												<br/>
												var col1 = new Collection([1,2,3,4]);
												alert(col1.getCurrent()); //1
												alert(col1.getNext()); //on to 2
												alert(col1.getPrevious()); //back to 1
										</code>
										
										<!--<h2>Links</h2>
										<ul>
												<li><a href="http://w3.org">World Wide Web Consortium</a></li>
												<li><a href="http://validator.w3.org">W3C HTML Validation Service</a></li>
												<li><a href="http://www.w3.org/TR/REC-html40">HTML 4.01 Strict</a></li>
										</ul>-->		
								</div>
						</div>
			
						<div class="yui-u">
							<ul>
								<li><a href="http://www.amazon.com/exec/obidos/ASIN/0596517742/wrrrldwideweb"><img src="img/img_js_goodparts.gif" width="125" height="165" alt="JavaScript: The Good Parts" /></a></li>
								<li><a href="http://www.amazon.com/JavaScript-Definitive-Guide-David-Flanagan/dp/0596101996/ref=sr_1_1?ie=UTF8&amp;s=books&amp;qid=1232589085&amp;sr=1-1"><img src="img/img_js.gif" width="125" height="165" alt="JavaScript: The Definitive Guide" /></a></li>
								<li><a href="http://www.apress.com/book/view/1590597648"><img src="img/img_accelerated_dom.gif" width="125" height="164" alt="Pro JavaScript Techniques" /></a></li>
							</ul>
							<div id="quot1" class="resizable">
								<blockquote>
									<div>There is usually never just one way to do things.</div>
								</blockquote>
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
				$('#sf-menu_webdevref>a') .css('background-color','#005A9C') .css('color','#FFF') .css('cursor','text');							//]]>
		</script>
		<?php include("inc/ga.php"); ?>
  	</body>
</html>