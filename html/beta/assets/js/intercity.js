
$(document).ready(function(){

  url=localhost;

   $('.tnc').click(function(){
      var x=$(this).attr("id");
      $('#'+x+'s').toggleClass('act-tnc');
    });

   $("#oneWay").click(function(){
      $('#twoWay').removeClass('act-btn');
      $('#oneWay').addClass('act-btn');
    });

   $("#twoWay").click(function(){
      $('#oneWay').removeClass('act-btn');
      $('#twoWay').addClass('act-btn');
    });

   $('#submit').on('click', function () {
      if($('#sel1').val() && $('#sel2').val() && $('#datepicker').val() && $('#sel3').val() && $('#sel4').val())
      {
      $('.spinning').css('display','block');
      $('.fa-search').css('display','none');
    }
    });

   $('#twowaysubmit').on('click', function () {
      if($('#sl1').val() && $('#sl2').val() && $('#datepick').val() && $('#sl3').val() && $('#datepic').val() && $('#sl4').val())
      {
      $('.spinning').css('display','block');
      $('.fa-search').css('display','none');
    }
    });

   $('#sel1').change(function(){
    var e = document.createEvent('MouseEvents');
    e.initMouseEvent('mousedown');
    $('#sel2')[0].dispatchEvent(e);
  });

   $('#sel2').change(function(){
    $('#datepicker').datepicker("show");
  });

   $("#datepicker").change(function(){
    var e = document.createEvent('MouseEvents');
    e.initMouseEvent('mousedown');
    $('#sel3')[0].dispatchEvent(e);
  });

   $('#sel3').change(function(){
    if(document.getElementById("datepicke").disabled === true){
      var e = document.createEvent('MouseEvents');
      e.initMouseEvent('mousedown');
      $('#sel4')[0].dispatchEvent(e);
    }
    else{
      $('#datepicke').datepicker("show");
    }
  });

   $("#datepicke").change(function(){
    var e = document.createEvent('MouseEvents');
    e.initMouseEvent('mousedown');
    $('#sel4')[0].dispatchEvent(e);
  });

   $('#datepicker').datepicker('option','minDate',0);
  //$('#datepicke').datepicker();

  var fromdate=new Date();
  $('#sl1').change(function(){
    var e = document.createEvent('MouseEvents');
    e.initMouseEvent('mousedown');
    $('#sl2')[0].dispatchEvent(e);
  });

  $('#sl2').change(function(){
    $('#datepick').datepicker("show");
  });

  $("#datepick").change(function(){
    fromdate=$(this).datepicker('getDate');
    $('#datepic').datepicker('option','minDate',fromdate);
    var e = document.createEvent('MouseEvents');
    e.initMouseEvent('mousedown');
    $('#sl3')[0].dispatchEvent(e);
  });

  $('#sl3').change(function(){
    $('#datepic').datepicker("show");
  });

  $("#datepic").change(function(){
    var e = document.createEvent('MouseEvents');
    e.initMouseEvent('mousedown');
    $('#sl4')[0].dispatchEvent(e);
  });

  $('#datepick').datepicker('option','minDate',0);
  $('#datepic').datepicker('option','minDate',fromdate);

  // url="http://test.zapplon.com/";
});

$(document).ready(function(){

$('#user_login_form').submit(function(e)
             {
                e.preventDefault();
                email=$('#email').val();
                pwd=$('#pwd').val();
                $.ajax({
                  url: url+"intercity/results/log_in.php",
                type:'get',
                dataType:'json',
                data:{
                 email:email,
                 pwd:pwd
                },
                success: function(result)
                  {

                  $('#user_login_result').empty();
                  location.reload();
                  console.log("ajax passed");
               },
                error:function(){
                  $('#user_login_result').empty();
                  $('#user_login_result').append('Invalid username or password');
                  console.log("ajax failed");
                }
              });

             });

  $('#user_register_form').submit(function(e)
             {
                e.preventDefault();
                pwd=$('#pw').val();
                name=$('#name').val();
                email=$('#emai').val();
                $.ajax({

                url: url+"intercity/results/sign_in.php", 
                type:'get',
                dataType:'json',
                data:{
                 email:email,
                 pwd:pwd,
                 name:name
                },
                success: function(result)
                  {

                  $('#user_register_result').empty();
                  location.reload();
                  
               },
                error:function(){
                  $('#user_register_result').empty();
                  $('#user_register_result').append('Invalid usrname or password');
                  
                }
              });

             });

  $('#forgot_form').submit(function(e)
             {
                e.preventDefault();
                email_forgot_form=$('#email_forgot_form').val();
                console.log(email_forgot_form);
                $.ajax({
                  url: url+"intercity/results/forgot_in.php",
                type:'get',
                dataType:'json',
                data:{
                 email:email_forgot_form
                },
                success: function(result)
                  {
                    console.log(result);
                    if(result=="invalid email")
                        {
                           $('#forform').append('Invalid email');
                        }
                        else
                        {


                $('#forform').empty();

                $('#forform').append('<form id="clicpin"><div class="row column log-in-form"><h3 class="text-center">Forgot Password?</h3><input type="text" id="email_forgot" name="email" value='+email_forgot_form+' placeholder="EMAIL" style="margin: 10px;"><br /><input type="text" id="pin_forgot" name="pin" placeholder="enter your pin" style="margin: 10px;"><br /></div><div id="getpin"></div><div class="action_btns"><div class="one_half last"><input type="submit" class="button expanded btn btn_red" value="Change"></input></form>');
                    
                  }
               },
                error:function(){
                  $('#forform').append('Invalid email');
                 
                }
              });
             });

  $('#forform').on('submit','#clicpin',(function(e){
                  e.preventDefault();
                  email_forgot=$('#email_forgot').val();
                  pin_forgot=$('#pin_forgot').val();
                  $.ajax({
                    url: url+"intercity/results/forgot_pin.php",
                  type:'get',
                  dataType:'json',
                  data:{
                   email:email_forgot,
                   pin:pin_forgot
                  },
                  success: function(result)
                    {
                      if(result==false){
                         $('#forform').append('Invalid email or pin');
                      }
                      else{


                  $('#forform').empty();


                  $('#forform').append(' <form id="reset_forgot"><div class="row column log-in-form"><h3 class="text-center">Forgot Password?</h3> <input type="text" id="newpsw_forgot" name="newpsw" placeholder="New Password" style="margin: 10px;"><br/></div><div class="one_half last"><input type="submit" class="button expanded btn btn_red" value="Change"></input></div></form>');
                    
                    }
                 },
                  error:function(){
                  
                  }
                });
               }));

  $('#forform').on('submit','#reset_forgot',(function(e){
                  e.preventDefault();
                  newpsw=$('#newpsw_forgot').val();
                  console.log(newpsw);
                  $.ajax({

                   url: url+"intercity/results/forgot_reset.php" ,
                  type:'get',
                  dataType:'json',
                  data:{
                    email:email_forgot,
                    pin:pin_forgot,
                   newpsw:newpsw
                  },
                  success: function(result)
                    {
                  $('#forform').empty();
                  $('#forform').append('password resetted successfully!');},
                  error:function(){
                    console.log("ajax failed");
                  }
                });
               }));

  $('.phoneverify').submit(function(e){
                  e.preventDefault(); 
                  phone=$('#phone').val();
                  $.ajax({
                  url: url+"intercity/results/phone.php", 
                  type:'get',
                  dataType:'json',
                  data:{
                        "phone":phone
                      },
                 success:function(result) 
                    {
                      $('#phoneform').empty();
                      $('#phoneform').append('<form class="phoneverifypin row"><input type="text" value="'+phone+'" id="phone" name="phone" placeholder="NUMBER" class="col-xs-4 col-sm-offset-4 col-xs-offset-4  col-sm-4"></input><input type="text" id="pin" name="pin" placeholder="ENTER PIN" class="col-xs-4 col-sm-offset-4 col-xs-offset-4  col-sm-4" style="margin-top:10px;"><button type="submit" value="Get Pin" class=" btn btn-info col-xs-offset-4  col-xs-4 col-sm-offset-4 col-sm-4" style="margin-top: 10px;">Send</button>');
                   },
                 error:function(){
                  }
              });   
             
            });

  $('#phoneform').on('submit','.phoneverifypin',(function(e){
                  e.preventDefault();
                  pin=$('#pin').val();
                  $.ajax({
                  url: url+"intercity/results/phonepin.php", 
                  type:'get',
                  dataType:'json',
                  data:{
                   phone:phone,
                   pin:pin
                  },
                  success: function(result) 
                  {
                  $('#phoneform').empty();           
                  $('#phoneform').append("Verified<?php $_SESSION['isVerified']=true; ?>");
                  location.reload();
                 },
                  error:function(){          
                  $('#phoneform').append("Invalid number or pin!");
                  }
                });
               }));

  $('.logout').on('click', function () {
                   $.ajax({
                  url: url+"intercity/results/logout.php", 
                  type:'get',
                  success: function(result) 
                  {
                      location.reload();
                 },
                  error:function(){      
                  }
              });
            });

  $('.cabs-contain').on('click','.book',function()
          {
                 bookingId=$(this).parent().attr('bid');
                 type=$(this).parent().attr('type');
                 access_token=$(this).parent().attr('atk');
                 bookingAmt=$(this).parent().attr('bamt');
                 totalCost=$(this).parent().attr('tcost');
                 fromCity=$(this).parent().attr('fromcity');
                 toCity=$(this).parent().attr('tocity');
                 startDate=$(this).parent().attr('fromdate');
                 returnDate=$(this).parent().attr('retdate');
                 cabType=$(this).parent().attr('cabtype');
                 preference=$(this).parent().attr('prefer');

                $.ajax({
                url: url+"intercity/results/checklogged.php",
                type:'get',
                dataType:'json',
                data:{

                },
                success: function(result)
                  {
                    $('#bookModal').modal('show');
               },
                 error:function(){
                $('#myModal').modal('show');
                }
              });
           });

  $('.modalbook').on('click','.confirm',function(){
                 console.log(bookingId);
                 console.log(type);
                 console.log(bookingAmt);
                 console.log(totalCost);
                 console.log(fromCity);
                 console.log(toCity);
                 console.log(startDate);
                 console.log(returnDate);
                 console.log(cabType);
                 console.log(preference);

                $.ajax({
                url: url+"intercity/results/booking.php",
                type:'get',
                dataType:'json',
                data:{
                 bookingId:bookingId,
                 type:type,
                 bookingAmt:bookingAmt,
                 totalCost:totalCost,
                 fromCity:fromCity,
                 toCity:toCity,
                 startDate:startDate,
                 returnDate:returnDate,
                 cabType:cabType,
                 preference:preference
                },
                success:function(result)
                  {
                    console.log(result.paymentUrl);
                    console.log(result.paymentParam);
                     window.location= url+"intercity/results/redirecting.php?url="+result.paymentUrl+"&param="+result.paymentParam;
                   // window.location= url+"intercity/results/redirecting.php?url=https://test.payu.in/_payment"+"&param="+result.paymentParam;
               },
                 error:function(){
                  console.log("ajax failed");
                }
              });
          });

  $('.app-link-form').submit(function(e){
                e.preventDefault();
                var phnno=$('#phone-no').val();
                var code=$('#country-code').val();
                alert(phnno);
                $.ajax({
                url: url+"intercity/applink.php", 
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

});

