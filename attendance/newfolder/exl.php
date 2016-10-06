<?php 
$table = 'table_name';
$filename = tempnam(sys_get_temp_dir(), "csv");

$conn = mysql_connect("localhost", "mysql_user", "mysql_password");
mysql_select_db("db",$conn);

$file = fopen($filename,"w");

// Write column names
$result = mysql_query("show columns from $table",$conn);
for ($i = 0; $i < mysql_num_rows($result); $i++) {
    $colArray[$i] = mysql_fetch_assoc($result);
    $fieldArray[$i] = $colArray[$i]['Field'];
}
fputcsv($file,$fieldArray);

// Write data rows
$result = mysql_query("select * from $table",$conn);
for ($i = 0; $i < mysql_num_rows($result); $i++) {
    $dataArray[$i] = mysql_fetch_assoc($result);
}
foreach ($dataArray as $line) {
    fputcsv($file,$line);
}

fclose($file);

header("Content-Type: application/csv");
header("Content-Disposition: attachment;Filename=cars-models.csv");

// send file to browser
readfile($filename);
unlink($filename);
?>
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=document_name.xls");

// Send file to browser
readfile($filename);
unlink($filename);