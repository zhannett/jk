<!doctype html>
<html lang="en">
  <head>
    <meta charset=utf-8" />
    <title>Victor Diminsky - Home page</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
  </head>

  <body>
  <div class="page">
        <header>
          <h1>VICTOR DIMINSKY PHOTOGRAPHER</h1>
        </header>
        <div id="mainContent">
            <?php include("inc/nav.inc.php") ?>
        <!--
        	<div class="content">
                 <img src="img/commercials/commercials01.jpg" width="450" height="600" alt="" />
                 <img src="img/commercials/commercials02.jpg" width="247" height="360" alt="" />
                 <img src="img/commercials/commercials03.jpg" width="2000" height="1500" alt="" />
                 <img src="img/commercials/commercials04.jpg" width="480" height="360" alt="" />
                 <img src="img/commercials/commercials05.jpg" width="327" height="480" alt="" />
                 <img src="img/commercials/commercials06.jpg" width="327" height="480" alt="" />
            </div>
         -->
            <ul class="gallery">
            	<li><a href="img/commercials/commercials01.jpg" rel="prettyPhoto[gallery]" title=""><img src="img/commercials/thumb/commercials01.jpg" width="75" height="100" alt="" /></a></li>
				<li><a href="img/commercials/commercials02.jpg" rel="prettyPhoto[gallery]" title=""><img src="img/commercials/thumb/commercials02.jpg" width="100" height="69" alt="" /></a></li>
            	<li><a href="img/commercials/commercials03.jpg" rel="prettyPhoto[gallery]" title=""><img src="img/commercials/thumb/commercials03.jpg" width="100" height="75" alt="" /></a></li>
                <li><a href="img/commercials/commercials04.jpg" rel="prettyPhoto[gallery]" title=""><img src="img/commercials/thumb/commercials04.jpg" width="100" height="75" alt="" /></a></li>
                <li><a href="img/commercials/commercials05.jpg" rel="prettyPhoto[gallery]" title=""><img src="img/commercials/thumb/commercials05.jpg" width="68" height="100" alt="" /></a></li>
                <li><a href="img/commercials/commercials06.jpg" rel="prettyPhoto[gallery]" title=""><img src="img/commercials/thumb/commercials06.jpg" width="68" height="100" alt="" /></a></li>
            </ul>
        </div>
        <footer>
        	<small>&copy; Victor Diminsky, 2011</small>
        </footer>
     </div>
     <script src="js/jquery-1.5.2.min.js"></script> 
     <script src="js/tree.js"></script>
     <script src="http://janetkulyk.com/js/jquery.prettyPhoto.js" charset="utf-8"></script>	
		<script>
			//<![CDATA[
				$("a[rel^='prettyPhoto']").prettyPhoto({
					animationSpeed: 'normal', /* fast/slow/normal */
					padding: 40, /* padding for each side of the picture */
					opacity: 0.35, /* Value betwee 0 and 1 */
					showTitle: true, /* true/false */
					allowresize: true, /* true/false */
					counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
					theme: 'dark_rounded', /* light_rounded / dark_rounded / light_square / dark_square */
					callback: function(){}
				});
			//]]>
		</script>
  </body>
</html>