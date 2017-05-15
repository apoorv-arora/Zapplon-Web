<?php
    session_start();
    include("../utils/conf.php");
		require_once('../utils/Http2.php');
    if(!preg_match('/^[0-9]{10}$/', $_GET['phone']))
    {
      echo json_encode(false);
    }
    {
		$r = new HttpRequest("post", $GLOBALS['server_url']."appConfig/appLink", array(
        "client_id" => $GLOBALS['client_id'],
        "app_type" => $GLOBALS['app_type'],
        "phone" => $_GET['phone'] 
    	));
  		if ($r->getError()) {
      	echo "sorry, an error occured";
  		}	 
  		else {
  			
        $js = json_decode($r->getResponse());
       	$obj=$js->response;
       	if($obj=="success"){
          echo json_encode(true);
        }
        else echo json_encode(false);
      }
}
?>