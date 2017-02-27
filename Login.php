<!doctype html>
<?php session_start();?>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<script src="javascript/jquery-2.2.3.min.js"></script>
<!--header-->
<link href="css/css_Header.css" rel="stylesheet"/>
<script src="javascript/js_Header.js"></script>
<!--Login-->
<link href="css/css_Login.css" rel="stylesheet"/>
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


<!--登录容器 begin-->
	<div id="login_container">
    	<!--登录容器左侧内容-->
    	<div id="login_left">
        	<h1>
            Home electronics satisfy our wishes
       	    <br>
            and make our life more pleasant 
            </h1>
        </div>
        <!--登录容器右侧内容-->
        <div id="login_right">
        	<form id="logincontent" name="logincontent"
                  action="Login.php" method="post" target="_self">
            	<h2>账户登录</h2>

<?php
//当登录页面中用户名和密码赋值的时候才执行以下逻辑
   if(isset($_POST["loginuser"])&&isset($_POST["loginpwd"])) {

       try {
           /*连接数据库，执行查询User表语句，1.若未找到该用户，则显示该用户未注册。2.若密码不正确，则显示密码不正确
           若用户信息正确，3.若用户是普通用户显示普通用户,若用户是管理员则显示管理员
           4.跳转到首页
           */
           //连接数据库
           $dsn = "mysql:host=localhost:3306;dbname=LevelHeadDB";
           $username = "root";
           $password = "";
           $conn = new PDO($dsn, $username, $password);
           $conn->exec("SET NAMES 'utf8'");
           //查询User表,1.未找到该用户则显示该用户未注册
           $sqlName = "select * from User where name=?";
           $stmtName = $conn->prepare($sqlName);
           $stmtName->execute(array($_POST["loginuser"]));
           $flag=0;
           foreach ($stmtName as $row) {
               $flag=1;
           }
           if($flag==0){
               throw new Exception("抱歉:该用户名还未注册!");
           }
           //查询User表，2.若该用户的密码错误则显示密码错误
           $sqlPwd="select pwd from User where name=?";
           $stmtPwd=$conn->prepare($sqlPwd);
           $stmtPwd->execute(array($_POST["loginuser"]));
           foreach ($stmtPwd as $row) {
               if($_POST["loginpwd"]!=$row["pwd"]){
                   throw new Exception("抱歉:密码不正确!");
               }
           }
           /*若用户信息正确，3.若用户是普通用户显示普通用户,若用户是管理员则显示管理员
           并且设置两个会话变量:$_SESSION["userType"] $_SESSION["userName"] */
           $sqlType="select name from User where name=?";
           $stmtType=$conn->prepare($sqlType);
           $stmtType->execute(array($_POST["loginuser"]));
           foreach ($stmtType as $row) {
               if(preg_match("/^\\*/",$row["name"])){
                   $_SESSION["userType"]="admin";
               }else{
                   $_SESSION["userType"]="normal";
               }
               $_SESSION["userName"]=$_POST["loginuser"];
           }
           //关闭数据库连接
           $conn=null;
           //4.直接跳转到首页
           header("location:Home.php");

       }catch(Exception $e){
           echo "<p id='error_message'>".$e->getMessage()."</p>";
       }

   }

?>
                <div id="login_user">
                <input id="loginuser" name="loginuser" type="text" 
                placeholder=" 请输入您的用户名" required/>
                </div>
                <div id="login_pwd">
                <input id="loginpwd" name="loginpwd" type="password" 
                placeholder=" 请输入您的密码" required/>
                </div>
                <a id="registernow" href="Register.php" target="_blank">未注册？去注册</a>
                <input id="loginsubmit" type="submit" value="登录"/>
            </form>
        </div>
    </div>
<!--登录容器 end-->

<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end-->

</body>
</html>
