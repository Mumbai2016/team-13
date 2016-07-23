<html>
  <head>
      
    <?php
require_once('C:/xampp/htdocs/charts/mysqli_connect.php');
$query = "select COUNT(uid) from user where age<=15 GROUP BY milestone";
$response = mysql_query($query);
echo $response;
while($row = mysql_fetch_array($response)){
 
echo '<tr><td align="left">' . 
$row['COUNT(UID)'] . '</td><td align="left">' . 
$row['milestone'] . '</td>';
 
echo '</tr>';
}

    ?>

    


  </head>

  <body>
  </body>
</html>