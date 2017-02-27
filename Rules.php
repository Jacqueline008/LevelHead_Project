<!doctype html>
<?php session_start();?>
<html>
<head>
<meta charset="utf-8">
<title>Rules</title>
<script src="javascript/jquery-2.2.3.min.js"></script>
<!--header-->
<link href="css/css_Header.css" rel="stylesheet"/>
<script src="javascript/js_Header.js"></script>
<!--Rules-->
<link href="css/css_Rules.css" rel="stylesheet"/>
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


<!--协议-->
<?php
$res_rules=fopen("texts/rules.txt","r");
echo fread($res_rules,filesize("texts/rules.txt"));
fclose($res_rules);
?>


<!--footer begin-->
<?php
SiteContent::showFooter();
?>
<!--footer end--> 

</body>
</html>
