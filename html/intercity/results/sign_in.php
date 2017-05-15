<?php
session_start();
include("../conf.php");
if($_GET['email']==null || $_GET['password']==null || $_GET['username']==null)
{ 
  $ur=$GLOBALS['localhost']."/intercity/results/";
  header('Location:'. $ur);
}
else
{
		error_reporting(E_ALL);
		ini_set("display_errors", "1");
		require_once('../../utils/Http2.php');
		$r = new HttpRequest("post", $GLOBALS['server_url']auth/login", array(
        "client_id" => 'bt_android_client',
        "app_type" => 'bt_android',
        "user_name" => $_GET['username'],
        "password" => $_GET['password'],
        "email" => $_GET['email'],
        "deviceId"=>"00000000"
    	));
  		if ($r->getError()) {
      	echo "sorry, an error occured";
        //header('Location:intercity.html');
  		}	 
  		else {
      	// parse json and show tweets
        $js = json_decode($r->getResponse());
      	var_dump($js);
       	$obj=$js->response;
        var_dump($obj);
        $_SESSION['name']=$_GET['username'];
        $res=json_decode($obj);
        $access_token=$res->access_token;
        var_dump($access_token);
        $_SESSION['token']=$access_token;
        if($_SESSION['header']=="2"){
          $url = $GLOBALS['localhost']."intercity/results/";
          header('Location: '. $url);
        }
        else{
          $url = $GLOBALS['localhost']."intercity";
          header('Location: '. $url);
        }
        } 
    }
?>