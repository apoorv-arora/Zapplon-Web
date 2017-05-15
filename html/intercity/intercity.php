<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    //console.log(window.location.hash);
    if (window.location.hash && window.location.hash == '#_=_') {
        window.location.hash = '';
        window.location.href='';
    }
  });
</script>
<script>
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
    });
    </script>


<?php
include("fb.php"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zapplon
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
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
        <form  action="log_in.php" method="post">
          <input type="text" name="email" placeholder="EMAIL">
          <br />
          <input type="text" name="password" placeholder="Password">
          <br />
          <div class="action_btns">
            <div class="one_half last"><input type="submit" value="LOG IN" class="button expanded btn btn_red">
            </div>
          </div>
        </form>
        <a href="#" class="forgot_password" >Forgot password?</a>
      </div>

      <div style="display: none;" class="user_register" id="reg">
        <form  action="sign_in.php" method="post">
          
          <input type="text" name="username" placeholder="USERNAME">
          <br />
          
          <input type="text" name="email" placeholder="EMAIL">
          <br />

         
          <input type="text" name="password" placeholder="Password">
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
include("googlestart.php");
          ?> 
        </div>
      </div>
</section>
        </div>
       
      </div>
      
    </div>
  </div>
<div class="container">
<div >
  <ul class="nav site-nav" style="margin-left: 400px"   class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">One Way</a></li>
    <li><a data-toggle="tab" href="#menu2">Round Way</a></li>
  </ul>
</div>

  <div class="tab-content" style="margin-left: 150px">
<p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p><p></p>

    <div id="menu1" class="tab-pane active">
    <form id="form" journey="oneway">
      <select required id="sel1">
        <option value="" disabled selected hidden id="address" class="temp">Pickup city</option>
        <option value="Delhi">Delhi</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Agra">Agra</option>
      </select>
  <select required id="sel2">
        <option value="" disabled selected hidden>drop city</option>
        <option value="Delhi">Delhi</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Agra">Agra</option>
  </select>

          <!-- <input type="text" id="datepicker" value="Departure"> -->
        <span>Depart</span><span class="dateholder">
  <input  required type="date" class="datepicker" id="d1">
</span>
            
    <select required id="sel3" value="">
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

    <span>Return</span><span class="dateholder" >

    <input type="date" class="datepicker" id="d2" disabled>
    </span>
        
    <select required id="sel4" value="">
    <option value="" disabled selected hidden>Number of Passengers</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    </select>
  <input type="submit" id="submit" value="Search"  />  
     
    </form>
    </div>

    <!-- for round way-->
    <div id="menu2" class="tab-pane fade">
    <form id="form2" journ="roundway">
       <select required id="sl1">
        <option value="" disabled selected hidden id="addround">Pickup city</option>
        <option value="Delhi">Delhi</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Agra">Agra</option>
    </select>
  <select required id="sl2">
        <option value="" disabled selected hidden>drop city</option>
        <option value="Delhi">Delhi</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Agra">Agra</option>
    </select>
        
          <!-- <input type="text" id="datepick" value="Departure"> -->
        <span>Depart</span><span class="dateholder" >
        <input required type="date" class="datepicker" id="dl1">
        </span>


<select required id="sl3">
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

     
          <!-- <input type="text" id="datepic" value="Return"  >-->
        <span>Return</span><span class="dateholder" >
  <input required="" type="date"  class="datepicker" id="dl2">
</span>
    <select required id="sl4" value="">
    <option value="" disabled selected hidden>Number of Passengers</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    </select>

  <!-- <input type="submit" value="Search" />  -->
        <button class="fa fa-search">
  <span class="struct">Search</span>
</button>

     

</form>
    </div>
   
      </div>
  </div>
<div class="cablist"></div>



<script>
$(document).ready(function(){
    $(".nav-tabs a").click(function(){
        $(this).tab('show');
    });
});
</script>

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
              $('#myModal').modal('show');
                console.log("ajax failed");
              }
          });   
          
        });
        
       
         $('.cablist').on('click','.book',function(){
              console.log("entered");

              type=$(this).parent().attr('type');
              fare=$(this).parent().attr('fare');
              console.log(type);
              console.log(fare);
           
              $.ajax({
              url: "booking.php", 
              type:'get',
              dataType:'json',
              data:{
               fromcity:sel1,
               tocity:sel2,
               fromdate:d1,
               todate:'',
               taxitype:type,
               pickuptime:sel3,
               pickupaddress:'Noida',
               cost:2999,
               name:'apoorv',
               email:'apoorv@zapplon.com',
               mobile:'8447753585',
               bookingamt:499,
               type:31
              },
              success: function(result) 
                {
             //     if(result=="no"){
//open pop up
                    //}
                  console.log(result);
                  //window.location="booked.php?bid="+result['bookingCode'];
                  console.log("ajax passed");
             },
               error:function(){
              $('#myModal').modal('show');
                //$('.list').append('wish posted');
                console.log("ajax failed");
              }
            });
            
         });        

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


         $('.cablist').on('click','.book2',function(){
              console.log("entered");

              type2=$(this).parent().attr('type');
              fare2=$(this).parent().attr('fare');
              console.log(type);
              console.log(fare);
           
              $.ajax({
              url: "booking.php", 
              type:'get',
              dataType:'json',
              data:{
               fromcity:sl1,
               tocity:sl2,
               fromdate:dl1,
               todate:dl2,
               taxitype:type2,
               pickuptime:sl3,
               pickupaddress:'Noida',
               cost:2999,
               name:'apoorv',
               email:'apoorv@zapplon.com',
               mobile:'8447753585',
               bookingamt:499,
               type:31
              },
              success: function(result) 
                {
                  console.log(result);
                  //window.location="booked.php?bid="+result['bookingCode'];
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
              
              $('#forform').append('<form class="clicpin"><div class="row column log-in-form"><h1 class="text-center">Forgot Password?</h1><input type="text" id="email" name="email" value='+email+' placeholder="EMAIL" style="margin: 10px;"><br /><input type="text" id="pin" name="pin" placeholder="enter your pin" style="margin: 10px;"><br /></div><div id="getpin"></div><div class="action_btns"><div class="one_half last"><input type="submit" class="button expanded btn btn_red" value="Change"></input></form>');
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

              
              $('#forform').append(' <form class="reset"><div class="row column log-in-form"><h1 class="text-center">Forgot Password?</h1> <input type="text" id="newpsw" name="newpsw" placeholder="New Password" style="margin: 10px;"><br/></div><div class="one_half last"><input type="submit" class="button expanded btn btn_red" value="Change"></input></div></form>');
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
              $('#forform').append('<form  class="clic">  <h1 class="text-center">Forgot Password?</h1><H6>Enter your email address and we<br> will send you a verifaction code</H6><input type="text" id="email" name="email" placeholder="EMAIL" style="margin: 10px;"><br /><div class="action_btns"><div class="one_half last"><input type="submit" value="EMAIL RESET CODE" class="button expanded btn btn_red"></div></div></form>');
            //  window.location="forgot.html";
             },
              error:function(){
                console.log("ajax failed");
              }
            });
           }));
});
</script>
    <style>
        .dateholder {
    position: relative;
    width: 200px;
    margin: 0 auto;
}
.datepicker {
    width: 200px;
    border: 1px solid #ccc;
    font-size: 1em;
    padding: .5em 1em;
}
.pickadate__input--active {
    border-color: #0089ec !important;
}
        body{
            background-color: antiquewhite;
        }
/**
 * The footer containing the "today" and "clear" buttons
 */
.pickadate__footer {
    text-align: center;
    margin: .5em 0 -.5em;
}
.pickadate__button--today,
.pickadate__button--clear {
    border: 1px solid #fff;
    background: #fff;
    font-size: .8em;
    padding: .66em 0;
    margin: 0 2.5%;
    font-weight: bold;
    width: 40%;
}
.pickadate__button--today:before,
.pickadate__button--clear:before {
    position: relative;
    display: inline-block;
    height: 0;
}
.pickadate__button--today:before {
    content: " ";
    margin-right: .45em;
    top: -.05em;
    width: 0;
    border-top: .66em solid #0059bc;
    border-left: .66em solid transparent;
}
.pickadate__button--clear:before {
    content: "\D7";
    margin-right: .35em;
    top: -.1em;
    color: #e20;
    vertical-align: top;
    font-size: 1.1em;
}
.pickadate__button--today:focus,
.pickadate__button--clear:focus {
    background: #b1dcfb;
    border-color: #0089ec;
    outline: none;
}
    
/*------------------------------------*\
    $HOUSEKEEPING
\*------------------------------------*/
*{ margin:0; padding:0; }
html{
    padding:5%;
    font:1em/1.5 Georgia, serif;
    overflow-y:scroll;
}
ul{
    margin-bottom:1.5em;
    margin-left:1.5em;
}
a{
    text-decoration:none;
}
.nav{
    list-style:none;
    margin-left:0;
}
    .nav > li,
        .nav > li > a{
            display:inline-block;
           *display:inline;
            zoom:1;
        }
    .stacked > li{
        display:list-item;
    }
        .stacked > li > a{
            display:block;
    }
.flyout,
.flyout-alt{
    position:relative;
}
    .flyout-content{
        /* Position the flyouts off-screen. This is typically better than `display:none;`. */
        position:absolute;
        top:100%;
        left:-99999px;
        height:0;
        overflow:hidden;
    }
    .flyout:hover > .flyout-content{
        left:0;
    }
    .flyout-alt:hover > .flyout-content{
        top:0;
        left:100%;
    }
    .flyout:hover > .flyout-content,
    .flyout-alt:hover > .flyout-content{
        height:auto;
        overflow:visible;
    }
.site-nav{
    font-size:0.75em;
    font-family:sans-serif;
}
        .site-nav a{
            line-height:1;
            padding:1em;
            background-color:#09f;
            color:#fff;
            white-space:nowrap;
        }.site-nav .flyout:hover > a /* [1] */,
.site-nav .flyout-alt:hover > a /* [1] */,
.site-nav a:hover{
    color:#435704;
    background-color:#BADA55;
}
.site-nav .flyout-alt > a:after{
    content:" »";
}
.site-nav a,
.site-nav .flyout-content{
    border:0     /* [1] */
           solid /* [2] */
           #fff  /* [3] */;
}
.site-nav > li > a{
    border-left-width:1px; /* [4] */
}
.site-nav > li:first-child > a{
    border:none;    
}
.site-nav .flyout-content{
    border-width:1px 0 0 1px; /* [4] */
}
.site-nav .flyout-content a{
    border-bottom-width:1px; /* [4] */
}
.site-nav .flyout-alt:hover > .flyout-content{
    top:-1px;
}
        .temp{
            height: 38px;
            width: 200px;
            color: aqua;
        }
        
button {
  font-size: 1.5em;
  padding: 0.5em;
}
.struct {
  height: 1px;
  left: -900em;
  overflow: hidden;
  position: absolute;
  top: auto;
  width: 1px;
}
    </style>
