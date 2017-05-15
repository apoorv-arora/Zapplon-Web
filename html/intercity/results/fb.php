<?php 

  //session_start();
  //require_once('contents/includes/session_class.php');
  //require_once('contents/includes/config_class.php');
  //require_once('contents/includes/user_class.php');
  //require_once('contents/includes/sanitize_text.php');
/*
  $session->check_login();
  if($session->is_logged_in())
  {
    header("location:home.php");
    
  }
*/
//$_SESSION['token']=null;
  $app_id   = "1640657659526412";
  $app_secret = "87f82c178bd474260edb6f446704533d";
  if($_SESSION['header']=="2")
  $site_url = $GLOBALS['localhost']."intercity/results/welcome.php?journey=".$journey."&ret=".$returndate."&pickcity=".$pickupcity."&dropcity=".$dropcity."&pickdate=".$pickupdate."&picktime=".$pickuptime."&num=".$noofpas;
  else{
   $site_url = $GLOBALS['localhost']."intercity/results/welcome.php"; 
  }
  //$site_url = "http://localhost/intercity/welcome.php?journey=oneway&ret=NA&pickcity=Delhi&dropcity=JAipur&pickdate=2016-06-16&picktime=6%3A30AM&num=3";
//$site_url = "http://localhost/intercity/results/welcome.php";
  try{
    include("src/facebook.php");
  }catch(Exception $e){
    error_log($e);  
  }
  
  // Create our application instance
  $facebook = new Facebook(array(
    'appId'   => $app_id,
    'secret'  => $app_secret,
    ));

  // Get User ID
  $user = $facebook->getUser();
  $logoutUrl = $facebook->getLogoutUrl();
  $loginUrl = $facebook->getLoginUrl(array(
      'scope'     => 'user_friends,email',
      //'scope'     => 'user_friends,publish_actions,email,user_birthday,permissions',
      'redirect_uri'  => $site_url,
      ));
?>