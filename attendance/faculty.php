<?php 
ob_start();
include 'db_conn.php';?>
<html>
    <head >
        <link rel="stylesheet" type="text/css" href="Myinfo.css"/>
        <title>TEACHER'S Details!!</title>
        <h1 align="center"><font size="18" >TEACHER'S DETAILS UPDATION</font><br/></h1>
    </head>
    <body>
           
       <h2><marquee bgcolor="grey" font-weight="bold">TEACHER'S DETAILS UPDATION ..</marquee></h2>
    <body>
        <table border="1" align="center">
           
            
            <th>&nbsp;&nbsp;&nbsp;Teacher's Id&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;Teacher Name&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;Initial&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;Department&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;Designation&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;Update Details&nbsp;&nbsp;&nbsp;</th>
     
<?php
    
    $sql="SELECT * FROM teachers" ;
    $result=mysql_query($sql) or die(mysql_error());
    while($row = mysql_fetch_array($result)){
        echo "<form action='' method='POST' >";
        echo "<tr align='center'><td>$row[0]</td>"."<td>$row[1]</td>"."<td>$row[2]</td>"."<td>$row[3]</td>"."<td>$row[4]</td>"."<td><input type='submit' value='update' $row[5]></td></tr>";
        echo "</form>";
    }

  ?>          
        </table>
    </body>
</html>











