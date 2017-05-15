<?php
include("../conf.php");
$s1=$_GET['s1'];
$s2=$_GET['s2'];
$d1=$_GET['d1'];
$s3=$_GET['s3'];
$d2=$_GET['d2'];
$jtype=$_GET['jtype'];
$s4=$_GET['s4'];
//var_dump($s1);
error_reporting(E_ALL);
ini_set("display_errors", "1");
require_once('../../utils/Http2.php');
$r = new HttpRequest("post", $GLOBALS['server_url']intercity/checkAvailability", array(
        "fromCity" => $s1,
        "toCity" => $s2,
        "fromDate" =>  $d1,
        "pickUpTime" => $s3,
        "toDate" => $d2,
        "journey_type"=> $jtype,
        "no_of_passenger"=> $s4
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
     echo json_encode($res);
} 

?>