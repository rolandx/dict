<?php
$connect = mysql_connect('localhost','����,'����')
or die('could not connect:' . mysql_error());
$db='���ݿ���';
mysql_select_db($db) or die('could not select database ('.$db.') because of :'. mysql_error());
?>