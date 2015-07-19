<?php
	$dbsql = "stats";
	$db = mysql_connect("localhost","zhannett","kiev1");
	mysql_select_db("zhannett", $db);
	$sql = "SELECT count(ip) as cnt from $dbsql";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_array($result)) {
		$overall = $row["cnt"];
	}
?>

	<html>
		<body>
			<table cellpadding="0" cellspacing="20" border = "0" >
				<tr>
<?

			//******************************************************

			//*             Yearly Hits 

			//******************************************************



			$sql = "SELECT COUNT(*) AS cnt, YEAR(received) AS year

				FROM $dbsql GROUP BY year ORDER BY year";

			$year_result = mysql_query($sql);

?>

			<td valign="top">

			<table cellpadding="0" cellspacing="0" border = "1" >

					<tr><td colspan="2"><b>Yearly Hits:</b></td></tr>

<?

				while ($row = mysql_fetch_array($year_result)) {

					$year = $row["year"];

?>

					<tr>

						<td><? echo "Year " . $year ?></td>

						<td><? echo $row[cnt] ; ?></td>

					</tr>

<?

				}

?>

				</table>

			</td>

<?

				

			//******************************************************

			//*             Monthly Hits 

			//******************************************************



			$sql = "SELECT COUNT(*) as cnt, MONTHNAME(received) as mn,

				MONTH(received) as month

				FROM $dbsql WHERE YEAR(received) = $year

				GROUP BY mn,month

				ORDER BY month";

			$result = mysql_query($sql);

?>

			<td valign="top">

			<table cellpadding="0" cellspacing="0" border = "1" >

					<tr><td colspan="2"><b>Monthly Hits:</b></td></tr>

<?

				while ($row = mysql_fetch_array($result)) {

?>

					<tr>

						<td><? echo $row[mn] ?></td>

						<td><? echo $row[cnt] ; ?></td>

					</tr>

<?

				}

?>

			</table>

			</td>

<?				

				

			//******************************************************

			//*             Weekly Hits 

			//******************************************************



			$sql = "SELECT COUNT(*) as cnt, WEEK(received) as wk

				FROM $dbsql WHERE YEAR(received) = $year

				GROUP BY wk

				ORDER BY wk";

			$result = mysql_query($sql);

?>

			<td valign="top">

			<table cellpadding="0" cellspacing="0" border = "1" >

					<tr><td colspan="2"><b>Weekly Hits:</b></td></tr>

<?

				while ($row = mysql_fetch_array($result)) {

?>

					<tr>

						<td><? echo "Week " . $row[wk] ?></td>

						<td><? echo $row[cnt] ; ?></td>

					</tr>

<?

				}

?>

			</table>

			</td>

<?

				

			//******************************************************

			//*             Last 7 Daily Averages 

			//******************************************************



			$sql = "SELECT count(*) as cnt, DAYNAME(received) as dnr,

				TO_DAYS(received) as tdr

				FROM $dbsql

				WHERE received >= DATE_SUB( CURRENT_DATE, INTERVAL 6 day )

				GROUP BY dnr,tdr

				ORDER BY tdr";

			$result = mysql_query($sql);

?>

			<td valign="top">

			<table cellpadding="0" cellspacing="0" border = "1" >

					<tr><td colspan="2"><b>Last 7 Daily Averages:</b></td></tr>

<?

				while ($row = mysql_fetch_array($result)) {

?>

					<tr>

						<td><? echo $row[dnr] ?></td>

						<td><? echo $row[cnt] ; ?></td>

					</tr>

<?

				}

?>

			</table>

			</td>			

<?

				

			//******************************************************

			//*             OS Information

			//******************************************************



?>			

			<td valign="top">

			<table cellpadding="0" cellspacing="0" border = "1" >

				<tr><td colspan="2"><b>OS Information:</b></td></tr>

<?

				$sql = "SELECT count(browser) as cnt FROM $dbsql WHERE browser LIKE '%win%'";

				$result = mysql_query ($sql);

				while ($row = mysql_fetch_array($result)) {

					$win = $row["cnt"];

?>

					<tr>

						<td><? echo "Windows" ?></td>

						<td><? echo $win ; ?></td>

					</tr>

<?

				}

				$sql = "SELECT count(browser) as cnt FROM $dbsql WHERE browser LIKE '%mac%'";

				$result = mysql_query ($sql);

				while ($row = mysql_fetch_array($result)) {

					$mac = $row["cnt"];

?>

					<tr>

						<td><? echo "Macintosh" ?></td>

						<td><? echo $mac ; ?></td>

					</tr>

<?

				}



				$sql = "SELECT count(browser) as cnt FROM $dbsql WHERE browser LIKE '%linux%'";

				$result = mysql_query ($sql);

				while ($row = mysql_fetch_array($result)) {

					$linux = $row["cnt"];

?>

					<tr>

						<td><? echo "Linux" ?></td>

						<td><? echo $linux ; ?></td>

					</tr>

<?

				}



				$sql = "SELECT count(browser) as cnt FROM $dbsql WHERE browser LIKE '%unix%'";

				$result = mysql_query ($sql);



				while ($row = mysql_fetch_array($result)) {

					$unix = $row["cnt"];

?>

					<tr>

						<td><? echo "UNIX" ?></td>

						<td><? echo $unix ; ?></td>

					</tr>

<?

				}



				$sql = "SELECT count(browser) as cnt FROM $dbsql WHERE browser LIKE '%SunOS'";

				$result = mysql_query ($sql);



				while ($row = mysql_fetch_array($result)) {

					$sun = $row["cnt"];

?>

					<tr>

						<td><? echo "SunOS" ?></td>

						<td><? echo $sun ; ?></td>

					</tr>

<?

				}



				$sql = "SELECT count(browser) as cnt FROM $dbsql WHERE browser LIKE '%FreeBSD%'";

				$result = mysql_query ($sql);



				while ($row = mysql_fetch_array($result)) {

					$freeBSD = $row["cnt"];

?>

					<tr>

						<td><? echo "FreeBSD" ?></td>

						<td><? echo $freeBSD ; ?></td>

					</tr>

<?

				}



				$sql = "SELECT count(browser) as cnt FROM $dbsql WHERE browser LIKE '%IRIX%'";

				$result = mysql_query ($sql);



				while ($row = mysql_fetch_array($result)) {

					$irix = $row["cnt"];

?>

					<tr>

						<td><? echo "IRIX" ?></td>

						<td><? echo $irix ; ?></td>

					</tr>

<?

				}



				$sql = "SELECT count(browser) as cnt FROM $dbsql WHERE browser LIKE '%HP-UX%'";

				$result = mysql_query ($sql);



				while ($row = mysql_fetch_array($result)) {

					$hp = $row["cnt"];

?>

					<tr>

						<td><? echo "HP-UX" ?></td>

						<td><? echo $hp ; ?></td>

					</tr>

<?

				}



				$sql = "SELECT count(browser) as cnt FROM $dbsql WHERE browser LIKE '%OSF%'";

				$result = mysql_query ($sql);



				while ($row = mysql_fetch_array($result)) {

					$osf = $row["cnt"];

?>

					<tr>

						<td><? echo "OSF" ?></td>

						<td><? echo $osf ; ?></td>

					</tr>

<?

				}



				$sql = "SELECT count(browser) as cnt FROM $dbsql WHERE browser LIKE '%AIX%'";

				$result = mysql_query ($sql);



				while ($row = mysql_fetch_array($result)) {

					$aix = $row["cnt"];

?>

					<tr>

						<td><? echo "AIX" ?></td>

						<td><? echo $aix ; ?></td>

					</tr>

<?

				}



				$sql = "SELECT count(browser) as cnt FROM $dbsql WHERE browser LIKE '%OSF%'";

				$result = mysql_query ($sql);

				while ($row = mysql_fetch_array($result)) {

					$osf = $row["cnt"];

?>

					<tr>

						<td><? echo "OSF" ?></td>

						<td><? echo $osf ; ?></td>

					</tr>

<?

				}

				

				$sql = "SELECT count(browser) as cnt FROM $dbsql WHERE browser LIKE '%spider%' OR browser LIKE '%bot%'";

				$result = mysql_query ($sql);

				while ($row = mysql_fetch_array($result)) {

					$craw = $row["cnt"]; 

?>

					<tr>

						<td><? echo "Crawlers" ?></td>

						<td><? echo $craw ; ?></td>

					</tr>

<?

				}



				$total = $win + $mac + $linux + $unix + $sun + $freeBSD + $irix + $hp + $osf + $aix + $osf + $craw;

				$other = $overall - $total;

?>

					<tr>

						<td><? echo "Other" ?></td>

						<td><? echo $other ; ?></td>

					</tr>

					<tr>

						<td><? echo "Total =" ?></td>

						<td><? echo $overall ; ?></td>

					</tr>					

			</table>

			</td>

<?

	

			//******************************************************

			//*             Browser Information

			//****************************************************** 

?>			

			<td valign="top">

			<table cellpadding="0" cellspacing="0" border = "1" >

					<tr><td colspan="2"><b>Browser<br/>Information:</b></td></tr>

<?	



			$sql = "SELECT count(ip) as cnt FROM $dbsql WHERE browser LIKE '%MSIE%'";

			$result = mysql_query ($sql);

			while ($row = mysql_fetch_array($result)) {

				$ms = $row["cnt"]; 

?>

					<tr>

						<td><? echo "Explorer" ?></td>

						<td><? echo $ms ; ?></td>

					</tr>

<?

			}



			$sql = "SELECT count(ip) as cnt FROM $dbsql WHERE browser LIKE '%Mozilla%' AND browser

				NOT LIKE '%MSIE%' OR '%Opera%' OR '%iCab%' OR '%Konqueror%'";

			$result = mysql_query ($sql);

			while ($row = mysql_fetch_array($result)) {

				$ns = $row["cnt"]; 

?>

					<tr>

						<td><? echo "Mozilla" ?></td>

						<td><? echo $ns ; ?></td>

					</tr>

<?

			}



			$sql = "SELECT count(ip) as cnt FROM $dbsql WHERE browser LIKE '%Opera%'";

			$result = mysql_query ($sql);

			while ($row = mysql_fetch_array($result)) {

				$opera = $row["cnt"]; 

?>

					<tr>

						<td><? echo "Opera" ?></td>

						<td><? echo $opera ; ?></td>

					</tr>

<?

			}



			$sql = "SELECT count(ip) as cnt FROM $dbsql WHERE browser LIKE '%iCab%'";

			$result = mysql_query ($sql);

			while ($row = mysql_fetch_array($result)) {

				$icab = $row["cnt"]; 

?>

					<tr>

						<td><? echo "iCab" ?></td>

						<td><? echo $icab ; ?></td>

					</tr>

<?

			}



			$sql = "SELECT count(ip) as cnt FROM $dbsql WHERE browser LIKE '%Lynx%'";

			$result = mysql_query ($sql);

			while ($row = mysql_fetch_array($result)) {

				$lynx = $row["cnt"]; 

?>

					<tr>

						<td><? echo "Lynx" ?></td>

						<td><? echo $lynx ; ?></td>

					</tr>

<?

			}



			$sql = "SELECT count(ip) as cnt FROM $dbsql WHERE browser LIKE '%Konqueror%'";

			$result = mysql_query ($sql);

			while ($row = mysql_fetch_array($result)) {

				$konq = $row["cnt"]; 

?>

					<tr>

						<td><? echo "Konqueror" ?></td>

						<td><? echo $konq ; ?></td>

					</tr>

<?

			}



			$sql = "SELECT count(ip) as cnt FROM $dbsql WHERE browser LIKE '%spider%'"; 

			$result = mysql_query ($sql);

			while ($row = mysql_fetch_array($result)) {

				$spiders = $row["cnt"]; 

?>

					<tr>

						<td><? echo "Spiders" ?></td>

						<td><? echo $spiders ; ?></td>

					</tr>

<?

			}



			$sql = "SELECT count(ip) as cnt FROM $dbsql WHERE browser LIKE '%bot%'";

			$result = mysql_query ($sql);

			while ($row = mysql_fetch_array($result)) {

				$bots = $row["cnt"]; 

?>

					<tr>

						<td><? echo "Bots" ?></td>

						<td><? echo $bots ; ?></td>

					</tr>

<?

			}



			$total = $ms + $ns + $opera + $icab + $lynx + $konq + $spiders + $bots;

			$other = $overall - $total;

?>

					<tr>

						<td><? echo "Other" ?></td>

						<td><? echo $other ; ?></td>

					</tr>

					<tr>

						<td><? echo "Total =" ?></td>

						<td><? echo $total ; ?></td>

					</tr>

					<tr>

						<td><? echo "Overall" ?></td>

						<td><? echo $overall ; ?></td>

					</tr>

			</table>

			</td>

		</tr>

		</table>

		<table cellpadding="0" cellspacing="20" border = "0" >

		<tr>

<?



	

			//******************************************************

			//*             Top Visitors

			//*        Number of Hits - - IP Address

			//****************************************************** 



			$sql = "SELECT COUNT(ip) AS CNT,ip FROM $dbsql GROUP BY ip ORDER BY CNT DESC LIMIT 10";

			$result = mysql_query ($sql);			

?>

			<td valign="top">

			<table cellpadding="0" cellspacing="0" border = "1" >

					<tr><td colspan="2" align = "center"><b>Top Visitors</b></td></tr>

					<tr>

						<td><b>Number<br/>of Hits</b></td>

						<td><b>IP Address</b></td>

					</tr>

<?

				while ($row = mysql_fetch_array($year_result)) {					

?>

					<tr>

						<td><? echo $row["CNT"] ?></td>

						<td><? echo $row["ip"] ; ?></td>

					</tr>

<?

				}

?>

				</table>

			</td>

<?

	

			//******************************************************

			//*             Top References

			//*        Number of Hits - - Referred From

			//****************************************************** 



			$sql = "SELECT COUNT(refer) AS CNT,refer FROM $dbsql GROUP BY refer ORDER BY CNT DESC LIMIT 10";

			$result = mysql_query($sql);

?>

			<td valign="top">

			<table cellpadding="0" cellspacing="0" border = "1" >

					<tr><td colspan="2" align = "center"><b>Top Visitors</b></td></tr>

					<tr>

						<td><b>Number<br/>of Hits</b></td>

						<td><b>Refering Address</b></td>

					</tr>

<?

				while ($row = mysql_fetch_array($year_result)) {					

?>

					<tr>

						<td><? echo $row["CNT"] ?></td>

						<td><? echo $row["refer"] ; ?></td>

					</tr>

<?

				}

?>

				</table>

			</td>

		</tr>

	</table>

	</body>

	</html>

