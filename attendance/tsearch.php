<?php
ob_start();
include 'db_conn.php';
if(!isset($_SESSION['login']))
header('Location:start.php');
?>
<?php
echo"<center>";
echo"<form method='POST' action='' name='reg' onSubmit='return validate()'>";
echo"<table border='8' bgcolor='skyblue'><h1 ><font color='white'><b>TEACHER INFORMATION MANAGEMENT SYSTEM</b></font></h1><br><a href='tindex.php'>ADD</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='tupdate.php'>UPDATE</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='tdelete.php'>DELETE</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='tsearch.php'>SEARCH</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='adminmain.php'>BACK</a><br><br></center>";
echo"<tr><td>
<center><table bgcolor='skyblue'>
<tr><td width='250'><b>Select Any One:<select name='sel'><option>Select Categary</option>";
echo"<option value='Teacher_Name'>TEACHER NAME</option>";
echo"<option value='Teacher_ID'>TEACHER ID</option>
<td><input type='text' name='ty' placeholder='ENTER INPUT'><input type='submit' name='se' value='search'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='submit' name='se1' value='AllSearch'>";
echo"</tr></td></table>";
echo"</td></tr></table></center></form>
</body></html>";
require'db_conn.php';
$sel=$_POST['sel'];
$ty=$_POST['ty'];
if(isset($_POST['se']))
{
if($sel=="Teacher_Name")
{
$q1=mysql_query("select* from teachers where Teacher_Name='$ty'");
$rws=mysql_fetch_array($q1);
if($rws != FALSE)
$error=0;
else
$error=1;
echo"<center><table border='1'>";
if($error==0)
echo"<tr bgcolor='yellow'><td><center>Teacher_ID</center><td><center>Teacher_Name</center><td><center>Department</center><td><center>Designation</center><td><center>Email</center><td><center>Contact_Details</center><td><center>Education_Qualification</center></td></tr>";
$q2=mysql_query("select* from teachers where Teacher_Name='$ty'");
while($rows=mysql_fetch_array($q2))
{
$tid=$rows['Teacher_ID'];
$fn=$rows['Teacher_Name'];
$dept=$rows['Department'];
$design=$rows['Designation'];
$email=$rows['Email'];
$contact=$rows['Contact_Details'];
$eduqual=$rows['Education_Qualification'];
echo"<tr bgcolor='skyblue'><td><center>$tid</center><td><center>$fn</center><td><center>$dept</center><td><center>$design</center><td><center>$email</center><td><center>$contact</center><td><center>$eduqual</center></td></tr>";
}
echo"</center>";
if($error == 1)
echo "No Record Found";
}
if($sel=="Teacher_ID")
{
$q3=mysql_query("select* from teachers where Teacher_ID='$ty'");
$rws1=mysql_fetch_array($q3);
if($rws1 != FALSE)
$error=0;
else
$error=1;
echo"<center><table border='1'>";
if($error==0)
echo"<tr bgcolor='yellow'><td><center>Teacher_ID</center><td><center>Teacher_Name</center><td><center>Department</center><td><center>Designation</center><td><center>Email</center><td><center>Contact_Details</center><td><center>Education_Qualification</center></td></tr>";
$q4=mysql_query("select* from teachers where Teacher_ID='$ty'");
$rows=mysql_fetch_array($q3);
while($rows=mysql_fetch_array($q4))
{
$tid=$rows['Teacher_ID'];
$fn=$rows['Teacher_Name'];
$dept=$rows['Department'];
$design=$rows['Designation'];
$email=$rows['Email'];
$contact=$rows['Contact_Details'];
$eduqual=$rows['Education_Qualification'];
echo"<tr bgcolor='skyblue'><td><center>$tid</center><td><center>$fn</center><td><center>$dept</center><td><center>$design</center><td><center>$email</center><td><center>$contact</center><td><center>$eduqual</center></td></tr>";
}
echo"</center>";
if($error == 1)
echo "No Record Found";
}
}
if(isset($_POST['se1']))
{
$q3=mysql_query("select* from teachers");
echo"<center><table border='1'>";
echo"<tr bgcolor='yellow'><td><center>Teacher_ID</center><td><center>Teacher_Name</center><td><center>Department</center><td><center>Designation</center><td><center>Email</center><td><center>Contact_Details</center><td><center>Education_Qualification</center></td></tr>";
while($rows=mysql_fetch_array($q3,MYSQL_ASSOC))
{
$tid=$rows['Teacher_ID'];
$fn=$rows['Teacher_Name'];
$dept=$rows['Department'];
$design=$rows['Designation'];
$email=$rows['Email'];
$contact=$rows['Contact_Details'];
$eduqual=$rows['Education_Qualification'];
echo"<tr bgcolor='skyblue'><td><center>$tid</center><td><center>$fn</center><td><center>$dept</center><td><center>$design</center><td><center>$email</center><td><center>$contact</center><td><center>$eduqual</center></td></tr>";
}
echo"</center>";
}
?>
<html>
  <body>
    <body link="red">
      <style type="text/css">
        body {
          background: url(teacher.jpg);
          background-size: 100% 100%;
        }
      </style>
    </body>
    </html>
