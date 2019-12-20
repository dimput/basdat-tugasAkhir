<?php
include "conn.php";
$sql = "SELECT * FROM user";
$results = $conn->query($sql);
// var_dump($result);
if ($results->num_rows > 0) {
    $customers = array();
    while($data_customer = $results->fetch_assoc()) {
        array_push($customers,$data_customer);
    }
} else {
    echo "0 results";
}
$conn->close();
?>