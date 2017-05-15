<?php
   session_start(); 
$_SESSION['confignum']=0;
?>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/templatemo-style.css">
<!--
Puzzle Template
http://www.templatemo.com/tm-477-puzzle
-->
    <title>Facebook Games</title>
	<link rel='icon' href='images/favicon.ico' type='image/x-icon' />
	<link 
         href = "http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" 
         rel = "stylesheet">
		  
		 		<!-- Bootstrap Core CSS -->
        <link href="/games/drink/assets/css/bootstrap.min.css" rel="stylesheet">

		 <!-- Main stylesheet -->
        <link href="/games/drink/assets/css/hallooou.css" rel="stylesheet">
    
       
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
			
    <div class="fixed-header">
        <div class="container">
            <div class="navbar-header">
			<!--
                <button type="button" class="navbar-toggle">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
				-->
				<!--<a class="navbar-brand" href="#">--><span class="brand-logo"><a href="http://www.zapplon.com"><img src= "images/logo.png" width="43" height="47"/></a></span>
               
            </div>
            <nav class="main-menu">
            <!--    <ul>
                    <li><a href="#home">Facebook Games</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>-->
            </nav>
        </div>
    </div>
	<?php if ($_SESSION['FBID']): ?>  <!-- after login -->

    
    <div class="container">
	
       
	   <section class="col-md-12 content" id="home">
           <div class="col-lg-6 col-md-6 content-item">
               <img src="images/wine.jpg" alt="Image" class="tm-image">
           </div>
           <div class="col-lg-6 col-md-6 content-item content-item-1 background">
               <h2 class="main-title text-center dark-blue-text">How much can you Drink?</h2>
               <p>This is a funny one!We know that you love to celebrate.Ever wondered how much can you actually drink?</p>
               <a href="../games/drink/index.php"><button type="button" class="btn btn-big dark-blue-bordered-btn">Play the game</button></a>
               </div>
       </section>
       <section class="col-md-12 content padding" id="services">
        <div class="col-lg-6 col-md-6 col-md-push-6 content-item">
           <img src="images/2.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
          <h2 class="main-title text-center dark-blue-text">Which city will you visit in the next 5 years?</h2>
           <p class="section-text">We know that you love to travel.So get ready to pack your bags ,take your camera and go see the world!</p>           
           <p>Play the game to find out which city you will visit in next 5 years </p>
		   <span><a href="../games/city/index.php"><button type="button" class="btn btn-big dark-blue-bordered-btn">Play the game</button></a></span>
        </div>
   </section>
	<section class="col-md-12 content" id="home">
           <div class="col-lg-6 col-md-6 content-item">
               <img src="images/car.jpg" alt="Image" class="tm-image">
           </div>
           <div class="col-lg-6 col-md-6 content-item content-item-1 background">
               <h2 class="main-title text-center dark-blue-text">Which car will you own in next 5 years?</h2>
               <p>We know that you work hard everyday trying to earn every last bit of money.Let's see which car you own in next 2 years.</p>
               <a href="../games/car/index.php"><button type="button" class="btn btn-big dark-blue-bordered-btn">Play the game</button></a>
               </div>
       </section>

   <section class="col-md-12 content" id="clients">
       <div class="col-lg-6 col-md-6 content-item">
           <img src="images/name.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 content-item background flexbox">
           <h2 class="main-title text-center dark-blue-text">What does your name say about you?</h2>
           <p>We all know that we are unique and possess hidden talents</p>
           <p>Play this game to find out what is the special meaning behind your name?</p>
           
           <div>
               <a href="../games/name/index.php"><button type="button" class="btn btn-big dark-blue-bordered-btn">Play the game</button></a>
               
           </div>               
       </div>
   </section>

<!--
   <section class="col-md-12 content" id="contact">
       <div class="col-lg-6 col-md-6 col-md-push-6 content-item">
           <img src="images/4.jpg" alt="Image" class="tm-image">
       </div>
       <div class="col-lg-6 col-md-6 col-md-pull-6 content-item background flexbox">
           <h2 class="main-title text-center dark-blue-text">Contact Us</h2>
           <p class="margin-b-25">Do you have any feedback/complaints? We would love to hear from you</p>

           <!--<div class="row"> 
           <form method="post" name="contact-form" class="contact-form" action="process.asp">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name..." required>
                </div>    
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-l-3">
                <div class="form-group contact-field">
                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email..." required>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group contact-field">
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Your Subject..." required>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group contact-field">
                    <textarea name="message" rows="5" class="form-control" id="message" placeholder="Write your message..." required></textarea>
                </div>    
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group margin-b-0">
                    <button type="submit" id="form-submit" class="btn no-bg btn-contact">Submit</button>
                </div>    
            </div>
        </form>
        <!--</div> 
        <div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>

    </div>

</section>
-->

</div><!-- dont erase this div-->
<!--- enter footer for fb like and share now-->

<div class="text-center footer">
	<div class="container">
					<footer>
                        <div class="row text-center">
                            <div class="col-md-12 social segment">
                                <h4 align="middle"><font color="white">Stay Connected</h4>
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
                            <!--<a href="team.html" target="_blank">Team</a>&nbsp; &nbsp;
                            <a href="career.html" target="_blank">Career</a>-->
                        </center>

                    
                    <div class="copynote">
                        
                            <div class="row">
                                <div class="col- text-center">
                                    <a href="privacy.html" target="_blank">Privacy policy</a>
                                    <!-- /.col-md-12 -->
                                    <div class="col-text-center">
                                        <nav><font color="#3b5998">									
										&copy; 2015. Zapplon. All rights reserved.										
                                        </nav>
                                    </div><!-- /.col-md-12 -->
                                    <div class="col-text-center">
                                     <a href="terms.html" target="_blank">Terms &amp; conditions</a>
                                 </div><!-- /.col-md-12 -->
                             </div>
                         </div><!-- /.row -->
                     
                 </div><!-- /.copynote -->
             </div>
			<footer>
    	
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>

<script>

// Check scroll position and add/remove background to navbar
function checkScrollPosition() {
    if($(window).scrollTop() > 50) {
      $(".fixed-header").addClass("scroll");
  } else {        
      $(".fixed-header").removeClass("scroll");
  }
}

$(document).ready(function () {   
    // Single page nav
    $('.fixed-header').singlePageNav({
        offset: 59,
        filter: ':not(.external)',
        updateHash: true        
    });

    checkScrollPosition();

    // nav bar
    $('.navbar-toggle').click(function(){
        $('.main-menu').toggleClass('show');
    });

    $('.main-menu a').click(function(){
        $('.main-menu').removeClass('show');
    });
});

$(window).on("scroll", function() {
    checkScrollPosition();    
});
</script>
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
  height:50%;
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
      <h1><font color="white">Play Interesting Facebook Games</font></h1>
      <a href = "../utils/facebook/connect.php"><img src="images/fbbutton.png" height="500px" width="500px" ></a>
      <p>Not a member? <span><font color="white"><a href="https://www.facebook.com/">Sign Up</a></font></span></p>
    </div>
  </div>


			              
            
			</div>	 
		</div>
		</div><!--don't delete this div-->
<!--this is the marker-->

<!-- Facebook like and Share -->
                <div STYLE="position:absolute; top:80%; left:5%; right:30% ;bottom:25%">
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
                        </div>
						
                    </div>
                   
             </div>
         


</div>
         
      <?php endif ?>
      
</body>
</html>