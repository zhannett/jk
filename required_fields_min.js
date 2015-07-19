function checkRequired( elem ) {
    if ( elem.type == "checkbox" || elem.type == "radio" ) {
        return getInputsByName(elem.name).numChecked;
		}
    else {
        return elem.value || elem.value == elem.defaultValue;
		}
}

function getInputsByName(name) {    
    var results = [];
    results.numChecked = 0;
		
    var input = document.getElementsByTagName("input");
    for (var i = 0; i < input.length; i++) {        
        if (input[i].name == name) {       
            results.push(input[i]);     
            if (input[i].checked) {
                results.numChecked++;
						}
        }
    }    
    return results;
}

var elem = document.getElementById("age");
if (!checkRequired(elem)) {
    alert( "Required field is empty – you must be over 13 to use this site." );
}

var elem = document.getElementById("name");
if (!checkRequired(elem)) {
    alert( "Required field is empty – please provide your  name." );
}