<?php
var_dump("enter");
session_start();
// added in v4.0.0
require_once 'autoload.php';
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\Entities\AccessToken;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\HttpClients\FacebookHttpable;
// init app with app id and secret
FacebookSession::setDefaultApplication( '1640657659526412','87f82c178bd474260edb6f446704533d' );

// login helper with redirect_uri
$params = array('email','public_profile', 'user_friends');

$helper = new FacebookRedirectLoginHelper('http://zapplon.com/utils/facebook/connect.php' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}

// see if we have a session
if ( isset( $session ) ) {
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
		//$data =$graphObject->getPropertyNames();
     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID

     /* ---- Session Variables -----*/
     $_SESSION['FBID'] = $fbid;           
     $_SESSION['FULLNAME'] = $fbfullname;
     $_SESSION['EMAIL'] =  $femail;
     /* ---- header location after session ----*/
     header("Location: index.php");
   } else {
    $params = array('email','public_profile', 'user_friends');
    $loginUrl = $helper->getLoginUrl($params);
    header("Location: ".$loginUrl);
  }


  ?>