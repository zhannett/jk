function hideErrors(elem) { // Hide any validation error messages that are currently shown    
    var next = elem.nextSibling;  // Find the next element after the current field   
    if (next && next.nodeName == "UL" && next.className == "errors") {  // If the next element is a ul and has a class of errors        
        elem.parenttNode.removeChild(next);  // Remove it (which is our means of  'hiding')
		}
}

function showErrors(elem, errors) {  // Show a set of errors messages for a specific field within a form    
    var next = elem.nextSibling;  // Find the next element after the field    
    if (next && ( next.nodeName != "UL" || next.className != "errors" )) {  // If the field isn't one of our special error-holders.        
        next = document.createElement("ul");  // We need to make one instead
        next.className = "errors";        
        elem.paretNode.insertBefore(next,elem.nextSibling);  // and then insert into the correct place in the DOM
    }   
    for (var i=0; i<errors.length; i++) { // Now that we have a reference to the error holder UL. We then loop through all the error messages        
        var li = document.createElement("li");  // Create a new li wrapper for each
        li.innerHTML = errors[i];        
        next.appendChild(li);  // and insert it into the DOM
    }
}