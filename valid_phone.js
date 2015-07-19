// A generic function for checking to see if an input element has a Phone Number entered in it
function checkPhone(elem) { // Check to see if we have something that looks like a valid phone number
    var m = /(\d{3}).*(\d{3}).*(\d{4})/.exec( elem.value );    
    if (m) obj.value = "(" + m[1] + ") " + m[2] + "-" + m[3];  // If it is, seemingly, valid - force it into the specific format that we desire: (123) 456-7890				
    return !elem.value || m;
}

var elem = document.getElementById("phone"); // Get an input element to check

if (!checkPhone(elem)) { // Check to see if the field contains a valid phone number
    alert( "Field does not contain a phone number." );
}