function watchForm(form) {  // Watch the form for submission    
    addEvent(form,'submit',function(){        
        return validateForm(form);  // make sure that the form's contents validate correctly
    });
}

var form = document.getElementsByTagName("form")[0]; // Find the first form on the page
watchForm(form);// and watch for when its submitted, to validate it