<?php
function mobile_device_detect($iphone=true,$ipad=true,$android=true,$opera=false,$blackberry=false,$palm=false,$windows=false,$mobileredirect=false,$desktopredirect=false){
$mobile_browser   = false;
  $user_agent       = $_SERVER['HTTP_USER_AGENT'];
  $flag 			= 0;
  switch(true){
    case (preg_match('/ipad/i',$user_agent));
		$mobile_browser = $ipad;
		break;
    case (preg_match('/ipod/i',$user_agent)||preg_match('/iphone/i',$user_agent));
		$mobile_browser = $iphone;
		break;
    case (preg_match('/android/i',$user_agent));
		$mobile_browser = $android; 
		break;
  }
  if(preg_match('/safari/i',$user_agent) && ($mobile_browser == $ipad || $mobile_browser == $iphone || $mobile_browser == $android )) {
	$flag = 1;
  };
} 
?>