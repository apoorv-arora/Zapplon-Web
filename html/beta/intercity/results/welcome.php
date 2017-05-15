<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", "1");

include('../../utils/conf.php');
// include("fbconnect.php");

ob_start();
$app_id		= "1640657659526412";
$app_secret	= "87f82c178bd474260edb6f446704533d";
$site_url	= "http://zapplon.com/";
try{
	include_once "src/facebook.php";
}catch(Exception $e){
	error_log($e);
}
	// Create our application instance
$facebook = new Facebook(array(
	'appId'		=> $app_id,
	'secret'	=> $app_secret,
	));

	// Get User ID
$user = $facebook->getUser();
	//var_dump($user);
	//Get accesstoken
try{
	$fbToken = $facebook->getAccessToken($user);
} catch(Exception $e) {
    // When Graph returns an error
	exit;
}  catch(Exception $e) {
    // When validation fails or other local issues
	exit;
}

if (isset($fbToken)) {

    // Logged in
    // Store the $accessToken in a PHP session
    // You can also set the user as "logged in" at this point
} elseif ($facebook->getError()) {
    // There was an error (user probably rejected the request)
	echo '<p>Error: ' . $facebook->getError();
	echo '<p>Code: ' . $facebook->getErrorCode();
	echo '<p>Reason: ' . $facebook->getErrorReason();
	echo '<p>Description: ' . $facebook->getErrorDescription();
	exit;
}
	//echo "facebook token is:-".$fbToken;
?>
<br><?php




	// We may or may not have this data based 
	// on whether the user is logged in.
	// If we have a $user id here, it means we know 
	// the user is logged into
	// Facebook, but we don’t know if the access token is valid. An access
	// token is invalid if the user logged out of Facebook.

		// Get logout URL
$logoutUrl = $facebook->getLogoutUrl();
		//var_dump($logoutUrl);
		// Get login URL
$loginUrl = $facebook->getLoginUrl(array(
	'scope'			=> 'publish_actions, email, user_birthday',
	'redirect_uri'	=> $site_url,
	));
$user_profile = $facebook->api('/me?fields=name,email,id,gender,birthday,permissions');
	//if got any info
$_SESSION['name']=$user_profile['name'];
$_SESSION['profilepic']="http://graph.facebook.com/".$user_profile['id']."/picture";
if($user)
{
	try{
		// Proceed knowing you have a logged in user who's authenticated.
		$user_profile = $facebook->api('/me?fields=name,email,id,gender,birthday,permissions'); //
		$perm=array();
		for ($i=0; $i < sizeof($user_profile['permissions']['data']); $i++) { 
				array_push($perm,$user_profile['permissions']['data'][$i]['permission']);
		}
		$perm=json_encode($perm);
		$_SESSION['fbid']=$user_profile['id'];
		$_SESSION['fbperm']=$perm;
		if($user_profile['email']==null)
		{
			$ur = $GLOBALS['localhost']."intercity/results/verify.php?t=".$fbToken;
			header('Location:' .$ur);
			ob_end_flush();
			exit;
		}

		require_once('../../utils/Http2.php');
		$url=$GLOBALS['server_url']."auth/login?isFacebookLogin=true&device_id=00000000";


		$r = new HttpRequest("post", $GLOBALS['server_url']."auth/login?isFacebookLogin=true&device_id=00000000", array(
			"client_id" => $GLOBALS['client_id'],
        	"app_type" => $GLOBALS['app_type'],
			"user_name" => $user_profile['name'],
			"email" => $user_profile['email'],
			"fb_token" => $fbToken,
			"fbid" => $user_profile['id'],
			"fb_permission" => $perm
			));
		if ($r->getError()) {
			echo "sorry, an error occured";
		}	 
		else {
			
      	// parse json and show tweets
			$js = json_decode($r->getResponse());
			$obj=$js->response;
			$res=json_decode($obj);
			$access_token=$res->access_token;
			$_SESSION['token']=$access_token;
			$_SESSION['email']=$user_profile['email'];
        	echo "<script> opener.location.reload();</script>";
        	echo "<script> window.close();</script>";
		
		}   	
	}
	catch(Exception $e)
	{
		echo 'error: '.$e;
		$user=NULL;

	}		
}
else
{
	echo "user is empty";
}
echo "token is".$access_token;  
$_SESSION['token']=$access_token;
?>