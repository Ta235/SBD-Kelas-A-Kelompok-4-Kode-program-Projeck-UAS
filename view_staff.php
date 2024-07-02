<?php
include 'koneksi.php';

$sql = "SELECT * FROM staff";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Kd Staff</th><th>Nama Staff</th><th>Posisi</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Kd_Staff"]. "</td><td>" . $row["Nama_Staff"]. "</td><td>" . $row["Posisi"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$koneksi->close();
?>
