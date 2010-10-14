<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<title>外研社手机词典注册激活</title>
<link rel="stylesheet" type="text/css"  href="css/style.css"/>
</head>
<body>
<?php include ("top.php");?>
<div class="con1 ">
   <div class="con_2 "><img src="image/img_8.gif" /></div>
   <div class="left0"></div>
   <div class="left1"><?php include ("left.php");?></div>
   <div class="right">
       <div class="right0"> 
               <li class="li_2 color">注册激活</li> 
	   </div> 
	   <div class="right1">
			<p class="p_4">
				外研社手机词典激活码
			</p>
<?php
include ("conn.php");
include ("function.php");
$xuliehao1=$_POST['xlh1'];
$xuliehao2=$_POST['xlh2'];
$xuliehao3=$_POST['xlh3'];
$xuliehao4=$_POST['xlh4'];
$anzhuangnum1=$_POST['azm1'];
$anzhuangnum2=$_POST['azm2'];
$anzhuangnum3=$_POST['azm3'];
$anzhuangnum4=$_POST['azm4'];
$phonetype=$_POST['phtype'];
$xuliehao=$xuliehao1.$xuliehao2.$xuliehao3.$xuliehao4;
$mdxuliehao=md5($xuliehao);
$anzhuangnumd=$anzhuangnum1.$anzhuangnum2.$anzhuangnum3.$anzhuangnum4;
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
$numkey = "waiyansheshoujicidian";
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
function encrypt($txt,$numkey)
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
function decrypt($txt,$numkey)
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
$lTestV=array();
$key=array();
$szCreateArray=array(
	array('1','W','A','I','5','E','X','9','V','3'),
	array('H','K','Q','P','L','2','J','M','G','6'),
	array('R','4','8','D','C','F','B','Y','7','1'),
	array('W','A','I','5','E','X','9','V','3','H'),
	array('K','Q','P','L','2','J','M','G','6','R'),
	array('4','8','D','C','F','B','Y','7','1','W'),
	array('A','I','5','E','X','9','V','3','H','K'),
	array('Q','P','L','2','J','M','G','6','R','4'),
	array('8','D','C','F','B','Y','7','1','W','A'),
	array('I','5','E','X','9','V','3','H','K','Q'));
function changesd($numd)
{
	$pd=$numd;
	 while ($pd>=4294967296)
	{$pd=$pd-4294967296;}	 
	return $pd;
}
function changes($num)
{
	$p=$num;
	while ($p>=2147483648)
	{$p=$p-2147483648;}
	return $p;
}
function change($num)
{
 $szCreateArray=array(
	array('1','W','A','I','5','E','X','9','V','3'),
	array('H','K','Q','P','L','2','J','M','G','6'),
	array('R','4','8','D','C','F','B','Y','7','1'),
	array('W','A','I','5','E','X','9','V','3','H'),
	array('K','Q','P','L','2','J','M','G','6','R'),
	array('4','8','D','C','F','B','Y','7','1','W'),
	array('A','I','5','E','X','9','V','3','H','K'),
	array('Q','P','L','2','J','M','G','6','R','4'),
	array('8','D','C','F','B','Y','7','1','W','A'),
	array('I','5','E','X','9','V','3','H','K','Q'));
  $numtend=$num;
  $tennum1=0;
  $tennum0=0;
  $lResult=0;
  $lCount =1000000000;
  for ($x=0; $x<=9; $x++) 
  {  
	  $s=substr($numtend, $x, 1); 
			 for ($i=0; $i<10 ;$i++) 
				{  
					 if ($szCreateArray[$x][$i] == $s )
						{
							$tennum1=$i;
							$i=10; 
						 } 
					 else
					    {
					        $tennum1=-1;
						}	
				} 
			$lResult =$lResult+ $lCount*($tennum1);
			$lCount =$lCount/ 10;

   }
 return $lResult;
}
$sql="select * from xuliehao where xuliehao = '$mdxuliehao' ";
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
if ($numberOfRows==0) {  
echo("<script language='javascript'>");
echo("alert('很抱歉，您输入的序列号不正确。');");
echo("location.href='javascript:history.go(-1)';");
echo("</script>");
exit(); 
}
else
{   

 $query = mysql_fetch_array($result);
	 $usenum=$query[usenum];
	 $miyao=$query[miyao];
	 $miyao=passport_decrypt($miyao,$keyd);       
	   if($usenum<10)
	   {
		  $id=$query[id];
		  $usenum=$usenum+1;		  
		  $sql = "UPDATE xuliehao SET usenum = '$usenum' , anzhuangma = '$anzhuangnumd' 
		  WHERE id = '$id'";
		  $result = MYSQL_QUERY($sql);
                  if($phonetype<>"")
                  { 
                   $sql = "UPDATE xuliehao SET phonetyped = '$phonetype' 
		  WHERE id = '$id'";
		  $result = MYSQL_QUERY($sql);
                   }          
                  $timed=time();
                  $timed=date('Y-m-d H:i:n', $timed);
		   if($usenum==1)
		   {
			  $sql = "UPDATE xuliehao SET fristtime = '$timed' , lasttime = '$timed' 
			  WHERE id = '$id'";
			  $result = MYSQL_QUERY($sql);
		   }
		    if($usenum>1)
		   {
		      $sql = "UPDATE xuliehao SET secondtime = '$timed' , lasttime = '$timed' 
			  WHERE id = '$id'";
			  $result = MYSQL_QUERY($sql);
		   }
		  
			$numten=$xuliehao1.$xuliehao2; 
			$anzhuangnums1=$anzhuangnum1.$anzhuangnum2; 
			$anzhuangnums2=$anzhuangnum3.$anzhuangnum4; 
			$lTestV[0] = change($numten);
			$lTestV[1] = change($miyao);
			$key[0] = change($anzhuangnums1);
			$key[1] = change($anzhuangnums2);
			$key[2] = 2563761818;
			$key[3] = 1374324473; 
			$delta=2654435769;
			$y=$lTestV[0];
			$z=$lTestV[1];
			$sum=0;
			$a=$key[0];
			$b=$key[1];
			$c=$key[2];
			$d=$key[3];
			$temp1=0;
			$temp2=0;
			for ($i=0; $i <32; $i++) 
				{     
					   $sum += $delta;
					   if($sum >4294967296)
						 {$sum=$sum-4294967296;}  
					
								  $temp1=$z*pow(2,4);
								  $temp1=changesd($temp1);
								  if ($temp1> 4294967296 )
									 { $temp1=$temp1-4294967296;}
								  $temp1=$temp1+$a;
								  if ($temp1> 4294967296 )
									 { $temp1=$temp1-4294967296;}
								  $temp2=$z+$sum;
								  if ($temp2> 4294967296 )
									 { $temp2=$temp2-4294967296;}
								
									$num1d=$temp1;
									$num2d=$temp2;
									$xs=floor($num1d/pow(2,31));
									$ys=floor($num2d/pow(2,31));
									$r1=$xs ^ $ys;
									$xs=changes($num1d);
									$ys=changes($num2d);
									$r2=$xs ^ $ys;
									$sumd=$r1*pow(2,31)+$r2 ;
									$r3=changesd($sumd);
									$temp1=$r3;
								  if ($temp1> 4294967296 )
									 {$temp1=$temp1-4294967296;}
								
									$temp2=floor($z/pow(2,5));
								  if ($temp2> 4294967296 )
									 { $temp2=$temp2-4294967296;}
									 $temp2=$temp2+$b;
								  if ($temp2> 4294967296 )
									 { $temp2=$temp2-4294967296;}
								
									$num1d=$temp1;
									$num2d=$temp2;
									$xs=floor($num1d/pow(2,31));
									$ys=floor($num2d/pow(2,31));
									$r1=$xs ^ $ys;
									$xs=changes($num1d);
									$ys=changes($num2d);
									$r2=$xs ^ $ys;
									$sumd=$r1*pow(2,31)+$r2 ;
									$r3=changesd($sumd);
									$temp1=$r3;
								  if ($temp1> 4294967296 )
									 { $temp1=$temp1-4294967296;}
									 $y=$y+$temp1;
								  if ( $y > 4294967296) 
									 { $y=$y-4294967296;}
					
								
								  $temp1=$y*pow(2,4);
								  $temp1=changesd($temp1);
								  if ($temp1> 4294967296 )
									 { $temp1=$temp1-4294967296;}
								  $temp1=$temp1+$c;
								  if ($temp1> 4294967296 )
									 { $temp1=$temp1-4294967296;}
								  $temp2=$y+$sum;
								  if ($temp2> 4294967296 )
									 { $temp2=$temp2-4294967296;}
								
								   $num1d=$temp1;
								   $num2d=$temp2;
								   $xs=floor($num1d/pow(2,31));
								   $ys=floor($num2d/pow(2,31));
								   $r1=$xs ^ $ys;
								   $xs=changes($num1d);
								   $ys=changes($num2d);
								   $r2=$xs ^ $ys;
								   $sumd=$r1*pow(2,31)+$r2 ;
								   $r3=changesd($sumd);
								   $temp1=$r3;
								  if ($temp1> 4294967296 )
									 {$temp1=$temp1-4294967296;}
								
								  $temp2=floor($y/pow(2,5));
								  if ($temp2> 4294967296 )
									 { $temp2=$temp2-4294967296;}
								  $temp2=$temp2+$d;
								  if ($temp2> 4294967296 )
									 { $temp2=$temp2-4294967296;}
								
									$num1d=$temp1;
									$num2d=$temp2;
									$xs=floor($num1d/pow(2,31));
									$ys=floor($num2d/pow(2,31));
									$r1=$xs ^ $ys;
									$xs=changes($num1d);
									$ys=changes($num2d);
									$r2=$xs ^ $ys;
									$sumd=$r1*pow(2,31)+$r2 ;
									$r3=changesd($sumd);
									$temp1=$r3;
								  if ($temp1> 4294967296 )
									 { $temp1=$temp1-4294967296;}
								  $z=$z+$temp1;
								  if ( $z > 4294967296) 
									 { $z=$z-4294967296;}
				  }
			$lTestV[0]=$y;  
			$lTestV[1]=$z; 
			
			$nTemp=array();
			$lCountd =1000000000;
			$nTemp[0]=0;
			$nTemp[1]=0;
			for ($i=0; $i < 10; $i++) 
			{                     
			   $nTemp[1]=floor($lTestV[0]/$lCountd); 
			
			   $j=$nTemp[1];
			   $szNumber1=$szCreateArray[$i][$j];
			   $szNumber2=$szNumber2.$szNumber1;
			   $lTestV[0]=$lTestV[0]-$nTemp[1]*$lCountd;
			   $lCountd=$lCountd/10;
			 } 
			
			for ($i=0; $i < 5; $i++) 
			{
			  $nTemp[1]=substr($szNumber2, $i, 1);  
			  $jihuoma1=$jihuoma1.$nTemp[1];
			} 
			for ($i=5; $i < 11; $i++) 
			{
			  $nTemp[1]=substr($szNumber2, $i, 1);  
			  $jihuoma2=$jihuoma2.$nTemp[1];
			}
			
			$nTemp=array();
			$lCountd =1000000000;
			$nTemp[0]=0;
			$nTemp[1]=0;
			for ($i=0; $i < 10; $i++) 
			{                     
			   $nTemp[1]=floor($lTestV[1]/$lCountd); 
			
			   $j=$nTemp[1];
			   $szNumber3=$szCreateArray[$i][$j];
			   $szNumber4=$szNumber4.$szNumber3;
			   $lTestV[1]=$lTestV[1]-$nTemp[1]*$lCountd;
			   $lCountd=$lCountd/10;
			 } 
			
			for ($i=0; $i < 5; $i++) 
			{
			  $nTemp[1]=substr($szNumber4, $i, 1);  
			  $jihuoma3=$jihuoma3.$nTemp[1];
			} 
			for ($i=5; $i < 11; $i++) 
			{
			  $nTemp[1]=substr($szNumber4, $i, 1);  
			  $jihuoma4=$jihuoma4.$nTemp[1];
			}
		  $jihuoma=$jihuoma1.$jihuoma2.$jihuoma3.$jihuoma4;
	          $enc_text = passport_encrypt($jihuoma,$keyd); 
		  $jihuoma=$enc_text;
		  $sql = "UPDATE xuliehao SET jihuoma = '$jihuoma' 
		  WHERE id = '$id'";
		  $result = MYSQL_QUERY($sql);
?>
			<div class="mB_m6">
				<div class="mB_m6_con">
					<label class="f14px">激活码：
				 <input name="jhm1" type="text"  size="6" value=" <?php echo $jihuoma1; ?>"/> -
				 <input name="jhm2" type="text" size="6" value=" <?php echo $jihuoma2; ?>" /> -
				 <input name="jhm1" type="text"  size="6" value=" <?php echo $jihuoma3; ?>"/> -
				 <input name="jhm2" type="text" size="6" value=" <?php echo $jihuoma4; ?>" /> 
					</label>
					<br><br>
					<label class="f12px color3">&nbsp; &nbsp; [请注意数字"1"和字母"I"不要混淆。]</label>
				</div>
			</div>
<?php
      // exit(); 
      //结束获取激活码      
	   }
	   else
	   {
			echo("<script language='javascript'>");
			echo("alert('很抱歉，您已经达到最大激活次数，目前不可以激活。');");
			echo("location.href='javascript:history.go(-1)';");
			echo("</script>");
			exit(); 
	   }
}
?>
		</div>	  
   </div>
</div>
<?php include ("down.php");?>
</body>
</html>