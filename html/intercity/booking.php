<?php 
$fromcity=$_GET['fromcity'];
$tocity=$_GET['tocity'];
$fromdate=$_GET['fromdate'];
$todate=$_GET['todate'];
$taxitype=$_GET['taxitype'];
$pickuptime=$_GET['pickuptime'];
$pickupaddress=$_GET['pickupaddress'];
$cost=$_GET['cost'];
$name=$_GET['name'];
$email=$_GET['email'];
$mobile=$_GET['mobile'];
$bookingamt=$_GET['bookingamt'];
$type=$_GET['type'];
//if($_SESSION['token']==null)
  //echo json_encode("no");
//else{
error_reporting(E_ALL);
ini_set("display_errors", "1");
require_once('../utils/Http2.php');
$r = new HttpRequest("post", "http://192.168.0.135:8080/ZapplonServer/rest/intercity/book", array(
		"userName" => $name,
		"email" => $email,
		"mobileNo" => $mobile,
        "fromCity" => $fromcity,
        "toCity" => $tocity,
        "startDate" =>  $fromdate,
        //"returnDate" => ,
        "bookingAmt"=> $bookingamt,
        "totalCost"=> $cost,
        "taxiType" => $taxitype,
        "pickUpAddress" => $pickupaddress,
        "pickUpTime" => $pickuptime,
        "type" => $type
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

//}
 ?>