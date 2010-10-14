<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="css/css.css" />

<table cellspacing="0" cellpadding="0" width="555" border="0" style="border-collapse: collapse" bordercolor="#111111" align="center">
  <tbody> 
  <tr> 
    <td width="588"> 
      <div align="center"> 
        <center>
          <table cellspacing="0" cellpadding="0" width="558" border="0" style="border-collapse: collapse" bordercolor="#111111" height="237">
            <tbody> 
            <tr> 
              <td valign="top" width="92" rowspan="4" height="237">&nbsp; </td>
              <td valign="top" height="87" width="466"> <img border="0" src="images/touradmin1.gif" width="253" height="52"><img height="52" src="images/aaa_r4.gif" width="77"> 
              </td>
            </tr>
            <tr> 
              <td valign="top" width="466" height="104">
                <div align="center"> </div>
                <form name="admininfo" method="post" action="savelogin.php" >
                  <div align="center"> 
                    <div align="center"> 
                      <table border="0" cellspacing="0" cellpadding="0" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
                        <tr> 
                          <td height="29"> <br>
                            <br>
                            <table  width="445" border="0" align="center" cellpadding="1" cellspacing="1">
                              <tr bgcolor="#FFFFFF"> 
                                <td width="70"> 
                                  <div align="left">管理员：</div>
                                </td>
                                <td width="105"> 
                                  <div align="left"> 
                                    <input name="admin" type="text" id="admin" size="12">
                                  </div>
                                </td>
                                <td width="260"> 
                                  <div align="left"> 
                                    <input  onClick="return check();"  type="image" border="0" name="submit" src="images/xx.gif" width="54" height="18">
                                  </div>
                                </td>
                              </tr>
                              <tr bgcolor="#FFFFFF"> 
                                <td width="70"> 
                                  <div align="left">密&nbsp;&nbsp;码：</div>
                                </td>
                                <td width="105"> 
                                  <div align="left"> 
                                    <input name="password" type="password" id="password" size="12">
                                  </div>
                                </td>
                                <td width="260"> 
                                  <div align="left"><a href="login.php"><img src="images/qc.gif" width="54" height="18" border="0"></a></div>
                                </td>
                              </tr>
                            </table>
                            <br>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </form>
              </td>
            </tr>
            <tr> 
              <td valign="top" width="466" height="36"> 
                <p align="center">
              </td>
            </tr>
            <tr> 
              <td valign="top" width="466" height="10">&nbsp;</td>
            </tr>
            </tbody> 
          </table>
        </center>
      </div>
    </td>
  </tr>
  </tbody> 
</table>
<script LANGUAGE="javascript">
<!--
function checkspace(checkstr) {
  var str = '';
  for(i = 0; i < checkstr.length; i++) {
    str = str + ' ';
  }
  return (str == checkstr);
}
function check()
{
  if(checkspace(document.admininfo.admin.value)) {
	document.admininfo.admin.focus();
    alert("管理员不能为空！");
	return false;
  }
  if(checkspace(document.admininfo.password.value)) {
	document.admininfo.password.focus();
    alert("密码不能为空！");
	return false;
  }
	document.admininfo.submit();
  }
//-->
</script> 