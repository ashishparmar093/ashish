<?php
ob_start();
include 'db_conn.php';
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=attendance-export.xls");
 
// Add data table
include 'data.php';
?>