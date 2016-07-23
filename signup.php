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

$fname=$_POST['fname']; 
$date=$_POST["Trackingdate"];
$lname=$_POST['lname']; 
$pass=$_POST['Password'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$dob=$_POST['Dateofbirth'];
$gender=$_POST['gender'];
$u_phone=$_POST['U_Phone']; 
$f_phone=$_POST['F_Phone'];
$m_phone=$_POST['M_Phone'];
$o_phone=$_POST['O_Phone'];
$edu=$_POST['Edu'];
$cou=$_POST['cou'];


$sql="INSERT INTO `user`  VALUES (default,'$fname','$lname','$dob',2,'$gender','$email','$u_phone','$o_phone','$edu','1','$date',null,'$f_phone','$m_phone','$cou',null,'$pass')";
//(`fname`, `lname`, `dob`, `gender`, `email`, `user_phone`, `other_phone`, `edu_details`,`tracking start`, `father_phone`, `mother_phone`, `course`, `password`)
//echo $sql;
$result=mysql_query($sql);
// Mysql_num_row is counting table row
//$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
//echo $count;
//if(mysql_query($dbConn,$sql)){
// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword"); 
header("location:update.php");
//echo "s";
//}
//else {
//echo "Wrong Username or Password";
//}*/
?>