<?php
ob_start();
include 'db_conn.php';
if (!isset($_SESSION['login']))
header('Location:start.php');
?> 
<html>
  <head>
    <script language="javascript">
      function validate()
      {
        var sname = document.reg.sn.value;
        var session = document.reg.session.value;
        var rn = document.reg.rn.value;
        var branch = document.reg.branch.value;
        var year = document.reg.year.value;
        var semester = document.reg.semester.value;
        var dob = document.reg.dob.value;
        var address = document.reg.address.value;
        if (sname === '')
        {
          window.alert("Please Enter sname!");
          document.reg.sn.focus();
          return false;
        }
        if (session === '')
        {
          window.alert("Please Select Session!");
          document.reg.session.focus();
          return false;
        }
        if (rn === '')
        {
          window.alert("Enter Roll No!");
          document.reg.rn.focus();
          return false;
        }
        if (branch === '')
        {
          window.alert("Please Select Branch!");
          document.reg.branch.focus();
          return false;
        }
        if (year === '')
        {
          window.alert("Please Select Year!");
          document.reg.year.focus();
          return false;
        }
        if (semester === '')
        {
          window.alert("Please Select Semester!");
          document.reg.semester.focus();
          return false;
        }
        if (dob === '')
        {
          window.alert("Please Select Day!");
          document.reg.dob.focus();
          return false;
        }
        if (address === '')
        {
          window.alert("Please Select Address!");
          document.reg.address.focus();
          return false;
        }
      }
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
    <form method="REQUEST"action="" name="reg" onSubmit="return validate()">
      <center>
        <table border="8" bgcolor="SkyBlue">
          <font color="red">
            <a href="index.php">ADD
            </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
        <td>
          <strong>STUDENT NAME:
          </strong>
        </td>
        <td>
          <input type="text" name="sn" required placeholder="STUDENT NAME" size="35"/>
        </td>
      </tr>
      <tr>
        <td>
          <strong>SESSION:
          </strong>
        </td>
        <td>
          <select name="session" reqired>
            <option >Select Session
            </option>
            <option value="2008">2008
            </option>
            <option value="2009">2009
            </option>
            <option value="2010">2010
            </option>
            <option value="2011">2011
            </option>
            <option value="2012">2012
            </option>
            <option value="2013">2013
            </option>
            <option value="2014">2014
            </option>
            <option value="2015">2015
            </option>
            <option value="2016">2016
            </option>
          </select>
      </tr>
      <tr>
        <td>
          <strong>ROLL NO:
          </strong>
        </td>
        <td>
          <input type="text" name="rn" required placeholder="ROLL NO" size="20"/>
        </td>
      </tr>
      <tr>
        <td>
          <strong>BRANCH:
          </strong>
        </td>
        <td>
          <select name="branch" required>
            <option >Select Branch
            </option>
            <option value="CSE">CSE
            </option>
            <option value="ECE">ECE
            </option>
            <option value="BT">BT
            </option>
            <option value="MECHENICAL">MECHENICAL
            </option>
            <option value="EEE">EEE
            </option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <strong>YEAR:
          </strong>
        </td>
        <td>
          <select name="year" required>
            <option >Select Year
            </option>
            <option value="FIRST">FIRST
            </option>
            <option value="SECOND">SECOND
            </option>
            <option value="THIRD">THIRD 
            </option>
            <option value="FOURTH">FOURTH
            </option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <strong>SEMESTER:
          </strong>
        </td>
        <td>
          <select name="semester" required>
            <option >Select Semester
            </option>
            <option value="FIRST">FIRST
            </option>
            <option value="SECOND">SECOND
            </option>
            <option value="THIRD">THIRD
            </option>
            <option value="FOURTH">FOURTH
            </option>
            <option value="FIFTH">FIFTH
            </option>
            <option value="SIXTH">SIXTH
            </option>
            <option value="SEVENTH">SEVENTH
            </option>
            <option value="EIGHTH">EIGHTH
            </option>
          </select>
        </td>
      </tr>
      
      <tr>
        <td>
          <strong>ADDRESS:
          </strong>
        </td>
        <td>
          <input type="text" name="address"required placeholder="ADDRESS" size="30" />
        </td>
      </tr>
      <td>&nbsp;
      </td>
      <td>
        <input type="submit" name="submit" value="UPDATE" />
      </td>
      </tr>
    </table>
  </form>
</center>
</body>
<?php
require'db_conn.php';
$sn = $_REQUEST['sn'];
$session = $_REQUEST['session'];
$rn = $_REQUEST['rn'];
$branch = $_REQUEST['branch'];
$year = $_REQUEST['year'];
$semester = $_REQUEST['semester'];
$address = $_REQUEST['address'];
$cap1 = strtoupper($sn);
$cap2 = strtoupper($address);
if (isset($_REQUEST['submit'])) {
$q1 = mysql_query("UPDATE student_info SET Student_Name='$cap1',session='$session',rn='$rn',branch='$branch',year='$year',semester='$semester',address='$cap2' where rn =$rn");
if ($q1) {
echo"Record Successfully Updated";
} else {
echo"Not Update Your Record";
}
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
</br
</br>
</br>
</br>WELCOME TO STUDENT INFORMATION SYSTEM..
</marquee>
</font>
</h1>
</html>
