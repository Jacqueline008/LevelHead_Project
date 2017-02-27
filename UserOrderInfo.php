<!doctype html>
<?php session_start();?>
<html>
<head>
    <meta charset="utf-8">
    <title>UserOrderInfo</title>
    <script src="javascript/jquery-2.2.3.min.js"></script>
    <!--header-->
    <link href="css/css_Header.css" rel="stylesheet"/>
    <script src="javascript/js_Header.js"></script>
    <!--UserOrderInfo-->
    <link href="css/css_UserOrderInfo.css" rel="stylesheet"/>
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


<!--UserOrderInfo begin-->
<div id="userOrderInfo_container">
        <table>
            <tr style='background-color: #ededed;'>
                <th>订单编号</th>
                <th>产品编号</th>
                <th>产品图片</th>
                <th>产品描述</th>
                <th>售价(/元)</th>
                <th>数量(/件)</th>
                <th>总计(/元)</th>
            </tr>
            <!--该区域的功能就是显示该用户的订单记录-->
            <?php
            //连接数据库
            $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
            $username = "root";
            $password = "";
            $conn = new PDO($dsn, $username, $password);
            $conn->exec("SET NAMES 'utf8'");
            //从userorder表和product表中调出该用户的订单记录
            $sqlSelect="select A.OrderID,B.ID,B.Pic,B.Description,B.SellPrice ,A.productCount 
from UserOrder A join Product B where A.productID=B.ID and A.customerName=?";
            $stmtSelect=$conn->prepare($sqlSelect);
            $stmtSelect->execute(array($_SESSION['userName']));
            foreach($stmtSelect as $row){
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td>".$row[1]."</td>";
                echo "<td><img src='".$row[2]."'></td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "<td>".$row[4]*$row[5]."</td>";
                echo "</tr>";
            }
            //关闭数据库连接
            $conn=null;
            ?>
        </table>
</div>
<!--UserOrderInfo end-->


<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end-->

</body>
</html>
