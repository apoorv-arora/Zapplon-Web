<?php
include("../utils/conf.php");
?>
<!DOCTYPE html>

<html  lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <?php
  include("../meta.php");
  ?>
  <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Raleway:100,600' rel='stylesheet' type='text/css'>
  <link href="../assets/css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
  <link rel='icon' href='../assets/images/favicon.ico' type='image/x-icon'/ >
  <script src="../assets/js/thumbnail-slider.js" type="text/javascript"></script>

  <link rel="stylesheet" href=<?php echo $GLOBALS['localhost'] ?>assets/css/header.css>
  <link rel="stylesheet" href=<?php echo $GLOBALS['localhost'] ?>assets/css/footer.css>

  <link rel="stylesheet" type="text/css" href="../assets/css/styleloginnew.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="../assets/css/style.css" />
  <link type="text/css" rel="stylesheet" href="../assets/css/styleform.css" />
  <link type="text/css" rel="stylesheet" href="../assets/css/app-style.css" />

  <!-- <link rel="stylesheet" type="text/css" href="https://static.zmtcdn.com/gencss/t-fce05e705b469d889fdc20033ca4cdb8/l-H4sIAAAAAAAAA0tKLE7Vz0nVTS_KTNFLLi7WqcrPTUosKYawi0sSSzKTwezi1NzEPCBHH8YAiQIAP2LJTT4AAAA/h-0604dcfaad6dff5428805b9e7dadb9d5" />
  <link rel="stylesheet" type="text/css" href="https://static.zmtcdn.com/gencss/t-75188d130fae7371c0372a8ed5bedc15/l-H4sIAAAAAAAAAytOzU3MK8lM1k9JTcvMyyzJzM8r1k_Oz8lJTYaw04syU_SSi4sBUomDqSkAAAA/h-0604dcfaad6dff5428805b9e7dadb9d5" />
 -->
  <link rel="stylesheet" type="text/css" href="../assets/css/style_footer_1.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style_footer_2.css" />
</head>
<body class=" is-responsive en"  >


  <script>dataLayer = [];</script>

  <div class="ghboxcontainer"  style="visibility: hidden; display: none;"><div id="ghbox"></div></div>

  <div class="screen-block hidden"></div>


  <!-- header template -->
  <?php include('../template/header.php'); ?>
  <!-- header file template -->
  <br>
    <div class="wrapper mtop"><div class="ui segment" style="padding:0px;">
    <div class="tac pbot2 ptop2 ui basic center aligned segment">
      <h1 class="pbot0" >Developer's Guide</h1>
      <div class="fontsize2 pbot pl10 pr10" style="padding-left:100px; padding-right: 100px">
       <h3 class="caption gray"><strong>We're working hard to ensure our customers get the state of the art technologies. Reach out to us for our developers guide.</strong></h3>
       <i class="fa fa-map-marker fa-fw"></i><strong> 1/5 &amp; 1/6 First Floor<strong>,
       <br /><strong>Garage Block Regal Building</strong>
       <br /><strong>Connaught Circus</strong>
       <br /><strong>New Delhi, 110001</strong>
       <i class="fa fa-envelope fa-fw"></i><strong>hello@zapplon.com<strong><br />
       <i class="fa fa-phone fa-fw"></i><strong>+91 (0) 99588 35 333</strong>
     </div>
   </div>
 </div>
</div>
<br><br>

<br>
<?php
include('../template/footer.php');?>

<div class="clear" id="fb-root"></div>

</body>
<script type="text/javascript">
  var business = document.getElementById('business');
  var cities = document.getElementById('cities');
business.setAttribute("style", "font-size:24px;margin-bottom:20px;");
cities.setAttribute("style", "font-size:24px;margin-bottom:20px;");
</script>
</html>
