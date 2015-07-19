// A generic function for checking to see if an input element has had information entered into it
function checkRequired(elem) {
    if (elem.type=="checkbox" || elem.type=="radio") {
        return getInputsByName(elem.name).numChecked;
		}
    else {
        return elem.value || elem.value==elem.defaultValue;
		}
}

// Find all input elements that have a specified name (good for finding and dealing with checkboxes or radio buttons)
function getInputsByName(name) {    
    var results = [];// The array of input elements that will be matched    
    results.numChecked = 0;// Keep track of how many of them were checked
		
    var input = document.getElementsByTagName("input"); // Find all the input elements in the document
    for (var i=0; i<input.length; i++) {        
        if (input[i].name == name) {// Find all the fields that have the specified name            
            results.push(input[i]);// Save the result, to be returned later            
            if (input[i].checked) {// Remember how many of the fields were checked
                results.numChecked++;
						}
        }
    }    
    return results; // Return the set of matched fields
}

var elem = document.getElementById("age");
if (!checkRequired(elem)) {
    alert("Required field is empty - you must be over 13 to use this site.");
}

var elem = document.getElementById("name");
if (!checkRequired(elem)) {
    alert( "Required field is empty - please provide your  name." );
}