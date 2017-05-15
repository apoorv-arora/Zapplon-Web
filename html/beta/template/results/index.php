<?php
session_start();
$_SESSION['header']="2";
error_reporting(E_ALL & ~E_NOTICE) ;
ini_set("display_errors", "0");
include("../../utils/conf.php");
include('../../utils/Http2.php');
if($_GET['pickcity']!=null and $_GET['dropcity']!=null and $_GET['pickdate']!=null and $_GET['picktime']!=null and $_GET['ret']!=null and $_GET['num']!=null and $_GET['journey']!=null)
{

    // $_SESSION['ret']=$_GET['ret'];
    $constant=$_GET['ret'];
    if($_GET['journey']=="oneway"){
      $cnv2="";
      $returndate="";
    }
    else{
      $returndate=$_GET['ret'];
      $cnv2=date_create($returndate);
    $cnv2= date_format($cnv2, 'Y-m-d H:i:s');
    $cnv2= strtotime($cnv2)*1000;
    }
    $pickupcity=$_GET['pickcity'];
    $dropcity=$_GET['dropcity'];
    $pickupdate=$_GET['pickdate'];
    $pickuptime=$_GET['picktime'];
    $noofpas=$_GET['num'];
    $journey=$_GET['journey'];
    $cnv=date_create($pickupdate." ".$pickuptime);
    $cnv= date_format($cnv, 'Y-m-d H:i:s');
    $cnv= strtotime($cnv)*1000;
    
}
else
{
    $url=$GLOBALS['localhost']."intercity/";

    header('Location:'.$url);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zapplon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
  <link rel="stylesheet" href=<?php echo $GLOBALS['localhost'] ?>assets/css/header.css>
  <link rel="stylesheet" href=<?php echo $GLOBALS['localhost'] ?>assets/css/footer.css>
  <link rel="stylesheet" type="text/css" href="../../assets/css/styleloginnew.css">
  <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
  <script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="../../assets/css/style.css" />
  <link type="text/css" rel="stylesheet" href="../../assets/css/styleform.css" />
  <link type="text/css" rel="stylesheet" href="../../assets/css/stylecabs.css" />
  <script type="text/javascript" src="../../assets/js/disable-city.js"></script>
  <script type="text/javascript" src="../../assets/js/modal.js" ></script>
  <script type="text/javascript" src="../../assets/js/intercity.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    var resultret=function(){
      if($('#sel5').val()==="roundway"){
        $('#sel5 > option:first-child').text('Round Trip');
        document.getElementById("onewayreturn").disabled = true;
        document.getElementById("datepicke").disabled = false;
      }
      else{
        document.getElementById('datepicke').value="";
        $('#sel5 > option:first-child').text('One Way');
        document.getElementById("onewayreturn").disabled =false;
        document.getElementById("datepicke").disabled = true;
      }
    };
    resultret();
    $('#sel5').change(function(){
      resultret();
    });
  });

  </script>
  <style media="screen">
    #coming_soon{
      height: 0%;
    }
    .main{
      margin-top: 2%;
    }
    @media screen and (max-width: 768px) {
      .main{height: 360px !important;}
      #submit,#twowaysubmit{width: 80% !important;}
    }
    @media screen and (max-width: 992px) {
      .main{height: 200px}
    }
    #form1 {
    padding: 30px 12% 30px 0;
    margin-top: -1px;
}
.main {
    margin-left: 0%;
    margin-top: 0%;
    width: 98%;
    height: 70px;
}
@media screen and (min-width: 992px) {
#submit, #twowaysubmit{
  width:8%;
}
}
  </style>
</head>
<body>
<?php include_once("../analyticstracking.php") ?>
<!--this is the marker-->
<div class="">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <header class="text-center pophead1">
          <span id="login">LOGIN</span><br>
          <span >NOT REGISTERED?<a href="#" id="login_form" > SIGN UP</a> </span>
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
            include("fb.php");
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
              <input type="text" id="email_forgot_form" name="email" placeholder="EMAIL">
              <br />
              <div class="action_btns">
                <div class="one_half last"><input type="submit" value="EMAIL RESET CODE" class="button expanded btn btn_red"></div>
              </div>
              </form>
              </div>
            </div>

            <div class="social_login col-md-6 col-sm-6 col-xs-12  " >
              <div class="inc">
              <a onClick=window.open("<?php echo $loginUrl; ?>","Ratting","width=1050,height=570,left=150,top=0,toolbar=0,status=0,"); class="social_box fb">
              <span class="icon"><i class="fa fa-facebook" style="font-size:25px"></i></span>
              <span class="icon_title fb-signup">LOG IN WITH FACEBOOK</span>
              </a>
              <?php
                require_once ('../../utils/google/autoload.php');
                include("googlestart.php");
              ?>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
    <?php include('../../template/header.php'); ?>

   <!--Booking modal -->
   <div class="modal fade" id="bookModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center">Confirmation</h4>
        </div>
        <div class="modal-body text-center modalbook">
          <p>Do you want to book it?</p>
          <button class="btn btn-info confirm">Confirm</button>
          <button class="btn btn-info cancel " data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- book modal end -->
  <section id="coming_soon" class="content-section container">
      <div class="row text-center">
        <div class="col-md-12  main">
            <div class="formBox row text-center tab-content">
              <div  class="oneWay col-md-12 text-center tab-pane active" id="form1">
                <form id="form" journey="oneway" method="GET" class="row "action="">
                  <div style="visibility: none;display: none">
                    <input id="onewayreturn" type="text" name="ret" value="NA" required></input>
                  </div>

                <select required id="sel1" name="pickcity" onmousedown="this.value='';" onchange="jsFunction(this.value);" class="col-sm-4" value="<?php echo $pickupcity; ?>">
                  <option value="<?php echo $pickupcity; ?>" selected hidden id="address"><?php echo $pickupcity; ?></option>
                  <option value="Delhi">Delhi</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Jaipur">Jaipur</option>
                  <option value="Agra">Agra</option>
                </select>

                <select required id="sel2" name="dropcity" onmousedown="this.value='';" onchange="jsFunction2(this.value);" class="col-sm-4" value="<?php echo $dropcity; ?>">
                  <option value="<?php echo $dropcity; ?>" selected hidden><?php echo $dropcity; ?></option>
                  <option value="Delhi">Delhi</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Jaipur">Jaipur</option>
                  <option value="Agra">Agra</option>
                </select>
                <input class="d1 col-sm-4" id="datepicker" required placeholder="&#xf073;  Departure" name="pickdate" value="<?php echo $pickupdate; ?>" >

                <select required id="sel3" name="picktime" class="col-sm-4">
                <option selected hidden value="<?php echo $pickuptime; ?>"><?php echo $pickuptime; ?></option>
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
              <input id="datepicke" name="ret" class="d2 col-sm-4" placeholder="&#xf073;  Return" required disabled value="<?php echo $returndate; ?>">

              <select required id="sel4" value="" name="num" class="col-sm-4">
                <option selected hidden value="<?php echo $noofpas; ?>"><?php echo $noofpas; ?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </select>

              <select id="sel5" class="col-sm-4" name="journey">
                <option selected hidden value="<?php echo $journey; ?>"><?php echo $journey; ?></option>
                <option value="oneway">One Way</option>
                <option value="roundway">Round Trip</option>
              </select>
              <button type="submit" id="submit" value="Search" class="col-sm-12 btn btn-info" onclick="ga('send', 'event', { eventCategory: 'button', eventAction: 'searchresult', eventLabel: 'search Form'});"/>
            <span class="glyphicon glyphicon-refresh spinning"></span>
            <i class="fa fa-search" aria-hidden="true"></i> Search</button>
              </form>
            </div>
          </div><!--rest other divs-->

  </div>

  </div>
  <br />
<!-- Modal -->

<br />
</section>  <!--this is the marker-->
 </div>
<div class="container cabs-contain cabs-header">
<div class="row">
    <button class="btn btn-primary filter col-md-3" value="all" subtype="ALL">
      All
    </button>
    <button class="btn btn-primary filter col-md-3" value="Sedan" subtype="SEDAN">
      Sedan
    </button>
    <button class="btn btn-primary filter col-md-3" value="SUV" subtype="SUV">
      SUV
    </button>
    <button class="btn btn-primary filter col-md-3" value="COMPACT" subtype="COMPACT" style="min-width:90px;">
      COMPACT
    </button>
</div>
</div>
  <div class="container cabs-contain">
  <div class="cab-list-item">
 <?php
   $url=$GLOBALS['server_url']."intercity/availability";
    $r = new HttpRequest("post", $url , array(
        "app_type" => $GLOBALS['app_type'],
        "client_id" => $GLOBALS['client_id'],
        "fromCity" => $pickupcity,
        "toCity" => $dropcity,
        "fromDate" =>  $cnv,
        "toDate" => $cnv2,
        "journey_type"=> $journey,
        "no_of_passenger"=> $noofpas
    ));
    if ($r->hasError()) {
      echo $r->getError();
      echo "sorry, an error occured";
     // echo(json_encode(false));
    }
    else {
    // parse json
       $js = json_decode($r->getResponse());
       $res=$js->{"response"};
       $i=0;
       foreach ($res as $list)
       {
         $i++;
          $subType=$list->subType;
          if($subType==13)
            $subType="SEDAN";
          else if($subType==14)
            $subType="COMPACT";
          else if($subType==15)
            $subType="LUXURY";
          else if($subType==16)
            $subType="BIKE";
          else if($subType==17)
            $subType="AUTO";
          else if($subType==18)
            $subType="SUV";
          $type=$list->type;
          $logo=$list->logoUrl;
          $fare=$list->fare;
          $terms=$list->terms;
          $farepk=$list->costPerDistance;
          $base=$list->basePrice;
          $no=$list->capacity;
          $name=$list->displayName;
          $cabimage=$list->cabImageUrl;
          $bookingid=$list->bookingId;
          $cabType=$list->cabType;
          if($cabType=="41"){
            $cabType2="AhaBuisness";
          }
          else if($cabType=="42"){
            $cabType2="AhaPremium";
          }
          else if($cabType=="43"){
            $cabType2="AhaEconomy";
          }

 ?>
    <div cartype="<?php echo $subType; ?>" class="row text-center hi">
          <div class="col-md-2 col-sm-3 col-xs-3 list-height">
            <img src="<?php echo $cabimage; ?>">
          </div>
          <div class="col-md-2 col-sm-2 col-xs-5 list-height">
            <?php echo $subType; ?>
          </div>
          <div class="col-md-2 col-sm-3 col-xs-4 list-height">
            <img src="<?php echo $logo; ?>">
          </div>
          <div class="col-md-2 col-sm-2 col-xs-6 list-height">
            <?php echo $no; ?> seats
          </div>
          <div class="col-md-2 col-sm-2 col-xs-6 list-height b-right">
            <span><b>₹</b><?php echo $farepk; ?>/km</span>
            <br><br>
            <a href="javascript:void(0)" class="tnc" id="tnc<?php echo $i; ?>">Terms and Conditions</a>
          </div>
          <div class="col-md-2 col-sm-12 col-xs-12 list-height">
              <div class="col-md-12 col-sm-6 col-xs-6">
                <button type="button" class="btn price-btn" name="button">₹<?php echo $fare; ?></button>
              </div>
              <div class="col-md-12 col-sm-6 col-xs-6" bid="<?php echo $bookingid; ?>" fromcity="<?php echo $pickupcity; ?>" tocity="<?php echo $dropcity; ?>" fromdate="<?php echo $cnv; ?>" retdate="<?php echo $cnv2 ?>" type= "<?php echo $type; ?>"
                fare= "<?php echo $fare; ?>"   bamt="<?php echo $fare; ?>" tcost="<?php echo $fare; ?>" cabtype="<?php echo $cabType; ?>" prefer="<?php echo $subType; ?>">
                <button type="button" class="btn btn-md btn-info book" onclick="ga('send', 'event', 'button', 'book', 'cabbook');">BOOK</button>
              </div>
          </div>
          <div class="col-md-12 tncs" id="tnc<?php echo $i; ?>s">
              <?php echo $terms; ?>
          </div>
   </div>
    <?php
}
}
 ?>
   </div>
 </div>

</body>

<script type="text/javascript" src="../../assets/js/filter_book.js"></script>
<script type="text/javascript">
      $("#datepicker").datepicker();
      $("#datepicke").datepicker();
      $("#datepick").datepicker();
      $("#datepic").datepicker();
</script>
</html>
