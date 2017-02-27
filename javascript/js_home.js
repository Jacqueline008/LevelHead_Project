/*****************************************************************************/
/*图片形式的导航，当用户鼠标浮到图片上时，通过加黑色浮层来引起用户注意*/
$(document).ready(function(e) {
	//电视
    $("#menu_a_tv").mouseenter(function(){
		$("#menu_a_tv #div1").css("display","none");
		$("#menu_a_tv #div2").css("display","block");
	});
	$("#menu_a_tv").mouseleave(function(){
		$("#menu_a_tv #div1").css("display","block");
		$("#menu_a_tv #div2").css("display","none");
	});
	//空调
	$("#menu_a_aircondition").mouseenter(function(){
		$("#menu_a_aircondition #div1").css("display","none");
		$("#menu_a_aircondition #div2").css("display","block");
	});
	$("#menu_a_aircondition").mouseleave(function(){
		$("#menu_a_aircondition #div1").css("display","block");
		$("#menu_a_aircondition #div2").css("display","none");
	});
	//冰箱
	$("#menu_a_refrigerator").mouseenter(function(){
		$("#menu_a_refrigerator #div1").css("display","none");
		$("#menu_a_refrigerator #div2").css("display","block");
	});
	$("#menu_a_refrigerator").mouseleave(function(){
		$("#menu_a_refrigerator #div1").css("display","block");
		$("#menu_a_refrigerator #div2").css("display","none");
	});
	//洗衣机
	$("#menu_a_washer").mouseenter(function(){
		$("#menu_a_washer #div1").css("display","none");
		$("#menu_a_washer #div2").css("display","block");
	});
	$("#menu_a_washer").mouseleave(function(){
		$("#menu_a_washer #div1").css("display","block");
		$("#menu_a_washer #div2").css("display","none");
	});
	//热水器
	$("#menu_a_waterheater").mouseenter(function(){
		$("#menu_a_waterheater #div1").css("display","none");
		$("#menu_a_waterheater #div2").css("display","block");
	});
	$("#menu_a_waterheater").mouseleave(function(){
		$("#menu_a_waterheater #div1").css("display","block");
		$("#menu_a_waterheater #div2").css("display","none");
	});
	//厨房大电
	$("#menu_a_kitchen").mouseenter(function(){
		$("#menu_a_kitchen #div1").css("display","none");
		$("#menu_a_kitchen #div2").css("display","block");
	});
	$("#menu_a_kitchen").mouseleave(function(){
		$("#menu_a_kitchen #div1").css("display","block");
		$("#menu_a_kitchen #div2").css("display","none");
	});
});
/*****************************************************************************/
/*最热产品，最新产品，特色产品介绍栏*/
	$(document).ready(function(e) {
		//分别悬浮在最热产品，最新产品，特色产品按钮，相应的产品介绍栏会显示
        $("#menu_btn_hot").mouseenter(function(){
			$("#hot_products").css("display","block");
			$("#new_products").css("display","none");
			$("#featured_products").css("display","none");
		});
		$("#menu_btn_new").mouseenter(function(){
			$("#hot_products").css("display","none");
			$("#new_products").css("display","block");
			$("#featured_products").css("display","none");
		});
		$("#menu_btn_featured").mouseenter(function(){
			$("#hot_products").css("display","none");
			$("#new_products").css("display","none");
			$("#featured_products").css("display","block");
		});
		//当鼠标悬浮在三个按钮上时，按钮颜色会改变来吸引注意
		//最热产品按钮
		$("#menu_btn_hot").mouseenter(function(){
			$("#menu_btn_hot").css("color","#547abb");
		});
		$("#menu_btn_hot").mouseleave(function(){
			$("#menu_btn_hot").css("color","black");
		});
		//最新产品按钮
		$("#menu_btn_new").mouseenter(function(){
			$("#menu_btn_new").css("color","#547abb");
		});
		$("#menu_btn_new").mouseleave(function(){
			$("#menu_btn_new").css("color","black");
		});
		//特色产品按钮
		$("#menu_btn_featured").mouseenter(function(){
			$("#menu_btn_featured").css("color","#547abb");
		});
		$("#menu_btn_featured").mouseleave(function(){
			$("#menu_btn_featured").css("color","black");
		});
    });
/************************************************************************/
/*banner中会向上循环滚动的宣传标语*/
    function scroll_1_one(){
		$("#scroll_1").animate({
			top:'-110px'},5000);
	}
	function scroll_1_two(){
		$("#scroll_1").animate({
			top:'-220px'},5000);
	}
	function scroll_1_three(){
		$("#scroll_1").animate({
			top:'-330px'},5000);
	}
	function scroll_1_four(){
		$("#scroll_1").animate({
			top:'-440px'},5000);
	}
	function scroll_1_five(){
		$("#scroll_1").animate({
			top:'-550px'},5000);
	}
	window.setTimeout("scroll_1_one()",5000);
	window.setTimeout("scroll_1_two()",15000);
	window.setTimeout("scroll_1_three()",25000);
	window.setTimeout("scroll_1_four()",35000);
	window.setTimeout("scroll_1_five()",45000);
	
	function scroll_2_one(){
		$("#scroll_2").css("top","-440px");
		$("#scroll_2").animate({
			top:'-550px'},5000);
	}
	function scroll_2_one_interval(){
		window.setInterval("scroll_2_one()",100000);
	}
	function scroll_2_two(){
		$("#scroll_2").animate({
			top:'-660px'},5000);
	}
	function scroll_2_two_interval(){
		window.setInterval("scroll_2_two()",100000);
	}
	function scroll_2_three(){
		$("#scroll_2").animate({
			top:'-770px'},5000);
	}
	function scroll_2_three_interval(){
		window.setInterval("scroll_2_three()",100000);
	}
	function scroll_2_four(){
		$("#scroll_2").animate({
			top:'-880px'},5000);
	}
	function scroll_2_four_interval(){
		window.setInterval("scroll_2_four()",100000);
	}
	function scroll_2_five(){
		$("#scroll_2").animate({
			top:'-990px'},5000);
	}
	function scroll_2_five_interval(){
		window.setInterval("scroll_2_five()",100000);
	}
	function scroll_2_null(){
		$("#scroll_2").animate({
			top:'-1100px'},5000);
	}
	function scroll_2_null_interval(){
		window.setInterval("scroll_2_null()",100000);
	}
	window.setTimeout("scroll_2_one()",45000);
	window.setTimeout("scroll_2_one_interval()",45000);
	window.setTimeout("scroll_2_two()",55000);
	window.setTimeout("scroll_2_two_interval()",55000);
	window.setTimeout("scroll_2_three()",65000);
	window.setTimeout("scroll_2_three_interval()",65000);
	window.setTimeout("scroll_2_four()",75000);
	window.setTimeout("scroll_2_four_interval()",75000);
	window.setTimeout("scroll_2_five()",85000);
	window.setTimeout("scroll_2_five_interval()",85000);
	window.setTimeout("scroll_2_null()",95000);
	window.setTimeout("scroll_2_null_interval()",95000);

	function scroll_3_one(){
		$("#scroll_3").css("top","-990px");
		$("#scroll_3").animate({
			top:'-1100px'},5000);
	}
	function scroll_3_one_interval(){
		window.setInterval("scroll_3_one()",100000);
	}
	function scroll_3_two(){
		$("#scroll_3").animate({
			top:'-1210px'},5000);
	}
	function scroll_3_two_interval(){
		window.setInterval("scroll_3_two()",100000);
	}
	function scroll_3_three(){
		$("#scroll_3").animate({
			top:'-1320px'},5000);
	}
	function scroll_3_three_interval(){
		window.setInterval("scroll_3_three()",100000);
	}
	function scroll_3_four(){
		$("#scroll_3").animate({
			top:'-1430px'},5000);
	}
	function scroll_3_four_interval(){
		window.setInterval("scroll_3_four()",100000);
	}
	function scroll_3_five(){
		$("#scroll_3").animate({
			top:'-1540px'},5000);
	}
	function scroll_3_five_interval(){
		window.setInterval("scroll_3_five()",100000);
	}
	function scroll_3_null(){
		$("#scroll_3").animate({
			top:'-1650px'},5000);
	}
	function scroll_3_null_interval(){
		window.setInterval("scroll_3_null()",100000);
	}
	window.setTimeout("scroll_3_one()",95000);
	window.setTimeout("scroll_3_one_interval()",95000);
	window.setTimeout("scroll_3_two()",105000);
	window.setTimeout("scroll_3_two_interval()",105000);
	window.setTimeout("scroll_3_three()",115000);
	window.setTimeout("scroll_3_three_interval()",115000);
	window.setTimeout("scroll_3_four()",125000);
	window.setTimeout("scroll_3_four_interval()",125000);
	window.setTimeout("scroll_3_five()",135000);
	window.setTimeout("scroll_3_five_interval()",135000);
	window.setTimeout("scroll_3_null()",145000);
	window.setTimeout("scroll_3_null_interval()",145000);
/*************************************************************************/