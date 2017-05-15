<!DOCTYPE html>
<html>
<head>
  <title></title>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>
<body>
<div id="forform">
<form class="clic">
<input type="text" id="phone" name="phone" placeholder="NUMBER" minlength=10 maxlength=10></input>
<input type="submit" value="SEND"></input>
</form>
<div class="error">
      
</div>
</div>   
<script type="text/javascript">
     jQuery(function($){
          $('.clic').submit(function(e){
              e.preventDefault(); 
              phone=$('#phone').val();
              console.log(phone);
         
              $.ajax({
              url: "results/phone.php", 
              type:'get',
              dataType:'json',
              data:{
                    "phone":phone
                  },
             success:function(result) 
                {
                  $('#forform').empty();
                  $('#forform').append('<form class="clicpin"><input type="text" value="'+phone+'" id="phone" name="phone" placeholder="NUMBER"></input><input type="text" id="pin" name="pin" placeholder="ENTER PIN"><input type="submit" value="SEND"></input>');
                console.log("ajax passed");
               },
             error:function(){
                  $("error").append('Invalid number');
           //   $('#myModal').modal('show');
                console.log("ajax failed");
              }
          });   
         
        });

           $('#forform').on('submit','.clicpin',(function(e){
              console.log("entered");
              e.preventDefault();
              email=$('#phone').val();
              pin=$('#pin').val();
              console.log(email);
              console.log(pin);
              $.ajax({
              url: "results/phonepin.php", 
              type:'get',
              dataType:'json',
              data:{
               phone:phone,
               pin:pin
              },
              success: function(result) 
              {
                  console.log(result);
              $('#forform').empty();           

              $('#forform').append('Verified');
              window.location="http://localhost/intercity/";
                  console.log("ajax passed");
             },
              error:function(){
                console.log("ajax failed");
              }
            });
           }));


    });
     </script>

</body>
</html>