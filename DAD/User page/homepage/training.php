<?php
session_start();
$tbl_name="user"; 		// Table name 
echo $_SESSION['uid'];
include 'conn.php';

$sql="INSERT INTO training_user VALUES(".$_POST['coursevals'].",".$_SESSION['uid'].")";

if(!mysql_query($sql)) 
{
	echo "You have already enrolled";
}

else
{
	header("location:userpage.php");
}


?>