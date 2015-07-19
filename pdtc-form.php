<?php 
$pageTitle = "Dann&eacute;";
$inPageTitle = "Become a Paramedical Dermal Technician";
?>
<?php include ( "inc/doc_body_top.inc" ); ?>
	<script language="JavaScript" src="./scripts/httprequest.js"></script>
	<script language="JavaScript">
	<?php printf( "var referrer=\"%s\"
\n\n", getenv ( "referer" ) ); ?>
	function validate() {
		submitForm();
	}				
	function submitForm() {
		var form = document.forms.details;
		var outStr = "";
		var action = "xml-rpc/?action=pdtc-mail&";
		for ( var i = 0; i < form.length; i++ ) {
			outStr += form[i].name + "=" + form[i].value;
			if ( i != form.length -1 ) {
				outStr += "&";
			}
		}
		
		xmlhttp.open ( "GET", action + outStr, true );
		xmlhttp.onreadystatechange = function () {
			if ( xmlhttp.readyState == 4 ) {
				alert ( "Thank you, your information has been submitted." );
				if ( referer != "" ) 
					document.location.replace ( referer );
			}		
		}
		xmlhttp.send(null);
	}	
	</script>
	<form name="details" >
    <table class="contentTable" cellpadding="0" cellspacing="0" border="0">
        <tr>
			<td>
				<p>Please enter your contact information in the form below.  A Dann&#233; representative will contact you ASAP.</p>
		<table class="formTable" cellpadding="0" cellspacing="0" border="0">
            <td class="formText">
				Full Name		
			</td>
			<td class="formCell">
				<input type="text" name="fullName" value="">
			</td>
		</tr>
		<tr>	
			<td class="formText">
               	Street Address
            </td>
            <td class="formCell">
                <input type="text" name="street" value="">
            </td>
		</tr>
		<tr>
			<td class="formText">
               	City 
            </td>
            <td class="formCell">
                <input type="text" name="city" value="">
            </td>
		</tr>
		<tr>
			<td class="formText">
                Province/State
            </td>
            <td class="formCell">
                <input type="text" name="state" value="">
            </td>
		</tr>
		<tr>
			<td class="formText">
                Country
            </td>
            <td class="formCell">
                <input type="text" name="country" value="">
            </td>
		</tr>
		<tr>
			<td class="formText">
                Postal/Zip Code
            </td>
            <td class="formCell">
                <input type="text" name="zip" value="">
            </td>
		</tr>
		<tr>
            <td class="formText">
                Telephone #
            </td>
            <td class="formCell">
                <input type="text" name="npa" size="3" value=""><input size="3" type="text" name="nxx" value=""><input size="4" type="text" name="num" value="">
            </td>
        </tr>
		<tr>
			<td class="formText">
                Email Address
            </td>
            <td class="formCell">
                <input type="text" name="email" value="">
            </td>
        </tr>
		<tr>
			<td class="formControls" colSpan="2">
				<input type="button" value="Submit" onclick="validate()">		
			</td>
		</tr>
    </table>
			</td>
		</tr>
	</table>
	</form>

<?php include ( "inc/doc_body_tail.inc" );

