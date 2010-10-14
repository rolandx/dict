<?php
$connect = mysql_connect('localhost','名称,'密码')
or die('could not connect:' . mysql_error());
$db='数据库名';
mysql_select_db($db) or die('could not select database ('.$db.') because of :'. mysql_error());
?>