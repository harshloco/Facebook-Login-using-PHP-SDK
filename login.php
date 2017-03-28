<?php
///check is the session is created, if not create one
	if (!isset($_SESSION)){
	session_start();
	}
	# Autoload the required files
	require_once __DIR__ . '/vendor/autoload.php';
	# Set the default parameters
	$fb = new Facebook\Facebook([
    'app_id' => '12893435407573', // --------Paste your app id here
    'app_secret' => '77b119946h6765781d3b76ea',// ------Paste your app-secret here, never share this with anyone
    'default_graph_version' => 'v2.8',//------- always mention default graph version 
  
    ]);

	$helper = $fb->getRedirectLoginHelper();

	$permissions = ['email']; // Optional permissions
	$loginUrl = $helper->getLoginUrl('http://www.example.com/folderName/callback.php', $permissions);

	echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>