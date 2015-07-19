
<?phprequire_once 'linkedin.php'; $consumer_key = "YOUR API Key HERE";$consumer_secret = "YOUR Secret Key HERE";$return_url = "http://YOURWEBSITEHERE_COM/return.php";
echo "<pre>";
 
# First step is to initialize with your consumer key and secret. We'll use an out-of-band oauth_callback$linkedin = new LinkedIn($consumer_key, $consumer_secret, $return_url);$linkedin->debug = true;
 # Now we retrieve a request token. It will be set as $linkedin->request_token$linkedin->getRequestToken();
 # With a request token in hand, we can generate an authorization URL, which we'll direct the user toecho "Authorization URL: <a href='" . $linkedin->generateAuthorizeUrl() . "'>Authorize...</a>\n\n";
 # After logging in, the user will be presented with an OAuth Verifier, which you would then ask the member to enter in a UI you present. Once you have the OAuth verifier, set it here:print_r($linkedin);
 
$filename = $linkedin->request_token->key; // Make a filename out of the request tokenfile_put_contents("keys/" . $filename . ".txt", serialize($linkedin)); // Store the object in a file so we can pull it later
?>
