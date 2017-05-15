<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="jquery.easing.1.3.js"></script>

    <!-- we provide marker for google maps, so here it comes  -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCPCQOBTl-PhTzvn7FP34rLqf_stNHDUjk"></script>


    <script src="node_modules/socket.io/node_modules/socket.io-client/socket.io.js"></script>

    <style type="text/css">
    #map {width:100%;height: 400px;}
    #map {
        position:
        relative;
    }

    #map:after {
        width: 22px;
        height: 40px;
        display:
        block;
        content: ' ';
        position:
        absolute;
        top: 50%;
        left: 50%;
        margin:
        -40px 0 0 -11px;
        background:
        url('https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi_hdpi.png');
        background-size: 22px 40px; /* Since I used the HiDPI marker version this compensates for the 2x size */
        pointer-events:
        none; /* This disables clicks on the marker. Not fully supported by all major browsers, though */
    }
    </style>
    <style>
    pre.ui-coordinates
    {
        position:
        absolute;
        bottom:10px;
        left:10px;
        padding:5px 10px;
        background:
        rgba(0,0,0,0.5);
        color:
        #fff;
        font-size:11px;
        line-height:18px;
        border-radius:3px;
    }
    </style>
    <script type="text/javascript">

    $(document).ready(function(e)
    {
        var map;
        var faisalabad = {lat:31.4181, lng:73.0776};
        var f= {lat:31.4181,lng:73.0720};
        function initMap(lat,lng)
        {

            console.log("initmap ")
            var initial = {lat:lat, lng:lng};
            map = new google.maps.Map(document.getElementById('map'),
            {
                zoom: 15,
                center:initial
            //center: faisalabad
        });
        }

        function SetMarker(response)
        {

            console.log(response.driver_name);
            document.getElementById("coordinates").innerHTML = "Driver name:"+ response.driver_name + "<br>cab number: "+response.cab_number + "<br>cab model:" +response.cab_model+"<br>driver number:"+response.driver_number+"<br><a href='"+shareurl+"' target='_blank'><button type='button' value='Share'>Share</button></a> ";
            position= {lat:response.driver_lat,lng:response.driver_lng};
            map.setCenter(
            {
                lat : position.lat,
                lng : position.lng
            });

        };


        var socket=io.connect("http://zapplon.com:8000");
        console.log("at client2");
        var bid = document.getElementsByTagName("h1")[0].getAttribute("bid");
        shareurl="http://zapplon.com/tracking/cl2.php?key="+bid;
    // console.log(bid);

    socket.emit("shareurl",bid);
    //socket.emit("newconnection",bid);
    socket.on("initial",function(data)
    {
        console.log("in initial");
        console.log(data.response.pickupLatitude);
        initMap(data.response.pickupLatitude,data.response.pickupLongitude);
    }) ;

    socket.on("newnotification",function(data)
    {
        console.log("in new notification");
        resp=data.response;
        bid=resp.bookingId;
        dname=resp.driver_name;
        dnumber=resp.driver_number;
        cabno=resp.cab_number;
        lat=resp.driver_lat;
        lng=resp.driver_lng;
        console.log(lat);
        console.log(lng);
        status=resp.status;
        SetMarker(resp);
    });
});
</script>
<?php
$bid=$_GET['key'];
?>
<h1 bid="<?php echo $bid; ?>"></h1>
<div id="map">Map will be here</div>
<pre id='coordinates' class='ui-coordinates'></pre>


<style type="text/css">
#map {width:100%;height: 400px;}
</style>
<script type="text/javascript">
</script>