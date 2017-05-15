<?php
    session_start();
    include("../conf.php");
		//echo "sending request;";
		error_reporting(E_ALL);
		ini_set("display_errors", "1");
		require_once('../../utils/Http2.php');
    //echo "senidng request";
//$url=$GLOBALS['server_url']auth/login?isFacebookLogin=true&device_id=00000000";
		$r = new HttpRequest("post", $GLOBALS['server_url']appConfig/verify", array(
        "client_id" => 'bt_android_client',
        "app_type" => 'bt_android',
        "phone" => $_GET['phone'],
        "device_id" => "00000000",
		    "access_token" => $_SESSION['token'],
        "otp" => $_GET['pin'] 
    	));
  		if ($r->getError()) {
      	echo "sorry, an error occured";
  		}	 
  		else {
  			echo json_encode(true);
      }      
?>