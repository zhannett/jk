// A generic function for checking to see if an input element looks like an email address
function checkEmail(elem) { // Make sure that something was entered and that it looks like a valid email address
    return !elem.value || /^[a-z0-9_+.-]+\@([a-z0-9-]+\.)+[a-z0-9]{2,4}$/i.test(elem.value);
}

var elem = document.getElementById("email");  // Get an input element to check

if (!checkEmail(elem)) { // Check to see if the field is valid, or not
    alert( "Field is not an email address." );
}