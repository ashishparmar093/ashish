 <table border="1">
    <tr>
    	
		<th>Student Name</th>
		
                <th>session</th>
                <th>Roll No</th>
                <th>Branch</th>
                <th>year</th>
                <th>semester</th>
                <th>Attendance</th>
	</tr>
	<?php
	//connection to mysql
	mysql_connect("localhost", "root", ""); //server , username , password
	mysql_select_db("attendance");
	
	//query get data
	$sql = mysql_query("SELECT * FROM student_info ORDER BY rn ASC");
	$no = 1;
	while($data = mysql_fetch_assoc($sql)){
		echo '
		<tr>
			
			<td>'.$data['Student_Name'].'</td>
			
                        <td>'.$data['session'].'</td>
			<td>'.$data['rn'].'</td>
			<td>'.$data['branch'].'</td>
			<td>'.$data['year'].'</td>
			<td>'.$data['semester'].'</td>
			
		</tr>
		';
		$no++;
	}
	?>
</table>