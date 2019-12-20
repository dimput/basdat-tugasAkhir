<?php
include "conn.php";
$sql = "SELECT count(*) as jumlah_order FROM pembelian";
$result = $conn->query($sql);
// var_dump($result);
if ($result->num_rows > 0) {
    $row= $result->fetch_assoc();
} else {
    echo "0 results";
}
$conn->close();
?>