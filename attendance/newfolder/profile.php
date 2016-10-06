<?php
include 'dbconn.php';
if(!isset($_SESSION['login']))
    header('Location:start.php');
    $email=$_SESSION['mail'];
    $sql = "SELECT FirstName,LastName FROM teacher WHERE EmailId='$email' ";
    $result=mysql_query($sql) or die(mysql_error());
    $row = mysql_fetch_array($result);
    $fname = $row[0];
    $lname = $row[1];
?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="profile.css"/>
        <title>Your Profile</title>
        
    </head>
    <body>
        <div class="wrapper"> <! -- wrapper start -->

<div class="header"> 
  <br/><br/><br/><br/><br/>
  <h1><font size="15" color="white"><strong>Welcome Back <?php echo "$fname"." "."$lname " ?>!</strong></font></h1>
  <h2><a href="logout.php"><font color="white" size="5">Logout</font></a></h2>
  </div>
            
           <div class="rightpanel"> <! -- rightpanel start -->
      
         <table>
             <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
             <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
             <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
             <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
             <tr><td><a href="yourdetails.php">Teacher's Details</a></td></tr>
             <tr></tr><tr></tr><tr></tr>
             <tr><td><a href="send.php">Send Assignments</a><td></tr>
             <tr></tr><tr></tr><tr></tr>
             <tr><td><a href="check.php">Check Assignments</a></td></tr>
             </table>
               
                  
</div><!-- rightpanel end -->


 <div class="footer"></div>

        </div>
        
    </body>
</html>