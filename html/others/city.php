<?php
$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$city = $geo["geoplugin_city"];
$location = $geo["geoplugin_locationName"];
$street = $geo["geoplugin_streetName"];
echo "City: ".$city."<br>";
echo "loction: ".$location."<br>";
echo "street: ".$street."<br>";
echo "geo:".$geo.toString();
?>
