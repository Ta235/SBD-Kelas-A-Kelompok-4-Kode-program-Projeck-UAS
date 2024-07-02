<?php
include 'koneksi.php';

$kd_barang = $_POST['kd_barang'];
$nama_barang = $_POST['nama_barang'];
$harga_barang = $_POST['harga_barang'];
$satuan = $_POST['satuan'];

$sql = "INSERT INTO barang (Kd_Barang, Nama_Barang, Harga_Barang, Satuan) VALUES ('$kd_barang', '$nama_barang', '$harga_barang', '$satuan')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
