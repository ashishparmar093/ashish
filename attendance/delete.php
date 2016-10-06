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
      /*  function validate()
             {
             var tid=document.reg.tid.value;
             if(tid =='')
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
        background: url(update.jpg);
        background-size: 100% 100%;
      }
    </style>
    <h1 align="center">
      <font color="black">STUDENT INFORMATION SYSTEM
      </font>
    </h1>
    </h2>
  <center>
    <form method="POST" action="">
      <center>
        <table border="5" bgcolor="SkyBlue">
          <font color="white">
            <b>
              <br>
              <a href="index.php">ADD
              </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <a href="update.php">UPDATE
              </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <a href="delete.php">DELETE
              </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <a href="search.php">SEARCH
              </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <a href="adminmain.php" >BACK
                </font>
              </a>
            </b>
          <br>
          <br>
          </center>
        <tr>
          <td>ENTER STUDENT'S ROLL NUMBER:
          </td>
          <td>
            <input type="text" name="rn" required placeholder="ENTER STUDENT'S ROLL NUMBER" size="30"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
$rn = $_REQUEST['rn'];
if (isset($_REQUEST['submit'])) {
$del = "DELETE FROM student_info where rn ='$rn'";
$que=mysql_query($del) or die(mysql_error());
if($que)
echo "Record Successfully Deleted";
else
echo"Record not deleted";
}
?>
</font>
<h1 >
  <font color="Red">
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
</br>WELCOME TO STUDENT INFORMATION SYSTEM..
</marquee>
</font>
</h1>
</html> 
