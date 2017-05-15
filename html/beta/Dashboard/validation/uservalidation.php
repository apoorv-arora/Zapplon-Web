<?php 
session_start();
$email=$_GET['email'];
include("../../utils/conf.php");
require_once('../../utils/Http2.php');
$r = new HttpRequest("post", $GLOBALS['server_url']."booking/isUserValid", array(
        "client_id" => "zapp_web_client",
        "app_type" => "zapp_web",
        "email"=> $email,
        "accessToken" => $_SESSION['token']
    ));
  if ($r->hasError()) {
    echo $r->getError();
      echo "sorry, an error occured";
      echo(json_encode(false));
  } 
  else {
  	 // parse json 
     $js = json_decode($r->getResponse());
     $res=$js->{"response"};
     echo json_encode($js);
     
     	
} 

?>