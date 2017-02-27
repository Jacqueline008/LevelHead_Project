/*uSearchForm表单提交事件，当用户输入相应的内容时，
	例如：电视，则会跳转到电视页面*/
        function uSearchFormFun(){
			var uSearchContent=$("#uSearchContent").val();
			if(uSearchContent=="电视"){
				window.open("tv.php");/*电视页面*/
			}else if(uSearchContent=="空调"){
				window.open("http://news.baidu.com/");/*页面*/
			}else if(uSearchContent=="冰箱"){
				window.open("https://www.baidu.com/");/*页面*/
			}else if(uSearchContent=="洗衣机"){
				window.open("https://www.baidu.com/");/*页面*/
			}else if(uSearchContent=="热水器"){
				window.open("https://www.baidu.com/");/*页面*/
			}else if(uSearchContent=="厨房大电"){
				window.open("https://www.baidu.com/");/*页面*/
			}
		}
/*提交按钮：当鼠标移到按钮上时按钮变为蓝色，移走时恢复为黑色*/
	function head_submit_changepic(){
		$("#uSearchForm button img").attr("src","images/search2.png");
	}
	function head_submit_changepic2(){
		$("#uSearchForm button img").attr("src","images/search.png");
	}
/*购物车：当鼠标移到购物车上时，购物车会变成蓝色，移走时恢复为黑色*/
	function head_shopcar_changepic(){
		$("#shoppingcar img").attr("src","images/car2.png");
	}
	function head_shopcar_changepic2(){
		$("#shoppingcar img").attr("src","images/car.png");
	}