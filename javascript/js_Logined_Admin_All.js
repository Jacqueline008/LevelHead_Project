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