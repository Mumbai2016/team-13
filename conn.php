<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'test';
$dbConn = mysql_connect ($dbHost, $dbUser, $dbPass) 
or 
die ('MySQL connect failed. ' . mysql_error());
mysql_select_db($dbName)  or 
die('Cannot select database. ' . mysql_error());
echo 'connected';
?>