<?php
include("../utils/conf.php");
?>
<!DOCTYPE html>
<html  lang="en"  prefix="og: http://ogp.me/ns#" >

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
   
<?php
  include("../meta.php");
  ?>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <link href="assets/css/hallooou.css" rel="stylesheet">
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,600' rel='stylesheet' type='text/css'>
    <link href="../assets/css/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="../assets/js/thumbnail-slider.js" type="text/javascript"></script>

    <link rel="stylesheet" href=<?php echo $GLOBALS['localhost'] ?>assets/css/header.css>
    <link rel="stylesheet" href=<?php echo $GLOBALS['localhost'] ?>assets/css/footer.css>
<link rel='icon' href='../assets/images/favicon.ico' type='image/x-icon'/ >
    <link rel="stylesheet" type="text/css" href="../assets/css/styleloginnew.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/style.css" />
    <link type="text/css" rel="stylesheet" href="../assets/css/styleform.css" />
    <link type="text/css" rel="stylesheet" href="../assets/css/app-style.css" />

    <link href="style.css" rel="stylesheet">

    <script type="text/javascript" src="../assets/js/disable-city.js"></script>
    <script type="text/javascript" src="../assets/js/intercity.js"></script>
    

     <link rel="stylesheet" type="text/css" href="../assets/css/style_footer_1.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style_footer_2.css" />
    
    
    <!--[if IE 8]>
    <script type="text/javascript" src="https://b.zmtcdn.com/application/javascript/respond.min.js"></script>
    <script type="text/javascript" src="https://b.zmtcdn.com/application/javascript/pie.js"></script>
    <![endif]-->
</head>
<body class="bd-txt-bg is-responsive en"  >

    
    <script>dataLayer = [];</script>

    <div class="ghboxcontainer"  style="visibility: hidden; display: none;"><div id="ghbox"></div></div>

    <div class="screen-block hidden"></div>
    
    
    <!-- header template -->
    <?php include('../template/header.php'); ?>
    <!-- header file template -->
    
    <div id="resp-search-container" class="search-box-area"></div>

    <div class="wrapper mtop  mbot">
      <div class="imagery2 mtop2 static_bg_cover" style="background: #000000 url(../assets/images/background/contactus.png) bottom center no-repeat;   width: 100%;border-radius: .28571429rem;background-size: cover;">


        <div id="resp-search-container" class="search-box-area"></div>

        <div class="hero row">
            <div class=""></div>
            <div class="col-s-16 ">
              <div class="tac hero_cover_text">
                  <p class="hero_title collections_title hero_cover_title hero_cover_width" >We would love to hear from you!</p>
              </div>
          </div>
      </div>
      <!-- /hero-about -->

  </div>
</div>


<div>

    <section id="contact">

        <div class="bd-txt-bg wrapper ">
            <div class="ui  grid ">
                <div class=" sixteen wide  column">
                    <div class="ui segment">
                        <form id="contact-form" class="ui form " method="POST" action="" style="padding:10px;">
                            <input type="hidden" name="csrf_token" id="csrf_token" value="e3b1ea10f74a9a3e9be54e49ced1931f" />
                            <div class="field">
                                <input class="contact-box zomato-form-input" id="name" type="text" name="name" autofocus="" value="" placeholder="Name*" required/>
                            </div>

                            <div class="field">
                                <input class="contact-box zomato-form-input" type="email" id="email" name="email" value="" placeholder="Email*" required/>
                            </div>

                            <div class="field">
                                <input class="contact-box zomato-form-input" type="text" id="phone" name="phone" value="" placeholder="Phone number (optional)" required/>
                            </div>

                            <div class="field">
                                <textarea class="contact-box zomato-form-input" type="text" id="message" name="message" rows="8" placeholder="Message*" required/></textarea>
                            </div>
                            <div class="ui error message">
                                <p></p>
                            </div>
                            <button id="contact-form-submit" type="submit" name="submit" class="ui button red">
                                Send Message                            </button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

            <div class="contact-page-phone-container wrapper mtop mbot2">
                <div class="contact-footer">
                   <div class="bd-txt-bg ">
                    <div class="ptop2 pbot2 ui segment wrapper mbot2">



                        <!-- Contact section -->
                        <section id="contact" class="contact content-section no-bottom-pad wow fadeIn" data-wow-offset="10">
                            <div id="wrapper4">

                                <div class="container-fluid buffer-forty-top">
                                    <div class="row">
                                        <div id="wrapper5">
                                            <section id="cd-google-map no-bottom-pad">
                                                <div id="google-container"></div>
                                                <div id="cd-zoom-in"></div>
                                                <div id="cd-zoom-out"></div>
                                            </section>
                                        </div><!-- /.row -->
                                    </div><!-- /.container-fluid -->
                                    
                                    
                                    <div class="row text-center">
                                        <div class="col-md-12">

                                            <h2>Contact Us</h2>
                                            <h3 class="caption gray"><strong>Feel free to get in touch with us if you want to share something or simply buy us a coffee.</strong></h3>
                                            <i class="fa fa-map-marker fa-fw"></i><strong> 1/5 &amp; 1/6 First Floor<strong>,
                                            <br /><strong>Garage Block Regal Building</strong>
                                            <br /><strong>Connaught Circus</strong>
                                            <br /><strong>New Delhi, 110001</strong>
                                            <i class="fa fa-envelope fa-fw"></i><strong>hello@zapplon.com<strong><br />
                                            <i class="fa fa-phone fa-fw"></i><strong>+91 (0) 99588 35 333</strong>

                                        </div><!-- /.col-md-12 -->

                                    </div><!-- /.row -->
                                </div>
                            </div>
                            
                        </section>

                        
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /contact-footer /v-wrapper -->
</div>

</section>

</div>
<!-- /wrapper -->

<?php
include('../template/footer.php');?>

<div class="clear" id="fb-root"></div>


<script>
// Google map API
$(function() {

    //set your google maps parameters
    var latitude = 28.630457,
    longitude = 77.216465,
    map_zoom = 14;

    //google map custom marker icon - .png fallback for IE11
    var is_internetExplorer11 = navigator.userAgent.toLowerCase().indexOf('trident') > -1;
    var marker_url = (is_internetExplorer11) ? 'assets/images/cd-icon-location.png' : 'assets/images/cd-icon-location.svg';

    //define the basic color of your map, plus a value for saturation and brightness
    var main_color = '#2d313f',
    saturation_value = -90,
    brightness_value = 2;

    //we define here the style of the map
    var style = [{
            //set saturation for the labels on the map
            elementType: "labels",
            stylers: [{
                saturation: saturation_value
            }]
        }, { //poi stands for point of interest - don't show these lables on the map 
        featureType: "poi",
        elementType: "labels",
        stylers: [{
            visibility: "off"
        }]
    }, {
            //don't show highways lables on the map
            featureType: 'road.highway',
            elementType: 'labels',
            stylers: [{
                visibility: "off"
            }]
        }, {
            //don't show local road lables on the map
            featureType: "road.local",
            elementType: "labels.icon",
            stylers: [{
                visibility: "off"
            }]
        }, {
            //don't show arterial road lables on the map
            featureType: "road.arterial",
            elementType: "labels.icon",
            stylers: [{
                visibility: "off"
            }]
        }, {
            //don't show road lables on the map
            featureType: "road",
            elementType: "geometry.stroke",
            stylers: [{
                visibility: "off"
            }]
        },
        //style different elements on the map
        {
            featureType: "transit",
            elementType: "geometry.fill",
            stylers: [{
                hue: main_color
            }, {
                visibility: "on"
            }, {
                lightness: brightness_value
            }, {
                saturation: saturation_value
            }]
        }, {
            featureType: "poi",
            elementType: "geometry.fill",
            stylers: [{
                hue: main_color
            }, {
                visibility: "on"
            }, {
                lightness: brightness_value
            }, {
                saturation: saturation_value
            }]
        }, {
            featureType: "poi.government",
            elementType: "geometry.fill",
            stylers: [{
                hue: main_color
            }, {
                visibility: "on"
            }, {
                lightness: brightness_value
            }, {
                saturation: saturation_value
            }]
        }, {
            featureType: "poi.sport_complex",
            elementType: "geometry.fill",
            stylers: [{
                hue: main_color
            }, {
                visibility: "on"
            }, {
                lightness: brightness_value
            }, {
                saturation: saturation_value
            }]
        }, {
            featureType: "poi.attraction",
            elementType: "geometry.fill",
            stylers: [{
                hue: main_color
            }, {
                visibility: "on"
            }, {
                lightness: brightness_value
            }, {
                saturation: saturation_value
            }]
        }, {
            featureType: "poi.business",
            elementType: "geometry.fill",
            stylers: [{
                hue: main_color
            }, {
                visibility: "on"
            }, {
                lightness: brightness_value
            }, {
                saturation: saturation_value
            }]
        }, {
            featureType: "transit",
            elementType: "geometry.fill",
            stylers: [{
                hue: main_color
            }, {
                visibility: "on"
            }, {
                lightness: brightness_value
            }, {
                saturation: saturation_value
            }]
        }, {
            featureType: "transit.station",
            elementType: "geometry.fill",
            stylers: [{
                hue: main_color
            }, {
                visibility: "on"
            }, {
                lightness: brightness_value
            }, {
                saturation: saturation_value
            }]
        }, {
            featureType: "landscape",
            stylers: [{
                hue: main_color
            }, {
                visibility: "on"
            }, {
                lightness: brightness_value
            }, {
                saturation: saturation_value
            }]

        }, {
            featureType: "road",
            elementType: "geometry.fill",
            stylers: [{
                hue: main_color
            }, {
                visibility: "on"
            }, {
                lightness: brightness_value
            }, {
                saturation: saturation_value
            }]
        }, {
            featureType: "road.highway",
            elementType: "geometry.fill",
            stylers: [{
                hue: main_color
            }, {
                visibility: "on"
            }, {
                lightness: brightness_value
            }, {
                saturation: saturation_value
            }]
        }, {
            featureType: "water",
            elementType: "geometry",
            stylers: [{
                hue: main_color
            }, {
                visibility: "on"
            }, {
                lightness: brightness_value
            }, {
                saturation: saturation_value
            }]
        }
        ];

    //set google map options
    var map_options = {
        center: new google.maps.LatLng(latitude, longitude),
        zoom: map_zoom,
        panControl: false,
        zoomControl: false,
        mapTypeControl: false,
        streetViewControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        scrollwheel: false,
        styles: style,
    }
        //inizialize the map
        var map = new google.maps.Map(document.getElementById('google-container'), map_options);
    //add a custom marker to the map                
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(latitude, longitude),
        map: map,
        visible: true,
        icon: marker_url,
    });

    //add custom buttons for the zoom-in/zoom-out on the map
    function CustomZoomControl(controlDiv, map) {
        //grap the zoom elements from the DOM and insert them in the map 
        var controlUIzoomIn = document.getElementById('cd-zoom-in'),
        controlUIzoomOut = document.getElementById('cd-zoom-out');
        controlDiv.appendChild(controlUIzoomIn);
        controlDiv.appendChild(controlUIzoomOut);

        // Setup the click event listeners and zoom-in or out according to the clicked element
        google.maps.event.addDomListener(controlUIzoomIn, 'click', function() {
            map.setZoom(map.getZoom() + 1)
        });
        google.maps.event.addDomListener(controlUIzoomOut, 'click', function() {
            map.setZoom(map.getZoom() - 1)
        });
    }

    var zoomControlDiv = document.createElement('div');
    var zoomControl = new CustomZoomControl(zoomControlDiv, map);

    //insert the zoom div on the top left of the map
    map.controls[google.maps.ControlPosition.LEFT_TOP].push(zoomControlDiv);

});


</script>


<script src="assets/js/hallooou.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoVKfEihX__NdMwdDysA6Vve6PE9Ierj4"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>        
</body>

<script type="text/javascript">
  var business = document.getElementById('business');
  var cities = document.getElementById('cities');
business.setAttribute("style", "font-size:24px;margin-bottom:20px;");
cities.setAttribute("style", "font-size:24px;margin-bottom:20px;");
</script>
</html>

