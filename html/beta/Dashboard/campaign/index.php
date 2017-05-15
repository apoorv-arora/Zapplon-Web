<?php
session_start();
include("../../utils/conf.php");
if(@$_SESSION['token'])
{
?>
<!DOCTYPE>
<html lang="en">
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.css"> <meta charset="UTF-8">
    <title>Campaign</title>
</head>
<body>
<?php
require_once('../../utils/Http2.php');
$r = new HttpRequest("post", $GLOBALS['server_url']."booking/campaign", array(
        "client_id" => "zapp_web_client",
        "app_type" => "zapp_web",
        "accessToken" => $_SESSION['token']
        //"accessToken" => "455"
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
     //var_dump($js);
     if($js->{"errorMessage"} == "not permitted"){
      echo "<strong>Not permitted. Log in again? </strong>";
     }
     // var_dump($res);
     else if($res!="failure"){

?>

<section> <!--for demo wrap--> 
<table cellpadding="0" cellspacing="0" border="0">
  <thead>
    <tr>
      <th>Campaign</th>
      <th>Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    <?php
    
     foreach ($res as $value) {
       ?>
    <tr>
      <td><b><?php 
      $camp=$value->campaignNo ;
      if($camp== 1) echo "Website";
      else if($camp== 2) echo "sms campaign day 1";
      else if($camp== 3) echo "sms campaign day 2";
      else if($camp== 4) echo "sms campaign day 3";
      else if($camp== 5) echo "sms campaign day 4";
      else if($camp== 6) echo "sms campaign day 5";
      else if($camp== 7) echo "sms campaign day 6";
      else if($camp== 8) echo "sms campaign day 7";
      else if($camp== 9) echo "sms campaign day 8";
      else if($camp== 10) echo "sms campaign day 9";
      else if($camp== 11) echo "sms campaign day 10";
      else if($camp== 12) echo "mail campaign day 1";
      else if($camp== 13) echo "mail campaign day 2";
      else if($camp== 14) echo "mail campaign day 3";
      else if($camp== 15) echo "mail campaign day 4";
      else if($camp== 16) echo "mail campaign day 5";
      else if($camp== 17) echo "facebook";
      else if($camp== 18) echo "Gmail inside the organization";
      else if($camp== 19) echo "Freecharge7 download campaign 
";
      else if($camp== 20) echo " Tinder";
      else if($camp== 21) echo " NSIT";
      else if($camp== 22) echo " PR (newspaper)";
      else if($camp== 23) echo "Referral Campaign on Facebook.
";
      else if($camp== 24) echo "Bar code for Standee
";
      else if($camp== 25) echo "Spikeshell";
    
        ?></b></td>
      <td><?php echo $value->count ?></td>
    </tr>
       <?php
     }  
   }
   else {
    $u=$GLOBALS['localhost']."Dashboard";
    header('Location: '.$u);

   }
} 
?>
</tbody>
</table>
</section>

</body>
</html>
<?php
}
else{
  $u=$GLOBALS['localhost']."Dashboard/login";
    header('Location: '.$u);
}
?>

<style type="text/css">
  
table{
  width:100%;
  table-layout: fixed;
}
thead{
  height: 10px;
}
th{

  padding: 20px ;
  text-align: center;
  font-weight: 500;
  font-size: 18px;
  color: #000;
  text-transform: uppercase;
}
tr{
height: 10px;
}
td{
  height: 5px;
  padding: 15px;
  text-align: center;
  vertical-align:middle;
  font-weight: 300;
  font-size: 22px;
  color: #000;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}

/* demo styles */

body{
  
  
  /* background: -webkit-linear-gradient(left, #4dffb8, #25b7c4);
  background: linear-gradient(to right, #4dffb8, #25b7c4);
  */
  font-family: 'Roboto', sans-serif;
}
section{
  height: 200px;
  margin: 50px;
}