<?php
		$email=$_GET['email'];
    $pin=$_GET['pin'];
    $newpsw=$_GET['newpsw'];
		error_reporting(E_ALL);
		ini_set("display_errors", "1");
		require_once('Http2.php');
		$r = new HttpRequest("post", "http://192.168.0.135:8080/ZapplonServer/rest/auth/forgotPassword", array(
        "client_id" => 'bt_android_client',
        "app_type" => 'bt_android',
        "email"     => $email,
        "pin" => $pin,
        "email" => $newpsw,
        "deviceId"=>"00000000"
    	));
  		if ($r->getError()) {
      	echo "sorry, an error occured";
        //header('Location:intercity.html');
  		}	 
  		else {
      	// parse json 
        $js = json_decode($r->getResponse());
        //var_dump($js);
       	$obj=$js->response;
       	echo json_encode(true);
        } 
	
?>