<?php
    class Twitter {
        private $tweetcount = 10; // How many Tweets do we want to return?
        private $twitter_api_url = 'http://api.twitter.com/1/statuses/user_timeline.xml?screen_name=';// The Twitter REST API URL that we'll be calling
        private $cache_folder = './cache';// The cache folder location
        private $cache_expiration = 300;// The cache expiration value (time in seconds)
    
        /**
        *	@access	public
        *   @return mixed
        *	@author	Mike Mackay
        *
        **************************************************************************************** */
        
        public function getTweets($twitter_username='zhannett', $twitter_password='Zhanna1') {
                if(empty($twitter_username)) {  // We shouldn't continue if we haven't got a username
                    return 'Error, you have not provided a Twitter username.';
                }
                $cache_file = $this->cache_folder . '/' . $twitter_username . '.xml'; // Define our full cache file path
               
                if(!is_file($cache_file) || (date("U")-date("U", filemtime($cache_file))) > $this->cache_expiration) {  // We need to check if our cache file exists and is within the expiration time, otherwise create/update it
                        if(is_string($value = $this->storeCache($cache_file, $twitter_username, $twitter_password))) {
                            return $value;
                        }
                } 
                return $this->readCache($cache_file); // Let's return the cache file
        }
            
        /**
        *	@access	private
        *   @return mixed
        *	@author	Mike Mackay
        *
        **************************************************************************************** */
        
        private function readCache($cache_file = FALSE, $tweets_array = FALSE) {
                $cacheXML = simplexml_load_file($cache_file); // We're going to load in the XML file and create a new SimpleXML Object
                if(is_object($cacheXML)) { // We want to check to make sure our XML is valid
                        foreach($cacheXML->status as $status) { // Let's loop through our Tweets and store the basic data in an array
                                $tweets_array[] = array(
                                    'created' => (string)$status->created_at,
                                    'text' => (string)$status->text
                                );
                        }
                        return (is_array($tweets_array))? array_slice($tweets_array, 0, $this->tweet_count) : 'There are no tweets for this account.'; // If we have some Tweets return only the amount specified above, otherwise show a message		
                } else {
                    return 'Error, the cache file does not appear to be valid XML.';
                }
        }
    
        /**
        *	@access	private
        *   @return mixed
        *	@author	Mike Mackay
        *
        **************************************************************************************** */
        
        private function storeCache($cache_file = FALSE, $twitter_username = 'zhannett', $twitter_password = 'Zhanna1') {
                if(is_dir($this->cache_folder)) { // Let's make sure our chosen directory exists
                        // Is the directory writable?
                        if(is_writable($this->cache_folder)) {
                                if ($twitter_password) {// If we've been supplied with a password we'll want to Authenticate our Twitter account, otherwise use the "basic" method
                                        $context = stream_context_create(array('http' => array('header' => "Authorization: Basic " . base64_encode("$twitter_username:$twitter_password"))));
                                        $tweets = file_get_contents($this->twitter_api_url . $twitter_username, FALSE, $context);
                                } else {
                                    $tweets = file_get_contents($this->twitter_api_url . $twitter_username);
                                }
                                switch($http_response_header[0]) { // Now that we've made our connection, let's verify we have the data and then write it out
                                        case 'HTTP/1.0 200 OK':// Let's write to our cache
                                                $cacheHandle = fopen($cache_file, 'w');
                                                fwrite($cacheHandle, $tweets);
                                                fclose($cacheHandle);												
                                                break;
                                        case 'HTTP/1.1 200 OK':
                                                // Let's write to our cache
                                                $cacheHandle = fopen($cache_file, 'w');
                                                fwrite($cacheHandle, $tweets);
                                                fclose($cacheHandle);												
                                                break;
                                        case 'HTTP/1.1 401 Unauthorized':
                                                return 'Error, the Twitter password you have supplied is either invalid or missing.';
                                                break;
                                        case 'HTTP/1.1 404 Not Found';
                                                return 'Error, the Twitter username you have supplied has not been found.';
                                                break;
                                        default:
                                                return 'Error, a problem occurred while communicating with Twitter. Please try again later.';
                                                break;
                                }
                                return TRUE; // We're done
                        }
                        else return 'Error, the folder you have specified is not writable.';
                }
                else return 'Error, the folder you have specified does not exist.';
        }
    }
?>