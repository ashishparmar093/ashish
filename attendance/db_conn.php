<?php
ob_start();
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="attendance";
$conn=mysql_connect("$dbhost","$dbuser","$dbpass") or die("could not connect to mysql");
mysql_select_db($dbname,$conn);
?>