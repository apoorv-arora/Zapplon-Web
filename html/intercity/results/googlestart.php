<?php

require_once ('../../utils/google/autoload.php');

//Insert your cient ID and secret 
//You can get it from : https://console.developers.google.com/
$client_id = '131484393418-na84hvgnp59mb567dbhu3de9mgtnbpnk.apps.googleusercontent.com'; 
$client_secret = 'M7Nv1lYobMEc_k4rT8KjHF9d';
if($_SESSION['header']=="2")
  $redirect_uri = $GLOBALS['localhost'].'intercity/results/';
else 
  $redirect_uri = $GLOBALS['localhost'].'intercity';
/*
//database
$db_username = "xxxxxxxxx"; //Database Username
$db_password = "xxxxxxxxx"; //Database Password
$host_name = "localhost"; //Mysql Hostname
$db_name = 'xxxxxxxxx'; //Database Name
*/

//incase of logout request, just unset the session var
if (isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
}

/*****************
  Make an API request on behalf of a user. In
  this case we need to have a valid OAuth 2.0
  token for the user, so we need to send them
  through a login flow. To do this we need some
  information from our API console project.
 ****************/
  /*
$sta=array();
array_push($sta,$journey);
array_push($sta,$returndate);
array_push($sta,$pickupcity);
array_push($sta,$dropcity);
array_push($sta,$pickupdate);
array_push($sta,$pickuptime);
array_push($sta,$noofpas);
$sta=json_encode($sta);
$sta=base64_encode($sta);
*/
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");
//$client->setState($sta);

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
          echo '<a class="social_box google" href="' . $authUrl . '"><span class="icon"><i class="fa fa-google-plus"></i></span>
            <span class="icon_title google-signup">SIGN IN WITH GOOGLE</span></a>';

          }

          else {
  $resp=json_decode($client->getAccessToken());
  $googleToken=$resp->access_token;
  //$googleToken= $client->getAccessToken();
  //var_dump($googleToken);
  $user = $service->userinfo->get(); 
 //echo 'Hi '.$user->name.', Thanks for Registering! [<a href="'.$redirect_uri.'?logout=1">Log Out</a>]';
 //echo "google token is:".$googleToken;
 //header('Location:http://localhost/intercity/results/?journey=oneway&ret=NA&pickcity=Delhi&dropcity=Chandigarh&pickdate=2016-06-16&picktime=6%3A30AM&num=3');
    //header('Location:http://localhost/intercity/index.php');

    error_reporting(E_ALL);
    ini_set("display_errors", "1");
   // require_once('Http2.php');
    $r = new HttpRequest("post", $GLOBALS['server_url']auth/login", array(
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
        $_SESSION['name']=$user->name;
        $_SESSION['email']=$user->email;
       // var_dump($_SESSION['token']);
        }   
         
}
?>