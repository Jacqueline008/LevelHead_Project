
	$(document).ready(function(e) {
		/***************************************************************************/
// 信息容器左侧的竖着的图片列表以及中间的图片展示区域


//给信息容器左侧的竖着的图片列表添加colorbox效果
        $("#product_info_left a").colorbox(
		{		width:650,
				height:550,
				transition: 'elastic',
				speed: 300, 
				current: '第{current}张/总{total}张',
				slideshow: true 
		}
		);

//给信息容器左侧的竖着的图片列表鼠标悬浮在上面，小图片变灰，中间的图片展示区域相应地改变图片，鼠标离开时小图片恢复原样
		$("#product_info_left #pic1").mouseenter(function(){
			$("#product_info_mid img").attr("src","images/haier_product1_pic1_big.jpg");
			$("#product_info_left #pic1 div").css("display","block");
		});
		$("#product_info_left #pic1").mouseleave(function(){
			$("#product_info_left #pic1 div").css("display","none");
		});
		//
		$("#product_info_left #pic2").mouseenter(function(){
			$("#product_info_mid img").attr("src","images/haier_product1_pic2_big.jpg");
			$("#product_info_left #pic2 div").css("display","block");
		});
		$("#product_info_left #pic2").mouseleave(function(){
			$("#product_info_left #pic2 div").css("display","none");
		});
		//
		$("#product_info_left #pic3").mouseenter(function(){
			$("#product_info_mid img").attr("src","images/haier_product1_pic3_big.jpg");
			$("#product_info_left #pic3 div").css("display","block");
		});
		$("#product_info_left #pic3").mouseleave(function(){
			$("#product_info_left #pic3 div").css("display","none");
		});
		//
		$("#product_info_left #pic4").mouseenter(function(){
			$("#product_info_mid img").attr("src","images/haier_product1_pic4_big.jpg");
			$("#product_info_left #pic4 div").css("display","block");
		});
		$("#product_info_left #pic4").mouseleave(function(){
			$("#product_info_left #pic4 div").css("display","none");
		});
		//
		$("#product_info_left #pic5").mouseenter(function(){
			$("#product_info_mid img").attr("src","images/haier_product1_pic5_big.jpg");
			$("#product_info_left #pic5 div").css("display","block");
		});
		$("#product_info_left #pic5").mouseleave(function(){
			$("#product_info_left #pic5 div").css("display","none");
		});
/*****************************************************************************/
//信息详情，规格参数，累计评价展示栏
		//鼠标悬浮在信息详情，规格参数，累计评价上时，会显示相应的区域
		$("#product_detail").mouseenter(function(){
			$("#detail").css("display","block");
			$("#standard").css("display","none");
			$("#totalcomment").css("display","none");
		});
		//
		$("#product_standard").mouseenter(function(){
			$("#detail").css("display","none");
			$("#standard").css("display","block");
			$("#totalcomment").css("display","none");
		});
		//
		$("#product_totalcomment").mouseenter(function(){
			$("#detail").css("display","none");
			$("#standard").css("display","none");
			$("#totalcomment").css("display","block");
		});
    });
