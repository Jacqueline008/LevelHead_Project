<!doctype html>
<?php session_start();?>
<html>
<head>
<meta charset="utf-8">
<title>Home-首页</title>
<script src="javascript/jquery-2.2.3.min.js"></script>
<!--header-->
<link href="css/css_Header.css" rel="stylesheet"/>
<script src="javascript/js_Header.js"></script>
<!--home-->
<link href="css/css_home.css" rel="stylesheet"/>
<script src="javascript/js_home.js"></script>
<!--footer-->
<link href="css/css_Footer.css" rel="stylesheet"/>
</head>

<body>

<!--自动加载类 -->
<?php
function __autoload($cl_name){
	include_once "UserDefinedClasses/".$cl_name.".php";
}
?>

<!--header-begin-->
<?php
SiteContent::showHeader();
?>
<!--header-end-->

<!--标头下方的网站介绍图-->
	<div id="banner">
    	<div id="window">
        	<div id="scroll_1">
       	 		<div id="one">
                简洁、直观、强悍的商品检索网站
    			<br>
        		让购物更迅速、简单 
        		</div>
           		<div id="two">
    			我们为您提供家电销售服务
                <br>
                让智能家电改变您的生活
        		</div>
            	<div id="three">
    			我们为您提供产品售后服务 
        		<br>
        		解决您的后顾之忧
        		</div>
           	 	<div id="four">
    			我们为您提供免费的产品运输服务
        		<br>
        		让您享受VIP般的待遇
        		</div>
            	<div id="five">
    			我们为您提供产品质量保险服务
        		<br>
        		让您的产品质量更有保障
        		</div>
            </div>
            <div id="scroll_2">
       	 		<div id="one">
                简洁、直观、强悍的商品检索网站
    			<br>
        		让购物更迅速、简单 
        		</div>
           		<div id="two">
    			我们为您提供家电销售服务
                <br>
                让智能家电改变您的生活
        		</div>
            	<div id="three">
    			我们为您提供产品售后服务 
        		<br>
        		解决您的后顾之忧
        		</div>
           	 	<div id="four">
    			我们为您提供免费的产品运输服务
        		<br>
        		让您享受VIP般的待遇
        		</div>
            	<div id="five">
    			我们为您提供产品质量保险服务
        		<br>
        		让您的产品质量更有保障
        		</div>
            </div>
            <div id="scroll_3">
       	 		<div id="one">
                简洁、直观、强悍的商品检索网站
    			<br>
        		让购物更迅速、简单 
        		</div>
           		<div id="two">
    			我们为您提供家电销售服务
                <br>
                让智能家电改变您的生活
        		</div>
            	<div id="three">
    			我们为您提供产品售后服务 
        		<br>
        		解决您的后顾之忧
        		</div>
           	 	<div id="four">
    			我们为您提供免费的产品运输服务
        		<br>
        		让您享受VIP般的待遇
        		</div>
            	<div id="five">
    			我们为您提供产品质量保险服务
        		<br>
        		让您的产品质量更有保障
        		</div>
            </div>      
        </div>
    </div>

<!--图片形式的导航-->
	<div id="menu_pics">
    	<a id="menu_a_tv" href="tv.php" target="_blank">
        <div id="div1">电视</div>
        <div id="div2">电视</div>
        </a>
        <a id="menu_a_aircondition" href="#">
        <div id="div1">空调</div>
        <div id="div2">空调</div>
        </a>
        <a id="menu_a_refrigerator" href="#">
        <div id="div1">冰箱</div>
        <div id="div2">冰箱</div>
        </a>
        <a id="menu_a_washer" href="#">
        <div id="div1">洗衣机</div>
        <div id="div2">洗衣机</div>
        </a>
        <a id="menu_a_waterheater" href="#">
        <div id="div1">热水器</div>
        <div id="div2">热水器</div>
        </a>
        <a id="menu_a_kitchen" href="#">
        <div id="div1">厨房大电</div>
        <div id="div2">厨房大电</div>
        </a>
    </div>

<!--最热产品 最新产品 特色产品-->
	<div id="menu_btns">
    <input type="button" id="menu_btn_hot" value="最热产品" />
    <input type="button" id="menu_btn_new" value="最新产品"/>
    <input type="button" id="menu_btn_featured" value="特色产品"/>
    </div>
    	 
	<div id="hot_products">
    	<div id="product1">
        	<a href="#"><img src="images/hot_tv.jpg">
        	<p><span style="color:red">￥2599</span> 
            TCL D49A620U 四倍清晰 无敌观影王 大片同步看</p>
       		</a>
        </div>
        <div id="product2">
       		<a href="#"><img src="images/hot_washer.jpg">
        	<p><span style="color:red">￥4999</span> 
            SIEMENS/西门子 WD12G4C01W 自动烘干一体机</p>
       		</a>
        </div>
        <div id="product3">
        	<a href="#"><img src="images/hot_refrigerator.jpg">
        	<p><span style="color:red">￥3999</span> 
            Haier/海尔 BCD-452WDPF 节能静音制冷</p>
       		</a>
        </div>
        <div id="product4">
            <a href="#"><img src="images/hot_kitchen.jpg">
        	<p><span style="color:red">￥3399</span> 
            美的DJ570R+Q360B抽油烟机燃气灶套餐 大吸力侧吸式</p>
       		</a>
        </div>
    </div>
    
    <div id="new_products">
    	<div id="product1">
        	<a href="#"><img src="images/new_tv.jpg">
        	<p><span style="color:red">￥4299</span> 
            Samsung/三星 UA55JU50SWJXXZ 4K超高清</p>
       		</a>
        </div>
        <div id="product2">
        	<a href="#"><img src="images/new_aircondition.jpg">
        	<p><span style="color:red">￥2199</span> 
            TCL KFRd-35GW/EL23BpA 阿里云智能变频</p>
       		</a>
        </div>
        <div id="product3">
        	<a href="#"><img src="images/new_washer.jpg">
        	<p><span style="color:red">￥998</span> 
            Skyworth/创维 F60A 性价比波轮</p>
       		</a>
        </div>
        <div id="product4">
        	<a href="#"><img src="images/new_kitchen.jpg">
        	<p><span style="color:red">￥599</span> 
            Midea/美的 QL303B 三重防爆钢化玻璃 完美抛物线火</p>
       		</a>
        </div>
    </div>
    
    <div id="featured_products">
    	<div id="product1">
        	<a href="#"><img src="images/featured_refrigerator.jpg">
        	<p><span style="color:red">￥2999</span> 
            Midea/美的 BCD-516WKM(E) 风冷无霜/智控节能</p>
       		</a>
        </div>
        <div id="product2">
        	<a href="#"><img src="images/featured_tv.jpg">
        	<p><span style="color:red">￥5999</span> 
            Samsung/三星 UA55JU6800JXXZ 超高清</p>
       		</a>
        </div>
        <div id="product3">
        	<a href="#"><img src="images/featured_washer.jpg">
        	<p><span style="color:red">￥3799</span> 
            SIEMENS/西门子 XQG80-WM10N2C80W</p>
       		</a>
        </div>
        <div id="product4">
        	<a href="#"><img src="images/featured_kitchen.jpg">
        	<p><span style="color:red">￥1299</span> 
            SUPOR/苏泊尔 QB616 钢化玻璃 大火力易打理，安全超节能</p>
       		</a>
        </div>
    </div>

<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end-->

</body>
</html>
