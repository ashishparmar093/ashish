<?php  
define(db_host, "localhost");  
define(db_user, "attendance");  
define(db_pass, "attendance");  
define(db_link, mysql_connect(db_host,db_user,db_pass));  
define(db_name, "attendance");  
mysql_select_db(db_name);  
$select = "SELECT * FROM attendance";                  
$export = mysql_query($select);  
$fields = mysql_num_fields($export); 
for ($i = 0; $i < $fields; $i++) {  
    $header .= mysql_field_name($export, $i) . "\t";  
}  
while($row = mysql_fetch_row($export)) {  
    $line = '';  
    foreach($row as $value) {                                              
        if ((!isset($value)) OR ($value == "")) {  
            $value = "\t";  
        } else {  
            $value = str_replace('"', '""', $value);  
            $value = '"' . $value . '"' . "\t";  
        }  
        $line .= $value;  
    }  
    $data .= trim($line)."\n";  
}  
$data = str_replace("\r","",$data);  
if ($data == "") {  
    $data = "\n(0) Records Found!\n";                          
}  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=attendance.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
print "$header\n$data";  
?>