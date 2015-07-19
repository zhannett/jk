	var contents = document.getElementById ( "pageText" ).innerHTML;
	var regExpLT = new RegExp ( /\&lt;/g );
	var regExpGT = new RegExp ( /\&gt;/g );		
	var regExpNBSP = new RegExp ( /\&amp;nbsp;/g );
    contents = contents.replace ( regExpLT, "<" );
    contents = contents.replace ( regExpGT, ">" );
	contents = contents.replace ( regExpNBSP, " " );
    document.getElementById ( "pageText" ).innerHTML = contents;

