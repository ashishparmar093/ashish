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
        <table border='10' bgcolor='silver'>
          <body link="red">
            <style type="text/css">
              body {
                background: url(viewatt.jpg);
                background-size: 100% 100%;
              }
            </style>
            <tr>
              <td>
                <h1>
                  <font color='blue'>
                    <b>ATTENDANCE INFORMATION SYSTEM
                    </b>
                  </font>
                </h1>
              </td>
            </tr>
            </table>
          <br>
          <table border='10' bgcolor='silver'>
            <tr>
            <tr>
              <td width='250'>
                <b>
                  <select name="sel">
                    <option>
                      <b>Select Category
                      </b>
                    </option> color='silver'
                    <option value="Month">MONTH
                    </option>
                    <option value="Date">DATE
                    </option>
                  </select>
                  </td> 
              <td width='250'>
                <b>
                  <select name="sel1">
                    <option value=" ">Select Month
                    </option>
                    <option value="01">January
                    </option>
                    <option value="02">February
                    </option>
                    <option value="03">March
                    </option>
                    <option value="04">April
                    </option>
                    <option value="05">May
                    </option>
                    <option value="06">June
                    </option>
                    <option value="07">July
                    </option>
                    <option value="08">August
                    </option>
                    <option value="09">September
                    </option>
                    <option value="10">October
                    </option>
                    <option value="11">November
                    </option>
                    <option value="12">December
                    </option>
                  </select>
                  </td>
              <td width='250'>
                <b>
                  <select name="sel2">
                    <option value="">Select Subject
                    </option>
                    <?php
include 'db_conn.php';
$uid = $_SESSION['id'];
$que1 = mysql_query("Select Initials from teachers where Teacher_ID='$uid'") or die(mysql_error());
$res1 = mysql_fetch_array($que1);
$init = $res1[0];
$que2 = mysql_query("select Subject_Code,Subject_Name from subject_table where Initials='$init'") or die(mysql_error());
while ($res2 = mysql_fetch_array($que2)) {
$code = $res2['Subject_Code'];
$sbject = $res2['Subject_Name'];
$fin = $code . "-" . $sbject;
echo "<option value='$code'>";
echo $fin;
echo "</option>";
}
?>
                  </select>
                  </td>
              <td>
                <strong>
                  <font size="4" align="center" color="red">Select Date:
                  </font>
                </strong>
                <br>
              </td>
              <td>
                <input type="Date" id="DATE" name="DATE" value="current date">
              </td>
              <td>
                <input type="submit" name="sbmt">&nbsp&nbsp&nbsp&nbsp
                <a href='tprofile.php'>BACK
                </a>
            </tr> 
            </td>
          </tr>
        </table>
    </center>
    </form>
  </center>
<?php
include 'db_conn.php';
if (isset($_REQUEST['sbmt'])) {
$sel = $_REQUEST['sel'];
$month = $_REQUEST['sel1'];
$sub = $_REQUEST['sel2'];
$date = $_REQUEST['DATE'];
if ($sel == "Date") {
$q1 = mysql_query("select * from $sub where Date='$date'") or die(mysql_error());
$rws = mysql_fetch_array($q1);
if ($rws != FALSE)
$error = 0;
else
$error = 1;
echo "<center><table border='1'>";
if ($error == 0)
echo "<tr bgcolor='yellow'><th>Roll No.</th><th>Name</th><th>Attendance Status</th></tr>";
$q2 = mysql_query("select * from $sub where Date='$date'") or die(mysql_error());
while ($rows = mysql_fetch_array($q2)) {
$roll = $rows['RollNo'];
$name = $rows['Stu_Name'];
$status = $rows['Att_Status'];
echo "<tr bgcolor='silver'><td>$roll</td>" . "<td>$name</td>" . "<td>$status</td>" . "</tr>";
}
if ($error == 1)
echo "No Schedule to display!";
}
/* search by months */
if ($sel == "Month") {
$month = $_REQUEST['sel1'];
switch ($month) {
case 01:
$mon = "January";
break;
case 02:
$mon = "February";
break;
case 03:
$mon = "March";
break;
case 04:
$mon = "April";
break;
case 05:
$mon = "May";
break;
case 06:
$mon = "June";
break;
case 07:
$mon = "July";
break;
case 08:
$mon = "August";
break;
case 09:
$mon = "September";
break;
case 10:
$mon = "October";
break;
case 11:
$mon = "November";
break;
case 12:
$mon = "December";
break;
default:
echo "Error in Month selection";
}
$q3 = mysql_query("select Stream from subject_table where Subject_Code='$sub'") or die(mysql_error());
$rws1 = mysql_fetch_array($q3);
if ($rws1 != FALSE)
$error = 0;
else
$error = 1;
echo "<center><table border='1'>";
if ($error == 0)
echo "<tr bgcolor='yellow'><th>Roll No.</th><th>Name</th><th>Attendance for $mon</th><th>Total Attendance</th>";
$q4 = mysql_query("select Stream from subject_table where Subject_Code='$sub'") or die(mysql_error());
$rws2 = mysql_fetch_array($q4);
$q5 = mysql_query("Select Student_Name,rn from student_info where branch='$rws2[0]'");
while ($ans = mysql_fetch_array($q5)) {
$sname = $ans[0];
$rn = $ans[1];
$countSqlMonth = "SELECT COUNT(*) FROM $sub WHERE RollNo='$rn' AND Att_Status LIKE 'P' AND Date LIKE '%-$month-%'";
$countSqlTotal = "SELECT COUNT(*) FROM $sub WHERE RollNo='$rn' AND Att_Status LIKE 'P'";
$mysql_query_month = mysql_query($countSqlMonth);
$mysql_query_total = mysql_query($countSqlTotal);
if ($mysql_query_month && $mysql_query_total) {
$rowMonthWise = mysql_fetch_array($mysql_query_month);
$rowAllTotal = mysql_fetch_array($mysql_query_total);
}
echo "<tr bgcolor='silver'><td>$rn</td>" . "<td>$sname</td>" . "<td>$rowMonthWise[0]</td>" . "<td>$rowAllTotal[0]</td>";
echo "</center>";
}
if ($error == 1)
echo "No Schedule to display!";
}
}
?>
</body>
</html>
