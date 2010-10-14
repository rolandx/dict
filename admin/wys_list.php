<? 
session_register("session_admin");
session_register("session_password");
session_register("session_login");
$login=$HTTP_SESSION_VARS['session_login'];
$admin=($HTTP_SESSION_VARS["session_admin"]);
$password=($HTTP_SESSION_VARS["session_password"]);
if($login<>"ture"){
session_unregister("session_password");
echo "<meta http-equiv=refresh content=2;url=login.php>";
exit;
}
?>
<?php 

///激活码及产品密钥加密解密函数开始
$keyd = "waiyanshesjcdmiyao";
function passport_encrypt($txt, $key) {
srand((double)microtime() * 1000000);
$encrypt_key = md5(rand(0, 32000));
$ctr = 0;
$tmp = '';
for($i = 0;$i < strlen($txt); $i++) {
   $ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
   $tmp .= $encrypt_key[$ctr].($txt[$i] ^ $encrypt_key[$ctr++]);
}
return base64_encode(passport_key($tmp, $key));
}
function passport_decrypt($txt, $key) {
$txt = passport_key(base64_decode($txt), $key);
$tmp = '';
for($i = 0;$i < strlen($txt); $i++) {
   $md5 = $txt[$i];
   $tmp .= $txt[++$i] ^ $md5;
}
return $tmp;
}
function passport_key($txt, $encrypt_key) {
$encrypt_key = md5($encrypt_key);
$ctr = 0;
$tmp = '';
for($i = 0; $i < strlen($txt); $i++) {
   $ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr;
   $tmp .= $txt[$i] ^ $encrypt_key[$ctr++];
}
return $tmp;
}
////激活码及产品密钥加密解密函数结束
////使用次数加密解密函数开始
$numkey = "waiyansheshoujicidian";  //使用次数密钥
function keyED($txt,$encrypt_key) 
{ 
$encrypt_key = md5($encrypt_key); 
$ctr=0; 
$tmp = ""; 
for ($i=0;$i<strlen($txt);$i++) 
{ 
if ($ctr==strlen($encrypt_key)) $ctr=0; 
$tmp.= substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1); 
$ctr++; 
} 
return $tmp; 
} 
function encrypt($txt,$numkey)  //使用次数加密
{ 
srand((double)microtime()*1000000); 
$encrypt_key = md5(rand(0,32000)); 
$ctr=0; 
$tmp = ""; 
for ($i=0;$i<strlen($txt);$i++) 
{ 
if ($ctr==strlen($encrypt_key)) $ctr=0; 
$tmp.= substr($encrypt_key,$ctr,1) . 
(substr($txt,$i,1) ^ substr($encrypt_key,$ctr,1)); 
$ctr++; 
} 
return keyED($tmp,$numkey); 
} 

function decrypt($txt,$numkey) //使用次数解密
{ 
$txt = keyED($txt,$numkey); 
$tmp = ""; 
for ($i=0;$i<strlen($txt);$i++) 
{ 
$md5 = substr($txt,$i,1); 
$i++; 
$tmp.= (substr($txt,$i,1) ^ $md5); 
} 
return $tmp; 
} 
////使用次数加密解密函数结束
?>
<?php include ("conn.php");?>
<?php include ("function.php");?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/css.css" />
<table align="center" width="1490" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bgcolor="#749AEC">
 <tr><td class=td height="40">&nbsp; &nbsp;<b>外研社手机词典后台</b></td></tr>
  <tr>
    <td class=td height="30">
<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where usenum=1 or usenum=2 ";
//genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
$num=0;
if ($numberOfRows==0) {  
echo '暂无符合查询条件的数据';
}
else
{  while($query = mysql_fetch_array($result))
	{ $num= $num+1;}
}	
?>
&nbsp; &nbsp;激活总数：<?php echo $num;?>  &nbsp; &nbsp;
<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where ( usenum=1 or usenum=2) and miyao='VAAAGFYWXjhRTVcVAkZQZg9fABo='";
//genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
$numen=0;
if ($numberOfRows==0) {  
echo '暂无符合查询条件的数据';
}
else
{  while($query = mysql_fetch_array($result))
	{ $numen= $numen+1;}
}	
?>
简英：<?php echo $numen;?> &nbsp; &nbsp;
<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where ( usenum=1 or usenum=2) and miyao='AFRSSgBAXzlXUAc3UhYGRVgGU0U='";
//genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
$numen=0;
if ($numberOfRows==0) {  
echo '暂无符合查询条件的数据';
}
else
{  while($query = mysql_fetch_array($result))
	{ $numen= $numen+1;}
}	
?>
精英：<?php echo $numen;?> &nbsp; &nbsp;
<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where ( usenum=1 or usenum=2) and miyao='UhBXQAw8BQBRVFISBktUHA5QUVM='";
//genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
$numde=0;
if ($numberOfRows==0) {  
echo '暂无符合查询条件的数据';
}
else
{  while($query = mysql_fetch_array($result))
	{$numde= $numde+1;}
}	
?>
简德：<?php echo $numde;?> &nbsp; &nbsp;

<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where ( usenum=1 or usenum=2) and miyao='UhABFg09UllUMVcXUgFRY18VBmA='";
//genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
$numded=0;
if ($numberOfRows==0) {  

}
else
{  while($query = mysql_fetch_array($result))
	{$numded= $numded+1;}
}	
?>
精德：<?php echo $numded;?> &nbsp; &nbsp;

<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where ( usenum=1 or usenum=2) and miyao='U2FSTwc7AxVRTQFHCFsNWQk3U1g='";
//genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
$numfa=0;
if ($numberOfRows==0) {  
echo '暂无符合查询条件的数据';
}
else
{ while($query = mysql_fetch_array($result))
	{ $numfa= $numfa+1;}
}	
?>
简法：<?php echo $numfa;?> &nbsp; &nbsp;

<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where ( usenum=1 or usenum=2) and miyao='AzEAHQ0xBxEDZgw8VRFQBl8VWjo='";
//genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
$numfad=0;
if ($numberOfRows==0) {  

}
else
{ while($query = mysql_fetch_array($result))
	{ $numfad= $numfad+1;}
}	
?>
精法：<?php echo $numfad;?> &nbsp; &nbsp;

<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where ( usenum=1 or usenum=2) and miyao='AkgLbQZQB2cAHFcRVRVXYVoSW1A='";
//genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
$numri=0;
if ($numberOfRows==0) {  

}
else
{ while($query = mysql_fetch_array($result))
	{ $numri= $numri+1;}
}	
?>
日语：<?php echo $numri;?> &nbsp; &nbsp;
<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where ( usenum=1 or usenum=2) and miyao='BEYAYlEHUkQFGQ1NUGAEMl8QVk0='";
//genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
$numru=0;
if ($numberOfRows==0) {  

}
else
{ while($query = mysql_fetch_array($result))
	{ $numru= $numru+1;}
}	
?>
俄语：<?php echo $numru;?> &nbsp; &nbsp;
<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where ( usenum=1 or usenum=2) and miyao='CEIHHAZbUjQAGgBCUGYETF1lU0g='";
//genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
$numkc=0;
if ($numberOfRows==0) {  

}
else
{ while($query = mysql_fetch_array($result))
	{ $numkc= $numkc+1;}
}	
?>
韩语：<?php echo $numkc;?> &nbsp; &nbsp;

<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where ( usenum=1 or usenum=2) and miyao='VhwKaFUXBG4DHgJACT8ASAs1B2E='";
//genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
$numyi=0;
if ($numberOfRows==0) {  

}
else
{ while($query = mysql_fetch_array($result))
	{ $numyi= $numyi+1;}
}	
?>
意语：<?php echo $numyi;?> &nbsp; &nbsp;

<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where ( usenum=1 or usenum=2) and miyao='B0VQUVUIU1cLagFBUg9RBQ5EWjo='";
//genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
$numxi=0;
if ($numberOfRows==0) {  

}
else
{ while($query = mysql_fetch_array($result))
	{ $numxi= $numxi+1;}
}	
?>
西语：<?php echo $numxi;?> &nbsp; &nbsp;

	</td>
  </tr>
</table>
<table align="center" width="1490" border="1" cellpadding="0" cellspacing="0"  style="border-collapse: collapse" bgcolor="#749AEC">
 <tr>
   <td width="60" height="20">ID</td>
   <td width="260" height="20">序列号</td>
   <td width="270" height="20">安装码</td>
   <td width="270" height="20">激活码</td>
   <td width="50" height="20">次数</td>
   <td width="160" height="20">第一次注册时间</td>
 
   <td width="160" height="20">最后注册时间</td>
   <td width="60" height="20">语种</td>
   <td width="100" height="20">类型</td>
   <td width="100" height="20">手机型号</td>
 </tr>
</table>
<?php
//查找数据，分页循环显示
$sql="select * from xuliehao where usenum=1 or usenum=2  order by lasttime desc ";
genpage($sql);               //调用分页函数
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
if ($numberOfRows==0) {  
echo '暂无符合查询条件的数据';
}
else
{   while($query = mysql_fetch_array($result))
	{
	?>
  <table align="center" width="1490" border="1" cellpadding="0" cellspacing="0"  style='border-collapse: collapse'class=c2  bordercolor="#3979C6">
	<tr>
	   <td width="60" height="20"><?php echo $query[id];?></td>
	   <td width="260" height="20"><?php echo $query[xuliehao];?></td>
	   <td width="270" height="20"><?php echo $query[anzhuangma];?></td>
	   <?php 
	   $jihuoma=$query[jihuoma];
	   $jihuoma=passport_decrypt($jihuoma, $keyd);
		?>
	   <td width="270" height="20"><?php echo $jihuoma;?></td>
	   <?php 
	  // $usenum=$query[usenum];
	  // $usenum=decrypt($usenum,$numkey);
		?>
	   <td width="50" height="20"><?php echo $query[usenum];?></td>
	   <td width="160" height="20"><?php echo $query[fristtime];?></td>
	  
	   <td width="160" height="20"><?php echo $query[lasttime];?></td>
	   <td width="60" height="20">
		<?php if($query[miyao]=="VAAAGFYWXjhRTVcVAkZQZg9fABo=")
		 echo 英语
		?>
		<?php if($query[miyao]=="UhBXQAw8BQBRVFISBktUHA5QUVM=")
		 echo 德语
		?>
		<?php if($query[miyao]=="U2FSTwc7AxVRTQFHCFsNWQk3U1g=")
		 echo 法语
		?>
                <?php if($query[miyao]=="AFRSSgBAXzlXUAc3UhYGRVgGU0U=")
		 echo 精英
		?>
                <?php if($query[miyao]=="BEYAYlEHUkQFGQ1NUGAEMl8QVk0=")
		 echo 俄语
		?>
                <?php if($query[miyao]=="AkgLbQZQB2cAHFcRVRVXYVoSW1A=")
		 echo 日语
		?>
                <?php if($query[miyao]=="AzEAHQ0xBxEDZgw8VRFQBl8VWjo=")
		 echo 精法
		?>
                <?php if($query[miyao]=="VhwKaFUXBG4DHgJACT8ASAs1B2E=")
		 echo 意语
		?> 
                <?php if($query[miyao]=="B0VQUVUIU1cLagFBUg9RBQ5EWjo=")
		 echo 西语
		?>      
                <?php if($query[miyao]=="CEIHHAZbUjQAGgBCUGYETF1lU0g=")
		 echo 韩语
		?> 
                <?php if($query[miyao]=="UhABFg09UllUMVcXUgFRY18VBmA=")
		 echo 精德
		?>       
	 </td>
       <td width="100" height="20">
       
             <?php if($query[leixing]=="youka")
		 echo 有卡
		?> 
                <?php if($query[leixing]=="wuka")
		 echo 无卡
		?>  

       </td>
       <td width="100" height="20"><?php echo $query[phonetyped];?> </td>
	</tr>
  </table>
<?php
	}
?>
	<table align="center" width="1490" border="0" cellpadding="0" cellspacing="0">
	 <tr><td height="50" align="center">
	  <?php	showpage();?>
	 </td></tr>
	</table>
<?php
 }
mysql_close();
?>