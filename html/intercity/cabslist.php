
<?php
include("conf.php");
$s1=$_GET['s1'];
$s2=$_GET['s2'];
$d1=$_GET['d1'];
$s3=$_GET['s3'];
$d2=$_GET['d2'];
$jtype=$_GET['jtype'];
$s4=$_GET['s4'];
//var_dump($s1);
error_reporting(E_ALL);
ini_set("display_errors", "1");
require_once('../utils/Http2.php');
$r = new HttpRequest("post", $GLOBALS['server_url']intercity/checkAvailability", array(
        "fromCity" => $s1,
        "toCity" => $s2,
        "fromDate" =>  $d1,
        "toDate" => $d2,
        "journey_type"=> $jtype,
        "no_of_passengers"=> $s4,
    ));
  if ($r->hasError()) {
    echo $r->getError();
      echo "sorry, an error occured";
      echo(json_encode(false));
  } 
  else {
  	// parse json 
     $js = json_decode($r->getResponse());
     $res=$js->{"response"};
     echo json_encode($res);
} 
     /*
     foreach ($res as $list) {
     $carmodel=$list->carModel;
     //var_dump($carmodel);
     $avail=$list->availability;
     $fare=$list->fare;
     $no=$list->noOfSeats; 
     $farepk=$list->fareperKm;
     $dist=$list->distance;
     $type=$list->type;
     $adv=$list->advance;
  	?>
<body>
    <div style="width:900px; margin:0 auto;border:solid 1px black;">
        <div class="car-icon inline">
            <span> <?php echo $carmodel; ?></span>
          </div>
            <div class="category inline">
                    <div class="cab-type-text "><?php echo $avail; ?></div>
            </div>
            <div class="ixiig go-verified-col inline" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="">
                   <span><?php echo $type; ?></span>
                </div>
            
          <div class="seat-info inline">
                <div class="no-of-seats"><?php echo $no; ?></div>
          </div>
          <div class="starting-fare inline">
                
                <div class="fare-short-tnc blk">
                   <?php echo $fare; echo $farepk; ?>
                </div>
          </div>
          <div class="starting-fare inline">
                
                <div class="fare-short-tnc blk">
                   <?php echo $adv; ?>
                </div>
          </div>
          <div class="starting-fare inline">
                
                <div class="fare-short-tnc blk">
                   <?php echo $dist; ?>
                </div>
          </div>
            </div>
</body>
<?php
  }
    }
    */
?>