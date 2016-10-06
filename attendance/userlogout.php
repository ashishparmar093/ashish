<?php 
include 'db_conn.php';
session_destroy();
setcookie('id','',time()-3600);
setcookie('pwd','',time()-3600);
header('Location:start.php');
?>