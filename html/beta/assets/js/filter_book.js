 jQuery(function($){
        $('.filter').on('click',function(){
          console.log($(this).attr('subtype'));
          var subtype=$(this).attr('subtype');
          if(subtype=="SEDAN")
          {
             $(".hi").css('display', 'block'); 
            $(".hi[cartype!='SEDAN']").css('display', 'none');
          }
          else if(subtype=="SUV")
          {
             $(".hi").css('display', 'block'); 
            $(".hi[cartype!='SUV']").css('display', 'none');
          }
          else if(subtype=="COMPACT")
          {
             $(".hi").css('display', 'block'); 
            $(".hi[cartype!='COMPACT']").css('display', 'none');
          }
          else if(subtype=="ALL"){
            $(".hi").css('display', 'block'); 
          }
        });

      
       
});  