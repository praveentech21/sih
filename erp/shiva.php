<?php
include 'connect.php';

// Query the database to retrieve your values
$sql = "SELECT `score` FROM teacher";
$result = mysqli_query($con, $sql);

// Fetch the data and store it in an array
$data = array();
while ($row =mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Convert the data to JSON format
$json_data = json_encode($data);

// Send the JSON data to the JavaScript code
echo $json_data;
?>
