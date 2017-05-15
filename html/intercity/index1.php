<?php
session_start();
$_SESSION['header']="1";
 error_reporting(E_ALL & ~E_NOTICE) ;
 ini_set("display_errors", "1");
include("conf.php");
require_once('../utils/Http2.php');
include("results/fb.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zapplon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
  <link type="text/css" rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/style1.css">

  <script src="http://maps.google.com/maps/api/js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js1/script.js"></script>
  
</head>
<body>
<div class="container">

<?php
if(@$_SESSION['token'])
{
     $r = new HttpRequest("post", $GLOBALS['server_url']."appConfig/isVerified" , array(
        "client_id" => "bt_android_client",
        "app_type" => "bt_android",
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
     //   var_dump($res[0]->value);
        if($res[0]->value == '0')
          {
          //$ur = $GLOBALS['localhost']."intercity/results/verify2.php?journey=".$_GET['journey']."&ret=".$_GET['ret']."&pickcity=".$_GET['pickcity']."&dropcity=".$_GET['dropcity']."&pickdate=".$_GET['pickdate']."&picktime=".$_GET['picktime']."&num=".$_GET['num'];
         $ur=$GLOBALS['localhost']."intercity/verify2.php";
          header('Location: ' . $ur);
          }
        }
}  
//session_start();
//echo $_SESSION['token'];
if(@!$_SESSION['token'])
{     
?>
    <button type="button" id="loginbutton" data-toggle="modal" data-target="#myModal">LOG IN / SIGN UP </button>
<?php
}
else
{
  ?>
  <button type="button" value="logout" id="loginbutton"class="logout">Logout</button>
<?php
    echo "Hi,".$_SESSION['name'];
}
?>
  <!-- Trigger the modal with a button -->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <header class="popupHeader">
          <span class="header_title">LOGIN</span>
          <span class="header_title ">NOT REGISTERED?<a href="#" id="login_form" > SIGN UP</a> </span>
          <span class="modal_close" data-dismiss="modal"><i class="fa fa-times"></i></span>
          </header>  
          <header class="popupHeader2" style="display: none;">
          <span class="header_title">SIGN UP</span>
          <span class="header_title " >ALREADY REGISTERED?<a href="#" id="signup_form" > LOG IN</a> </span>
          <span class="modal_close"><i class="fa fa-times"></i></span>
          </header>      
        </div>
        <div class="modal-body">
          <section class="popupBody" style="display: block;">
            <div style="display: inline-block;" class="user_logi">
              <form  action="results/log_in.php" method="GET">
                <input type="text" name="email" placeholder="EMAIL" required>
                <br />
                <input type="text" name="password" placeholder="Password" required>
                <br />

                <div class="action_btns">
                  <div class="one_half last"><input type="submit" value="LOG IN" class="button expanded btn btn_red">
                </div>
                  </div>
              </form>

            <a href="#" class="forgot_password" >Forgot password?</a>
            </div>
            <div style="display: none;" class="user_register" id="reg">
              <form  action="results/sign_in.php" method="GET"> 
              <input type="text" name="username" placeholder="USERNAME" required>
              <br />
              <input type="text" name="email" placeholder="EMAIL" required>
              <br />
              <input type="text" name="password" placeholder="Password" required>
              <br />
              <div class="action_btns">
                <div class="one_half last"><input type="submit" value="LOG IN" class="button expanded btn btn_red"></div>
              </div>
              </form>
            </div>
            <div style="display: none;" class="forgot" id="forgot_in">
              <div id="forform">
              <form  class='clic'>  
              <h3 class="text-center">Forgot Password?</h3>
              <H6>Enter your email address and we<br> will send you a verifaction code</H6>
              <input type="text" id="email" name="email" placeholder="EMAIL" style="margin: 10px;">
              <br />
              <div class="action_btns">
                <div class="one_half last"><input type="submit" value="EMAIL RESET CODE" class="button expanded btn btn_red"></div>
              </div>
              </form>
              </div>
            </div>

            <div class="social_login" style="display: inline-block;">
              <div class="inc">
              <a href="<?php echo $loginUrl; ?>" class="social_box fb">
              <span class="icon"><i class="fa fa-facebook"></i></span>
              <span class="icon_title fb-signup">SIGN IN WITH FACEBOOK</span>
              </a>
              <?php
//session_start(); //session start
                include("results/googlestart.php");
              ?> 
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<!--this is the marker-->
  <div class="">
  <div class="main">
    <div class="centerBox">
      <div class="menu">
        <ul>
          <li id="tog" class="active">INTERCITY</li>
          <li id="tog2" class="active2" checked>SELF-DRIVE</li>
         <!-- <li>HOLIDAYS</li>
          <li>BUSES</li>
          <li>TRAINS</li>
          <li>CRUISE</li>-->
        </ul>
      </div>
      <div class="formBox">
         <div class="travelType">
          <ul> 
            <li><button  id="oneWay" class="one">One Way</button></li>
            <li ><button  id="twoWay" class="two">Round </button></li>
          </ul>
         </div>
         <div  class="formComplete oneWay" id="form1">
          <form journey="oneway" action="results" method="GET">
            <div style="visibility: none;display: none">
          <input type="text" name="journey" value="oneway"></input>
          <input type="text" name="ret" value="NA"></input>
        </div>
            <select required id="sel1" name="pickcity">
              <option value="" disabled selected hidden id="address" class="temp">Pickup city</option>
              <option value="Delhi">Delhi</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Jaipur">Jaipur</option>
              <option value="Agra">Agra</option>
            </select>
            <select required id="sel2" name="dropcity" >
                  <option value="" disabled selected hidden>drop city</option>
                  <option value="Delhi">Delhi</option>
                  <option value="Chandigarh">Chandigarh</option>
                  <option value="Jaipur">Jaipur</option>
                  <option value="Agra">Agra</option>
            </select>
            <input  required type="date" class="datepicker" placeholder="Departure" id="d1" name="pickdate">
                    
            <select required id="sel3" name="picktime">
              <option value="" disabled selected hidden>Pickup time</option>
              <option value="6:00AM">6:00 AM</option>
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
              <option value="01:30PM">1:30 PM</option>
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
            <input type="date" class="datepicker" placeholder="Return" id="d2" disabled>
                
            <select required id="sel4" name="num">
              <option value="" disabled selected hidden>Number of Passengers</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
            </select>
            <input type="submit" id="submit" value="Search" />  
             
          </form>
         </div>
         <div class="formComplete twoWay" id="form2">
            <form id="form2" journ="roundway" action="results" method="GET">

      <div style="visibility: none;display: none">
         <input type="text" name="journey" value="roundway"></input>
      </div>
              <select required id="sl1" name="pickcity">
                <option value="" disabled selected hidden id="addround">Pickup city</option>
                <option value="Delhi">Delhi</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Agra">Agra</option>
              </select>
              <select required id="sl2" name="dropcity">
                <option value="" disabled selected hidden>drop city</option>
                <option value="Delhi">Delhi</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Jaipur">Jaipur</option>
                <option value="Agra">Agra</option>
              </select>
                
             <input  required type="date" class="datepicker" placeholder="Departure" id="d1" name="pickdate">
              <select required id="sl3" name="picktime">
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
              <input type="date" class="datepicker" placeholder="Return" id="d2" name="ret">
              <select required id="sl4" value=""  name="num">
                <option value="" disabled selected hidden>Number of Passengers</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
              </select>
            <input type="submit" id="submit" value="Search" />  
            </form>
         </div><!--end of second form complete-->
        <!--</div><!--end of tab content-->
      </div><!--rest other divs-->
    </div>

  </div>
 </div>

 

<!--this is the marker-->
  
</body>
</html>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript">
  
$(document).ready(function(){
  console.log("enter");
      function writeAddressName(latLng) {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
          "location": latLng
        },
        function(results, status) {
          if (status == google.maps.GeocoderStatus.OK)
          {
            document.getElementById("address").innerHTML = results[0].formatted_address;
            document.getElementById("addround").innerHTML = results[0].formatted_address;
          //alert(results[0].formatted_address)
        //find country name
             for (var i=0; i<results[0].address_components.length; i++) {
            for (var b=0;b<results[0].address_components[i].types.length;b++) {
            //there are different types that might hold a city admin_area_lvl_1 usually does in come cases looking for sublocality type will be more appropriate
                if (results[0].address_components[i].types[b] == "administrative_area_level_1") {
                    //this is the object you are looking for
                    city= results[0].address_components[i];
                        
                    if(city.long_name == 'Chandigarh' || city.long_name == 'Jaipur' || city.long_name == 'Delhi' || city.long_name == 'Agra')
                    {
                        $('#sel2').focus();
                        $('#sl2').focus();
                        if(city.long_name == 'Delhi'){
                        document.getElementById('sel1').value = 'Delhi';
                        document.getElementById('sl1').value = 'Delhi';
                        }
                        else if(city.long_name == 'Chandigarh'){
                        document.getElementById('sel1').value = 'Chandigarh';
                        document.getElementById('sl1').value = 'Chandigarh';
                        }
                        else if(city.long_name == 'Jaipur'){
                        document.getElementById('sel1').value = 'Jaipur';
                        document.getElementById('sl1').value = 'Jaipur';
                        }
                        else if(city.long_name == 'Agra'){
                        document.getElementById('sel1').value = 'Agra';
                        document.getElementById('sl1').value = 'Agra';
                        }
                    }
                    else
                    {
                        $('#address').focus();
                        document.getElementById("address").innerHTML = "pickup city";
                        document.getElementById("address").focus();
                    }
                    break;
                }
            }
        }
        //city data
        //alert(city.short_name + " " + city.long_name)
          }
          else
            document.getElementById("error").innerHTML += "Unable to retrieve your address" + "<br />";
        });
      }
      function geolocationSuccess(position) {
        var userLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
        // Write the formatted address
        writeAddressName(userLatLng);
      }
      function geolocationError(positionError) {
        document.getElementById("error").innerHTML += "Error: " + positionError.message + "<br />";
      }
      function geolocateUser() {
        // If the browser supports the Geolocation API
        if (navigator.geolocation)
        {
          var positionOptions = {
            enableHighAccuracy: true,
            timeout: 10 * 1000 // 10 seconds
          };
          navigator.geolocation.getCurrentPosition(geolocationSuccess, geolocationError, positionOptions);
        }
        else
          document.getElementById("error").innerHTML += "Your browser doesn't support the Geolocation API";
      }
      window.onload = geolocateUser;



      $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});

jQuery(function($){
           $('.clic').submit(function(e)
           {
              e.preventDefault();
              email=$('#email').val();
              console.log(email);
              $.ajax({
              url: "forgot_in.php", 
              type:'get',
              dataType:'json',
              data:{
               email:email
              },
              success: function(result) 
                {
                  console.log(result);
              $('#forform').empty();
              
              $('#forform').append('<form class="clicpin"><div class="row column log-in-form"><h3 class="text-center">Forgot Password?</h3><input type="text" id="email" name="email" value='+email+' placeholder="EMAIL" style="margin: 10px;"><br /><input type="text" id="pin" name="pin" placeholder="enter your pin" style="margin: 10px;"><br /></div><div id="getpin"></div><div class="action_btns"><div class="one_half last"><input type="submit" class="button expanded btn btn_red" value="Change"></input></form>');
                  console.log("ajax passed");
             },
              error:function(){
                console.log("ajax failed");
              }
            });
           });
            $('#forform').on('submit','.clicpin',(function(e){
              console.log("entered");
              e.preventDefault();
              email=$('#email').val();
              pin=$('#pin').val();
              console.log(email);
              console.log(pin);
              $.ajax({
              url: "forgotpin.php", 
              type:'get',
              dataType:'json',
              data:{
               email:email,
               pin:pin
              },
              success: function(result) 
                {
                  console.log(result);
              $('#forform').empty();

              
              $('#forform').append(' <form class="reset"><div class="row column log-in-form"><h3 class="text-center">Forgot Password?</h3> <input type="text" id="newpsw" name="newpsw" placeholder="New Password" style="margin: 10px;"><br/></div><div class="one_half last"><input type="submit" class="button expanded btn btn_red" value="Change"></input></div></form>');
                  console.log("ajax passed");
             },
              error:function(){
                console.log("ajax failed");
              }
            });
           }));
           $('#forform').on('submit','.reset',(function(e){
              e.preventDefault();
              newpsw=$('#newpsw').val();
              console.log("here");
              console.log(email);
              console.log(pin);
            //e.preventDefault();
              console.log(newpsw);
              $.ajax({
              url: "forgot_reset.php", 
              type:'get',
              dataType:'json',
              data:{
                email:email,
                pin:pin,
               newpsw:newpsw
              },
              success: function(result) 
                {
                  console.log(result);
              $('#forform').empty();
              $('#forform').append('<form  class="clic">  <h3 class="text-center">Forgot Password?</h3><H6>Enter your email address and we<br> will send you a verifaction code</H6><input type="text" id="email" name="email" placeholder="EMAIL" style="margin: 10px;"><br /><div class="action_btns"><div class="one_half last"><input type="submit" value="EMAIL RESET CODE" class="button expanded btn btn_red"></div></div></form>');
            //  window.location="forgot.html";
             },
              error:function(){
                console.log("ajax failed");
              }
            });
           }));
   

 $(".logout").click(function(){
      console.log("in logout");
      window.location="results/logout.php";
    });

    $(".forgot_password").click(function(){
      $(".user_logi").hide();
      $(".forgot").show();
      document.getElementById("forgot_in").style.display = "inline-block";
    });
    // Calling Login Form
    $("#login_form").click(function(){
      console.log("here");
      //$("#forform").show();
       document.getElementById("forgot_in").style.display = "none";
      $(".user_logi").hide();
      $(".popupHeader").hide();
      $(".user_register").show();
      $(".popupHeader2").show();
      $(".fb-signup").text("SIGN UP WITH FACEBOOK");
      $(".google-signup").text("SIGN UP WITH GOOGLE");
      document.getElementById("reg").style.display = "inline-block";
     // document.getElementById("remsign").innerHTML = "Already registered? <a href='#' id='user_register' > LOG IN </a> ";
      return false;
    });

    // Calling Register Form
    $("#signup_form").click(function(){
      console.log("in signup_form");
      //$(".forgot").hide();
      //$("#forform").hide();
      $(".user_logi").show();
      $(".popupHeader").show();
      $(".user_register").hide();
      $(".popupHeader2").hide();

      return false;
    });



            $( "#datepicker" ).datepicker();


            $( "#datepicke" ).datepicker();


            $( "#datepick" ).datepicker();

            $( "#datepic" ).datepicker();



          $('#tog').click(function() {
                $(".active").not(':checked').prop("checked", true);
                });
                $('#tog2').click(function() {
                $(".active2").not(':checked').prop("checked", true);
                });

});







</script>