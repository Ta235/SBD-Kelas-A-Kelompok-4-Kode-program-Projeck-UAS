<?php
include 'koneksi.php';

$sql = "SELECT * FROM barang";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Kd Barang</th><th>Nama Barang</th><th>Harga Barang</th><th>Satuan</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Kd_barang"]. "</td><td>" . $row["Nama_Barang"]. "</td><td>" . $row["Harga_Barang"]. "</td><td>" . $row["Satuan"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$koneksi->close();
?>
