<? include "conn.php";?>
<?
$admin=mysql_real_escape_string($HTTP_POST_VARS["admin"]);
$password=mysql_real_escape_string($HTTP_POST_VARS["password"]);
$password=md5($password);
 session_register("session_login");
 $HTTP_SESSION_VARS['session_login']="false";
$sql="select * from admin where uname ='$admin' and upassword = '$password' ";
$result =mysql_query($sql);
$numberOfRows = MYSQL_NUM_ROWS($result);
if ($numberOfRows==0)
 { 
  echo("<script language='javascript'>");
  echo("alert('用户名或密码不对无法登录');");
  echo("location.href='javascript:history.go(-1)';");
  echo("</script>");
  exit(); 

 }
else 
 {
 session_register("session_admin");
 session_register("session_password");
 $HTTP_SESSION_VARS['session_admin']=$admin;
 $HTTP_SESSION_VARS['session_password']=$password;
 $HTTP_SESSION_VARS['session_login']="ture";
 echo "<meta http-equiv=refresh content=0;url=wys_list.php>";
 }
?>