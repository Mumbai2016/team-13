<?php
$con=mysqli_connect("localhost","root","satish11091995","dreamd");//this function returns connection on success and its parameter is(ipaddress,user,password,database name)
		if(mysqli_connect_errno())//to check whether php is connect to database or not.
		{
		echo "error connecting database";
		die();//it is good practice to write die because if user is not connected to database subsequent code is not executed.

		}
function insert_user($u_data)//what is u_data
{	global $con;//way of accessing global variable
	$query="INSERT INTO `USERS`(`firstname`, `lastname`, `password`, `gender`, `aboutuser`, `age`) VALUES ('".$u_data["u_name"]."',
	'".$u_data["u_lname"]."',
	'".$u_data["u_pass"]."',
	'".$u_data["u_gender"]."',
	'".$u_data["u_about"]."',
	'".$u_data["u_age"]."');";
	
	
	if(mysqli_query($con,$query))	
	{
		echo "successful";
		return true;
	}
	else
	{	echo "unsuccessful";
		return false;
	}
}
function update_user($id1,$u_data)
{
	global $con;//way of accessing global variable
	$query="UPDATE `USERS` SET `firstname`='".$u_data["u_name"]."',
	`lastname`='".$u_data["u_lname"]."',
	`password`='".$u_data["u_pass"]."',
	`gender`='".$u_data["u_gender"]."',
	`aboutuser`='".$u_data["u_about"]."',
	`age`='".$u_data["u_age"]."' 
	 WHERE `id`=".$id1.";";
	 if(mysqli_query($con,$query))
		{
		   	return true;
		}
		else
		{
			return false;
		}


}
function getid($u_data)
{
	global $con;
	$query="SELECT id from `user` where email='".$u_data["u_name"]."' and 
	password='".$u_data["u_pass"]."';";
	$result=mysqli_query($con,$query);
		
		if($result)
		{	
		   	$row=mysqli_fetch_array($result);// we get id matching witht the firstname and password
		   	
		   /*echo "<pre>";	
                         print_r($row);
                         echo "</pre>";
                         echo $row[0];
                         echo $row["id"];*/
                         $id=$row[0];
                    return $id;

		}
		else
		{
		return -1;
		}
 
}
function getrow($id1)
{
global $con;
$query="select * from USERS where id='".$id1."'";
$result=mysqli_query($con,$query);
if($result)
	{
	$row=mysqli_fetch_array($result);
	return $row;
	}
	else
	{
	return false;
	}
}
function deleteuser($id1)
{
	global $con;//way of accessing global variable
	$query="DELETE FROM `USERS` WHERE `id`=".$id1.";";
	 if(mysqli_query($con,$query))
		{
		   	return true;
		}
		else
		{
			return false;
		}


}
?>
