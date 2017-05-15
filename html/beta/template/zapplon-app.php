<section class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-2 bgimg "  >
        <div id="screens" style="width:135px;left:92px;top:60px;margin:0px;" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src=<?php echo $GLOBALS['localhost'];?>assets/images/product/screen1.png class="center-block img-responsive feature_image"  style="width=100%; height=100%;"/>
          </div>
          <div class="item">
           <img src=<?php echo $GLOBALS['localhost'];?>assets/images/product/screen2.PNG class="center-block img-responsive feature_image"style="width=100%; height=100%;"/>
         </div>
         <div class="item">
          <img src=<?php echo $GLOBALS['localhost'];?>assets/images/product/screen3.png class="center-block img-responsive feature_image" style="width=100%; height=100%;"/>
        </div>
        <div class="item">
          <img src=<?php echo $GLOBALS['localhost'];?>assets/images/product/screen4.png class="center-block img-responsive feature_image"style="width=100%; height=100%;"/>
        </div>

      </div>
    </div>
  </div>
  <div  class="col-md-7 col-sm-7 col-xs-12">
    <div class="row" id="get_app">
      <div class="col-md-12 col-sm-12 col-xs-12" >  
       <h2 class="app-heading" style="color: rgba(254,82,76, 1);">Get the Zapplon app</h2>
     </div>
     <div class="col-md-12 col-sm-12 col-xs-12 app-subheading" style="margin-bottom: 20px;font-family: NeueLight;color:#525051;font-size: 15px;">  
      Your next cab ride is at your fingertips.
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 app-subheading"  style="font-family: NeueLight;color:#808083;font-size: 15px;">
      We'll send you a link, open it on your phone to download the app.
    </div>
  </div>
  <div class="row">

    <div class="send-app-link col-md-12 col-sm-12 " style="margin-top: 10px;margin-bottom: 20px;">
      <div class="row">
        <form class="app-link-form">
          <div class="ui fluid action input col-md-8 ">
            <input id="country-code" value="+91" size="2" class="br0" type="text"  required ></input>

            <input id="phone-no" size="25" class="br0" placeholder="Enter phone number" type="text" minlength=10 maxlength=10 required ></input>

            <div id="app-download-sms" class="ui button green" style="color: white;background-color:  #099e44">
              <button type="submit" class="app-link green">Text App Link</button>
            </div>
          </form>

        </div>
      </div>
    </div>
    <div id="app-link-success"></div>
    <div id="app-link-error"></div>                                  
  </div>
  <div class="row">
    <div class="col-md-12" style="margin-left: 5%;padding: 0px;">
      <a  target="_blank" href="https://play.google.com/store/apps/details?id=com.application.zapplon&referrer=1"><img src="../assets/images/play.png" width="22%"></a> <img src="../assets/images/coming_soon.png" width="22%">
    </div>
  </div>
</div>
</div>
</section>