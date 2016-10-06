<?php
include 'db_conn.php';
if (!isset($_SESSION['login']))
header('Location:start.php');
$id = $_SESSION['id'];
$sql = "select Teacher_Name from teachers where Teacher_ID='$id'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="tprofile.css"/>
    <title>User Profile
    </title>
  </head>
  <body link="red">
    <style type="text/css">
      body {
        background: url(tprofile.jpg);
        background-size: 100% 100%;
      }
    </style>
  </body>
  <div class="wrapper"> 
    <! -- wrapper start -->
    <div class="header"> 
      <h1 align="center">ONLINE ATTENDANCE MANAGEMENT
      </h1>
    </div>
    <h2>
      <marquee bgcolor="white" font-weight="bold">WELCOME  
        <?php echo $row[0]; ?>..
      </marquee>
    </h2>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
  </div>
  <div class="leftpanel"> 
    <! --leftpanel start -->
    <table>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
        <td>
          <a href="classes.php">ROUTINE..!
          </a>
        <td>
      </tr>        
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
        <td>
          <a href="viewatt.php">VIEW ATTENDANCE..!
          </a>
        </td>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
        <td>
          <a href="subject.php">ATTENDANCE..!
          </a>
        </td>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
        <td>
          <a href="myclasses.php">MY CLASSES..!
          </a>
        <td>
      </tr>
    </table>              
  </div>
  <div class="content"> 
    <! -- content start -->
    <!-- content end -->
  </div>
  <div class="rightpanel"> 
    <! --rightpanel start -->
    <table>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
      </tr>
      <tr>
        <td>
          <a href="userlogout.php">LOGOUT..!
          </a>
        <td>
      </tr>
    </table>
  </div>
  </div>
</body>
</html>
