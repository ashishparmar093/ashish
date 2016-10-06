<?php 
ob_start();
include 'db_conn.php';?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Myinfo.css"/>
        <title>Student Details!!</title>
        <h1 align="center"><font size="60">STUDENT DETAILS</font><br/></h1>
    </head>
    <body>
        <div class="wrapper"> <! -- wrapper start -->


       
       <h2><marquee bgcolor="grey" font-weight="bold">STUDENT DETAILS UPDATION ..</marquee></h2>
    <body>
        <table border="1" align="center">
             
            <th>&nbsp;&nbsp;&nbsp;NAME OF STUDENTS&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;ROLL NO&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;BRANCH&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;YEAR&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;Update Details&nbsp;&nbsp;&nbsp;</th>
             
<?php
    
    $sql="SELECT * FROM student_info" ;
    $result=mysql_query($sql) or die(mysql_error());
    while($row = mysql_fetch_array($result)){
        echo "<form action='' method='POST'>";
       echo "<tr align='center'><td>$row[0]</td>"."<td>$row[2]</td>"."<td>$row[3]</td>"."<td>$row[4]</td>"."<td><input type='submit' value='update' $row[5]></td></tr>";
        echo "</form>";
    }

  ?>          
        </table>
    </body>
</html>











