<?php
session_start();
include('../../utils/conf.php');


require_once('../../utils/Http2.php');
		$r = new HttpRequest("post", $GLOBALS['server_url']."auth/logout", array(
        "client_id" => $GLOBALS['client_id'],
        "app_type" => $GLOBALS['app_type'],
        "access_token" => $_SESSION['token']
    	));
  		if ($r->getError()) {
      	echo "sorry, an error occured";
  		}	 
  		else {
  			$_SESSION['token']=null;
  			session_destroy();
			echo json_encode(true);
      }
?>