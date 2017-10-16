<?php
// Include FB config file
require_once 'fbConfig.php';

// Remove access token from session
unset($_SESSION['facebook_access_token']);

// Remove user data from session
unset($_SESSION['userData']);
unset($_SESSION['friend_list']);

//remove latitude and longitude
unset($_SESSION['latitude']);
unset($_SESSION['longitude']);

// Redirect to the homepage
header('Location: http://localhost:8080/SRS/index.html');
?>