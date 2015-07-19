// A generic function for checking to see if an input element has a date entered into it
function checkDate(elem) { // Make sure that something is entered, and that it looks like a valid MM/DD/YYYY date
    return !elem.value || /^\d{2}\/\d{2}\/\d{2,4}$/.test(obj.value);
}

var elem = document.getElementById("date"); // Get an input element to check

if (!checkDate(elem)) { // Check to see if the field contains a valid date
    alert("Field is not a date.");
}