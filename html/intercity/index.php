<?php
session_start();
ob_start();
$_SESSION['header']="1";
error_reporting(E_ALL & ~E_NOTICE) ;
ini_set("display_errors", "1");
include("../utils/conf.php");
require_once('../utils/Http2.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Zapplon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
  <link type="text/css" rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/style1.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/stylelogin.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <style type="text/css">

  * {
    margin: 0;
    padding: 0;
  }



  .parallax-bg-1{
    padding: 300px 0;
    background-image: url(../assets/images/Cab.jpg);
    background-size: cover;
    background-position: center;
    max-width: 100%;
    max-height: 100%;
    margin: auto;
    overflow: auto;
    background-attachment: fixed;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }

  .who{
    background-image: url(../assets/images/web_bg.jpg);
    background-size: cover;
    background-position: center;
    max-width: 100%;
    max-height: 100%;
    margin: auto;
    overflow: auto;
    background-attachment: fixed;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }
  .parallax-bg-1{
    padding: 300px 0;
    background-image: url(../assets/images/Cab.jpg);
    background-size: cover;
    background-position: center;
    max-width: 100%;
    max-height: 100%;
    margin: auto;
    overflow: auto;
    background-attachment: fixed;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }
  .who{
    background-image: url(../assets/images/web_bg.jpg);
    background-size: cover;
    background-position: center;
  }


  h4,h1,h3{
    color:#ff9900;
    font-family: avenir;
  }

  .div_hover { 
    background-color: #3b5998; 
    text-decoration: none;
  }

  .div_hover:hover {
    background-color: #2d477e;
    text-decoration: none;
  }

  .cabs{
    background-color:white;
    max-width: 100%;
    max-height: 100%;
    -webkit-transition: all 0.2s ease;
    -moz-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }
  .nav{
    display: inline-block;
    word-spacing: 4px;
    padding: 0 7em 2em 0;
    border-width: 2px;
  }
  #nav a {
    text-decoration: none;
    font-family: avenir;
    font-size: 24px;
    font-style: normal;
    font-weight: normal;
    text-transform: normal;
    letter-spacing: normal;
    line-height: 1.3em;
  }
} 
.font{
  font-family: avenir;
  font-size: 16px;
  color:white;
}
h2,h6{
  color:#ff9900;
}

footer{
  background-color: #262933;
  width: 100%;
}

#wow{
  width: 100%;
  height: auto;
  background-size: 100% auto !important;
}

.font{
  font-family: avenir;
  font-size: 16px;
  color:white;
}
h2,h6{
  color:#ff9900;
}
a:hover{
  color:orange;
}

.google-container{
  width: 500px;
  height: 400px;
}
.byline {
 color: #9799a7;
 font-family: Georgia, Times, "Times New Roman", serif;
 font-style: italic;
}

</style>
<!-- FB like and share -->
<style>
#inner {
  width: 100%;
  margin: 0 auto; 
}

.google-container{
  width: 500px;
  height: 400px;
}
.byline {
 color: #9799a7;
 font-family: Georgia, Times, "Times New Roman", serif;
 font-style: italic;
 margin-bottom: 18px;
}
.grayscale2{
  background-color: #676767;
  background-size: cover;
  background-position: center;
  min-width: 992px;  
  min-height: 150px;
}

</style>
<!-- FB like and share -->
<style>
#inner {
  width: 100%;
  margin: 0 auto; 
}
.modal-body{
  width: 500px;height: 220px;
}
.modal-header{
  height: 60px; 
  border-bottom: 0px;
}
.modal-content{
  width: 600px;
}
</style>
</head>

<body>
  <div class="container">
    <!-- Trigger the modal with a button -->
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top">
      <div id="#page-top" class="container">
        <div class="navbar-header pull-left">
          <a class="navbar-brand page-scroll" href="http://zapplon.com">
            <span class="brand-logo"><img src= "../assets/images/logo.png" width="43" height="47" alt="Zapplon"/></span>
          </a>
        </div>
        <div class="main-nav pull-right">
          <div class="button_container toggle">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
          </div>
        </div>
      </div>
    </nav>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <header class="popupHeader">
          <span class="header_title">SUBSCRIBE</span>
          <span class="modal_close" data-dismiss="modal"><i class="fa fa-times"></i></span>
        </header>     
      </div>
      <div class="modal-body">

        <?php
        include("results/fb.php"); 
        ?>
        <div class="social_login" >
          <div class="inc">
            <a href="<?php echo $loginUrl; ?>" class="social_box fb ">
              <span class="icon"><i class="fa fa-facebook"></i></span>
              <span class="icon_title fb-signup">SUBSCRIBE WITH FACEBOOK</span>
            </a>
            <?php

            include("googlestart.php"); 
            ?> 
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

    <!-- Modal -->
    <section id="coming_soon" class="content-section">
     <div class="container">
      <div class="row text-center">

        <div class="col-md-12 text-center">
          <h2>Intercity Cab Booking @ Zapplon -> launching very soon!</h2>
          <p>Stay tuned. We will reach to you as soon as possible.</p>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 text-center">
         <img src="../assets/images/launcher.svg" class="img-responsive" align="middle" width="100%" height="100%">
       </div>
     </div>
     <br />
     <div class="row text-center " style="padding-bottom: 10px;">
      <?php
      if(@!$_SESSION['token'])
      {     
        ?>   
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">SUBSCRIBE</button>
        <?php
      }
      else
      {
        ?>
  <!--
<a href="results/logout.php">  <button type="button"  class="btn btn-info btn-lg"  value="logout" id="loginbutton" class="logout">Logout</button></a>
-->
<span style="font-size: 20px;color: #ED6347">
  <strong>Thankyou for subscribing.</strong>

</span>
<?php
$_SESSION['token']=NULL;
$_SESSION['access_token']=NULL;
unset($_SESSION['token']);
unset($_SESSION['access_token']);
}

?>

<!-- Modal -->

<br />
</section>  <!--this is the marker-->
<?php
//include("googlestart.php"); 
?>
</div>
<footer>
  <div class="copynote">

    <div class="row text-center">
      <div class="col-md-12 social segment">
        <h4><font color="#9a9a9a">Stay Connected</font></h4>
        <a href="https://www.facebook.com/Zapplon-412520788943370/?fref=ts" target="_blank"><i class="fa fa-facebook fa-3x"></i></a>
        <a href="https://www.linkedin.com/company/10168009?trk=prof-exp-company-name" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a>
      </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

    <div align="middle" id="inner" class="fb-like" data-href="https://www.facebook.com/zapplon1/?fref=ts" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true">
    </div>
    <!-- end -->
    <div align="middle" id="inner">
      <!-- Twitter Share a link -->
      <span align="middle"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://zapplon1.com/" data-via="Zapplon" data-size="large" data-related="Zapplon" data-hashtags="CabBooking">Tweet</a></span>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

      <!-- Twitter Follow Zapplon -->  
      <a href="https://twitter.com/Zapplon" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @Zapplon</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>

    <center>
      <a href="cities.html" target="_blank">Cities</a>&nbsp; &nbsp;
      <a href="https://zapplon.wordpress.com/" target="_blank">Blog</a>
    </center>
    <div class="row">
      <div class="col- text-center">
        <a href="privacy.html" target="_blank">Privacy policy</a>
        <!-- /.col-md-12 -->
        <div class="col-text-center">
          <nav>
            &copy; 2015. Zapplon. All rights reserved.
          </nav>
        </div><!-- /.col-md-12 -->
        <div class="col-text-center">
         <a href="terms.html" target="_blank">Terms &amp; conditions</a>
       </div><!-- /.col-md-12 -->
     </div>
   </div><!-- /.row -->

 </div><!-- /.copynote -->
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="../assets/js/modal.js" type="text/javascript"></script> 
</body>
</html>
<?php
ob_end_flush();
?>