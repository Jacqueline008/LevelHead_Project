
$(document).ready(function(e) {
/***********************************************************************/
//当鼠标悬浮在综合按钮上时，综合区域1显示,与综合对应的第几页按钮显示
	$("#toggle_buttons #toggle_btn_zonghe").mouseenter(function(){
		$(".div_all").css("display","none");
		$("#rank_zonghe_erea1").css("display","block");
		
		$(".btn_all").css("display","none");
		$("#rank_zonghe_ereas_show").css("display","block");
	});
//当鼠标悬浮在月销量按钮上时，月销量区域1显示,与月销量对应的第几页按钮显示
	$("#toggle_buttons #toggle_btn_monthcount").mouseenter(function(){
		$(".div_all").css("display","none");
		$("#rank_monthcount_erea1").css("display","block");
	
		$(".btn_all").css("display","none");
		$("#rank_monthcount_ereas_show").css("display","block");
	});
//当鼠标悬浮在人气按钮上时，综合区域1显示,与综合对应的第几页按钮显示
	$("#toggle_buttons #toggle_btn_popular").mouseenter(function(){
		$(".div_all").css("display","none");
		$("#rank_zonghe_erea1").css("display","block");
		
		$(".btn_all").css("display","none");
		$("#rank_zonghe_ereas_show").css("display","block");
	});
//当鼠标悬浮在价格按钮上时，价格区域1显示,与价格对应的第几页按钮显示
	$("#toggle_buttons #toggle_btn_price").mouseenter(function(){
		$(".div_all").css("display","none");
		$("#rank_price_erea1").css("display","block");
		
		$(".btn_all").css("display","none");
		$("#rank_price_ereas_show").css("display","block");
	});
	
/******************************************************************************/	
//与综合对应的第几页按钮
	//综合第1页,点击第一页综合1显示，第一页按钮变色
	$("#rank_zonghe_ereas_show #rank_zonghe_erea1_show").click(function(){
		$(".div_all").css("display","none");
		$("#rank_zonghe_erea1").css("display","block");
		
		$(".btn_zonghe_all").css("background-color","#FDFDFD");
		$("#rank_zonghe_erea1_show").css("background-color","#ededed");
	});
	//综合第2页,点击第2页综合2显示，第2页按钮变色
	$("#rank_zonghe_ereas_show #rank_zonghe_erea2_show").click(function(){
		$(".div_all").css("display","none");
		$("#rank_zonghe_erea2").css("display","block");
		
		$(".btn_zonghe_all").css("background-color","#FDFDFD");
		$("#rank_zonghe_erea2_show").css("background-color","#ededed");
	});
	//综合第3页,点击第3页综合3显示，第3页按钮变色
	$("#rank_zonghe_ereas_show #rank_zonghe_erea3_show").click(function(){
		$(".div_all").css("display","none");
		$("#rank_zonghe_erea3").css("display","block");
		
		$(".btn_zonghe_all").css("background-color","#FDFDFD");
		$("#rank_zonghe_erea3_show").css("background-color","#ededed");
	});
	//综合第四页,点击第4页综合4显示，第4页按钮变色
	$("#rank_zonghe_ereas_show #rank_zonghe_erea4_show").click(function(){
		$(".div_all").css("display","none");
		$("#rank_zonghe_erea4").css("display","block");
		
		$(".btn_zonghe_all").css("background-color","#FDFDFD");
		$("#rank_zonghe_erea4_show").css("background-color","#ededed");
	});
	//综合上一页
	$("#rank_zonghe_up_show").click(function(){
		//第一页若显示仍显示，第1页按钮颜色不变
		var display1=$("#rank_zonghe_erea1").css("display");
		if(display1=="block"){
			$(".div_all").css("display","none");
			$("#rank_zonghe_erea1").css("display","block");
			
			$(".btn_zonghe_all").css("background-color","#FDFDFD");
			$("#rank_zonghe_erea1_show").css("background-color","#ededed");
		}
		//第二页显示的话换成第一页显示,第1页按钮变色
		var display2=$("#rank_zonghe_erea2").css("display");
		if(display2=="block"){
			$(".div_all").css("display","none");
			$("#rank_zonghe_erea1").css("display","block");
			
			$(".btn_zonghe_all").css("background-color","#FDFDFD");
			$("#rank_zonghe_erea1_show").css("background-color","#ededed");
		}
		//第3页显示的话换成第2页显示,第2页按钮变色
		var display3=$("#rank_zonghe_erea3").css("display");
		if(display3=="block"){
			$(".div_all").css("display","none");
			$("#rank_zonghe_erea2").css("display","block");
			
			$(".btn_zonghe_all").css("background-color","#FDFDFD");
			$("#rank_zonghe_erea2_show").css("background-color","#ededed");
		}
		//第4页显示的话换成第3页显示,第3页按钮变色
		var display4=$("#rank_zonghe_erea4").css("display");
		if(display4=="block"){
			$(".div_all").css("display","none");
			$("#rank_zonghe_erea3").css("display","block");
			
			$(".btn_zonghe_all").css("background-color","#FDFDFD");
			$("#rank_zonghe_erea3_show").css("background-color","#ededed");
		}
	});
//综合下一页
	$("#rank_zonghe_down_show").click(function(){
		//第4页显示的话仍显示，第4页按钮颜色不变
		var display4=$("#rank_zonghe_erea4").css("display");
		if(display4=="block"){
			$(".div_all").css("display","none");
			$("#rank_zonghe_erea4").css("display","block");
		}
		//第3页显示的话换成第4页显示,第4页按钮变色
		var display3=$("#rank_zonghe_erea3").css("display");
		if(display3=="block"){
			$(".div_all").css("display","none");
			$("#rank_zonghe_erea4").css("display","block");
			
			$(".btn_zonghe_all").css("background-color","#FDFDFD");
			$("#rank_zonghe_erea4_show").css("background-color","#ededed");
		}
		//第2页显示的话换成第3页显示,第3页按钮变色
		var display2=$("#rank_zonghe_erea2").css("display");
		if(display2=="block"){
			$(".div_all").css("display","none");
			$("#rank_zonghe_erea3").css("display","block");
			
			$(".btn_zonghe_all").css("background-color","#FDFDFD");
			$("#rank_zonghe_erea3_show").css("background-color","#ededed");
		}
		//第1页显示的话换成第2页显示,第2页按钮变色
		var display1=$("#rank_zonghe_erea1").css("display");
		if(display1=="block"){
			$(".div_all").css("display","none");
			$("#rank_zonghe_erea2").css("display","block");
			
			$(".btn_zonghe_all").css("background-color","#FDFDFD");
			$("#rank_zonghe_erea2_show").css("background-color","#ededed");
		}
	});
/*****************************************************************************/
//与月销量对应的第几页按钮
	//月销量第1页,点击第一页月销量1显示，第一页按钮变色
	$("#rank_monthcount_ereas_show #rank_monthcount_erea1_show").click(function(){
		$(".div_all").css("display","none");
		$("#rank_monthcount_erea1").css("display","block");
		
		$(".btn_monthcount_all").css("background-color","#FDFDFD");
		$("#rank_monthcount_erea1_show").css("background-color","#ededed");
	});
	//月销量第2页,点击第2页月销量1显示，第2页按钮变色
	$("#rank_monthcount_ereas_show #rank_monthcount_erea2_show").click(function(){
		$(".div_all").css("display","none");
		$("#rank_monthcount_erea2").css("display","block");
		
		$(".btn_monthcount_all").css("background-color","#FDFDFD");
		$("#rank_monthcount_erea2_show").css("background-color","#ededed");
	});
	//月销量第3页,点击第3页月销量1显示，第3页按钮变色
	$("#rank_monthcount_ereas_show #rank_monthcount_erea3_show").click(function(){
		$(".div_all").css("display","none");
		$("#rank_monthcount_erea3").css("display","block");
		
		$(".btn_monthcount_all").css("background-color","#FDFDFD");
		$("#rank_monthcount_erea3_show").css("background-color","#ededed");
	});
	//月销量第4页,点击第4页月销量1显示，第4页按钮变色
	$("#rank_monthcount_ereas_show #rank_monthcount_erea4_show").click(function(){
		$(".div_all").css("display","none");
		$("#rank_monthcount_erea4").css("display","block");
		
		$(".btn_monthcount_all").css("background-color","#FDFDFD");
		$("#rank_monthcount_erea4_show").css("background-color","#ededed");
	});
//月销量上一页
	$("#rank_monthcount_up_show").click(function(){
		//第一页若显示仍显示,第1页按钮颜色不变
		var display1=$("#rank_monthcount_erea1").css("display");
		if(display1=="block"){
			$(".div_all").css("display","none");
			$("#rank_monthcount_erea1").css("display","block");
			
			$(".btn_monthcount_all").css("background-color","#FDFDFD");
			$("#rank_monthcount_erea1_show").css("background-color","#ededed");
		}
		//第2页若显示换成第1页,第1页按钮变色
		var display2=$("#rank_monthcount_erea2").css("display");
		if(display2=="block"){
			$(".div_all").css("display","none");
			$("#rank_monthcount_erea1").css("display","block");
			
			$(".btn_monthcount_all").css("background-color","#FDFDFD");
			$("#rank_monthcount_erea1_show").css("background-color","#ededed");
		}
		//第3页若显示换成第2页,第2页按钮变色
		var display3=$("#rank_monthcount_erea3").css("display");
		if(display3=="block"){
			$(".div_all").css("display","none");
			$("#rank_monthcount_erea2").css("display","block");
			
			$(".btn_monthcount_all").css("background-color","#FDFDFD");
			$("#rank_monthcount_erea2_show").css("background-color","#ededed");
		}
		//第4页若显示换成第3页,第3页按钮变色
		var display4=$("#rank_monthcount_erea4").css("display");
		if(display4=="block"){
			$(".div_all").css("display","none");
			$("#rank_monthcount_erea3").css("display","block");
			
			$(".btn_monthcount_all").css("background-color","#FDFDFD");
			$("#rank_monthcount_erea3_show").css("background-color","#ededed");
		}
	});
//月销量下一页
	$("#rank_monthcount_down_show").click(function(){
		//第4页若显示仍显示,第4页按钮颜色不变
		var display4=$("#rank_monthcount_erea4").css("display");
		if(display4=="block"){
			$(".div_all").css("display","none");
			$("#rank_monthcount_erea4").css("display","block");
			
			$(".btn_monthcount_all").css("background-color","#FDFDFD");
			$("#rank_monthcount_erea4_show").css("background-color","#ededed");
		}
		//第3页若显示换成第4页,第4页按钮颜色改变
		var display3=$("#rank_monthcount_erea3").css("display");
		if(display3=="block"){
			$(".div_all").css("display","none");
			$("#rank_monthcount_erea4").css("display","block");
			
			$(".btn_monthcount_all").css("background-color","#FDFDFD");
			$("#rank_monthcount_erea4_show").css("background-color","#ededed");
		}
		//第2页若显示换成第3页,第3页按钮颜色改变
		var display2=$("#rank_monthcount_erea2").css("display");
		if(display2=="block"){
			$(".div_all").css("display","none");
			$("#rank_monthcount_erea3").css("display","block");
			
			$(".btn_monthcount_all").css("background-color","#FDFDFD");
			$("#rank_monthcount_erea3_show").css("background-color","#ededed");
		}
		//第1页若显示换成第2页,第2页按钮颜色改变
		var display1=$("#rank_monthcount_erea1").css("display");
		if(display1=="block"){
			$(".div_all").css("display","none");
			$("#rank_monthcount_erea2").css("display","block");
			
			$(".btn_monthcount_all").css("background-color","#FDFDFD");
			$("#rank_monthcount_erea2_show").css("background-color","#ededed");
		}
	});
/************************************************************************/
//与价格对应的第几页按钮
	$("#rank_price_ereas_show #rank_price_erea1_show").click(function(){
		//价格第1页,点击第1页价格1显示，第1页按钮变色
		$(".div_all").css("display","none");
		$("#rank_price_erea1").css("display","block");
		
		$(".btn_price_all").css("background-color","#FDFDFD");
		$("#rank_price_erea1_show").css("background-color","#ededed");
		
	});
	//价格第2页,点击第2页价格2显示，第2页按钮变色
	$("#rank_price_ereas_show #rank_price_erea2_show").click(function(){
		$(".div_all").css("display","none");
		$("#rank_price_erea2").css("display","block");
		
		$(".btn_price_all").css("background-color","#FDFDFD");
		$("#rank_price_erea2_show").css("background-color","#ededed");
	});
	//价格第3页,点击第3页价格3显示，第3页按钮变色
	$("#rank_price_ereas_show #rank_price_erea3_show").click(function(){
		$(".div_all").css("display","none");
		$("#rank_price_erea3").css("display","block");
		
		$(".btn_price_all").css("background-color","#FDFDFD");
		$("#rank_price_erea3_show").css("background-color","#ededed");
	});
	//价格第4页,点击第4页价格4显示，第4页按钮变色
	$("#rank_price_ereas_show #rank_price_erea4_show").click(function(){
		$(".div_all").css("display","none");
		$("#rank_price_erea4").css("display","block");
		
		$(".btn_price_all").css("background-color","#FDFDFD");
		$("#rank_price_erea4_show").css("background-color","#ededed");
	});
//价格上一页
	$("#rank_price_up_show").click(function(){
		//第一页若显示仍显示,第1页按钮颜色不变
		var display1=$("#rank_price_erea1").css("display");
		if(display1=="block"){
			$(".div_all").css("display","none");
			$("#rank_price_erea1").css("display","block");
			
			$(".btn_price_all").css("background-color","#FDFDFD");
			$("#rank_price_erea1_show").css("background-color","#ededed");
		}
		//第2页若显示换成第1页,第1页按钮颜色改变
		var display2=$("#rank_price_erea2").css("display");
		if(display2=="block"){
			$(".div_all").css("display","none");
			$("#rank_price_erea1").css("display","block");
			
			$(".btn_price_all").css("background-color","#FDFDFD");
			$("#rank_price_erea1_show").css("background-color","#ededed");
		}
		//第3页若显示换成第2页,第2页按钮颜色改变
		var display3=$("#rank_price_erea3").css("display");
		if(display3=="block"){
			$(".div_all").css("display","none");
			$("#rank_price_erea2").css("display","block");
			
			$(".btn_price_all").css("background-color","#FDFDFD");
			$("#rank_price_erea2_show").css("background-color","#ededed");
		}
		//第4页若显示换成第3页,第3页按钮颜色改变
		var display4=$("#rank_price_erea4").css("display");
		if(display4=="block"){
			$(".div_all").css("display","none");
			$("#rank_price_erea3").css("display","block");
			
			$(".btn_price_all").css("background-color","#FDFDFD");
			$("#rank_price_erea3_show").css("background-color","#ededed");
		}
	});
//价格下一页
	$("#rank_price_down_show").click(function(){
		//第4页若显示仍显示,第4页按钮颜色不变
		var display4=$("#rank_price_erea4").css("display");
		if(display4=="block"){
			$(".div_all").css("display","none");
			$("#rank_price_erea4").css("display","block");
			
			$(".btn_price_all").css("background-color","#FDFDFD");
			$("#rank_price_erea4_show").css("background-color","#ededed");
		}
		//第3页若显示换成第4页,第4页按钮颜色改变
		var display3=$("#rank_price_erea3").css("display");
		if(display3=="block"){
			$(".div_all").css("display","none");
			$("#rank_price_erea4").css("display","block");
			
			$(".btn_price_all").css("background-color","#FDFDFD");
			$("#rank_price_erea4_show").css("background-color","#ededed");
		}
		//第2页若显示换成第3页,第3页按钮颜色改变
		var display2=$("#rank_price_erea2").css("display");
		if(display2=="block"){
			$(".div_all").css("display","none");
			$("#rank_price_erea3").css("display","block");
			
			$(".btn_price_all").css("background-color","#FDFDFD");
			$("#rank_price_erea3_show").css("background-color","#ededed");
		}
		//第1页若显示换成第2页,第2页按钮颜色改变
		var display1=$("#rank_price_erea1").css("display");
		if(display1=="block"){
			$(".div_all").css("display","none");
			$("#rank_price_erea2").css("display","block");
			
			$(".btn_price_all").css("background-color","#FDFDFD");
			$("#rank_price_erea2_show").css("background-color","#ededed");
		}
	});
/******************************************************************************/	
});