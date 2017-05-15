<?php 
include("../../utils/conf.php");
session_start();
if($_SESSION['token']==null){
}
else
{
echo json_encode(true); 
}
 ?>