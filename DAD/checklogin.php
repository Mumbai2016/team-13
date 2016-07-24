<?php

//$host="localhost"; 		// Host name 
//$username=""; 		// Mysql username 
//$password="";		 // Mysql password 
//$db_name="test"; 		// Database name 
$tbl_name="user"; 		// Table name 
// Connect to server and select databse.

//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
//mysql_select_db($db_name)or die("cannot select DB");

// username and password sent from form 

include 'conn.php';

$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 


$sql2="SELECT category FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$result2=mysql_query($sql2);
$row=mysql_fetch_array($result2);
$cat=$row['0'];

if($cat==2){
	


$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row

$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword"); 

//header("location:mainindex.php");
echo "succesful";
}
else {
echo "Wrong Username or Password";
}
}
else{
	echo "You are not Admin";
}
?>
