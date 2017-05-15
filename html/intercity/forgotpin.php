<?php
include("conf.php");
if($_GET['email']==null || $_GET['pin']==null )
{
  header('Location:results');
}
else
{
		$email=$_GET['email'];
    $pin=$_GET['pin'];
		error_reporting(E_ALL);
		ini_set("display_errors", "1");
		require_once('../utils/Http2.php');
		$r = new HttpRequest("post", $GLOBALS['server_url']auth/forgotPassword", array(
        "client_id" => 'bt_android_client',
        "app_type" => 'bt_android',
        "email"     => $email,
        "pin" => $pin,
        //"email" => ,
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
	}
?>