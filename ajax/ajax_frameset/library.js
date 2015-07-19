function displayCart() {
		if(document.getelementById('cartContents').value.length = 0)
				alert("Your shopping cart is empty");
		else
				parent.frames['hidden_frame'].document.location = 'displayCart.php?cart=' +document.getElementById('cartContents').value;
}
	
	