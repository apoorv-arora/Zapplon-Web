<?php 
include("../conf.php");
error_reporting(E_ALL);
ini_set("display_errors", "1");
require_once('../../utils/Http2.php');
$r = new HttpRequest("post", $GLOBALS['server_url']intercity/cancel", array(
		"userName" => "ridhi",
		"bookingCode" => "1",
		"type" => "32",
    "reason" => "not"
    ));
  if ($r->hasError()) {
    echo $r->getError();
      echo "sorry, an error occured";
      echo(json_encode(false));
  } 
  else {
     $js = json_decode($r->getResponse());
     $res=$js->{"response"};
    // var_dump($res);
     echo json_encode($res);
  } 


 ?>