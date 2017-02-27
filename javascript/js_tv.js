/**/
$(document).ready(function(e) {
	//sumsang
    $("#brands_container #sumsung a").mouseenter(function(){
		$("#brands_container #sumsung a div").css("display","block");
	});
	 $("#brands_container #sumsung a").mouseleave(function(){
		$("#brands_container #sumsung a div").css("display","none");
	});
	//sony
	$("#brands_container #sony a").mouseenter(function(){
		$("#brands_container #sony a div").css("display","block");
	});
	 $("#brands_container #sony a").mouseleave(function(){
		$("#brands_container #sony a div").css("display","none");
	});
	//haier
	$("#brands_container #haier a").mouseenter(function(){
		$("#brands_container #haier a div").css("display","block");
	});
	 $("#brands_container #haier a").mouseleave(function(){
		$("#brands_container #haier a div").css("display","none");
	});
	//haixin
	$("#brands_container #haixin a").mouseenter(function(){
		$("#brands_container #haixin a div").css("display","block");
	});
	 $("#brands_container #haixin a").mouseleave(function(){
		$("#brands_container #haixin a div").css("display","none");
	});
	//philips
	$("#brands_container #philips a").mouseenter(function(){
		$("#brands_container #philips a div").css("display","block");
	});
	 $("#brands_container #philips a").mouseleave(function(){
		$("#brands_container #philips a div").css("display","none");
	});
	//kangjia
	$("#brands_container #kangjia a").mouseenter(function(){
		$("#brands_container #kangjia a div").css("display","block");
	});
	 $("#brands_container #kangjia a").mouseleave(function(){
		$("#brands_container #kangjia a div").css("display","none");
	});
	//chuangwei
	$("#brands_container #chuangwei a").mouseenter(function(){
		$("#brands_container #chuangwei a div").css("display","block");
	});
	 $("#brands_container #chuangwei a").mouseleave(function(){
		$("#brands_container #chuangwei a div").css("display","none");
	});
	//tcl
	$("#brands_container #tcl a").mouseenter(function(){
		$("#brands_container #tcl a div").css("display","block");
	});
	 $("#brands_container #tcl a").mouseleave(function(){
		$("#brands_container #tcl a div").css("display","none");
	});
	//lg
	$("#brands_container #lg a").mouseenter(function(){
		$("#brands_container #lg a div").css("display","block");
	});
	 $("#brands_container #lg a").mouseleave(function(){
		$("#brands_container #lg a div").css("display","none");
	});
	//changhong
	$("#brands_container #changhong a").mouseenter(function(){
		$("#brands_container #changhong a div").css("display","block");
	});
	 $("#brands_container #changhong a").mouseleave(function(){
		$("#brands_container #changhong a div").css("display","none");
	});
	
//综合，月销量，人气，价格切换按钮
	//综合
	$("#toggle_btn_zonghe").mouseenter(function(){
		$("#rank_zonghe_erea").css("display","block");
		$("#rank_monthcount_erea").css("display","none");
		$("#rank_price_erea").css("display","none");
	});
	//月销量
	$("#toggle_btn_monthcount").mouseenter(function(){
		$("#rank_zonghe_erea").css("display","none");
		$("#rank_monthcount_erea").css("display","block");
		$("#rank_price_erea").css("display","none");
	});
	//人气（和综合显示一样）
	$("#toggle_btn_popular").mouseenter(function(){
		$("#rank_zonghe_erea").css("display","block");
		$("#rank_monthcount_erea").css("display","none");
		$("#rank_price_erea").css("display","none");
	});
	//价格
	$("#toggle_btn_price").mouseenter(function(){
		$("#rank_zonghe_erea").css("display","none");
		$("#rank_monthcount_erea").css("display","none");
		$("#rank_price_erea").css("display","block");
	});
});

