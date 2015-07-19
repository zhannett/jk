var outHtml = "<b><u>Dann&#233;&nbsp;Articles</u></b><br/><br/>";

xmlhttp.open("GET", "/xml-rpc/?action=articles-list",true);



    xmlhttp.onreadystatechange=function() {

        var recs = new Array();
        var flds = new Array();
		var name = "";
		var rExp = new RegExp ( "/\+/g" );
		switch ( xmlhttp.readyState ) {
        //if (xmlhttp.readyState==4) {
		case 4:
            if ( xmlhttp.status == "200" ) {
                recs = xmlhttp.responseText.split ( ";" );
                r = 0;
                while ( recs[r] ) {
                    if ( !recs[r].length )
                        continue;

                    flds = recs[r].split ( "," );
					name = flds[1].replace ( "dmk-articles-", "" );
					name = name.split ( "+" ).join ( " " );	
                    outHtml += "<a href='articles.php?id="+ flds[0] +"'>- "+ name +"</a><br />";
                    r++;
                }
				
                document.getElementById ( "articlesList" ).innerHTML = outHtml;
            }
            else {
                alert ( "XMLHTTP - HTTP Error: " . xmlhttp.status );
                return;
            }
			break;
		case 3:
			document.getElementById ( "articlesList" ).innerHTML = "Waiting for a response...";
			break;

		default:
			break;
        }
    }

    xmlhttp.send(null);

