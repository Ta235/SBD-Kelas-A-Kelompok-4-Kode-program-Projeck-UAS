<?php
include 'koneksi.php';

$kd_barang = $_POST['kd_barang'];

$sql = "DELETE FROM barang WHERE Kd_Barang='$kd_barang'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
