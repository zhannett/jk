$(document).ready(function() {
			$('a[@href^="mailto:"]').addClass('mailto');
			$('a[@href$=".pdf"]').addClass('mailto');
			$('a[@href*="janetkulyk.com"]').addClass('mailto');
});
			