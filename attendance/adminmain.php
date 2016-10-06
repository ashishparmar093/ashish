<?php
ob_start();
include 'db_conn.php';
?>
<?php
if(!isset($_SESSION['login']))
    header('Location:start.php');

?>


<html>
    <head>
        <link rel="stylesheet" type="text/css" href="profile.css"/>
        <title>User Profile</title>
        
    </head>
    <body>
        <div class="wrapper"> <! -- wrapper start -->
<div class="header"> 
     <h1 align="center"><font color="BLACK">ONLINE ATTENDANCE MANAGEMENT SYSTEM</font></h1></h2>
        </div>
       <img src="ad.jpg" height="450" width="1300"></h2>
  
  </div>
           <div class="leftpanel"> <! --leftpanel start -->
         <table>
             
             <tr></tr><tr></tr><tr></tr>
             <tr><td><a href="tindex.php"><font size='4'>TEACHERS..!</font></a></td></tr>
                         <tr></tr><tr></tr><tr></tr>
                         <tr></tr><tr></tr><tr></tr>

             <tr><td><a href="rindex.php"><font size='4'>TIME TABLE</br>
                         MANAGEMENT..!</font></font></a><td></tr>
                          <tr></tr><tr></tr><tr></tr>
                          <tr></tr><tr></tr><tr></tr>

             
             <tr><td><a href="quickschedule.php"><font size='4'>QUICK SCHEDULE..!</font></a><td></tr>
                            <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
                            <tr></tr><tr></tr><tr></tr>
                            <tr></tr><tr></tr><tr></tr>

	</table>                 
      </div>

<div class="content"> <! -- content start --><!-- content end --></div>

<div class="rightpanel"> <!--rightpanel start -->
         
<table>
             <tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
             <tr><td><a href="index.php"><font size='4'>STUDENTS..!</font></a><td></tr>            
                          <tr></tr><tr></tr><tr></tr>
                          <tr></tr><tr></tr><tr></tr>

            
             <tr><td><a href="subindex.php"><font size='4'>SUBJECTS..!</font></a><td></tr> 
                          <tr></tr><tr></tr><tr></tr>
                          <tr></tr><tr></tr><tr></tr>

             <tr><td><a href="adminlogout.php"><font size='4'>LOGOUT..!</font></a><td></tr>   
                         <tr></tr><tr></tr><tr></tr>

            
               </table>
             
</div>

    </div>
    
    <div class="footer"><br>
             <h2><marquee  font-weight="bold" >WELCOME TO THE ADMIN AREA..</marquee>
        
             </div>
    </body>
   
</html>
