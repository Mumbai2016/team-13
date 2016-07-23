<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'satish11091995';
$dbName = 'dreamd';
$dbConn = mysql_connect ($dbHost, $dbUser, $dbPass) 
or 
die ('MySQL connect failed. ' . mysql_error());
mysql_select_db($dbName)  or 
die('Cannot select database. ' . mysql_error());
?>