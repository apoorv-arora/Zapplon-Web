<?php

if($_POST['email']==null || $_POST['password']==null || $_POST['username']==null)
{
	header('Location:login.html');
}
else
{
		error_reporting(E_ALL);
		ini_set("display_errors", "1");
		require_once('Http2.php');
		$r = new HttpRequest("post", "http://192.168.0.135:8080/ZapplonServer/rest/auth/login", array(
        "client_id" => 'bt_android_client',
        "app_type" => 'bt_android',
        "user_name" => $_POST['username'],
        "password" => $_POST['password'],
        "email" => $_POST['username'],
        "deviceId"=>"00000000"
    	));
  		if ($r->getError()) {
      	echo "sorry, an error occured";
        //header('Location:intercity.html');
  		}	 
  		else {
      	// parse json and show tweets
        $js = json_decode($r->getResponse());
      	//var_dump($js);
       	$obj=$js->response;
       	$res=json_decode($obj);
       	$access_token=$res->access_token;
       //	var_dump($access_token);
       	//echo $access_token;
		    $_session['token']=$access_token;
        //header('Location:booked.php');
        } 
	
}
?>