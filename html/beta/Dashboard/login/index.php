<?php
session_start();
include('../../utils/conf.php');
if(@$_SESSION['token']){
  header('Location: '.$GLOBALS['localhost'].'Dashboard/');
}

require_once ('../../utils/google/autoload.php');
//require_once ('../images/google-login-button');

//Insert your cient ID and secret 
//You can get it from : https://console.developers.google.com/
$client_id = '131484393418-na84hvgnp59mb567dbhu3de9mgtnbpnk.apps.googleusercontent.com'; 
$client_secret = 'M7Nv1lYobMEc_k4rT8KjHF9d';
$redirect_uri = $GLOBALS['localhost'].'Dashboard/login';


//incase of logout request, just unset the session var
if (isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
}

$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");

/*****************
  When we create the service here, we pass the
  client to it. The client then queries the service
  for the required scopes, and uses that when
  generating the authentication URL later.
 ****************/
  $service = new Google_Service_Oauth2($client);

/*****************
  If we have a code back from the OAuth 2.0 flow,
  we need to exchange that with the authenticate()
  function. We store the resultant access token
  bundle in the session, and redirect to ourself.
*/  
  if (isset($_GET['code'])) {
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();

    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  }


/*****************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 ****************/
  if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
  } else {
    $authUrl = $client->createAuthUrl();
  }

  if (isset($authUrl)){
  //if($_SESSION['token']){
    echo '<div align="center">';
    echo '<p>Login with your google account to continue</p>';
    echo '<a class="login" href="' . $authUrl . '"><img style="width:30%;margin:70px;" src="../../assets/images/googleplus.png" /></a>';
    echo '</div>';

  }

  else {
    $resp=json_decode($client->getAccessToken());
    $googleToken=$resp->access_token;
    $user = $service->userinfo->get(); 

    error_reporting(E_ALL & ~E_NOTICE);
    ini_set("display_errors", "1");
    require_once('../../utils/Http2.php');
    $r = new HttpRequest("post", $GLOBALS['server_url']."auth/login", array(
      "client_id" => 'bt_android_client',
      "app_type" => 'bt_android',
      "token" => $googleToken,
      "user_name" => $user->name,
      "email" => $user->email,
      "deviceId"=>"00000000",
      "google_login"=>"true"
      ));
    if ($r->getError()) {
      echo "sorry, an error occured";
    }  
    else {
        // parse json and show tweets
      $js = json_decode($r->getResponse());
        //var_dump($js);
      $obj=$js->response;
      $res=json_decode($obj);
      $access_token=$res->access_token;
      $_SESSION['token']=$access_token;
       // echo $_SESSION['token'];
      $_SESSION['name']=$user->name;
      $_SESSION['email']=$user->email;
    }   
  }
  ?>