<!doctype html>
<?php session_start();?>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>
<script src="javascript/jquery-2.2.3.min.js"></script>
<!--header-->
<link href="css/css_Header.css" rel="stylesheet"/>
<script src="javascript/js_Header.js"></script>
<!--Register-->
<link href="css/css_Register.css" rel="stylesheet"/>
<script src="javascript/js_Register.js"></script>
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

<!--register container-->
	<div id="register_container">
    	<form id="registercontent" name="registercontent" onSubmit="return validate();"
        action="RegisterAfter.php" method="post" target="_blank">
        <h1>欢迎成为LevelHead用户</h1>
        <!--用户名-->
        <div id="register_user">
        用户名
        <input id="registeruser" name="registeruser" type="text" 
        placeholder="请输入您的用户名" required
        onblur="validateName()"/>
        </div>
        <!--用户名不符合规范时显示的div-->
        <div id="wrong_name"></div>
        <!--密码-->
        <div id="register_pwd">
        密码
        <input id="registerpwd" name="registerpwd" 
        type="password" placeholder="请输入您的密码" required/>
        </div>
        <!--确认密码-->
        <div id="register_pwdagain">
        确认密码
        <input id="registerpwdagain" name="registerpwdagain" 
        type="password" placeholder="请再次确认您的密码" required
        onBlur="validatePwd()"/>
        </div>
        <!--两次密码不一致时显示的div-->
        <div id="wrong_pwd"></div>
        <!--电话号码-->
        <div id="register_tel">
        中国 +86
        <input id="registertel" name="registertel" 
        type="text" placeholder="建议使用常用手机" required 
        onBlur="validateTel()"/>
        </div>
        <!--电话号码格式不正确时显示的div-->
        <div id="wrong_phone"></div>
        <!--用户协议-->
        <div id="register_agree">
        <input type="checkbox" id="registeragree" 
        name="registeragree" value="agree" checked/>
        我已阅读并同意<a href="Rules.php" target="_blank">《LevelHead用户注册协议》</a>
        </div>
        <!--注册-->
        <input id="registersubmit" type="submit" value="立即注册"/>
        </form>
    </div>


<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end-->

</body>
</html>
