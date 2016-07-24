
<!DOCTYPE html>
<html>



<!-- Head -->
<head>

<title>Dream a Dream</title>

<style>
.yotab
{
padding-left: 100px;
margin-left: 100px;
}

tr:nth-child(even) {
    background-color: #000000;
}

table
{
	padding: 8px;
}
	.yo
	{
	border: 3px solid #fff;
	padding:10px;
	margin:5px;
    color: #FFF;
    font-family: 'Lato', sans-serif;
    font-size: 15px;
    
}
.yotr{
	    color: #73879C;
    background: #2A3F54;
    font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
    font-size: 13px;
    font-weight: 400;
    line-height: 1.471;
}

.yo1
	{
	margin-bottom: 25px;
    color: #FFF;
    font-family: 'Lato', sans-serif;
    font-size: 15px;
    
}

</style>

</head>
<!-- Head -->




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
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'satish11091995';
$dbName = 'dreamd';
$dbConn = mysql_connect ($dbHost, $dbUser, $dbPass);
mysql_select_db($dbName);
$nm="";

$nm=$_GET['nm'];

$qu="select * from user where fname like '".$nm."%'";


$res=mysql_query($qu);

echo "<table class=yotab>";

while($row=mysql_fetch_array($res))
{

	echo "<tr class=yotr>";
	
	echo "<td class=yo>";
	echo $row['uid'];
	echo "</td>";

	echo "<td class=yo>";
	echo $row['fname'];
	echo "</td>";

	echo "<td class=yo>";
	echo $row['lname'];
	echo "</td>";

	echo "<td class=yo>";
	echo $row['dob'];
	echo "</td>"
	;
	echo "<td class=yo>";
	echo $row['age'];
	echo "</td>";
	
	echo "<td class=yo>";
	echo $row['gender'];
	echo "</td>";
	
	echo "<td class=yo>";
	echo $row['email'];
	echo "</td>";

echo "<td class=yo>";
	echo $row['user_phone'];
	echo "</td>";
	
	echo "<td class=yo>";
	echo $row['edu_details'];
	echo "</td>";
	
	
	echo "<td class=yo>";
	echo $row['tracking call'];
	echo "</td>";

	echo "<td class=yo>";
	echo $row['course'];
	echo "</td>";

	echo "<td class=yo>";
	echo $row['milestone'];
	echo "</td>";
	echo "</tr>";

	
	
}

echo "</table>";
?>