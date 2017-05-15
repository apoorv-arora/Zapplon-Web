
  <script type="text/javascript" src="../../assets/js/jquery.min.js"></script>
<?php
session_start();
include ("../../utils/conf.php");
$bookingId=$_GET['bookingId'];

include("../../utils/Http2.php");
$r = new HttpRequest("post", $GLOBALS['server_url']."bookings/payment", array(
        "client_id" => $GLOBALS['client_id'],
        "app_type" => $GLOBALS['app_type'],
        "bookingId" => $bookingId,
        "status" => $status
    	));
  		if ($r->getError()) {
      	echo "sorry, an error occured";
  		}	 
  		else {
      	// parse json 
        $js = json_decode($r->getResponse());
        ?><!-- 
<button type="button" id="cancel" bid="<?php echo $bookingId; ?>" >Cancel</button>
<div id="result"></div> -->
        >?
        } 
?>

<button type="button" id="cancel" bid="<?php echo $bookingId; ?>" >Cancel</button>
<div id="result"></div>
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