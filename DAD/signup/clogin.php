<?php
session_start();

$tbl_name="user"; 		// Table name 

include 'conn.php';
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$result=mysql_query($sql);


$sql2="SELECT uid FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$result2=mysql_query($sql2);
$row=mysql_fetch_array($result2);
$id=$row['0'];
$_SESSION['uid']=$id;

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword"); 
header("location:/DAD/User page/homepage/userpage.php");
}
else {
echo "Wrong Username or Password";
}
?>