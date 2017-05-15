<?php
    session_start();
    include("../../utils/conf.php");
		require_once('../../utils/Http2.php');
		$r = new HttpRequest("post", $GLOBALS['server_url']."appConfig/verify", array(
        "client_id" => $GLOBALS['client_id'],
        "app_type" => $GLOBALS['app_type'],
        "phone" => $_GET['phone'],
        "otp" => $_GET['pin'] ,
        "device_id" => "00000000",
        "access_token" => $_SESSION['token']
    	));
  		if ($r->getError()) {
      	echo "sorry, an error occured";
  		}	 
  		else {
        $js = json_decode($r->getResponse());
        if($js->response==false)
          echo json_encode(false);
        else
          echo json_encode(true);
      }      
?>