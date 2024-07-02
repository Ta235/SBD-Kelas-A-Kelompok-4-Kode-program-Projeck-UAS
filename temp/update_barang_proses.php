<?php
include 'koneksi.php';

$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$satuan = $_POST['satuan'];

$sql = "UPDATE barang SET Nama_Barang='$nama_barang', Harga_Barang='$harga_barang', Satuan='$satuan' WHERE Kd_Barang='$kd_barang'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil diperbarui";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
