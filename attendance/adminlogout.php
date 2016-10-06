<?php

include 'db_conn.php';
setcookie('email', '', time() - 3600);
setcookie('pwd', '', time() - 3600);
session_destroy();
header('Location:start.php');

?>