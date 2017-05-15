<?php
session_start(); 
$_SESSION['confignum']=4;
include ("../../conf.php");
?>
<html xmlns:fb = "http://www.facebook.com/2008/fbml">

<head>
  <title>What does your name say about you ?</title>
  <link 
  href = "http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" 
  rel = "stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
  <link rel='icon' href='../images/favicon.ico' type='image/x-icon'/ >
  <!-- Bootstrap Core CSS -->
  <link href="../games/drink/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main stylesheet -->
  <link href="../games/drink/assets/css/hallooou.css" rel="stylesheet">

  <!-- Color stylesheet -->
  <!-- <link href="assets/css/colors.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/colors_2.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/colors_3.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/colors_4.css" rel="stylesheet"> -->

  <!-- Styling for Parallex Scrolling -->

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

 <div class = "container">

    <br>
    <br>
    <div class = "hero-unit">
     <p style="color:#26478A ;font-size:56px ;font-family:Algerian">
         Your result is :
     </p>
 </div>

 <link rel="stylesheet" type="text/css" href="boxcss.css" />

 <p>
    <DIV STYLE="position:absolute; top:40%; left:20%; right:20%;bottom:40%;">
      <img src = "https://graph.facebook.com/<?php 
      echo $_SESSION['FBID']; ?>/picture" height="8%" width="18%" >
  </DIV> 

  <DIV STYLE="position:absolute; top:70%; left:20%; right:20% ;bottom:70%x;font-size:26px;font-color:#F7F2EF;line-height:120%;text-center;">
    <CENTER><strong><?php
    $result1 = array(
     " You are peaceful and content.
     You are chilled out and you go with the flow. You are open and easy-going. Virtually nothing could shake the calm world you live in. You are so happy and content that people around you ask themselves what your secret is. You are friendly, charming and kind. You get along with almost anyone. You know how to bring people together. 
     ",
     "You are clever and curious.
     You always try to learn more, you are balanced, tidy, and well organised. In your life, everything has its place. You come across as energetic and competent. This gives you an edge, especially in your job. You are stubborn and headstrong; in any case, you have a dominant personality. You are truly original: you have incredible ideas and the strength to put them into action. You quickly achieve success, especially in your job or in your studies.
     ",
     "You are philosophical and intuitive.
     You are more of a philosopher and a thinker. You like to analyse every aspect of your life. You are intuitive, bright, and quite introverted. It often seems like you are distant and would prefer to mind your own business. Normally, you are the best at whatever you do. You understand the world better than most. Your imagination knows no limit and you often get lost in it. Paranoia and jealousy can possess you in a split second and sometimes you just go too far.
     ",
     "You are strong and driven.
     You are confident, assertive and competent. It isn't easy to intimidate you. You easily overcome every challenge you are faced with, and you don't even have to work hard to get what you want. You live your life the way you want and you sweep everyone who wants to stop you out of the way. Normally, you are the best at whatever you do. You strive for perfection. You are self-assured, authoritative and aggressive. 
     ",
     "You are reasonable and trustworthy.
     You are just, sincere, and logical in your thinking. You are a natural born leader and people respect you. You never give up and will certainly be successful...even if it means trying time and time again. You are rational enough to understand every aspect of the challenges you are faced with. You really know how to give good advice. You are open and easy-going. Virtually nothing could shake the calm world you live in.
     ",
     "You are bold and courageous.
     You're often restless and full of questions about life. You like to travel, preferably to remote locations. You like to be far away from home. You are passionate and easy to tempt, which isn't always a good thing. You are touchy and it doesn't take much to put you in a flurry...which can be good as well as bad. You are enthusiastic, but your enthusiasm can quickly fade. You can't concentrate yourself on something for too long and you always want to do lots of stuff in very little time, which means it is hard to stop once you have started.
     ",
     "You are intelligent and intuitive.
     You are friendly, charming, and kind. You get along with almost anyone. You have a fantastic brain and you are great at science. You are calm as water and meditate a lot. You are intuitive and wise. You understand the world better than most. Your imagination knows no limit and you often get lost in it. You are spiritual and an honest believer of religion. You are just, sincere, and logical in your thinking. You never give up and will certainly be successful...even if it means trying again and again. 
     ",
     "You are hyperactive and full of energy.
     You are wild, crazy, and a true rebel. You are full of energy and most people have a hard time interacting with you because you are so demanding. It is sometimes very difficult to deal with you and it doesn't take long before you find yourself in trouble. You are hyperactive and you never slow down, even when it wouldn't be such a bad idea to do so. You can work like a horse during the day, and still find the energy to hop from bar to bar at night. Your energy is contagious and people are fascinated by you.
     ",
     " You are a natural born leader.
     You have earned respect of people around you. You are rational enough to understand every aspect of the challenges you are faced with. You really know how to give good advice. You are open and easy-going. Virtually nothing could shake the calm world you live in. You never give up and will certainly be successful...even if it means trying time and time again. You are friendly, charming and kind. You get along with almost anyone. You know how to bring people together. 
     ",

     );
shuffle($result1);
for ($i = 0; $i < 1; $i++) {
 echo ($result1[$i]);
}
?>
<div result="<?php echo $result1[0]; ?>" id="result" ></div>
</strong></CENTER>
</DIV>
</p>


<br />
<br>
<br>
<div class="fb-comments"STYLE="position:absolute; top:125%; left:20%; right:20% ;bottom:70%;"></div>


<br />

<div STYLE="position:absolute; top:180%; left:20%; right:20% ;bottom:70%;">
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

 <div STYLE="position:absolute; top:190%; left:20%; right:20% ;bottom:70%;">
  <a target="_blank" href="https://play.google.com/store/apps/details?id=com.application.zapplon&referrer=1"><img src="../images/store.png" height="40%" width="40%" ></div>
      <br>


		 		<!--<br>		
		 <div class="fb-share-button" data-href="https:///games/drink/index.php" data-layout="button_count" data-mobile-iframe="true"></div>
     -->
     <br>

	<!-- <div id="footer">
Designed by <a href="http://www.zapplon.com/">Zapplon.com</a>
</div>
-->
<!-- Facebook like and Share -->
<footer>
    <div style="background-color:#363536;position:absolute; top:220%">
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




        </div>
        <div class="copynote">
            <div class="container">
                <div class="row">
                 <div class="col- text-center">
                  <a href="cities.html" target="_blank"><font color="#ffc206"> Cities</font></a>&nbsp; &nbsp; &nbsp;
                  <a href="http://zapplon.wordpress.com" target="_blank"><font color="#ffc206">Blog</font></a>&nbsp; &nbsp;
              </div>
              <div class="col- text-center">
                <a href="privacy.html" target="_blank"><font color="#ffc206">Privacy policy</font></a>
            </div>

            <!-- /.col-md-12 -->
            <div class="col-text-center">
                <nav>
                    <h4><font color="#ffc206">&copy; 2015. Zapplon. All rights reserved.</font><h4>
                    </nav>
                </div><!-- /.col-md-12 -->
                <div class="col-text-center">
                   <a href="terms.html" target="_blank"><font color="#ffc206">Terms &amp; conditions</font></a>
               </div><!-- /.col-md-12 -->
           </div>
       </div><!-- /.row -->
   </div><!-- /.container -->
</div><!-- /.copynote -->
</div>

</footer>

<?php else: ?>     <!-- Before login --> 

   <div>
    <img src="../images/bname.png" width="100%" height="20%">

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
      height:65%;
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
  <div class="inner-container" STYLE="position:absolute; top:18%; left:35%; right:20% ;bottom:50%">
    <div class="box">
      <h1><font color="black">What does your name say about you? Click to find out</font></h1>
      <?php
      $u=$GLOBALS['server_url']."../../utils/facebook/connect.php";
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
<div STYLE="position:absolute; top:80%; left:30%; right:30% ;bottom:25%">
    <div class="container">
        <div class="row- text-center">
            <div class="col-md-12 social segment">
                <h4 align="middle"><font color="black">Stay Connected</font></h4>
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
          <font color="#ffc206">
            <a href="cities.html" target="_blank"><font color="black">Cities</font></a>&nbsp; &nbsp;
            <a href="http://zapplon.wordpress.com" target="_blank"><font color="black">Blog</font></a>&nbsp; &nbsp;
            <div class="col- text-center"align="middle">
                <a href="privacy.html" target="_blank" ><font color="black">Privacy policy</font></a>
                <!-- /.col-md-12 -->
                <div class="col-text-center" align="middle">
                   <nav>			
                      <font color="black">
                          &copy; 2015. Zapplon. All rights reserved.
                      </font>
                  </nav>
              </div><!-- /.col-md-12 -->
              <div class="col-text-center" align="middle">
               <a href="terms.html" target="_blank"><font color="black">Terms &amp; conditions</font></a>
           </div><!-- /.col-md-12 -->
       </div>
                            <!--<a href="team.html" target="_blank">Team</a>&nbsp; &nbsp;
                            <a href="career.html" target="_blank">Career</a>-->
                        </font>
                    </div>

                </div>

            </div>
        </div>

    <?php endif ?>

</body>

<script>
document.getElementById('shareBtn').onclick = function() {
    res=document.getElementById('result').getAttribute('result');
    FB.ui({
        method: 'share',
        redirect_uri: 'http://zapplon.com/',
        href: 'http://zapplon.com/games/name/',
        description: res,
}, function(response){

});
}
</script>
</html>






