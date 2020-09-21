<?php
$mysqli = new mysqli("127.0.0.1", "root", "", "online_doctor");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT hospital_id, name, address, city, email, phone
FROM hospital WHERE hospital_id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($hid, $name, $address, $city, $email, $phone);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<br>";
echo "<th>Hospital ID</th>";
echo "<td>" . $hid . "</td>";
echo "<th>Hospital Name</th>";
echo "<td>" . $name . "</td>";
echo "<th>Address</th>";
echo "<td>" . $address . "</td>";
echo "<th>City</th>";
echo "<td>" . $city . "</td>";
echo "<th>Email</th>";
echo "<td>" . $email . "</td>";
echo "<th>Phone</th>";
echo "<td>" . $phone . "</td>";
echo "</tr>";
echo "</table>";
?>