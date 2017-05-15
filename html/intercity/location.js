
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




