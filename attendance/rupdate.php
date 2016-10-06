<?php
ob_start();
include 'db_conn.php';
if (!isset($_SESSION['login']))
    header('Location:start.php');
?>
<html>
    <head><title>CLASS ROUTINE</title>
        <script language="javascript">
            function validate()
            {
                var Day = document.reg.day.value;
                var semester = document.reg.sem.value;
                var branch = document.reg.branch.value;
                var Period_1 = document.reg.p1.value;
                var Period_2 = document.reg.p2.value;
                var Period_3 = document.reg.p3.value;
                var Period_4 = document.reg.p4.value;
                var Period_5 = document.reg.p5.value;
                var Period_6 = document.reg.p6.value;
                var Period_7 = document.reg.p7.value;
                var Period_8 = document.reg.p8.value;

                if (Day === '')
                {
                    window.alert("Please Enter Day!");
                    document.reg.day.focus();
                    return false;

                }
                if (semester === '')
                {
                    window.alert("Please Select Semester!");
                    document.reg.semester.focus();
                    return false;

                }
                if (branch === '')
                {
                    window.alert("Please Select Branch!");
                    document.reg.branch.focus();
                    return false;
                }
                if (period_1 === '')
                {
                    window.alert("Period_1(09:20-10:15)!");
                    document.reg.p1.focus();
                    return false;

                }
                if (period_2 === '')
                {
                    window.alert("Period_2(10:15-11:10)!");
                    document.reg.p2.focus();
                    return false;

                }
                if (period_3 === '')
                {
                    window.alert("Period_3(11:10-12:05)!");
                    document.reg.p3.focus();
                    return false;

                }
                if (period_4 === '')
                {
                    window.alert("Period_4(12:05-13:00)!");
                    document.reg.p4.focus();
                    return false;

                }
                if (recess === '')
                {
                    window.alert("Recess(13:00-13:55)!");
                    document.reg.rec.focus();
                    return false;
                }
                if (period_5 === '')
                {
                    window.alert("Period_5(13:55-14:50)!");
                    document.reg.p5.focus();
                    return false;

                }

                if (period_6 === '')
                {
                    window.alert("Period_6(14:50-15:45)!");
                    document.reg.p6.focus();
                    return false;
                }
                if (period_7 === '')
                {
                    window.alert("Period_7(15:45-16:40)!");
                    document.reg.p7.focus();
                    return false;
                }
                if (period_8 === '')
                {
                    window.alert("Period_8(16:40-17:35)!");
                    document.reg.p8.focus();
                    return false;
                }
            }
        </script>
    </head>


    <body>
    <center>
        <form method="POST" action="" >
            <center><table border="8" bgcolor="SteelBlue"> <h1 ><font color="black"><b>ROUTINE INFORMATION SYSTEM</b></font></h1><br><a href="rindex.php">ADD</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="rupdate.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="rsearch.php">SEARCH</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="adminmain.php">BACK</a><br><br></center>


                    <tr>
                        <td>DAY:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td>
                            <select name="day">
                                <option >Select Day</option>
                                <option value="MONDAY">MONDAY</option>
                                <option value="TUESDAY">TUESDAY</option>
                                <option value="WEDNESDAY">WEDNESDAY</option>
                                <option value="THURSDAY">THURSDAY</option>
                                <option value="FRIDAY">FRIDAY</option>
                            </select>
                    </tr>
                    <tr>
                    <tr>
                        <td>SEMESTER:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td>
                            <select name="sem">
                                <option >Select Semester</option>
                                <option value="4TH">4TH</option>
                                <option value="6TH">6TH</option>
                                <option value="8TH">8TH</option>
                            </select>
                    </tr>
                    <tr>
                        <td>BRANCH &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td>
                            <select name="branch">
                                <option >select branch</option>
                                <option value="CSE">CSE</option>
                                <option value="ECE">ECE</option>
                                <option value="BT">BT</option>
                                <option value="MECHNICAL">MECHANICAL</option>
                                <option value="EEE">EEE</option>
                            </select>
                        </td>
                    <tr>
                        <td>PERIOD 1:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="text" name="p1" placeholder="PERIOD 1" /></td>
                    </tr>
                    <tr>
                        <td>PERIOD 2:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="text" name="p2" placeholder="PERIOD 2" /></td>
                    </tr>
                    <tr>
                        <td>PERIOD 3:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="text" name="p3" placeholder="PERIOD 3" /></td>
                    </tr>
                    <tr>
                        <td>PERIOD 4:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="text" name="p4" placeholder="PERIOD 4"/></td>
                    </tr>
                    <tr>
                        <td>RECESS:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="text" name="rec" placeholder="RECESS"/></td>
                    </tr>

                    <tr>
                        <td>PERIOD 5:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="text" name="p5" placeholder="PERIOD 5"/></td>
                    </tr>
                    <tr>
                        <td>PERIOD 6:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="text" name="p6" placeholder="PERIOD 6"/></td>
                    </tr>
                    <tr>
                        <td>PERIOD 7:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="text" name="p7" placeholder="PERIOD 7" /></td>
                    </tr>
                    <tr>
                        <td>PERIOD 8:-&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                        <td><input type="text" name="p8" placeholder="PERIOD 8"/></td>
                    </tr>
                    <tr>

                        <td>&nbsp;</td>
                        <td><input type="submit" name="submit" value="UPDATE" /></td>
                    </tr>

                </table>
        </form>
    </body>
</html>

<?php
include 'db_conn.php';
$day = $_REQUEST['day'];
$P1 = $_REQUEST['p1'];
$P2 = $_REQUEST['p2'];
$P3 = $_REQUEST['p3'];
$P4 = $_REQUEST['p4'];
$rec = $_REQUEST['rec'];
$P5 = $_REQUEST['p5'];
$P6 = $_REQUEST['p6'];
$P7 = $_REQUEST['p7'];
$P8 = $_REQUEST['p8'];
$sem = $_REQUEST['sem'];
if (isset($_REQUEST['submit'])) {

    $q1 = mysql_query("UPDATE routine SET Period_1='$P1',Period_2='$P2',Period_3='$P3',Period_4='$P4',RECESS='$rec',Period_5='$P5',Period_6='$P6',Period_7='$P7',Period_8='$P8' where Day='$day' and Sem='$sem'");
    if ($q1) {
        echo "Record Successfully Updated";
    } else {
        echo"Not Update Your Record";
    }
}
?>

<html>
    <body>
        <h1 >
  <font color="white">
    <b>
    </b>
    <marquee>
      </br>
    </br>
</br>WELCOME TO ROUTINE INFORMATION SYSTEM..
</marquee>
</font>
</h1>
</html> 
    <body link="red">
        <style type="text/css">
            body {
                background: url(routine.jpg);
                background-size: 100% 100%;
            }
        </style>

    </body>
</html>