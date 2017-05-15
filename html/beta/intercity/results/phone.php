<?php
    session_start();
    include("../../utils/conf.php");
    if(!preg_match('/^[0-9]{10}$/', $_GET['phone']))
    {
      //$error = 'Invalid Number!';
      echo json_encode(false);
    }
    else{
		require_once('../../utils/Http2.php');
   // echo "senidng request";
		$r = new HttpRequest("post", $GLOBALS['server_url']."appConfig/verify", array(
        "client_id" => $GLOBALS['client_id'],
        "app_type" => $GLOBALS['app_type'],
        "phone" => $_GET['phone'],
        "device_id" => "00000000",
		    "access_token" => $_SESSION['token']
    	));
  		if ($r->getError()) {
      	echo "sorry, an error occured";
  		}	 
  		else {
        $js = json_decode($r->getResponse());
        if($js->status=="success")
  			  echo json_encode(true);
      }
    }
?>