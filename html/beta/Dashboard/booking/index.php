<?php
session_start();
include("../../utils/conf.php");
if(@$_SESSION['token'])
{
?>
<!DOCTYPE>
<html lang="en">
<head>
<title>Booking</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/css/foundation.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <meta charset="UTF-8">  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#datepick" ).datepicker();
  });
  </script>
</head>
<body>
<div style="align:center;display: block;">
 <form class="form" style="margin-left: 350px;">
 <span style="display: inline-block;">
From Date: <input  type="text" id="datepicker" class="from" required>
</span>
<span style="display: inline-block;">
 To Date: <input type="text" id="datepick" class="to" required>
 </span>
 <span style="display: block;margin-left: 80px;">
 <input type="submit" class="button expanded" value="Submit">
 </span>
 </form>
 <div style="margin-left: 10px;">
   <section > 
   <table cellpadding="0" cellspacing="0" border="1"> <thead><tr> <th>Type</th> <th>Status</th> <th>Pickup</th> <th>Pick Lat</th> <th>Pick Long</th> <th>Drop</th> <th>Drop Lat</th> <th>Drop Long</th> <th>Driver Lat</th> <th>Driver Long</th> <th>Created</th> <th>Amount</th> </tr></thead>
   

   <tbody id="res"> </table></section>
 </div>
 </div>
</body>
</html>
<?php
}
else{

    $u=$GLOBALS['localhost']."Dashboard/login";
    header('Location: '.$u);
}
?>
<script type="text/javascript">
  jQuery(function($){
           $('.form').submit(function(e)
           {
              e.preventDefault();
              fro=$('.from').val();
              to=$('.to').val();
              console.log(fro);
              console.log(to);
              $.ajax({
              url: "numbooking.php", 
              type:'get',
              dataType:'json',
              data:{
               from:fro,
               to:to
              },
              success: function(result) 
                {
                  console.log(result);
                  $('#res').empty();
                  if(result['errorMessage']=="not permitted"){
                    $('#res').append("Not permitted.");
                  }
                  else {

                  console.log(result.response);
                  var arr=result.response;
                  console.log(arr[0]);
                    for(var i=0;i<arr.length;i++)
                    {

                      if(!arr[i]['pickup_address'] && arr[i]['pickup_address']!= 0 )
                        arr[i]['pickup_address']="NULL";
                      
                      if(!arr[i]['drop_address'] && arr[i]['drop_address']!= 0 )
                        arr[i]['drop_address']="NULL";

                      if(!arr[i]['pickupLatitude'] && arr[i]['pickupLatitude']!= 0 )
                        arr[i]['pickupLatitude']="NULL";

                      if(!arr[i]['pickupLongitude'] && arr[i]['pickupLongitude']!= 0 )
                        arr[i]['pickupLongitude']="NULL";

                      if(!arr[i]['dropLatitude'] && arr[i]['dropLatitude']!= 0 )
                        arr[i]['dropLatitude']="NULL";

                      if(!arr[i]['dropLongitude'] && arr[i]['dropLongitude']!= 0 )
                        arr[i]['dropLongitude']="NULL";

                      if(!arr[i]['driver_lat'] && arr[i]['driver_lat']!= 0 )
                        arr[i]['driver_lat']="NULL";

                      if(!arr[i]['driver_lng'] && arr[i]['driver_lng']!= 0 )
                        arr[i]['driver_lng']="NULL";

                      if(!arr[i]['amount'] && arr[i]['amount']!= 0 )
                        arr[i]['amount']="NULL";

                      if(!arr[i]['type'] && arr[i]['type']!= 0)
                       var typ="NULL";
                      else{


                      var typ=arr[i]['type'];

                      if(typ == 5)
                   typ="UBER";
      else if(typ == 6)
        typ="OLA";
      else if(typ== 7){
        typ="EASY CABS";
      }
      else if(typ == 8){
        typ="JUGNOO";
      }
      else if(typ == 9){
        typ="MEGA CABS";
      }
    }
      if(!arr[i]['status'] && arr[i]['status']!= 0)
        var status="NULL";
      else
      {
      var status=arr[i]['status'];
      if(status== 100) stat="no booking";
      else if(status==101) stat="call driver";
      else if(status==102) stat="call location";
      else if(status==103) stat="trip started";
      else if(status==104) stat="trip end";
      else if(status==105) stat="booking cancelled";
      else if(status==106) stat="cashback sent";
      }
      var d=new Date(arr[i]['created']).toUTCString();

                    $('#res').append(' <tr> <td>'+ typ +'</td><td>'+stat +'</td><td>'+arr[i]['pickup_address'] +'</td><td>'+ arr[i]['pickupLatitude']+'</td><td>'+ arr[i]['pickupLongitude']+'</td><td>'+ arr[i]['drop_address']+'</td><td>'+ arr[i]['dropLatitude']+'</td> <td>'+arr[i]['dropLongitude'] +'</td> <td>'+arr[i]['driver_lat'] +'</td> <td>'+arr[i]['driver_lng'] +'</td> <td>'+ d +'</td> <td>'+arr[i]['amount'] +'</td> </tr>');
                    
                     }
                  
                  }
             	    console.log("ajax passed");
             },
              error:function(){
                 $('#res').empty();
                console.log("ajax failed");
              }
            });
           });
       });
  </script>