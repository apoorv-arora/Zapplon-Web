<?php
ob_start();
//header('Location: http://www.zapplon.com');
var_dump($_SESSION['header']);
//session_start();
	//Application Configurations
?><br>

<?php
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
if($user)
{
	//	header('Location:http://localhost/results/journey=oneway&ret=NA&pickcity=Delhi&dropcity=Chandigarh&pickdate=2016-06-16&picktime=6%3A30AM&num=3');
		//echo $user." true \n";
	try{
			//echo "entered";
		// Proceed knowing you have a logged in user who's authenticated.
		$user_profile = $facebook->api('/me?fields=name,email,id,gender,birthday,permissions'); //

		if($user_profile['email']==null)
		{
			//echo $fbToken;
			
		//	$ur = $GLOBALS['localhost']."intercity/results/verify.php?journey=".$_GET['journey']."&ret=".$_GET['ret']."&pickcity=".$_GET['pickcity']."&dropcity=".$_GET['dropcity']."&pickdate=".$_GET['pickdate']."&picktime=".$_GET['picktime']."&num=".$_GET['num']."&n=".$user_profile['name']."&t=".$fbToken."&id=".$user_profile['id'];
			$ur = $GLOBALS['localhost']."intercity/results/verify.php?t=".$fbToken;
			header('Location:' .$ur);
		}

//		<p 	email="<?php echo '<script type="text/javascript">
//					myPopup();			
//			</script>'; 

		include('contents/includes/config_class.php');
		require_once('../../utils/Http2.php');
		$url=$GLOBALS['server_url']."auth/login?isFacebookLogin=true&device_id=00000000";


		$r = new HttpRequest("post", $GLOBALS['server_url']."auth/login?isFacebookLogin=true&device_id=00000000", array(
			"client_id" => 'bt_android_client',
			"app_type" => 'bt_android',
			"user_name" => $user_profile['name'],
			"email" => $user_profile['email'],
        //"email" => 'ridhi@zapplon.com',
			"fb_token" => $fbToken,
		//"fb_permission" => $user_profile['permissions']
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
			
       	//echo $access_token;

			$_SESSION['token']=$access_token;
			$_SESSION['name']=$user_profile['name'];
			$_SESSION['email']=$user_profile['email'];
		//echo $_SESSION['token'];
		//echo $_SESSION['name'];
		//$_SESSION['email']=$user_profile['email'];
			if($_SESSION['header']=="2"){
				$ur=$GLOBALS['localhost']."intercity/results/";
			//echo "header is 2";

				header('Location: '. $ur);
			}
			else{
				header('Location: '.$GLOBALS['localhost'].'intercity', true, 301);
				ob_end_flush();
				exit;
			//$ur=$GLOBALS['localhost']."intercity/";
			//header('Location: '. $ur);
			//echo "header is 1";

			}
		}   	
	}
	catch(Exception $e)
	{
		echo 'error: '.$e;
		//$con->rollback();
		$user=NULL;

	}		
}
else
{
	echo "user is empty";
}
//}

?>