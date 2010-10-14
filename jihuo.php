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

                       <p class="p0 color"><b>外研社手机词典短信激活平台正式开通,发送短信即可完成外研社手机词典的激活注册  <a href="news_3.php" title="外研社手机词典短信激活" target="_blank"><u>>>查看详情</u></a> </b></p>
              

			<p class="p_4">
				外研社手机词典注册激活
			</p>
		  <form method="POST" action="jihuosave.php" name="form" onSubmit="return Checkreg();">
			<div class="mB_m6">
				<div class="mB_m7_con">
					<label class="f15px">手机型号：<input name="phtype" type="text" class="aret_3"/> [请输入您的手机型号] </label>
                                </div>
                                <div class="mB_m6_con">
					<label class="f14px">序列号：<input name="xlh1" type="text" class="aret_2" onkeyup="this.value=this.value.replace(/[^A-Z0-9]/g,'')" /> -
												 <input name="xlh2" type="text" class="aret_2" onkeyup="this.value=this.value.replace(/[^A-Z0-9]/g,'')" /> -
												 <input name="xlh3" type="text" class="aret_2" onkeyup="this.value=this.value.replace(/[^A-Z0-9]/g,'')" /> -
												 <input name="xlh4" type="text" class="aret_2" onkeyup="this.value=this.value.replace(/[^A-Z0-9]/g,'')" />
					</label>
					<br><br>
					<label class="f12_1px">[请正确输入刮刮卡上的序列号。注意：1、字母区分大小写; 2、数字1和字母I不要混淆]</label>
				        
                                </div>
				<div class="mB_m6_con">
					<label class="f14px">安装码：<input name="azm1" type="text" class="aret_2" onkeyup="this.value=this.value.replace(/[^A-Z0-9]/g,'')" /> -
												 <input name="azm2" type="text" class="aret_2" onkeyup="this.value=this.value.replace(/[^A-Z0-9]/g,'')" /> -
												 <input name="azm3" type="text" class="aret_2" onkeyup="this.value=this.value.replace(/[^A-Z0-9]/g,'')" /> -
												 <input name="azm4" type="text" class="aret_2" onkeyup="this.value=this.value.replace(/[^A-Z0-9]/g,'')" />
					</label>
					<br><br>
					<label class="f12_1px">[请正确输入手机上的安装码。注意：1、字母区分大小写; 2、数字1和字母I不要混淆]</label>
				</div>
			</div>
			<p class="p_4">
			<input type="submit" name="anniu" id="anniu" value="注册激活" /> 
			</p>
		</form>

 


		</div>	  

      
   </div>
</div>
<?php include ("down.php");?>
<script language="JavaScript">
function Checkreg()
{
	if (document.form.xlh1.value.length < 5 || document.form.xlh1.value.length >5) {
		alert("请正确输入序列号的第一组5位数。");
		document.form.xlh1.focus();
		return false;
	}
	if (document.form.xlh2.value.length < 5 || document.form.xlh2.value.length >5) {
		alert("请正确输入序列号的第二组5位数。");
		document.form.xlh2.focus();
		return false;
	}
	if (document.form.xlh3.value.length < 5 || document.form.xlh3.value.length >5) {
		alert("请正确输入序列号的第三组5位数。");
		document.form.xlh3.focus();
		return false;
	}
	if (document.form.xlh4.value.length < 5 || document.form.xlh4.value.length >5) {
		alert("请正确输入序列号的第四组5位数。");
		document.form.xlh4.focus();
		return false;
	}
  	if (document.form.azm1.value.length < 5 || document.form.azm1.value.length >5) {
		alert("请正确输入安装码的第一组5位数。");
		document.form.azm1.focus();
		return false;
	}
	if (document.form.azm2.value.length < 5 || document.form.azm2.value.length >5) {
		alert("请正确输入安装码的第二组5位数。");
		document.form.azm2.focus();
		return false;
	}
	if (document.form.azm3.value.length < 5 || document.form.azm3.value.length >5) {
		alert("请正确输入安装码的第三组5位数。");
		document.form.azm3.focus();
		return false;
	}
	if (document.form.azm4.value.length < 5 || document.form.azm4.value.length >5) {
		alert("请正确输入安装码的第四组5位数。");
		document.form.azm4.focus();
		return false;
	}
}
</script>

</body>
</html>