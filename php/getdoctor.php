<?php

	$Name = $_POST['Name'];

	$conn = mysqli_connect('localhost', 'root', '', 'online_doctor');
	$sql= "select * from customer where name like '%{$Name}%'";

	$result = mysqli_query($conn, $sql);

	$data = "<table border=1> 
				<tr>
					<td>Name</td>
					<td>Email</td>
					
                    <td>Gender</td>
                    <td>User Type</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
			$data .= "<tr>
							<td>{$row['name']}</td>
							<td>{$row['email']}</td>
							
                            <td>{$row['gender']}</td>
                            <td>{$row['user_type']}</td>
					</tr>";
	}

	$data .= "</table>";

	echo $data;

?>
