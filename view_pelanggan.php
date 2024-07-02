<?php
include 'koneksi.php';

$sql = "SELECT * FROM pelanggan";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Kd Pelanggan</th><th>Nama Pelanggan</th><th>Nomor pelanggan</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Kd_Pelanggan"]. "</td><td>" . $row["Nama_Pelanggan"]. "</td><td>" . $row["Nomor_pelanggan"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$koneksi->close();
?>
