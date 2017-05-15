
<?php
session_start();
include('../../utils/conf.php');
if(@$_SESSION['token'])
{
?>
<!DOCTYPE>
<html lang="en">
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <title>User Validation</title>

</head>
<body>
<div style="margin-top: 50px;">
<div class="row">
  <div class="medium-6 medium-centered large-4 large-centered columns">

    <form class="form">
      <div class="row column log-in-form">
        
        <label>Email
          <input required type="text" name="email" id="email" placeholder="somebody@example.com"></input>
        </label>
        
        <p><input type="submit" class="button expanded" value="Submit"></input></p>
          </div>
    </form>
    
  </div>

</div>
<div id="res"  style="display:block;text-align:center;color:red;padding-right: 200px;font-size:20px;">
    </div>
</div>
</body>

<?php
}
else{
  $u=$GLOBALS['server_url']."Dashboard/login";
  header('Location: '.$u);
}
?>

<script type="text/javascript">
  jQuery(function($){
           $('.form').submit(function(e)
           {
              e.preventDefault();
              email=$('#email').val();
              console.log(email);
              $.ajax({
              url: "uservalidation.php", 
              type:'get',
              dataType:'json',
              data:{
               email:email
              },
              success: function(result) 
                {
                  //console.log(result);
                  //console.log(result['response']);
                  $('#res').empty();
                  if(result['response']==true){
                  $('#res').append('User exists');
                  }
                  else if(result['response']==false){
                  $('#res').append("User doesn't exists.");    
                  }
                  else if(result['errorMessage']=="not permitted"){
                    $('#res').append("Not permitted.");
                  }
             	  //console.log("ajax passed");
             },
              error:function(){
//                $('#res').empty();
  //            	$('#res').append("This user doesn't exists.");
                console.log("ajax failed");
              }
            });
           });
       });
  </script>