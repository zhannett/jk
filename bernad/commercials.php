<!doctype html>
<html lang="en">
  <head>
    <meta charset=utf-8" />
    <title>Victor Diminsky - Home page</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/tree.css" />
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
  </head>

  <body>
  	<div class="page">
        <?php include("inc/header.inc.php") ?>
        <div id="mainContent">
            <?php include("inc/nav.inc.php") ?>
            <ul class="gallery">
            	<li><a href="img/commercials/commercials01.jpg" rel="prettyPhoto[gallery]" title=""><img src="img/commercials/thumb/commercials01.jpg" width="75" height="100" alt="" /></a></li>
				<li><a href="img/commercials/commercials02.jpg" rel="prettyPhoto[gallery]" title=""><img src="img/commercials/thumb/commercials02.jpg" width="69" height="100" alt="" /></a></li>
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
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
     <script src="js/tree.js"></script>
     <script src="js/jquery.prettyPhoto.js" charset="utf-8"></script>
		<script>
			//<![CDATA[
				$("a[rel^='prettyPhoto']").prettyPhoto({
					animationSpeed: 'slow', /* fast/slow/normal */
					padding: 40, /* padding for each side of the picture */
					showTitle: false, /* true/false */
					allowresize: true, /* true/false */
					counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
					callback: function(){}
				});
			//]]>
		</script>
  </body>
</html>