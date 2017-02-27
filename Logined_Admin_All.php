<!doctype html>
<?php session_start();?>
<html>
<head>
    <meta charset="utf-8">
    <title>Logined_Admin_All</title>
    <script src="javascript/jquery-2.2.3.min.js"></script>
    <!--header-->
    <link href="css/css_Header.css" rel="stylesheet"/>
    <script src="javascript/js_Header.js"></script>
    <!--Logined_Admin_All-->
    <link href="css/css_Logined_Admin_All.css" rel="stylesheet"/>
    <script src="javascript/js_Logined_Admin_All.js"></script>
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

<!--如果用户上传图片的话，将用户上传的图片1.存入服务器的一个固定路径，2.将这个固定路径存入user表-->
<?php
if(isset($_FILES['userNewPic'])){
    try{
        //连接数据库
        $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
        $username = "root";
        $password = "";
        $conn = new PDO($dsn, $username, $password);
        $conn->exec("SET NAMES 'utf8'");
        //将用户上传的图片从临时路径存储到服务器的一个本地路径
        $picname=$_FILES['userNewPic']["name"];
        $picpath="images/".$picname;
        move_uploaded_file($_FILES['userNewPic']["tmp_name"],$picpath);
        //将该图片本地路径更新到user表中
        $sqlUpdate="update user set userPic=? where name=?";
        $stmtUpdate=$conn->prepare($sqlUpdate);
        $stmtUpdate->execute(array($picpath,$_SESSION['userName']));
        //关闭数据库连接
        $conn=null;
        //显示更改头像成功消息
        echo "<script>alert('您的头像更改成功!');</script>";
    }catch(Exception $e){
        echo "<script>alert('您的头像更改失败,请重试!');</script>";
    }

}
?>
<!--如果用户修改个人信息的话，那么将该信息更新到user表-->
<?php
if( isset($_POST['UserTel']) || isset($_POST['UserAddr']) ){
    try{
        //连接数据库
        $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
        $username = "root";
        $password = "";
        $conn = new PDO($dsn, $username, $password);
        $conn->exec("SET NAMES 'utf8'");
        //将手机和地址两个信息都更新到user表
        $sqlUpdate="update user set tel=?,address=? where name=?";
        $stmtUpdate=$conn->prepare($sqlUpdate);
        $stmtUpdate->execute(array($_POST['UserTel'],$_POST['UserAddr'],$_SESSION['userName']));
        //关闭数据库连接
        $conn=null;
        //显示更改个人信息修改成功消息
        echo "<script>alert('您的个人信息修改成功!');</script>";
    }catch(Exception $e){
        echo "<script>alert('您的个人信息修改失败!');</script>";
    }
}
?>

<!--Logined_Admin_All begin-->
<div id="logined_Admin_All_container">

    <!--admin 信息区域 左右两部分 begin-->
    <div id="AdminInfo">

       <!--admin 信息区域左侧-->
       <div id="AdminInfoLeft">
           <!--显示用户的头像-->
           <?php
           //连接数据库
           $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
           $username = "root";
           $password = "";
           $conn = new PDO($dsn, $username, $password);
           $conn->exec("SET NAMES 'utf8'");
           //查找用户的头像图片路径
           $sqlSelect="select userPic from user where name=?";
           $stmtSelect=$conn->prepare($sqlSelect);
           $stmtSelect->execute(array($_SESSION['userName']));
           foreach($stmtSelect as $row){
               $userPicPath=$row[0];
           }
           echo "<img id='userOldPic' src='".$userPicPath."'/>";
           //关闭数据库连接
           $conn=null;
           ?>
           <!--上传图片和保存图片区域-->
           <form id="AdminInfoForm" name="AdminInfoForm"
                 action="Logined_Admin_All.php" method="post" target="_self"
                 enctype="multipart/form-data">

               <div id="userNewPicContainer">上传图片<input type="file" name="userNewPic" id="userNewPic"></div>
               <input type="submit" name="AdminInfoFormSubmitButton" id="AdminInfoFormSubmitButton" value="保存头像">

           </form>
       </div>

        <!--admin 信息区域右侧-->
        <div id="AdminInfoRight">
            <form id="AdminInfoFormRight" name="AdminInfoFormightRight"
                  action="Logined_Admin_All.php" method="post" target="_self">
                <!--显示用户信息：用户名，绑定手机，收货地址-->
                <?php
                //连接数据库
                $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
                $username = "root";
                $password = "";
                $conn = new PDO($dsn, $username, $password);
                $conn->exec("SET NAMES 'utf8'");
                //查找用户名对应的绑定手机，收货地址
                $sqlSelectInfo="select tel,address from user where name=?";
                $stmtsqlSelectInfo=$conn->prepare($sqlSelectInfo);
                $stmtsqlSelectInfo->execute(array($_SESSION['userName']));
                foreach ($stmtsqlSelectInfo as $row){
                    $userTel=$row[0];
                    $userAddr=$row[1];
                }
                //将用户信息从user表中显示出来
                echo "<div id='title'><b style='font-size: 18px;'>您的基础信息:</b></div>";
                echo "<div id='theUserName'>
                    用 户 名 :<input name='UserName' id='UserName' type='text' value='".$_SESSION['userName']."' disabled/>
                    </div>";
                echo "<div id='theUserTel'>
                    绑定手机:<input name='UserTel' id='UserTel' type='text' value='".$userTel."'/>
                    </div>";
                echo "<div id='theUserAddr'>
                    <span>收货地址:</span><textarea rows='3' cols='10' name='UserAddr' id='UserAddr'>".$userAddr."</textarea>
                    </div>";
                echo "<div id='submit'>
                    <input type='submit' value='修改您的个人信息'>
                    </div>";
                //断开数据库连接
                $conn=null;
                ?>
            </form>
        </div>

    </div>
    <!--admin 信息区域 左右两部分 end-->

    <!--选择您所要管理的产品种类 提示栏-->
    <p id="select">选择您所要管理的产品种类:</p>

    <!--图片形式的导航 begin-->
    <div id="menu_pics">
        <a id="menu_a_tv" href="Logined_Admin.php" target="_blank">
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
    <!--图片形式的导航 end-->
</div>
<!--Logined_Admin_All end-->



<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end-->

</body>
</html>
