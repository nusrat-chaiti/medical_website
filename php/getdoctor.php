<?php

	$Name = $_POST['Name'];

	$conn = mysqli_connect('localhost', 'root', '', 'web');
	$sql= "select * from interns where Name like '%{$Name}%'";

	$result = mysqli_query($conn, $sql);

	$data = "<table border=1> 
				<tr>
					<td>Name</td>
					<td>Email</td>
					<td>Phone</td>
                    <td>Gender</td>
                    <td>User Type</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
			$data .= "<tr>
							<td>{$row['Name']}</td>
							<td>{$row['Email']}</td>
							<td>{$row['Phone']}</td>
                            <td>{$row['Gender']}</td>
                            <td>{$row['User_Type']}</td>
					</tr>";
	}

	$data .= "</table>";

	echo $data;

?>