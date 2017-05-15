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
  
  <?php
  include("../meta.php");
  ?>
  <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
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
  <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"> -->
  <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Raleway:100,600' rel='stylesheet' type='text/css'>
  <link href="../assets/css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
  <script src="../assets/js/thumbnail-slider.js" type="text/javascript"></script>

  <link rel="stylesheet" href=<?php echo $GLOBALS['localhost'] ?>assets/css/header.css>
  <link rel="stylesheet" href=<?php echo $GLOBALS['localhost'] ?>assets/css/footer.css>

  <link rel="stylesheet" type="text/css" href="../assets/css/styleloginnew.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="../assets/css/style.css" />
  <link type="text/css" rel="stylesheet" href="../assets/css/styleform.css" />
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
  <?php include_once("analyticstracking.php") ?>
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
            include("results/fb.php");
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
                  include("results/googlestart.php");
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
        <section  class="content-section container">
          <div class="global-header"></div> 
          <div class="container-fluid">
          <div class="row">
            <div class="col-sm-1 col-xs-2">
              <a  href=""><img src="<?php echo $GLOBALS['localhost'];?>assets/images/z_logo/logo.png" height="47" width="43"  style="margin-top:20px;margin-left:20px;" alt="">
              </a><!-- <span style="color:rgba(255,153,0, 1);font-size:30px;padding-top:20px">Zapplon</span> -->
            </div>
            <div class="col-sm-8 col-xs-6">
              <div class="tabbable-panel">
                <div class="tabbable-line">
                  <ul class="nav nav-tabs ">
                    <li class="active">
                      <a href="" style="background-color:transparent;">
                        Intercity </a>
                      </li>
                      <li>
                        <a href="../intracity"  style="background-color:transparent;">
                          Intracity </a>
                        </li>
                        <li>
                          <a href="../self_drive"  style="background-color:transparent;">
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
              // if(@!$_SESSION['isVerified'])
              // {

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
// }

//  verification end 
?>

<a i class="btn dropdown-toggle" style="height:47;width:43;margin-top:20px;float:right;background-color:transparent ;" data-target="#" data-toggle="dropdown" role="button" aria-expanded="false" style="background-color: transparent;">
  <img src="<?php echo $_SESSION['profilepic']; ?>" alt="User Image" class="img-circle special-img" />
  <span class="caret"></span>
</a>  
<ul  class="dropdown-menu" role="menu">
  <!-- <li><a href="#">Settings</a></li> -->
  <li>
    <a class="logout" style="cursor: pointer;">Logout</a>
  </li>
</ul>
<?php
}
?>
  </li>
  </ul>
  </div>
</div>
</div>
<div class="container-fluid">
<div class="row text-center" style="margin-top:7%">
 <div class="col-md-12 col-sm-12 hidden-xs">
 <img src="<?php echo $GLOBALS['localhost'];?>assets/images/z_logo/zapplon.png" height="80" width="300"  style="margin-top:20px;margin-left:20px;" alt="">
 <div style="margin-top:0%">

    <h1 style="font-size:24px;margin-left:30px;">Book any cab, any time</h1>
  </div>
  </div>
</div>
</div>
<div class="container-fluid">
<div class="row text-center">
  <div class="col-md-12" style="width:100%;margin-left:0%;bottom:0%;position:absolute;">
    <div class="formBox row text-center tab-content">
      <div class="travelType col-md-12">
        <ul>
          <li><button  data-toggle="tab" href="#form1" id="oneWay" class="one act-btn">One Way</button></li>
          <li><button  data-toggle="tab"  href="#form2" id="twoWay" class="two">Round Trip</button></li>
        </ul>
      </div>
      <div  class="oneWay col-md-12 text-center tab-pane active" id="form1" style="padding:5% 0 5% 10%;">
        <form id="form" journey="oneway" action="results" method="GET" class="row">
          <div style="visibility: none;display: none">
            <input type="text" name="journey" value="oneway" required>
            <input type="text" name="ret" value="NA" required>
          </div>

          <select required id="sel1" name="pickcity" onmousedown="this.value='';" onchange="jsFunction(this.value);" class="col-sm-4">
            <option value="" disabled selected hidden id="address">Pickup city</option>
            <option value="Delhi">Delhi</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Agra">Agra</option>
          </select>

          <select required id="sel2" name="dropcity" onmousedown="this.value='';" onchange="jsFunction2(this.value);" class="col-sm-4">
            <option value="" disabled selected hidden>Drop city</option>
            <option value="Delhi">Delhi</option>
            <option value="Chandigarh">Chandigarh</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Agra">Agra</option>
          </select>
          <input class="d1 col-sm-4" id="datepicker" required placeholder="&#xf073;  Departure" name="pickdate">

          <select required id="sel3" value="" name="picktime" class="col-sm-4">
            <option value="" disabled selected hidden>Pickup time</option>
            <option value="6:00">6:00 AM</option>
            <option value="6:30AM">6:30 AM</option>
            <option value="7:00AM">7:00 AM</option>
            <option value="7:30AM">7:30 AM</option>
            <option value="8:00AM">8:00 AM</option>
            <option value="8:30AM">8:30 AM</option>
            <option value="9:00AM">9:00 AM</option>
            <option value="9:30AM">9:30 AM</option>
            <option value="10:00AM">10:00 AM</option>
            <option value="10:30AM">10:30 AM</option>
            <option value="11:00AM">11:00 AM</option>
            <option value="11:30AM">11:30 AM</option>
            <option value="12:00AM">12:00 PM</option>
            <option value="12:30AM">12:30 PM</option>
            <option value="01:00PM">1:00 PM</option>
            <option value="01:30PM">01:30 PM</option>
            <option value="02:00PM">2:00 PM</option>
            <option value="02:30PM">2:30 PM</option>
            <option value="03:00PM">3:00 PM</option>
            <option value="03:30PM">3:30 PM</option>
            <option value="04:00PM">4:00 PM</option>
            <option value="04:30PM">4:30 PM</option>
            <option value="05:00PM">5:00 PM</option>
            <option value="05:30PM">5:30 PM</option>
            <option value="06:00PM">6:00 PM</option>
            <option value="06:30PM">6:30 PM</option>
            <option value="07:00PM">7:00 PM</option>
            <option value="07:30PM">7:30 PM</option>
            <option value="08:00PM">8:00 PM</option>
            <option value="08:30PM">8:30 PM</option>
            <option value="09:00PM">9:00 PM</option>
            <option value="09:30PM">9:30 PM</option>
            <option value="10:00PM">10:00 PM</option>
            <option value="11:30PM">10:30 PM</option>
            <option value="11:00PM">11:00 PM</option>
            <option value="11:30PM">11:30 PM</option>
            <option value="00:00AM">00:00 </option>
            <option value="00:30AM">00:30 AM</option>
            <option value="01:00AM">1:00 AM</option>
            <option value="01:30AM">1:30 AM</option>
            <option value="02:00AM">2:00 AM</option>
            <option value="02:30AM">2:30 AM</option>
            <option value="03:00AM">3:00 AM</option>
            <option value="03:30AM">3:30 AM</option>
            <option value="04:00AM">4:00 AM</option>
            <option value="04:30AM">4:30 AM</option>
            <option value="05:00AM">5:00 AM</option>
            <option value="05:30AM">5:30 AM</option>
          </select>
          <input id="datepicke" class="d2 col-sm-4" placeholder="&#xf073;  Return" disabled>

          <select required id="sel4" value="" name="num" class="col-sm-4">
            <option value="" disabled selected hidden>Passengers</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
          <button type="submit" id="submit"  value="Search" style="width:120px;padding:0px 0px 0px 10px !important;" class="col-sm-12 btn btn-info" onclick="ga('send', 'event', 'button', 'search', 'oneway');" />
          <span class="glyphicon glyphicon-refresh spinning"></span>
          <i class="fa fa-search" aria-hidden="true"> Search</i>
         </button>
      </form>
    </div>
    <div class="formComplete twoWay tab-pane twowayform" id="form2" style="padding:5% 0 7.9% 10%;">
      <form id="form2" journ="roundway" action="results" style="margin-left: 0%;margin-right:0%;width:100%;">
        <div style="visibility: none;display: none">
          <input type="text" name="journey" value="roundway" required></input>
        </div>
        <select required id="sl1" name="pickcity" onmousedown="this.value='';" onchange="jsFunctionround(this.value);" class="col-sm-4" >
          <option value="" disabled selected hidden id="addround">Pickup city</option>
          <option value="Delhi">Delhi</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Jaipur">Jaipur</option>
          <option value="Agra">Agra</option>
        </select>
        <select required id="sl2" name="dropcity" onmousedown="this.value='';" onchange="jsFunctionround2(this.value);" class="col-sm-4" >
          <option value="" disabled selected hidden>Drop city</option>
          <option value="Delhi">Delhi</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Jaipur">Jaipur</option>
          <option value="Agra">Agra</option>
        </select>

        <input  required id="datepick" class="dl1 col-sm-4" placeholder="&#xf073;  Departure"  name="pickdate">

        <select required id="sl3" name="picktime" class="col-sm-4">
          <option value="" disabled selected hidden>Pickup time</option>
          <option value="01:00">1:00 </option>
          <option value="01:30">1:30 </option>
          <option value="02:00">2:00 </option>
          <option value="02:30">2:30 </option>
          <option value="03:00">3:00 </option>
          <option value="03:30">3:30 </option>
          <option value="04:00">4:00 </option>
          <option value="04:30">4:30 </option>
          <option value="05:00">5:00 </option>
          <option value="05:30">5:30 </option>
          <option value="6:00">6:00 </option>
          <option value="6:30">6:30 </option>
          <option value="7:00">7:00 </option>
          <option value="7:30">7:30 </option>
          <option value="8:00">8:00 </option>
          <option value="8:30">8:30 </option>
          <option value="9:00">9:00 </option>
          <option value="9:30">9:30 </option>
          <option value="10:00">10:00 </option>
          <option value="10:30">10:30 </option>
          <option value="11:00">11:00 </option>
          <option value="11:30">11:30 </option>
          <option value="12:00">12:00 </option>
          <option value="12:30">12:30 </option>
          <option value="13:00">13:00 </option>
          <option value="13:30">13:30 </option>
          <option value="14:00">14:00 </option>
          <option value="14:30">14:30 </option>
          <option value="15:00">15:00 </option>
          <option value="15:30">15:30 </option>
          <option value="16:00">16:00 </option>
          <option value="16:30">16:30 </option>
          <option value="17:00">17:00 </option>
          <option value="17:30">17:30 </option>
          <option value="19:00">19:00 </option>
          <option value="19:30">19:30 </option>
          <option value="20:30">20:30 </option>
          <option value="20:00">20:00 </option>
          <option value="21:30">21:30 </option>
          <option value="21:00">21:00 </option>
          <option value="22:30">22:30 </option>
          <option value="22:00">22:00 </option>
          <option value="23:00">23:00 </option>
          <option value="23:30">23:30 </option>
          <option value="23:59">23:59 </option>
        </select>

        <input class="dl2 col-sm-4" placeholder="&#xf073;  Return" id="datepic" name="ret" required>

        <select required id="sl4" value="" name="num" class="col-sm-4">
          <option value="" disabled selected hidden>Passengers</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
        </select>
        <button type="submit" id="twowaysubmit" value="Search" style="width:120px;padding:0px 0px 0px 10px !important;" class="col-sm-12 btn btn-info" onclick="ga('send', 'event', 'button', 'search', 'roundway');"/>
        <span class="glyphicon glyphicon-refresh spinning"></span>
        <i class="fa fa-search" aria-hidden="true"> Search</i>
        </button>
      </form>
    </div>
    <!--end of second form complete-->
    <!--</div><!--end of tab content-->
  </div><!--rest other divs-->

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
<script type="text/javascript" src="../utils/conf.js"></script>

<script src="../assets/js/all.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="../assets/js/modal.js" ></script>
<!-- <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBXxA7bvg7bJMLUaDC6p4bTB6lMm7eBHVM"></script> -->
<script type="text/javascript" src="../assets/js/geolocation.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script type="text/javascript">
$(document).ready(
  function(){ 
    $("#datepicker").datepicker();
    $("#datepicke").datepicker();
    $("#datepick").datepicker();
    $("#datepic").datepicker();
  });
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
