<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Visible Frame</title>
		<script type="text/javascript">
			window.history.forward(1);
			/* Perform page initalization */
			function initizlize() {}
			
			/* Handle form visible form onchange events.
			Values from the visible form are copied to the hidden form. */
			function changeEvent(obj) {
				parent.frames[1].document.getElementById(obj.id).value = obj.value;
			}
			
			/* Submits the form in the hidden frame then reloads the hidden frame*/
			function submitForm() {
				parent.frames[1].document.getElementById('hidden_form').submit();
				parent.frames[1].document.location = "hidden.html";
			}
		</script>
	</head>
	
	<body onLoad="initialize()">
		Visible Frame
		<form name="visible_form" id="visible_form"></form>
	</body>
</html>
