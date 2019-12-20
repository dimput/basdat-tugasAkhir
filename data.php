<?php
include "conn.php";
$sql = "SELECT count(*) as jumlah_customers FROM user";
$results = $conn->query($sql);
// var_dump($result);
if ($result->num_rows > 0) {
    $rows= $results->fetch_assoc();
} else {
    echo "0 results";
}
$conn->close();
?>