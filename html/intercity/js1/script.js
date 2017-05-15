$(document).ready(function(){
	$("#oneWay").click(function(){
		$(".oneWay").show();
		$(".twoWay").hide();
		$("#oneWay").css({"border-width":"5px 0px 0px 0px", "border-color":"#24A327", "color":"white",});
		$("#twoWay").css({"border-width":"5px 0px 0px 0px", "border-color":"white", "color":"#7e7e7e", "border-color":"#7e7e7e"});
		});

	$("#twoWay").click(function(){
		$(".oneWay").hide();
		$(".twoWay").show();
		$("#twoWay").css({"border-width":"5px 0px 0px 0px", "border-color":"#24A327", "color":"white"});
		$("#oneWay").css({"border-width":"5px 0px 0px 0px", "border-color":"white", "color":"#7e7e7e", "border-color":"#7e7e7e"});
	})
});