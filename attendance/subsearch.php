<?php
ob_start();
include 'db_conn.php';
if (!isset($_SESSION['login']))
header('Location:start.php');
?>
<?php
echo"<center>";
echo"<form method='POST' action='' name='reg' onSubmit='return validate()'>";
echo"<table border='5' bgcolor='Snow'> <h1 ><font color='black'><b>SUBJECT DETAILS</b></font></h1><br><a href='subindex.php'>ADD</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='subupdate.php'>UPDATE</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='subsearch.php'>SEARCH</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='adminmain.php'>BACK</a><br><br></center>";
echo"<tr><td>
<center><table bgcolor='Snow'>
<tr><td width='250'><b>Select Any One:<select name='sel'><option>Select Category</option>";
echo"<option value='subcode'>SUBJECT CODE</option>";
echo"<option value='subname'>SUBJECT NAME</option>";
echo"<option value='year'>YEAR</option>";
echo"<option value='sem'>SEM</option>";
echo"<option value='stream'>STREAM</option>";
echo"<option value='ini'>INITIALS</option>
<td><input type='text' name='ty'>&nbsp&nbsp<input type='submit' name='se' value='search'>&nbsp&nbsp&nbsp&nbsp<input type='submit' name='se1' value='AllSearch'>";
echo"</tr></td></table>";
echo"</td></tr></table></center></form>
</body></html>";
require'db_conn.php';
$sel = $_POST['sel'];
$ty = $_POST['ty'];
if (isset($_POST['se'])) {
if ($sel == "subcode") {
$q1 = mysql_query("select* from subject_table where Subject_Code='$ty'");
$rows = mysql_fetch_array($q1);
if ($rows != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>SUBJECT CODE</center><td><center>SUBJECT NAME</center><td><center>YEAR</center><td><center>SEM</center><td><center>STREAM</center><td><center>INITIALS</center></td></tr>";
$q2 = mysql_query("select* from subject_table where Subject_Code='$ty'");
while ($rws = mysql_fetch_array($q2)) {
$subcode = $rws['Subject_Code'];
$subname = $rws['Subject_Name'];
$year = $rws['Year'];
$sem = $rws['Sem'];
$stream = $rws['Stream'];
$ini = $rws['Initials'];
echo"<tr bgcolor='skyblue'><td><center>$subcode</center><td><center>$subname</center><td><center>$year</center><td><center>$sem</center><td><center>$stream</center><td><center>$ini</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to print";
}
//sub name part
if ($sel == "subname") {
$q3 = mysql_query("select* from subject_table where Subject_Name='$ty'");
$row1 = mysql_fetch_array($q3);
if ($row1 != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>SUBJECT CODE</center><td><center>SUBJECT NAME</center><td><center>YEAR</center><td><center>SEM</center><td><center>STREAM</center><td><center>INITIALS</center></td></tr>";
$q4 = mysql_query("select * from subject_table where Subject_Name='$ty'");
while ($row2 = mysql_fetch_array($q4)) {
$subcode = $row2['Subject_Code'];
$subname = $row2['Subject_Name'];
$year = $row2['Year'];
$sem = $row2['Sem'];
$stream = $row2['Stream'];
$ini = $row2['Initials'];
echo"<tr bgcolor='skyblue'><td><center>$subcode</center><td><center>$subname</center><td><center>$year</center><td><center>$sem</center><td><center>$stream</center><td><center>$ini</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to print";
}
//year part
if ($sel == "year") {
$q5 = mysql_query("select* from subject_table where Year='$ty'");
$row3 = mysql_fetch_array($q5);
if ($row3 != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>SUBJECT CODE</center><td><center>SUBJECT NAME</center><td><center>YEAR</center><td><center>SEM</center><td><center>STREAM</center><td><center>INITIALS</center></td></tr>";
$q6 = mysql_query("select* from subject_table where Year='$ty'");
while ($row4 = mysql_fetch_array($q6)) {
$subcode = $row4['Subject_Code'];
$subname = $row4['Subject_Name'];
$year = $row4['Year'];
$sem = $row4['Sem'];
$stream = $row4['Stream'];
$ini = $row4['Initials'];
echo"<tr bgcolor='skyblue'><td><center>$subcode</center><td><center>$subname</center><td><center>$year</center><td><center>$sem</center><td><center>$stream</center><td><center>$ini</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to print";
}
//semester part
if ($sel == "sem") {
$q7 = mysql_query("select* from subject_table where Sem='$ty'");
$row5 = mysql_fetch_array($q7);
if ($row5 != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>SUBJECT CODE</center><td><center>SUBJECT NAME</center><td><center>YEAR</center><td><center>SEM</center><td><center>STREAM</center><td><center>INITIALS</center></td></tr>";
$q8 = mysql_query("select* from subject_table where Sem='$ty'");
while ($row6 = mysql_fetch_array($q8)) {
$subcode = $row6['Subject_Code'];
$subname = $row6['Subject_Name'];
$year = $row6['Year'];
$sem = $row6['Sem'];
$stream = $row6['Stream'];
$ini = $row6['Initials'];
echo"<tr bgcolor='skyblue'><td><center>$subcode</center><td><center>$subname</center><td><center>$year</center><td><center>$sem</center><td><center>$stream</center><td><center>$ini</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to print";
}
//stream part
if ($sel == "stream") {
$q9 = mysql_query("select * from subject_table where Stream='$ty'");
$row7 = mysql_fetch_array($q9);
if ($row7 != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>SUBJECT CODE</center><td><center>SUBJECT NAME</center><td><center>YEAR</center><td><center>SEM</center><td><center>STREAM</center><td><center>INITIALS</center></td></tr>";
$q10 = mysql_query("select* from student_info where address='$ty'");
while ($row8 = mysql_fetch_array($q10)) {
$subcode = $row8['Subject_Code'];
$subname = $row8['Subject_Name'];
$year = $row8['Year'];
$sem = $row8['Sem'];
$stream = $row8['Stream'];
$ini = $row8['Initials'];
echo"<tr bgcolor='skyblue'><td><center>$subcode</center><td><center>$subname</center><td><center>$year</center><td><center>$sem</center><td><center>$stream</center><td><center>$ini</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to display";
}
//initials part
if ($sel == "ini") {
$q7 = mysql_query("select* from subject_table where Initials='$ty'");
$row5 = mysql_fetch_array($q7);
if ($row5 != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>SUBJECT CODE</center><td><center>SUBJECT NAME</center><td><center>YEAR</center><td><center>SEM</center><td><center>STREAM</center><td><center>INITIALS</center></td></tr>";
$q8 = mysql_query("select* from subject_table where Initials='$ty'");
while ($row6 = mysql_fetch_array($q8)) {
$subcode = $row6['Subject_Code'];
$subname = $row6['Subject_Name'];
$year = $row6['Year'];
$sem = $row6['Sem'];
$stream = $row6['Stream'];
$ini = $row6['Initials'];
echo"<tr bgcolor='skyblue'><td><center>$subcode</center><td><center>$subname</center><td><center>$year</center><td><center>$sem</center><td><center>$stream</center><td><center>$ini</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to print";
}
}
if (isset($_POST['se1'])) {
$q11 = mysql_query("select * from subject_table");
$row9 = mysql_fetch_array($q11);
if ($row9 != FALSE)
$error = 0;
else
$error = 1;
echo"<center><table border='1'>";
if ($error == 0)
echo"<tr bgcolor='yellow'><td><center>SUBJECT CODE</center><td><center>SUBJECT NAME</center><td><center>YEAR</center><td><center>SEM</center><td><center>STREAM</center><td><center>INITIALS</center></td></tr>";
$q12 = mysql_query("select * from subject_table");
while ($row10 = mysql_fetch_array($q12)) {
$subcode = $row10['Subject_Code'];
$subname = $row10['Subject_Name'];
$year = $row10['Year'];
$sem = $row10['Sem'];
$stream = $row10['Stream'];
$ini = $row10['Initials'];
echo"<tr bgcolor='skyblue'><td><center>$subcode</center><td><center>$subname</center><td><center>$year</center><td><center>$sem</center><td><center>$stream</center><td><center>$ini</center></td></tr>";
}
echo"</center>";
if ($error == 1)
echo "Nothing to print";
}
?>
<html>
  <body>
    <body link="red">
      <h1 >
        <font color="BLACK">
          <b>
          </b>
          <marquee>
</marquee>
</font>
</font>
<style type="text/css">
  body {
    background: url(sub.jpg);
    background-size: 100% 100%;
  }
</style>
</body>
</html>
