<?php
include("../conf.php");
session_start();
if($_GET['email']==null || $_GET['password']==null )
{
  //echo "here";
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
       	$res=json_decode($obj);
        var_dump($res);
       	$access_token=$res->access_token;
        	var_dump($access_token);
		    $_SESSION['token']=$access_token;
        $_SESSION['email']=$_GET['email'];
        //echo $access_token; 
      //  $url = $GLOBALS['localhost']."intercity/results/?journey=".$_GET['journey']."&ret=".$_GET['ret']."&pickcity=".$_GET['pickcity']."&dropcity=".$_GET['dropcity']."&pickdate=".$_GET['pickdate']."&picktime=".$_GET['picktime']."&num=".$_GET['num'];
        echo "url is :".$url;
        if($_SESSION['header']=="2"){
          $url = $GLOBALS['localhost']."intercity/results/";
          header('Location: '. $url);
        }
        else{
          $url = $GLOBALS['localhost']."intercity";
          header('Location: '. $url);
        }

        //header('Location:localhost/intercity/results/?');
        } 
	

}
?>