<?php



	function  graphic ( $blueval , $redval ){

		$pctrd  =  round($blueval*100,1 );

		$pctbl  =  round($redval*100,1 );

		$blueval  = ( $blueval * 200 );

		$redval  = ( $redval * 200 );



		echo  "

			<table>

				<tr>

					<td align= \"center \" >$pctbl%</td>

					<td>

						<img src= \" gd.php?bluehg=$blueval&redhg=$redval \"  height= \" 100 \" >

					</td>

					<td align= \" center \" >$pctrd%</td>

				</tr>

			</table>" ;

	}



//****************************************************

// * Query to ask for distinct information only (non-repetative);

// * $total variable equals to the number of rows returned;

// * $ip variable for later reference

//****************************************************



	$sql  =  "SELECT DISTINCT(ip) FROM $dbsql ORDER BY ip" ;

	$results  =  mysql_query ( $sql );

	$total  =  mysql_num_rows ( $results );

	while ( $myrow  =  mysql_fetch_array ($results )) {

		$ip  =  $myrow [ "ip" ];

	}



//****************************************************

// * Select the number of records that are both distinct IP addresses (not repeat hits/visitors) and that are outside of our local network addresses.

//****************************************************



	$sql  =  "SELECT DISTINCT(ip) FROM $dbsql WHERE ip NOT LIKE

	('129.93.%') AND ip NOT LIKE ('199.240.%')" ; // in  brackets - IP for a local network

	$results  =  mysql_query( $sql);

	$offsite  =  mysql_num_rows ( $results );

	$onsite  = ( $total  -  $offsite );



//****************************************************

// * Populate your variables with information from the query

//****************************************************



	$sql  =  "SELECT DISTINCT(ip) FROM $dbsql WHERE browser LIKE ('%MSIE%')" ;

	$results  =  mysql_query ( $sql );

	$ms  =  mysql_num_rows ( $results );

	$others  = ( $total  -  $ms );



//****************************************************

// * Deploying the remaining code into the script

//****************************************************



	$sql  =  "SELECT DISTINCT(ip) FROM $dbsql WHERE browser LIKE ('%WIN%')" ;

	$results  =  mysql_query ( $sql );

	$windows  =  mysql_num_rows ( $results );

	$mac  = ( $total  -  $windows );



//******************************************************

//* Define variables for each section of data (for example, Mac values, Windows values).

//* Set the defined variables equal to the retrieved value divided by the total values of the set.

//******************************************************



	$macval  = ( $windows /( $mac + $windows ));

	$winval  = ( $mac /( $mac + $windows ));

	$offsiteval  = ( $onsite /( $onsite + $offsite ));

	$onsiteval  = ( $offsite /( $onsite + $offsite ));

	$msval  = ( $netscape /( $others +$ms ));

	$nsval  = ( $ms /( $others + $ms ));





// Create our layout for graphic display and repeatedly

// call the graphic () function



echo  "

	<tr>

		<td colspan=\"3\" align=\"center\">

			<table cellpadding=\"5\" border=\"1\" bgcolor=\"#cccccc\">

				<tr>

					<td align=\"center\" valign=\"bottom\">" ;

						// Call the graphic function

						graphic ( $onsiteval , $offsiteval );



						// Analyze and calculate time elapsed data (i.e. Daily

						// hits, hourly hits)



						// Convert our dates into numerical data using the TO_DAYS() function

						//Obtain the difference in days by subtracting our maximum value (presumably today) from our minimum value (the first date recorded) in the database.



						$sql = "SELECT TO_DAYS(MAX(received)) - TO_DAYS(MIN(received)) AS record FROM $dbsql";

						$results  =  mysql_query ( $sql );

						while ($myrow = mysql_fetch_array($results)) {

							$avgday = $myrow["record"];

						}





						//Obtain our average Daily Hit count by dividing the $total variable we retrieved above by our $avgday value, round() the value.

						//Divide this number by 24 (the number of hours in a day) for our average hourly hit value, again round() the value.

						// divide the total number of distinct hits by the

						//difference in time.

						$avghits  = ( $total / $avgday );



						// Analyze and calculate time elapsed data (i.e. Daily

						//hits, hourly hits).



						echo  "Avg. Daily Hits:" ;



						// implement round() function to accommodate avg. number

						//of hits

						$avghits  = round ( $avghits );

						echo  "<b>$avghits</b><br><br>" ;

						echo  "Avg. Hourly Hits:<b>" ;



						// implement round() function to accommodate avg. number

						//of hits.

						echo round( $avghits / 24 ). "</b><br></td>" ;

						echo  "<tr><td colspan=\"3\">" ;



//****************************************************************************************

//* Compare Total Hits with Distinct Hits

//****************************************************************************************

//* Submit the COUNT(*) function to the mySQL database.

//* Populate your variables with information from the database.

//* Obtain the average number of days that have passed by subtracting our two dates from each other and dividing by the total number of seconds found in one year.

//* Obtain our average Daily Hit count by dividing the $total variable we retrieved above by our $avgday value, round() the value.

//* Divide this number by 24 (the number of hours in a day) for our average hourly hit value, again round() the value.

//*****************************************************************************************



						$results  =  mysql_query ( $sql );

						while ( $myrow  =  mysql_fetch_array ($results )) {

						$bigtotal  =  $myrow ["CNT" ];



						// Repeat analysis for Total Overall Hits.



						echo  "<tr>

								<td>Total Overall Hits: <b>" ;

						echo  	    "$bigtotal</b></td>" ;

						echo  "<td width=\"45\" align=\"right\"></td>

							   <td align=\"left\">" ;



						$avghits  = ( $bigtotal /$avgday );



						echo  "Avg. Daily Hits:" ;



						// implement round() function to accommodate avg. number of hits



						$avghits  =  round ( $avghits );

						echo  "<b>$avghits</b><br><br>" ;

						echo  "Avg. Hourly Hits:<b>" ;



						// implement round() function to accommodate avg. number of hits



						echo  round ( $avghits / 24 ). "</b><br></td></tr></table>" ;

					}

