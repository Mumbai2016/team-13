<?php include 'conn.php';
session_start();

$tbl_name="user"; 

$sql="SELECT milestone FROM ".$tbl_name." WHERE uid= ".$_SESSION['uid'];

$result=mysql_query($sql);
$row=mysql_fetch_array($result);

$mil=$row['0'];
$mil=($mil+1)*25;

echo $mil;