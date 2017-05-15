
jQuery(function($){
           // $('.clic').submit(function(e)
           // {
           //    e.preventDefault();
           //    email=$('#email').val();
           //    $.ajax({
           //    url: "forgot_in.php",
           //    type:'get',
           //    dataType:'json',
           //    data:{
           //     email:email
           //    },
           //    success: function(result)
           //      {
           //    $('#forform').empty();

           //    $('#forform').append('<form class="clicpin"><div class="row column log-in-form"><h3 class="text-center">Forgot Password?</h3><input required type="text" id="email" name="email" value='+email+' placeholder="EMAIL" style="margin: 10px;"><br /><input required type="text" id="pin" name="pin" placeholder="enter your pin" style="margin: 10px;"><br /></div><div id="getpin"></div><div class="action_btns"><div class="one_half last"><input type="submit" class="button expanded btn btn_red" value="Change"></input></form>');
           //   },
           //    error:function(){
           //    }
           //  });
           // });
           //  $('#forform').on('submit','.clicpin',(function(e){
           //    e.preventDefault();
           //    email=$('#email').val();
           //    pin=$('#pin').val();
           //    $.ajax({
           //    url: "forgotpin.php",
           //    type:'get',
           //    dataType:'json',
           //    data:{
           //     email:email,
           //     pin:pin
           //    },
           //    success: function(result)
           //      {
           //    $('#forform').empty();


           //    $('#forform').append(' <form class="reset"><div class="row column log-in-form"><h3 class="text-center">Forgot Password?</h3> <input required type="text" id="newpsw" name="newpsw" placeholder="New Password" style="margin: 10px;"><br/></div><div class="one_half last"><input type="submit" class="button expanded btn btn_red" value="Change"></input></div></form>');
           //   },
           //    error:function(){
           //    }
           //  });
           // }));
           // $('#forform').on('submit','.reset',(function(e){
           //    e.preventDefault();
           //    newpsw=$('#newpsw').val();
           //    $.ajax({
           //    url: "forgot_reset.php",
           //    type:'get',
           //    dataType:'json',
           //    data:{
           //      email:email,
           //      pin:pin,
           //     newpsw:newpsw
           //    },
           //    success: function(result)
           //      {
           //    $('#forform').empty();
           //    $('#forform').append('<form  class="clic">  <h3 class="text-center">Forgot Password?</h3><H6>Enter your email address and we<br> will send you a verifaction code</H6><input required type="text" id="email" name="email" placeholder="EMAIL" style="margin: 10px;"><br /><div class="action_btns"><div class="one_half last"><input type="submit" value="EMAIL RESET CODE" class="button expanded btn btn_red"></div></div></form>');
           //   },
           //    error:function(){
           //    }
           //  });
           // }));

    $(".forgot_password").click(function(){
      $(".user_logi").hide();
      $(".forgot").show();
      document.getElementById("forgot_in").style.display = "inline-block";
    });
    // Calling Register Form
    $("#signup_form").click(function(){
      $(".user_logi").show();
      $(".popupHeader").show();
      $(".user_register").hide();
      $(".popupHeader2").hide();
      $(".fb-signup").text("LOG IN WITH FACEBOOK");
      $(".google-signup").text("LOG IN WITH GOOGLE");
      return false;
    });

    $(".forgot_password").click(function(){
      $(".user_logi").hide();
      $(".forgot").show();
      document.getElementById("forgot_in").style.display = "inline-block";
    });
    // Calling Login Form
    $("#login_form").click(function(){
       document.getElementById("forgot_in").style.display = "none";
      $(".user_logi").hide();
      $(".pophead1").hide();
      $(".user_register").show();
      $(".pophead2").show();
      $(".fb-signup").text("SIGN UP WITH FACEBOOK");
      $(".google-signup").text("SIGN UP WITH GOOGLE");
      document.getElementById("reg").style.display = "inline-block";
      return false;
    });

    // Calling Register Form
    $("#signup_form").click(function(){
      $(".user_logi").show();
      $(".pophead1").show();
      $(".user_register").hide();
      $(".pophead2").hide();

      return false;
    });
});
