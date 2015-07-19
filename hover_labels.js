$("label.hover+input")  // Find all input elements that are after labels that have a class of hover    
    .wrap("<div class='hover-wrap'></div>") // Wrap a div (with a class of hover-wrap) around the input element, resulting in HTML that looks like: <div class='hover-wrap'><input type="text" …/></div>    
   
    .focus(function() { // Whenever the input element is focused upon (either through a click or by keyboard), hide the label 
        $(this).prev().hide();
    })
		
    .blur(function(){ // Whenever the user has left the input element (and no text has been entered into it) reveal the label again.
        if ( !this.value ) $(this).prev().show()
    })
    
    .each(function(){  // Go through each of the input elements individually        
        $(this).before( $(this).parent().prev() ); // Move the label to go inside of the <div class='hover-wrap'></div>        
        if (this.value) $(this).prev().hide();  // Make sure that if a value is already in the form, that the label is automatically hidden
    });