<?php
include 'koneksi.php';

$sql = "SELECT * FROM transaksi";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Kd Invoice</th><th>Kd Pelanggan</th><th>Kd Barang</th><th>Kd Staff</th><th>Kd Jasa</th><th>Tanggal Beli</th><th>Jumlah barang</th><th>Jumlah Jasa</th><th>Harga</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["kd_invoice"]. "</td><td>" . $row["kd_pelanggan"]. "</td><td>" . $row["kd_barang"]. "</td><td>" . $row["kd_staff"]. "</td><td>" . $row["kd_jasa"]. "</td><td>" . $row["tanggal_beli"]. "</td><td>" . $row["jumlah_barang"]. "</td><td>" . $row["jumlah_jasa"]. "</td><td>" . $row["harga"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$koneksi->close();
?>
