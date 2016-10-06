<?php
echo"<center>";
 echo"<form method='POST' action='' name='reg'>";
echo"<table border='8' bgcolor='pink'><h1 ><font color='blue'><b>ROUTINE INFORMATION SYSTEM</b></font></h1><br><a href='rindex.php'>ADD</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='rupdate.php'>UPDATE</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='rsearch.php'>SEARCH</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href='adminmain.php'>BACK</a><br><br></center>";

echo"<tr><td>
<center><table bgcolor='pink'>
<tr><td width='250'><b>Select Any One:<select name='sel'><option>Select Category</option>";

  echo"<option value='Day'>DAY</option>";
  echo"<option value='Sem'>SEMESTER</option>
    <td><input type='text' name='ty' placeholder='ENTER INPUT'><input type='submit' name='se'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='submit' name='se1' value='AllSearch'></select>";
  echo"</tr></td></table>";
  echo"</td></tr></table></center></form>
</body></html>";
 include 'db_conn.php';
 
if(isset($_REQUEST['se']))
 {
    $sel=$_REQUEST['sel'];
    $d=$_REQUEST['ty'];
    
  if($sel=="Day")
  {
    $q1=mysql_query("select * from routine where Day='$d'") or die(mysql_error());
    $rows = mysql_fetch_array($q1);
    if($rows != FALSE)
        $error = 0;
    else 
        $error = 1;
    
    echo"<center><table border='1'>";
    if($error == 0)
        echo"<tr bgcolor='yellow'><td><center>Day</center><td><center>Sem</center><td><center>Period_1</center><td><center>Period_2</center><td><center>Period_3</center><td><center>Period_4</center><td><center>RECESS</center><td><center>Period_5</center><td><center>Period_6</center><td><center>Period_7</center><td><center>Period_8</center></td></tr>";

    while($rows=mysql_fetch_array($q1))
    {
        $day=$rows['Day'];
        $sem=$rows['Sem'];
        $Period_1=$rows['Period_1'];
        $Period_2=$rows['Period_2'];
        $Period_3=$rows['Period_3'];
        $Period_4=$rows['Period_4'];
        $rec=$rows['RECESS'];
        $Period_5=$rows['Period_5'];
        $Period_6=$rows['Period_6'];
        $Period_7=$rows['Period_7'];
        $Period_8=$rows['Period_8'];
        echo"<tr bgcolor='pink'><td><center>$day</center><td><center>$sem</center><td><center>$Period_1</center><td><center>$Period_2</center><td><center>$Period_3</center><td><center>$Period_4</center><td><center>$rec</center><td><center>$Period_5</center><td><center>$Period_6</center><td><center>$Period_7</center><td><center>$Period_8</center></td></tr>";
     }
     
    if($error == 1)
        echo "No Schedule to display!";
    echo"</center>";
    }

//semester part

if($sel=="Sem")
{
$q2=mysql_query("select * from routine where Sem='$d'") or die(mysql_error());
$rows1 = mysql_fetch_array($q2);
if($rows1 != FALSE)
    $err = 0;
else 
    $err = 1;
echo"<center><table border='1'>";
if($err == 0)
  echo"<tr bgcolor='yellow'><td><center>Day</center><td><center>Sem</center><td><center>Period_1</center><td><center>Period_2</center><td><center>Period_3</center><td><center>Period_4</center><td><center>RECESS</center><td><center>Period_5</center><td><center>Period_6</center><td><center>Period_7</center><td><center>Period_8</center></td></tr>";

  while($rows1=mysql_fetch_array($q2))
{
        $day=$rows1['Day'];
        $sem=$rows1['Sem'];
        $Period_1=$rows1['Period_1'];
        $Period_2=$rows1['Period_2'];
        $Period_3=$rows1['Period_3'];
        $Period_4=$rows1['Period_4'];
        $rec=$rows1['RECESS'];
        $Period_5=$rows1['Period_5'];
        $Period_6=$rows1['Period_6'];
        $Period_7=$rows1['Period_7'];
        $Period_8=$rows1['Period_8'];
echo"<tr bgcolor='pink'><td><center>$day</center><td><center>$sem</center><td><center>$Period_1</center><td><center>$Period_2</center><td><center>$Period_3</center><td><center>$Period_4</center><td><center>$rec</center><td><center>$Period_5</center><td><center>$Period_6</center><td><center>$Period_7</center><td><center>$Period_8</center></td></tr>";
}
if($err == 1)
    echo "No Schedule to display!";
 echo"</center>";
} 
}
?>
