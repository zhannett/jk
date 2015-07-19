<?php
	function mobile_device() {
		$mobile_browser   = false;
		$user_agent = $_SERVER['HTTP_USER_AGENT'];
		echo('user agent ' .$user_agent);
		$flag 		= 0;
		switch(true){
			case (preg_match('/ipad/i',$user_agent)):
				//$mobile_browser = $ipad;
				echo ('ipad');
				break;
			case (preg_match('/ipod/i',$user_agent)||preg_match('/iphone/i',$user_agent)):
				//$mobile_browser = $iphone;
				echo ('iphone');
				break;
			case (preg_match('/android/i',$user_agent)):
				//$mobile_browser = $android; 
				echo ('android');
				break;
		}
		if((preg_match('/safari/i',$user_agent) && ($mobile_browser == $ipad || $mobile_browser == $iphone)) || $mobile_browser == $android ) {
			$flag = 1;
		};
		return $flag;
	} 
?>