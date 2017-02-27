<!doctype html>
<?php session_start();?>
<html>
<head>
    <meta charset="utf-8">
    <title>upOrder</title>
    <script src="javascript/jquery-2.2.3.min.js"></script>
    <!--header-->
    <link href="css/css_Header.css" rel="stylesheet"/>
    <script src="javascript/js_Header.js"></script>
    <!--upOrder-->
    <link href="css/css_upOrder.css" rel="stylesheet"/>
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

<!--upOrder begin-->
<div id="upOrder_container">
    <!--展示该订单区域-->
    <div id="showOrderArea">
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
            <!--展示该订单信息-->
            <?php
            //连接数据库
            $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
            $username = "root";
            $password = "";
            $conn = new PDO($dsn, $username, $password);
            $conn->exec("SET NAMES 'utf8'");
            //检索出userorder表中的订单信息并展示
            $sqlSelect="select A.OrderID,B.ID,B.Pic,B.Description,B.SellPrice ,A.productCount 
from UserOrder A join Product B where A.productID=B.ID order by OrderID desc limit 0,1";
            $stmtSelect=$conn->prepare($sqlSelect);
            $stmtSelect->execute();
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
            //断开数据库连接
            $conn=null;
            ?>
        </table>
    </div>
    <!--展示该用户的地址区域-->
    <div id="showUserAddrArea">
        <!--展示该用户信息-->
        <?php
        //连接数据库
        $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
        $username = "root";
        $password = "";
        $conn = new PDO($dsn, $username, $password);
        $conn->exec("SET NAMES 'utf8'");
        //从user表中检索出该用户信息
        $sqlSelect="select address,tel from User where name=?";
        $stmtSelect=$conn->prepare($sqlSelect);
        $stmtSelect->execute(array($_SESSION['userName']));
        foreach ($stmtSelect as $row){
            echo "<p>寄送至: ".$row[0]."</p>";
            echo "<p>收货人: ".$_SESSION['userName']."</p>";
            echo "<p>联系方式: ".$row[1]."</p>";
        }
        //断开数据库连接
        $conn=null;
        ?>
    </div>
    <!--立即支付按钮-->
    <input id="buynow" type="button" value="立即支付">
</div>
<!--upOrder end-->

<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end-->

</body>
</html>
