<?php 
ob_start();
include("../../utils/conf.php");
session_start();
if($_SESSION['token']==null)
{
  echo "invalid request";
}
else
{
$bookingId=$_GET['bookingId'];
$type=$_GET['type'];
$bookingAmt=$_GET['bookingAmt'];
$totalCost=$_GET['totalCost'];
$fromCity=$_GET['fromCity'];
$toCity=$_GET['toCity'];
$startDate=$_GET['startDate'];
$returnDate=$_GET['returnDate'];
$cabType=$_GET['cabType'];
$preference=$_GET['preference'];
require_once('../../utils/Http2.php');
$r = new HttpRequest("post", $GLOBALS['server_url']."intercity/bookings/book", array(
        "client_id" => $GLOBALS['client_id'],
        "app_type" => $GLOBALS['app_type'],
        "type" => $type,
        "bookingId" => $bookingId,
        "access_token" => $_SESSION['token'],
        "bookingAmt"=> $bookingAmt,
        "totalCost"=> $totalCost,
        "fromCity" =>$fromCity,
        "toCity" => $toCity,
        "startDate" =>  $startDate,
        "returnDate" => $returnDate,
        "preference" => $preference,
        "cabType" => $cabType
    ));
  if ($r->hasError()) {
    echo $r->getError();
     echo "sorry, an error occured";
      //echo(json_encode(false));
  } 
  else {
  	// parse json 
     $js = json_decode($r->getResponse());
     $res=$js->{"response"};
     $_SESSION['bookingobject']=$res;
     echo json_encode($res[0]);
}

}
 ?>