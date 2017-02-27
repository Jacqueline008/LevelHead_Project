<!doctype html>
<?php session_start();?>
<html>
<head>
<meta charset="utf-8">
<title>RegisterAfter</title>
<script src="javascript/jquery-2.2.3.min.js"></script>
<!--header-->
<link href="css/css_Header.css" rel="stylesheet"/>
<script src="javascript/js_Header.js"></script>
<!--RegisterAfter-->
<link href="css/css_RegisterAfter.css" rel="stylesheet"/>
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

<!--此块php脚本验证用户提交的用户名是否超过20个字符，用户两次输入的密码是否一致，
用户手机号格式是否正确，根据结果在页面上显示不同的信息-->
<?php
//验证用户名中是否超过20个字符
function validateUserName(){
    $username=$_POST["registeruser"];
    if(strlen($username)<=20){
        return true;
    }else{
        return false;
    }
}
//验证用户两次输入的密码是否一致
function validateUserPwd(){
    $userpwd=$_POST["registerpwd"];
    $userpwdagain=$_POST["registerpwdagain"];
    if($userpwd==$userpwdagain){
        return true;
    }else{
        return false;
    }
}
//当用户输入手机号时，验证用户输入的手机号的格式是否正确
function validateUserTel(){
    $usertelnumber=$_POST["registertel"];
    if(preg_match("/^1[3578][0-9]{9}$/",$usertelnumber)){
        return true;
    }else{
        return false;
    }
}

//3个函数验证成功以及用户名之前未注册以及录入用户数据到数据库成功后显示注册成功页面,否则显示失败页面
function registerAfterShow()
{
    //3个函数验证成功以及用户名之前未注册以及录入用户数据到数据库成功后显示注册成功页面
    try{
        //以上3个函数同时返回true时，显示注册成功，否则显示注册失败
        if(!validateUserName()){
            throw new Exception("用户名超过了20个字符");
        }
        if(!validateUserPwd()){
            throw new Exception("两次密码不一致");
        }
        if(!validateUserTel()){
            throw new Exception("手机格式错误");
        }


        //连接数据库，执行插入User表语句，关闭数据库连接
        //连接数据库
        $dsn="mysql:host=localhost:3306;dbname=LevelHeadDB";
        $username="root";
        $password="";
        $conn=new PDO($dsn,$username,$password);
        $conn->exec("SET NAMES 'utf8'");
        //验证用户名是否已经注册
        $sqlSelect="select * from User where name=?";
        $stmt=$conn->prepare($sqlSelect);
        $stmt->execute(array($_POST["registeruser"]));
        foreach($stmt as $row){
            throw new Exception("该用户名已经注册");
        }
        //执行插入User表语句
        $username=$_POST["registeruser"];
        $userpwd=$_POST["registerpwd"];
        $usertel=$_POST["registertel"];
        $sqlInsert="insert into User(name,pwd,tel) values(?,?,?)";
        $stmt=$conn->prepare($sqlInsert);
        if(!($stmt->execute( array($username,$userpwd,$usertel) ) )){
            throw new Exception("用户信息录入失败");
        }
        //关闭数据库连接
        $conn=null;


//3个函数验证成功以及用户名之前未注册以及录入用户数据到数据库成功后显示注册成功页面
echo "
<!--注册成功 begin-->
<div id='registerAfterSuccess_container'>
    <!-- 注册成功上部分 -->
    <div id='success_up'>
        <div id='pic'></div>
        <div id='text'>
";
echo "
        <p id='pUP'>注册成功! " . $_POST["registeruser"] . " 欢迎加入LevelHead</p>
";
echo "
        <p id='pDOWN'>我们已为您准备两份新人好礼^_^ 祝您购物愉快！<a href='Home.php' target='_blank'>去首页</a></p>
        </div>
    </div>
    <!--注册成功下部分-->
    <div id='success_down'>
        <div id='picleft'></div>
        <div id='picright'></div>
    </div>
</div>
<!--注册成功 end-->
";

    }catch(Exception $e){

//以上3个函数之一验证失败或者该用户名已经注册或者往数据库的User表插入数据失败显示注册失败
echo "
<!--注册失败 begin-->
<div id='registerAfterFail_container'>
    <div id='fail'>
        <div id='fail_left'></div>
        <div id='fail_right'>
             <p id='fail_right_up'>抱歉,注册失败!</p>
";
echo "
             <p id='fail_right_down'><span style='color:black;'>失败原因:</span>".$e->getMessage()."<a href='Register.php' target='_blank'>重新注册</a></p>
";
echo "
        </div>
    </div>
</div>
<!--注册失败 end-->
";

    }
}
registerAfterShow();
?>



<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end-->

</body>
</html>
