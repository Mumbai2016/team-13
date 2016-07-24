<html>
  <head>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <?php
require_once('mysqli_connect.php');
$query = "SELECT gender,uid FROM user";
$response = mysql_query($query);
//echo $response;
//while($row = mysql_fetch_array($response)){
 
//echo '<tr><td align="left">' . 
//$row['gender'] . '</td><td align="left">' . 
//$row['uid'] . '</td>';
 
//echo '</tr>';
//}
$m='M';$f='F';
$query = "SELECT COUNT(uid), milestone from user where gender='F' GROUP BY milestone";
$response = mysql_query($query);
//echo $response;
//while($row = mysql_fetch_array($response)){
 
//echo '<tr><td align="left">' . 
//$row['COUNT(uid)'] . '</td><td align="left">' . 
//$row['milestone'] . '</td>';
 
//echo '</tr>';
//}
//echo '<br>';
$query = "SELECT COUNT(uid), milestone from user where gender='F' GROUP BY milestone";
$response = mysql_query($query);
//echo $response;

// while($row = mysql_fetch_array($response)){
 
// echo '<tr><td align="left">' . 
// $row['COUNT(uid)'] . '</td><td align="left">' . 
// $row['milestone'] . '</td>';
 
// echo '</tr>';
// }


$d='dataTable';
echo "<table id=".$d."> 
<tr>
<th>COUNT(uid)</th>
<th>MILESTONE STAGE</th>
</tr>";
$query = "SELECT COUNT(uid), milestone from user where gender='M' GROUP BY milestone";
$response = mysql_query($query);
//echo $response;
while($row = mysql_fetch_array($response)) {
    echo "<tr>";
    echo "<td>" . $row['COUNT(uid)'] . "</td>";
    echo "<td>" . $row['milestone'] . "</td>";
  
    echo "</tr>";
}
echo "</table>";
    ?>

    <!--Load the AJAX API-->
  
    <script type="text/javascript">

//alert(document.getElementById('dataTable').rows[3].cells[1].innerHTML);
var tableArr = [];
for(var i=1;i<dataTable.rows.length;i++)
{
tableArr.push({C:document.getElementById('dataTable').rows[i].cells[0].innerHTML,M:document.getElementById('dataTable').rows[i].cells[1]});
}
//alert(tableArr.toString());


      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.

function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}




      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'milestone');
        data.addColumn('number', 'COUNT(uid)');
       for (var i = tableArr.length - 1; i >= 0; i--) {
  data.addRows([[(tableArr[i].M),parseInt(tableArr[i].C)]]);
};
   

        // Set chart options
        var options = {'title':'BLUE: Basic Education,Red: Proffesional Education,Orange: Employed,- Independent FOR FEAMLES',
                       'width':500,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

      
      }
    </script>


  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>