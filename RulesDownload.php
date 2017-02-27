<?php
//以下代码实现文件下载功能，其中$file和$fileName为两个重要的变量

$file= "texts/rulesdownload.txt";//源文件路径
$fileName="UserRules.txt";//下载后文件路径（默认在C盘下）

header("Content-Type:application/octet-stream");
header("Content-Disposition:attachment;filename=".$fileName);
header("Accept-ranges:bytes");
header("Accept-Length:".filesize($file));

$res=fopen($file,"r");
echo fread($res, filesize($file));
fclose($res);

?>