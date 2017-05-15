<?php 
  $app_id   = "1640657659526412";
  $app_secret = "87f82c178bd474260edb6f446704533d";
  $site_url = $GLOBALS['localhost']."intercity/results/welcome.php"; 
 
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
      'scope'     => 'user_friends, public_profile, user_about_me, email',
      'redirect_uri'  => $site_url,
      ));
?>