<?php
ob_start();
include 'db_conn.php';
if (!isset($_SESSION['login']))
    header('Location:start.php');
?>
<html>
    <body>
    <center>
        <form method='POST' action=''>
            <table border='10' bgcolor='Chartreuse  '>
                <tr>
                    <td><h1><font color='blue'><b>ROUTINE INFORMATION SYSTEM</b></font></h1></td>
                </tr>
            </table>
            <br>

            <table border='10' bgcolor='Chartreuse'>

                <td width='250'><b><select name="sel1">
                            <option value=" ">Select Day</option>
                            <option value="MONDAY">MONDAY</option>
                            <option value="TUESDAY">TUESDAY</option>
                            <option value="WEDNESDAY">WEDNESDAY</option>
                            <option value="THURSDAY">THURSDAY</option>
                            <option value="FRIDAY">FRIDAY</option>
                        </select></td>
                <td width='250'><b><select name="sel2">

                            <option value=" ">Select Semester</option>
                            <option value="4TH">4TH</option>
                            <option value="6TH">6TH</option>
                            <option value="8TH">8TH</option>
                        </select>
                </td>


                <td><input type="submit" name="sbmt">&nbsp&nbsp&nbsp&nbsp<a href='adminmain.php'>BACK</a>

                </td>

            </table>

        </form>


        <?php
        include 'db_conn.php';
        if (isset($_REQUEST['sbmt'])) {
            $uid = $_SESSION['id'];
            $day = $_REQUEST['sel1'];
            $semester = $_REQUEST['sel2'];
            if($day != NULL && $semester == " "){
            $q1 = mysql_query("select * from routine where Day='$day'") or die(mysql_error());
            $rws = mysql_fetch_array($q1);
            if ($rws != FALSE)
                $error = 0;
            else
                $error = 1;
           
            echo "<center><table border='1'>";
            if ($error == 0)
                echo "<tr bgcolor='yellow'><th>Day</th><th>Sem</th><th>Period 1 (09:20-10:15)</th><th>Period 2 <br>(10:15-11:10)</th><th>Period 3 <br>(11:10-12:05)</th><th>Period 4 <br>(12:05-13:00)</th><th> RECESS (13:00-13:55)</th><th><center>Period 5 <br> (13:55-14:50)</center><th>Period 6 <br>(14:50-15:45)</th><th>Period 7 <br>(15:45-16:40)</th><th>Period 8<br> (16:40-17:35)</th></tr>";

            $q2 = mysql_query("select * from routine where Day='$day'") or die(mysql_error());
            while ($rows = mysql_fetch_array($q2)) {
                $day = $rows['Day'];
                $sem = $rows['Sem'];
                $Period_1 = $rows['Period_1'];
                $Period_2 = $rows['Period_2'];
                $Period_3 = $rows['Period_3'];
                $Period_4 = $rows['Period_4'];
                $rec = $rows['RECESS'];
                $Period_5 = $rows['Period_5'];
                $Period_6 = $rows['Period_6'];
                $Period_7 = $rows['Period_7'];
                $Period_8 = $rows['Period_8'];
                echo "<tr bgcolor='Chartreuse  '><td>$day</td>" . "<td>$sem</td>" . "<td>$Period_1</td>" . "<td>$Period_2</td>" . "<td>$Period_3</td>" . "<td>$Period_4</td>" . "<td>$rec</td>" . "<td>$Period_5</td>" . "<td>$Period_6</td>" . "<td>$Period_7</td>" . "<td>$Period_8</td></tr>";
            }

            if ($error == 1)
                echo "No Schedule to display!";
            }


            //semester part
            if($semester != NULL && $day == " "){
            $q3 = mysql_query("select * from routine where Sem='$semester'") or die(mysql_error());
            $rws1 = mysql_fetch_array($q3);
            if ($rws1 != FALSE)
                $error = 0;
            else
                $error = 1;

            echo "<center><table border='1'>";
            if ($error == 0)
                echo "<tr bgcolor='yellow'><th>Day</th><th>Sem</th><th>Period 1 (09:20-10:15)</th><th>Period 2 <br>(10:15-11:10)</th><th>Period 3 <br>(11:10-12:05)</th><th>Period 4 <br>(12:05-13:00)</th><th> RECESS (13:00-13:55)</th><th><center>Period 5 <br> (13:55-14:50)</center><th>Period 6 <br>(14:50-15:45)</th><th>Period 7 <br>(15:45-16:40)</th><th>Period 8<br> (16:40-17:35)</th></tr>";

            $q4 = mysql_query("select * from routine where Sem='$semester'") or die(mysql_error());
            while ($rows1 = mysql_fetch_array($q4)) {
                $day = $rows1['Day'];
                $sem = $rows1['Sem'];
                $Period_1 = $rows1['Period_1'];
                $Period_2 = $rows1['Period_2'];
                $Period_3 = $rows1['Period_3'];
                $Period_4 = $rows1['Period_4'];
                $rec = $rows1['RECESS'];
                $Period_5 = $rows1['Period_5'];
                $Period_6 = $rows1['Period_6'];
                $Period_7 = $rows1['Period_7'];
                $Period_8 = $rows1['Period_8'];
                echo "<tr bgcolor='Chartreuse  '><td>$day</td>" . "<td>$sem</td>" . "<td>$Period_1</td>" . "<td>$Period_2</td>" . "<td>$Period_3</td>" . "<td>$Period_4</td>" . "<td>$rec</td>" . "<td>$Period_5</td>" . "<td>$Period_6</td>" . "<td>$Period_7</td>" . "<td>$Period_8</td></tr>";
            }

            if ($error == 1)
                echo "No Schedule to display!";
            }
        }
        ?>
    </body>
</html>
<html>
    <body>
    <body link="red">
        <style type="text/css">
            body {
                background: url(quickschedule.jpg);
                background-size: 100% 100%;
            }
        </style>

    </body>
</html>