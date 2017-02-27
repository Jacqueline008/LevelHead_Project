<!doctype html>
<?php session_start();?>
<html>
<head>
<meta charset="utf-8">
<title>haier_product1</title>
<script src="javascript/jquery-2.2.3.min.js"></script>
<!--header-->
<link href="css/css_Header.css" rel="stylesheet"/>
<script src="javascript/js_Header.js"></script>
<!--colorbox-->
<script src="colorbox/jquery-2.2.3.min.js"></script>
<script src="colorbox/jquery.colorbox-min.js"></script>
<link href="colorbox/colorbox.css" rel="stylesheet"/>
<!--haier_product1-->
<link href="css/css_haier_product1.css" rel="stylesheet"/>
<script src="javascript/js_haier_product1.js"></script>
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

<!--加入购物车php逻辑部分 begin-->
<?php
if(isset($_POST['addcarCount'])){
    //如果用户点击的是加入购物车按钮
    if(isset($_POST["submit1"])){
        if(isset($_SESSION['userName'])){
            //连接数据库
            $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
            $username = "root";
            $password = "";
            $conn = new PDO($dsn, $username, $password);
            $conn->exec("SET NAMES 'utf8'");
            //查看顾客之前有没有加入过该产品，1.如果加入过该产品就将shoppingCar表中的产品数量加上这次购买的数量2.如果没有加入过就加入一行到shoppingcar表中
            $sqlSelect="select * from ShoppingCar where customerName=? and productID=?";
            $stmtSelect=$conn->prepare($sqlSelect);
            $stmtSelect->execute(array($_SESSION['userName'],'014'));
            $flag=0;
            foreach($stmtSelect as $row){
                $flag=1;
            }
            if($flag==0){
                //将顾客名字和产品ID和购买数量存入ShoppingCar表当中
                $sqlInsert="insert into ShoppingCar values(?,?,?)";
                $stmtInsert=$conn->prepare($sqlInsert);
                $stmtInsert->execute(array($_SESSION['userName'],'014',$_POST['addcarCount']));
                //显示加入购物车成功消息
                echo "<script>alert('加入购物车成功!');</script>";
            }else{
                //先获取之前该顾客加入该产品的数量
                $sqlSelectCount="select productCount from ShoppingCar where customerName=? and productID=?";
                $stmtSelectCount=$conn->prepare($sqlSelectCount);
                $stmtSelectCount->execute(array($_SESSION['userName'],'014'));
                foreach ($stmtSelectCount as $row){
                    $oldcount=$row[0];
                }
                //将shoppingcar表中与该顾客和产品id对应的那一行的数量更新
                $sqlUpdate="update ShoppingCar set productCount=? where customerName=? and productID=?";
                $stmtUpdate=$conn->prepare($sqlUpdate);
                $newcount=$oldcount+$_POST['addcarCount'];
                $stmtUpdate->execute(array($newcount,$_SESSION['userName'],'014'));
                //显示加入购物车成功消息
                echo "<script>alert('加入购物车成功!');</script>";
            }
            //断开数据库连接
            $conn=null;
        }else{
            echo "<script>alert('您还未登录!');</script>";
        }
    }
    //如果用户点击的是立即购买按钮
    if(isset($_POST["submit2"])){
        if(isset($_SESSION['userName'])){
            //连接数据库
            $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
            $username = "root";
            $password = "";
            $conn = new PDO($dsn, $username, $password);
            $conn->exec("SET NAMES 'utf8'");
            //1.如果该产品的库存为0件，那么显示库存不足2.如果还有库存那么在product表中将该产品减去相应数量，然后在userorder表中加入一条信息
            $sqlSelectRemainAccount="select RemainAccount from Product where ID=?";
            $stmtSelectRemainAccount=$conn->prepare($sqlSelectRemainAccount);
            $stmtSelectRemainAccount->execute(array('014'));
            $flag=0;
            foreach($stmtSelectRemainAccount as $row){
                if($row[0]==0){
                    $flag=1;
                }
            }
            //$flag=1表示库存不足,那么显示库存不足消息
            if($flag==1){
                //断开数据库连接
                $conn=null;
                echo "<script>alert('抱歉,该产品库存不足!');</script>";
            }else{
                //$flag=0表示库存中还有该产品，可以购买
                //将product表中相应产品的库存减去相应数量
                $sqlUpdate="update Product set RemainAccount=RemainAccount-? where ID=?";
                $stmtUpdate=$conn->prepare($sqlUpdate);
                $stmtUpdate->execute(array($_POST['addcarCount'],'014'));
                //将顾客名和产品ID和购买数量加入userorder表中
                $sqlInsert="insert into UserOrder(customerName,productID,productCount) values (?,?,?);";
                $stmtInsert=$conn->prepare($sqlInsert);
                $stmtInsert->execute(array($_SESSION['userName'],'014',$_POST['addcarCount']));
                //断开数据库连接
                $conn=null;
                //直接前往uporder.php页面
                header("location:upOrder.php");
            }

        }else{
            echo "<script>alert('您还未登录!');</script>";
        }
    }
}
?>
<!--加入购物车php逻辑部分 end-->

<!--商品信息开始-->
	<div id="product_info_container">
<!--商品信息容器的左侧的竖着的照片列表-->
    	<div id="product_info_left">
        <a id="pic1" rel="g1" href="images/haier_product1_pic1_big.jpg">
        	<img src="images/haier_product1_pic1_big.jpg"/>
            <div></div>
        </a>
        <a id="pic2" rel="g1" href="images/haier_product1_pic2_big.jpg">
        	<img src="images/haier_product1_pic2_big.jpg"/>
            <div></div>
        </a>
        <a id="pic3" rel="g1" href="images/haier_product1_pic3_big.jpg">
       	 	<img src="images/haier_product1_pic3_big.jpg"/>
            <div></div>
        </a>
        <a id="pic4" rel="g1" href="images/haier_product1_pic4_big.jpg">
       		<img src="images/haier_product1_pic4_big.jpg"/>
            <div></div>
        </a>
        <a id="pic5" rel="g1" href="images/haier_product1_pic5_big.jpg">
        	<img src="images/haier_product1_pic5_big.jpg"/>
            <div></div>
        </a>
        </div>
<!--商品信息容器的中间的照片展示区域*-->
        <div id="product_info_mid">
        <img src="images/haier_product1_pic1_big.jpg"/>
        </div>
<!--商品信息容器的右侧的文字信息列表-->
        <div id="product_info_right">
        <!--右侧文字信息列表的商品名称-->
        <div id="product_info_right_pid">
        <h3> Haier/海尔 LS49A51 49英寸4K高清智能网络液晶平板电视LED48 50</h3>
        </div>
        <!--右侧文字信息列表的商品价格-->
        <div id="product_info_right_price">
        <del>￥4328.00</del>
        <br>
        <span>￥2025.00</span>
        </div>
        <!--综合排行，月销量，人气-->
        <div id="product_info_right_comment">
        <div id="zonghe">
        综合排行 <span>1500</span>
        </div>
        <div id="monthcount">
        月销量 <span>588</span>
        </div>
        <div id="popular">
        人气 <span>5000</span>
        </div>
        </div>
        <!--加入购物车-->
        <div id="product_info_right_addcar">
            <form id="addcar" name="addcar"
            action="haier_product1.php" target="_self" method="post">
            数量：<input id="addcarCount" name="addcarCount" type="text" value="1" required/>
            <!--加入购物车-->
            <input name="submit1" type="submit" value="加入购物车"/>
            <!--购买-->
            <input name="submit2" id="product_info_right_buynow" type="submit" value="立即购买"/>
            </form>
        </div>
        </div>
    </div>
<!--商品信息结束-->

<!--商品详情，规格参数，累计评价展示栏-->
	<div id="product_mixinfo">
    <input id="product_detail" type="button" value="商品详情"/>
    <input id="product_standard" type="button" value="规格参数"/>
    <input id="product_totalcomment" type="button" value="累计评价"/>
    </div>
<!--商品详情区域-->
	<div id="detail">
    <img src="images/haier_product1_detail1.jpg"/>
    <img src="images/haier_product1_detail2.jpg"/>
    <img src="images/haier_product1_detail3.jpg"/>
    <img src="images/haier_product1_detail4.jpg"/>
    <img src="images/haier_product1_detail5.jpg"/>
    <img src="images/haier_product1_detail6.jpg"/>
    <img src="images/haier_product1_detail7.jpg"/>
    <img src="images/haier_product1_detail8.jpg"/>
    <img src="images/haier_product1_detail9.jpg"/>
    <img src="images/haier_product1_detail10.jpg"/>
    <img src="images/haier_product1_detail11.jpg"/>
    </div>
<!--规格参数区域-->
	<div id="standard">
    <img src="images/haier_standard.PNG"/>
    <img src="images/haier_standard2.PNG"/>
    <img src="images/haier_standard3.PNG"/>
    </div>
<!--累计评价区域-->
	<div id="totalcomment">
    <img src="images/haier_product_comment1.PNG"/>
    <img src="images/haier_product1_comment2.PNG"/>
    </div>

<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end-->

</body>
</html>
