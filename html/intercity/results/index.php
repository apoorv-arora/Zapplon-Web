<?php
session_start();
$_SESSION['header']="2";
error_reporting(E_ALL & ~E_NOTICE) ;
ini_set("display_errors", "0");
include("../conf.php");
require_once('../../utils/Http2.php');
/*if($_GET['state']!=null){
  echo "state is:".$_GET['state'];
}
*/
if($_GET['pickcity']!=null and $_GET['dropcity']!=null and $_GET['pickdate']!=null and $_GET['picktime']!=null and $_GET['ret']!=null and $_GET['num']!=null and $_GET['journey']!=null) 
{
  //echo "herethere";

    $pickupcity=$_GET['pickcity'];
    $dropcity=$_GET['dropcity'];
    $pickupdate=$_GET['pickdate'];
    $pickuptime=$_GET['picktime'];
    $returndate=$_GET['ret'];
    $noofpas=$_GET['num'];
    $journey=$_GET['journey'];
    $_SESSION['pickcity']=$pickupcity;
    $_SESSION['dropcity']=$dropcity;
    $_SESSION['pickdate']=$pickupdate;
    $_SESSION['picktime']=$pickuptime;
    $_SESSION['ret']=$returndate;
    $_SESSION['num']=$noofpas;  
    $_SESSION['journey']=$journoey;
   // echo "journ".$_SESSION['journey'];
}
else if($_SESSION['pickcity']!=null and $_SESSION['dropcity']!=null and $_SESSION['pickdate']!=null and $_SESSION['picktime']!=null and $_SESSION['ret']!=null and $_SESSION['num']!=null and $_SESSION['journey']!=null)
{
    echo "just sessions";
    echo "session is".$_SESSION['token'];
    $pickupcity=$_SESSION['pickcity'];
    $dropcity=$_SESSION['dropcity'];
    $pickupdate=$_SESSION['pickdate'];
    $pickuptime=$_SESSION['picktime'];
    $returndate=$_SESSION['ret'];
    $noofpas=$_SESSION['num'];
    $journey=$_SESSION['journey'];   
}
else
{
  echo $_GET['pickcity'];
  echo $_GET['dropcity'];
  echo $_GET['pickdate'];
  echo $_GET['picktime'];
  echo $_GET['ret'];
  echo $_GET['num'];
  echo$_GET['journey'];


    $url=$GLOBALS['localhost']."intercity";
   // header('Location:'.$url);
}
include("fb.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zapplon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
  <link href="css/stacktable.css" rel="stylesheet" />
  <link href="css/style1.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js1/script.js"></script>
  <script src="http://maps.google.com/maps/api/js"></script>
</head>
<?php
if(@$_SESSION['token'])
{
     $r = new HttpRequest("post", $GLOBALS['server_url']appConfig/isVerified" , array(
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
         $ur=$GLOBALS['localhost']."intercity/results/verify2.php";
          header('Location:' .$ur);
          }
        }
}  
?>
<body>
<?php
//session_start();
//echo "session is:".$_SESSION['token'];/*just commented this out so that it works in my pc*/
if(@!$_SESSION['token'])
{ 
echo "in not sesssss";    
?>
<!--Shatakshi's changes-->
    <button type="button" id="loginbutton" data-toggle="modal" data-target="#myModal">LOG IN / SIGN UP </button>
<?php
}
else
{
  ?>
  <button type="button"  id="loginbutton" value="logout" class="logout">Logout</button>
<?php
    echo "Hi,".$_SESSION['name'];
}
?>
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
              <form  action="log_in.php" method="GET">
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
              <form  action="sign_in.php" method="GET"> 
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
              <input type="text" id="email" name="email" placeholder="EMAIL" style="margin: 10px;" required>
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
                include("googlestart.php");
              ?> 
              </div>
            </div>
          </section>
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
          
            <script>
                $('#tog').click(function() {
                $(".active").not(':checked').prop("checked", true);
                });
                $('#tog2').click(function() {
                $(".active2").not(':checked').prop("checked", true);
                });
                </script>
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
            <li ><button  id="twoWay" class="two">Round Trip</button></li>
          </ul>
         </div>
         <div  class="formComplete oneWay" id="form1">
          <form id="form" journey="oneway" action="" method="GET">
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
                    
            <select required id="sel3" value="" name="picktime">
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
            <input type="date" class="datepicker" placeholder="Return" id="d2" disabled>
                
            <select required id="sel4" value="" name="num">
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
            <form id="form2" journ="roundway" action="">
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
                
             <input  required type="date" class="datepicker" placeholder="Departure" id="dl1" name="pickdate">
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
              <input type="date" class="datepicker" placeholder="Return" id="dl2" name="ret">
              <select required id="sl4" value="" name="num">
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
<?php
    if( ($_GET['pickcity']!=null and $_GET['dropcity']!=null and $_GET['pickdate']!=null and $_GET['picktime']!=null and $_GET['ret']!=null and $_GET['num']!=null and $_GET['journey']!=null)  or ($_SESSION['pickcity']!=null and $_SESSION['dropcity']!=null and $_SESSION['pickdate']!=null and $_SESSION['picktime']!=null and $_SESSION['ret']!=null and $_SESSION['num']!=null and $_SESSION['journey']!=null) )
    {
       if($_GET['pickcity']!=null){
       //   echo "in get..";
          $pickupcity=$_GET['pickcity'];
          $dropcity=$_GET['dropcity'];
          $pickupdate=$_GET['pickdate'];
          $pickuptime=$_GET['picktime'];
          $returndate=$_GET['ret'];
          $noofpas= $_GET['num'];
          $journey=$_GET['journey'];
    }
    else{
      //  echo "in sess...";
        $pickupcity=$_SESSION['pickcity'];
        $dropcity=$_SESSION['dropcity'];
        $pickupdate=$_SESSION['pickdate'];
        $pickuptime=$_SESSION['picktime'];
        $returndate=$_SESSION['ret'];
        $noofpas=$_SESSION['num'];
        $journey=$_SESSION['journey'];
    }
//if(@$_SESSION['name'])
    $name=$_SESSION['name'];
//if(@$_SESSION['email'])
    $email=$_SESSION['email'];
//echo "name is:".$name;
//echo "email is:".$email;
    
    $url=$GLOBALS['server_url']intercity/checkAvailability";
//$url="http://192.168.0.135:8080/ZapplonServer/rest/intercity/checkAvailability";
//echo $url;
    $r = new HttpRequest("post", $url , array(
        "fromCity" => $pickupcity,
        "toCity" => $dropcity,
        "fromDate" =>  $pickupdate,
        "pickUpTime" => $pickuptime,
        "toDate" => $returndate,
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
       foreach ($res as $list) {
          $carmodel=$list->carModel;
     //var_dump($carmodel);
          $avail=$list->availability;
          $fare=$list->fare;
          $no=$list->noOfSeats; 
          $farepk=$list->fareperKm;
          $dist=$list->distance;
          $type=$list->type;
          $adv=$list->advance;
  ?>

  


  <div class="cablist">
    <div> 
      <div> <?php echo $carmodel; ?></div>
      <div><?php echo $avail; ?></div> 
      <div> </div>
      <div><?php echo $no; ?></div>
      <div  > <?php echo $farepk; ?> </div>
      <div><?php echo $dist; ?> </div>
      <div> </div>
      <div><?php echo $adv; ?> </div> 
      <div name="<?php echo $name; ?>" email="<?php echo $email; ?>" fromcity="<?php echo $pickupcity; ?>" tocity="<?php echo $dropcity; ?>" fromdate="<?php echo $pickupdate; ?>" todate="<?php echo $returndate ?>" pickuptime="<?php echo $pickuptime; ?>" type= "<?php echo $type; ?> " fare="<?php echo $fare; ?>"  >
      <button class="book">Book</button>
      </div>
    </div>           
  </div>





    <?php
    } 
  }
}
    ?>
<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>
<!--SHATAKSHI'S SCRIPTS
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src=js1/libs/jquery-1.7.min.js"></script>")</script> </script>
-->
<script src="js1/stacktable.min.js" type="text/javascript"></script>

<script>
  $(document).on('click', '#run', function(e) {
    e.preventDefault();
    $('#simple-example-table').stacktable();
    $(this).replaceWith('<span>ran - resize your window to see the effect</span>');
  });
  $('#responsive-example-table').stacktable({myClass:'your-custom-class'});
  $('#card-table').cardtable();
  $('#agenda-example').stackcolumns();
</script>

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-2821890-9']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<!--end of shatakshi's scripts-->


</body>
</html>


  
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>


          <script >
          $(function() {
            $( "#datepicker" ).datepicker();
          });
          $(function() {
            $( "#datepicke" ).datepicker();
          });
           $(function() {
            $( "#datepick" ).datepicker();
          });
          $(function() {
            $( "#datepic" ).datepicker();
          });
          </script>
          
<script type="text/javascript">
     jQuery(function($){
        /*
          $('#form').submit(function(e){
               e.preventDefault();  
               sel1=$('#sel1').val();
               sel2=$('#sel2').val(); 
               d1=$('#d1').val();
               sel3=$('#sel3').val();
               d2=$('#d2').val();
               journey=$('#form').attr('journey');
               sel4=$('#sel4').val();
              console.log(sel1);
              console.log(sel2);
              console.log(d1);
              console.log(sel3);
              console.log(journey);
              console.log(sel4);
              $.ajax({
              url: "cabslist.php", 
              type:'get',
              dataType:'json',
              data:{
                    s1: sel1,
                    s2: sel2,
                    d1:d1,
                    s3:sel3,
                    d2:'NA',
                    jtype:journey,
                    s4:sel4
                  },
             success:function(result) 
                {
                  console.log("here");
                 $('.cablist').empty();
                  
                  console.log(result);
                  //console.log(result[0]['carModel']);
                  for(var i=0;i<result.length;i++){
                  $('.cablist').append('<div> <div> '+result[i]['carModel']+' </div> <div>'+result[i]['availability']+' </div> <div>'+result[i]['fare']+' </div> <div>'+result[i]['noOfSeats']+' </div> <div  >'+result[i]['fareperKm']+' </div> <div>'+result[i]['distance']+' </div> <div>'+result[i]['type']+' </div> <div>'+result[i]['advance']+' </div> <div  type='+result[i]['type'] +' fare= '+result[i]['fare']+'  ><button class="book">Book</button></div>  </div> ');
                }               
               
                console.log("ajax passed");
               },
             error:function(){
           //   $('#myModal').modal('show');
                console.log("ajax failed");
              }
          });   
          
        });
        */
        
         $('.cablist').on('click','.book',function(){
              console.log("entered");
              type=$(this).parent().attr('type');
              fare=$(this).parent().attr('fare');
              fromcity=$(this).parent().attr('fromcity');
              tocity=$(this).parent().attr('tocity');
              fromdate=$(this).parent().attr('fromdate');
              todate=$(this).parent().attr('todate');
              pickuptime=$(this).parent().attr('pickuptime');
              name=$(this).parent().attr('name');
              email=$(this).parent().attr('email');
              console.log(type);
              console.log(fare);
              console.log(fromcity);
              console.log(tocity);
              console.log(fromdate);
              console.log(todate);
              console.log(pickuptime);
              console.log(name);
              console.log(email);
              $.ajax({
              url: "booking.php", 
              type:'get',
              dataType:'json',
              data:{
               fromcity:fromcity,
               tocity:tocity,
               fromdate:fromdate,
               todate:'NA',
               taxitype:type,
               pickuptime:pickuptime,
               pickupaddress:'Noida',
               cost:2999,
               name:name,
               email:email,
               mobile:'8447753585',
               bookingamt:499,
               type:31
              },
              success: function(result) 
                {
                  console.log(result);
                  window.location="booked.php";
                  console.log("ajax passed");
             },
               error:function(){
              $('#myModal').modal('show');
                //$('.list').append('wish posted');
                console.log("ajax failed");
              }
            });
         });        
/*
//for form2 submission
 $('#form2').submit(function(e){
              e.preventDefault();  
               sl1=$('#sl1').val();
               sl2=$('#sl2').val(); 
               dl1=$('#dl1').val();
               sl3=$('#sl3').val();
               dl2=$('#dl2').val();
               journ=$('#form2').attr('journ');
               sl4=$('#sl4').val();
              console.log(sl1);
              console.log(sl2);
              console.log(dl1);
              console.log(sl3);
              console.log(dl2);
              console.log(journ);
              console.log(sl4);
              $.ajax({
              url: "cabslist.php", 
              type:'get',
              dataType:'json',
              data:{
                    s1:sl1,
                    s2:sl2,
                    d1:dl1,
                    s3:sl3,
                    d2:dl2,
                    jtype:journ,
                    s4:sl4
                  },
             success:function(result) 
                {
                  $('.cablist').empty();
                  //console.log(result);
                for(var i=0;i<result.length;i++){
                  //console.log(result[i]['carModel']);
                  $('.cablist').append('<div> <div> '+result[i]['carModel']+' </div> <div>'+result[i]['availability']+' </div> <div>'+result[i]['fare']+' </div> <div>'+result[i]['noOfSeats']+' </div> <div  >'+result[i]['fareperKm']+' </div> <div>'+result[i]['distance']+' </div> <div>'+result[i]['type']+' </div> <div>'+result[i]['advance']+' </div> <div  type2='+result[i]['type'] +' fare2= '+result[i]['fare']+'  ><button class="book2">Book</button></div>  </div>  ');
                }               
                console.log("ajax passed");
               },
             error:function(){
                //$('.list').append('wish posted');
                console.log("ajax failed");
              }
          });     
        });

*/
         $('.cablist').on('click','.book2',function(){
              console.log("entered");

              type2=$(this).parent().attr('type');
              fare2=$(this).parent().attr('fare');
              fromcity2=$(this).parent().attr('fromcity');
              tocity2=$(this).parent().attr('tocity');
              fromdate2=$(this).parent().attr('fromdate');
              todate2=$(this).parent().attr('todate');
              pickuptime2=$(this).parent().attr('pickuptime');
              name=$(this).parent().attr('name');
              email=$(this).parent().attr('email');
              console.log(type2);
              console.log(fare2);
              console.log(fromcity2);
              console.log(tocity2);
              console.log(fromdate2);
              console.log(todate2);
              console.log(pickuptime2);
              console.log(name);
              console.log(email);
              $.ajax({
              url: "booking.php", 
              type:'get',
              dataType:'json',
              data:{
               fromcity:fromcity2,
               tocity:tocity2,
               fromdate:fromdate2,
               todate:todate2,
               taxitype:type2,
               pickuptime:pickuptime2,
               pickupaddress:'Noida',
               cost:2999,
               name:name,
               email:email,
               mobile:'8447753585',
               bookingamt:499,
               type:31
              },
              success: function(result) 
                {
                  console.log(result);
                  //window.location="booked.php";
                  console.log("ajax passed");
             },
              error:function(){ 
                $('#myModal').modal('show');
                //$('.list').append('wish posted');
                console.log("ajax failed");
              }
            });
            
         });         
        });

</script>

<script type="text/javascript">
  $(function(){

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
  })
</script>

<script type="text/javascript">
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
                  $('#forform').append('<form class="clicpin"><div class="row column log-in-form"><h3 class="text-center">Forgot Password?</h3><input type="text" id="email" name="email" value='+email+' placeholder="EMAIL" required style="margin: 10px;"><br /><input type="text" id="pin" name="pin" placeholder="enter your pin" required style="margin: 10px;"><br /></div><div id="getpin"></div><div class="action_btns"><div class="one_half last"><input type="submit" class="button expanded btn btn_red" value="Change"></input></form>');
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

              
              $('#forform').append(' <form class="reset"><div class="row column log-in-form"><h3 class="text-center">Forgot Password?</h3> <input type="text" id="newpsw" name="newpsw" placeholder="New Password" required style="margin: 10px;"><br/></div><div class="one_half last"><input type="submit" class="button expanded btn btn_red" value="Change"></input></div></form>');
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
      window.location="logout.php";
    });
});
</script>

   