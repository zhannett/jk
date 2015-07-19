$(document).ready(function(){
	$('div.button').click(function(){
			var $resizable = $('div .resizable');	
			var currentSize = $resizable.css('fontSize');
			var num = parseFloat(currentSize,10);
			var unit = currentSize.slice(-2);
			if (this.id == 'switcher-large') {
					num *= 1.4;
			} else if (this.id == 'switcher-small') {
					num /= 1.4;
			}
			$resizable.css('fontSize', num + unit);
	});
});