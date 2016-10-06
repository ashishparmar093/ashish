<?php
ob_start();
include 'db_conn.php';
?>

<?php
if(isset($_REQUEST['sbmt']) || isset($_COOKIE['id']) && isset($_COOKIE['pwd'])){
     if(isset($_COOKIE['id']) && isset($_COOKIE['pwd'])){
         $uid=$_COOKIE['id'];
         $passwrd=$_COOKIE['pwd'];
     }
     else{
         $uid=$_REQUEST['id'];
         $passwrd=md5($_REQUEST['pwd']);
     }
     $user_type=$_REQUEST['user_type'];
 $sql="SELECT Admin_Id,Password FROM admin WHERE Admin_Id='$uid' AND Password='$passwrd'";
 $result=mysql_query($sql) or die(mysql_error());
 $row = mysql_fetch_array($result);

 $sql1="SELECT Teacher_ID,Password,Teacher_Name FROM teachers WHERE Teacher_ID='$uid' AND Password='$passwrd'";
 $result1=mysql_query($sql1) or die(mysql_error());
 $row1 = mysql_fetch_array($result1);
 
//if($_REQUEST['user_type'] == 11){
 if($user_type=='admin'){
 if($uid==$row[0] && $passwrd==$row[1]){
     
     if($_REQUEST['chk']==1){
         setcookie('id',$uid,time()+3600);
         setcookie('pwd',$passwrd,time()+3600);
     }
     $_SESSION['login'] = 1;
     $_SESSION['id'] = $uid;
     header('location:adminmain.php');
 }
 }
 //}
 //else if($_REQUEST['user_type'] == 12){
 else if($user_type=='user'){
 if($uid==$row1[0] && $passwrd==$row1[1])
     {
     
     if($_REQUEST['chk']==1)
         {
         setcookie('id',$uid,time()+3600);
         setcookie('pwd',$passwrd,time()+3600);
     }
     $_SESSION['login'] = 1;
     $_SESSION['id'] = $uid;
     header('location:tprofile.php');
 }
 }

   //  }
 else {
      $error = 0;
 }
} 

?>

<html>
    <head>
        <title>ONLINE ATTENDANCE MANAGEMENT SYSTEM</title>
        <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
         <style type="text/css">
       body {
    background: url(online-attendance.jpg);
    background-size: 100% 100%;
}
    </style>
         
        <form action="" method="POST">
      
   <div class="wrapper">
        <div class="header">
             <h1 align="center">ONLINE ATTENDANCE MANAGEMENT SYSTEM</h1> 
        </div>
      
        
       <div class="leftpanel">
       <table align="center" cellspacing="15" >
              <tr>
                <td><strong><font size="4" color="red">User ID:</font></strong></td>
                <td><input type="text" name="id" required placeholder="USER_ID"/></td>
              </tr>
                
              <tr>
                <td><strong><font size="4" color="red">Password:</font></strong></td>
                <td><input type="password" name="pwd"  required placeholder="PASSWORD"/></td>
              </tr>
              <tr><td><strong><font size="4" align="center" color="red" value="User Type" >
              User Type:</font></strong><br></td>
              <td><select name="user_type">
              <option value="admin">Administrator</option>
              <option value="user">Teacher</option>
              </td></tr>
              <tr>
                  
                  <td><strong><font size="4" align="center" color="red">Select Date:</font></strong><br></td>
                  <td><input type="Date" id="DATE" name="DATE" value="current date" required></td>
                  
              </tr><br><br><br>
              <tr>
                 <td><strong><font size="4" align="center" color="red">Remember Me:</font></strong></td>
                 <td><input type="checkbox" name="chk" value="1"/></td>
              </tr>
              <tr>
                <td></td><br><br>
              <td><input type="submit" name="sbmt" value="Login" id="popUpYes"/>&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"></td>
              </tr>
            </table>
          
                </br></br></br> </br></br>
                <?php
                    if(isset($_REQUEST['sbmt']) && $error==0){
                    echo "<font size='4' color='black'>"; 
                    echo "Please enter a valid user id and password";
                    echo "</font>";
                    }
                ?> 
       </div>
       
        <div class="content"></div>
        
        <div class="rightpanel">
           
        </div>
        
        </div>
        </form>
            
           <div class="footer">
           <h2><marquee  font-weight="bold"></br>WELCOME TO ONLINE ATTENDANCE SYSTEM (Developed By:-Ashish Kumar)..</marquee></h2>    
           </div>
     </body>
     
</html>
