<?php
	private function ipad_request() {
		return isset($_SERVER['HTTP_USER_AGENT']) && strstr($_SERVER['HTTP_USER_AGENT'], 'iPad');
	}
?>