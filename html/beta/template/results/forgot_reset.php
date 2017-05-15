<?php
include("../../utils/conf.php");
if($_GET['email']==null || $_GET['newpsw']==null || $_GET['pin']==null )
{
  echo "invalid request";
}
else
{
		$email=$_GET['email'];
    $pin=$_GET['pin'];
    $newpsw=$_GET['newpsw'];
		require_once('../../utils/Http2.php');
		$r = new HttpRequest("post", $GLOBALS['server_url']."auth/forgotPassword", array(
        "client_id" => 'bt_android_client',
        "app_type" => 'bt_android',
        "email"     => $email,
        "pin" => $pin,
        "new_password" => $newpsw,
        "deviceId"=>"00000000"
    	));
  		if ($r->getError()) {
      	echo "sorry, an error occured";
        //header('Location:intercity.html');
  		}	 
  		else {
      	// parse json 
        $js = json_decode($r->getResponse());
       	$obj=$js->response;
       	echo json_encode($obj);
        } 
	}
?>