<?php
ob_start();
include 'db_conn.php';
$str = $_REQUEST['sub'];
$d = $_REQUEST['day'];
$strlen = strlen($str);
$sbject = "";
for( $j = 0; $j <= $strlen; $j++ ) {
    $char = substr( $str, $j, 1 );
    if($char != "(")
        $sbject .= $char;
    else
        break;
}

?>

<html>
    <head>
        <link rel="stylesheet" type="text/stylesheet" href="viewbuk.css">
        <title>Take Attendance</title>
        <center><h1><font size="12">LIST OF STUDENTS</font></h1><font color="red">
         <?php
         $date = date("Y/m/d");
         $day = date("l");
         echo "<center>";
         echo "<strong>";
         echo date("d/m/Y");
         echo "---";
         echo date("l");
         echo "</strong>";
         echo "</center>";
        
         ?>
    </head>
    <body>
        <form method="POST" action="">
        <center>
        <table border="1">
            <th>ROLL NUMBER</th>
            <th>STUDENT NAME</th>
            <th>ATTENDANCE STATUS</th>

<?php
    $sq = "SELECT Stream,Sem FROM subject_table WHERE Subject_Code='$sbject'";
    $res1 = mysql_query($sq) or die(mysql_error());
    $rws = mysql_fetch_array($res1);
    $sql="SELECT rn,Student_Name FROM student_info WHERE branch = '$rws[0]' and semester='$rws[1]'" ;
    $result=mysql_query($sql) or die(mysql_error());
    $queries = array();
    $i = 0;
    while($row = mysql_fetch_array($result)){
        $fcheck = "A";
        echo "<tr><td><input type='text' name='rn' value='$row[0]' readonly></td>"."<td><input type='text' name='sname' value='$row[1]' readonly></td>"."<td><input type='checkbox' name='check$i' value='A'></td></tr>";
        $roll = $row[0];
        $name = $row[1];
        if(isset($_POST['check'.$i])) {
            $fcheck = "P";
        }
        $sql = "INSERT into $sbject VALUES('$roll','$name','$date','$fcheck')";
        array_push($queries,$sql);
        $i++;
    }
     
    $p = strcasecmp($d,$day);
    if($p != 0){
        header('location:noatt.php');
    }
    
    if(isset($_REQUEST['submit'])){
        foreach($queries as &$value){
                   $res = mysql_query($value) or die(mysql_error()); 
        }
    }
   
    if(isset($_REQUEST['BACK'])){
        header('location:subject.php');
    }
?>
 
        </table>
        <input type='submit' name='submit' value='SUBMIT' >
        <input type='submit' name='BACK' value='BACK'>

 
        
        </center>
        </form>
    </body>
</html>

