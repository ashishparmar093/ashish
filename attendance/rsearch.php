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
            <table border='8' bgcolor='SteelBlue'><h1 ><font color='BLACK'><b>ROUTINE INFORMATION SYSTEM</b></font></h1><br><a href='rindex.php'>ADD</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='rupdate.php'>UPDATE</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='rsearch.php'>SEARCH</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='adminmain.php'>BACK</a><br><br>
                <body link="red">
                    <style type="text/css">
                        body {
                            background: url(routine.jpg);
                            background-size: 100% 100%;
                        }
                    </style>
                <tr>
                    <td>
                <center><table bgcolor='Thistle'>
                        <tr><td width='250'><b>Select Any One:<select name="sel">
                                        <option>Select Category</option>
                                        <option value="Day">DAY</option>
                                        <option value="Sem">SEMESTER</option>
                                    </select></td>
                            <td><input type="text" name="inp" placeholder="ENTER INPUT"><input type="submit" name="sbmt">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="se1" value="AllSearch">

                            </td></tr>
                    </table>
                </center>

                </td>
                </tr></table>
        </form>
    </center>

    <?php
    include 'db_conn.php';

    if (isset($_REQUEST['sbmt'])) {
        $sel = $_REQUEST['sel'];
        $d = $_REQUEST['inp'];

        if ($sel == "Day") {
            $q1 = mysql_query("select * from routine where Day='$d'") or die(mysql_error());
            $rws = mysql_fetch_array($q1);
            if ($rws != FALSE)
                $error = 0;
            else
                $error = 1;

            echo "<center><table border='1'>";
            if ($error == 0)
                echo "<tr bgcolor='yellow'><th>Day</th><th>Sem</th><th>Period 1 (09:20-10:15)</th><th>Period 2 <br>(10:15-11:10)</th><th>Period 3 <br>(11:10-12:05)</th><th>Period 4 <br>(12:05-13:00)</th><th> RECESS (13:00-13:55)</th><th><center>Period 5 <br> (13:55-14:50)</center><th>Period 6 <br>(14:50-15:45)</th><th>Period 7 <br>(15:45-16:40)</th><th>Period 8<br> (16:40-17:35)</th></tr>";

            $q2 = mysql_query("select * from routine where Day='$d'") or die(mysql_error());
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
                echo "<tr bgcolor='plum'><td>$day</td>" . "<td>$sem</td>" . "<td>$Period_1</td>" . "<td>$Period_2</td>" . "<td>$Period_3</td>" . "<td>$Period_4</td>" . "<td>$rec</td>" . "<td>$Period_5</td>" . "<td>$Period_6</td>" . "<td>$Period_7</td>" . "<td>$Period_8</td></tr>";
            }

            if ($error == 1)
                echo "No Schedule to display!";
        }

        /* semester */
        if ($sel == "Sem") {
            $q3 = mysql_query("select * from routine where Sem='$d'") or die(mysql_error());
            $rws1 = mysql_fetch_array($q3);
            if ($rws1 != FALSE)
                $error = 0;
            else
                $error = 1;

            echo "<center><table border='1'>";
            if ($error == 0)
                echo "<tr bgcolor='yellow'><th>Day</th><th>Sem</th><th>Period 1</th><th>Period 2</th><th>Period 3</th><th>Period 4</th><th>RECESS</th><th><center>Period 5</center><th>Period 6</th><th>Period 7</th><th>Period 8</th></tr>";

            $q4 = mysql_query("select * from routine where Sem='$d'") or die(mysql_error());
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
                echo "<tr bgcolor='yellow'><th>Day</th><th>Sem</th><th>Period 1 (09:20-10:15)</th><th>Period 2 <br>(10:15-11:10)</th><th>Period 3 <br>(11:10-12:05)</th><th>Period 4 <br>(12:05-13:00)</th><th> RECESS (13:00-13:55)</th><th><center>Period 5 <br> (13:55-14:50)</center><th>Period 6 <br>(14:50-15:45)</th><th>Period 7 <br>(15:45-16:40)</th><th>Period 8<br> (16:40-17:35)</th></tr>";


                echo"</center>";
            }
            if ($error == 1)
                echo "No Schedule to display!";
        }
    }

//Allsearch part
    if (isset($_REQUEST['se1'])) {
        $q5 = mysql_query("select * from routine") or die(mysql_error());
        $result = mysql_fetch_array($q5);
        if ($result != FALSE)
            $error = 0;
        else
            $error = 1;

        echo "<center><table border='1'>";
        if ($error == 0)
            echo "<tr bgcolor='yellow'><th>Day</th><th>Sem</th><th>Period 1 (09:20-10:15)</th><th>Period 2 <br>(10:15-11:10)</th><th>Period 3 <br>(11:10-12:05)</th><th>Period 4 <br>(12:05-13:00)</th><th> RECESS (13:00-13:55)</th><th><center>Period 5 <br> (13:55-14:50)</center><th>Period 6 <br>(14:50-15:45)</th><th>Period 7 <br>(15:45-16:40)</th><th>Period 8<br> (16:40-17:35)</th></tr>";

        $q6 = mysql_query("select * from routine") or die(mysql_error());
        while ($result1 = mysql_fetch_array($q6)) {
            $day = $result1['Day'];
            $sem = $result1['Sem'];
            $Period_1 = $result1['Period_1'];
            $Period_2 = $result1['Period_2'];
            $Period_3 = $result1['Period_3'];
            $Period_4 = $result1['Period_4'];
            $rec = $result1['RECESS'];
            $Period_5 = $result1['Period_5'];
            $Period_6 = $result1['Period_6'];
            $Period_7 = $result1['Period_7'];
            $Period_8 = $result1['Period_8'];
            echo "<tr bgcolor='plum'><td>$day</td>" . "<td>$sem</td>" . "<td>$Period_1</td>" . "<td>$Period_2</td>" . "<td>$Period_3</td>" . "<td>$Period_4</td>" . "<td>$rec</td>" . "<td>$Period_5</td>" . "<td>$Period_6</td>" . "<td>$Period_7</td>" . "<td>$Period_8</td></tr>";
            echo "</center>";
        }
        if ($error == 1)
            echo "No routine to display!";
    }
    ?>
</body>
</html>
<html>
    <body>
        <h1>
            <font color="white">
            <b>
            </b>
            <marquee>WELCOME TO ROUTINE INFORMATION SYSTEM..</marquee>
            </font>
        </h1>
    </body>
</html> 