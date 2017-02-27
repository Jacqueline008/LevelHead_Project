<!doctype html>
<?php session_start();?>
<html>
<head>
    <meta charset="utf-8">
    <title>ShoppingCar</title>
    <script src="javascript/jquery-2.2.3.min.js"></script>
    <!--header-->
    <link href="css/css_Header.css" rel="stylesheet"/>
    <script src="javascript/js_Header.js"></script>
    <!--ShoppingCar-->
    <link href="css/css_ShoppingCar.css" rel="stylesheet"/>
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


<!--此页面的功能就是显示该用户的shoppingcar表中的信息1.如果有则展示信息，2.如果没有就显示空购物车-->
<div id="ShoppingCarContainer">
<?php
//连接数据库
$dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
$username = "root";
$password = "";
$conn = new PDO($dsn, $username, $password);
$conn->exec("SET NAMES 'utf8'");
//查询该用户在shoppingcar表中是否有信息
$sqlSelect="select * from ShoppingCar where customerName=?";
$stmtSelect=$conn->prepare($sqlSelect);
$stmtSelect->execute(array($_SESSION['userName']));
$flag=0;
foreach($stmtSelect as $row){
    $flag=1;
}
//2.没有信息就显示空购物车
if($flag==0){
    echo "
<div id='emptyArea'>
        <div id='emptyAreaLeft'>
            <img src='images/emptyCar.jpg'>
        </div>
        <div id='emptyAreaRight'>
            <p>您的购物车还是空的 , 赶紧行动吧！您可以:</p>
            <p>去<a href='Home.php' target='_blank'>首页</a>看看</p>
        </div>
</div>";
}else{
    //展示表头
    echo "
<div id='showShoppingCarArea'>
        <table>
            <tr style='background-color: #ededed;'>
                <th>产品编号</th>
                <th>产品图片</th>
                <th>产品描述</th>
                <th>售价(/元)</th>
                <th>数量(/件)</th>
                <th>总计(/元)</th>
            </tr>";

    //展示表体
    //查询该用户在shoppingcar的信息　shoppingcar&product
    $sqlSelectJoin="select B.ID,B.Pic,B.Description,B.SellPrice,A.productCount from ShoppingCar A join Product B where A.productID=B.ID and A.customerName=?;";
    $stmtSelectJoin=$conn->prepare($sqlSelectJoin);
    $stmtSelectJoin->execute(array($_SESSION['userName']));
    foreach($stmtSelectJoin as $row){
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td><img src='".$row[1]."'/></td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";
        echo "<td>".$row[3]*$row[4]."</td>";
        echo "</tr>";
    }
    //展示表尾
    echo " 
        </table>
</div>";
}
//断开数据库连接
$conn=null;
?>
</div>


<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end-->

</body>
</html>
