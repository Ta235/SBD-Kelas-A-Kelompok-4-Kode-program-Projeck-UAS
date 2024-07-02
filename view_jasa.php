<?php
include 'koneksi.php';

$sql = "SELECT * FROM jasa";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    // echo "$result";
    echo "<table border='1'><tr><th>Kd Jasa</th><th>Nama Jasa</th><th>Harga</th><th>Satuan</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["kd_jasa"]. "</td><td>" . $row["Nama_jasa"]. "</td><td>" . $row["Harga"]. "</td><td>" . $row["Satuan"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$koneksi->close();
?>
