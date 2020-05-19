<?php
$connect = mysql_connect('localhost','xxxxx','xxxxxx')
or die('could not connect:' . mysql_error());
$db='dict';
mysql_select_db($db) or die('could not select database ('.$db.') because of :'. mysql_error());
?>
