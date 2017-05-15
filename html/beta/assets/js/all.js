$('.phoneverify').submit(function(e){
  e.preventDefault(); 
  phone=$('#phone').val();
  $.ajax({
    url: localhost+"intercity/results/phone.php", 
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
    url: localhost+"intercity/results/phonepin.php", 
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
  url: localhost+"intercity/results/logout.php", 
  type:'get',
  success: function(result) 
  {
    location.reload();
  },
  error:function(){      
  }
});
});

$('.app-link-form').submit(function(e){
  e.preventDefault();
  var phnno=$('#phone-no').val();
  var code=$('#country-code').val();
  $.ajax({
    url: localhost+"intercity/applink.php", 
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
