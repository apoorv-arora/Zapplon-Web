<?php
include("../../utils/conf.php");
session_start();
		error_reporting(E_ALL);
		ini_set("display_errors", "1");
if($_GET['email']==null || $_GET['pwd']==null )
{
echo json_encode(false);
}
else
{
		require_once('../../utils/Http2.php');
		$r = new HttpRequest("post", $GLOBALS['server_url']."auth/login", array(
        "client_id" => $GLOBALS['client_id'],
        "app_type" => $GLOBALS['app_type'],
        "password" => $_GET['pwd'],
        "email" => $_GET['email'],
        "deviceId"=>"00000000"
    	));
  		if ($r->getError()) {
      	echo "invalid request";
        //header('Location:intercity.html');
  		}	 
  		else {
      	// parse json and show tweets
        $js = json_decode($r->getResponse());
      	//var_dump($js);
       	$obj=$js->response;
       	$res=json_decode($obj);
        //var_dump($res);
       	$access_token=$res->access_token;
        	//var_dump($access_token);
		    $_SESSION['token']=$access_token;
        $_SESSION['email']=$_GET['email'];
        echo json_encode(true);
        } 
	

}
?>