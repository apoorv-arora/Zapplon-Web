<?php
session_start();
ob_start();
$_SESSION['header']="1";
error_reporting(E_ALL & ~E_NOTICE);
ini_set("display_errors", "1");
include("../utils/conf.php");
require_once('../utils/Http2.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  .bgimg  {
    background-image: url("../assets/images/product/phone2.png");
    height: 350px;
    width: 100%;
    background-repeat: no-repeat; 
    background-size:contain; 
    margin-left: 60px;
  }
  </style>
  <title>Zapplon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Raleway:100,600' rel='stylesheet' type='text/css'>
  <link href="../assets/css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
  <script src="../assets/js/thumbnail-slider.js" type="text/javascript"></script>
<link rel='icon' href='../assets/images/favicon.ico' type='image/x-icon'/ >
  <link rel="stylesheet" href=<?php echo $GLOBALS['localhost'] ?>assets/css/header.css>
  <link rel="stylesheet" href=<?php echo $GLOBALS['localhost'] ?>assets/css/footer.css>

  <link rel="stylesheet" type="text/css" href="../assets/css/styleloginnew.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="../assets/css/style.css" />
  <link type="text/css" rel="stylesheet" href="../assets/css/styleform.css" />
  <link type="text/css" rel="stylesheet" href="../assets/css/app-style.css" />

<link rel="stylesheet" type="text/css" href="../assets/css/style_footer_1.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style_footer_2.css" />
    

</head>
<body>
  
  <div class="">

    <!-- header template -->
    <?php include('../template/header.php'); ?>
    <!-- header file template -->
  <!-- app section -->
  <br><br>
  <section class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-2 bgimg "  >
        <div id="screens" style="width:135px;left:92px;top:60px;margin:0px;" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="../assets/images/product/screen1.png" class="center-block img-responsive feature_image"  style="width=100%; height=100%;"/>
          </div>
          <div class="item">
           <img src="../assets/images/product/screen2.png" class="center-block img-responsive feature_image"style="width=100%; height=100%;"/>
         </div>
         <div class="item">
          <img src="../assets/images/product/screen3.png" class="center-block img-responsive feature_image" style="width=100%; height=100%;"/>
        </div>
        <div class="item">
          <img src="../assets/images/product/screen4.png" class="center-block img-responsive feature_image"style="width=100%; height=100%;"/>
        </div>

      </div>
    </div>
  </div>
  <div  class="col-md-7 col-sm-7 col-xs-12">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12" >  
       <h2 class="app-heading" style="color: rgba(254,82,76, 1);">Get the Zapplon app</h2>
     </div>
     <div class="col-md-12 col-sm-12 col-xs-12 app-subheading" style="margin-bottom: 20px;font-family: NeueLight;color:#525051;font-size: 15px;">  
      Your next cab ride is at your fingertips.
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 app-subheading"  style="font-family: NeueLight;color:#808083;font-size: 15px;">
      We'll send you a link, open it on your phone to download the app.
    </div>
  </div>
  <div class="row">

    <div class="send-app-link col-md-12 col-sm-12 " style="margin-top: 10px;margin-bottom: 20px;">
      <div class="row">
        <form class="app-link-form">
          <div class="ui fluid action input col-md-8 ">
            <!-- <input id="country-code" value="+91" size="2" class="br0" type="text"  required > -->
            <span style="background:white;padding:.67861429em 1em;border:1px solid #e7e7e7;font-family:'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;color:#33373D;line-height:1.2142em;">+91</h3></span>
            <input id="phone-no" size="25" class="br0" placeholder="Enter phone number" type="text" minlength=10 maxlength=10 required ></input>

            <div id="app-download-sms" class="ui button green" style="color: white;background-color:  #099e44">
              <button type="submit" class="app-link green">Text App Link</button>
            </div>
          </form>

        </div>
      </div>
    </div>
    <div id="app-link-success"></div>
    <div id="app-link-error"></div>                                  
  </div>
  <div class="row">
    <div class="col-md-12" style="margin-left: 20px;padding: 0px;">
      <a  target="_blank" href="https://play.google.com/store/apps/details?id=com.application.zapplon&referrer=1"><img src="../assets/images/play.png" width="22%"></a> <img src="../assets/images/coming_soon.png" width="22%">
    </div>
  </div>
</div>
</div>

</section>
<br><br>
<!-- <section  class="container-fluid">
  <div class="row">
  <br><br><br><br>
    <center style="margin-top: 40px;background-color:#F0F1F1 ;padding-top: 10px;">
     
      
    </center>

</section> -->
<!--footer template -->
<?php
include('../template/footer.php');?>
<!-- footer template end -->
</body>

<script type="text/javascript" src="../assets/js/intercity.js"></script>
<script type="text/javascript" src=<?php echo $GLOBALS['localhost'];?>utils/conf.js></script>
<script>
$('.app-link-form').submit(function(e){
              e.preventDefault();
              var phnno=$('#phone-no').val();
              var code=$('#country-code').val();
              $.ajax({
              url: localhost+"intercity/applink.php", 
              type:'get',
              data:{
                  phone:code+phnno
              },
              success: function(result) 
              {
                document.getElementById('app-link-success').innerHTML = "<br>Message sent. Check your phone to find a link to download the app. Happy riding! ";
                console.log("ajax passed");
             },
              error:function(){          
                $('#app-link-error').append('Your message is not sent because the SMS limit is reached. Please try again later.');
              }
          });
        });    
</script>
<style type="text/css">
@media screen and (max-width: 768px){
  .margin-none{
    margin-right: 0px;
  }
}
</style>

<script type="text/javascript">
 var business = document.getElementById('business');
  var cities = document.getElementById('cities');
business.setAttribute("style", "font-size:24px;margin-bottom:20px;");
cities.setAttribute("style", "font-size:24px;margin-bottom:20px;");
</script>
</html>
<?php
ob_end_flush();
?>
