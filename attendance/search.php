<?php
ob_start();
include 'db_conn.php';
if (!isset($_SESSION['login']))
header('Location:start.php');
?>
<?php
echo"<center>";
echo"<form method='POST' action='' name='reg' onSubmit='return validate()'>";
echo"<table border='5' bgcolor='SkyBlue'> <h1 ><font color='black'><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href='index.php'>ADD</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='update.php'>UPDATE</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='delete.php'>DELETE</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='search.php'>SEARCH</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='adminmain.php'>BACK</a><br><br></center>";
echo"<tr><td>
<center><table bgcolor='Thistle '>
<tr><td width='250'><b>Select Any One:<select name='sel'><option>Select Category</option>";
echo"<option value='Student_Name'>STUDENT NAME</option>";
echo"<option value='rn'>ROLL NO</option>";
echo"<option value='branch'>BRANCH</option>";
echo"<option value='semester'>SEMESTER</option>";
echo"<option value='address'>ADDRESS</option>
<td><input type='text' name='ty'>&nbsp&nbsp<input type='submit' name='se' value='search'>&nbsp&nbsp&nbsp&nbsp<input type='submit' name='se1' value='AllSearch'>";
echo"</tr></td></table>";
echo"</td></tr></table></center></form>
</body></html>";
require'db_conn.php';
$sel = $_POST['sel'];
$ty = $_POST['ty'];
if (isset($_POST['se'])) {
if ($sel == "Student_Name") {
$q1 = mysql_query("select* from student_info where Student_Name='$ty'");
$rows = mysql_fetch_array($q1);
if ($rows != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>STUDENT NAME</center><td><center>SESSION</center><td><center>ROLL NO</center><td><center>BRANCH</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";
$q2 = mysql_query("select* from student_info where Student_Name='$ty'");
while ($rws = mysql_fetch_array($q2)) {
$sn = $rws['Student_Name'];
$ses = $rws['session'];
$rn = $rws['rn'];
$br = $rws['branch'];
$year = $rws['year'];
$sem = $rws['semester'];
$dob = $rws['dob'];
$add = $rws['address'];
echo"<tr bgcolor='SkyBlue'><td><center>$sn</center><td><center>$ses</center><td><center>$rn</center><td><center>$br</center><td><center>$year</center><td><center>$sem</center><td><center>$dob<td><center>$add</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to print";
}
//roll num part
if ($sel == "rn") {
$q3 = mysql_query("select* from student_info where rn='$ty'");
$row1 = mysql_fetch_array($q3);
if ($row1 != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>STUDENT NAME</center><td><center>SESSION</center><td><center>ROLL NO</center><td><center>BRANCH</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";
$q4 = mysql_query("select* from student_info where rn='$ty'");
while ($row2 = mysql_fetch_array($q4)) {
$sn = $row2['Student_Name'];
$ses = $row2['session'];
$rn = $row2['rn'];
$br = $row2['branch'];
$year = $row2['year'];
$sem = $row2['semester'];
$dob = $row2['dob'];
$add = $row2['address'];
echo"<tr bgcolor='SkyBlue'><td><center>$sn</center><td><center>$ses</center><td><center>$rn</center><td><center>$br</center><td><center>$year</center><td><center>$sem</center><td><center>$dob<td><center>$add</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to print";
}
//branch part
if ($sel == "branch") {
$q5 = mysql_query("select* from student_info where branch='$ty'");
$row3 = mysql_fetch_array($q5);
if ($row3 != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>STUDENT NAME</center><td><center>SESSION</center><td><center>ROLL NO</center><td><center>BRANCH</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";
$q6 = mysql_query("select* from student_info where branch='$ty'");
while ($row4 = mysql_fetch_array($q6)) {
$sn = $row4['Student_Name'];
$ses = $row4['session'];
$rn = $row4['rn'];
$br = $row4['branch'];
$year = $row4['year'];
$sem = $row4['semester'];
$dob = $row4['dob'];
$add = $row4['address'];
echo"<tr bgcolor='SkyBlue'><td><center>$sn</center><td><center>$ses</center><td><center>$rn</center><td><center>$br</center><td><center>$year</center><td><center>$sem</center><td><center>$dob<td><center>$add</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to print";
}
//semester part
if ($sel == "semester") {
$q7 = mysql_query("select* from student_info where semester='$ty'");
$row5 = mysql_fetch_array($q7);
if ($row5 != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>STUDENT NAME</center><td><center>SESSION</center><td><center>ROLL NO</center><td><center>BRANCH</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";
$q8 = mysql_query("select* from student_info where semester='$ty'");
while ($row6 = mysql_fetch_array($q8)) {
$sn = $row6['Student_Name'];
$ses = $row6['session'];
$rn = $row6['rn'];
$br = $row6['branch'];
$year = $row6['year'];
$sem = $row6['semester'];
$dob = $row6['dob'];
$add = $row6['address'];
echo"<tr bgcolor='Thistle '><td><center>$sn</center><td><center>$ses</center><td><center>$rn</center><td><center>$br</center><td><center>$year</center><td><center>$sem</center><td><center>$dob<td><center>$add</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to print";
}
//address part
if ($sel == "address") {
$q9 = mysql_query("select* from student_info where address='$ty'");
$row7 = mysql_fetch_array($q9);
if ($row7 != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>STUDENT NAME</center><td><center>SESSION</center><td><center>ROLL NO</center><td><center>BRANCH</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";
$q10 = mysql_query("select* from student_info where address='$ty'");
while ($row8 = mysql_fetch_array($q10)) {
$sn = $rows['Student_Name'];
$ses = $row8['session'];
$rn = $row8['rn'];
$br = $row8['branch'];
$year = $row8['year'];
$sem = $row8['semester'];
$dob = $row8['dob'];
$add = $row8['address'];
echo"<tr bgcolor='SkyBlue'><td><center>$sn</center><td><center>$ses</center><td><center>$rn</center><td><center>$br</center><td><center>$year</center><td><center>$sem</center><td><center>$dob<td><center>$add</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to display";
}
}
if (isset($_POST['se1'])) {
$q11 = mysql_query("select* from student_info");
$row9 = mysql_fetch_array($q11);
if ($row9 != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>STUDENT NAME</center><td><center>SESSION</center><td><center>ROLL NO</center><td><center>BRANCH</center><td><center>YEAR</center><td><center>SEMESTER</center><td><center>DOB</center><td><center>ADDRESS</center></td></tr>";
$q12 = mysql_query("select* from student_info");
while ($row10 = mysql_fetch_array($q12)) {
$sn = $row10['Student_Name'];
$ses = $row10['session'];
$rn = $row10['rn'];
$br = $row10['branch'];
$year = $row10['year'];
$sem = $row10['semester'];
$dob = $row10['dob'];
$add = $row10['address'];
echo"<tr bgcolor='SkyBlue'><td><center>$sn</center><td><center>$ses</center><td><center>$rn</center><td><center>$br</center><td><center>$year</center><td><center>$sem</center><td><center>$dob<td><center>$add</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to print";
}
?>
<html>
  
  <body>
      <h1>
        <font color="Red">
       
        <marquee>
           
          </marquee>
        
        </font>
       </h1> 
     
    <style type="text/css">
    body {
    background: url(update.jpg);
    background-size: 100% 100%;
     }
    </style>
    </body>
</html>
