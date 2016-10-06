<?php 
ob_start();
include 'db_conn.php';?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Myinfo.css"/>
        <title>Student Details!!</title>
        <h1><font size="60">STUDENT DETAILS</font><br/></h1>
    </head>
    <body>
        <div class="wrapper"> <! -- wrapper start -->

<div class="header"> 
    
    <h1 align="center">WELCOME</h1>
        </div>
       
       <h2><marquee bgcolor="grey" font-weight="bold">WELCOME TO STUDENT HOME PAGE..</marquee></h2>
    <body>
        <table border="1" align="center">
           
            <th>fname</th>
            <th>lname</th>
            <th>session</th>
            <th>rn</th>
            <th>branch</th>
            <th>year</th>
            <th>semester</th>
            <th>dob</th>
            <th>address</th>
<?php
    
    $sql="SELECT * FROM student_info" ;
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











