<?php
{
  "require" : {
    "facebook/php-sdk-v4" : "~5.0"
  }
}
   session_start(); 
?>
<html xmlns:fb = "http://www.facebook.com/2008/fbml">
   
   <head>
      <title>Login with Facebook</title>
      <link 
         href = "http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" 
         rel = "stylesheet">
		 <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

   </head>
   
   <body>
      <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->
         
         <div class = "container">
            
            <div class = "hero-unit">
               
               <p>Welcome to "facebook login" </p>
            </div>
            
            <div class = "span4">
				
               <ul class = "nav nav-list">
                  <li class = "nav-header">Image</li>
						
                  <li><img src = "https://graph.facebook.com/<?php 
                     echo $_SESSION['FBID']; ?>/picture"></li>
                  
                  <li class = "nav-header">Facebook ID</li>
                  <li><?php echo  $_SESSION['FBID']; ?></li>
               
                  <li class = "nav-header">Facebook fullname</li>
						
                  <li><?php echo $_SESSION['FULLNAME']; ?></li>
               
                  <li class = "nav-header">Facebook Email</li>
						
                  <li><?php echo $_SESSION['EMAIL']; ?></li>
               
                  <div><a href="logout.php">Logout</a></div>
						
               </ul>
					
            </div>
         </div>
         
         <?php else: ?>     <!-- Before login --> 
         <div id="header">
<h1><a href="#">Funny Facebook Games</a></h1>
</div>

<div id="intro"> 


	       <div class = "container">
                   Not Connected
            
            <div>
               <a href = "../../utils/facebook/connect.php"><img src="fbbutton.png" height="500px" width="500px" ></a>
         </div>
		 
	</div>	 
	</div>
	
<div id="footer">
Designed by <a href="http://www.zapplon.com/">Zapplon.com</a>
</div>
</div>

         
      <?php endif ?>
      
   </body>
</html>


