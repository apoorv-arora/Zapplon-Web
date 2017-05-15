<?php
session_start();
include('../../utils/conf.php');
$_SESSION['token']=null;
session_destroy();
$url=$GLOBALS['localhost']."intercity";
header('Location:'.$url);
?>