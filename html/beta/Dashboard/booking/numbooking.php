<?php
session_start();
$from=$_GET['from'];
$to=$_GET['to'];
$f=date_create($from);
$t=date_create($to);
$f2= date_format($f, 'Y-m-d H:i:s');
$t2= date_format($t, 'Y-m-d H:i:s');
$from= strtotime($f2)*1000;
$to=strtotime($t2)*1000;
//var_dump($from);
//var_dump($to);

include("../../utils/conf.php");
require_once('../../utils/Http2.php');
$r = new HttpRequest("post", $GLOBALS['server_url']."booking/bookingsCount", array(
        "client_id"  => "zapp_web_client",
        "app_type"   => "zapp_web",
        "start_date" => $from,
        "end_date"   => $to,
        "accessToken" => $_SESSION['token']
    ));
  if ($r->hasError()) {
    echo $r->getError();
      echo "sorry, an error occured";
      echo(json_encode(false));
  } 
  else 
  {
  	// parse json 
     $js = json_decode($r->getResponse());
     $res=$js->{"response"};
     echo json_encode($js);
	} 

?>