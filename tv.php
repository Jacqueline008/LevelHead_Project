<!DOCTYPE html>
<?php session_start();?>
<head>
<meta charset="utf-8" />
<title>tv</title>
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
<!--tv-->
<link href="css/css_tv.css" rel="stylesheet"/>
<script src="javascript/js_tv.js"></script>
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
            <img src="images/slider_tv1.jpg" width="940px" height="450px" />
            </a> 
            <a href="#">
            <img src="images/slider_tv3.jpg" width="940px" height="450px"data-caption="#htmlCaption" />
            </a>
            <a href="#">            
            <img src="images/slider_tv2.jpg" width="940px" height="450px"/> 
            </a>
       </div>
  </div> 
<!--slider_end-->

<!--品牌列表-->
	<div id="menu_brands">
    	<div id="brands_container">
        <h1>热门品牌</h1>
        <table>
        	<tr>
            	<td id="sumsung"><a href="#"><div></div></a></td>
                <td id="sony"><a href="#"><div></div></a></td>
                <td id="haier"><a href="tv_haier.php" target="_blank"><div></div></a></td>
                <td id="haixin"><a href="#"><div></div></a></td>
                <td id="philips"><a href="#"><div></div></a></td>
            </tr>
            <tr>
                <td id="kangjia"><a href="#"><div></div></a></td>
            	<td id="chuangwei"><a href="#"><div></div></a></td>
                <td id="tcl"><a href="#"><div></div></a></td>
                <td id="lg"><a href="#"><div></div></a></td>
                <td id="changhong"><a href="#"><div></div></a></td>
            </tr>
        </table>
        </div>
    </div>

<!--用户搜索感兴趣的产品区域-->
<div id="showLikeProduct">
<form name="showLikeProductForm" id="showLikeProductForm"
    action="tv.php" method="post" target="_self">
    <input name="userLikeProductInfo" id="userLikeProductInfo" type="text" required/>
    <input id="userLikeProductSubmit" type="submit" value="LevelHead一下">
</form>
</div>

<!--可能显示的区域 如果用户在搜索栏中输入了产品信息，那么就显示该信息 begin-->
<?php
if(isset($_POST['userLikeProductInfo'])){
    //连接数据库
    $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
    $username = "root";
    $password = "";
    $conn = new PDO($dsn, $username, $password);
    $conn->exec("SET NAMES 'utf8'");
    //从product表中查询该产品
    $sqlSelectLike="select ID,Pic,Description,SaleAccount,SellPrice,RemainAccount from Product where 
CONCAT(ID,Description,SaleAccount,SellPrice,RemainAccount) like'%".$_POST['userLikeProductInfo']."%'";
    $stmtSelectLike=$conn->prepare($sqlSelectLike);
    $stmtSelectLike->execute();
    //判断有无产品
    $flag=0;
    foreach($stmtSelectLike as $row){
        $flag=1;
    }

    //如果有搜索出的产品就显示该产品,如果没有显示暂无该产品信息
    if($flag==1){
        //表头
        echo "
<div id='showLikeProductArea'>
    <table>
        <tr style='background-color: #ededed;'>
            <th>产品编号</th>
            <th>产品图片</th>
            <th>产品描述</th>
            <th>销量(/件)</th>
            <th>售价(/元)</th>
            <th>库存(/件)</th>
        </tr>";
        //再次搜索一遍
        $sqlSelectLike="select ID,Pic,Description,SaleAccount,SellPrice,RemainAccount from Product where 
CONCAT(ID,Description,SaleAccount,SellPrice,RemainAccount) like'%".$_POST['userLikeProductInfo']."%'";
        $stmtSelectLike=$conn->prepare($sqlSelectLike);
        $stmtSelectLike->execute();
        //展示搜索出的产品信息
        foreach($stmtSelectLike as $row){
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td><img src='".$row[1]."'/></td>";
            echo "<td>".$row[2]."</td>";
            echo "<td>".$row[3]."</td>";
            echo "<td>".$row[4]."</td>";
            echo "<td>".$row[5]."</td>";
            echo "</tr>";
        }
        //表尾
        echo "
    </table>
</div>";
    }else{
        //展示暂无产品信息
        echo "<P id='noProductFound'>抱歉,暂无您搜索的产品信息!</P>";
    }
    //关闭数据库连接
    $conn=null;
}
?>
<!--可能显示的区域 如果用户在搜索栏中输入了产品信息，那么就显示该信息 end-->

<!--品牌列表下的所有商品展示 begin-->
<!-- 显示所有产品 begin-->
<div id="showAllProduct">
  <table>
    <tr style="background-color: #ededed;">
      <th>产品编号</th>
      <th>产品图片</th>
      <th>产品描述</th>
      <th>销量(/件)</th>
      <th>售价(/元)</th>
      <th>库存(/件)</th>
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
      $sqlSelect="select ID,Pic,Description,SaleAccount,SellPrice,RemainAccount from Product limit ?,?";
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
        $sqlSelect="select ID,Pic,Description,SaleAccount,SellPrice,RemainAccount from Product limit ?,?";
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
          $sqlSelect = "select ID,Pic,Description,SaleAccount,SellPrice,RemainAccount from Product limit ?,?";
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
          $sqlSelect = "select ID,Pic,Description,SaleAccount,SellPrice,RemainAccount from Product limit ?,?";
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
      echo "</tr>";
    }
    //关闭数据库连接
    $conn=null;
    ?>
  </table>
</div>
<!-- 显示所有产品 end -->

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
    window.location="tv.php?currentrow="+currentrow;
  }
</script>
<script>
  function toNext(){
    var currentrow="<?php echo $currentrow; ?>";
    window.location="tv.php?currentrow="+currentrow;
  }
</script>
<!--两个按钮控制上一页，下一页 end-->
<!--品牌列表下的所有商品展示 end-->


<!--整个网页的锚点区-->
<div id="toPosition">
    <a href="#featured">最新产品</a>
    <a href="#menu_brands">热门品牌</a>
    <a href="#showLikeProduct">搜索一下</a>
    <a href="#showAllProduct">全部商品</a>
</div>

<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end-->

</body>
</html>