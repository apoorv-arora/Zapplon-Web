<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", "1");

require_once('Contents/includes/config_class.php');
include('../../utils/conf.php');
include("fbconnect.php");
echo "token is".$access_token;  
$_SESSION['token']=$access_token;
?>