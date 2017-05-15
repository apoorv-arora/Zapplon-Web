<?php
session_start();
include ("../../utils/conf.php");
// $bookingId=$_GET['bookingId'];
$uri = $_SERVER['REQUEST_URI'];
$mihpayu = urldecode($uri);
$parts = parse_url($mihpayu);
parse_str($parts['query'], $query);
$mihpayid = $query['mihpayid_'];
$status = $query['status'];
$booking =$query['bookingId'];
$array = explode('_', $booking);
$bookingId = $array[0];
include("../../utils/Http2.php");
$r = new HttpRequest("post", $GLOBALS['server_url']."intercity/bookings/payment", array(
        "client_id" => $GLOBALS['client_id'],
        "app_type" => $GLOBALS['app_type'],
        "bookingId" => $bookingId,
        "mid" => $mihpayid,
        "status" => $status
    	));
      //var_dump($r);
  		if ($r->getError()) {
      	echo "sorry, an error occured";
  		}	 
  		else {
      	// parse json 
        $js = json_decode($r->getResponse());
        echo "<script>window.location.href = ".$GLOBALS['localhost']."intercity/confirmBooking/confirm-booking.php';</script>";
        } 
?>

<!-- <button type="button" id="cancel" bid="<?php echo $bookingId; ?>" >Cancel</button>
<div id="result"></div> -->
<script type="text/javascript">
	$('#cancel').click(function(){
		var bid=$(this).attr('bid');
		console.log(bid);
		 $.ajax({
              url: "http://test.zapplon.com/intercity/cancel.php",
              type:'get',
              dataType:'json',
              data:{
               bookingId:bid
              },
              success: function(result)
                {
                	console.log(result);
                	if(result=="invalid booking")
                		document.getElementById('result').innerHTML="Invalid booking";
                	else
                		document.getElementById('result').innerHTML="Cancelled";
                 	console.log("passed");
             },
              error:function(){

               console.log("failed");
              }
            });
	});
</script>