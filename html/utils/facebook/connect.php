<?php
session_start();
include ("../conf.php");
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
FacebookSession::setDefaultApplication( $GLOBALS['appId'],'87f82c178bd474260edb6f446704533d' );
// login helper with redirect_uri
$params = array('email','public_profile', 'user_friends');

$helper = new FacebookRedirectLoginHelper($GLOBALS['server_url'].'fbconfig.php' );
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
     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID

	    $_SESSION['FBID'] = $fbid;           
      $_SESSION['FULLNAME'] = $fbfullname;
      $_SESSION['EMAIL'] =  $femail;

      if($_SESSION['confignum']==1){
        header("Location: car/index.php");
      }
      else if($_SESSION['confignum']==2){
       header("Location: city/index.php"); 
     }
     else if($_SESSION['confignum']==3){
       header("Location: drink/index.php"); 
     }
     else if($_SESSION['confignum']==4){
       header("Location: name/index.php"); 
     }
     else if($_SESSION['confignum']==0){
       header("Location: index.php"); 
     }

   } else {
    $params = array('email','public_profile', 'user_friends');
    $loginUrl = $helper->getLoginUrl($params);
    header("Location: ".$loginUrl);
  }


  ?>