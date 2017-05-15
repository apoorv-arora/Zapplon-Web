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
       

        });