<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zapplon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
  <link type="text/css" rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/style1.css">

  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
  
  <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js1/script.js"></script>
  
  <!-- The following code is to be placed in the header of the page -->
  <SCRIPT LANGUAGE="JavaScript">
  function DayDiff(CurrentDate)
  {
    var TYear=CurrentDate.getFullYear();
    var TDay=new Date("July, 31, 2016");
    TDay.getFullYear(TYear);
    var DayCount=(TDay-CurrentDate)/(1000*60*60*24);
    DayCount=Math.round(DayCount); 
    return(DayCount);
  }
  </SCRIPT>
  <style type="text/css">

  * {
    margin: 0;
    padding: 0;
  }

  table{
    width:100%;
    table-layout: fixed;
  }
  .tbl-header{
    background-color: rgba(255,255,255,0.3);
    margin-top: 5%;
  }
  .tbl-content{
    height:100%;
    overflow-x:auto;
    margin-top: 0px;
    border: 1px solid rgba(255,255,255,0.3);
    text-align: center;
  }
  th{
    background-color: #001a33;
    padding: 20px 15px;
    text-align: left;
    font-weight: 500;
    font-size: 12px;
    color: #fff;
    text-transform: uppercase;
    text-align: center;
  }
  
 td{ 
   padding: 15px;
   vertical-align:middle;
   font-weight: 300;
   font-size: 12px;
   color: #212121;
   border-bottom: solid 1px rgba(255,255,255,0.1);
   text-align: center;
 }


 .parallax-bg-1{
  padding: 300px 0;
  background-image: url(../assets/images/Cab.jpg);
  background-size: cover;
  background-position: center;
  max-width: 100%;
  max-height: 100%;
  margin: auto;
  overflow: auto;
  background-attachment: fixed;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

.who{
  background-image: url(../assets/images/web_bg.jpg);
  background-size: cover;
  background-position: center;
  max-width: 100%;
  max-height: 100%;
  margin: auto;
  overflow: auto;
  background-attachment: fixed;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.parallax-bg-1{
  padding: 300px 0;
  background-image: url(../assets/images/Cab.jpg);
  background-size: cover;
  background-position: center;
  max-width: 100%;
  max-height: 100%;
  margin: auto;
  overflow: auto;
  background-attachment: fixed;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.who{
  background-image: url(../assets/images/web_bg.jpg);
  background-size: cover;
  background-position: center;
}


h4,h1,h3{
  color:#ff9900;
  font-family: avenir;
}

.div_hover { 
  background-color: #3b5998; 
  text-decoration: none;
}

.div_hover:hover {
  background-color: #2d477e;
  text-decoration: none;
}

.cabs{
  background-color:white;
  max-width: 100%;
  max-height: 100%;
  -webkit-transition: all 0.2s ease;
  -moz-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
.nav{
  display: inline-block;
  word-spacing: 4px;
  padding: 0 7em 2em 0;
  border-width: 2px;
}
#nav a {
  text-decoration: none;
  font-family: avenir;
  font-size: 24px;
  font-style: normal;
  font-weight: normal;
  text-transform: normal;
  letter-spacing: normal;
  line-height: 1.3em;
}
} 
.font{
  font-family: avenir;
  font-size: 16px;
  color:white;
}
h2,h6{
  color:#ff9900;
}

footer{
  background-color: #262933;
  width: 100%;
}

#wow{
  width: 100%;
  height: auto;
  background-size: 100% auto !important;
}

.font{
  font-family: avenir;
  font-size: 16px;
  color:white;
}
h2,h6{
  color:#ff9900;
}
a:hover{
  color:orange;
}

.google-container{
  width: 500px;
  height: 400px;
}
.byline {
 color: #9799a7;
 font-family: Georgia, Times, "Times New Roman", serif;
 font-style: italic;
}

</style>
 <style>
        .round {
                border-radius: 50%;
                overflow: hidden;
                width: 50px;
                height:50px;
            }
        .round img {
                display: block;
                min-width: 100%;
                min-height: 100%;
                  }
         .img-circle {
    border-radius: 50%;
    width: 80px;
    height: 80px;
}         
  </style>
<!-- FB like and share -->
<style>
#inner {
  width: 100%;
  margin: 0 auto; 
}

.google-container{
  width: 500px;
  height: 400px;
}
.byline {
 color: #9799a7;
 font-family: Georgia, Times, "Times New Roman", serif;
 font-style: italic;
 margin-bottom: 18px;
}
.grayscale2{
  background-color: #676767;
  background-size: cover;
  background-position: center;
  min-width: 992px;  
  min-height: 150px;
}

</style>
<!-- FB like and share -->
<style>
#inner {
  width: 100%;
  margin: 0 auto; 
}




</style>
</head>

<body>
  <div class="container">
    <!-- Trigger the modal with a button -->
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top">
      <div id="#page-top" class="container">
        <div class="navbar-header pull-left">
          <a class="navbar-brand page-scroll" href="http://zapplon.com">
            <span class="brand-logo"><img src= "../assets/images/logo.png" width="43" height="47" alt="Zapplon"/></span>
          </a>
        </div>
        <div class="main-nav pull-right">
          <div class="button_container toggle">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
          </div>
        </div>
      </div>
    </nav>

    <!-- Modal -->
    <section id="coming_soon" class="content-section">

      <div class="row text-center">

        <div class="col-md-12 text-center">
          <h2>Zapplon Leaderboard</h2>
          <br />
          <p>Use Zapplon to make your cab bookings and win wonderful prizes from us</p>
          <p>Top 3 users who make the most number of bookings will be featured here and win gift prizes. Winners will be declared on 31st July.</p>
        </div>
        <SCRIPT LANGUAGE="JavaScript">
        <!-- Hide content from non Javascript browsers
        var Today   = new Date();
        var z1 = DayDiff(Today);
        document.write("Just " + z1 + " days left until closing. Hurry!!!");
  // End of hiding JavaScript code from old browsers -->
  </SCRIPT>
</div>



</section>  <!--this is the marker-->

<section> <!--for demo wrap--> 
  <div  class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Leaders</th>
          <th></th>
          <th>Bookings</th>
        </tr>
      </thead>
    </table>
  </div>

  <div  class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <tr>
          <?php
          include("../utils/conf.php");
          require_once('../utils/Http2.php');
          $r = new HttpRequest("post", $GLOBALS['server_url']."booking/leaderboard", array(
           "client_id" => $GLOBALS['client_id'],
           "app_type" => $GLOBALS['app_type']
           ));
          if ($r->getError()) {
           echo "sorry, an error occured";
         }  
         else {
          $js = json_decode($r->getResponse());
          $obj=$js->response;

          foreach ($obj as $value) {
            ?>

            <tr>
              <td>

                <img src="<?php echo $value->url ?>"  class="img-circle"/>

              </td>
              <td><b><?php echo $value->name ?></b></td>
              <td><?php echo $value->count ?></td>
            </tr>
            <?php
          }
        } 

        ?>

      </tbody>
    </table>
  </div>
</section>
</div>
<footer>
  <div class="copynote">

    <div class="row text-center">
      <div class="col-md-12 social segment">
        <h4><font color="#9a9a9a">Stay Connected</font></h4>
        <a href="https://www.facebook.com/Zapplon-412520788943370/?fref=ts" target="_blank"><i class="fa fa-facebook fa-3x"></i></a>
        <a href="https://www.linkedin.com/company/10168009?trk=prof-exp-company-name" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a>
      </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

    <div align="middle" id="inner" class="fb-like" data-href="https://www.facebook.com/zapplon1/?fref=ts" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true">
    </div>
    <!-- end -->
    <div align="middle" id="inner">
      <!-- Twitter Share a link -->
      <span align="middle"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://zapplon1.com/" data-via="Zapplon" data-size="large" data-related="Zapplon" data-hashtags="CabBooking">Tweet</a></span>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

      <!-- Twitter Follow Zapplon -->  
      <a href="https://twitter.com/Zapplon" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @Zapplon</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>

    <center>
      <a href="cities.html" target="_blank">Cities</a>&nbsp; &nbsp;
      <a href="https://zapplon.wordpress.com/" target="_blank">Blog</a>
    </center>
    <div class="row">
      <div class="col- text-center">
        <a href="privacy.html" target="_blank">Privacy policy</a>
        <!-- /.col-md-12 -->
        <div class="col-text-center">
          <nav>
            &copy; 2015. Zapplon. All rights reserved.
          </nav>
        </div><!-- /.col-md-12 -->
        <div class="col-text-center">
         <a href="terms.html" target="_blank">Terms &amp; conditions</a>
       </div><!-- /.col-md-12 -->
     </div>
   </div><!-- /.row -->

 </div><!-- /.copynote -->
</footer>
</div>
</body>
</html>