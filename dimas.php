<?php
include "conn.php";
// $sql = "SELECT namaPenjual as label,idPenjual as y FROM penjual";
$sql = "SELECT COUNT(`idProdukPembelian`) AS y,namaPenjual as label FROM (SELECT * FROM pembelian
JOIN penjual ON pembelian.`idPenjual_Pembelian`=penjual.`idPenjual`
WHERE penjual.`idPenjual`=1) AS X
UNION
SELECT COUNT(`idProdukPembelian`) AS y,namaPenjual as label FROM (SELECT * FROM pembelian
JOIN penjual ON pembelian.`idPenjual_Pembelian`=penjual.`idPenjual`
WHERE penjual.`idPenjual`=2) AS X
UNION
SELECT COUNT(`idProdukPembelian`) AS y,namaPenjual as label FROM (SELECT * FROM pembelian
JOIN penjual ON pembelian.`idPenjual_Pembelian`=penjual.`idPenjual`
WHERE penjual.`idPenjual`=3) AS X
UNION
SELECT COUNT(`idProdukPembelian`) AS y,namaPenjual as label FROM (SELECT * FROM pembelian
JOIN penjual ON pembelian.`idPenjual_Pembelian`=penjual.`idPenjual`
WHERE penjual.`idPenjual`=4) AS X
UNION
SELECT COUNT(`idProdukPembelian`) AS y,namaPenjual as label FROM (SELECT * FROM pembelian
JOIN penjual ON pembelian.`idPenjual_Pembelian`=penjual.`idPenjual`
WHERE penjual.`idPenjual`=5) AS X";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $dimas= array();
    $rowx = $result->fetch_assoc();
    $a=array("a"=>"red","b"=>"green");
    while($rowx = $result->fetch_assoc()) {
        array_push($dimas,$rowx);
    }
    // print_r($a);
    // print_r($dimas);
} else {
    echo "0 results";
}
$conn->close();
?>