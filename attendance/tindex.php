<?php
ob_start();
include 'db_conn.php';
if (!isset($_SESSION['login']))
header('Location:start.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <script language="javascript">
      function validate()
      {
        var tid = document.reg.tid.value;
        var tpwd = document.reg.tpwd.value;
        var fn = document.reg.fn.value;
        var ini = document.reg.ini.value;
        var dept = document.reg.dept.value;
        var design = document.reg.design.value;
        var email = document.reg.email.value;
        var contact = document.reg.contact.value;
        var eduqual = document.reg.eduqual.value;
        if (tid === '')
        {
          window.alert("Please Enter Teacher_ID!");
          document.reg.tid.focus();
          return false;
        }
        if (fn === '')
        {
          window.alert("Please Enter Teacher_Name!");
          document.reg.fn.focus();
          return false;
        }
        if (ini === '')
        {
          window.alert("Please Enter Teacher_Initial_Name!");
          document.reg.ini.focus();
          return false;
        }
        if (dept === '')
        {
          window.alert("Please Select Department!");
          document.reg.dept.focus();
          return false;
        }
        if (design === '')
        {
          window.alert(" Please Enter Designation!");
          document.reg.design.focus();
          return false;
        }
        if (email === '')
        {
          window.alert("Please Enter Email!");
          document.reg.email.focus();
          return false;
        }
        if (contact === '')
        {
          window.alert("Contact_Details!");
          document.reg.contact.focus();
          return false;
        }
        if (eduqual === '')
        {
          window.alert("Education_Qualification!");
          document.reg.eduqual.focus();
          return false;
        }
      }
    </script>
    <title>Add Teacher
    </title>
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
        <font color ="white">TEACHER INFORMATION SYSTEM
        </font>
      </h1>
      </h2>
    <form method="REQUEST" action="" >
      <center>
        <table border="8" bgcolor="skyblue"> 
          <h1 >
            <font color="red">
              <b>
              </b>
            </font>
          </h1>
          <br>
          <a href="tindex.php">ADD
          </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <a href="tupdate.php">UPDATE
          </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <a href="tdelete.php">DELETE
          </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <a href="tsearch.php">SEARCH
          </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <a href="adminmain.php">BACK
          </a>
          <br>
          <br>
          </center>
        <tr>
          <td>Teacher's ID:
          </td>
          <td>
            <input type="text" name="tid" required placeholder="Teacher's ID"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          </td>
        </tr>
        <tr>
          <td>Enter Password:
          </td>
          <td>
            <input type="password" name="tpwd"required placeholder="Enter Password" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          </td>
        </tr>
        <tr>
          <td>Teacher's Name:
          </td>
          <td>
            <input type="text" name="fn" required placeholder="Teacher's Name" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          </td>
        </tr>
        <tr>
          <td>Teacher's Initial Name:
          </td>
          <td>
            <input type="text" name="ini" required placeholder="Teacher's Initial Name" />&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          </td>
        </tr>
        <tr>
          <td>Department&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          </td>
          <td>
            <select name="Department">
              <option >select Department
              </option>
              <option value="CSE">CSE
              </option>
              <option value="ECE">ECE
              </option>
              <option value="BT">BT
              </option>
              <option value="MECHNICAL">MECHNICAL
              </option>
              <option value="EEE">EEE
              </option>
            </select>
          </td>
        </tr>
        <td>Designation
        </td>
        <td>
          <select name="Designation">
            <option >select Designation
            </option>
            <option value="Ast.Prof">Ast.Prof
            </option>
            <option value="Prof">Prof
            </option>
          </select>
        </td>
        </tr>
      <tr>
        <td>Email:
        </td>
        <td>
          <input type="text" name="email" required placeholder="Email"/>
        </td>
      </tr>
      <tr>
        <td>Contact Details:
        </td>
        <td>
          <input type="text" name="contact" required placeholder="Contact Details"/>
        </td>
      </tr>
      <tr>
        <td>Education Qualification:
        </td>
        <td>
          <select name="Education">
            <option >Education Qualification
            </option>
            <option value="B.TECH">B.TECH
            </option>
            <option value="M.TECH">M.TECH
            </option>
            <option value="Phd">Phd
            </option>
          </select>
        </td>
      </tr>
      <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
      </td>
      <td>
        <input type="submit" name="submit" value="ADD" />
      </td>
      </tr>
    </table>
  </form>
</body>
</html>
<?php
include 'db_conn.php';
$tid = $_REQUEST['tid'];
$tpwd = md5($_REQUEST['tpwd']);
$fn = $_REQUEST['fn'];
$ini = $_REQUEST['ini'];
$dept = $_REQUEST['Department'];
$design = $_REQUEST['Designation'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];
$eduqual = $_REQUEST['Education'];
$cap1 = strtoupper($tid);
$cap2 = strtoupper($fn);
if (isset($_REQUEST['submit'])) {
$q1 = mysql_query("insert into teachers values('$cap1','$cap2','$ini','$dept','$design','$email','$contact','$eduqual','$tpwd')");
if ($q1) {
echo "Record Successfully Add";
} else {
echo "Record not added!";
}
}
?>
<h1 >
  <font color="white">
    <b>
    </b>
    <marquee>
      </br>
    </br>
  </br>
</br>
</br>WELCOME TO TEACHER INFORMATION SYSTEM..
</marquee>
</font>
</h1>
</html> 
