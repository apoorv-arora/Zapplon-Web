<div class="modal fade" id="verifyModal" role="dialog">
  <div class="modal-dialog" style="height: 150px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title  text-center"> Verification </h4>
      </div>
      <div class="modal-body">
        <div id="phoneform">
          <form class="phoneverify row">
            <input type="text" id="phone"  name="phone" placeholder="Enter your NUMBER" minlength=10 maxlength=10 required class="col-xs-4 col-sm-offset-4 col-xs-offset-4  col-sm-4"></input>
            <button type="submit" value="Get Pin" class=" btn btn-info col-xs-offset-4  col-xs-4 col-sm-offset-4 col-sm-4" style="margin-top: 10px;">Get Pin</button>
          </form>
          <div id="error">
          </div>
        </div>   
      </div>

    </div>

  </div>
</div>


<div class="example2">
  <nav class="navbar" style="background-color:#262933;">
    <div class="container-fluid">
      <div class="navbar-header">
        
        <a href="../index.php"><img style="margin-top:10px;margin-bottom:10px;" src="<?php echo $GLOBALS['localhost'];?>assets/images/z_logo/logo.png" height="47px" width="43px"  alt="">
        </a>
      </div>

     </div>

           


<!--/.container-fluid -->
</nav>
</div>

<!-- Navigation -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <header class="text-center pophead1">
              <span id="login">LOGIN</span><br>
              <span >NOT REGISTERED?<a href="#" id="login_form"> SIGN UP</a> </span>
              <span class="modal_close" data-dismiss="modal"><i class="fa fa-times cross"></i></span>
            </header>
            <header class="text-center pophead2" style="display: none;">
              <span id="signup">SIGN UP</span><br>
              <span >ALREADY REGISTERED?<a href="#" id="signup_form" > LOG IN</a> </span>
              <span class="modal_close" data-dismiss="modal"><i class="fa fa-times cross"></i></span>
            </header>
          </div>
          <div class="modal-body">
            <?php
            include("results/fb.php");
            ?>
            <section class="popupBody row">
              <div class="user_logi col-md-6 col-sm-6  col-xs-12">

                <form  id="user_login_form">
                  <input type="text" id="email" required name="email" placeholder="EMAIL" required>
                  <br />
                  <input type="text" id="pwd" required name="password" placeholder="PASSWORD" required>
                  <br />
                  <div class="">
                    <div><input type="submit" value="LOG IN" class="button btn_red">
                    </div>
                  </div>
                </form>

                <a href="#" class="forgot_password" >Forgot password ?</a>
                <span id="user_login_result"></span>
              </div>

              <div class="user_register col-md-6 col-sm-6  col-xs-12 " id="reg">

                <form id="user_register_form">
                  <input type="text" name="username" id="name" placeholder="USERNAME" required>
                  <br />
                  <input type="text" name="email" id="emai" placeholder="EMAIL" required>
                  <br />
                  <input type="text" name="password" id="pw" placeholder="Password" required>
                  <br />
                  <div class="action_btns">
                    <div><input type="submit" value="SIGN UP" class="button btn btn_red">
                    </div>
                  </div>
                </form>
                <span id="user_register_result"></span>
              </div>

              <div style="display: none;" class="forgot col-md-6 col-sm-6  col-xs-12 " id="forgot_in">
                <div id="forform">
                  <form  id='forgot_form'>
                    <h3 class="text-center">Forgot Password?</h3>
                    <h6 id="forgot-msg">Enter your email address and we will <br>send you a verification code</h6>
                    <input type="text" id="email_forgot_form" name="email" placeholder="EMAIL" required>
                    <br />
                    <div class="action_btns">
                      <div class="one_half last"><input type="submit" value="EMAIL RESET CODE" class="button expanded btn btn_red" required></div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="social_login col-md-6 col-sm-6 col-xs-12  " >
                <div class="inc">
                  <a  onClick=window.open("<?php echo $loginUrl; ?>","Ratting","width=1050,height=570,left=150,top=0,toolbar=0,status=0,"); class="social_box fb">
                    <span class="icon"><i class="fa fa-facebook" style="font-size:25px"></i></span>
                    <span class="icon_title fb-signup" >LOG IN WITH FACEBOOK</span>
                  </a>
                  <?php
                  require_once ('../utils/google/autoload.php');
                  include("results/googlestart.php");
                  ?>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->