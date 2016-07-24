<!DOCTYPE html>
<html>
<head>
<head>
<meta http-equiv="refresh" content="60" />
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


  
</head>
<body>
<?php

require_once('mysqli_connect.php');
$query = "SELECT user_phone FROM user where fname=";
$response = mysql_query($query);
?>
<h1 align="center">Dashboard!</h1>
						

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<iframe align="center"src="charts.php" height="550" width="550">
    </iframe>
&nbsp;&nbsp;
<iframe align="center" src="charts2.php" height="550" width="550"></iframe>
<p></p>

	<form align="center" method="post" name="form1" action="sendansms.php"  >
								<input type="text" width="200px"Name="t1" placeholder="Enter name to send automatic message" >
								<input type="submit">
							</form>
 
<b align="center"><a href="search.php">GO TO USER DETAILS</a></b>



</body>
</html>
