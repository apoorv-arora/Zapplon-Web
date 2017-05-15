$(document).ready(function()
{
	$("#vpb_pop_up_background").click(function()
	{
		$("#vpb_signup_pop_up_box").hide();
		$("#vpb_login_pop_up_box").hide();
		$("#vpb_pop_up_background").fadeOut("slow");
	});
});
function vpb_show_sign_up_box()
{
	$("#vpb_pop_up_background").css({"opacity":"0.4"});
	$("#vpb_pop_up_background").fadeIn("slow");
	$("#vpb_signup_pop_up_box").fadeIn('fast');
	window.scroll(0,0);
}
function vpb_show_login_box()
{
	$("#vpb_pop_up_background").css({"opacity":"0.4"});
	$("#vpb_pop_up_background").fadeIn("slow");
	$("#vpb_login_pop_up_box").fadeIn('fast');
	window.scroll(0,0);
}
function vpb_hide_popup_boxes()
{
	$("#vpb_signup_pop_up_box").hide();
	$("#vpb_login_pop_up_box").hide();
	$("#vpb_pop_up_background").fadeOut("slow");
}
function signup_button()
{
	alert('No username is provided.');
}
function login_button(form)
{
	if(form.username.value == "admin" && form.password.value == "admin") 
	{
                    //window.open('index.html','_self');/*opens the target page while Id & password matches*/
                    //window.location.href="index.html";
                    document.login.method="POST";
                    document.login.action="index.html";
    }
    else 
    {
                	document.login.method="POST";
                    alert("Error Password or Username");/*displays error message*/
                    $('#login').submit(function(ev) {
                    	if(form.username.value != "admin" || form.password.value != "admin")
                    	{
                    		ev.preventDefault();
						}
					});
                	

    }
}
