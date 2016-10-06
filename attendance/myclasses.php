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
            <table border='10' bgcolor='MistyRose  '>
                <body link="red">
                    <style type="text/css">
                        body {
                            background: url(myclasses.jpg);
                            background-size: 100% 120%;
                        }
                    </style>
                <tr>
                    <td><h1><font color='blue'><b>ROUTINE INFORMATION SYSTEM</b></font></h1></td>
                </tr>
            </table>
            <br>

            <table border='10' bgcolor='MistyRose  '>

                <td width='250'><b><select name="sel1">
                            <option><b>Select Category</b></option> color='MistyRose  '
                            <option value="Day">DAY</option>
                            <option value="Sem">SEMESTER</option>
                        </select></td> 
                <td width='250'><b><select name="sel2">
                            <option >Select Day</option>
                            <option value="MONDAY">MONDAY</option>
                            <option value="TUESDAY">TUESDAY</option>
                            <option value="WEDNESDAY">WEDNESDAY</option>
                            <option value="THURSDAY">THURSDAY</option>
                            <option value="FRIDAY">FRIDAY</option>
                        </select></td>
                <td width='250'><b><select name="sel3">

                            <option >Select Semester</option>
                            <option value="4TH">4TH</option>
                            <option value="6TH">6TH</option>
                            <option value="8TH">8TH</option>
                        </select></td>

                <td><input type="submit" name="sbmt">&nbsp&nbsp&nbsp&nbsp<a href='tprofile.php'>BACK</a>

                </td>

            </table>

        </form>


        <?php
        include 'db_conn.php';
        if (isset($_REQUEST['sbmt'])) {
            $opt = $_REQUEST['sel1'];
            if ($opt == "Day") {
                $uid = $_SESSION['id'];
                $day = $_REQUEST['sel2'];
                $q = mysql_query("select Initials from teachers where Teacher_ID='$uid'") or die(mysql_error());
                $result = mysql_fetch_array($q);
                $init = $result[0];
                $q1 = mysql_query("select * from routine where Day='$day' and (Period_1 like '%$init%' or Period_2 like '%$init%' or Period_3 like '%$init%' or Period_4 like '%$init%' or Period_5 like '%$init%' or Period_6 like '%$init%' or Period_7 like '%$init%' or Period_8 like '%$init%')") or die(mysql_error());
                $rws = mysql_fetch_array($q1);
                if ($rws != FALSE)
                    $error = 0;
                else
                    $error = 1;


                echo "<center><table border='1'>";
                if ($error == 0) {
                    echo "<tr bgcolor='yellow'><th>Day</th><th>Sem</th><th>Period 1 (09:20-10:15)</th><th>Period 2 <br>(10:15-11:10)</th><th>Period 3 <br>(11:10-12:05)</th><th>Period 4 <br>(12:05-13:00)</th><th> RECESS (13:00-13:55)</th><th><center>Period 5 <br> (13:55-14:50)</center><th>Period 6 <br>(14:50-15:45)</th><th>Period 7 <br>(15:45-16:40)</th><th>Period 8<br> (16:40-17:35)</th></tr>";

                    $q2 = mysql_query("select Day,Sem,Period_1 from routine where Day='$day' and Period_1 like '%$init%'");
                    while ($rows2 = mysql_fetch_array($q2)) {
                        $day = $rows2['Day'];
                        $sem = $rows2['Sem'];
                        $Period_1 = $rows2['Period_1'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>$Period_1</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td></tr>";
                    }

                    $q3 = mysql_query("select Day,Sem,Period_2 from routine where Day='$day' and Period_2 like '%$init%'");
                    while ($rows3 = mysql_fetch_array($q3)) {
                        $day = $rows3['Day'];
                        $sem = $rows3['Sem'];
                        $Period_2 = $rows3['Period_2'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>$Period_2</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td></tr>";
                    }

                    $q4 = mysql_query("select Day,Sem,Period_3 from routine where Day='$day' and Period_3 like '%$init%'");
                    while ($rows4 = mysql_fetch_array($q4)) {
                        $day = $rows4['Day'];
                        $sem = $rows4['Sem'];
                        $Period_3 = $rows4['Period_3'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>------</td>" . "<td>$Period_3</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td></tr>";
                    }

                    $q5 = mysql_query("select Day,Sem,Period_4 from routine where Day='$day' and Period_4 like '%$init%'");
                    while ($rows5 = mysql_fetch_array($q5)) {
                        $day = $rows5['Day'];
                        $sem = $rows5['Sem'];
                        $Period_4 = $rows5['Period_4'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>$Period_4</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td></tr>";
                    }

                    $q7 = mysql_query("select Day,Sem,Period_5 from routine where Day='$day' and Period_5 like '%$init%'");
                    while ($rows7 = mysql_fetch_array($q7)) {
                        $day = $rows7['Day'];
                        $sem = $rows7['Sem'];
                        $Period_5 = $rows7['Period_5'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>$Period_5</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td></tr>";
                    }

                    $q8 = mysql_query("select Day,Sem,Period_6 from routine where Day='$day' and Period_6 like '%$init%'");
                    while ($rows8 = mysql_fetch_array($q8)) {
                        $day = $rows8['Day'];
                        $sem = $rows8['Sem'];
                        $Period_6 = $rows8['Period_6'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>$Period_6</td>" . "<td>------</td>" . "<td>------</td></tr>";
                    }

                    $q9 = mysql_query("select Day,Sem,Period_7 from routine where Day='$day' and Period_7 like '%$init%'");
                    while ($rows9 = mysql_fetch_array($q9)) {
                        $day = $rows9['Day'];
                        $sem = $rows9['Sem'];
                        $Period_7 = $rows9['Period_7'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>$Period_7</td>" . "<td>------</td></tr>";
                    }

                    $q10 = mysql_query("select Day,Sem,Period_8 from routine where Day='$day' and Period_8 like '%$init%'");
                    while ($rows10 = mysql_fetch_array($q10)) {
                        $day = $rows10['Day'];
                        $sem = $rows10['Sem'];
                        $Period_8 = $rows10['Period_8'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>$Period_8</td></tr>";
                    }
                }
                if ($error == 1)
                    echo "No Schedule to display";
            }




            if ($opt == "Sem") {
                $uid = $_SESSION['id'];
                $q = mysql_query("select Initials from teachers where Teacher_ID='$uid'") or die(mysql_error());
                $result = mysql_fetch_array($q);
                $init = $result[0];
                $sem = $_REQUEST['sel3'];
                $que1 = mysql_query("select * from routine where Sem='$sem' and (Period_1 like '%$init%' or Period_2 like '%$init%' or Period_3 like '%$init%' or Period_4 like '%$init%' or Period_5 like '%$init%' or Period_6 like '%$init%' or Period_7 like '%$init%' or Period_8 like '%$init%')") or die(mysql_error());
                $rws1 = mysql_fetch_array($que1);
                if ($rws1 != FALSE)
                    $error = 0;
                else
                    $error = 1;

                echo "<center><table border='1'>";
                if ($error == 0) {
                    echo "<tr bgcolor='yellow'><th>Day</th><th>Sem</th><th>Period 1 (09:20-10:15)</th><th>Period 2 <br>(10:15-11:10)</th><th>Period 3 <br>(11:10-12:05)</th><th>Period 4 <br>(12:05-13:00)</th><th> RECESS (13:00-13:55)</th><th><center>Period 5 <br> (13:55-14:50)</center><th>Period 6 <br>(14:50-15:45)</th><th>Period 7 <br>(15:45-16:40)</th><th>Period 8<br> (16:40-17:35)</th></tr>";

                    $q2 = mysql_query("select Day,Sem,Period_1 from routine where Sem='$sem' and Period_1 like '%$init%'");
                    while ($rows2 = mysql_fetch_array($q2)) {
                        $day = $rows2['Day'];
                        $sem = $rows2['Sem'];
                        $Period_1 = $rows2['Period_1'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>$Period_1</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td></tr>";
                    }

                    $q3 = mysql_query("select Day,Sem,Period_2 from routine where Sem='$sem' and Period_2 like '%$init%'");
                    while ($rows3 = mysql_fetch_array($q3)) {
                        $day = $rows3['Day'];
                        $sem = $rows3['Sem'];
                        $Period_2 = $rows3['Period_2'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>$Period_2</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td></tr>";
                    }

                    $q4 = mysql_query("select Day,Sem,Period_3 from routine where Sem='$sem' and Period_3 like '%$init%'");
                    while ($rows4 = mysql_fetch_array($q4)) {
                        $day = $rows4['Day'];
                        $sem = $rows4['Sem'];
                        $Period_3 = $rows4['Period_3'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>------</td>" . "<td>$Period_3</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td></tr>";
                    }

                    $q5 = mysql_query("select Day,Sem,Period_4 from routine where Sem='$sem' and Period_4 like '%$init%'");
                    while ($rows5 = mysql_fetch_array($q5)) {
                        $day = $rows5['Day'];
                        $sem = $rows5['Sem'];
                        $Period_4 = $rows5['Period_4'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>$Period_4</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td></tr>";
                    }

                    $q7 = mysql_query("select Day,Sem,Period_5 from routine where Sem='$sem' and Period_5 like '%$init%'");
                    while ($rows7 = mysql_fetch_array($q7)) {
                        $day = $rows7['Day'];
                        $sem = $rows7['Sem'];
                        $Period_5 = $rows7['Period_5'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>$Period_5</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td></tr>";
                    }

                    $q8 = mysql_query("select Day,Sem,Period_6 from routine where Sem='$sem' and Period_6 like '%$init%'");
                    while ($rows8 = mysql_fetch_array($q8)) {
                        $day = $rows8['Day'];
                        $sem = $rows8['Sem'];
                        $Period_6 = $rows8['Period_6'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>$Period_6</td>" . "<td>------</td>" . "<td>------</td></tr>";
                    }

                    $q9 = mysql_query("select Day,Sem,Period_7 from routine where Sem='$sem' and Period_7 like '%$init%'");
                    while ($rows9 = mysql_fetch_array($q9)) {
                        $day = $rows9['Day'];
                        $sem = $rows9['Sem'];
                        $Period_7 = $rows9['Period_7'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>$Period_7</td>" . "<td>------</td></tr>";
                    }

                    $q10 = mysql_query("select Day,Sem,Period_8 from routine where Sem='$sem' and Period_8 like '%$init%'");
                    while ($rows10 = mysql_fetch_array($q10)) {
                        $day = $rows10['Day'];
                        $sem = $rows10['Sem'];
                        $Period_8 = $rows10['Period_8'];
                        echo "<tr bgcolor='MistyRose  '><td>$day</td>" . "<td>$sem</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>------</td>" . "<td>$Period_8</td></tr>";
                    }
                    echo"</center>";
                }

                if ($error == 1)
                    echo "No Schedule to display!";
            }
        }
        ?>
    </body>
</html>