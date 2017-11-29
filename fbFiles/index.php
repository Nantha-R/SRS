<?php
// Include FB config file && User class
require_once 'fbConfig.php';
require_once 'User.php';
session_start();
$_SESSION['latitude']=$_GET['latitude'];
$_SESSION['longitude']=$_GET['longitude'];
if(isset($accessToken)){

    if(isset($_SESSION['facebook_access_token'])){
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }else{

        // Put short-lived access token in session
        $_SESSION['facebook_access_token'] = (string) $accessToken;

          // OAuth 2.0 client handler helps to manage access tokens
        $oAuth2Client = $fb->getOAuth2Client();

        // Exchanges a short-lived access token for a long-lived one
        $longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
        $_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;

        // Set default access token to be used in script
        $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
    }

    // Redirect the user back to the same page if url has "code" parameter in query string
    if(isset($_GET['code'])){
        header('Location: ./');
    }

    // Getting user facebook profile info
    try {
        $profileRequest = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,locale,picture');
        $fbUserProfile = $profileRequest->getGraphNode()->asArray();
    } catch(FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        session_destroy();

        // Redirect user back to app login page
        header("Location: ./");
        exit;
    } catch(FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
    }

    try {
		$requestFriends = $fb->get('/me/taggable_friends?fields=name&limit=100');
		$friends = $requestFriends->getGraphEdge();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}
	// if have more friends than 100 as we defined the limit above on line no. 68
	if ($fb->next($friends)) {
		$allFriends = array();
		$friendsArray = $friends->asArray();
		$allFriends = array_merge($friendsArray, $allFriends);
		while ($friends = $fb->next($friends)) {
			$friendsArray = $friends->asArray();
			$allFriends = array_merge($friendsArray, $allFriends);
		}
		//printing friend list
		//foreach ($allFriends as $key) {
		//	echo $key['name'] . "<br>";
		//}


	} else {
		$allFriends = $friends->asArray();
		$totalFriends = count($allFriends);
		//printing friend list

		}
    // Initialize User class
    $user = new User();

    // Insert or update user data to the database
    $fbUserData = array(
		'oauth_provider'=> 'facebook',
        'oauth_uid'     => $fbUserProfile['id'],
        'first_name'    => $fbUserProfile['first_name'],
        'last_name'     => $fbUserProfile['last_name'],
        //'email'         => $fbUserProfile['email'],
        'gender'        => $fbUserProfile['gender'],
        'locale'        => $fbUserProfile['locale'],
        'picture'       => $fbUserProfile['picture']['url'],
        'link'          => $fbUserProfile['link']
    );

	//check if the user's email id is available or not
	if(array_key_exists('email',$fbUserProfile))
	$fbUserData['email']=$fbUserProfile['email'];
	else
	$fbUserData['email']="Undefined";

    $userData = $user->checkUser($fbUserData);

    // Put user data and friend list  into session
    $_SESSION['userData'] = $userData['first_name']." ".$userData['last_name'];
	$tempar=array();
	foreach ($allFriends as $key) {
			array_push($tempar,$key['name']);
	}
	//storing friends list onto section
	$_SESSION['allFriends']=$tempar;

    // Get logout url and store in session
    $logoutURL = $helper->getLogoutUrl($accessToken, 'http://localhost:8080/SRS/fbFiles/logout.php');
    $_SESSION['logoutURL']=$logoutURL;

    // Move to the products Page
	header('Location: http://localhost:8080/SRS/productPage.php');

}else{
    // Get login url

    $loginURL = $helper->getLoginUrl($redirectURL, $fbPermissions);

    // Render facebook login button
	header('Location:'.$loginURL);
}
?>
<html>
<head>
<title>Login with Facebook using PHP by CodexWorld</title>
<style type="text/css">
    h1{font-family:Arial, Helvetica, sans-serif;color:#999999;}
</style>
</head>
<body>
    <!-- Display login button / Facebook profile information -->

    <div><?php echo $output; ?></div>
</body>
</html>
