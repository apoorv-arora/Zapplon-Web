<?php
include("../../utils/conf.php");
if($_GET['email']==null )
{
  echo "invalid request";
}
else
{
		$email=$_GET['email'];
		require_once('../../utils/Http2.php');
		$r = new HttpRequest("post", $GLOBALS['server_url']."auth/forgotPassword", array(
         "client_id" => $GLOBALS['client_id'],
        "app_type" => $GLOBALS['app_type'],
        "email"     => $email,
        "deviceId"=>"00000000"
    	));
  		if ($r->getError()) {
      	echo "invalid request";
  		}	 
  		else {
      	// parse json 
        $js = json_decode($r->getResponse());
       	$obj=$js->response;
       	echo json_encode($obj);
       //	echo json_encode($res->pin);
        } 
	}
?>