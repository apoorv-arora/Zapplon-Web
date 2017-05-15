<?php 

$ref=$_GET['referrer'];
if($ref)
{
$url='https://play.google.com/store/apps/details?id=com.application.zapplon&referrer='.$ref;
	header('Location: ' . $url);
}
else
{
$url='https://play.google.com/store/apps/details?id=com.application.zapplon';
	header('Location: ' . $url);
}
?>