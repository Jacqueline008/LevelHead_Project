<!doctype html>
<?php session_start();?>
<?php
header("Content-Type:text/html;charset=utf-8");
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Logined_Admin</title>
    <script src="javascript/jquery-2.2.3.min.js"></script>
    <!--header-->
    <link href="css/css_Header.css" rel="stylesheet"/>
    <script src="javascript/js_Header.js"></script>
    <!--Logined_Admin-->
    <link href="css/css_Logined_Admin.css" rel="stylesheet"/>
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

<!--Logined_Admin  begin-->
<div id="logined_admin_container">

    <!--录入产品区域 begin-->
    <div id="inputProduct">
        <form id="inputProductForm" name="inputProductForm"
        action="Logined_Admin.php" method="post" target="_self"
        enctype="multipart/form-data">
        <table>
            <tr style="height:35px">
                <td>产品编号</td>
                <td>产品图片</td>
                <td>产品描述</td>
                <td>销量( /件)</td>
                <td>售价( /元)</td>
                <td>成本( /元)</td>
                <td>库存( /件)</td>
                <td>收益( /元)</td>
            </tr>
            <tr>
                <td><input type="text" name="inputProductID" id="inputProductID" required></td>
                <td><input type="file" name="inputProductPic" id="inputProductPic" required></td>
                <td><input type="text" name="inputProductDesc" id="inputProductDesc" required></td>
                <td><input type="text" name="inputProductSaleAccount" id="inputProductSaleAccount" required></td>
                <td><input type="text" name="inputProductSellPrice" id="inputProductSellPrice" required></td>
                <td><input type="text" name="inputProductCostPrice" id="inputProductCostPrice" required></td>
                <td><input type="text" name="inputProductRemainAccount" id="inputProductRemainAccount" required></td>
                <td><input type="text" name="inputProductEarining" id="inputProductEarining" required></td>
            </tr>
            <tr>
                <td colspan="7" style="text-align: right"><input type="reset"  name="inputProductReset" id="inputProductReset" value="重新填写"></td>
                <td><input type="submit" name="inputProductSubmit" id="inputProductSubmit" value="录入产品"></td>
            </tr>
        </table>
        </form>
    </div>
    <!--录入产品区域 end-->

    <!--如果admin在录入产品区域中表单中填写了信息，那么将信息录入product表-->
    <?php
    if(isset($_POST["inputProductID"])&&isset($_FILES["inputProductPic"])
        &&isset($_POST["inputProductDesc"])&&isset($_POST["inputProductSaleAccount"])
        &&isset($_POST["inputProductSellPrice"])&&isset($_POST["inputProductCostPrice"])
        &&isset($_POST["inputProductRemainAccount"])&&isset($_POST["inputProductEarining"]))
    {
        try{
            //连接数据库
            $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
            $username = "root";
            $password = "";
            $conn = new PDO($dsn, $username, $password);
            $conn->exec("SET NAMES 'utf8'");
            //将用户上传的图片从临时路径存储到服务器的一个本地路径
            $picname=$_FILES["inputProductPic"]["name"];
            $picpath="images/".$picname;
            move_uploaded_file($_FILES["inputProductPic"]["tmp_name"],$picpath);
            //将从录入产品表单中检索的数据插入product表中
            $sqlInsert="insert into Product values(?,?,?,?,?,?,?,?)";
            $stmtInsert=$conn->prepare($sqlInsert);
            $stmtInsert->execute(array($_POST["inputProductID"],$picpath,
                mb_convert_encoding($_POST["inputProductDesc"],'utf-8'),$_POST["inputProductSaleAccount"],
                $_POST["inputProductSellPrice"],$_POST["inputProductCostPrice"],
                $_POST["inputProductRemainAccount"],$_POST["inputProductEarining"]));
            //关闭数据库连接
            $conn=null;
            //如果产品录入成功，那么显示产品录入成功
            echo "<script>alert('产品录入成功!');</script>";
        }catch(Exception $e){
            //如果产品录入成功，那么显示产品录入成功
            echo "<script>alert('产品录入失败!');</script>";
        }
    }
    ?>


    <!-- 显示admin所录入的所有产品 begin-->
    <div id="showAllProduct">
        <table>
            <tr style="background-color: #ededed;">
                <th>产品编号</th>
                <th>产品图片</th>
                <th>产品描述</th>
                <th>销量(/件)</th>
                <th>售价(/元)</th>
                <th>成本(/元)</th>
                <th>库存(/件)</th>
                <th>收益(/元)</th>
            </tr>

            <!-- 从levelheaddb数据库中搜索数据，然后显示在页面上-->
            <?php
            //连接数据库
            $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
            $username = "root";
            $password = "";
            $conn = new PDO($dsn, $username, $password);
            $conn->exec("SET NAMES 'utf8'");
            //统计Product表中的行数
            $sqlSelectCount="select count(*) from Product";
            $stmtSelectCount=$conn->prepare($sqlSelectCount);
            $stmtSelectCount->execute();
            foreach($stmtSelectCount as $row){
                $sumrow=$row[0];
            }
            //一次输出10行
            if(!isset($_GET['currentrow'])){
                //在最开始的时候搜索头10条数据
                $sqlSelect="select * from Product limit ?,?";
                $stmtSelect=$conn->prepare($sqlSelect);
                $stmtSelect->bindValue(1, 0, PDO::PARAM_INT);
                $stmtSelect->bindValue(2, 10, PDO::PARAM_INT);
                $stmtSelect->execute();
                //设置当前行
                $currentrow=10;
                $flag=0;
            }else{
                if($_GET['currentrow']<=0){
                    //在最开始的时候搜索头10条数据
                    $sqlSelect="select * from Product limit ?,?";
                    $stmtSelect=$conn->prepare($sqlSelect);
                    $stmtSelect->bindValue(1, 0, PDO::PARAM_INT);
                    $stmtSelect->bindValue(2, 10, PDO::PARAM_INT);
                    $stmtSelect->execute();
                    //设置当前行
                    $currentrow=10;
                    $flag=0;
                }else {
                    if (($_GET['currentrow'] + 10) >= $sumrow) {
                        $addrow = $sumrow - $_GET['currentrow'] ;
                        $sqlSelect = "select * from Product limit ?,?";
                        $stmtSelect = $conn->prepare($sqlSelect);
                        $param1 = (int)$_GET['currentrow'];
                        $param2 = (int)$addrow;
                        $stmtSelect->bindValue(1, $param1, PDO::PARAM_INT);
                        $stmtSelect->bindValue(2, $param2, PDO::PARAM_INT);
                        $stmtSelect->execute();
                        //设置当前行
                        $currentrow = $_GET['currentrow'];
                        $flag=1;
                    } else {
                        $sqlSelect = "select * from Product limit ?,?";
                        $stmtSelect = $conn->prepare($sqlSelect);
                        $param1 = (int)$_GET['currentrow'];
                        $stmtSelect->bindValue(1, $param1, PDO::PARAM_INT);
                        $stmtSelect->bindValue(2, 10, PDO::PARAM_INT);
                        $stmtSelect->execute();
                        //设置当前行
                        $currentrow = $_GET['currentrow'] + 10;
                        $flag=0;
                    }
                }
            }
            //访问搜索出的?条数据
            foreach($stmtSelect as $row){
                echo "<tr>";
                echo "<td>".$row[0]."</td>";
                echo "<td><img src='".$row[1]."'/></td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
                echo "<td>".$row[4]."</td>";
                echo "<td>".$row[5]."</td>";
                echo "<td>".$row[6]."</td>";
                echo "<td>".$row[7]."</td>";
                echo "</tr>";
            }
            //关闭数据库连接
            $conn=null;
            ?>
        </table>
    </div>
    <!-- 显示admin所录入的所有产品 end -->


    <!--两个按钮控制上一页，下一页 begin-->
    <div id="button_container">
        <input name="toLast" id="toLast" type="button" value="上一页" onclick="toLast()"/>
        <input name="toNext" id="toNext" type="button" value="下一页" onclick="toNext()"/>
    </div>
    <script>
        function toLast(){
            var flag="<?php echo $flag; ?>";
            if(flag==1){
                var currentrow = "<?php echo $currentrow; ?>";
                currentrow = currentrow - 10;
            }else{
                var currentrow = "<?php echo $currentrow; ?>";
                currentrow = currentrow - 20;
            }
            window.location="Logined_Admin.php?currentrow="+currentrow;
        }
    </script>
    <script>
        function toNext(){
            var currentrow="<?php echo $currentrow; ?>";
            window.location="Logined_Admin.php?currentrow="+currentrow;
        }
    </script>
    <!--两个按钮控制上一页，下一页 end-->



</div>
<!--Logined_Admin  end-->




<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end-->

</body>
</html>
