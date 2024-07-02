<?php
include 'koneksi.php';

$kd_pelanggan = $_POST['kd_pelanggan'];

$sql = "DELETE FROM pelanggan WHERE Kd_Pelanggan='$kd_pelanggan'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
