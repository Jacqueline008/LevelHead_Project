<!doctype html>
<?php session_start();?>
<html>
<head>
<meta charset="utf-8">
<title>tv_haier</title>
<script src="javascript/jquery-2.2.3.min.js"></script>
<!--header-->
<link href="css/css_Header.css" rel="stylesheet"/>
<script src="javascript/js_Header.js"></script>
<!--slider_begin-->
        <link rel="stylesheet" href="dummy-images/orbit-1.2.3.css">
        <script type="text/javascript" src="dummy-images/jquery-1.5.1.min.js">        </script>
        <script type="text/javascript" 
		src="dummy-images/jquery.orbit-1.2.3.min.js">
        </script>
        <script type="text/javascript">
			$(window).load(function() {
				$('#featured').orbit();
			});
		</script>
<!--slider_end-->
<!--tv_haier-->
<link href="css/css_tv_haier.css" rel="stylesheet"/>
<script src="javascript/js_tv_haier.js"></script>
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

<!--slider_begin--> 
  <div class="container">
       <div id="featured">
    		<a href="#">
            <img src="images/tv_haier1.jpg" width="940px" height="450px" />
            </a> 
            <a href="#">
            <img src="images/tv_haier2.jpg" width="940px" height="450px"data-caption="#htmlCaption" />
            </a>
            <a href="#">            
            <img src="images/tv_haier3.jpg" width="940px" height="450px"/> 
            </a>
       </div>
  </div> 
<!--slider_end-->

<!--综合，月销量，人气，价格切换按钮-->
	<div id="toggle_buttons">
    <input id="toggle_btn_zonghe" type="button" value="综合"/>
    <input id="toggle_btn_monthcount" type="button" value="月销量"/>
    <input id="toggle_btn_popular" type="button" value="人气"/>
    <input id="toggle_btn_price" type="button" value="价格"/>
    </div>
      
<!--综合排行展示区-->
<div id="rank_zonghe_erea1" class="div_all">
<table id="rank_zonghe">
  <tr>
    <td style="color:#666">产品图片</td>
    <td class="zonghe_td2" style="color:#666">产品导航</td>
    <td class="zonghe_td3" style="color:#666; font-size:16px">销量</td>
    <td class="zonghe_td4" style="color:#666; font-size:16px">价格</td>
  </tr>
  <tr>
    <td><img src="images/haier01.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LE32B310N 纤美外观设计窄边框</a></td>
    <td class="zonghe_td3">2262件</td>
    <td class="zonghe_td4">¥902</td>
  </tr>
  <tr>
    <td><img src="images/haier02.jpg"/></td>
    <td class="zonghe_td2"><a href="haier_product1.php" target="_blank">海尔 LS49A51 64位芯片4K智能， H.265硬解码全程4K高清传输</a></td>
    <td class="zonghe_td3">721件</td>
    <td class="zonghe_td4">¥2034</td>
  </tr>
  <tr>
    <td><img src="images/haier03.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LE32A31 纤薄机身， 超高清</a></td>
    <td class="zonghe_td3">1043件</td>
    <td class="zonghe_td4">¥1070</td>
  </tr>
  <tr>
    <td><img src="images/haier04.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LE40A31 无线WIFI 纤薄外观设计 </a></td>
    <td class="zonghe_td3">435件</td>
    <td class="zonghe_td4">¥1487</td>
  </tr>
  <tr>
    <td><img src="images/haier05.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LS55M31 4K超高清 立体环绕声 </a></td>
    <td class="zonghe_td3">261件</td>
    <td class="zonghe_td4">¥2640</td>
  </tr>
</table>
</div>

<div id="rank_zonghe_erea2" class="div_all">
<table id="rank_zonghe">
  <tr>
    <td style="color:#666">产品图片</td>
    <td class="zonghe_td2" style="color:#666">产品导航</td>
    <td class="zonghe_td3" style="color:#666; font-size:16px">销量</td>
    <td class="zonghe_td4" style="color:#666; font-size:16px">价格</td>
  </tr>
  <tr>
    <td><img src="images/haier06.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LE43A31 窄边框， 内置WIFI</a></td>
    <td class="zonghe_td3">305件</td>
    <td class="zonghe_td4">¥1712</td>
  </tr>
  <tr>
    <td><img src="images/haier07.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LS55A51 黑色拉丝</a></td>
    <td class="zonghe_td3">102件</td>
    <td class="zonghe_td4">¥2784</td>
  </tr>
  <tr>
    <td><img src="images/haier08.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LE42B310N 亮度清晰， 纤薄</a></td>
    <td class="zonghe_td3">251件</td>
    <td class="zonghe_td4">¥1116</td>
  </tr>
  <tr>
    <td><img src="images/haier09.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LE48G520N 全高清， 网络WIFI</a></td>
    <td class="zonghe_td3">159件</td>
    <td class="zonghe_td4">¥2226</td>
  </tr>
  <tr>
    <td><img src="images/haier10.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LS55AL88G31</a></td>
    <td class="zonghe_td3">110件</td>
    <td class="zonghe_td4">¥3944</td>
  </tr>
</table>
</div>

<div id="rank_zonghe_erea3" class="div_all">
<table id="rank_zonghe">
  <tr>
    <td style="color:#666">产品图片</td>
    <td class="zonghe_td2" style="color:#666">产品导航</td>
    <td class="zonghe_td3" style="color:#666; font-size:16px">销量</td>
    <td class="zonghe_td4" style="color:#666; font-size:16px">价格</td>
  </tr>
  <tr>
    <td><img src="images/haier11.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LE32B510X 窄边框， 纤薄机身 </a></td>
    <td class="zonghe_td3">260件</td>
    <td class="zonghe_td4">¥979</td>
  </tr>
  <tr>
    <td><img src="images/haier12.jpg"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LE32AL88 宁静光技术， 激光探测切割工艺， 高密度电镀银技术 </a></td>
    <td class="zonghe_td3">430件</td>
    <td class="zonghe_td4">¥1423</td>
  </tr>
  <tr>
    <td><img src="images/haier13.jpg"/></td>
    <td class="zonghe_td2"><a href="#">海尔 U55K5</a></td>
    <td class="zonghe_td3">80件</td>
    <td class="zonghe_td4">¥2625</td>
  </tr>
  <tr>
    <td><img src="images/haier14.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 32EU3000 ADS硬屏， 支持多种格式解码， 四驱背光 </a></td>
    <td class="zonghe_td3">227件</td>
    <td class="zonghe_td4">¥950</td>
  </tr>
  <tr>
    <td><img src="images/haier15.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LE48AL88G31 智能电视， USB媒体播放</a></td>
    <td class="zonghe_td3">50件</td>
    <td class="zonghe_td4">¥2756</td>
  </tr>
</table>
</div>

<div id="rank_zonghe_erea4" class="div_all">
<table id="rank_zonghe">
  <tr>
    <td style="color:#666">产品图片</td>
    <td class="zonghe_td2" style="color:#666">产品导航</td>
    <td class="zonghe_td3" style="color:#666; font-size:16px">销量</td>
    <td class="zonghe_td4" style="color:#666; font-size:16px">价格</td>
  </tr>
  <tr>
    <td><img src="images/haier16.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LE43AL88G31 无线wifi ， 支持4K片源 </a></td>
    <td class="zonghe_td3">40件</td>
    <td class="zonghe_td4">¥2272</td>
  </tr>
  <tr>
    <td><img src="images/haier17.jpg"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LS55AL88U51 </a></td>
    <td class="zonghe_td3">120件</td>
    <td class="zonghe_td4">¥4649</td>
  </tr>
  <tr>
    <td><img src="images/haier18.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LU40K5000 4K高清， WIFI</a></td>
    <td class="zonghe_td3">300件</td>
    <td class="zonghe_td4">¥2049</td>
  </tr>
  <tr>
    <td><img src="images/haier19.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LD32U3100 MHL智能连接， 窄边框</a></td>
    <td class="zonghe_td3">260件</td>
    <td class="zonghe_td4">¥1127</td>
  </tr>
  <tr>
    <td><img src="images/haier20.png"/></td>
    <td class="zonghe_td2"><a href="#">海尔 LS42H510N 4K画质， 内置wifi</a></td>
    <td class="zonghe_td3">300件</td>
    <td class="zonghe_td4">¥2282</td>
  </tr>
</table>
</div>

<!--与综合相对应的四个第几页按钮-->
<div id="rank_zonghe_ereas_show" class="btn_all">
	<input id="rank_zonghe_up_show" type="button" value="上一页"/>
	<input class="btn_zonghe_all" id="rank_zonghe_erea1_show" type="button" value="第1页" style="background-color:#ededed"/>
    <input class="btn_zonghe_all" id="rank_zonghe_erea2_show" type="button" value="第2页"/>
    <input class="btn_zonghe_all" id="rank_zonghe_erea3_show" type="button" value="第3页"/>
    <input class="btn_zonghe_all" id="rank_zonghe_erea4_show" type="button" value="第4页"/>
    <input id="rank_zonghe_down_show" type="button" value="下一页"/>
</div>

<!--月销量展示区-->
<div id="rank_monthcount_erea1" class="div_all">
<table id="rank_monthcount">
  <tr>
    <td style="color:#666">产品图片</td>
    <td class="monthcount_td2" style="color:#666">产品导航</td>
    <td class="monthcount_td3" style="color:#666; font-size:16px">销量</td>
    <td class="monthcount_td4" style="color:#666; font-size:16px">价格</td>
  </tr>
  <tr>
    <td><img src="images/haier01.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LE32B310N 纤美外观设计窄边框</a></td>
    <td class="monthcount_td3">2262件</td>
    <td class="monthcount_td4">¥902</td>
  </tr>
  <tr>
    <td><img src="images/haier03.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LE32A31 纤薄机身， 超高清</a></td>
    <td class="monthcount_td3">1043件</td>
    <td class="monthcount_td4">¥1070</td>
  </tr>
  <tr>
    <td><img src="images/haier02.jpg"/></td>
    <td class="monthcount_td2"><a href="haier_product1.html" target="_blank">海尔 LS49A51 64位芯片4K智能， H.265硬解码全程4K高清传输</a></td>
    <td class="monthcount_td3">721件</td>
    <td class="monthcount_td4">¥2034</td>
  </tr>
  <tr>
    <td><img src="images/haier04.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LE40A31 无线WIFI， 纤薄外观设计</a></td>
    <td class="monthcount_td3">435件</td>
    <td class="monthcount_td4">¥1487</td>
  </tr>
  <tr>
    <td><img src="images/haier12.jpg"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LE32AL88 宁静光技术， 激光探测切割工艺， 高密度电镀银技术</a></td>
    <td class="monthcount_td3">430件</td>
    <td class="monthcount_td4">¥1423</td>
  </tr>
</table>
</div>

<div id="rank_monthcount_erea2" class="div_all">
<table id="rank_monthcount">
  <tr>
    <td style="color:#666">产品图片</td>
    <td class="monthcount_td2" style="color:#666">产品导航</td>
    <td class="monthcount_td3" style="color:#666; font-size:16px">销量</td>
    <td class="monthcount_td4" style="color:#666; font-size:16px">价格</td>
  </tr>
  <tr>
    <td><img src="images/haier06.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LE43A31 窄边框， 内置WIFI</a></td>
    <td class="monthcount_td3">305件</td>
    <td class="monthcount_td4">¥1712</td>
  </tr>
  <tr>
    <td><img src="images/haier18.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LU40K5000 4K高清， WIFI</a></td>
    <td class="monthcount_td3">300件</td>
    <td class="monthcount_td4">¥2049</td>
  </tr>
  <tr>
    <td><img src="images/haier20.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LS42H510N 4K画质， 内置wifi</a></td>
    <td class="monthcount_td3">300件</td>
    <td class="monthcount_td4">¥2282</td>
  </tr>
  <tr>
    <td><img src="images/haier05.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LS55M31 4K超高清 ， 立体环绕声</a></td>
    <td class="monthcount_td3">261件</td>
    <td class="monthcount_td4">¥2640</td>
  </tr>
  <tr>
    <td><img src="images/haier11.png"/></td>
    <td class="monthcount_td2"><a href="#"> 海尔 LE32B510X 窄边框， 纤薄机身 </a></td>
    <td class="monthcount_td3">260件</td>
    <td class="monthcount_td4">¥979</td>
  </tr>
</table>
</div>

<div id="rank_monthcount_erea3" class="div_all">
<table id="rank_monthcount">
  <tr>
    <td style="color:#666">产品图片</td>
    <td class="monthcount_td2" style="color:#666">产品导航</td>
    <td class="monthcount_td3" style="color:#666; font-size:16px">销量</td>
    <td class="monthcount_td4" style="color:#666; font-size:16px">价格</td>
  </tr>
  <tr>
    <td><img src="images/haier19.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LD32U3100 MHL智能连接， 窄边框</a></td>
    <td class="monthcount_td3">260件</td>
    <td class="monthcount_td4">¥1127</td>
  </tr>
  <tr>
    <td><img src="images/haier08.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LE42B310N 亮度清晰， 纤薄</a></td>
    <td class="monthcount_td3">251件</td>
    <td class="monthcount_td4">¥1116</td>
  </tr>
  <tr>
    <td><img src="images/haier14.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 32EU3000 ADS硬屏， 支持多种格式解码， 四驱背光</a></td>
    <td class="monthcount_td3">227件</td>
    <td class="monthcount_td4">¥950</td>
  </tr>
  <tr>
    <td><img src="images/haier09.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LE48G520N 全高清， 网络WIFI</a></td>
    <td class="monthcount_td3">159件</td>
    <td class="monthcount_td4">¥2226</td>
  </tr>
  <tr>
    <td><img src="images/haier17.jpg"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LS55AL88U51</a></td>
    <td class="monthcount_td3">120件</td>
    <td class="monthcount_td4">¥4649</td>
  </tr>
</table>
</div>

<div id="rank_monthcount_erea4" class="div_all">
<table id="rank_monthcount">
  <tr>
    <td style="color:#666">产品图片</td>
    <td class="monthcount_td2" style="color:#666">产品导航</td>
    <td class="monthcount_td3" style="color:#666; font-size:16px">销量</td>
    <td class="monthcount_td4" style="color:#666; font-size:16px">价格</td>
  </tr>
  <tr>
    <td><img src="images/haier10.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LS55AL88G31 </a></td>
    <td class="monthcount_td3">110件</td>
    <td class="monthcount_td4">¥3944</td>
  </tr>
  <tr>
    <td><img src="images/haier07.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LS55A51 黑色拉丝</a></td>
    <td class="monthcount_td3">102件</td>
    <td class="monthcount_td4">¥2784</td>
  </tr>
  <tr>
    <td><img src="images/haier13.jpg"/></td>
    <td class="monthcount_td2"><a href="#">海尔 U55K5</a></td>
    <td class="monthcount_td3">80件</td>
    <td class="monthcount_td4">¥2625</td>
  </tr>
  <tr>
    <td><img src="images/haier15.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LE48AL88G31 智能电视， USB媒体播放</a></td>
    <td class="monthcount_td3">50件</td>
    <td class="monthcount_td4">¥2756</td>
  </tr>
  <tr>
    <td><img src="images/haier16.png"/></td>
    <td class="monthcount_td2"><a href="#">海尔 LE43AL88G31 无线wifi ， 支持4K片源</a></td>
    <td class="monthcount_td3">40件</td>
    <td class="monthcount_td4">¥2272</td>
  </tr>
</table>
</div>

<!--与月销量相对应的四个第几页按钮-->
<div id="rank_monthcount_ereas_show" class="btn_all">
	<input id="rank_monthcount_up_show" type="button" value="上一页"/>
	<input class="btn_monthcount_all" id="rank_monthcount_erea1_show" type="button" value="第1页" style="background-color:#ededed"/>
    <input class="btn_monthcount_all" id="rank_monthcount_erea2_show" type="button" value="第2页"/>
    <input class="btn_monthcount_all" id="rank_monthcount_erea3_show" type="button" value="第3页"/>
    <input class="btn_monthcount_all" id="rank_monthcount_erea4_show" type="button" value="第4页"/>
    <input id="rank_monthcount_down_show" type="button" value="下一页"/>
</div>

<!--价格展示区-->
<div id="rank_price_erea1" class="div_all">
<table id="rank_price">
  <tr>
    <td style="color:#666">产品图片</td>
    <td class="price_td2" style="color:#666;">产品导航</td>
    <td class="price_td3" style="color:#666; font-size:16px">销量</td>
    <td class="price_td4" style="color:#666; font-size:16px">价格</td>
  </tr>
  <tr>
    <td><img src="images/haier17.jpg"/></td>
    <td class="price_td2"><a href="#">海尔 LS55AL88U51</a></td>
    <td class="price_td3">120件</td>
    <td class="price_td4">¥4649</td>
  </tr>
  <tr>
    <td><img src="images/haier10.png"/></td>
    <td class="price_td2"><a href="#">海尔 LS55AL88G31</a></td>
    <td class="price_td3">110件</td>
    <td class="price_td4">¥3944</td>
  </tr>
  <tr>
    <td><img src="images/haier07.png"/></td>
    <td class="price_td2"><a href="#">海尔 LS55A51 黑色拉丝</a></td>
    <td class="price_td3">102件</td>
    <td class="price_td4">¥2784</td>
  </tr>
  <tr>
    <td><img src="images/haier15.png"/></td>
    <td class="price_td2"><a href="#">海尔 LE48AL88G31 智能电视， USB媒体播放</a></td>
    <td class="price_td3">50件</td>
    <td class="price_td4">¥2756</td>
  </tr>
  <tr>
    <td><img src="images/haier05.png"/></td>
    <td class="price_td2"><a href="#">海尔 LS55M31 4K超高清 ， 立体环绕声</a></td>
    <td class="price_td3">261件</td>
    <td class="price_td4">¥2640</td>
  </tr>
</table>
</div>

<div id="rank_price_erea2" class="div_all">
<table id="rank_price">
  <tr>
    <td style="color:#666">产品图片</td>
    <td class="price_td2" style="color:#666;">产品导航</td>
    <td class="price_td3" style="color:#666; font-size:16px">销量</td>
    <td class="price_td4" style="color:#666; font-size:16px">价格</td>
  </tr>
  <tr>
    <td><img src="images/haier13.jpg"/></td>
    <td class="price_td2"><a href="#">海尔 U55K5</a></td>
    <td class="price_td3">80件</td>
    <td class="price_td4">¥2625</td>
  </tr>
  <tr>
    <td><img src="images/haier20.png"/></td>
    <td class="price_td2"><a href="#">海尔 LS42H510N 4K画质， 内置wifi </a></td>
    <td class="price_td3">300件</td>
    <td class="price_td4">¥2280</td>
  </tr>
  <tr>
    <td><img src="images/haier16.png"/></td>
    <td class="price_td2"><a href="#">海尔 LE43AL88G31 无线wifi ， 支持4K片源</a></td>
    <td class="price_td3">40件</td>
    <td class="price_td4">¥2272</td>
  </tr>
  <tr>
    <td><img src="images/haier09.png"/></td>
    <td class="price_td2"><a href="#">海尔 LE48G520N 全高清， 网络WIFI</a></td>
    <td class="price_td3">159件</td>
    <td class="price_td4">¥2226</td>
  </tr>
  <tr>
    <td><img src="images/haier18.png"/></td>
    <td class="price_td2"><a href="#">海尔 LU40K5000 4K高清， WIFI</a></td>
    <td class="price_td3">300件</td>
    <td class="price_td4">¥2049</td>
  </tr>
</table>
</div>

<div id="rank_price_erea3" class="div_all">
<table id="rank_price">
  <tr>
    <td style="color:#666">产品图片</td>
    <td class="price_td2" style="color:#666;">产品导航</td>
    <td class="price_td3" style="color:#666; font-size:16px">销量</td>
    <td class="price_td4" style="color:#666; font-size:16px">价格</td>
  </tr>
  <tr>
    <td><img src="images/haier02.jpg"/></td>
    <td class="price_td2"><a href="haier_product1.html" target="_blank">海尔 LS49A51 64位芯片4K智能， H.265硬解码全程4K高清传输</a></td>
    <td class="price_td3">721件</td>
    <td class="price_td4">¥2034</td>
  </tr>
  <tr>
    <td><img src="images/haier06.png"/></td>
    <td class="price_td2"><a href="#">海尔 LE43A31 窄边框， 内置WIFI</a></td>
    <td class="price_td3">305件</td>
    <td class="price_td4">¥1712</td>
  </tr>
  <tr>
    <td><img src="images/haier04.png"/></td>
    <td class="price_td2"><a href="#">海尔 LE40A31 无线WIFI， 纤薄外观设计</a></td>
    <td class="price_td3">435件</td>
    <td class="price_td4">¥1487</td>
  </tr>
  <tr>
    <td><img src="images/haier12.jpg"/></td>
    <td class="price_td2"><a href="#">海尔 LE32AL88 宁静光技术， 激光探测切割工艺， 高密度电镀银技术</a></td>
    <td class="price_td3">430件</td>
    <td class="price_td4">¥1423</td>
  </tr>
  <tr>
    <td><img src="images/haier19.png"/></td>
    <td class="price_td2"><a href="#">海尔 LD32U3100 MHL智能连接， 窄边框 </a></td>
    <td class="price_td3">260件</td>
    <td class="price_td4">¥1127</td>
  </tr>
</table>
</div>

<div id="rank_price_erea4" class="div_all">
<table id="rank_price">
  <tr>
    <td style="color:#666">产品图片</td>
    <td class="price_td2" style="color:#666;">产品导航</td>
    <td class="price_td3" style="color:#666; font-size:16px">销量</td>
    <td class="price_td4" style="color:#666; font-size:16px">价格</td>
  </tr>
  <tr>
    <td><img src="images/haier08.png"/></td>
    <td class="price_td2"><a href="#">海尔 LE42B310N 亮度清晰， 纤薄</a></td>
    <td class="price_td3">251件</td>
    <td class="price_td4">¥1116</td>
  </tr>
  <tr>
    <td><img src="images/haier03.png"/></td>
    <td class="price_td2"><a href="#">>海尔 LE32A31 纤薄机身， 超高清</a></td>
    <td class="price_td3">1043件</td>
    <td class="price_td4">¥1070</td>
  </tr>
  <tr>
    <td><img src="images/haier11.png"/></td>
    <td class="price_td2"><a href="#">海尔 LE32B510X 窄边框， 纤薄机身</a></td>
    <td class="price_td3">260件</td>
    <td class="price_td4">¥979</td>
  </tr>
  <tr>
    <td><img src="images/haier14.png"/></td>
    <td class="price_td2"><a href="#">海尔 32EU3000 ADS硬屏， 支持多种格式解码， 四驱背光</a></td>
    <td class="price_td3">227件</td>
    <td class="price_td4">¥950</td>
  </tr>
  <tr>
    <td><img src="images/haier01.png"/></td>
    <td class="price_td2"><a href="#">  海尔 LE32B310N 纤美外观设计， 窄边框  </a></td>
    <td class="price_td3">2262件</td>
    <td class="price_td4">¥902</td>
  </tr>
</table>
</div>
<!--与价格相对应的四个第几页按钮-->
<div id="rank_price_ereas_show" class="btn_all">
	<input id="rank_price_up_show" type="button" value="上一页"/>
	<input class="btn_price_all" id="rank_price_erea1_show" type="button" value="第1页" style="background-color:#ededed"/>
    <input class="btn_price_all" id="rank_price_erea2_show" type="button" value="第2页"/>
    <input class="btn_price_all" id="rank_price_erea3_show" type="button" value="第3页"/>
    <input class="btn_price_all" id="rank_price_erea4_show" type="button" value="第4页"/>
    <input id="rank_price_down_show" type="button" value="下一页"/>
</div>

<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end-->

</body>
</html>
