<?php 
ob_start();
include 'db_conn.php';?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Myinfo.css"/>
        <title>Your Details!!</title>
        <h1><font size="18">FACULTY DETAILS</font><br/></h1>
    </head>
    <body>
        <table border="1" align="center">
           
            <th>Teacher Name</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Email</th>
            <th>Contact Details</th>
            <th>Education Qualification</th>
            <th>Password</th>
<?php
    
    $sql="SELECT * FROM teachers" ;
    $result=mysql_query($sql) or die(mysql_error());
    while($row = mysql_fetch_array($result)){
        echo "<form action='' method='POST'>";
        echo "<tr><td>$row[2]</td>"."<td>$row[3]</td>"."<td>$row[4]</td>"."<td>$row[5]</td>"."<td>$row[6]</td>"."<td>$row[7]</td>"."<td>$row[8]</td></tr>";
        echo "</form>";
    }

  ?>          
        </table>
    </body>
</html>











