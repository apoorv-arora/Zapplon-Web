<form action="email.php" method="GET" t="<?php echo $_GET['t'] ?>">
<div style="visibility: none;display: none">
       <input type="text" name="t" value="<?php echo $_GET['t'] ?>"></input>
</div>

<input type="text" id="email" name="email" placeholder="EMAIL" required></input>
<input type="submit" value="SEND"></input>
</form>
<script type="text/javascript">
	/*
jQuery(function($){
	 $('#form').submit(function(e){
              e.preventDefault();  
               
               journey=$('#form').attr('journey');
               ret=$('#form').attr('ret');
               pickcity=$('#form').attr('pickcity');
               dropcity=$('#form').attr('dropcity');
               pickdate=$('#form').attr('pickdate');
               picktime=$('#form').attr('picktime');
               num=$('#form').attr('num');
               n=$('#form').attr('n');
               t=$('#form').attr('t');
              console.log(t);
              console.log(n);
              console.log(dropcity);
              console.log(ret);
              console.log(picktime);
              console.log(pickdate);
              $.ajax({
              url: "email.php", 
              type:'get',
              dataType:'json',
              data:{
                    s1: sel1,
                    s2: sel2,
                    d1:d1,
                    s3:sel3,
                    d2:'NA',
                    jtype:journey,
                    s4:sel4
                  },
             success:function(result) 
                {
                  console.log("here");
                 $('.cablist').empty();
                  
                  console.log(result);
                  //console.log(result[0]['carModel']);
                  for(var i=0;i<result.length;i++){
                  $('.cablist').append('<div> <div> '+result[i]['carModel']+' </div> <div>'+result[i]['availability']+' </div> <div>'+result[i]['fare']+' </div> <div>'+result[i]['noOfSeats']+' </div> <div  >'+result[i]['fareperKm']+' </div> <div>'+result[i]['distance']+' </div> <div>'+result[i]['type']+' </div> <div>'+result[i]['advance']+' </div> <div  type='+result[i]['type'] +' fare= '+result[i]['fare']+'  ><button class="book">Book</button></div>  </div> ');
                }               
               
                console.log("ajax passed");
               },
             error:function(){
           //   $('#myModal').modal('show');
                console.log("ajax failed");
              }
          });   
          
        });
*/
</script>
<?php 
				/*
		include("../conf.php");
		include('contents/includes/config_class.php');
		echo "sending request;";
		error_reporting(E_ALL);
		ini_set("display_errors", "1");
		$r = new HttpRequest("post", $GLOBALS['server_url']auth/login?isFacebookLogin=true&device_id=00000000", array(
        "client_id" => 'bt_android_client',
        "app_type" => 'bt_android',
        "user_name" => $_GET['n'],
        //"email" => $user_profile['email'],
        "email" => 'ridhi@zapplon.com',
		"fb_token" => $_GET['t'],
		//"fb_permission" => $user_profile['permissions']
    	));
  		if ($r->getError()) {
      	echo "sorry, an error occured";
  		}	 
  		else {
  			echo "got rsponse";
      	// parse json and show tweets
        $js = json_decode($r->getResponse());
      	var_dump($js);
       	$obj=$js->response;
       	$res=json_decode($obj);
       	$access_token=$res->access_token;
       	var_dump($access_token);
       	//echo $access_token;

		$_SESSION['token']=$access_token;
		$_SESSION['name']=$user_profile['name'];
		$_SESSION['email']='ridhi@zapplon.com';
		//$_SESSION['email']=$user_profile['email'];

		//header('Location:http://localhost/intercity/');
        }   	
$url = $GLOBALS['localhost']."intercity/results/?journey=".$_GET['journey']."&ret=".$_GET['ret']."&pickcity=".$_GET['pickcity']."&dropcity=".$_GET['dropcity']."&pickdate=".$_GET['pickdate']."&picktime=".$_GET['picktime']."&num=".$_GET['num'];
echo "url is :".$url;
//header('Location: '. $url);
*/
?>