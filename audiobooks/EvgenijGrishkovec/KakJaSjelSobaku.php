<?php
	if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start();
	header('Content-Type:text/html; charset=utf-8');
	session_start();	
	$page_title='Аудиокнига: Евгений Гришковец. Как я съел собаку'; 
	$page_keywords = 'Аудиокнига: Евгений Гришковец. Как я съел собаку'; 
	$page_desc = 'Аудиокнига: Евгений Гришковец. Как я съел собаку';     
	$page_css = '../../css/jk-min.css';
	$thickbox="";
	include("../../inc/header_new.inc.php");
?>

			<div class="yui-b">
				<?php include("../../inc/w3c.inc") ?>	
			</div>
			
			<div id="yui-main">
				<div class="yui-b">	
					<div class="yui-ge">
						<div class="yui-u first">
							<div id="main_content" class="resizable">
								<img src="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/cover.jpg" width="200" height="199" alt="Евгений Гришковец. Как я съел собаку" />
								<ul>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/01-Grishkovets.01.mp3" title="cahpter 1">Глава1</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/02-Grishkovets.02.mp3" title="cahpter 2">Глава 2</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/03-Grishkovets.03.mp3" title="cahpter 3">Глава 3</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/04-Grishkovets.04.mp3" title="cahpter 4">Глава 4</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/05-Grishkovets.05.mp3" title="cahpter 5">Глава 5</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/06-Grishkovets.06.mp3" title="cahpter 6">Глава 6</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/07-Grishkovets.07.mp3" title="cahpter 7">Глава 7</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/08-Grishkovets.08.mp3" title="cahpter 8">Глава 8</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/09-Grishkovets.09.mp3" title="cahpter 9">Глава 9</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/10-Grishkovets.10.mp3" title="cahpter 10">Глава 10</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/11-Grishkovets.11.mp3" title="cahpter 11">Глава 11</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/12-Grishkovets.12.mp3" title="cahpter 12">Глава 12</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/13-Grishkovets.13.mp3" title="cahpter 13">Глава 13</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/14-Grishkovets.14.mp3" title="cahpter 14">Глава 14</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/15-Grishkovets.15.mp3" title="cahpter 15">Глава 15</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/16-Grishkovets.16.mp3" title="cahpter 16">Глава 16</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/17-Grishkovets.17.mp3" title="cahpter 17">Глава 17</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/18-Grishkovets.18.mp3" title="cahpter 18">Глава 18</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/19-Grishkovets.19.mp3" title="cahpter 19">Глава 19</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/20-Grishkovets.20.mp3" title="cahpter 20">Глава 20</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/21-Grishkovets.21.mp3" title="cahpter 21">Глава 21</a></li>
									<li><a href="http://janetkulyk.s3.amazonaws.com/audiobook.grishkovec.kak-ja-sjel-sobaku/22-Grishkovets.22.mp3" title="cahpter 22">Глава 22</a></li>
								</ul>								
							</div>
						</div> 					
													
						<div class="yui-u">		
							<div id="quot1" class="resizable">
								<blockquote>
									<div><span>&quot;</span>All great things require great dedication.<span>&quot;</span></div>
								</blockquote>
							</div>		
							<div id="quot2" class="resizable">
								<blockquote>
									<div><span>&quot;</span>The mind is slow to unlearn what it learnt early.<span>&quot;</span></div>
									<div class="author">&mdash; Seneca</div>
								</blockquote>
							</div>															
						</div>
					</div>
				</div>
			</div>
		</div>
			
		<?php include("../../inc/footer_new.inc.php"); ?>	
		<script type="text/javascript" src="../js/optim.js"></script>				
		<script type="text/javascript">
			//<![CDATA[
				$('#sf-menu_about>a') .css('background-color','#005A9C') .css('color','#FFF') .css('cursor','text');					
			//]]>
		</script>
		
		<script type='text/javascript' src='../mediaplayer-viral/swfobject.js'></script>
 

<script type='text/javascript'>
  var so = new SWFObject('player.swf','mpl','470','290','9');
  so.addParam('allowfullscreen','false');
  so.addParam('allowscriptaccess','always');
  so.addParam('wmode','opaque');
  so.addParam('provider','sound');
  so.addVariable('file','01-Grishkovets.01.mp3');
  so.addVariable('streamer','rtmp://sxlnmeloq46e1.cloudfront.net/cfx/st');
  so.write('mediaspace');
  /*
  <p id='preview'>The player will show in this paragraph</p>
<script type='text/javascript' src='swfobject.js'></script>
<script type='text/javascript'>
var s1 = new SWFObject('player.swf','player','400','300','9');
s1.addParam('allowfullscreen','true');
s1.addParam('allowscriptaccess','always');
s1.addParam('flashvars','file=video.flv');
s1.write('preview');
</script> 
*/
</script>
		<?php include("../../inc/ga.php"); ?>
  	</body>
</html>