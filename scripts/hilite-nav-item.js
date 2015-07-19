/* 
	$Id: $
	
*/

var title = document.title; 
var divs = document.getElementById ( "topNav" ).getElementsByTagName ( "DIV" );
var i = 0;

while ( divs[i] ) {
	if ( title.toString().match ( divs[i].childNodes[0].innerHTML.toString() ) ) {

		if ( !title.toString().match ( "Products" ) ) {
			divs[i].innerHTML = "<li>" + divs[i].childNodes[0].innerHTML;
		}
		else {
			divs[i].innerHTML = "<li>" + divs[i].innerHTML;
		}
		divs[i].style.fontWeight = "bolder";
		break;
	}
	i++;
}
