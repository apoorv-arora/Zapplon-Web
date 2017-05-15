<?php
session_start();
include("../utils/conf.php");
if(@$_SESSION['token']){
//include('login/index.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="align">
<div class="bot">
<a target="_blank" href="validation"><button type="button" class="btn btn-primary  btn-xl">User Validation</button></a>
</div>
<div class="bot">
  <a target="_blank" href="campaign"><button type="button" class="btn btn-primary btn-xl">Campaign</button></a>
  </div>

  <div class="bot">
  <a target="_blank" href="booking"><button type="button" class="btn btn-primary btn-xl">Bookings</button></a>
 </div>
 <div class="bot">
  <a href="logout.php"><button type="button" value="logout" class="btn ">Logout</button></a>
  </div>
  </div>
</div>
</body>
</html>
<?php
}
else{
  $u=$GLOBALS['localhost']."Dashboard/login";
  header('Location: '.$u);
}
?>

<style type="text/css">
.btn-xl {
    padding: 18px 28px;
    font-size: 22px;
    border-radius: 8px;
}
  .align{
   margin: 100px 100px 100px 400px ;  
  }
  .bot{
     margin-bottom: 10px;
  width: 200px;
  }
  .btn:hover{

    box-shadow:2px 2px 5px #888;;
  }
</style>
