<?php
    
    
    session_start();
    
    $config['base_url']         =   'http://www.janetkulyk.com/linkedin.php';
    $config['callback_url']     =   'http://www.janetkulyk.com/linkedin.php';
    $config['linkedin_access']  =   'i1l777vjf77l';
    $config['linkedin_secret']  =   'pKJWDZZ6fB9I9YBG';
    
    include_once "linkedin.php";
    
    # First step is to initialize with your consumer key and secret. We'll use an out-of-band oauth_callback
    $linkedin = new LinkedIn($config['linkedin_access'], $config['linkedin_secret'], $config['callback_url'] );
    //$linkedin->debug = true;
    
    # Now we retrieve a request token. It will be set as $linkedin->request_token
    $linkedin->getRequestToken();
    $_SESSION['requestToken'] = serialize($linkedin->request_token);
    
    # With a request token in hand, we can generate an authorization URL, which we'll direct the user to
    //echo "Authorization URL: " . $linkedin->generateAuthorizeUrl() . "\n\n";
    header("Location: " . $linkedin->generateAuthorizeUrl());
    
    
    
			
			// Fill the keys and secrets you retrieved after registering your app
    /*
$oauth = new OAuth("i1l777vjf77l", "pKJWDZZ6fB9I9YBG");
$oauth->setToken("e24f35d2-2d53-41e6-98c3-412340625413", "defd2977-b40c-406c-828f-0bc1eb4a8afc");

$params = array();
$headers = array();
$method = OAUTH_HTTP_METHOD_GET;
     */
 
// Specify LinkedIn API endpoint to retrieve your own profile
    /*
$url = "http://api.linkedin.com/v1/people/~";
     */

// By default, the LinkedIn API responses are in XML format. If you prefer JSON, simply specify the format in your call
// $url = "http://api.linkedin.com/v1/people/~?format=json";

// Make call to LinkedIn to retrieve your own profile
    /*
$oauth->fetch($url, $params, $method, $headers);
 
echo $oauth->getLastResponse();
    echo('<br/><br/>next<br/><br/>');
    
   
    printf("\n********A basic user profile call********<br/>");
    $api_url = "http://api.linkedin.com/v1/people/~?format=json";
    $oauth->fetch($api_url, null, OAUTH_HTTP_METHOD_GET);
    $response = $oauth->getLastResponse(); // just a sample of how you would get the response
    //printf($oauth);
    echo $oauth->getLastResponse();
    echo('<br/><br/>next<br/><br/>');

   
    
    // This call extends on the above by limiting the number of results to 10
    printf("\n********Get only 10 connections - using parameters********");
    $api_url = "http://api.linkedin.com/v1/people/~/connections";
    $oauth->fetch($api_url, array("count" => 10), OAUTH_HTTP_METHOD_GET);
    var_dump($oauth);
    
    printf("\n********A basic user profile call with field selectors********");
    $api_url = "http://api.linkedin.com/v1/people/~:(first-name,last-name,positions)";
    $oauth->fetch($api_url, null, OAUTH_HTTP_METHOD_GET);
    var_dump($oauth);
 */   
    
			?>
