
<?php


$u_name="";
$u_gender="";
$u_pass="";


$u_name=$_POST["Username"];
$u_pass=$_POST["Password"];

$sql="SELECT * FROM $tabl"
/*
$u_data=array(
		"u_name"=>$u_name,
	
		"u_pass"=>$u_pass
		);
		

$con=mysqli_connect("localhost","root","satish11091995","dreamd");//this function returns connection on success and its parameter is(ipaddress,user,password,database name)
		if(mysqli_connect_errno())//to check whether php is connect to database or not.
		{
		echo "error connecting database";
		die();//it is good practice to write die because if user is not connected to database subsequent code is not executed.

		}


		function getid($u_data)
{
	global $con;
	$query="SELECT id from `user` where email='".$u_data["u_name"]."' and password='".$u_data["u_pass"]."';";
	$result=mysqli_query($con,$query);
	echo $result;
		
		if($result)
		{	
		   	$row=mysqli_fetch_array($result);// we get id matching witht the firstname and password
		   	
		   echo "<pre>";	
                         print_r($row);
                         echo "</pre>";
                         echo $row[0];
                         echo $row["id"];
                         $id=$row[0];
                    return $id;

		}
		else
		{
		return -1;
		}
 
}

		$id=getid($u_data);
		echo $id;

		if($id>0)
		{
		setcookie("id",$id,time()+3600);//we get id using cookies
		Header("Location:update.php");//we get id from post
		echo "succ".$id;
		}
		else
		{
		echo "unsuccessful";
		
		}		 
*/
?>