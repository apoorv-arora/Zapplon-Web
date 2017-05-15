<?php
session_start();
include ('../utils/conf.php');
unset($_SESSION['token']);
$_SESSION['token']=null;
unset($_SESSION['access_token']);
//session_destroy();
header('Location: '.$GLOBALS['localhost'].'Dashboard/login');	
?>