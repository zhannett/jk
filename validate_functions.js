// A function for validating all fields within a form. The form argument should be a reference to a form element. The load argument should be a boolean referring to the fact that the validation function is being run on page load, versus dynamically
function validateForm(form, load) {
    var valid = true; 
    for (var i=0; i<form.elements.length; i++) { // Go through all the field elements in form form.elements is an array of all fields in a form        
        hideErrors(form.elements[i]); // Hide any error messages, if they're being shown        
        if (!validateField(form.elements[i],load)) {  // Check to see if the field contains valid contents, or not
            valid = false;
				}
    }    
    return valid;  // Return false if a field does not have valid contents true if all fields are valid
}

function validateField(elem, load) { // Validate a single field's contents
    var errors = [];    
    for (var name in errMsg) {  // Go through all the possible validation techniques        
        var re = new RegExp("(^|\\s)" + name + "(\\s|$)");  // See if the field has the class specified by the error type       
        if (re.test(elem.className) && !errMsg[name].test(elem, load)) { // Check to see if  the element has the class and that it passes the validatino test            
            errors.push(errMsg[name].msg); // If it fails the validation, add the error message to list
				}
    }    
    if (errors.length) {  // Show the error messages, if they exist
        showErrors(elem,errors);
		}
    return errors.length > 0;  // Return false if the field fails any of the validation routines
}