<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>外研社手机词典</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<?php
include ("conn2.php");
include ("function.php");
$phone=$_POST['named'];
$typed=false;
?>
<?php include ("top.php");?>
<div class="con1 ">
   <div class="con_2 "><img src="image/img_8.gif" /></div>
   <div class="left0"></div>
   <div class="left1"><?php include ("left.php");?></div>
   <div class="right">
       <div class="right0"> 
               <li class="li_2 color">查询结果</li> 
	   </div> 
	   <div class="right1">
		<?php


if ($phone=="nokia" or $phone=="NOKIA" or $phone=="诺基亚" )
{
    $phone="NOKIA";
    $typed=ture;
}
if ($phone=="三星" or $phone=="SAMSUNG" or $phone=="Anycall" or $phone=="samsung" or $phone=="anycall" )
{
    $phone="SAMSUNG";
    $typed=ture;
}
if ($phone=="多普达" or $phone=="dopod")
{
    $phone="dopod";
    $typed=ture;
}
if ($phone=="摩托罗拉" or $phone=="MOTO" or $phone=="moto")
{
    $phone="MOTO";
    $typed=ture;       
}       
if ($phone=="联想" or $phone=="lenovo")
{
    $phone="lenovo"; 
    $typed=ture;          
}       
if ($phone=="HTC" or $phone=="htc")
{
    $phone="HTC"; 
    $typed=ture; 
} 
if ($phone=="oppo")
{
    $phone="oppo";  
    $typed=ture;
}          

if($typed=="ture")
{
?>
<font color="#FF0000"><b>外研社手机词典目前确认适用该品牌的手机型号如下：</b></font><br>
<?php
   $sql="select * from phonetype where typed2='$phone' ";
   genpage($sql);   
   $result =mysql_query($sql);
   $numberOfRows = MYSQL_NUM_ROWS($result);

   while($query = mysql_fetch_array($result))
   {
   ?>
     <?php echo $query[phonetype];?>
     <br>
   <?php

   }
}
else
{
$sql="select * from phonetype where phonetype like '%$phone%' ";
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
if ($numberOfRows==0) {  
?>
目前您的机型不在适配型号中，您可以<a href="sdown.php" class="color" target="_blank">下载试用版</a>，根据您的手机操作系统安装试用


<?php
}
else
{   $query = mysql_fetch_array($result);
	 $typed=$query[phonetype];
	 $banben=$query[banben];
         $xitong=$query[xitong];
         $num=$query[num];
?>
你搜索的手机品牌及型号为: <?php echo $typed;?> [<?php echo $xitong;?>] <br>

<?php	    
	   if($banben=="Java")
	   {
?>
手机词典安装版本为：Java版

<?php
           }
           if($banben=="Symbian")
	   {
?>
手机词典安装版本为：Symbian版

<?php
           }
          if($banben=="wm")
	   {
?>
手机词典安装版本为：Windows Mobile版

<?php
           }
?>

<?php
if($num=="1")
	   {
?>
<div class="right1">
       <p class="p_2 color "><b>具体安装说明如下：</b></p>
       <p class="p_2">1、安装：将存储卡放置到手机中，在手机主功能界面，找到应用软件并打开，找到No Name（存储卡）依次打开data-setup-java-Verisign,可以看到“外研社手机词典”应用程序。</p>
       <p class="p_2">2、设置：选中“外研社手机词典”，选择“操作”菜单依次进入-应用软件接入-数据接入-读取用户数据-总是允许；返回到“外研社手机词典”，选择“操作”菜单依次进入-应用软件接入-数据接入-编辑和增加用户数据-总是允许。</p>
       <p class="p_2">3、运行：返回到“外研社手机词典”，点击打开看到“外研社手机词典”欢迎界面即是打开程序。</p>
 </div> 
<?php
           }
?>
<?php
if($num=="2")
	   {
?>
<div class="right1">
       <p class="p_2 color "><b>具体安装说明如下：</b></p>
       <p class="p_2">1、安装：将存储卡放置到手机中，在手机主功能界面，找到“设置”并打开，然后找到“数据管理”-“文件管理”，将文件管理位置切换到存储卡，找到data并依次打开data-setup-symbian,找到FLTRP Dictionary_3rd.sis，点击进行安装；</p>
       <p class="p_2">2、运行：在手机主功能界面，打开“应用程序”-“我的助理”，找到“外研社手机词典”，点击打开看到“外研社手机词典”欢迎界面即是打开程序。</p>
 </div> 
<?php
           }
?>
<?php
if($num=="3")
	   {
?>
<div class="right1">
       <p class="p_2 color "><b>具体安装说明如下：</b></p>
       <p class="p_2">1、安装：将存储卡放置到手机中，在手机主功能界面，找到“应用程序”并打开，然后找到“文件管理”，将文件管理位置切换到存储卡，找到data并依次打开data-setup-symbian,找到FLTRP Dictionary_5rd.sis，点击进行安装；</p>
       <p class="p_2">2、运行：在手机主功能界面，打开“应用程序”，找到“外研社手机词典”，点击打开看到“外研社手机词典”欢迎界面即是打开程序。</p>
 </div> 
<?php
           }
?>
<?php
if($num=="4")
	   {
?>
<div class="right1">
       <p class="p_2 color "><b>具体安装说明如下：</b></p>
       <p class="p_2">1、安装：在“开始”菜单的资源管理器中找到存储卡（Storage Cark）的位置并打开，找到程序资料data文件夹，依次打开data-setup-Windows Mobile-QVGA-PPC，找到FLTRPDict.CAB文件，点击打开即可进行安装。（提示：安装过程中，手机会提示程序安装的目录，此时选择存储为程序的存储目录）</p>
       <p class="p_2">2、使用：在程序中找到“外研社手机词典”，打开即可运行程序。</p>
 </div> 
<?php
           }
?>

<?php
if($num=="5")
	   {
?>
<div class="right1">
       <p class="p_2 color "><b>具体安装说明如下：</b></p>
       <p class="p_2">1、安装：在“开始”菜单的资源管理器中找到存储卡（Storage Cark）的位置并打开，找到程序资料data文件夹，依次打开data-setup-Windows Mobile-VGA-PPC，找到FLTRPDict.CAB文件，点击打开即可进行安装。（提示：安装过程中，手机会提示程序安装的目录，此时选择存储为程序的存储目录）</p>
       <p class="p_2">2、使用：在程序中找到“外研社手机词典”，打开即可运行程序。</p>
 </div> 
<?php
           }
?>
<?php
if($num=="6")
	   {
?>
<div class="right1">
       <p class="p_2 color "><b>具体安装说明如下：</b></p>
       <p class="p_2">1、安装：将存储卡放置到手机中，在手机主功能界面，找到“设置”并打开，然后找到“数据管理”-“文件管理”，将文件管理位置切换到存储卡，找到data并依次打开data-setup-symbian,找到FLTRP Dictionary_3rd.sis，点击进行安装；</p>
       <p class="p_2">2、运行：在手机主功能界面，打开“应用程序”-“我的助理”，找到“外研社手机词典”，点击打开看到“外研社手机词典”欢迎界面即是打开程序。</p>
 </div> 
<?php
           }
?>



<?php
}
?>
<?php
}
mysql_close();
?>

		
	   </div> 
   </div>
</div>
<?php include ("down.php");?>
</body>
</html>