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
    /*margin-left: 60px;*/
  }
  /*@media (min-width: 992px) {
  .bgimg  {
    background-image: url("../assets/images/product/phone2.png");
    height: 500px;
    width: 100%;
    background-repeat: no-repeat; 
    background-size:contain; 
    
  }
}*/
  </style>
  <title>Zapplon</title>
  <?php
  include("../meta.php");
  ?>
  <script type="text/javascript" src="../assets/js/jquery.min.js"></script> 
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/plugins/wow.min.js"></script>
<script src="../assets/js/plugins/owl.carousel.min.js"></script>
<script src="../assets/js/plugins/jquery.parallax-1.1.3.js"></script>
<script src="../assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="../assets/js/plugins/jquery.mb.YTPlayer.min.js"></script>
<script src="../assets/js/plugins/jquery.countTo.js"></script>
<script src="../assets/js/plugins/jquery.inview.min.js"></script>
<script src="../assets/js/plugins/pace.min.js"></script>
<script src="../assets/js/plugins/jquery.easing.min.js"></script>
<script src="../assets/js/plugins/jquery.validate.min.js"></script>
<script src="../assets/js/plugins/additional-methods.min.js"></script> 
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Raleway:100,600' rel='stylesheet' type='text/css'>
  <link href="../assets/css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
  <script src="../assets/js/thumbnail-slider.js" type="text/javascript"></script>

  <link rel="stylesheet" href=<?php echo $GLOBALS['localhost'] ?>assets/css/header.css>
  <link rel="stylesheet" href=<?php echo $GLOBALS['localhost'] ?>assets/css/footer.css>

  <link rel="stylesheet" type="text/css" href="../assets/css/styleloginnew.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="../assets/css/style.css" />
  <link type="text/css" rel="stylesheet" href
  ="../assets/css/styleform.css" />
  <link type="text/css" rel="stylesheet" href="../assets/css/app-style.css" />
  <link href="../assets/css/hallooou.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">

  <script type="text/javascript" src="../assets/js/disable-city.js"></script>
  <script type="text/javascript" src="../assets/js/intercity.js"></script>
<style type="text/css">
  /***
Bootstrap Line Tabs by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

/* Tabs panel */
.tabbable-panel {
  /*border:1px solid #eee;*/
  padding: 10px;
}

/* Default mode */
.tabbable-line > .nav-tabs {
  border: none;
  margin: 0px;
  margin-left:0%;
  margin-top: 20px; 
}
.tabbable-line > .nav-tabs > li {
  margin-right: 40px;
  /*width:130px;*/
}
.tabbable-line > .nav-tabs > li > a {
  border: 0;
  margin-right: 0;
  color: rgba(255,153,0,1);
}
.tabbable-line > .nav-tabs > li > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open, .tabbable-line > .nav-tabs > li:hover {
  border-bottom: 4px solid rgba(255,153,0,1);
}
.tabbable-line > .nav-tabs > li.open > a, .tabbable-line > .nav-tabs > li:hover > a {
  border: 0;
  background: none !important;
  color: white;
}
.tabbable-line > .nav-tabs > li.open > a > i, .tabbable-line > .nav-tabs > li:hover > a > i {
  color: #a6a6a6;
}
.tabbable-line > .nav-tabs > li.open .dropdown-menu, .tabbable-line > .nav-tabs > li:hover .dropdown-menu {
  margin-top: 0px;
}
.tabbable-line > .nav-tabs > li.active {
  border-bottom: 4px solid rgba(255,153,0,1);
  position: relative;
  background-color: transparent !important;
  padding-bottom:4px;
}
.tabbable-line > .nav-tabs > li.active > a {
  border: 0;
  color: white;
}
.tabbable-line > .nav-tabs > li.active > a > i {
  color: #404040;
}
.tabbable-line > .tab-content {
  margin-top: -3px;
  /*background-color: #fff;*/
  border: 0;
  border-top: 1px solid #eee;
  padding: 15px 0;
}
.portlet .tabbable-line > .tab-content {
  padding-bottom: 0;
}

/* Below tabs mode */

.tabbable-line.tabs-below > .nav-tabs > li {
  border-top: 4px solid transparent;
}
.tabbable-line.tabs-below > .nav-tabs > li > a {
  margin-top: 0;
}
.tabbable-line.tabs-below > .nav-tabs > li:hover {
  border-bottom: 0;
  border-top: 4px solid #fbcdcf;
}
.tabbable-line.tabs-below > .nav-tabs > li.active {
  margin-bottom: -2px;
  border-bottom: 0;
  border-top: 4px solid #f3565d;
}
.tabbable-line.tabs-below > .tab-content {
  margin-top: -10px;
  border-top: 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 15px;
}
</style>
  <!-- Plugin stylesheets -->
<link href="../assets/css/plugins/owl.carousel.css" rel="stylesheet">
<link href="../assets/css/plugins/owl.theme.css" rel="stylesheet">
<link href="../assets/css/plugins/owl.transitions.css" rel="stylesheet">
<link href="../assets/css/plugins/animate.css" rel="stylesheet">
<link href="../assets/css/plugins/magnific-popup.css" rel="stylesheet">
<link href="../assets/css/plugins/jquery.mb.YTPlayer.min.css" rel="stylesheet">

<link rel='icon' href='../assets/images/favicon.ico' type='image/x-icon'/ >
<link rel="stylesheet" href="css/reset.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/flexslider.css" />
</head>
<body style="padding-top:0px !important;">
  
  <!-- Navigation -->
                
  <div class="">

    <div class="modal fade" id="verifyModal" role="dialog">
      <div class="modal-dialog" style="height: 150px;">

        
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title  text-center"> Verification </h4>
          </div>
          <div class="modal-body">
            <div id="phoneform">
              <form class="phoneverify row">
                <input type="text" id="phone"  name="phone" placeholder="Enter your NUMBER" minlength=10 maxlength=10 required class="col-xs-4 col-sm-offset-4 col-xs-offset-4  col-sm-4">
                <button type="submit" value="Get Pin" class=" btn btn-info col-xs-offset-4  col-xs-4 col-sm-offset-4 col-sm-4" style="margin-top: 10px;">Get Pin</button>
              </form>
              <div id="error">
              </div>
            </div>   
          </div>

        </div>

      </div>
    </div>

    <!-- header template -->
    <!-- Navigation -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <header class="text-center pophead1">
              <span id="login">LOGIN</span><br>
              <span >NOT REGISTERED?<a href="#" id="login_form"> SIGN UP</a> </span>
              <span class="modal_close" data-dismiss="modal"><i class="fa fa-times cross"></i></span>
            </header>
            <header class="text-center pophead2" style="display: none;">
              <span id="signup">SIGN UP</span><br>
              <span >ALREADY REGISTERED?<a href="#" id="signup_form" > LOG IN</a> </span>
              <span class="modal_close" data-dismiss="modal"><i class="fa fa-times cross"></i></span>
            </header>
          </div>
          <div class="modal-body">
            <?php
            include("../intercity/results/fb.php");
            ?>
            <section class="popupBody row">
              <div class="user_logi col-md-6 col-sm-6  col-xs-12">

                <form  id="user_login_form">
                  <input type="text" id="email" required name="email" placeholder="EMAIL" required>
                  <br />
                  <input type="text" id="pwd" required name="password" placeholder="PASSWORD" required>
                  <br />
                  <div class="">
                    <div><input type="submit" value="LOG IN" class="button btn btn_red">
                    </div>
                  </div>
                </form>

                <a href="#" class="forgot_password" >Forgot password ?</a>
                <span id="user_login_result"></span>
              </div>

              <div class="user_register col-md-6 col-sm-6  col-xs-12 " id="reg">

                <form id="user_register_form">
                  <input type="text" name="username" id="name" placeholder="USERNAME" required>
                  <br />
                  <input type="text" name="email" id="emai" placeholder="EMAIL" required>
                  <br />
                  <input type="text" name="password" id="pw" placeholder="Password" required>
                  <br />
                  <div class="action_btns">
                    <div><input type="submit" value="SIGN UP" class="button btn btn_red">
                    </div>
                  </div>
                </form>
                <span id="user_register_result"></span>
              </div>

              <div style="display: none;" class="forgot col-md-6 col-sm-6  col-xs-12 " id="forgot_in">
                <div id="forform">
                  <form  id='forgot_form'>
                    <h3 class="text-center">Forgot Password?</h3>
                    <h6 id="forgot-msg">Enter your email address and we will <br>send you a verification code</h6>
                    <input type="text" id="email_forgot_form" name="email" placeholder="EMAIL" required>
                    <br />
                    <div class="action_btns">
                      <div class="one_half last"><input type="submit" value="EMAIL RESET CODE" class="button expanded btn btn_red" required></div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="social_login col-md-6 col-sm-6 col-xs-12  " >
                <div class="inc">
                  <a  onClick=window.open("<?php echo $loginUrl; ?>","Ratting","width=1050,height=570,left=150,top=0,toolbar=0,status=0,"); class="social_box fb">
                    <span class="icon"><i class="fa fa-facebook" style="font-size:25px"></i></span>
                    <span class="icon_title fb-signup" >LOG IN WITH FACEBOOK</span>
                  </a>
                  <?php
                  require_once ('../utils/google/autoload.php');
                  include("../intercity/results/googlestart.php");
                  ?>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <!-- header file template -->
    <!-- Home Section -->
  <section id="home" class="relative">  
    <div id="slides">
      <div class="slides-container relative">
        <!-- Slider Images -->
        <div class="image2"></div>
                <div class="image1"></div>
        <div class="image3"></div>
                <div class="image4"></div>
         <!-- End Slider Images -->  
      </div>
     
    </div><!-- End Home Slides -->
    <div class="v2 absolute">
      <!-- Auto Typocraphic Texts -->
       <section class="content-section container">
    <div class="global-header"></div> 
    <div class="row" style="margin-right: -10px;margin-left: 10px;">
    <div class="col-sm-1 col-xs-2">
    <a  href="../"><img src="<?php echo $GLOBALS['localhost'];?>assets/images/z_logo/logo.png" height="47" width="43"  style="margin-top:20px;margin-left:20px;" alt="">
        </a><!-- <span style="color:rgba(255,153,0, 1);font-size:30px;padding-top:20px">Zapplon</span> -->
     </div>
     <div class="col-sm-8 col-xs-6">
       <!--
Bootstrap Line Tabs by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
    

      <div class="tabbable-panel">
        <div class="tabbable-line">
          <ul class="nav nav-tabs ">
            <li>
              <a href="../intercity" style="background-color:transparent;">
              Intercity </a>
            </li>
            <li class="active">
              <a href=""  style="background-color:transparent;">
              Intracity </a>
            </li>
            <li>
              <a href="../self_drive" style="background-color:transparent;">
              Self Drive </a>
            </li>
            <!-- <li>
              <a href="../drivers_on_demand" style="background-color:transparent;width:180px;">
              Drivers on Demand </a>
            </li> -->
          </ul>
        </div>
      </div>
    

     </div>
        <div class="col-sm-3 col-xs-3">

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown" style="margin-right: 30px;">

            <?php
            if(@!$_SESSION['token'])
            {     
              ?>   
              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal" style="font-size:15px;margin-top: 20px;background-color:rgba(255,153,0,1);border-color:#ffcf00;">LOGIN</button>
              <div class="main-nav pull-right" style="margin-top:20px;margin-left:20px;">
                        <div class="button_container toggle">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>
                    </div>
                    <div class="overlay" id="overlay">
                        <nav class="overlay-menu">
                            <ul>
                                <li><a href="#why_choose">Why Choose Zapplon</a></li>
                                <li><a href="#get_app">Get the Zapplon App</a></li>
                                <li><a href="#we_spotted">We spotted in</a></li>
                                <li><a href="#our_achievements">Our Achievements</a></li>
                            </ul>
                        </nav>
                    </div>
              <?php
            }
            else{


        // Verifying user 
              if(@!$_SESSION['isVerified'])
              {

                $r = new HttpRequest("post", $GLOBALS['server_url']."appConfig/isVerified" , array(
                  "client_id" => $GLOBALS['client_id'],
                  "app_type" => $GLOBALS['app_type'],
                  "access_token" => $_SESSION['token']
                  ));
                if ($r->hasError()) {
                  echo $r->getError();
                  echo "sorry, an error occured";
        //echo(json_encode(false));
                } 
                else {

                  $js = json_decode($r->getResponse());
                  $res=$js->response;
                  if($res[0]->value == '0')
                  {
                   echo "<script> 
                   $('#verifyModal').modal({
                    backdrop: 'static',
                    keyboard: true
                  });
$('#verifyModal').modal('show'); </script>";
}
}
}

//  verification end 
?>
<a i class="btn dropdown-toggle" style="float:right;background-color:transparent ;" data-target="#" data-toggle="dropdown" role="button" aria-expanded="false" style="background-color: transparent;">
  <img src="<?php echo $_SESSION['profilepic']; ?>" alt="User Image" class="img-circle special-img" />
  <span class="caret"></span>
</a>  
<ul  class="dropdown-menu" role="menu">
 <!--  <li><a href="#">Settings</a></li> -->
  <li>
    <a class="logout" style="cursor: pointer;">Logout</a>
  </li>
</ul>
<?php
}
?></div>
    </div>
    <div class="contanier">
   <div class="row">
     <div class="col-md-3 hidden-sm hidden-xs bgimg" style="margin-top:6%;margin-left:6%;">
        <div id="screens" style="width:135px;left:92px;top:60px;margin:0px;" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src=<?php echo $GLOBALS['localhost'] ?>assets/images/product/screen1.png class="center-block img-responsive feature_image"  style="width=100%; height=100%;"/>
          </div>
          <div class="item">
           <img src=<?php echo $GLOBALS['localhost'] ?>assets/images/product/screen2.PNG class="center-block img-responsive feature_image"style="width=100%; height=100%;"/>
         </div>
         <div class="item">
          <img src=<?php echo $GLOBALS['localhost'] ?>assets/images/product/screen3.png class="center-block img-responsive feature_image" style="width=100%; height=100%;"/>
        </div>
        <div class="item">
          <img src=<?php echo $GLOBALS['localhost'] ?>assets/images/product/screen4.png class="center-block img-responsive feature_image"style="width=100%; height=100%;"/>
        </div>

      </div>
    </div>
  
     </div>
   <div class="col-sm-12 col-md-4 col-xs-12 text-center" style="margin-left:2%;margin-top:7%;">
    <div class="text-center" style="">
     <img src="<?php echo $GLOBALS['localhost'];?>assets/images/z_logo/zapplon.png" height="80" width="300"  style="margin-top:20px;margin-left:20px;" alt="">
     </div>

    <div class="text-center">
        <div style="margin-top:0%;">
          
          <h1 style="font-size:24px;margin-left:30px;">Book any cab, any time</h1>
        </div>
    </div>
      <div class="text-center">
        <div style="margin-top:2%;">

          <a  style="margin-left:30px;" target="_blank" href="https://play.google.com/store/apps/details?id=com.application.zapplon&referrer=1"><img src=<?php echo $GLOBALS['localhost'] ?>assets/images/play.png height="50" width="150"></a> 
          <img style="margin-left:30px;" src=<?php echo $GLOBALS['localhost'] ?>assets/images/coming_soon.png height="50" width="150">
        </div>

    </div>
    </div>
    <div class="hidden-sm col-md-3 hidden-xs bgimg text-center" style="margin-top:6%;">

      <div id="screens" style="width:43%;left:29%;top:15%;margin:0px;" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner" role="listbox">
          <div class="item">
            <img src=<?php echo $GLOBALS['localhost'] ?>assets/images/product/screen1.png class="center-block img-responsive feature_image"  style="width=100%; height=100%;"/>
          </div>
          <div class="item active">
           <img src=<?php echo $GLOBALS['localhost'] ?>assets/images/product/screen2.PNG class="center-block img-responsive feature_image"style="width=100%; height=100%;"/>
         </div>
         <div class="item">
          <img src=<?php echo $GLOBALS['localhost'] ?>assets/images/product/screen3.png class="center-block img-responsive feature_image" style="width=100%; height=100%;"/>
        </div>
        <div class="item">
          <img src=<?php echo $GLOBALS['localhost'] ?>assets/images/product/screen4.png class="center-block img-responsive feature_image"style="width=100%; height=100%;"/>
        </div>

      </div>
    </div>
    </div>
    </div>
</div>
    <br />
    <!-- Modal -->

    <br />
  </section>  
    </div><!-- End V2 area -->
  </section><!-- End Home Section -->
  

  
  <?php
include('../template/features.php');?>

<?php
include('../template/zapplon-app.php');?>

<?php
include('../template/spotted-in.php');?>

<!--footer template -->

<?php
include('../template/footer.php');?>
<!-- footer template end -->
</body>
<!-- JS Files -->
  
  <script type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>
  
  <script type="text/javascript" src="../js/jquery.appear.js"></script>
  <script type="text/javascript" src="../js/waypoints.min.js"></script>
  <script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>
  <script type="text/javascript" src="../js/modernizr-latest.js"></script>

  <script type="text/javascript" src="../js/jquery.parallax-1.1.3.js"></script>
  <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="../js/jquery.superslides.js"></script>
  <script type="text/javascript" src="../js/jquery.flexslider.js"></script>
  <script type="text/javascript" src="../js/jquery.isotope.js"></script>

  <script type="text/javascript" src="../js/jquery.slabtext.js"></script>
  <script type="text/javascript" src="../js/plugins.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src=<?php echo $GLOBALS['localhost'];?>utils/conf.js></script>
<script src="../assets/js/all.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="../assets/js/modal.js" ></script>
<!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBXxA7bvg7bJMLUaDC6p4bTB6lMm7eBHVM"></script> -->
<script type="text/javascript" src="../assets/js/geolocation.js"></script>
 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script type="text/javascript">
$("#datepicker").datepicker();
$("#datepicke").datepicker();
$("#datepick").datepicker();
$("#datepic").datepicker();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="../assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../assets/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- use jssor.slider.debug.js instead for debug -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="jquery.bxSlider.js"></script>
    <script type="text/javascript">
    var $ = jQuery.noConflict();
      $(document).ready(function(){
        $('#slider').bxSlider({
        ticker: true,
        tickerSpeed: 5000,
      tickerHover: true
      });
      });

var footer = document.getElementById('footer');
var padding = document.getElementById('padding');
footer.setAttribute("style", "padding-bottom:20px;");
padding.setAttribute("style", "padding-left:10px;");
    </script>
</script>
<!-- Custom JavaScript -->
<script src="../assets/js/plugins/wow.min.js"></script>
<script src="../assets/js/plugins/owl.carousel.min.js"></script>
<script src="../assets/js/plugins/jquery.parallax-1.1.3.js"></script>
<script src="../assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script src="../assets/js/plugins/jquery.mb.YTPlayer.min.js"></script>
<script src="../assets/js/plugins/jquery.countTo.js"></script>
<script src="../assets/js/plugins/jquery.inview.min.js"></script>
<script src="../assets/js/plugins/pace.min.js"></script>
<script src="../assets/js/plugins/jquery.easing.min.js"></script>
<script src="../assets/js/plugins/jquery.validate.min.js"></script>
<script src="../assets/js/plugins/additional-methods.min.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoVKfEihX__NdMwdDysA6Vve6PE9Ierj4"></script>
<script src="../assets/js/hallooou.js"></script>

</body>

<style type="text/css">
@media screen and (max-width: 768px){
  .margin-none{
    margin-right: 0px;
  }
}
</style>

</html>
<?php
ob_end_flush();
?>
