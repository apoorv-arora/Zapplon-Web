<?php
    session_start();
    include("../../utils/conf.php");
		require_once('../../utils/Http2.php');
		$r = new HttpRequest("post", $GLOBALS['server_url']."auth/login?isFacebookLogin=true&device_id=00000000", array(
        "client_id" => $GLOBALS['client_id'],
        "app_type" => $GLOBALS['app_type'],
        "user_name" => $_SESSION['name'],
        "email" => $_GET['email'],
		    "fb_token" => $_GET['t'],
        "fbid" => $_SESSION['fbid'],
        "fb_permission" => $_SESSION['fbperm']
    	));
  		if ($r->getError()) {
      	echo "sorry, an error occured";
  		}	 
  		else {
  			
        $js = json_decode($r->getResponse());
       	$obj=$js->response;
       	$res=json_decode($obj);
       	$access_token=$res->access_token;
		    $_SESSION['token']=$access_token;
		    $_SESSION['email']=$_GET['email'];
        echo "<script> opener.location.reload();</script>";
        echo "<script> window.close();</script>";
      }
?>