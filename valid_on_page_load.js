addEvent(window,"load",function() {    
    var forms = document.getElementsByTagName("form");  // Find all the forms on the page    
    for (var i=0; i<forms.length;i++) {  // Go through all the forms on the page        
        validateForm(forms[i], true);  // Validate each of the forms, being sure to set the 'load' argument to true, which stops certain, unnecessary, errors from appearing
    }
});