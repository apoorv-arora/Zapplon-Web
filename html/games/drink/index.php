<?php
session_start(); 
$_SESSION['confignum']=3;
include ("../../conf.php");
?>
<html xmlns:fb = "http://www.facebook.com/2008/fbml">

<head>
  <title>How much can you drink?</title>
  <link 
  href = "http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" 
  rel = "stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="blurcss.css" />
  <link rel='icon' href='../images/favicon.ico' type='image/x-icon'/>
  <!-- Bootstrap Core CSS -->
  <link href="/games/drink/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main stylesheet -->
  <link href="/games/drink/assets/css/hallooou.css" rel="stylesheet">

  <style type="text/css">

  * {
    margin: 0;
    padding: 0;
  }

  .parallax-bg-1{
    padding: 300px 0;
    background-image: url(assets/images/Cab.jpg);
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
    background-image: url(assets/images/web_bg.jpg);
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
    background-image: url(assets/images/Cab.jpg);
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
    background-image: url(assets/images/web_bg.jpg);
    background-size: cover;
    background-position: center;
  }

  h4,h1,h3{
    color:#ff9900;
    font-family: avenir;
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
    margin: 1em 3em;
    margin-right: -4px;
    word-spacing: 4px;
    margin-left: 2.5em;
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
  background-color: white;
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

footer{
  background-color: white;
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
 margin-bottom: 18px;
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
<!-- app indexing-->
<link rel="alternate" href="android-app://com.pg.android/www.zapplon.com"/>


<!-- Plugin stylesheets -->
<link href="/games/drink/assets/css/plugins/owl.carousel.css" rel="stylesheet">
<link href="/games/drink/assets/css/plugins/owl.theme.css" rel="stylesheet">
<link href="/games/drink/assets/css/plugins/owl.transitions.css" rel="stylesheet">
<link href="/games/drink/assets/css/plugins/animate.css" rel="stylesheet">
<link href="/games/drink/assets/css/plugins/magnific-popup.css" rel="stylesheet">
<link href="/games/drink/assets/css/plugins/jquery.mb.YTPlayer.min.css" rel="stylesheet">


<!-- Custom Fonts -->
<link href="/games/drink/assets/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Raleway:100,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>


</head>

<body>   
 <div id="fb-root"></div>
 <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6&appId=1640657659526412";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
 </script>


 <?php if ($_SESSION['FBID']): ?>  <!-- after login -->

 <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div id="#page-top" class="container">
    <div class="navbar-header pull-left">
      <a class="navbar-brand page-scroll" href="#home">
        <!-- replace with your brand logo/text -->
        <span class="brand-logo"><a href="http://www.zapplon.com"><img src= "../images/logo.png" width="43" height="47"/></a>
          <!-- <img src="assets/images/logo.svg" onerror="this.src='assets/images/logo.png'; this.onerror=null;" alt="Zapplon" title="Zapplon" class="img-responsive"> --></span>
        </a>
      </div>
    </div><!-- /.container -->
  </nav>

  <br>

  <p style="color:#ffc206 ;font-size:36px ;font-family:Helvetica">
   How Much Can you Drink?
 </p>



 <link rel="stylesheet" type="text/css" href="boxcss.css" />



 <?php

 ?>
 <br>
 <br>
 <p>
  <img src="../images/background.jpg">;
  <DIV STYLE="position:absolute; top:250px; left:450px; right:300px ;bottom:500px;font-size:36px;font-color:#F7F2EF">
    <CENTER><strong><?php
    $result1 = array(
      " 5 bottles of beer ",
      "4 bottles of beer ",
      "50 bottles of beer",
      "10 bottles of beer",
      "1 bottle of beer",
      "8 bottles of beer ",
      "6 bottles of beer",
      "2 bottles of beer",
      "18 bottles of beer ",

      );
    shuffle($result1);
    for ($i = 0; $i < 1; $i++) {
      echo ($result1[$i]);
    }
    ?></strong></CENTER>
  </DIV>
  <DIV STYLE="position:absolute; top:350px; left:550px; right:370px;bottom:380px;font-size:36px;font-color:#F7F2EF">
    <CENTER><strong><?php


    $alcohol = array(
      "1 shot of alcohol",
      "2 shots of alcohol",
      "3 shots of alcohol",
      "4 shots of alcohol",
      "5 shots of alcohol",
      "50 shots of alcohol",
      "10 shots of alcohol",
      "13 shots of alcohol",
      "7 shots of alcohol",
      );

    shuffle($alcohol);
    for ($i = 0; $i < 1; $i++) {
      echo ($alcohol[$i]);
    }
    ?>

    <div result="<?php echo $alcohol[0]; ?>" id="result" ></div>
  </strong></CENTER>
</DIV>
<DIV STYLE="position:absolute; top:260px; left:90px; right:555px;bottom:400px;">
  <img src = "https://graph.facebook.com/<?php 
  echo $_SESSION['FBID']; ?>/picture" height="25%" width="24%" >

</DIV>
<DIV STYLE="position:absolute; top:450px; left:350px; right:395px;bottom:315px;font-size:16px;font-color:black ;align:center"><strong>
  Don't drink and drive. Ride with Zapplon</strong>
</DIV>


</p>
<br />
<div class="fb-comments"></div>            

<div STYLE="position:absolute; top:150%; left:20%; right:20% ;bottom:70%;" id="shareBtn">
  <?php 

  session_unset();
  $_SESSION['FBID'] = NULL;
  $_SESSION['FULLNAME'] = NULL;
  $_SESSION['EMAIL'] =  NULL;
         // session unset here ?>
         <div id="shareBtn"><img src="../images/fb.png" height="40%" width="40%"></div>
   <!--  
     <a href='https://www.facebook.com/sharer/sharer.php?u=http://zapplon.com/games/drink/index.php' target="_blank"></a>
   -->
 </div>       
 <!-- this is the marker-->
 <br>
 <div STYLE="position:absolute; top:160%; left:20%; right:20% ;bottom:70%;">
  <a target="_blank" href="https://play.google.com/store/apps/details?id=com.application.zapplon&referrer=1"><img src="../images/store.png" height="40%" width="40%" ></div>

   <br>

   <!-- Facebook like and Share -->
   <footer>
    <div style="background-color:#363536 ;position:absolute; top:180%;left:3%">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12 social segment">
            <br>
            <br>
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
          <a href="http://zapplon.wordpress.com" target="_blank">Blog</a>&nbsp; &nbsp;
          <a href="team.html" target="_blank">Team</a>&nbsp; &nbsp;
          <a href="career.html" target="_blank">Career</a>

        </center>

      </div>
      <div class="copynote">
        <div class="container">
          <div class="row">
            <div class="col- text-center">
              <a href="privacy.html" target="_blank">Privacy policy</a>
              <!-- /.col-md-12 -->
              <div class="col-text-center">
                <nav>
                  <h4><font color="#ffc206">&copy; 2015. Zapplon. All rights reserved.</font><h4>
                  </nav>
                </div><!-- /.col-md-12 -->
                <div class="col-text-center">
                 <a href="terms.html" target="_blank">Terms &amp; conditions</a>
               </div><!-- /.col-md-12 -->
             </div>
           </div><!-- /.row -->
         </div><!-- /.container -->
       </div><!-- /.copynote -->
     </div>
   </footer>





 <?php else: ?>     <!-- Before login --> 

 <div>
  <img src="../images/shots.gif" width="100%" height="20%">

  <style>
  .inner-container{
    width:400px;
    height:400px;
    position:absolute;
    top:calc(50vh - 200px);
    left:calc(50vw - 200px);
    overflow:hidden;
  }

  .box{
    position:absolute;
    height:100%;
    width:100%;
    font-family:Helvetica;
    color:#fff;
    background:rgba(0,0,0,0.13);
    padding:30px 0px;
  }
  .box h1{
    text-align:center;
    margin:30px 0;
    font-size:30px;
  }
  .box input{
    display:block;
    width:300px;
    margin:20px auto;
    padding:15px;
    background:rgba(0,0,0,0.2);
    color:#fff;
    border:0;
  }
  .box input:focus,.box input:active,.box button:focus,.box button:active{
    outline:none;
  }
  .box button{
    background:#2ecc71;
    border:0;
    color:#fff;
    padding:10px;
    font-size:20px;
    width:330px;
    margin:20px auto;
    display:block;
    cursor:pointer;
  }
  .box button:active{
    background:#27ae60;
  }
  .box p{
    font-size:14px;
    text-align:center;
  }
  .box p span{
    cursor:pointer;
    color:#666;
  }
  </style>
  <div class="inner-container" STYLE="position:absolute; top:20%; left:35%; right:20% ;bottom:50%">
    <div class="box">
      <h1><font color="white">How much can you drink ? Click to find out</font></h1>

      <?php
      $u=$GLOBALS['server_url']."utils/facebook/connect.php";
      ?>

      <a href = <?php echo $u; ?> ><img src="../images/fbbutton.png" height="500px" width="500px" ></a>

      <br>
    </div>
  </div>
</div>   
</div>
</div><!--don't delete this div-->
<!--this is the marker-->

<!-- Facebook like and Share -->
<div STYLE="position:absolute; top:95%; left:30%; right:30% ;bottom:25%">
  <div class="container">
    <div class="row- text-center">
      <div class="col-md-12 social segment">
        <h4 align="middle"><font color="white">Stay Connected</font></h4>
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

    <div class="col- text-center"align="middle">
      <a href="cities.html" target="_blank">Cities</a>&nbsp; &nbsp;
      <a href="http://zapplon.wordpress.com" target="_blank">Blog</a>&nbsp; &nbsp;
      <div class="col- text-center"align="middle">
        <a href="privacy.html" target="_blank" >Privacy policy</a>
        <!-- /.col-md-12 -->
        <div class="col-text-center" align="middle">
          <nav>     
            <font color="#ffc206">
              &copy; 2015. Zapplon. All rights reserved.
            </font>
          </nav>
        </div><!-- /.col-md-12 -->
        <div class="col-text-center" align="middle">
         <a href="terms.html" target="_blank">Terms &amp; conditions</a>
       </div><!-- /.col-md-12 -->
     </div>
                            <!--<a href="team.html" target="_blank">Team</a>&nbsp; &nbsp;
                            <a href="career.html" target="_blank">Career</a>-->
                          </div>

                        </div>

                      </div>



                    </div>

                  <?php endif ?>

                </body>

                <script>
              document.getElementById('shareBtn').onclick = function() {
                var res=document.getElementById('result').getAttribute('result');
                FB.ui({
                  method: 'share',
                  redirect_uri: 'http://zapplon.com/',
                  href: 'http://zapplon.com/games/drink/',
                  //picture: 'http://www.zapplon.com/games/'+res,
                }, function(response){

                });
              }
              </script>
                </html>


