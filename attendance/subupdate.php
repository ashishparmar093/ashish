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
        var subcode = document.reg.subcode.value;
        var subname = document.reg.subname.value;
        var year = document.reg.year.value;
        var sem = document.reg.sem.value;
        var stream = document.reg.stream.value;
        var ini = document.reg.ini.value;
        if (subcode === '')
        {
          window.alert("Please Enter Subject code!");
          document.reg.subcode.focus();
          return false;
        }
        if (subname === '')
        {
          window.alert("Please Enter Subject Name!");
          document.reg.subname.focus();
          return false;
        }
        if (year === '')
        {
          window.alert("Select Year!");
          document.reg.year.focus();
          return false;
        }
        if (sem === '')
        {
          window.alert("Please Select Branch!");
          document.reg.sem.focus();
          return false;
        }
        if (stream === '')
        {
          window.alert("Please Select stream!");
          document.reg.stream.focus();
          return false;
        }
        if (ini === '')
        {
          window.alert("Please Enter Teacher_Initial_Name!");
          document.reg.ini.focus();
          return false;
        }
      }
    </script>
  </head>
  <body link="red" align='center'>
    <style type="text/css">
      body {
        background: url( sub.jpg);
        background-size: 100% 100%;
      }
    </style>
    <h1 align="center">
      <font color ="black">SUBJECT DETAILS
      </font>
    </h1>
    </h2>
  <form method="REQUEST" action="" he>
    <center>
      <table border="8" bgcolor="Snow">
        <font color="red">
          <b>
            <br>
            <a href="subindex.php">ADD
            </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="subupdate.php">UPDATE
            </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="subsearch.php">SEARCH
            </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="adminmain.php" >BACK
              </font>
            </a>
          </b>
        <br>
        <br>
        </center>
      <tr>
        <td>
          <strong>SUBJECT CODE:
          </strong>
        </td>
        <td>
          <input type="text" name="subcode" required placeholder="SUBJECT CODE" size="35"/>
        </td>
      </tr>
      <tr>
        <td>
          <strong>SUBJECT NAME:
          </strong>
        </td>
        <td>
          <input type="text" name="subname" required placeholder="SUBJECT NAME" size="35"/>
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
          <select name="sem"required>
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
          <strong>STREAM:
          </strong>
        </td>
        <td>
          <select name="stream" required>
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
          <strong>TEACHER'S INITIAL NAME:
            </td>
        <td>
          <input type="text" name="ini" required placeholder="TEACHER'S INITIAL NAME" />
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
include 'db_conn.php';
$subcode = $_REQUEST['subcode'];
$subname = $_REQUEST['subname'];
$year = $_REQUEST['year'];
$sem = $_REQUEST['sem'];
$stream = $_REQUEST['stream'];
$ini = $_REQUEST['ini'];
$cap1 = strtoupper($subcode);
$cap2 = strtoupper($subname);
if (isset($_REQUEST['submit'])) {
$q1 = mysql_query("UPDATE subject_table SET Subject_Code='$cap1',Subject_Name='$cap2',Year='$year',Sem='$sem',Stream='$stream',Initials='$ini' where Subject_Code='$cap1'");
if ($q1) {
echo "<font color='black' > Record Successfully Updated</font>";
} else {
echo "<font color='black' > Not Update Your Record</font>";
}
}
?>
</font>
<h1 >
  <font color="BLACK">
    <b>
    </b>
    <marquee>
      </br>
    </br>
  </br>
</br
</br>
</br>
</br>
</br>WELCOME TO SUBJECT INFORMATION SYSTEM..
</marquee>
</font>
</h1>
</html>