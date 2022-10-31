<?php
header('Content-Type: application/json');
$conn = mysqli_connect("127.0.0.1","root","0918","path");

$sqlQuery = "SELECT district,population FROM statics ORDER BY district";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>