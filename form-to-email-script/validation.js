window.addEvent('domready', function() {
	// Get comment form
	var form = $('comments_form');
	
	// Only if the found is found...
	if (form) {
		// Get error fields
		var name = $('fullname');
		var email = $('email');
		var comment = $('comment');

		// Set default form status
		var isValid = true;

		// Add error function used to add error messages
		var addError = function (field, msg) {
			field.addClass('error'); // Add error class to field
			var error = field.getParent().getElement('span') || new Element('span', {'class': 'error'}); // Create error message paragraph if one isnt available
			error.set('text', msg); // Set error text
			error.inject(field, 'after'); // Inject error message after field
		};

		// Remove error function used to destroy any error messages and remove error class
		var removeError = function (field) {
			field.removeClass('error'); // Remove error class from field
			var error = field.getParent().getElement('span'); // Get any existing error messages

			// If there is an error message destroy it
			if (error) {
				error.destroy();
			}
		};

		// Add form submit event
		form.addEvent('submit', function (e) {
			// Test name length
			if (name.get('value').length === 0) {
				isValid = false;
				addError(name, nameError);
			} else {
				isValid = true;
				removeError(name);
			}

			// Test email length
			if (email.get('value').length === 0) {
				isValid = false;
				addError(email, emailError);
			// Test email validity
			} else if (!email.get('value').test(/^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/)) {
				isValid = false;
				addError(email, emailError);
			} else {
				isValid = true;
				removeError(email);
			}

			// Test comment length
			if (comment.get('value').length === 0) {
				isValid = false;
				addError(comment, commentError);
			} else {
				isValid = true;						
				removeError(comment);
			}

			// If form is not valid stop event
			if (!isValid) {
				e.stop();
			}
		});
	}	
});