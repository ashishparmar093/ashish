<?php
ob_start();
include 'db_conn.php';
if (!isset($_SESSION['login']))
header('Location:start.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml" >
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <script language="javascript">
      /* function validate()
             {
             var tid=document.reg.tid.value;
             if(tid ==='')
             {
             window.alert("Please Enter teacher's id");
             document.reg.tid.focus();
             return false;
             }
             } */
    </script>
  </head>
  <body link="red">
    <style type="text/css">
      body {
        background: url(teacher.jpg);
        background-size: 100% 100%;
      }
    </style>
    <center>
      <h1 align="center">
        <font color ="white">TEACHER INFORMATION MANAGEMENT SYSTEM
        </font>
      </h1>
      </h2>
    <form method="POST" action="">
      <table border="8" bgcolor="skyblue"> 
        <h1 >
          <font color="blue">
            <b>
            </b>
          </font>
        </h1>
        <br>
        <a href="tindex.php">ADD
        </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="tupdate.php">UPDATE
        </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="tdelete.php">DELETE
        </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="tsearch.php">SEARCH
        </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="adminmain.php">BACK
        </a>
        <br>
        <br>
        </center>
      <tr>
        <td>ENTER TEACHER'S ID:
        </td>
        <td>
          <input type="text" name="tid" required placeholder ="ENTER TEACHER'S ID"size="30"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </td>
      </tr>
      <td>&nbsp;
      </td>
      <td>
        <input type="submit" name="submit" value="DELETE" required/>
      </td>
      </tr>
    </table>
  </form>
</body>
</html>
<?php
include 'db_conn.php';
$tid = $_REQUEST['tid'];
if (isset($_REQUEST['submit'])) {
$sql = "SELECT * FROM teachers where Teacher_ID='$tid'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
if ($row != FALSE)
$error = 0;
else
$error = 1;
if ($error == 1)
echo "<font color='white'>No record found</font>";
else {
$del = "DELETE FROM teachers where Teacher_ID ='$tid'";
mysql_query($del) or die(mysql_error());
echo "Record deleted successfully";
}
}
?>
</font>
<h1 >
  <font color="white">
    <b>
    </b>
    <marquee>
      </br>
    </br>
  </br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>WELCOME TO TEACHER INFORMATION SYSTEM..
</marquee>
</font>
</h1>
</html> 
