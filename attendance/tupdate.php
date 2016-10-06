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
        var tid = document.reg.tid.value;
        var tpwd = document.reg.tpwd.value;
        var tpwd = document.reg.tpwd.value;
        var tname = document.reg.tname.value;
        var ini = document.reg.ini.value;
        var dept = document.reg.dept.value;
        var design = document.reg.design.value;
        var email = document.reg.email.value;
        var contact = document.reg.contact.value;
        var eduqual = document.reg.eduqual.value;
        if (tid === '')
        {
          window.alert("Teacher's Id");
          document.reg.tid.focus();
          return false;
        }
        if (tname === '')
        {
          window.alert("Teacher's Name");
          document.reg.tname.focus();
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
          window.alert("Department");
          document.reg.dept.focus();
          return false;
        }
        if (design === '')
        {
          window.alert("Designation");
          document.reg.design.focus();
          return false;
        }
        if (email === '')
        {
          window.alert("Email Id");
          document.reg.email.focus();
          return false;
        }
        if (contact === '')
        {
          window.alert("Contact Details");
          document.reg.contact.focus();
          return false;
        }
        if (eduqual === '')
        {
          window.alert("Education Qualification");
          document.reg.eduqual.focus();
          return false;
        }
      }
    </script>
  </head>
  <body link="red">
    <style type="text/css">
      body {
        background: url(teacher.jpg);
        background-size: 100% 100%;
      }
    </style>
    <body>
      <center>
        <form method="POST" action="" name="reg" onSubmit="return validate()">
          <table border="8" bgcolor="skyblue"> 
            <h1 >
              <font color="white">
                <b>TEACHER INFORMATION MANAGEMENT SYSTEM
                </b>
              </font>
            </h1>
            <br>
            <a href="tindex.php">ADD
            </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="tupdate.php">UPDATE
            </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="tdelete.php">DELETE
            </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="tsearch.php">SEARCH
            </a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="adminmain.php">BACK
            </a>
            <br>
            <br>
            </center>
          <tr>
            <td>Teacher's Id:
            </td>
            <td>
              <input type="text" name="tid" placeholder="Teacher's Id" required/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </td>
          </tr>
          <tr>
            <td>Enter Password:
            </td>
            <td>
              <input type="password" name="tpwd" required placeholder="Enter Password"/>
            </td>
          </tr>
          <tr>
            <td>Teacher's Name:
            </td>
            <td>
              <input type="text" name="tname" required placeholder="Teacher's Name"/>
            </td>
          </tr>
          <tr>
            <td>Teacher's Initial:
            </td>
            <td>
              <input type="text" name="ini" required placeholder="Teacher's Initial"/>
            </td>
          </tr>
          <td>Department
          </td>
          <td>
            <select name="Department">
              <option >Select Department
              </option>
              <option value="CSE">CSE
              </option>
              <option value="ECE">ECE
              </option>
              <option value="BT">BT
              </option>
              <option value="MECHNICAL">MECHANICAL
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
            <option >Select Designation
            </option>
            <option value="Ast.Prof">Ast.Prof
            </option>
            <option value="Prof">Prof
            </option>
          </select>
        </td>
        </tr>
      <td>Email Id:
      </td>
      <td>
        <input type="email" name="email" required placeholder="Email Id" size="20"/>
      </td>
      </tr>
    <tr>
      <td>Contact Details:
      </td>
      <td>
        <input type="text" name="contact" required placeholder="Contact Details"/>
      </td>
    </tr>
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
  <tr>
    <td>&nbsp;
    </td>
    <td>
      <input type="submit" name="submit" value="UPDATE" />
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
$tname = $_REQUEST['tname'];
$ini = $_REQUEST['ini'];
$dept = $_REQUEST['Department'];
$design = $_REQUEST['Designation'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contact'];
$eduqual = $_REQUEST['Education'];
$cap1 = strtoupper($tid);
$cap2 = strtoupper($tname);
$cap3 = strtoupper($dept);
if (isset($_REQUEST['submit'])) {
$q1 = mysql_query("UPDATE teachers SET Teacher_Name='$cap2',Initials='$ini',Department='$cap3',Designation='$design',Email='$email',Contact_Details='$contact',Education_Qualification='$eduqual',Password='$tpwd' where Teacher_ID ='$tid'") or die(mysql_error());
if ($q1) {
echo "Record Succesfully Updated";
} else {
echo "Record not updated";
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
</br>WELCOME TO TEACHER INFORMATION SYSTEM..
</marquee>
</font>
</h1>
</html> 
